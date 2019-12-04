<?php

namespace ProjectBundle\Listener;

use AncaRebeca\FullCalendarBundle\Model\FullCalendarEvent;
use Doctrine\ORM\EntityManagerInterface;
use ProjectBundle\Entity\EventCustom;
use ProjectBundle\Entity\EventCustom as MyCustomEvent;

class LoadDataListener
{
    /**
     * @param EventCustom $calendarEvent
     *
     * @return FullCalendarEvent[]
     * @throws \Exception
     */
    /**
     * @var EntityManagerInterface
     */
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function loadData(EventCustom $calendarEvent)
    {
        $startDate = $calendarEvent->getStart();
        $endDate = $calendarEvent->getEnd();
        $filters = $calendarEvent->getFilters();

        foreach ($calendarEvent as $schedule) {
            $eventEntity = new Event($schedule->getTitle(), $schedule->getStart());

            //optional calendar event settings
            $eventEntity->setId($schedule->getId());
            $eventEntity->setAllDay(false); // default is false, set to true if this is an all day event
            $eventEntity->setColor('#FF0000'); //set the background color of the event's label
            $eventEntity->setTextColor('#FFFFFF'); //set the foreground color of the event's label
            //$eventEntity->setUrl('http://www.google.com'); // url to send user to when event label is clicked
            $eventEntity->setClassName('my-custom-class'); // a custom class you may want to apply to event labels

            //dump($eventEntity);die();

            //finally, add the event to the CalendarEvent for displaying on the calendar
            $calendarEvent->addEvent($eventEntity);
        }

        $calendarEvent->addEvent(new MyCustomEvent('Event Title 1', new \DateTime()));
        $calendarEvent->addEvent(new MyCustomEvent('Event Title 2', new \DateTime()));
    }




}