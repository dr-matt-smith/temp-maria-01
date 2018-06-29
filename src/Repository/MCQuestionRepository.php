<?php

namespace App\Repository;

use App\Entity\MCQuestion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MCQuestion|null find($id, $lockMode = null, $lockVersion = null)
 * @method MCQuestion|null findOneBy(array $criteria, array $orderBy = null)
 * @method MCQuestion[]    findAll()
 * @method MCQuestion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MCQuestionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MCQuestion::class);
    }

//    /**
//     * @return MCQuestion[] Returns an array of MCQuestion objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MCQuestion
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
