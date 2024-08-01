<?php

namespace Fantasy1302\Quizapp;

use ReflectionClass;
use ReflectionException;

/**
 * ClassInspector class to inspect class properties and methods.
 */
class ClassInspector
{
    /**
     * Class name to inspect.
     *
     * @var string
     */
    private $className;

    /**
     * Constructor.
     *
     * @param $className
     */
    public function __construct( $className  )
    {
        $this->className = $className;
    }

    /**
     * Get class properties.
     *
     * @throws ReflectionException
     */
    public function get_properties()
    {
        $reflectionClass = new ReflectionClass( $this->className );
        $properties = $reflectionClass->getProperties();

        $result = [
            'public' => [],
            'protected' => [],
            'private' => []
        ];

        foreach ( $properties as $property ) {
            if ($property->isPublic()) {
                $result['public'][] = $property->getName();
            } elseif ($property->isProtected()) {
                $result['protected'][] = $property->getName();
            } elseif ($property->isPrivate()) {
                $result['private'][] = $property->getName();
            }
        }

        return $result;
    }

    /**
     * Get class methods.
     *
     * @return array|array[]
     * @throws ReflectionException
     */
    public function get_methods()
    {
        $reflectionClass = new ReflectionClass( $this->className );
        $methods = $reflectionClass->getMethods();

        $result = [
            'public' => [],
            'protected' => [],
            'private' => []
        ];

        foreach ( $methods as $method ) {
            if ( $method->isPublic() ) {
                $result['public'][] = $method->getName();
            } elseif ( $method->isProtected() ) {
                $result['protected'][] = $method->getName();
            } elseif ( $method->isPrivate() ) {
                $result['private'][] = $method->getName();
            }
        }

        return $result;
    }
}
