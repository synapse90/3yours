<?php

namespace YYY\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('YYYCoreBundle:Default:index.html.twig');
    }
}
