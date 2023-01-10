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

/* default/Home.html.twig */
class __TwigTemplate_94820a5e6e10fe3571e0d04fefeef4c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/Home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/Home.html.twig"));

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

<body>
   <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"Home\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Electronic</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"Clothing\">Clothing</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Beauty</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Footwear</a>
            </li>
         </ul>
         <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-warning my-2 my-sm-0\" type=\"submit\">Search</button>
         </form>
      </div>
   </nav>

   <div class=\"row\" style=\"margin-top:20px;\">
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">
            
            <img src=\"images/whirlpool.png\"/> 
            <h3 align=\"center\">Price : 20,000 <del style=\"color:red;\"> 25,000</del></h3>
            <p>Whirlpool 6.5 Kg 5 Star Fully Automatic Top Load Washing Machine with Spiro Wash & 6th Sense Technology 
            (WHITEMAGIC ELITE 6.5 GREY 10Y, Grey)</p>
         </div>
      </div>

      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">
            <p>Whirlpool 6.5 Kg 5 Star Fully Automatic Top Load Washing Machine with Spiro Wash & 6th Sense Technology 
            (WHITEMAGIC ELITE 6.5 GREY 10Y, Grey)</p>
            <img src=\"images/whirlpool.png\"/> 
         </div>
      </div>
   
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">
            <p>Whirlpool 6.5 Kg 5 Star Fully Automatic Top Load Washing Machine with Spiro Wash & 6th Sense Technology 
            (WHITEMAGIC ELITE 6.5 GREY 10Y, Grey)</p>
            <img src=\"images/whirlpool.png\"/> 
         </div>
      </div>
   </div>
   <!-- footer section start -->
      <div class=\"footer_section layout_padding\">
         <div class=\"container\">
            <div class=\"subscribe_bt\"><a href=\"#\">Subscribe</a></div>
            <input type=\"text\" class=\"email_text\" placeholder=\"Enter Your Email\" name=\"Enter Your Email\">
            <div class=\"footer_section_2\">
               <div class=\"row\">
                  <div class=\"col-lg-3 margin_top\">
                     <div class=\"call_text\"><a href=\"#\"><img src=\"images/call-icon1.png\"><span class=\"padding_left_15\">Call Now +01 9876543210</span></a></div>
                     <div class=\"call_text\"><a href=\"#\"><img src=\"images/mail-icon1.png\"><span class=\"padding_left_15\">demo@gmail.com</span></a></div>
                  </div>
                  <div class=\"col-lg-3\">
                     <div class=\"information_main\">
                        <h4 class=\"information_text\">Information</h4>
                        <p class=\"many_text\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                     </div>
                  </div>
                  <div class=\"col-lg-3 col-md-6\">
                     <div class=\"information_main\">
                        <h4 class=\"information_text\">Helpful Links</h4>
                        <div class=\"footer_menu\">
                           <ul>
                              <li><a href=\"index.html\">Home</a></li>
                              <li><a href=\"about.html\">About</a></li>
                              <li><a href=\"services.html\">Services</a></li>
                              <li><a href=\"blog.html\">Blog</a></li>
                              <li><a href=\"news.html\">News</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-lg-3\">
                     <div class=\"information_main\">
                        <div class=\"footer_logo\"><a href=\"index.html\"><img src=\"images/ecommerce.png\"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <!-- footer section end -->
</body>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/Home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
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

<body>
   <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"Home\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Electronic</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"Clothing\">Clothing</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Beauty</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Footwear</a>
            </li>
         </ul>
         <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-warning my-2 my-sm-0\" type=\"submit\">Search</button>
         </form>
      </div>
   </nav>

   <div class=\"row\" style=\"margin-top:20px;\">
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">
            
            <img src=\"images/whirlpool.png\"/> 
            <h3 align=\"center\">Price : 20,000 <del style=\"color:red;\"> 25,000</del></h3>
            <p>Whirlpool 6.5 Kg 5 Star Fully Automatic Top Load Washing Machine with Spiro Wash & 6th Sense Technology 
            (WHITEMAGIC ELITE 6.5 GREY 10Y, Grey)</p>
         </div>
      </div>

      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">
            <p>Whirlpool 6.5 Kg 5 Star Fully Automatic Top Load Washing Machine with Spiro Wash & 6th Sense Technology 
            (WHITEMAGIC ELITE 6.5 GREY 10Y, Grey)</p>
            <img src=\"images/whirlpool.png\"/> 
         </div>
      </div>
   
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">
            <p>Whirlpool 6.5 Kg 5 Star Fully Automatic Top Load Washing Machine with Spiro Wash & 6th Sense Technology 
            (WHITEMAGIC ELITE 6.5 GREY 10Y, Grey)</p>
            <img src=\"images/whirlpool.png\"/> 
         </div>
      </div>
   </div>
   <!-- footer section start -->
      <div class=\"footer_section layout_padding\">
         <div class=\"container\">
            <div class=\"subscribe_bt\"><a href=\"#\">Subscribe</a></div>
            <input type=\"text\" class=\"email_text\" placeholder=\"Enter Your Email\" name=\"Enter Your Email\">
            <div class=\"footer_section_2\">
               <div class=\"row\">
                  <div class=\"col-lg-3 margin_top\">
                     <div class=\"call_text\"><a href=\"#\"><img src=\"images/call-icon1.png\"><span class=\"padding_left_15\">Call Now +01 9876543210</span></a></div>
                     <div class=\"call_text\"><a href=\"#\"><img src=\"images/mail-icon1.png\"><span class=\"padding_left_15\">demo@gmail.com</span></a></div>
                  </div>
                  <div class=\"col-lg-3\">
                     <div class=\"information_main\">
                        <h4 class=\"information_text\">Information</h4>
                        <p class=\"many_text\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                     </div>
                  </div>
                  <div class=\"col-lg-3 col-md-6\">
                     <div class=\"information_main\">
                        <h4 class=\"information_text\">Helpful Links</h4>
                        <div class=\"footer_menu\">
                           <ul>
                              <li><a href=\"index.html\">Home</a></li>
                              <li><a href=\"about.html\">About</a></li>
                              <li><a href=\"services.html\">Services</a></li>
                              <li><a href=\"blog.html\">Blog</a></li>
                              <li><a href=\"news.html\">News</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-lg-3\">
                     <div class=\"information_main\">
                        <div class=\"footer_logo\"><a href=\"index.html\"><img src=\"images/ecommerce.png\"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <!-- footer section end -->
</body>", "default/Home.html.twig", "/var/www/html/pimcore/main_project/templates/default/Home.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
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
