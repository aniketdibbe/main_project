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

/* default/EthinicWear.html.twig */
class __TwigTemplate_88b4fb32026fb13cb58b895a14bdd917 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/EthinicWear.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/EthinicWear.html.twig"));

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
      <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
      
    <title>Example</title>
</head>
  <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\" >
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0;\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"http://main_project/Clothing?pimcore_preview=true&_dc=1673374912269\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"http://main_project/EthinicWear?pimcore_preview=true&_dc=1673380029833\">Ethnic Wear</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"http://main_project/EthinicWear?pimcore_preview=true&_dc=1673380029833\">Western Wear</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"http://main_project/EthinicWear?pimcore_preview=true&_dc=1673380029833\">Sports Wear</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"http://main_project/EthinicWear?pimcore_preview=true&_dc=1673380029833\">Winter Wear</a>
            </li>
         </ul>
         <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-warning my-2 my-sm-0\" type=\"submit\">Search</button>
         </form>
      </div>
   </nav>


<div class=\"row\" style=\"margin-top:20px;\" >
  

<body>
    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["object"]);
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 52
            echo "    <div class=\"col-md-3\" >
    <div style=\"border:solid Gray;margin-top:20px;\"align=\"center;\"> 
            <img class=\"rounded mx-auto d-block\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getimages", [], "method", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "\"style=\"height:300px; widht:150px;margin-top:20px;\" align=\"center\" /><br> 
            <h5 align=\"center\"style=\"color:Red\"> ";
            // line 55
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getWearType", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo " </h5>
            <h3 align=\"center\"style=\"color:green\">Price :";
            // line 56
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPrice", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo " </h3>
            <p style=\"height:100px; widht:100px;margin-top:20px;\" align=\"center\" > 
               ";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getDescription", [], "method", false, false, true, 58), 58, $this->source), "html", null, true);
            echo " </p>
         </div>
      </div> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "


<!--footer-->
     <div class=\"footer_section layout_padding\"style=\"margin-top:20px;\">
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
                        <div class=\"footer_logo\"><a href=\"index.html\"><img src=\"images/Elogo.jpg\"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/EthinicWear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 62,  118 => 58,  113 => 56,  109 => 55,  105 => 54,  101 => 52,  97 => 51,  45 => 1,);
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
      <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
      
    <title>Example</title>
</head>
  <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\" >
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0;\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"http://main_project/Clothing?pimcore_preview=true&_dc=1673374912269\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"http://main_project/EthinicWear?pimcore_preview=true&_dc=1673380029833\">Ethnic Wear</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"http://main_project/EthinicWear?pimcore_preview=true&_dc=1673380029833\">Western Wear</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"http://main_project/EthinicWear?pimcore_preview=true&_dc=1673380029833\">Sports Wear</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"http://main_project/EthinicWear?pimcore_preview=true&_dc=1673380029833\">Winter Wear</a>
            </li>
         </ul>
         <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-warning my-2 my-sm-0\" type=\"submit\">Search</button>
         </form>
      </div>
   </nav>


<div class=\"row\" style=\"margin-top:20px;\" >
  

<body>
    {% for object in object %}
    <div class=\"col-md-3\" >
    <div style=\"border:solid Gray;margin-top:20px;\"align=\"center;\"> 
            <img class=\"rounded mx-auto d-block\" src=\"{{ object.getimages() }}\"style=\"height:300px; widht:150px;margin-top:20px;\" align=\"center\" /><br> 
            <h5 align=\"center\"style=\"color:Red\"> {{ object.getWearType}} </h5>
            <h3 align=\"center\"style=\"color:green\">Price :{{ object.getPrice}} </h3>
            <p style=\"height:100px; widht:100px;margin-top:20px;\" align=\"center\" > 
               {{object.getDescription()}} </p>
         </div>
      </div> 
    {% endfor %}



<!--footer-->
     <div class=\"footer_section layout_padding\"style=\"margin-top:20px;\">
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
                        <div class=\"footer_logo\"><a href=\"index.html\"><img src=\"images/Elogo.jpg\"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</body>
</html>", "default/EthinicWear.html.twig", "/var/www/html/pimcore/main_project/templates/default/EthinicWear.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 51);
        static $filters = array("escape" => 54);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
