<?php

namespace Alish\Telegram\Parser;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use ReflectionClass;
use ReflectionException;
use ReflectionProperty;

class Parser
{
    /**
     * @var string
     */
    protected $namespace = "Alish\Telegram\API\\";

    /**
     * @var DocBlockParser
     */
    protected $docBlockParser;

    public function __construct()
    {
        $this->docBlockParser = new DocBlockParser();
    }

    /**
     * @param string $class
     * @param array  $inputs
     *
     * @throws ReflectionException
     *
     * @return mixed
     */
    public function parser(string $class, array $inputs)
    {
        $class = $this->reviseClass($class);

        $properties = $this->getClassProperties($class);
        $concrete = new $class();

        foreach ($properties as $property) {
            [$propertyName] = $this->getPropertyAttributes($property);

            if (!$this->isInputValidFoProperty($property, $inputs)) {
                continue;
            }

            $this->setConcreteProperty($concrete, $property, $inputs[$propertyName]);
        }

        return $concrete;
    }

    /**
     * @param $concrete
     * @param ReflectionProperty $property
     * @param $value
     *
     * @throws ReflectionException
     */
    protected function setConcreteProperty($concrete, ReflectionProperty $property, $value)
    {
        [$propertyName, $propertyType, $propertySetter] = $this->getPropertyAttributes($property);

        if ($this->docBlockParser->isPrimaryType($propertyType)) {
            $concrete->$propertySetter($value);

            return;
        }

        if ($this->docBlockParser->isObjectType($propertyType)) {
            $output = $this->parser($propertyType, $value);
            $concrete->$propertySetter($output);

            return;
        }

        if ($this->docBlockParser->isArrayType($propertyType)) {
            $output = $this->parseArray($propertyType, $value);
            $concrete->$propertySetter($output);

            return;
        }
    }

    /**
     * @param $property
     * @param $inputs
     *
     * @return bool
     */
    protected function isInputValidFoProperty($property, $inputs)
    {
        [$propertyName, $propertyType, $propertySetter] = $this->getPropertyAttributes($property);

        return array_key_exists($propertyName, $inputs) && $propertySetter && $propertyType;
    }

    /**
     * @param ReflectionProperty $property
     *
     * @return array
     */
    protected function getPropertyAttributes(ReflectionProperty $property) : array
    {
        return [
            $key = $property->getName(),
            $this->docBlockParser->getTypeOfProperty($property),
            $this->docBlockParser->getSetter($key),
        ];
    }

    /**
     * @param string $class
     *
     * @return string
     */
    protected function reviseClass(string $class) : string
    {
        return Str::start($class, $this->namespace);
    }

    /**
     * @param string $class
     *
     * @throws ReflectionException
     *
     * @return ReflectionProperty[]
     */
    protected function getClassProperties(string $class)
    {
        $reflection = new ReflectionClass($class);

        return $reflection->getProperties();
    }

    /**
     * @param string $type
     * @param array  $value
     *
     * @return array
     */
    protected function parseArray(string $type, array $value) : array
    {
        $type = $this->docBlockParser->arrayType($type);

        return (new Collection($value))->map(function ($item) use ($type) {
            return $this->parser($type, $item);
        })->toArray();
    }

    /**
     * @param $className
     * @param array $inputs
     *
     * @throws ReflectionException
     *
     * @return mixed
     */
    public static function parse($className, array $inputs)
    {
        return (new self())->parser($className, $inputs);
    }
}
