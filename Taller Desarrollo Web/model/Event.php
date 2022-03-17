<?php

class Event
{

    private $position;

    /**
     * @param $position
     * @param bool $type
     */
    public function __construct($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }
}