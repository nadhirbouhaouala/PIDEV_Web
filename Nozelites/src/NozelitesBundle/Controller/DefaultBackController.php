<?php

namespace NozelitesBundle\Controller;
use NozelitesBundle\Entity\Groupe;
use NozelitesBundle\Entity\GroupeMembre;
use NozelitesBundle\Entity\Membre;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use NozelitesBundle\Entity\Offre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultBackController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $groupes_f = $em->getRepository('NozelitesBundle:Groupe')->findBy(array('autorisation'=>0));

        $groupes_o = $em->getRepository('NozelitesBundle:Groupe')->findBy(array('autorisation'=>1));

        $pieChart = new PieChart();
        $em1 = $this->getDoctrine();
        $offres = $em1->getRepository(Offre::class)->findAll();
        $totalOffres=0;
        $totalOffresAcceptees=0;
        $totalOffresRefusees=0;
        $totalOffresEnAttente=0;
        foreach($offres as $offre) {
            $totalOffres++;
            if($offre->getEtat() == 'Acceptée')
            {
                $totalOffresAcceptees++;
            }
            elseif ($offre->getEtat() == 'Refusée')
            {
                $totalOffresRefusees++;
            }
            else
            {
                $totalOffresEnAttente++;
            }
        }
        $pieChart->getData()->setArrayToDataTable(
            [['Offres', 'Nombre total'],
                ['Acceptée',     $totalOffresAcceptees],
                ['Refusée',      $totalOffresRefusees],
                ['En attente',  $totalOffresEnAttente],
            ]
        );
        $pieChart->getOptions()->setTitle('Offres');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#C41011');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(false);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('@Nozelites/Back/index.html.twig',
        //return $this->render('@Nozelites/Back/AdminGroupes.html.twig',
            array('groupes_o' => sizeof($groupes_o),'groupes_f' => sizeof($groupes_f), 'piechart' => $pieChart)
        );
    }
}
