<?php

namespace App\Repository;

use App\Entity\AnswerCollection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AnswerCollection|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnswerCollection|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnswerCollection[]    findAll()
 * @method AnswerCollection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MCQuestionCollectionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AnswerCollection::class);
    }

//    /**
//     * @return MCQuestionCollection[] Returns an array of MCQuestionCollection objects
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
    public function findOneBySomeField($value): ?MCQuestionCollection
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
