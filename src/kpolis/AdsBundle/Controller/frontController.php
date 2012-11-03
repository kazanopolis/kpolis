<?php

namespace kpolis\AdsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use kpolis\AdsBundle\Entity\systemLog;

class frontController extends Controller
{
    public function fetchAction($page)
    {
        $data = $this->getDoctrine()->getRepository('kpolisAdsBundle:systemLog')->find(1); 
        return $this->render('kpolisAdsBundle:Front:index.html.twig', array('data' => $data));
    }
}
