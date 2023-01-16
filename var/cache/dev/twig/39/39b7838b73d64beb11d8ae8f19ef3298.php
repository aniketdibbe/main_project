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
class __TwigTemplate_f83625bb6ba9f802505e9c134719f3b9 extends Template
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
            <a class=\"nav-link\" href=\"home\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"ethnicWearProduct\">Ethnic Wear</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"WesternWear\">Western Wear</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"SportsWear\">Sports Wear</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"WinterWear\">Winter Wear</a>
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
            echo "\"style=\"height:300px; width:250px;margin-top:20px;\" align=\"center\" /><br> 
            <h5 align=\"center\"style=\"color:Red\"> ";
            // line 55
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getWearType", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo " </h5>
            <h3 align=\"center\"style=\"color:green\">Price :";
            // line 56
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPrice", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo " </h3>
            ";
            // line 59
            echo "               ";
            if ((twig_get_attribute($this->env, $this->source, $context["object"], "getClothingType", [], "any", false, false, true, 59) == "EthinicWear")) {
                // line 60
                echo "
                            <p class=\"rounded mx-auto d-block\" align=\"center\">Category : ";
                // line 61
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getClothingItem", [], "any", false, false, true, 61), "getEthinicWear", [], "any", false, false, true, 61), "getCategory", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "</p>

                            <p class=\"rounded mx-auto d-block\" align=\"center\">Size : ";
                // line 63
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getClothingItem", [], "any", false, false, true, 63), "getEthinicWear", [], "any", false, false, true, 63), "getSize", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "</p>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 64
$context["object"], "getClothingType", [], "any", false, false, true, 64) == "WinterWear")) {
                // line 65
                echo "
                            <p class=\"rounded mx-auto d-block\" align=\"center\">Category : ";
                // line 66
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getClothingItem", [], "any", false, false, true, 66), "getWinterWear", [], "any", false, false, true, 66), "getCategory", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "</p>

                            <p class=\"rounded mx-auto d-block\"align=\"center\">Size : ";
                // line 68
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getClothingItem", [], "any", false, false, true, 68), "getWinterWear", [], "any", false, false, true, 68), "getSize", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "</p>
               ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 69
$context["object"], "getClothingType", [], "any", false, false, true, 69) == "WesternWear")) {
                // line 70
                echo "
                            <p class=\"rounded mx-auto d-block\" align=\"center\">Category : ";
                // line 71
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getClothingItem", [], "any", false, false, true, 71), "getWesternWear", [], "any", false, false, true, 71), "getCategory", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                echo "</p>

                            <p class=\"rounded mx-auto d-block\"align=\"center\">Size : ";
                // line 73
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getClothingItem", [], "any", false, false, true, 73), "getWesternWear", [], "any", false, false, true, 73), "getSize", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "</p>
               ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 74
$context["object"], "getClothingType", [], "any", false, false, true, 74) == "SportsWear")) {
                // line 75
                echo "
                            <p class=\"rounded mx-auto d-block\" align=\"center\">Category : ";
                // line 76
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getClothingItem", [], "any", false, false, true, 76), "getSportsWear", [], "any", false, false, true, 76), "getCategory", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "</p>

                            <p class=\"rounded mx-auto d-block\"align=\"center\">Size : ";
                // line 78
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getClothingItem", [], "any", false, false, true, 78), "getSportsWear", [], "any", false, false, true, 78), "getSize", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo "</p>
                                          
                             ";
            }
            // line 81
            echo "            
         
         </div>

      </div> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "


<!--footer-->
      ";
        // line 91
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "Footer");
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
        return array (  193 => 91,  187 => 87,  176 => 81,  170 => 78,  165 => 76,  162 => 75,  160 => 74,  156 => 73,  151 => 71,  148 => 70,  146 => 69,  142 => 68,  137 => 66,  134 => 65,  132 => 64,  128 => 63,  123 => 61,  120 => 60,  117 => 59,  113 => 56,  109 => 55,  105 => 54,  101 => 52,  97 => 51,  45 => 1,);
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
            <a class=\"nav-link\" href=\"home\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"ethnicWearProduct\">Ethnic Wear</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"WesternWear\">Western Wear</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"SportsWear\">Sports Wear</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"WinterWear\">Winter Wear</a>
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
            <img class=\"rounded mx-auto d-block\" src=\"{{ object.getimages() }}\"style=\"height:300px; width:250px;margin-top:20px;\" align=\"center\" /><br> 
            <h5 align=\"center\"style=\"color:Red\"> {{ object.getWearType}} </h5>
            <h3 align=\"center\"style=\"color:green\">Price :{{ object.getPrice}} </h3>
            {# <p style=\"height:100px; widht:100px;margin-top:20px;\" align=\"center\" > 
               {{object.getDescription()}} </p> #}
               {% if object.getClothingType=='EthinicWear' %}

                            <p class=\"rounded mx-auto d-block\" align=\"center\">Category : {{ object.getClothingItem.getEthinicWear.getCategory }}</p>

                            <p class=\"rounded mx-auto d-block\" align=\"center\">Size : {{ object.getClothingItem.getEthinicWear.getSize }}</p>
                {% elseif object.getClothingType=='WinterWear' %}

                            <p class=\"rounded mx-auto d-block\" align=\"center\">Category : {{ object.getClothingItem.getWinterWear.getCategory }}</p>

                            <p class=\"rounded mx-auto d-block\"align=\"center\">Size : {{ object.getClothingItem.getWinterWear.getSize }}</p>
               {% elseif object.getClothingType=='WesternWear' %}

                            <p class=\"rounded mx-auto d-block\" align=\"center\">Category : {{ object.getClothingItem.getWesternWear.getCategory }}</p>

                            <p class=\"rounded mx-auto d-block\"align=\"center\">Size : {{ object.getClothingItem.getWesternWear.getSize }}</p>
               {% elseif object.getClothingType=='SportsWear' %}

                            <p class=\"rounded mx-auto d-block\" align=\"center\">Category : {{ object.getClothingItem.getSportsWear.getCategory }}</p>

                            <p class=\"rounded mx-auto d-block\"align=\"center\">Size : {{ object.getClothingItem.getSportsWear.getSize }}</p>
                                          
                             {% endif %}
            
         
         </div>

      </div> 
    {% endfor %}



<!--footer-->
      {{pimcore_snippet(\"Footer\")}}
</body>
</html>", "default/EthinicWear.html.twig", "/var/www/html/new/main_project/templates/default/EthinicWear.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 51, "if" => 59);
        static $filters = array("escape" => 54);
        static $functions = array("pimcore_snippet" => 91);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
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
