<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class EventRepository extends EntityRepository
{
    public function loadAllPublishedEvent()
    {
        return $this->createQueryBuilder('e')
            ->where('e.published = 1')
            ->getQuery()
            ->getResult();
    }

    public function loadEventById($id){
      return $this->createQueryBuilder('e')
            ->where('e.id = :id')
            ->setParameter('id',$id)
            ->getQuery()
            ->getResult();
    }

    public function loadAllDraftUser($user)
    {
      return $this->createQueryBuilder('e')
        ->where('e.published = 0 AND e.user = :user')
        ->setParameter('user',$user)
        ->getQuery()
        ->getResult();
    }

    /*
    public function loadPublishedEventByUsername($user)
    {
      return $this->createQueryBuilder('e')
          ->where('e.user = :user AND e.published = 1')
          ->setParameter('user',$user)
          ->getQuery()
          ->getResult();

    }*/
}

 ?>
