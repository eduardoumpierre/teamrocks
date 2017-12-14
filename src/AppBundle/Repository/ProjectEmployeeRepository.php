<?php

namespace AppBundle\Repository;

/**
 * ProjectEmployeeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectEmployeeRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param $projectId
     * @return array
     */
    public function findAllByProject($projectId)
    {
        $query = $this->createQueryBuilder('pe')
            ->select('pe.id as pe_id, e.id, e.name')
            ->join('AppBundle:Employee', 'e', 'WITH', 'e.id = pe.employee')
            ->where('pe.project = :projectId')
            ->setParameter('projectId', $projectId)
            ->getQuery()->getArrayResult();

        return $query;
    }

    /**
     * @param $employeeId
     * @return array
     */
    public function findEmployeeStatus($employeeId)
    {
        $query = $this->createQueryBuilder('pe')
            ->select('p.id')
            ->leftJoin('AppBundle:Project', 'p', 'WITH', 'p.id = pe.project')
            ->where('pe.employee = :employeeId')
            ->andWhere('p.status = 1')
            ->setParameter('employeeId', $employeeId)
            ->groupBy('pe.employee')
            ->getQuery()->getOneOrNullResult();

        return $query ? false : true;
    }
}
