<?php

namespace App\Repository;

use App\Entity\Kategorieknih;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Kategorieknih|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kategorieknih|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kategorieknih[]    findAll()
 * @method Kategorieknih[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KategorieknihRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Kategorieknih::class);
    }

//    /**
//     * @return Kategorieknih[] Returns an array of Kategorieknih objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Kategorieknih
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
