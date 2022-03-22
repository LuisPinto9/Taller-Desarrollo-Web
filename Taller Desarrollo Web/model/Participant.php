<?php

class Participant
{

    private $name;
    private $id;
    private $discipline;
    private $discipleType;
    private $event;
    private $eventPosition;

    /**
     * @param $name
     * @param $id
     * @param $discipline
     * @param $discipleType
     * @param $event
     * @param $eventPosition
     */
    public function __construct($name, $id, $discipline, $discipleType, $event, $eventPosition)
    {
        $this->name = $name;
        $this->id = $id;
        $this->discipline = $discipline;
        $this->discipleType = $discipleType;
        $this->event = $event;
        $this->eventPosition = $eventPosition;
    }


    /**
     * @return bool
     */
    public function isDiscipleType()
    {
        return $this->discipleType;
    }

    /**
     * @param bool $discipleType
     */
    public function setDiscipleType($discipleType)
    {
        $this->discipleType = $discipleType;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDiscipline()
    {
        return $this->discipline;
    }

    /**
     * @param mixed $discipline
     */
    public function setDiscipline($discipline)
    {
        $this->discipline = $discipline;
    }

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param mixed $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * @return mixed
     */
    public function getEventPosition()
    {
        return $this->eventPosition;
    }

    /**
     * @param mixed $eventPosition
     */
    public function setEventPosition($eventPosition)
    {
        $this->eventPosition = $eventPosition;
    }

    /*public function addEvent($event)
    {
        array_unshift($this->events, $event);
    }*/
}