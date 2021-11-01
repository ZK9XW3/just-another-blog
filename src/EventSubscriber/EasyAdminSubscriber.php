<?php

namespace App\EventSubscriber;

use App\Entity\Posts;
use DateTime;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class EasyAdminSubscriber implements EventSubscriberInterface
{
    private $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => ['setPostSlug'],
        ];
    }

    public function setPostSlug(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if (!($entity instanceof Posts)) {
            return;
        }

        $currentTitle = $entity->getTitle();
        $slug = $this->slugger->slug($currentTitle);
        $entity->setSlug($slug);

        $entity->setCreatedAt(new DateTime('now'));
        $entity->setUpdatedAt(new DateTime('now'));
    }
}