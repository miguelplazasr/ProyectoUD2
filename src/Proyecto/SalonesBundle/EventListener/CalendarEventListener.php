<?php
/**
 * Created by PhpStorm.
 * User: ANDRES
 * Date: 07/04/2016
 * Time: 20:07
 */

namespace Proyecto\SalonesBundle\EventListener;

use ADesigns\CalendarBundle\Event\CalendarEvent;
use ADesigns\CalendarBundle\Entity\EventEntity;
use Doctrine\ORM\EntityManager;


class CalendarEventListener
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function loadEvents(CalendarEvent $calendarEvent)
    {
        $startDate = $calendarEvent->getStartDatetime();
        $endDate = $calendarEvent->getEndDatetime();

        $request = $calendarEvent->getRequest();
        $filter = $request->get('filter');

        $prestamoEvents = $this->entityManager->getRepository('SalonesBundle:PrestamoSalon')
                               ->createQueryBuilder('prestamo_events')
                               ->where('prestamo_events.event_datetime BETWEEN :startDate and :endDate')
                               ->setParameter('startDate', $startDate->format('Y:m:d H:i:s'))
                               ->setParameter('endDate', $endDate->format('Y:m:d H:i:s'))
                               ->getQuery()->getResult();

        foreach($prestamoEvents as $prestamoEvent){

            if($prestamoEvent->getAllDayEvent() === false ){
                $eventEntity = new EventEntity($prestamoEvent->getTitle(), $prestamoEvent->getStartDatetime(), $prestamoEvent->getEndDatetime());
            }else{
                $eventEntity = new EventEntity($prestamoEvent->getTitle(), $prestamoEvent->getStartDatetime(), null, true);
            }
        }

        $eventEntity->setAllDay(true);
        $eventEntity->setBgColor('#FF0000');
        $eventEntity->setFgColor('#FFFFFF');
        $eventEntity->setUrl('http://www.google.com');
        $eventEntity->setCssClass('my-custom-class');

        $calendarEvent->addEvent($eventEntity);
    }
}