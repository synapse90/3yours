<?php

namespace YYY\PresentationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('YYYPresentationBundle:Base:index.html.twig');
    }
}
