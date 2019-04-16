<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Cms\RegistryBlock;

class CmsController extends AbstractController
{
    /**
     * @Route("/cms", name="cms")
     */
    public function index(RegistryBlock $registryBlock)
    {
        dump($registryBlock->render('wesh'));

        return $this->render('cms/index.html.twig', [
            'controller_name' => 'CmsController',
        ]);
    }
}
