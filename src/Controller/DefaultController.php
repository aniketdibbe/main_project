<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends FrontendController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function defaultAction(Request $request): Response
    {
        return $this->render('default/default.html.twig');
    }
    public function homeAction(Request $request): Response
    {
        return $this->render('default/home.html.twig');
    }
    public function HeaderAction(Request $request): Response
    {
        return $this->render('default/Header.html.twig');
    }
    public function footerAction(Request $request): Response
    {
        return $this->render('default/footer.html.twig');
    }
}
