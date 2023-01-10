<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject\Ecommerce\Listing;
use Pimcore\Model\DataObject;

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
    public function ClothingAction(Request $request): Response
    {
        return $this->render('default/Clothing.html.twig');
    }
    public function HomeAction(Request $request): Response
    {
        return $this->render('default/Home.html.twig');
    }
    public function feedbackAction(Request $request): Response
    {
        return $this->render('default/feedback.html.twig');
    }

    //do listing of objects
    /**
     * @Route("/clothing", name="clothing-added",methods={"GET"})
     */
    public function EthinicAction(Request $request):Response
    {
        //object_array=[];
        $items=new DataObject\Ecommerce\Listing();
        $items->setOrderKey("RAND()",false);
        $items->setOrder("asc");
        return $this->render('default/EthinicWear.html.twig',['object'=>$items]);
    }
    // do listing of objects


    // /**
    //  * @Route("/clothing", name="clothing",methods={"GET"})
    //  */
    // public function EthinicAction(Request $request): Response
    // {
    //     return $this->render('default/EthinicWear.html.twig');
    // }

}
