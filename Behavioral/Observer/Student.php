<?php

namespace Behavioral\Observer;

use SplSubject;

class Student implements \SplObserver
{
    public $state;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /* @var Course $subject */
    public function update(SplSubject $subject)
    {
        $this->state = "Hello ".$this->name." , Course of ( ".$subject->name." ) is ".($subject->getAvailable() ? "Available" : "Not Available");
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  mixed  $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
}
