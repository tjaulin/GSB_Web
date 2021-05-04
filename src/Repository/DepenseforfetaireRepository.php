<?php
// /src/Repository FichefraisRepository.php
namespace App\Repository;

use App\Entity\Depenseforfetaire;
use App\Entity\Type;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Depenseforfetaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Depenseforfetaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Depenseforfetaire[]    findAll()
 * @method Depenseforfetaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepenseforfetaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Depenseforfetaire::class);
    }
    /**
     * @return Depenseforfetaire[]
     */
    public function findByIdAvoir2($id){
        $sql = "select DEPENSEFORFETAIRE.ID, DEPENSEFORFETAIRE.QTE, (TYPE.MONTANT*DEPENSEFORFETAIRE.QTE) as 'Monrtant', TYPE.LIBELLE 
        from DEPENSEFORFETAIRE 
        inner join TYPE on TYPE.ID = DEPENSEFORFETAIRE.ID_TYPER 
        where ID_AVOIR2 = '.$id.';";
        
        $query = $this->getEntityManager()->createQuery($sql);
        var_dump($query->getSQL());die;
        return $query->execute();
    }
}