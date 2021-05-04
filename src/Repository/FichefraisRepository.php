<?php
// /src/Repository FichefraisRepository.php
namespace App\Repository;

use App\Entity\Fichefrais;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Fichefrais|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fichefrais|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fichefrais[]    findAll()
 * @method Fichefrais[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FichefraisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fichefrais::class);
    }

    /**
     * @return FicheFrais[]
     */
    public function listeFicheFrais($id){
        $sql = 'select FICHEFRAIS.ID, FICHEFRAIS.LIBELLE, FICHEFRAIS.DATEDEBUT, ETAT.LIBELLE 
        from FICHEFRAIS 
        inner join ETAT on ETAT.ID = FICHEFRAIS.ID_ETRE 
        where ID_EFFECTUER = '.$id.';';
        
        $query = $this->getEntityManager()->createQuery($sql);
        var_dump($query->getSQL());die;
        return $query->execute();
    }

    // /**
    //  * @return Fichefrais[] Returns an array of Fichefrais objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value):  Fichefrais
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}