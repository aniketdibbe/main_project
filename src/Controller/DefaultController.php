<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject\Clothing\Listing;
use Pimcore\Model\DataObject\Elecrtonics;
use Pimcore\Model\DataObject\Footwear;
use Pimcore\Model\DataObject\Beauty;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Feedback;

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
    public function footwearAction(Request $request): Response
    {
        return $this->render('default/footwear.html.twig');
    }
    public function beautyAction(Request $request): Response
    {
        return $this->render('default/beauty.html.twig');
    }
    public function ElectronicAction(Request $request): Response
    {
        return $this->render('default/Electronics.html.twig');
    }
    public function ClothingAction(Request $request): Response
    {
        return $this->render('default/Clothing.html.twig');
    }
    public function signinAction(Request $request): Response
    {
        return $this->render('default/signin.html.twig');
    }
    public function signupAction(Request $request): Response
    {
        return $this->render('default/signup.html.twig');
    }
    public function HeadAction(Request $request): Response
    {
        return $this->render('default/Head.html.twig');
    }
    public function FeedbackAction(Request $request): Response
    {
        return $this->render('default/feedback.html.twig');
    }
    


    //do listing of objects for cloths
    /**
     * @Route("/clothing", name="clothing-added",methods={"GET"})
     */
    public function EthinicAction(Request $request):Response
    {
        //object_array=[];
        $items=new DataObject\Clothing\Listing();
        // $items->setParentId(18);
        // $items->setOrderKey("WearType");
        $items->setOrder("asc");
        return $this->render('default/EthinicWear.html.twig',['object'=>$items]);
    }


    


    
    //do listing of objects for electronics
     /**
     * @Route("/elctronics", name="clothing-added",methods={"GET"})
     */
    public function DeviceAction(Request $request):Response
    {
        //object_array=[];
        $items_1=new DataObject\Elecrtonics\Listing();
        // $items->setParentId(18);
        $items_1->setOrderKey("ElectronicType");
        $items_1->setOrder("asc");
        return $this->render('default/Device.html.twig',['object'=>$items_1]);
        
    }
    public function BeautyProductAction(Request $request):Response
    {
        //object_array=[];
        $items_2=new DataObject\Beauty\Listing();
        // $items->setParentId(18);
        // $items_2->setOrderKey("ProductType");
        $items_2->setOrder("asc");
        return $this->render('default/BeautyProduct.html.twig',['object'=>$items_2]);
    }
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

    /**

     * @Route("/laptop", name="laptop", methods={"GET"})

     * @param Request $request

     * @return Response

     */

     public function laptopAction(Request $request): Response
     {
         $items = new DataObject\Elecrtonics\Listing();
         $items->setOrderKey("RAND()", false);
         $items->setOrder('asc');
         $laptops = [];
         foreach ($items as $item){
             if ($item->getCategory()=='Laptop') {
                 array_push($laptops, $item);
             }
         }
         return $this->render('default/Device.html.twig', ['object'=>$laptops]);
     }
     /**

     * @Route("/camera", name="camera", methods={"GET"})

     * @param Request $request

     * @return Response

     */

     public function CameraAction(Request $request): Response
     {
         $items = new DataObject\Elecrtonics\Listing();
         $items->setOrderKey("RAND()", false);
         $items->setOrder('asc');
         $camera = [];
         foreach ($items as $item){
             if ($item->getCategory()=='Camera') {
                 array_push($camera, $item);
             }
         }
         return $this->render('default/Device.html.twig', ['object'=>$camera]);
     }
     /**

     * @Route("/mobile", name="mobile", methods={"GET"})

     * @param Request $request

     * @return Response

     */

     public function mobileAction(Request $request): Response
     {
         $items = new DataObject\Elecrtonics\Listing();
         $items->setOrderKey("RAND()", false);
         $items->setOrder('asc');
         $mobile = [];
         foreach ($items as $item){
             if ($item->getCategory()=='Mobile') {
                 array_push($mobile, $item);
             }
         }
         return $this->render('default/Device.html.twig', ['object'=>$mobile]);
     }

     /**

     * @Route("/ethnicWearProduct", name="ethnicWear", methods={"GET"})

     * @param Request $request

     * @return Response

     */

    public function ethnicWearAction(Request $request): Response

    {

        $items = new DataObject\Clothing\Listing();

        $items->setOrderKey("RAND()", false);

        $items->setOrder('asc');

        $ethnicWear = [];

        foreach ($items as $item){

            if ($item->getClothingType()=='EthinicWear') {

                array_push($ethnicWear, $item);

            }

        }

        return $this->render('default/EthinicWear.html.twig', ['object'=>$ethnicWear]);

    }






     /**

     * @Route("/ethnicWearProduct/{page}", methods={"GET","POST"})

     * @param Request $request

     * @return Response

     */

     public function ethnicWearPageAction($page): Response

     {
 
         $items = new DataObject\Clothing\Listing();
 
         $items->setOrderKey("RAND()", false);
 
         $items->setOrder('asc');
         $objects=[];
 
         $ethnicWear = [];
 
         foreach ($items as $item){
 
             if ($item->getClothingType()=='EthinicWear') {
 
                 array_push($ethnicWear, $item);
 
             }
 
         }
         $pageitems=array_slice($objects,($page-1)*3,3);
         $totalpages=count($objects)/3;
 
         return $this->render('default/EthinicWear.html.twig', ['object'=>$pageitems,'number'=>$totalpages]);
 
     }


       /**

     * @Route("/WinterWear", name="WinterWear", methods={"GET"})

     * @param Request $request

     * @return Response

     */

     public function WinterWearAction(Request $request): Response

     {
 
         $items = new DataObject\Clothing\Listing();
 
         $items->setOrderKey("RAND()", false);
 
         $items->setOrder('asc');
 
         $WinterWear = [];
 
         foreach ($items as $item){
 
             if ($item->getClothingType()=='WinterWear') {
 
                 array_push($WinterWear, $item);
 
             }
 
         }
 
         return $this->render('default/EthinicWear.html.twig', ['object'=>$WinterWear]);
 
     }


          /**

     * @Route("/WesternWear", name="WesternWear", methods={"GET"})

     * @param Request $request

     * @return Response

     */

     public function WesternWearAction(Request $request): Response

     {
 
         $items = new DataObject\Clothing\Listing();
 
         $items->setOrderKey("RAND()", false);
 
         $items->setOrder('asc');
 
         $WesternWear = [];
 
         foreach ($items as $item){
 
             if ($item->getClothingType()=='WesternWear') {
 
                 array_push($WesternWear, $item);
 
             }
 
         }
 
         return $this->render('default/EthinicWear.html.twig', ['object'=>$WesternWear]);
 
     }


    /**
     * @Route("/SportsWear", name="SportsWear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
     public function SportsWearAction(Request $request): Response
     {
         $items = new DataObject\Clothing\Listing();
         $items->setOrderKey("RAND()", false);
         $items->setOrder('asc');
         $SportsWear = [];
         foreach ($items as $item){
             if ($item->getClothingType()=='SportsWear') {
                 array_push($SportsWear, $item);
             }
         }
         return $this->render('default/EthinicWear.html.twig', ['object'=>$SportsWear]);
     }
     /**
     * @Route("/Face", name="Face", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function FaceAction(Request $request): Response
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("RAND()", false);
        $items->setOrder('asc');
        $Face = [];
        foreach ($items as $item){
            if ($item->getBeautyType()=='FaceCare') {
                array_push($Face, $item);
            }
        }
        return $this->render('default/BeautyProduct.html.twig', ['object'=>$Face]);
    }
    /**
     * @Route("/HairCare", name="HairCare", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function HairCareAction(Request $request): Response
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("RAND()", false);
        $items->setOrder('asc');
        $HairCare = [];
        foreach ($items as $item){
            if ($item->getBeautyType()=='HairCare') {
                array_push($HairCare, $item);
            }
        }
        return $this->render('default/BeautyProduct.html.twig', ['object'=>$HairCare]);
    }
    /**
     * @Route("/BodyCare", name="BodyCare", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function BodyCareAction(Request $request): Response
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("RAND()", false);
        $items->setOrder('asc');
        $BodyCare = [];
        foreach ($items as $item){
            if ($item->getBeautyType()=='BodyCare') {
                array_push($BodyCare, $item);
            }
        }
        return $this->render('default/BeautyProduct.html.twig', ['object'=>$BodyCare]);
    }
    /**
     * @Route("/Makeup", name="Makeup", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function MakeupAction(Request $request): Response
    {
        $items = new DataObject\Beauty\Listing();
        $items->setOrderKey("RAND()", false);
        $items->setOrder('asc');
        $Makeup = [];
        foreach ($items as $item){
            if ($item->getBeautyType()=='Makeup') {
                array_push($Makeup, $item);
            }
        }
        return $this->render('default/BeautyProduct.html.twig', ['object'=>$Makeup]);
    }
    /**
     * @Route("/MensWear", name="MensWear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function MensWearAction(Request $request): Response
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("RAND()", false);
        $items->setOrder('asc');
        $MensWear = [];
        foreach ($items as $item){
            if ($item->getGender()=='Men') {
                array_push($MensWear, $item);
            }
        }
        return $this->render('default/dynamicFootwear.html.twig', ['object'=>$MensWear]);
    }
    /**
     * @Route("/WomensWear", name="WomensWear", methods={"GET"})
     * @param Request $request
     * @return Response
     */
    public function WomensWearAction(Request $request): Response
    {
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("RAND()", false);
        $items->setOrder('asc');
        $WomensWear = [];
        foreach ($items as $item){
            if ($item->getGender()=='Women') {
                array_push($WomensWear, $item);
            }
        }
        return $this->render('default/dynamicFootwear.html.twig', ['object'=>$WomensWear]);
    }



   /**

  * @Route("/email", name="email",methods={"POST"})

   */

   public function email(Request $request): Response

   {
       $object=new feedback();
       $key="feedback".time();
       $object->setkey($key);
       $object->setParentId(74);
       $object->setName($_POST["name"]);
       $object->setComments($_POST["comments"]);
       $object->save();
 
 
         $mail=new \Pimcore\Mail();
 
         $mail->to('natashaqureshi00008@gmail.com');
 
         $mail->text("this is document");
 
         $mail->send();
 
         return $this->render('default/Header.html.twig');
 
   }


    
}