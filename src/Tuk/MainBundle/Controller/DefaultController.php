<?php

namespace Tuk\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
  /**
   * @Route("/hello/")
   * @Template()
   */
  public function indexAction($name = '')
  {
  	$name = $this->get('translator')->trans('Welcome to Tukmania');
		return array('name' => $name);
   }
}
