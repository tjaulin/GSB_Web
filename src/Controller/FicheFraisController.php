<?php

namespace App\Controller;

use App\Entity\Depenseforfetaire;
use App\Entity\Depensenonforfetaire;
use App\Entity\Fichefrais;
use App\Entity\Type;
use App\Form\FicheFraisType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class FicheFraisController extends AbstractController
{
    /**
     * @Route("/AllFicheFrais/3", name="allFicheFrais")
     */
    public function AllFicheFrais(){
        $rtParam=3;
        $repo = $this->getDoctrine()->getRepository(Fichefrais::class);
        $lesFiches = $repo->findBy(array('idEffectuer'=>$rtParam), array('datedebut' => 'DESC'));
        /*$date=date('d/m/Y');
        $newFiche=$repo->findOneBy(array('idEffectuer'=>$rtParam), array('libelle'=>$date));
        if (!$newFiche) {
            
            $req= prepare('insert into FICHEFRAIS(ID_EFFECTUER,ID_ETRE,LIBELLE,DATEDEBUT) values(:ID_EFFECTUER,:ID_ETRE,:LIBELLE,:DATEDEBUT);');
            $req->exec(array(
                'ID_EFFECTUER'=> $rtParam,
                'ID_ETRE'=> 4,
                'LIBELLE'=> strftime('%B %Y'),
                'DATEDEBUT'=> $date
            ));
            $em = $this->getDoctrine()->getManager();
            $em->persist($req);
            $em->flush();
        }*/

        return $this->render("home/AllFicheFrais.html.twig", [
            'lesFiches' => $lesFiches,
            //'test' => $req
        ]);
    }

    /**
     * @Route("/uneFiche/{id}", name="uneFiche")
     */
    public function uneFiche($id){
        $repo = $this->getDoctrine()->getRepository(Fichefrais::class);
        $laFiche = $repo->findBy(array('idEffectuer'=>$id));
        $repository = $this->getDoctrine()->getRepository(Depenseforfetaire::class);
        $lesDepensesForfetaires = $repository->findBy(array('idAvoir2'=>$id));
        $repository2 = $this->getDoctrine()->getRepository(Depensenonforfetaire::class);
        $lesDepensesNonForfetaires = $repository2->findBy(array('idAvoir1'=>$id));

        return $this->render("home/uneFiche.html.twig", [
            'laFiche' => $laFiche,
            'lesDepensesForfetaires' => $lesDepensesForfetaires,
            'lesDepensesNonForfetaires' => $lesDepensesNonForfetaires
        ]);
    }

    /**
     * @Route("/uneFicheModif/{id}", name="uneFicheModif")
     */
    public function uneFicheModif($id){
        $repo = $this->getDoctrine()->getRepository(Fichefrais::class);
        $laFiche = $repo->findBy(array('idEffectuer'=>$id));
        $repository = $this->getDoctrine()->getRepository(Depenseforfetaire::class);
        $lesDepensesForfetaires = $repository->findBy(array('idAvoir2'=>$id));
        $repository2 = $this->getDoctrine()->getRepository(Depensenonforfetaire::class);
        $lesDepensesNonForfetaires = $repository2->findBy(array('idAvoir1'=>$id));

        return $this->render("home/uneFicheModif.html.twig", [
            'laFiche' => $laFiche,
            'lesDepensesForfetaires' => $lesDepensesForfetaires,
            'lesDepensesNonForfetaires' => $lesDepensesNonForfetaires,
            'idAvoir1' => $id
        ]);
    }

    /**
     * @Route("/getDNFF/{id}", name="getDNFF")
     */
    public function getDNFF($id):JsonResponse{
        $repository2 = $this->getDoctrine()->getRepository(Depensenonforfetaire::class);
        $lesDepensesNonForfetaires = $repository2->findBy(array('idAvoir1'=>$id));
        $data = [];
        foreach ($lesDepensesNonForfetaires as $uneDepense) {
            $data[] = [
                'id'=>$uneDepense->getId(),
                'date'=>$uneDepense->getDate(),
                'montant'=>$uneDepense->getMontant(),
                'libelle'=>$uneDepense->getLibelle()
            ];
        }
        return new JsonResponse($data, Response::HTTP_OK);
    } 
    
    /**
    * @Route("/getDFF/{id}", name="getDFF")
    */
   public function getDFF($id):JsonResponse{
       $repository2 = $this->getDoctrine()->getRepository(Depenseforfetaire::class);
       $lesDepensesForfetaires = $repository2->findByIdAvoir2(array('idAvoir2'=>$id));
       $data = [];
       foreach ($lesDepensesForfetaires as $uneDepense) {
           $data[] = [
               'id'=>$uneDepense->getId(),
               'idTyper'=>$uneDepense->getIdTyper(),
               'idAvoir2'=>$uneDepense->getIdAvoir2(),
               'qte'=>$uneDepense->getQte(),
               //'libelle'=>$uneDepense->type->getLibelle(),
               //'montant'=>$uneDepense->getMontant(),
           ];
       }
       return new JsonResponse($data, Response::HTTP_OK);
   }

    /**
     * @Route("/postFF/", name="postFF")
     */
    public function postFF(Request $request){

        $depenseF= new Depenseforfetaire();
       // $depenseF->setIdTyper($request->request->get('typeDF')); 
        $depenseF->setQte($request->request->get('qteDF'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($depenseF);
        $em->flush();

        return $this->render("home/uneFiche.html.twig", [
        
        ]);
    }

    /**
     * @Route("/postHF/{idAvoir1}", name="postHF")
     */
    public function postHF(Request $request, $idAvoir1){
        $depenseHF= new Depensenonforfetaire(); 
        $depenseHF->setDate($request->request->get('dateDHF'));                
        $depenseHF->setLibelle($request->request->get('libelleDHF'));
        $depenseHF->setMontant($request->request->get('montantDHF'));
        $depenseHF->setValidation(0);

 
        $repository = $this->getDoctrine()->getRepository(Fichefrais::class);
        $laFicheFrais = $repository->find($idAvoir1);
        $depenseHF->setIdAvoir1($laFicheFrais);
        
        $em = $this->getDoctrine()->getManager();
        $date = new \DateTime($request->request->get('dateDHF'));
        $depenseHF -> setDate($date);
        
        $em->persist($depenseHF);
        $em->flush();    
        return $this->render("home/uneFicheModif.html.twig", [
            'idAvoir1' => $idAvoir1,
            'lesDepensesNonForfetaires' => $depenseHF
        ]);
    }
}
