<?php

namespace MegaDev\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MegaDevTestBundle:Default:index.html.twig');
        //ahmed minboun
    }
}
