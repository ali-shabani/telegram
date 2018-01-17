<?php

namespace Alish\Telegram\Parser;

class Parser {


    private $namespace = "Alish\Telegram\API\\";
    private $docBlockParser;

    public function __construct()
    {
        $this->docBlockParser = new DocBlockParser();
    }

    public function parser($className, $inputs)
    {
        $className = str_start($className, $this->namespace);
        $reflection = new \ReflectionClass($className);
        $properties = $reflection->getProperties();
        $instance = new $className;

        foreach ($properties as $property) {
            $key = $property->getName();
            $type = $this->docBlockParser->getTypeOfProperty($property);
            $setter = $this->docBlockParser->getSetter($key);

            if (!array_key_exists($key, $inputs) || !$setter || !$type) {
                continue;
            }

            $value = $inputs[$key];

            if ($this->docBlockParser->isPrimaryType($type)) {
                $instance->$setter($value);
            }
            else if ($this->docBlockParser->isObjectType($type)) {
                $output = $this->parser($type, $value);
                $instance->$setter($output);
            }
            else if ($this->docBlockParser->isArrayType($type)) {
                $output = $this->parseArray($type, $value);
                $instance->$setter($output);
            }

        }

        return $instance;
    }

    private function parseArray($type, $value)
    {
        $type = $this->docBlockParser->arrayType($type);
        foreach ($value as $item) {
            $output[] = $this->parser($type, $item);
        }

        return $output;
    }

    public static function parse($className, $inputs)
    {
        $parser = new self();
        return $parser->parser($className, $inputs);
    }

}