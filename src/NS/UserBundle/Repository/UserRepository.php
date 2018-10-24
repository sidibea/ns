<?php

namespace NS\UserBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function NumberOfAuthors()
    {
        $power = 'ROLE_POWER_USER';
        $moderator = 'ROLE_MODERATOR';
        $qb = $this->createQueryBuilder('u')
            ->select('count(u.id)')
            ->where('u.roles LIKE :power')
            ->orWhere('u.roles LIKE :mod')
            ->setParameters([
                'power' => '%"'.$power.'"%',
                'mod' => '%"'.$moderator.'"%'
            ]);

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function NumberOfUsers()
    {
        $qb = $this->createQueryBuilder('u')
            ->select('count(u.id)');


        return $qb->getQuery()->getSingleScalarResult();
    }
}