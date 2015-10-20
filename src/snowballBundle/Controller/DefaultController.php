<?php

namespace snowballBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use snowballBundle\Entity\box;
use snowballBundle\Entity\grid;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $grid = $em
            ->getRepository('snowballBundle:grid')
            ->find(1)
        ;

        $listBoxes = $em
            ->getRepository('snowballBundle:box')
            ->findAll()
        ;

        return $this->render('snowballBundle:Default:index.html.twig', array(
            'grid' => $grid,
            'listBoxes' => $listBoxes
            )
        );
    }

    public function createElementsAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        for($i=0;$i<4;$i++){
            // On crée la box
            $box = new box();
            $box->setIdType($i);

            // On la persiste
            $em->persist($box);
        }

        // On déclenche l'enregistrement de toutes les catégories
        $em->flush();

        $request->getSession()->getFlashBag()->add('Case', 'Cases bien enregistrées.');

        return $this->redirect($this->generateUrl('snowball_homepage'));

    }

    public function moveAction(Request $request, $direction)
    {

        $em = $this->getDoctrine()->getManager();
        $player = $em
            ->getRepository('snowballBundle:box')
            ->find(1)
        ;
        $grid = $em
            ->getRepository('snowballBundle:grid')
            ->find(1)
        ;
        $listSnowBall = $em
            ->getRepository('snowballBundle:box')
            ->findBy(array('id' => array(2,3,4)))
        ;

        switch($direction){
            case 'up':
                $posY = $player->getY()-1;
                if ($posY >= 0 ) {
                    $player->setY($posY);
                    foreach ($listSnowBall as $snowBall) {
                        if ($snowBall->getX() == $player->getX() && $snowBall->getY() == $posY) {
                            if ($posY - 1 > 0) {
                                $snowBall->setY($posY - 1);
                                $em->persist($snowBall);
                            } else {
                                $player->setY($posY + 1);
                            }
                        }
                    }
                }
                else
                    $request->getSession()->getFlashBag()->add('Movement', 'Mouvement impossible');
                break;

            case 'down':
                $posY = $player->getY()+1;
                if ($posY <= $grid->getCols()) {
                    $player->setY($posY);
                    foreach ($listSnowBall as $snowBall) {
                        if ($snowBall->getX() == $player->getX() && $snowBall->getY() == $posY) {
                            if ($posY + 1 < $grid->getCols()) {
                                $snowBall->setY($posY + 1);
                                $em->persist($snowBall);
                            } else {
                                $player->setY($posY - 1);
                            }
                        }
                    }
                }
                else
                    $request->getSession()->getFlashBag()->add('Movement', 'Mouvement impossible');
                break;

            case 'left':
                $posX = $player->getX()-1;
                if ($posX >= 0 ) {
                    $player->setX($posX);
                    foreach ($listSnowBall as $snowBall) {
                        if ($snowBall->getX() == $posX && $snowBall->getY() == $player->getY()) {
                            if ($posX - 1 > 0) {
                                $snowBall->setX($posX - 1);
                                $em->persist($snowBall);
                            } else {
                                $player->setX($posX + 1);
                            }
                        }
                    }
                }
                else
                    $request->getSession()->getFlashBag()->add('Movement', 'Mouvement impossible');
                break;

            case 'right':
                $posX = $player->getX()+1;
                if ($posX <= $grid->getRaws()) {
                    $player->setX($posX);
                    foreach ($listSnowBall as $snowBall) {
                        if ($snowBall->getX() == $posX && $snowBall->getY() == $player->getY()) {
                            if ($posX + 1 < $grid->getRaws()) {
                                $snowBall->setX($posX + 1);
                                $em->persist($snowBall);
                            } else {
                                $player->setX($posX - 1);
                            }
                        }
                    }
                }

                else
                    $request->getSession()->getFlashBag()->add('Movement', 'Mouvement impossible');
                break;
        }

        $em->flush();

        $request->getSession()->getFlashBag()->add('Case', 'Cases herbes bien enregistrées.');

        return $this->redirect($this->generateUrl('snowball_homepage'));

    }
}
