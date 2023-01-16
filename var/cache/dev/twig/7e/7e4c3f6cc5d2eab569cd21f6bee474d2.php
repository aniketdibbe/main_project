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

/* default/footwear.html.twig */
class __TwigTemplate_9bc2f5bb5eb085f76998c383ea2e6050 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/footwear.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/footwear.html.twig"));

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
    <style>
    ";
        // line 19
        echo "    </style>
</head>

<body>
   ";
        // line 23
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "Header");
        echo "

   <div class=\"row\" style=\"margin-top:20px;\">
     <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"MensWear\">Mens&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h3 align=\"center\">Sports Shoes</h3>
            
            <img  class=\"rounded mx-auto d-block\" src=\"images/adidas.jpeg\" style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 2999 <del style=\"color:red;\"> 5900</del><span style=\"color:green\">&nbsp;&nbsp;50 % off</span></h3>
            <h4 align=\"center\">Firefly-04  </h4>
            <p align=\"center\">sports Shoes (White, Pink)</p>
             
         </div>
      </div>

      <div class=\"col-md-3\" \"img\":\"height:200px\">
         <div style=\"border:solid Gray;\">
            <h3 align=\"center\">Sneakers</h3>
           
            <img class=\"rounded mx-auto d-block\"  src=\"images/sneaker.jpg\" style=\"height:200px; widht:100px;\"/> 
             <h3 align=\"center\">Price : 799 <del style=\"color:red;\"> 900</del><span style=\"color:green\">&nbsp;&nbsp;8 % off</span></h3>
             <h4 align=\"center\">Synthetic Leather</h4>
             <p align=\"center\">Daily Use Sneakers For Men  (White, Black, Red)</p>
              
         </div>
      </div>
   
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h3 align=\"center\">Sandal's</h3>
            
            <img class=\"rounded mx-auto d-block\" src=\"images/sandals.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 999 <del style=\"color:red;\"> 1900</del><span style=\"color:green\">&nbsp;&nbsp;49% off</span></h3>

            <h4 align=\"center\">Bata</h4>
            <p align=\"center\">Women synthentic sandals</p>
             
         </div>
      </div>
      </div>
     <div class=\"row\" style=\"margin-top:20px;\">
     <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"WomensWear\">Womens<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h3 align=\"center\">Formal Shoes</h3>
            <img  class=\"rounded mx-auto d-block\" src=\"images/formalshoes.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 999 <del style=\"color:red;\"> 3900</del><span style=\"color:green\">&nbsp;&nbsp;25 % off</span></h3>
            <h4 align=\"center\">Fantacia</h4>
            <p align=\"center\">Men Genuine Leather Formal shoes</p>
             

         </div>
      </div>

      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h3 align=\"center\">Flip-Flop </h3>
            <img class=\"rounded mx-auto d-block\"  src=\"images/flip.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 399 <del style=\"color:red;\"> 899</del><span style=\"color:green\">&nbsp;&nbsp;44 % off</span></h3>

            <h4 align=\"center\">Drunken</h4>
            <p align=\"center\">Flip-Flop slipers </p>
             
         </div>
      </div>
   
     <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h3 align=\"center\">School Shoes</h3>
            
            <img class=\"rounded mx-auto d-block\" src=\"images/school.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 399 <del style=\"color:red;\"> 799</del><span style=\"color:green\">&nbsp;&nbsp;49 % off</span></h3>
            
            <h4 align=\"center\">Fantacia</h4>
            <p align=\"center\">Men Genuine Leather Formal shoes</p>
            
         </div>
      </div>
      </div>
   
   <!-- footer section start -->
      ";
        // line 125
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "Footer");
        echo "
   <!-- footer section end -->
</body>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/footwear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 125,  67 => 23,  61 => 19,  45 => 1,);
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
    <style>
    {# img{
        height:100px;
        width:50%
    } #}
    </style>
</head>

<body>
   {{pimcore_snippet(\"Header\")}}

   <div class=\"row\" style=\"margin-top:20px;\">
     <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"MensWear\">Mens&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h3 align=\"center\">Sports Shoes</h3>
            
            <img  class=\"rounded mx-auto d-block\" src=\"images/adidas.jpeg\" style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 2999 <del style=\"color:red;\"> 5900</del><span style=\"color:green\">&nbsp;&nbsp;50 % off</span></h3>
            <h4 align=\"center\">Firefly-04  </h4>
            <p align=\"center\">sports Shoes (White, Pink)</p>
             
         </div>
      </div>

      <div class=\"col-md-3\" \"img\":\"height:200px\">
         <div style=\"border:solid Gray;\">
            <h3 align=\"center\">Sneakers</h3>
           
            <img class=\"rounded mx-auto d-block\"  src=\"images/sneaker.jpg\" style=\"height:200px; widht:100px;\"/> 
             <h3 align=\"center\">Price : 799 <del style=\"color:red;\"> 900</del><span style=\"color:green\">&nbsp;&nbsp;8 % off</span></h3>
             <h4 align=\"center\">Synthetic Leather</h4>
             <p align=\"center\">Daily Use Sneakers For Men  (White, Black, Red)</p>
              
         </div>
      </div>
   
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h3 align=\"center\">Sandal's</h3>
            
            <img class=\"rounded mx-auto d-block\" src=\"images/sandals.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 999 <del style=\"color:red;\"> 1900</del><span style=\"color:green\">&nbsp;&nbsp;49% off</span></h3>

            <h4 align=\"center\">Bata</h4>
            <p align=\"center\">Women synthentic sandals</p>
             
         </div>
      </div>
      </div>
     <div class=\"row\" style=\"margin-top:20px;\">
     <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"WomensWear\">Womens<span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h3 align=\"center\">Formal Shoes</h3>
            <img  class=\"rounded mx-auto d-block\" src=\"images/formalshoes.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 999 <del style=\"color:red;\"> 3900</del><span style=\"color:green\">&nbsp;&nbsp;25 % off</span></h3>
            <h4 align=\"center\">Fantacia</h4>
            <p align=\"center\">Men Genuine Leather Formal shoes</p>
             

         </div>
      </div>

      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h3 align=\"center\">Flip-Flop </h3>
            <img class=\"rounded mx-auto d-block\"  src=\"images/flip.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 399 <del style=\"color:red;\"> 899</del><span style=\"color:green\">&nbsp;&nbsp;44 % off</span></h3>

            <h4 align=\"center\">Drunken</h4>
            <p align=\"center\">Flip-Flop slipers </p>
             
         </div>
      </div>
   
     <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h3 align=\"center\">School Shoes</h3>
            
            <img class=\"rounded mx-auto d-block\" src=\"images/school.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 399 <del style=\"color:red;\"> 799</del><span style=\"color:green\">&nbsp;&nbsp;49 % off</span></h3>
            
            <h4 align=\"center\">Fantacia</h4>
            <p align=\"center\">Men Genuine Leather Formal shoes</p>
            
         </div>
      </div>
      </div>
   
   <!-- footer section start -->
      {{pimcore_snippet(\"Footer\")}}
   <!-- footer section end -->
</body>", "default/footwear.html.twig", "/var/www/html/pimcore/main_project/templates/default/footwear.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("pimcore_snippet" => 23);

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
