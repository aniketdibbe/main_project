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

/* default/Clothing.html.twig */
class __TwigTemplate_c70d8e13a720b635088a94d093ea2301 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/Clothing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/Clothing.html.twig"));

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




<!--Ethinic Wear Content-->


   <div class=\"row\" style=\"margin-top:20px;\" >
   <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray; \">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"ethnicWearProduct\">Ethinic wear <span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
   
      <div class=\"col-md-3\" >  
       
      
       
         <div style=\"border:solid Gray;\"align=\"center;\">
            <h1 align=\"center\"><b>Mens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/clothing/MenKurta.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 2,999 <del style=\"color:red;\"> 5,000</del></h3>
            <p>
               Kurtas are the soul of Indian traditional wear and are one of the most versatile pieces of clothing in a man's wardrobe. </p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Womens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/clothing/WomenKurta.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 3,599 <del style=\"color:red;\"> 5,999</del></h3>
            <p>Kurtas are the soul of Indian traditional wear and are one of the most versatile pieces of clothing in a Woman's wardrobe.</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>kids Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/clothing/kidskurta.jpg\" style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 2,099 <del style=\"color:red;\"> 4,000</del></h3>
            <p>Kurtas are the soul of Indian traditional wear and are one of the most versatile pieces of clothing in a Kid's wardrobe.</p>
         </div>
      </div>
    </div>




    <!-- western wear content -->

    <div class=\"row\" style=\"margin-top:20px;\">
    <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;padding-left:7px;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"WesternWear\">Western wear <span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
    
      <div class=\"col-md-3\" >
      
         <div style=\"border:solid Gray;\"align=\"center;\">
             <h1 align=\"center\"><b>Mens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/clothing/westernMen.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 3,599 <del style=\"color:red;\"> 7,999</del></h3>
            <p>
            The western aesthetic is absolutely everywhere, with cowboy boots, fringe jackets, prairie dresses. </p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Womens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/clothing/WesternWomen.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 3,999 <del style=\"color:red;\"> 6,999</del></h3>
            <p>The western aesthetic is absolutely everywhere, with cowboy boots, fringe jackets, prairie dresses.</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
              <h1 align=\"center\"><b>kids Wear</b></h1>
            <img class=\"rounded mx-auto d-block\"  src=\"images/clothing/westernKid.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 2,999 <del style=\"color:red;\"> 5,099</del></h3>
            <p>
               The western aesthetic is absolutely everywhere, with cowboy boots, fringe jackets, prairie dresses.</p>
         </div>
      </div>
    </div>


    <!--  winter wear content-->
     <div class=\"row\" style=\"margin-top:20px;\">
     <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"WinterWear\">Winter wear <span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
     
      <div class=\"col-md-3\" style=\"height:200px; widht:500px;\" >
       
     
         <div style=\"border:solid Gray;\"align=\"center;\">
            <h1 align=\"center\"><b>Mens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/clothing/WinterMan.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 6,999 <del style=\"color:red;\"> 10,999</del></h3>
            <p>
               Winter clothes are especially outerwear like coats, jackets, hats, scarves and gloves or mittens, earmuffs, but also warm underwear like long underwear, union suits and socks.</p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Womens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/clothing/WomenWinter.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 7,,999 <del style=\"color:red;\"> 12,999</del></h3>
            <p>
               Winter clothes are especially outerwear like coats, jackets, hats, scarves and gloves or mittens, earmuffs, but also warm underwear like long underwear, union suits and socks.</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>kids Wear</b></h1>
            <img  class=\"rounded mx-auto d-block\" src=\"images/clothing/kidsWinter.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 3,999 <del style=\"color:red;\"> 8,999</del></h3>
            <p>
               Winter clothes are especially outerwear like coats, jackets, hats, scarves and gloves or mittens, earmuffs, but also warm underwear like long underwear, union suits and socks.</p>
         </div>
      </div>
    </div>


    <!-- sports wear content-->


    <div class=\"row\" style=\"margin-top:20px;\">
    <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"SportsWear\">Sports wear <span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
   
      <div class=\"col-md-3\" >
               <div style=\"border:solid Gray;\">
             <h1 align=\"center\"><b>Mens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\"  src=\"images/clothing/mensports.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 1,299 <del style=\"color:red;\"> 4,990</del></h3>
            <p>

         Sportswear or activewear is clothing, including footwear, worn for sport or physical exercise. Sport-specific clothing is worn for most sports and physical exercise, for practical, comfort or safety reasons.</p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
             <h1 align=\"center\"><b>Womens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\"  src=\"images/clothing/WomenSports.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 899 <del style=\"color:red;\"> 12,999</del></h3>
            <p>
               Sportswear or activewear is clothing, including footwear, worn for sport or physical exercise. Sport-specific clothing is worn for most sports and physical exercise, for practical, comfort or safety reasons.</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
             <h1 align=\"center\"><b>kids Wear</b></h1>
            <img  class=\"rounded mx-auto d-block\"  src=\"images//clothing/kidsSports.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 599 <del style=\"color:red;\"> 1,999</del></h3>
            <p>

               Sportswear or activewear is clothing, including footwear, worn for sport or physical exercise. Sport-specific clothing is worn for most sports and physical exercise, for practical, comfort or safety reasons.</p>
         </div>
      </div>
    
       
 </div>     
   <!-- footer section start -->
      ";
        // line 211
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "Footer");
        echo "
   <!-- footer section end -->
</body>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/Clothing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 211,  63 => 17,  45 => 1,);
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




<!--Ethinic Wear Content-->


   <div class=\"row\" style=\"margin-top:20px;\" >
   <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray; \">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"ethnicWearProduct\">Ethinic wear <span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
   
      <div class=\"col-md-3\" >  
       
      
       
         <div style=\"border:solid Gray;\"align=\"center;\">
            <h1 align=\"center\"><b>Mens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/clothing/MenKurta.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 2,999 <del style=\"color:red;\"> 5,000</del></h3>
            <p>
               Kurtas are the soul of Indian traditional wear and are one of the most versatile pieces of clothing in a man's wardrobe. </p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Womens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/clothing/WomenKurta.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 3,599 <del style=\"color:red;\"> 5,999</del></h3>
            <p>Kurtas are the soul of Indian traditional wear and are one of the most versatile pieces of clothing in a Woman's wardrobe.</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>kids Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/clothing/kidskurta.jpg\" style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 2,099 <del style=\"color:red;\"> 4,000</del></h3>
            <p>Kurtas are the soul of Indian traditional wear and are one of the most versatile pieces of clothing in a Kid's wardrobe.</p>
         </div>
      </div>
    </div>




    <!-- western wear content -->

    <div class=\"row\" style=\"margin-top:20px;\">
    <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;padding-left:7px;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"WesternWear\">Western wear <span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
    
      <div class=\"col-md-3\" >
      
         <div style=\"border:solid Gray;\"align=\"center;\">
             <h1 align=\"center\"><b>Mens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/clothing/westernMen.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 3,599 <del style=\"color:red;\"> 7,999</del></h3>
            <p>
            The western aesthetic is absolutely everywhere, with cowboy boots, fringe jackets, prairie dresses. </p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Womens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/clothing/WesternWomen.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 3,999 <del style=\"color:red;\"> 6,999</del></h3>
            <p>The western aesthetic is absolutely everywhere, with cowboy boots, fringe jackets, prairie dresses.</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
              <h1 align=\"center\"><b>kids Wear</b></h1>
            <img class=\"rounded mx-auto d-block\"  src=\"images/clothing/westernKid.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 2,999 <del style=\"color:red;\"> 5,099</del></h3>
            <p>
               The western aesthetic is absolutely everywhere, with cowboy boots, fringe jackets, prairie dresses.</p>
         </div>
      </div>
    </div>


    <!--  winter wear content-->
     <div class=\"row\" style=\"margin-top:20px;\">
     <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"WinterWear\">Winter wear <span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
     
      <div class=\"col-md-3\" style=\"height:200px; widht:500px;\" >
       
     
         <div style=\"border:solid Gray;\"align=\"center;\">
            <h1 align=\"center\"><b>Mens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/clothing/WinterMan.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 6,999 <del style=\"color:red;\"> 10,999</del></h3>
            <p>
               Winter clothes are especially outerwear like coats, jackets, hats, scarves and gloves or mittens, earmuffs, but also warm underwear like long underwear, union suits and socks.</p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Womens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/clothing/WomenWinter.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 7,,999 <del style=\"color:red;\"> 12,999</del></h3>
            <p>
               Winter clothes are especially outerwear like coats, jackets, hats, scarves and gloves or mittens, earmuffs, but also warm underwear like long underwear, union suits and socks.</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>kids Wear</b></h1>
            <img  class=\"rounded mx-auto d-block\" src=\"images/clothing/kidsWinter.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 3,999 <del style=\"color:red;\"> 8,999</del></h3>
            <p>
               Winter clothes are especially outerwear like coats, jackets, hats, scarves and gloves or mittens, earmuffs, but also warm underwear like long underwear, union suits and socks.</p>
         </div>
      </div>
    </div>


    <!-- sports wear content-->


    <div class=\"row\" style=\"margin-top:20px;\">
    <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"SportsWear\">Sports wear <span class=\"sr-only\">(current)</span></a>
            </li>
      </div>
      </nav>
   
      <div class=\"col-md-3\" >
               <div style=\"border:solid Gray;\">
             <h1 align=\"center\"><b>Mens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\"  src=\"images/clothing/mensports.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 1,299 <del style=\"color:red;\"> 4,990</del></h3>
            <p>

         Sportswear or activewear is clothing, including footwear, worn for sport or physical exercise. Sport-specific clothing is worn for most sports and physical exercise, for practical, comfort or safety reasons.</p>
         </div>
      </div>
      <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
             <h1 align=\"center\"><b>Womens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\"  src=\"images/clothing/WomenSports.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 899 <del style=\"color:red;\"> 12,999</del></h3>
            <p>
               Sportswear or activewear is clothing, including footwear, worn for sport or physical exercise. Sport-specific clothing is worn for most sports and physical exercise, for practical, comfort or safety reasons.</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
             <h1 align=\"center\"><b>kids Wear</b></h1>
            <img  class=\"rounded mx-auto d-block\"  src=\"images//clothing/kidsSports.jpg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 599 <del style=\"color:red;\"> 1,999</del></h3>
            <p>

               Sportswear or activewear is clothing, including footwear, worn for sport or physical exercise. Sport-specific clothing is worn for most sports and physical exercise, for practical, comfort or safety reasons.</p>
         </div>
      </div>
    
       
 </div>     
   <!-- footer section start -->
      {{pimcore_snippet(\"Footer\")}}
   <!-- footer section end -->
</body>", "default/Clothing.html.twig", "/var/www/html/new/main_project/templates/default/Clothing.html.twig");
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
