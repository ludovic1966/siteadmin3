<?php

namespace Siteadmin3Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Siteadmin3Bundle:Default:index.html.twig');
    }
}
