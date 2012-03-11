<?php

namespace Tuk\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tuk\ModelBundle\Entity\User;
use Tuk\UserBundle\Form\UserType;

class DefaultController extends Controller
{
  /**
   * @Route("/hello/")
   * @Template()
   */
  public function indexAction($name = '')
  {
  
  	if( !$this->get('security.context')->getToken() ){
				$user = new User();
        $form   = $this->createForm(new UserType(), $user);
        $params = array(
            'entity' => $user,
            'form'   => $form->createView()
        );
  		return $this->render('TukUserBundle:Default:register.html.twig', $params);
  	}
  	$name = $this->get('translator')->trans('Welcome to Tukmania');
		return array('name' => $name);
   }
  /**
   * @Route("/translate/")
   * @Template()
   */
	public function translateAction()
	{
		$translations = $this->get('translator')->getMessages('es');
		if(!empty($translations)){
			$keystr = array(' '=>'_', '{{'=>'_ff_', '}}'=>'_fff_');
			$messages = array();
			foreach($translations as $key=>$message){
				$key = preg_replace('([^A-Za-z0-9\s])', '', $key);
				$name = strtolower(strtr($key, $keystr));
				$messages[$name] = $message;
			}
		}else{
			$messages = array();
		}
		$response = new Response(json_encode($messages));
    $response->headers->set('Content-Type', 'application/json');
    return $response;
	}
}
