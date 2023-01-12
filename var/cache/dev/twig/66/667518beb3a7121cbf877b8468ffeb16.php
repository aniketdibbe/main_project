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

/* default/dynamicFootwear.html.twig */
class __TwigTemplate_82fc5958826f7475237832972358c6a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/dynamicFootwear.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/dynamicFootwear.html.twig"));

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
 
<div class=\"row\" style=\"margin-top:20px;\" >
 
 
<body>
 <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"home\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"MensWear\">MensWear</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"WomensWear\">WomensWear</a>
            </li>
         </ul>
         <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-warning my-2 my-sm-0\" type=\"submit\">Search</button>
         </form>
      </div>
   </nav>
   <div class=\"row\" style=\"margin-top:20px;\">
   <div style=\"border-radius:50%,border:2px solid black\"><h3>Footwear</h3></div>
 
 ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["object"]);
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 48
            echo " <div class=\"col-md-3\" >
 <div style=\"border:solid Gray;\"align=\"center;\">
 
 <img class=\"rounded mx-auto d-block\" src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getimage", [], "method", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "\"style=\"height:200px; widht:100px;\"/> 
  <h3 align=\"center\">Price :";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPrice", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo " <del style=\"color:red;\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getOffer", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo " </del>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getOff", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "%</h3> 
  <p align=\"center\">";
            // line 53
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getDescription", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "</hp> 
 <p 
 ";
            // line 55
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getDescription", [], "method", false, false, true, 55), 55, $this->source), "html", null, true);
            echo " </p>
 </div>
 </div>
 
 
 
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo " </div>
 
 </body>
 </html>    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/dynamicFootwear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 62,  119 => 55,  114 => 53,  106 => 52,  102 => 51,  97 => 48,  93 => 47,  45 => 1,);
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
 
<div class=\"row\" style=\"margin-top:20px;\" >
 
 
<body>
 <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"home\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"MensWear\">MensWear</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"WomensWear\">WomensWear</a>
            </li>
         </ul>
         <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-warning my-2 my-sm-0\" type=\"submit\">Search</button>
         </form>
      </div>
   </nav>
   <div class=\"row\" style=\"margin-top:20px;\">
   <div style=\"border-radius:50%,border:2px solid black\"><h3>Footwear</h3></div>
 
 {% for object in object %}
 <div class=\"col-md-3\" >
 <div style=\"border:solid Gray;\"align=\"center;\">
 
 <img class=\"rounded mx-auto d-block\" src=\"{{ object.getimage() }}\"style=\"height:200px; widht:100px;\"/> 
  <h3 align=\"center\">Price :{{ object.getPrice}} <del style=\"color:red;\"> {{object.getOffer}} </del>{{object.getOff}}%</h3> 
  <p align=\"center\">{{ object.getDescription}}</hp> 
 <p 
 {{object.getDescription()}} </p>
 </div>
 </div>
 
 
 
 {% endfor %}
 </div>
 
 </body>
 </html>    ", "default/dynamicFootwear.html.twig", "/var/www/html/new/main_project/templates/default/dynamicFootwear.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 47);
        static $filters = array("escape" => 51);
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
