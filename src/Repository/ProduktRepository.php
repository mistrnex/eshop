<?php

namespace App\Repository;

use App\Entity\Produkt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Produkt|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produkt|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produkt[]    findAll()
 * @method Produkt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduktRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Produkt::class);
    }

//    /**
//     * @return Produkt[] Returns an array of Produkt objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Produkt
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
