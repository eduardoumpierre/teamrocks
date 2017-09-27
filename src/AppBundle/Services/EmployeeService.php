<?php

namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;

class EmployeeService
{
    private $repository;

    /**
     * EmployeeService constructor.
     */
    public function __construct(EntityManager $em)
    {
        $this->repository = $em->getRepository('AppBundle:Employee');
    }

    /**
     * @param $id
     * @return null|object
     */
    public function findOneById($id)
    {
        return $this->repository->findOneBy(['id' => $id]);
    }
}