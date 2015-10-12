<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function portalAction()
    {
        return $this->render('SiteBundle:Default:portal.html.twig');
    }

    public function indexAction()
    {
        return $this->render('SiteBundle:Default:index.html.twig');
    }

    public function viewAction($id)
    {
        // On récupère le repository
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('SiteBundle:Scenario')
        ;

        // On récupère l'entité correspondante à l'id $id
        $scenario = $repository->find($id);

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('SiteBundle:Default:view.html.twig', array('scenario' => $scenario));
    }
}
