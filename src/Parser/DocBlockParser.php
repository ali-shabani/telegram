<?php
/**
 * Created by PhpStorm.
 * User: pyramid
 * Date: 11/15/17
 * Time: 12:22 AM
 */

namespace Alish\Telegram\Parser;


class DocBlockParser
{

    private $primaryTypes = ['string', 'integer', 'float', 'double', 'boolean', 'bool', 'true'];

    public function getSetter($key)
    {
        return 'set' . studly_case($key);
    }

    public function getGetter($key)
    {
        return 'get' . studly_case($key);
    }

    public function getTypes(\ReflectionProperty $property)
    {
        $matches = $this->getTypeMatches($property);
        if (count($matches) < 1) {
            return null;
        }
        $types = collect(explode('|', trim(str_replace('@var ', '', $matches[0]))));
        return $types;
    }

    public function getTypeOfProperty(\ReflectionProperty $property)
    {
        $types = $this->getTypes($property);
        if (!$types) {
            return null;
        }
        $filtered = $types->filter(function ($type) {
            return strtolower($type) !== 'null';
        });

        return $filtered[0];
    }

    public function getTypeMatches(\ReflectionProperty $property)
    {
        $comment = $property->getDocComment();
        preg_match('/@var .* /', $comment, $matches);
        return $matches;
    }

    public function isPrimaryType($type) {
        return in_array(strtolower($type), $this->primaryTypes);
    }

    public function isObjectType($type) {
        return !$this->isPrimaryType($type) && !strpos($type, '[]');
    }

    public function isArrayType($type) {
        return !$this->isPrimaryType($type) && !$this->isObjectType($type);
    }

    public function arrayType($type)
    {
        return preg_replace('/\[\]/', '', $type, 1);
    }

    public function isNullable(\ReflectionProperty $property)
    {
        $types = $this->getTypes($property);
        $filtered = $types->filter(function ($type) {
            return strtolower($type) === 'null';
        });
        return count($filtered) > 0;
    }
    
}