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
        $this->addQuestion('What is the capital of France?');
        $this->addQuestion('What is the capital of Germany?');
    }

    public function get_name()
    {
        return 'Quiz';
    }

    protected function addQuestion( $question )
    {
        $this->questions[] = $question;
    }

    private function calculateScore()
    {
        return 0;
    }
}
