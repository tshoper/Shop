<?php

namespace Horus\SiteBundle\Controller;

use Horus\SiteBundle\Entity\Article;

use Horus\SiteBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;

class CommandesController extends Controller
{

    public function indexAction()
    {
        return $this->render('HorusSiteBundle:Default:index.html.twig');

    }


}
