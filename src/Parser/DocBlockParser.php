<?php

namespace Alish\Telegram\Parser;


use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use ReflectionProperty;

class DocBlockParser
{

    /**
     * @var array
     */
    protected $primaryTypes = [
        'string',
        'integer',
        'float',
        'double',
        'boolean',
        'bool',
        'true'
    ];

    /**
     * @param  string  $key
     * @return string
     */
    public function getSetter(string $key): string
    {
        return 'set'.Str::studly($key);
    }

    /**
     * @param  string  $key
     * @return string
     */
    public function getGetter(string $key): string
    {
        return 'get'.Str::studly($key);
    }

    /**
     * @param  ReflectionProperty  $property
     * @return string
     */
    public function getTypeOfProperty(ReflectionProperty $property): string
    {
        $types = $this->getTypes($property);

        if (!$types) {
            return null;
        }

        return $types->first(function ($type) {
            return strtolower($type) !== 'null';
        });
    }

    /**
     * @param  ReflectionProperty  $property
     * @return Collection
     */
    public function getTypes(ReflectionProperty $property): Collection
    {
        $matches = $this->getTypeMatches($property);

        if (count($matches) < 1) {
            return null;
        }

        return new Collection(explode('|', trim(str_replace('@var ', '', $matches[0]))));
    }

    /**
     * @param  ReflectionProperty  $property
     * @return array
     */
    public function getTypeMatches(ReflectionProperty $property): array
    {
        $comment = $property->getDocComment();
        preg_match('/@var .* /', $comment, $matches);
        return $matches;
    }

    /**
     * @param  string  $type
     * @return bool
     */
    public function isArrayType(string $type): bool
    {
        return !$this->isPrimaryType($type) && !$this->isObjectType($type);
    }

    /**
     * @param  string  $type
     * @return bool
     */
    public function isPrimaryType(string $type): bool
    {
        return in_array(strtolower($type), $this->primaryTypes);
    }

    /**
     * @param  string  $type
     * @return bool
     */
    public function isObjectType(string $type): bool
    {
        return !$this->isPrimaryType($type) && !strpos($type, '[]');
    }

    /**
     * @param  string  $type
     * @return string
     */
    public function arrayType(string $type): string
    {
        return preg_replace('/\[\]/', '', $type, 1);
    }

    /**
     * @param  ReflectionProperty  $property
     * @return bool
     */
    public function isNullable(ReflectionProperty $property): bool
    {
        $types = $this->getTypes($property);

        return $types->filter(function ($type) {
                return strtolower($type) === 'null';
            })->count() > 0;
    }

}