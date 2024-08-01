<?php

require __DIR__ . '/vendor/autoload.php';


use Fantasy1302\Quizapp\ClassInspector;

$inspector = new ClassInspector(Fantasy1302\Quizapp\Quiz::class);

$properties = $inspector->get_properties();
$methods = $inspector->get_methods();

echo "Properties:\n";
print_r($properties);

echo "\nMethods:\n";
print_r($methods);
