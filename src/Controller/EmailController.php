<?php

namespace App\Controller;
use App\Form\Loginform;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmailController extends FrontendController
{
     /**
     * @param Request $request
     * @return Response
     */
    /**
  * @Route("/email", name="login",methods={"GET"})
   */
    function welcomeAction(Request $request): Response
    {
        $mail=new \Pimcore\mail();
        $mail->to('punitdekate.1999@gmail.com');
        $mail->text("this is document");
        $mail->send();
        return $this->render('emails/welcome.html.twig',[
            "name"=>$request->get("name")
        ]);
    }

    // public function EmailAction()
    // {
        
    //     $mail=new \Pimcore\mail();
    //     $mail->to('punitdekate.1999@gmail.com');
    //     $mail->text("this is document");
    //     $mail->send();
    // }
}










?>