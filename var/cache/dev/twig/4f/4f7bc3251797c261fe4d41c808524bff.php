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

/* default/Electronics.html.twig */
class __TwigTemplate_1e9cfc66e44b01c8be245175f1085215 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/Electronics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/Electronics.html.twig"));

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



<!--Laptop Content-->


   <div class=\"row\" style=\"margin-top:20px;\" >
   <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray; \">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"laptop\">Laptop <span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
   
      <div class=\"col-md-3\" >  
       
      
       
         <div style=\"border:solid Gray;\"align=\"center;\">
            <h1 align=\"center\"><b>Ultraportable</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Electronics/laptop.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 52,999 <del style=\"color:red;\"> 55,000</del></h3>
            <p>
               
         A laptop is a personal computer that can be easily moved and used in a variety of locations.  </p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>MacBook</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Electronics/laptop4.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 83,599 <del style=\"color:red;\"> 85,999</del></h3>
            <p>A laptop is a personal computer that can be easily moved and used in a variety of locations..</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Gamming</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Electronics/laptop3.jpeg\" style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 62,099 <del style=\"color:red;\"> 68,000</del></h3>
            <p>A laptop is a personal computer that can be easily moved and used in a variety of locations.</p>
         </div>
      </div>
    </div>




    <!-- camera content -->

    <div class=\"row\" style=\"margin-top:20px;\">
    <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;padding-left:7px;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"camera\">Camera<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
    
      <div class=\"col-md-3\" >
      
         <div style=\"border:solid Gray;\"align=\"center;\">
             <h1 align=\"center\"><b>DSLR</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Electronics/camera1.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 27,599 <del style=\"color:red;\"> 30,999</del></h3>
            <p>
            camera, in photography, device for recording an image of an object on a light-sensitive surface.  </p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>MirrorLess</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Electronics/camera2.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 23,999 <del style=\"color:red;\"> 26,999</del></h3>
            <p> camera, in photography, device for recording an image of an object on a light-sensitive surface</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
              <h1 align=\"center\"><b>360 Cameras</b></h1>
            <img class=\"rounded mx-auto d-block\"  src=\"images/Electronics/camera3.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 42,999 <del style=\"color:red;\"> 45,099</del></h3>
            <p>
                camera, in photography, device for recording an image of an object on a light-sensitive surface</p>
         </div>
      </div>
    </div>


    <!--  Mobile content-->
     <div class=\"row\" style=\"margin-top:20px;\">
     <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"mobile\">Mobile<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
     
      <div class=\"col-md-3\" style=\"height:200px; widht:500px;\" >
       
     
         <div style=\"border:solid Gray;\"align=\"center;\">
            <h1 align=\"center\"><b>Android</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Electronics/mobile.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 26,999 <del style=\"color:red;\"> 30,999</del></h3>
            <p>
                a construction or sculpture frequently of wire and sheet metal shapes with parts that can be set in motion by air currents</p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>IOS</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Electronics/mobile2.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 88,,999 <del style=\"color:red;\"> 92,999</del></h3>
            <p>
                a construction or sculpture frequently of wire and sheet metal shapes with parts that can be set in motion by air currents</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Keypad</b></h1>
            <img  class=\"rounded mx-auto d-block\" src=\"images/Electronics/mobile3.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 5,999 <del style=\"color:red;\"> 8,999</del></h3>
            <p>
                a construction or sculpture frequently of wire and sheet metal shapes with parts that can be set in motion by air currents</p>
         </div>
      </div>
    </div>


       
 </div>     
   <!-- footer section start -->
     ";
        // line 165
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "Footer");
        echo "
   <!-- footer section end -->
</body>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/Electronics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 165,  63 => 17,  45 => 1,);
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



<!--Laptop Content-->


   <div class=\"row\" style=\"margin-top:20px;\" >
   <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray; \">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"laptop\">Laptop <span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
   
      <div class=\"col-md-3\" >  
       
      
       
         <div style=\"border:solid Gray;\"align=\"center;\">
            <h1 align=\"center\"><b>Ultraportable</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Electronics/laptop.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 52,999 <del style=\"color:red;\"> 55,000</del></h3>
            <p>
               
         A laptop is a personal computer that can be easily moved and used in a variety of locations.  </p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>MacBook</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Electronics/laptop4.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 83,599 <del style=\"color:red;\"> 85,999</del></h3>
            <p>A laptop is a personal computer that can be easily moved and used in a variety of locations..</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Gamming</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Electronics/laptop3.jpeg\" style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 62,099 <del style=\"color:red;\"> 68,000</del></h3>
            <p>A laptop is a personal computer that can be easily moved and used in a variety of locations.</p>
         </div>
      </div>
    </div>




    <!-- camera content -->

    <div class=\"row\" style=\"margin-top:20px;\">
    <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;padding-left:7px;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"camera\">Camera<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
    
      <div class=\"col-md-3\" >
      
         <div style=\"border:solid Gray;\"align=\"center;\">
             <h1 align=\"center\"><b>DSLR</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Electronics/camera1.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 27,599 <del style=\"color:red;\"> 30,999</del></h3>
            <p>
            camera, in photography, device for recording an image of an object on a light-sensitive surface.  </p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>MirrorLess</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Electronics/camera2.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 23,999 <del style=\"color:red;\"> 26,999</del></h3>
            <p> camera, in photography, device for recording an image of an object on a light-sensitive surface</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
              <h1 align=\"center\"><b>360 Cameras</b></h1>
            <img class=\"rounded mx-auto d-block\"  src=\"images/Electronics/camera3.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 42,999 <del style=\"color:red;\"> 45,099</del></h3>
            <p>
                camera, in photography, device for recording an image of an object on a light-sensitive surface</p>
         </div>
      </div>
    </div>


    <!--  Mobile content-->
     <div class=\"row\" style=\"margin-top:20px;\">
     <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"mobile\">Mobile<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
     
      <div class=\"col-md-3\" style=\"height:200px; widht:500px;\" >
       
     
         <div style=\"border:solid Gray;\"align=\"center;\">
            <h1 align=\"center\"><b>Android</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Electronics/mobile.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 26,999 <del style=\"color:red;\"> 30,999</del></h3>
            <p>
                a construction or sculpture frequently of wire and sheet metal shapes with parts that can be set in motion by air currents</p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>IOS</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/Electronics/mobile2.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 88,,999 <del style=\"color:red;\"> 92,999</del></h3>
            <p>
                a construction or sculpture frequently of wire and sheet metal shapes with parts that can be set in motion by air currents</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Keypad</b></h1>
            <img  class=\"rounded mx-auto d-block\" src=\"images/Electronics/mobile3.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 5,999 <del style=\"color:red;\"> 8,999</del></h3>
            <p>
                a construction or sculpture frequently of wire and sheet metal shapes with parts that can be set in motion by air currents</p>
         </div>
      </div>
    </div>


       
 </div>     
   <!-- footer section start -->
     {{pimcore_snippet(\"Footer\")}}
   <!-- footer section end -->
</body>", "default/Electronics.html.twig", "/var/www/html/pimcore/main_project/templates/default/Electronics.html.twig");
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
