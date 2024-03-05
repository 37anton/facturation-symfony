<?php

namespace App\Repository;

use App\Entity\RequestCompanyAccount;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RequestCompanyAccount>
 *
 * @method RequestCompanyAccount|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequestCompanyAccount|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequestCompanyAccount[]    findAll()
 * @method RequestCompanyAccount[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequestCompanyAccountRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequestCompanyAccount::class);
    }

    //    /**
    //     * @return RequestCompanyAccount[] Returns an array of RequestCompanyAccount objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?RequestCompanyAccount
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
