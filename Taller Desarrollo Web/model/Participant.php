<?php

class Participant
{

    private $discipline;
    private $events;

    public function __construct()
    {
        $this->events = array();
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