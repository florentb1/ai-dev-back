<?php

namespace App\Repository;

use App\Entity\Sso;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sso>
 *
 * @method Sso|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sso|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sso[]    findAll()
 * @method Sso[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SsoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sso::class);
    }

//    /**
//     * @return Sso[] Returns an array of Sso objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Sso
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
