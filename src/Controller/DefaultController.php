<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject\Ecommerce\Listing;
use Pimcore\Model\DataObject\Electronics;
use Pimcore\Model\DataObject\Beauty;
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

    public function ElectronicAction(Request $request): Response
    {
        return $this->render('default/Electronics.html.twig');
    }
    public function BeautyAction(Request $request): Response
    {
        return $this->render('default/beauty.html.twig');
    }
    public function SignInAction(Request $request): Response
    {
        return $this->render('default/signin.html.twig');
    }
    public function headerAction(Request $request): Response
    {
        return $this->render('default/header.html.twig');
    }


    //do listing of objects for cloths
    /**
     * @Route("/clothing", name="clothing-added",methods={"GET"})
     */
    public function EthinicAction(Request $request):Response
    {
        //object_array=[];
        $items=new DataObject\Ecommerce\Listing();
        // $items->setParentId(18);
        $items->setOrderKey("WearType");
        $items->setOrder("asc");
        return $this->render('default/EthinicWear.html.twig',['object'=>$items]);
    }

    
    //do listing of objects for electronics
     /**
     * @Route("/elctronics", name="electronic-added",methods={"GET"})
     */
    public function DeviceAction(Request $request):Response
    {
        //object_array=[];
        $items_1=new DataObject\Electronics\Listing();
        // $items->setParentId(18);
        $items_1->setOrderKey("ElectronicType");
        $items_1->setOrder("asc");
        return $this->render('default/Device.html.twig',['object'=>$items_1]);
    }

    //do listing of objects for Beauty
     /**
     * @Route("/Product", name="Product",methods={"GET"})
     */
    public function BeautyProductAction(Request $request):Response
    {
        //object_array=[];
        $items_2=new DataObject\Beauty\Listing();
        // $items->setParentId(18);
        // $items_2->setOrderKey("ProductType");
        $items_2->setOrder("asc");
        return $this->render('default/BeautyProduct.html.twig',['object'=>$items_2]);
    }


     


    
}
