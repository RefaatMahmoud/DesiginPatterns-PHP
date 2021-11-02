<?php declare(strict_types=1);

namespace Behavioral;

use Behavioral\Observer\Course;
use Behavioral\Observer\Student;
use PHPUnit\Framework\TestCase;

final class ObserverTest extends TestCase
{
    private Course $course;
    private Student $refaat;
    private Student $hussien;

    public function setUp()
    {
        parent::setUp();
        $this->course = new Course('PHP');
        $this->refaat = new Student('Refaat');
        $this->hussien = new Student('Hussien');
    }

    public function testCourseIsAvailableWithAllSubscribers()
    {
        $this->course->attach($this->refaat);
        $this->course->attach($this->hussien);
        $this->course->setAvailable(true);
        $this->assertEquals('Hello Refaat , Course of ( PHP ) is Available', $this->refaat->getState());
        $this->assertEquals('Hello Hussien , Course of ( PHP ) is Available', $this->hussien->getState());
    }

    public function testCourseIsNotAvailableWithAllSubscribers()
    {
        $this->course->attach($this->refaat);
        $this->course->attach($this->hussien);
        $this->course->setAvailable(false);
        $this->assertEquals('Hello Refaat , Course of ( PHP ) is Not Available', $this->refaat->getState());
        $this->assertEquals('Hello Hussien , Course of ( PHP ) is Not Available', $this->hussien->getState());
    }



}
