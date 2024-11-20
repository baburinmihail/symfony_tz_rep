<?php

namespace App\Repository;

use App\Entity\Developer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Developer>
 */
class DeveloperRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Developer::class);
    }

    /**
     * @return Developer[] Returns an array of Developer objects
     */

    public function allCountDeveloper(){

        //SELECT COUNT(*) FROM `developer`;
        $all_project=$this->createQueryBuilder('d')
                ->select('count(d.id)')
                ->getQuery()
                ->getOneOrNullResult();

                return $all_project[1];
        }

    public function midleAgeDeveloper(){

        $count = $this->allCountDeveloper();
        //echo $count[1];
        //dd($count);

        $age = $this->createQueryBuilder('developer')
        ->select('SUM(developer.age) AS all_Age')
        ->getQuery()
        ->getOneOrNullResult();

        $myAge = (int)$age['all_Age'];
        $count = (int)$count;

        $delitel =  ($count > 0) ? $count : 1;
        $result = $myAge/$delitel;

        return $result;

    }
        

    //    /**
    //     * @return Developer[] Returns an array of Developer objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('d.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Developer
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
