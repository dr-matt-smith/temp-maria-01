<?php

namespace App\Entity;

class Answer
{
    private $id;
    private $text;

    /**
     * Answer constructor.
     *
     * @param $id
     * @param $text
     */
    public function __construct($id, $text)
    {
        $this->id = $id;
        $this->text = $text;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }




}
