<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ImportController extends AbstractController
{
    /**
     * @Route("/import", name="import")
     */
    public function index()
    {

        set_time_limit(180);
        return $this->render('import/index.html.twig', [
            'controller_name' => 'ImportController',
        ]);
    }
}
