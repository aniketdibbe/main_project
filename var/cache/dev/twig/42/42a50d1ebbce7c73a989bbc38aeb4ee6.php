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

/* default/Device.html.twig */
class __TwigTemplate_ab8bb00eaad6a00c842268843c6cbf47 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/Device.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/Device.html.twig"));

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
          <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\" >
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0;\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"home\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"camera\">Camera</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"laptop\">Laptop</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"mobile\">Mobile</a>
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
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["object"]);
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 50
            echo "    <div class=\"col-md-3\" >
    <div style=\"border:solid Gray;margin-top:20px;\"align=\"center;\"> 
            <img class=\"rounded mx-auto d-block\" src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getimages", [], "method", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\"style=\"height:300px; width:250px;margin-top:20px;\" align=\"center\" /><br> 
            <h5 align=\"center\"style=\"color:Red\"> ";
            // line 53
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getElectronicType", [], "method", false, false, true, 53), 53, $this->source), "html", null, true);
            echo " </h5>
            <h3 align=\"center\"style=\"color:green\">Price :";
            // line 54
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPrice", [], "method", false, false, true, 54), 54, $this->source), "html", null, true);
            echo " </h3>
            ";
            // line 57
            echo "
               ";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, $context["object"], "getCategory", [], "any", false, false, true, 58) == "Mobile")) {
                // line 59
                echo "
                        <p class=\"rounded mx-auto d-block\" align=\"center\">MobileType:
\t\t\t\t\t\t\t\t\t";
                // line 61
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getDeviceitem", [], "any", false, false, true, 61), "getMobile", [], "any", false, false, true, 61), "getMobileType", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "</p> 

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">color:
\t\t\t\t\t\t\t\t\t";
                // line 64
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getDeviceitem", [], "any", false, false, true, 64), "getMobile", [], "any", false, false, true, 64), "getColor", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "</p> 
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Brand :
\t\t\t\t\t\t\t\t\t";
                // line 66
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getDeviceitem", [], "any", false, false, true, 66), "getMobile", [], "any", false, false, true, 66), "getBrand", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "</p>

\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 69
$context["object"], "getCategory", [], "any", false, false, true, 69) == "Laptop")) {
                // line 70
                echo "
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">LaptopType:
\t\t\t\t\t\t\t\t\t";
                // line 72
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getDeviceitem", [], "any", false, false, true, 72), "getLaptop", [], "any", false, false, true, 72), "getLaptopType", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                echo "</p>

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">color :
\t\t\t\t\t\t\t\t\t";
                // line 75
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getDeviceitem", [], "any", false, false, true, 75), "getLaptop", [], "any", false, false, true, 75), "getColor", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Brand :
\t\t\t\t\t\t\t\t\t";
                // line 77
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getDeviceitem", [], "any", false, false, true, 77), "getLaptop", [], "any", false, false, true, 77), "getBrand", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "</p>
                     ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 78
$context["object"], "getCategory", [], "any", false, false, true, 78) == "Camera")) {
                // line 79
                echo "
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">CameraType:
\t\t\t\t\t\t\t\t\t";
                // line 81
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getDeviceitem", [], "any", false, false, true, 81), "getCamera", [], "any", false, false, true, 81), "getCameraType", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo "</p>

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">color :
\t\t\t\t\t\t\t\t\t";
                // line 84
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getDeviceitem", [], "any", false, false, true, 84), "getCamera", [], "any", false, false, true, 84), "getColor", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Brand :
\t\t\t\t\t\t\t\t\t";
                // line 86
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getDeviceitem", [], "any", false, false, true, 86), "getCamera", [], "any", false, false, true, 86), "getBrand", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "</p>


\t\t\t\t\t\t\t   ";
            }
            // line 90
            echo "         </div>
      </div> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "


<!--footer-->
      ";
        // line 97
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "Footer");
        echo "
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/Device.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 97,  194 => 93,  186 => 90,  179 => 86,  174 => 84,  168 => 81,  164 => 79,  162 => 78,  158 => 77,  153 => 75,  147 => 72,  143 => 70,  141 => 69,  135 => 66,  130 => 64,  124 => 61,  120 => 59,  118 => 58,  115 => 57,  111 => 54,  107 => 53,  103 => 52,  99 => 50,  95 => 49,  45 => 1,);
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
          <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\" >
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0;\">
            <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"home\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"camera\">Camera</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"laptop\">Laptop</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"mobile\">Mobile</a>
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
            <h5 align=\"center\"style=\"color:Red\"> {{ object.getElectronicType() }} </h5>
            <h3 align=\"center\"style=\"color:green\">Price :{{ object.getPrice() }} </h3>
            {# <p style=\"height:100px; widht:100px;margin-top:20px;\" align=\"center\" > 
               {{object.getDescription()}} </p> #}

               {% if object.getCategory=='Mobile' %}

                        <p class=\"rounded mx-auto d-block\" align=\"center\">MobileType:
\t\t\t\t\t\t\t\t\t{{ object.getDeviceitem.getMobile.getMobileType}}</p> 

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">color:
\t\t\t\t\t\t\t\t\t{{ object.getDeviceitem.getMobile.getColor }}</p> 
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Brand :
\t\t\t\t\t\t\t\t\t{{ object.getDeviceitem.getMobile.getBrand }}</p>

\t\t\t\t\t\t
\t\t\t\t\t\t\t{% elseif object.getCategory=='Laptop' %}

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">LaptopType:
\t\t\t\t\t\t\t\t\t{{ object.getDeviceitem.getLaptop.getLaptopType}}</p>

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">color :
\t\t\t\t\t\t\t\t\t{{ object.getDeviceitem.getLaptop.getColor}}</p>
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Brand :
\t\t\t\t\t\t\t\t\t{{ object.getDeviceitem.getLaptop.getBrand }}</p>
                     {% elseif object.getCategory=='Camera' %}

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">CameraType:
\t\t\t\t\t\t\t\t\t{{ object.getDeviceitem.getCamera.getCameraType}}</p>

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">color :
\t\t\t\t\t\t\t\t\t{{ object.getDeviceitem.getCamera.getColor}}</p>
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Brand :
\t\t\t\t\t\t\t\t\t{{ object.getDeviceitem.getCamera.getBrand }}</p>


\t\t\t\t\t\t\t   {% endif %}
         </div>
      </div> 
    {% endfor %}



<!--footer-->
      {{pimcore_snippet(\"Footer\")}}
</body>
</html>", "default/Device.html.twig", "/var/www/html/pimcore/main_project/templates/default/Device.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 49, "if" => 58);
        static $filters = array("escape" => 52);
        static $functions = array("pimcore_snippet" => 97);

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
