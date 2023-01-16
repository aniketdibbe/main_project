<?php




namespace App\Controller;




use Pimcore\Controller\FrontendController;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;



class MyController extends FrontendController

{

     /**

  * @Route("/email", name="login",methods={"GET"})

   */

  public function Emailtrigger()

  {

        $mail=new \Pimcore\Mail();

        $mail->to('natashaqureshi00008@gmail.com.com');

        $mail->text("this is document");

        $mail->send();

        return $this->render('default/Header.html.twig');

  }

    

}


















?>