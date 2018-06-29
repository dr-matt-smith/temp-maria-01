<?php

namespace App\Entity;


class AnswerCollection
{
    // shuffled array of answers
    private $answers;

    /**
     * @return mixed
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * @param mixed $answers
     */
    public function setAnswers($answers): void
    {
        $this->answers = $answers;
    }


    public function shuffleAnswers()
    {
        shuffle($this->answers);
    }


}
