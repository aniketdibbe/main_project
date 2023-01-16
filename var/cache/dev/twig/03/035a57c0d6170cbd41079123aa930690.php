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

/* default/BeautyProduct.html.twig */
class __TwigTemplate_3cfa9421b250dedc396417921ff5fb67 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/BeautyProduct.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/BeautyProduct.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta
\t\tcharset=\"UTF-8\">
\t\t<!-- owl carousel style -->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css\"/>
\t\t<!-- bootstrap css -->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
\t\t<!-- style css -->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
\t\t<!-- Responsive-->
\t\t<link rel=\"stylesheet\" href=\"css/responsive.css\">
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">

\t\t<title>Example</title>
\t</head>
\t<nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
\t\t\t<ul class=\"navbar-nav mr-auto mt-2 mt-lg-0;\">
\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t<a class=\"nav-link\" href=\"home\">Home
\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"Face\">FACE</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"HairCare\">HAIR CARE</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"BodyCare\">BODY CARE</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"Makeup\">MAKEUP</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<form class=\"form-inline my-2 my-lg-0\">
\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t<button class=\"btn btn-outline-warning my-2 my-sm-0\" type=\"submit\">Search</button>
\t\t\t</form>
\t\t</div>
\t</nav>


\t<div class=\"row\" style=\"margin-top:20px;\">


\t\t<body>
\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["object"]);
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 58
            echo "\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div style=\"border:solid Gray;margin-top:20px;\" align=\"center;\">
\t\t\t\t\t\t<img class=\"rounded mx-auto d-block\" src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getImages", [], "method", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "\" style=\"height:300px; width:250px;margin-top:20px;\" align=\"center\"/><br>
\t\t\t\t\t\t";
            // line 62
            echo "\t\t\t\t\t\t<h3 align=\"center\" style=\"color:green\">Price :";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPrice", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t";
            // line 66
            echo "\t\t\t\t\t\t</p>
                 ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, $context["object"], "getBeautyType", [], "any", false, false, true, 67) == "BodyCare")) {
                // line 68
                echo "
                        <p class=\"rounded mx-auto d-block\" align=\"center\">Category :
\t\t\t\t\t\t\t\t\t";
                // line 70
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getBeautyProductType", [], "any", false, false, true, 70), "getBodyCare", [], "any", false, false, true, 70), "getCategory", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "</p> 

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Quantity :
\t\t\t\t\t\t\t\t\t";
                // line 73
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getBeautyProductType", [], "any", false, false, true, 73), "getBodyCare", [], "any", false, false, true, 73), "getQuantity", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "</p> 
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Brand :
\t\t\t\t\t\t\t\t\t";
                // line 75
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getBeautyProductType", [], "any", false, false, true, 75), "getBodyCare", [], "any", false, false, true, 75), "getBrand", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                echo "</p>

\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 78
$context["object"], "getBeautyType", [], "any", false, false, true, 78) == "FaceCare")) {
                // line 79
                echo "
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Category :
\t\t\t\t\t\t\t\t\t";
                // line 81
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getBeautyProductType", [], "any", false, false, true, 81), "getFaceCare", [], "any", false, false, true, 81), "getCategory", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo "</p>

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Quantity :
\t\t\t\t\t\t\t\t\t";
                // line 84
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getBeautyProductType", [], "any", false, false, true, 84), "getFaceCare", [], "any", false, false, true, 84), "getQuantity", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Brand :
\t\t\t\t\t\t\t\t\t";
                // line 86
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getBeautyProductType", [], "any", false, false, true, 86), "getFaceCare", [], "any", false, false, true, 86), "getBrand", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 87
$context["object"], "getBeautyType", [], "any", false, false, true, 87) == "HairCare")) {
                // line 88
                echo "
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Category :
\t\t\t\t\t\t\t\t\t";
                // line 90
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getBeautyProductType", [], "any", false, false, true, 90), "getHairCare", [], "any", false, false, true, 90), "getCategory", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                echo "</p>

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Quantity :
\t\t\t\t\t\t\t\t\t";
                // line 93
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getBeautyProductType", [], "any", false, false, true, 93), "getHairCare", [], "any", false, false, true, 93), "getQuantity", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Brand :
\t\t\t\t\t\t\t\t\t";
                // line 95
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getBeautyProductType", [], "any", false, false, true, 95), "getHairCare", [], "any", false, false, true, 95), "getBrand", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 96
$context["object"], "getBeautyType", [], "any", false, false, true, 96) == "Makeup")) {
                // line 97
                echo "
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Category :
\t\t\t\t\t\t\t\t\t";
                // line 99
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getBeautyProductType", [], "any", false, false, true, 99), "getMakeup", [], "any", false, false, true, 99), "getCategory", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "</p>

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Quantity :
\t\t\t\t\t\t\t\t\t";
                // line 102
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getBeautyProductType", [], "any", false, false, true, 102), "getMakeup", [], "any", false, false, true, 102), "getQuantity", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Brand :
\t\t\t\t\t\t\t\t\t";
                // line 104
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getBeautyProductType", [], "any", false, false, true, 104), "getMakeup", [], "any", false, false, true, 104), "getBrand", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                echo "</p>

\t\t\t\t\t\t\t   ";
            }
            // line 107
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "

\t\t\t\t<!--footer-->
\t\t\t\t";
        // line 113
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "Footer");
        echo "</body>
\t\t</body>
\t</html>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/BeautyProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 113,  220 => 110,  212 => 107,  206 => 104,  201 => 102,  195 => 99,  191 => 97,  189 => 96,  185 => 95,  180 => 93,  174 => 90,  170 => 88,  168 => 87,  164 => 86,  159 => 84,  153 => 81,  149 => 79,  147 => 78,  141 => 75,  136 => 73,  130 => 70,  126 => 68,  124 => 67,  121 => 66,  115 => 62,  111 => 60,  107 => 58,  103 => 57,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta
\t\tcharset=\"UTF-8\">
\t\t<!-- owl carousel style -->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css\"/>
\t\t<!-- bootstrap css -->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
\t\t<!-- style css -->
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
\t\t<!-- Responsive-->
\t\t<link rel=\"stylesheet\" href=\"css/responsive.css\">
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">

\t\t<title>Example</title>
\t</head>
\t<nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
\t\t\t<ul class=\"navbar-nav mr-auto mt-2 mt-lg-0;\">
\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t<a class=\"nav-link\" href=\"home\">Home
\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"Face\">FACE</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"HairCare\">HAIR CARE</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"BodyCare\">BODY CARE</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"Makeup\">MAKEUP</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<form class=\"form-inline my-2 my-lg-0\">
\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t<button class=\"btn btn-outline-warning my-2 my-sm-0\" type=\"submit\">Search</button>
\t\t\t</form>
\t\t</div>
\t</nav>


\t<div class=\"row\" style=\"margin-top:20px;\">


\t\t<body>
\t\t\t{% for object in object %}
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div style=\"border:solid Gray;margin-top:20px;\" align=\"center;\">
\t\t\t\t\t\t<img class=\"rounded mx-auto d-block\" src=\"{{ object.getImages() }}\" style=\"height:300px; width:250px;margin-top:20px;\" align=\"center\"/><br>
\t\t\t\t\t\t{# <h5 align=\"center\"style=\"color:Red\"> {{ object.getWearType}} </h5> #}
\t\t\t\t\t\t<h3 align=\"center\" style=\"color:green\">Price :{{ object.getPrice}}
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t{# <p style=\"height:100px; widht:100px;margin-top:20px;\" align=\"center\">
\t\t\t\t\t\t\t{{object.getDescription()}} #}
\t\t\t\t\t\t</p>
                 {% if object.getBeautyType=='BodyCare' %}

                        <p class=\"rounded mx-auto d-block\" align=\"center\">Category :
\t\t\t\t\t\t\t\t\t{{ object.getBeautyProductType.getBodyCare.getCategory }}</p> 

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Quantity :
\t\t\t\t\t\t\t\t\t{{ object.getBeautyProductType.getBodyCare.getQuantity }}</p> 
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Brand :
\t\t\t\t\t\t\t\t\t{{ object.getBeautyProductType.getBodyCare.getBrand }}</p>

\t\t\t\t\t\t
\t\t\t\t\t\t\t{% elseif object.getBeautyType=='FaceCare' %}

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Category :
\t\t\t\t\t\t\t\t\t{{ object.getBeautyProductType.getFaceCare.getCategory}}</p>

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Quantity :
\t\t\t\t\t\t\t\t\t{{ object.getBeautyProductType.getFaceCare.getQuantity }}</p>
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Brand :
\t\t\t\t\t\t\t\t\t{{ object.getBeautyProductType.getFaceCare.getBrand }}</p>
\t\t\t\t\t\t\t{% elseif object.getBeautyType=='HairCare' %}

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Category :
\t\t\t\t\t\t\t\t\t{{ object.getBeautyProductType.getHairCare.getCategory }}</p>

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Quantity :
\t\t\t\t\t\t\t\t\t{{ object.getBeautyProductType.getHairCare.getQuantity }}</p>
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Brand :
\t\t\t\t\t\t\t\t\t{{ object.getBeautyProductType.getHairCare.getBrand }}</p>
\t\t\t\t\t\t\t{% elseif object.getBeautyType=='Makeup' %}

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Category :
\t\t\t\t\t\t\t\t\t{{ object.getBeautyProductType.getMakeup.getCategory}}</p>

\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Quantity :
\t\t\t\t\t\t\t\t\t{{ object.getBeautyProductType.getMakeup.getQuantity }}</p>
\t\t\t\t\t\t\t\t<p class=\"rounded mx-auto d-block\" align=\"center\">Brand :
\t\t\t\t\t\t\t\t\t{{ object.getBeautyProductType.getMakeup.getBrand }}</p>

\t\t\t\t\t\t\t   {% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}


\t\t\t\t<!--footer-->
\t\t\t\t{{pimcore_snippet(\"Footer\")}}</body>
\t\t</body>
\t</html>
</html>
", "default/BeautyProduct.html.twig", "/var/www/html/pimcore/main_project/templates/default/BeautyProduct.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 57, "if" => 67);
        static $filters = array("escape" => 60);
        static $functions = array("pimcore_snippet" => 113);

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
