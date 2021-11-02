<?php


namespace Behavioral\Observer;

use SplObserver;

class Course implements \SplSubject
{
    private \SplObjectStorage $observers;
    private $available = false;

    public string $name;

    public function __construct($name)
    {
        $this->observers = new \SplObjectStorage();
        $this->name = $name;
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        /* @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @param  bool  $available
     */
    public function setAvailable(bool $available): void
    {
        $this->available = $available;
        $this->notify();
    }

    /**
     * @return string
     */
    public function getAvailable(): string
    {
        return $this->available;
    }
}
