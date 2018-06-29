<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Room;
use App\Form\RoomType;
use App\Repository\RoomRepository;

use Symfony\Component\HttpFoundation\Response;



class DefaultController extends Controller
{
    /**
     * @Route("/", name="home_page")
     */
    public function index()
    {
;
        $template = 'default/index.html.twig';
        $args = [
        ];
        return $this->render($template, $args);
    }


}
