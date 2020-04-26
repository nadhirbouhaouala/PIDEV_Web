<?php

namespace UserBundle\Controller;

use Doctrine\DBAL\Types\TextType;
use NozelitesBundle\Entity\Listediplome;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use UserBundle\Entity\User;
use NozelitesBundle\Entity\Formation;
use Symfony\Component\Form\FormTypeInterface;
class UserController extends Controller
{
    public function showUserAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        $formations = new Formation();


       $recherche =  $request->request->get("form")["search"];

        $membres = $this->getDoctrine()
            ->getRepository(User::class)
            ->findUserByName($recherche);
        
        $formations = $em->getRepository("NozelitesBundle:Formation")->findAll();
        return $this->render("@User/Default/afficherUsers.html.twig",array('membres'=>$membres,
            'formations'=>$formations));
    }

    public function searchBarAction(){
        $form = $this->createFormBuilder(null)
            ->add('search',\Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->getForm();

        return $this->render('@User/Default/searchBar.html.twig',[
            'formSearch'=> $form->createView()
        ]);
    }

    public function afficherUnUserAction(int $id){
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository("UserBundle:User")->find($id);

        $formations = new Formation();
        $formations = $em->getRepository("NozelitesBundle:Formation")->findby(array('idMembre'=>$membre->getId()));

        $listDiplome = new ListeDiplome();
        $listeDiplome = $em->getRepository("NozelitesBundle:Listediplome")->findby(array('idMembre'=>$membre->getId()));


        return $this->render("@User/Default/AfficherUnUser.html.twig",array('membre'=>$membre, 'formations'=>$formations,'diplomes'=>$listeDiplome));

    }

    public function JsonAllAction()///http://localhost/3.2/PIDEV/PIDEV_Web/Nozelites/web/app_dev.php/user/membres/jsonAll
    {
        $membres = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:Membre")->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($membres);

        return new JsonResponse($formatted);
    }
}
