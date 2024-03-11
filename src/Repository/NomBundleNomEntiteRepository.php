<?php

namespace App\Repository;

use App\Entity\NomBundleNomEntite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NomBundleNomEntite>
 *
 * @method NomBundleNomEntite|null find($id, $lockMode = null, $lockVersion = null)
 * @method NomBundleNomEntite|null findOneBy(array $criteria, array $orderBy = null)
 * @method NomBundleNomEntite[]    findAll()
 * @method NomBundleNomEntite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NomBundleNomEntiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NomBundleNomEntite::class);
    }

//    /**
//     * @return NomBundleNomEntite[] Returns an array of NomBundleNomEntite objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NomBundleNomEntite
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
