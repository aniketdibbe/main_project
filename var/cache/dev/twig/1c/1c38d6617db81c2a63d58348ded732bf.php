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

/* default/feedback.html.twig */
class __TwigTemplate_5678c0aa9058b55a1e981deecaa72162 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/feedback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/feedback.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css\" integrity=\"sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"css/feedback.css\" />
    <!-- bootstrap css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
      <!-- style css -->
      ";
        // line 12
        echo "      <!-- Responsive-->
      
    <title>Let Us Know Your Feedback || @Ecommerce.com</title>
  </head>
  <body>
  <form action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("email");
        echo "\" method=\"POST\">
    <div id=\"panel\" class=\"panel-container\">
      <strong>How satisfied are you with our <br /> customer support performance?</strong>
      <div class=\"ratings-container\">
        <div class=\"rating\">
          <img src=\"images/sad.jpeg\" class=\"circle\" alt=\"\">
          <small>Unhappy</small>
        </div>

        <div class=\"rating\">
          <img src=\"images/neutral.jpeg\" alt=\"\"/>
          <small>Neutral</small>
        </div>

        <div class=\"rating active\">
          <img src=\"images/satisfy.jpeg\" alt=\"\"/>
          <small>Satisfied</small>
        </div>
      </div>
      <span> Name: <input name=\"name\" id=\"name\" required style=\"height:35px;width:200px;\" placeholder=\"ex:john\"></input></span>
       <span>Comments:<input name=\"comments\" id=\"comments\" required style=\"height:50px;width:300px;\" placeholder=\"any suggestion\"></input></span>
      ";
        // line 39
        echo "      <button class=\"btn\" id=\"send\" type=\"submit\">Send Review</button>
    </div></form>
    <div class=\"credit\">Made with <span style=\"color:tomato\"></span> by <a  href=\"https://www.learningrobo.com/\">Shopping villa</a></div>
    ";
        // line 43
        echo "  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/feedback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 43,  88 => 39,  64 => 17,  57 => 12,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css\" integrity=\"sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"css/feedback.css\" />
    <!-- bootstrap css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
      <!-- style css -->
      {# <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\"> #}
      <!-- Responsive-->
      
    <title>Let Us Know Your Feedback || @Ecommerce.com</title>
  </head>
  <body>
  <form action=\"{{ path('email') }}\" method=\"POST\">
    <div id=\"panel\" class=\"panel-container\">
      <strong>How satisfied are you with our <br /> customer support performance?</strong>
      <div class=\"ratings-container\">
        <div class=\"rating\">
          <img src=\"images/sad.jpeg\" class=\"circle\" alt=\"\">
          <small>Unhappy</small>
        </div>

        <div class=\"rating\">
          <img src=\"images/neutral.jpeg\" alt=\"\"/>
          <small>Neutral</small>
        </div>

        <div class=\"rating active\">
          <img src=\"images/satisfy.jpeg\" alt=\"\"/>
          <small>Satisfied</small>
        </div>
      </div>
      <span> Name: <input name=\"name\" id=\"name\" required style=\"height:35px;width:200px;\" placeholder=\"ex:john\"></input></span>
       <span>Comments:<input name=\"comments\" id=\"comments\" required style=\"height:50px;width:300px;\" placeholder=\"any suggestion\"></input></span>
      {# <button class=\"btn\" id=\"send\"><a href=\"http://main_project/email\">Send Review</a></button> #}
      <button class=\"btn\" id=\"send\" type=\"submit\">Send Review</button>
    </div></form>
    <div class=\"credit\">Made with <span style=\"color:tomato\"></span> by <a  href=\"https://www.learningrobo.com/\">Shopping villa</a></div>
    {# <script src=\"JS/feedback.js\"></script> #}
  </body>
</html>
", "default/feedback.html.twig", "/var/www/html/pimcore/main_project/templates/default/feedback.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("path" => 17);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['path']
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
