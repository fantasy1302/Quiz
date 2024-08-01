<?php

use Fantasy1302\Quizapp\ClassInspector;
use PHPUnit\Framework\TestCase;

class ClassInspectorTest extends TestCase
{
    public function testGetProperties()
    {
        $inspector = new ClassInspector(Fantasy1302\Quizapp\Quiz::class);
        $properties = $inspector->get_properties();

        $expected = [
            'public' => ['category'],
            'protected' => ['questions'],
            'private' => ['title']
        ];

        $this->assertEquals($expected, $properties);
    }

    public function testGetMethods()
    {
        $inspector = new ClassInspector(Fantasy1302\Quizapp\Quiz::class);
        $methods = $inspector->get_methods();

        $expected = [
            'public' => ['__construct', 'get_name'],
            'protected' => ['addQuestion'],
            'private' => ['calculateScore']
        ];

        $this->assertEquals($expected, $methods);
    }
}
