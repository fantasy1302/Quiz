<?php

namespace Fantasy1302\Quizapp;

/**
 * Quiz class to represent a quiz.
 */
class Quiz
{
    private $title = "Sample Quiz";
    protected $questions = [];
    public $category = "General Knowledge";

    public function __construct()
    {
        $this->add_question('What is the capital of France?');
        $this->add_question('What is the capital of Germany?');
    }

    public function get_name()
    {
        return 'Quiz';
    }

    protected function add_question( $question )
    {
        $this->questions[] = $question;
    }

    private function calculate_score()
    {
        return 0;
    }
}
