<?php

require 'app/init.php';

use Fantasy1302\Quizapp\Quiz;

$quiz = new Quiz();

echo $quiz->get_name();
