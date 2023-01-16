<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/beauty.html.twig */
class __TwigTemplate_8f8a37e69cdee6c167e01bc458b8248a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/beauty.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/beauty.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
      <!-- owl carousel style -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css\" />
      <!-- bootstrap css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
      <!-- style css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
      <!-- Responsive-->
      <link rel=\"stylesheet\" href=\"css/responsive.css\">
    <title>Example</title>
</head>
<!--nav bar-->
<body>
      ";
        // line 17
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "Header");
        echo "




<!--FACE CARE Content-->


   <div class=\"row\" style=\"margin-top:20px;\" >
   <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray; \">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"Face\">FACECARE<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
   
      <div class=\"col-md-3\" >  
       
      
       
         <div style=\"border:solid Gray;\"align=\"center;\">
            <h1 align=\"center\"><b>Face WASH</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Beauty/facewash.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 299 <del style=\"color:red;\"> 599</del></h3>
            <p>
               FACE care is a range of practices that support skin integrity, enhance its appearance, and relieve skin conditions.  </p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>FACE CREAM</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Beauty/face cream.jpeg\"style=\"height:200px; width:100px;\"/> 
            <h3 align=\"center\">Price : 599 <del style=\"color:red;\"> 699</del></h3>
            <p>Face care is a range of practices that support skin integrity, enhance its appearance, and relieve skin conditions. </p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>FACE MASK</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Beauty/facemask.jpeg\" style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 299 <del style=\"color:red;\"> 499</del></h3>
            <p>Face care is a range of practices that support skin integrity, enhance its appearance, and relieve skin conditions. </p>
         </div>
      </div>
    </div>




    <!-- hair care content -->

    <div class=\"row\" style=\"margin-top:20px;\">
    <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;padding-left:7px;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"HairCare\">HAIR CARE &nbsp;<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
    
      <div class=\"col-md-3\" >
      
         <div style=\"border:solid Gray;\"align=\"center;\">
             <h1 align=\"center\"><b>Shampoo</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Beauty/shampoo1.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 599 <del style=\"color:red;\"> 799</del></h3>
            <p>
            Hair care is all the things people do to keep their hair clean, healthy-looking, and attractive </p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Conditioner</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Beauty/conditioner.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 499<del style=\"color:red;\"> 699</del></h3>
            <p>Hair care is all the things people do to keep their hair clean, healthy-looking, and attractive</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
              <h1 align=\"center\"><b>Oil</b></h1>
            <img class=\"rounded mx-auto d-block\"  src=\"images/Beauty/oil.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 399 <del style=\"color:red;\"> 599</del></h3>
            <p>
              Hair care is all the things people do to keep their hair clean, healthy-looking, and attractive</p>
         </div>
      </div>
    </div>


    <!--  body care content-->
     <div class=\"row\" style=\"margin-top:20px;\">
     <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"BodyCare\">BODYCARE<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
     
      <div class=\"col-md-3\" style=\"height:200px; widht:500px;\" >
       
     
         <div style=\"border:solid Gray;\"align=\"center;\">
            <h1 align=\"center\"><b>Body Wash</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Beauty/bodywash.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price :999 <del style=\"color:red;\"> 1,999</del></h3>
            <p>
              Body care means how an individual performs applications of dressings and ointments or lotions to their body, trims their toe- nails, and applies lotion to their feet.</p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Body lotion</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Beauty/bodylotion.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 599 <del style=\"color:red;\"> 799</del></h3>
            <p>
               Body care means how an individual performs applications of dressings and ointments or lotions to their body, trims their toe- nails, and applies lotion to their feet.</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Soap</b></h1>
            <img  class=\"rounded mx-auto d-block\" src=\"images/Beauty/soap.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 299 <del style=\"color:red;\"> 499</del></h3>
            <p>
              Body care means how an individual performs applications of dressings and ointments or lotions to their body, trims their toe- nails, and applies lotion to their feet.</p>
         </div>
      </div>
    </div>


    <!-- makeup content-->


    <div class=\"row\" style=\"margin-top:20px;\">
    <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"Makeup\">MAKE UP &nbsp;&nbsp;<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
   
      <div class=\"col-md-3\" >
               <div style=\"border:solid Gray;\">
             <h1 align=\"center\"><b>Lips makeup</b></h1>
            <img class=\"rounded mx-auto d-block\"  src=\"images/Beauty/lipstick.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 399 <del style=\"color:red;\"> 499</del></h3>
            <p>Cosmetics designed to enhance or alter one's appearance (makeup) can be used to conceal blemishes, enhance one's natural features</p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
             <h1 align=\"center\"><b>Eye makeup</b></h1>
            <img class=\"rounded mx-auto d-block\"  src=\"images/Beauty/kajal.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 299 <del style=\"color:red;\"> 399</del></h3>
            <p>Cosmetics designed to enhance or alter one's appearance (makeup) can be used to conceal blemishes, enhance one's natural features</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
             <h1 align=\"center\"><b>face makeup</b></h1>
            <img  class=\"rounded mx-auto d-block\"  src=\"images/Beauty/compact.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 259 <del style=\"color:red;\"> 399</del></h3>
            <p>Cosmetics designed to enhance or alter one's appearance (makeup) can be used to conceal blemishes, enhance one's natural features

               </p>
         </div>
      </div>
    
       
 </div>     
   <!-- footer section start -->
  ";
        // line 208
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "Footer");
        echo "
   <!-- footer section end -->
</body>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/beauty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 208,  63 => 17,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
      <!-- owl carousel style -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css\" />
      <!-- bootstrap css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
      <!-- style css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
      <!-- Responsive-->
      <link rel=\"stylesheet\" href=\"css/responsive.css\">
    <title>Example</title>
</head>
<!--nav bar-->
<body>
      {{pimcore_snippet(\"Header\")}}




<!--FACE CARE Content-->


   <div class=\"row\" style=\"margin-top:20px;\" >
   <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray; \">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"Face\">FACECARE<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
   
      <div class=\"col-md-3\" >  
       
      
       
         <div style=\"border:solid Gray;\"align=\"center;\">
            <h1 align=\"center\"><b>Face WASH</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Beauty/facewash.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 299 <del style=\"color:red;\"> 599</del></h3>
            <p>
               FACE care is a range of practices that support skin integrity, enhance its appearance, and relieve skin conditions.  </p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>FACE CREAM</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Beauty/face cream.jpeg\"style=\"height:200px; width:100px;\"/> 
            <h3 align=\"center\">Price : 599 <del style=\"color:red;\"> 699</del></h3>
            <p>Face care is a range of practices that support skin integrity, enhance its appearance, and relieve skin conditions. </p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>FACE MASK</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Beauty/facemask.jpeg\" style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 299 <del style=\"color:red;\"> 499</del></h3>
            <p>Face care is a range of practices that support skin integrity, enhance its appearance, and relieve skin conditions. </p>
         </div>
      </div>
    </div>




    <!-- hair care content -->

    <div class=\"row\" style=\"margin-top:20px;\">
    <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;padding-left:7px;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"HairCare\">HAIR CARE &nbsp;<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
    
      <div class=\"col-md-3\" >
      
         <div style=\"border:solid Gray;\"align=\"center;\">
             <h1 align=\"center\"><b>Shampoo</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Beauty/shampoo1.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 599 <del style=\"color:red;\"> 799</del></h3>
            <p>
            Hair care is all the things people do to keep their hair clean, healthy-looking, and attractive </p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Conditioner</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Beauty/conditioner.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 499<del style=\"color:red;\"> 699</del></h3>
            <p>Hair care is all the things people do to keep their hair clean, healthy-looking, and attractive</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
              <h1 align=\"center\"><b>Oil</b></h1>
            <img class=\"rounded mx-auto d-block\"  src=\"images/Beauty/oil.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 399 <del style=\"color:red;\"> 599</del></h3>
            <p>
              Hair care is all the things people do to keep their hair clean, healthy-looking, and attractive</p>
         </div>
      </div>
    </div>


    <!--  body care content-->
     <div class=\"row\" style=\"margin-top:20px;\">
     <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"BodyCare\">BODYCARE<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
     
      <div class=\"col-md-3\" style=\"height:200px; widht:500px;\" >
       
     
         <div style=\"border:solid Gray;\"align=\"center;\">
            <h1 align=\"center\"><b>Body Wash</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Beauty/bodywash.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price :999 <del style=\"color:red;\"> 1,999</del></h3>
            <p>
              Body care means how an individual performs applications of dressings and ointments or lotions to their body, trims their toe- nails, and applies lotion to their feet.</p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Body lotion</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Beauty/bodylotion.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 599 <del style=\"color:red;\"> 799</del></h3>
            <p>
               Body care means how an individual performs applications of dressings and ointments or lotions to their body, trims their toe- nails, and applies lotion to their feet.</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Soap</b></h1>
            <img  class=\"rounded mx-auto d-block\" src=\"images/Beauty/soap.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 299 <del style=\"color:red;\"> 499</del></h3>
            <p>
              Body care means how an individual performs applications of dressings and ointments or lotions to their body, trims their toe- nails, and applies lotion to their feet.</p>
         </div>
      </div>
    </div>


    <!-- makeup content-->


    <div class=\"row\" style=\"margin-top:20px;\">
    <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"Makeup\">MAKE UP &nbsp;&nbsp;<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
   
      <div class=\"col-md-3\" >
               <div style=\"border:solid Gray;\">
             <h1 align=\"center\"><b>Lips makeup</b></h1>
            <img class=\"rounded mx-auto d-block\"  src=\"images/Beauty/lipstick.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 399 <del style=\"color:red;\"> 499</del></h3>
            <p>Cosmetics designed to enhance or alter one's appearance (makeup) can be used to conceal blemishes, enhance one's natural features</p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
             <h1 align=\"center\"><b>Eye makeup</b></h1>
            <img class=\"rounded mx-auto d-block\"  src=\"images/Beauty/kajal.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 299 <del style=\"color:red;\"> 399</del></h3>
            <p>Cosmetics designed to enhance or alter one's appearance (makeup) can be used to conceal blemishes, enhance one's natural features</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
             <h1 align=\"center\"><b>face makeup</b></h1>
            <img  class=\"rounded mx-auto d-block\"  src=\"images/Beauty/compact.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 259 <del style=\"color:red;\"> 399</del></h3>
            <p>Cosmetics designed to enhance or alter one's appearance (makeup) can be used to conceal blemishes, enhance one's natural features

               </p>
         </div>
      </div>
    
       
 </div>     
   <!-- footer section start -->
  {{pimcore_snippet(\"Footer\")}}
   <!-- footer section end -->
</body>", "default/beauty.html.twig", "/var/www/html/new/main_project/templates/default/beauty.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("pimcore_snippet" => 17);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['pimcore_snippet']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
