<?php

namespace NozelitesBundle\Controller;

use NozelitesBundle\Entity\Portfolio;
use NozelitesBundle\Entity\Membre;
use NozelitesBundle\Form\PortfolioType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class PortfolioController extends Controller
{
    public function AddPortfolioAction(Request $request){
        $portfolio = new Portfolio();
        $formP = $this->createForm(PortfolioType::class,$portfolio);

        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $membre = $em->getRepository("NozelitesBundle:Membre")->findMembreByEmail($user->getEmail());
        $formP->handleRequest($request);
        if($formP->isSubmitted() && $formP->isValid()){

            $portfolio->setIdMembre($membre[0]->getIdusr());

            $em->persist($portfolio);
            $em->flush();
            return $this->redirectToRoute("Show_portfolio",['id'=>$this->getUser()->getId()]);
        }
        return $this->render("@Nozelites/Front/PortfolioAjouter.html.twig",array('form'=>$formP->createView()));
    }

    public function DeletePortfolioAction($id){
        $em = $this->getDoctrine()->getManager();
        $portfolio = $em->getRepository("NozelitesBundle:Portfolio")->find($id);
        $em->remove($portfolio);
        $em->flush();

        return $this->redirectToRoute("Show_portfolio",['id'=>$this->getUser()->getId()]);
    }
    public function EditPortfolioAction($id,Request $request){
        $em = $this->getDoctrine()->getManager();
        $portfolio = $em->getRepository("NozelitesBundle:Portfolio")->find($id);

        $form = $this->createForm(PortfolioType::class,$portfolio);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("fos_user_profile_show");
        }

        return $this->render("@Nozelites/Front/PortfolioModifier.html.twig",array('form'=>$form->createView()));
    }

    public function ShowPortfolioAction($id){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("UserBundle:User")->find($id);
        $membre = $em->getRepository("NozelitesBundle:Membre")->findMembreByEmail($user->getEmail());
        $portfolio = $em->getRepository("NozelitesBundle:Portfolio")->findby(array('idMembre'=>$membre[0]->getIdusr()));

        return $this->render("@Nozelites/Front/PortfolioAfficher.html.twig",array('Portfolio'=>$portfolio));
    }
}
