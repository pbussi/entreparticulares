<?php
// src/AppBundle/Controller/HomeController.php
namespace EP\EPBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class HomeController  extends Controller
{
    /**
     * @Route("/home")
     */
    public function inicioAction(Request $request)
    {
        $number = rand(0, 100);

        return $this->render(
        'home/main.html.twig',
        array('luckyNumberList' => $number)
    );
    }
}