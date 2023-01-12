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

/* __string_template__1fbfc18c925b02f81276ac4c7a8b41ae */
class __TwigTemplate_92861837da41c8a24fcdf326f4332d46 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__1fbfc18c925b02f81276ac4c7a8b41ae"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__1fbfc18c925b02f81276ac4c7a8b41ae"));

        // line 1
        echo "<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
\t<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
\t<!--Bootsrap 4 CDN-->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    
    <!--Fontawesome CDN-->
\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

\t<!--Custom styles-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"\">
</head>
<body>

<div class=\"container\">
\t<form class=\"row g-3 mt-5\">
        <div class=\"offset-3 col-6\">
                        <label for=\"email\" class=\"form-label\">Email</label>
            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"example@example.com\">
        
         </div>
          <div class=\"offset-3 col-6\">
                       <label for=\"name\" class=\"form-label\">Name</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"john-doe\">
        
         </div>
         <div class=\"col-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary px-5\"><b>Submit</b></button>
         </div>
    
    
    </form>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__1fbfc18c925b02f81276ac4c7a8b41ae";
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
\t<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
\t<!--Bootsrap 4 CDN-->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    
    <!--Fontawesome CDN-->
\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

\t<!--Custom styles-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"\">
</head>
<body>

<div class=\"container\">
\t<form class=\"row g-3 mt-5\">
        <div class=\"offset-3 col-6\">
                        <label for=\"email\" class=\"form-label\">Email</label>
            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"example@example.com\">
        
         </div>
          <div class=\"offset-3 col-6\">
                       <label for=\"name\" class=\"form-label\">Name</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"john-doe\">
        
         </div>
         <div class=\"col-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary px-5\"><b>Submit</b></button>
         </div>
    
    
    </form>
    </div>
</body>
</html>", "__string_template__1fbfc18c925b02f81276ac4c7a8b41ae", "");
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
