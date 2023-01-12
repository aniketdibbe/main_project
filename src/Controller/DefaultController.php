<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject\Classificationstore;

use Pimcore\Model\DataObject\Footwear\Listing;
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
    // public function homeAction(Request $request): Response
    // {
    //     return $this->render('default/home.html.twig');
    // }
    public function HeaderAction(Request $request): Response
    {
        return $this->render('default/Header.html.twig');
    }
    public function footerAction(Request $request): Response
    {
        return $this->render('default/footer.html.twig');
    }
//     /**
//   * @Route("/footwear", name="footwear",methods={"GET"})
//   */
    public function footwearAction(Request $request): Response
    {
        return $this->render('default/footwear.html.twig');
    }
    public function signinAction(Request $request): Response
    {
        return $this->render('default/signin.html.twig');
    }
    public function signupAction(Request $request): Response
    {
        return $this->render('default/signup.html.twig');
    }
    /**
     * @param Request $request
     * @return Response
     */
 /**
  * @Route("/footwear", name="footwear",methods={"GET"})
   */
    public function dynamicFootwearAction(Request $request): Response
    {
    //object_array=[];
        $items=new DataObject\Footwear\Listing();
        $items->setOrderKey("RAND()",false);
        $items->setOrder("asc");
        
        
       
 

    return $this->render('default/dynamicFootwear.html.twig',['object'=>$items]);
    }



}
