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


<div class=\"row\" style=\"margin-top:20px;\" >
  

<body>

    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["object"]);
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 25
            echo "    <div class=\"col-md-3\" >
    <div style=\"border:solid Gray;\"align=\"center;\">
            
            <img class=\"rounded mx-auto d-block\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getimages", [], "method", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "\"style=\"height:200px; widht:100px;\"/> 
            ";
            // line 30
            echo "            <p 
               ";
            // line 31
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getDescription", [], "method", false, false, true, 31), 31, $this->source), "html", null, true);
            echo " </p>
         </div>
      </div>
      ";
            // line 51
            echo "
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
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
        return array (  100 => 54,  92 => 51,  86 => 31,  83 => 30,  79 => 28,  74 => 25,  70 => 24,  45 => 1,);
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

    {% for object in object %}
    <div class=\"col-md-3\" >
    <div style=\"border:solid Gray;\"align=\"center;\">
            
            <img class=\"rounded mx-auto d-block\" src=\"{{ object.getimages() }}\"style=\"height:200px; widht:100px;\"/> 
            {# <h3 align=\"center\">Price :{{ object.getPrice}} <del style=\"color:red;\"> 5,000</del></h3> #}
            <p 
               {{object.getDescription()}} </p>
         </div>
      </div>
      {# <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>Womens Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/WomenKurta.jpeg\"style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 3,599 <del style=\"color:red;\"> 5,999</del></h3>
            <p>Kurtas are the soul of Indian traditional wear and are one of the most versatile pieces of clothing in a Woman's wardrobe.</p>
         </div>
      </div>
       <div class=\"col-md-3\" >
         <div style=\"border:solid Gray;\">
            <h1 align=\"center\"><b>kids Wear</b></h1>
            <img class=\"rounded mx-auto d-block\" src=\"images/kidskurta.jpg\" style=\"height:200px; widht:100px;\"/> 
            <h3 align=\"center\">Price : 2,099 <del style=\"color:red;\"> 4,000</del></h3>
            <p>Kurtas are the soul of Indian traditional wear and are one of the most versatile pieces of clothing in a Kid's wardrobe.</p>
         </div>
      </div>
    </div> #}

    
    {% endfor %}

    </body>
    </html>", "default/EthinicWear.html.twig", "/var/www/html/pimcore/main_project/templates/default/EthinicWear.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 24);
        static $filters = array("escape" => 28);
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
