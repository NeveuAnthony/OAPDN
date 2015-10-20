<?php

namespace SiteBundle\Controller;

use SiteBundle\Entity\Scenario;
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

    public function viewAction(Scenario $scenario)
    {
        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('SiteBundle:Default:view.html.twig', array('scenario' => $scenario));
    }
}
