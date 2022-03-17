<?php

class Participant
{

    private $name;
    private $id;
    private $discipline;
    private $discipleType = false;
    private $events;

    public function __construct()
    {
        $this->events = array();
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
     * @return array
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param array $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }

    public function addEvent($event)
    {
        array_unshift($this->events, $event);
    }
}