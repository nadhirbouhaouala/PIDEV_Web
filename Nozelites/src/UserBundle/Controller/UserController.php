<?php

namespace UserBundle\Controller;

use Doctrine\DBAL\Types\TextType;
use NozelitesBundle\Entity\Groupe;
use NozelitesBundle\Entity\Listediplome;

use NozelitesBundle\Entity\Membre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use UserBundle\Entity\User;
use NozelitesBundle\Entity\Formation;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Form\FormTypeInterface;
class UserController extends Controller
{
    public function showUserFormationAction (Request $request){
        $em = $this->getDoctrine()->getManager();
        $formations = new Formation();


        $recherche =  $request->request->get("form")["search"];

        $membres = $this->getDoctrine()
            ->getRepository(User::class)
            ->findUserByFormation($recherche);

        $formations = $em->getRepository("NozelitesBundle:Formation")->findAll();
        return $this->render("@User/Default/afficherUsers.html.twig",array('membres'=>$membres,
            'formations'=>$formations));

    }
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

    public function searchBarFormationAction(){

        $form = $this->createFormBuilder(null)
            ->add('search',\Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->getForm();

        return $this->render('@User/Default/searchBarForm.html.twig',[
            'formationSearch'=> $form->createView()
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

    public function showUserBackAction(){
        $membres = $this->getDoctrine()->getManager()
            ->getRepository("UserBundle:User")->findAll();
        #ar_dump($membres[1]->getRoles()[0]);
        #die;
        return $this->render("@User/default/afficherUserBack.html.twig",array('membres'=>$membres));

    }
    public function blockUserAction($id){
        $em = $this->getDoctrine()->getManager();
        $membres = $em->getRepository("UserBundle:User")->find($id);
        if($membres->isEnabled()){
            $membres->setEnabled(0);
        }
        else{
            $membres->setEnabled(1);
        }

        $em->flush();
        return $this->redirectToRoute('user_adminUserBack');

    }
    public function JsonAllAction()///http://localhost/3.2/PIDEV/PIDEV_Web/Nozelites/web/app_dev.php/user/membres/jsonAll
    {
        $membres = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:Membre")->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($membres);

        return new JsonResponse($formatted);
    }

    public function JsonAddAction($nom,$prenom,$age,$email,$tel,$login,$mdp,$image)
    {

        $membre = new Membre();
        $membre->setIdusr(null);
        $membre->setNom($nom);
        $membre->setPrenom($prenom);
        $membre->setAge($age);
        $membre->setMail($email);
        $membre->setImage("D:/xampp/htdocs/PIDEV_Web/Nozelites/web/images/profile/".$image);
        $membre->setTel($tel);
        $membre->setLogin($login);
        $membre->setMdp($mdp);
        $membre->setType(1);
        $membre->setDate(date("Y-m-d"));
        $em = $this->getDoctrine()->getManager();
        $em->persist($membre);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($membre);

        return new JsonResponse($formatted);
    }

    public function JsonShowAction($id)
    {
        $membre = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:Membre")->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($membre);

        return new JsonResponse($formatted);
    }

    public function JsonEditAction($id,$nom,$prenom,$age,$email,$tel)
    {

        $membre = $this->getDoctrine()->getManager()
            ->getRepository("NozelitesBundle:Membre")->find($id);
        $membre->setNom($nom);

        $membre->setPrenom($prenom);
        $membre->setAge($age);
        $membre->setMail($email);

        $membre->setTel($tel);

        $em = $this->getDoctrine()->getManager();
        $em->persist($membre);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($membre);

        return new JsonResponse($formatted);
    }
}
