<?php

namespace AppBundle\Repository;

/**
 * ProjectBacklogRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectTaskRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param $projectId
     * @return array
     */
    public function findAllByProject($projectId)
    {
        $query = $this->createQueryBuilder('pt')
            ->select('pt.title, pt.description, s.name as skill, e.id as employee_id, e.name as employee_name')
            ->join('AppBundle:Skill', 's', 'WITH', 'pt.skill = s.id')
            ->join('AppBundle:Employee', 'e', 'WITH', 'pt.employee = e.id')
            ->where('pt.project = :project')
            ->setParameter('project', $projectId)
            ->getQuery()->getArrayResult();

        return $query;
    }
}
