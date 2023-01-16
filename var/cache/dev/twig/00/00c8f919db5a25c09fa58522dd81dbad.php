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

/* default/signin.html.twig */
class __TwigTemplate_45f950b15a407e551d5c58af04a689eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/signin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/signin.html.twig"));

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
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/signin.css\">
</head>
<body>
<div class=\"container\">
    <a href=\"home\" class=\"previous\">&laquo; Home</a>
\t<div class=\"d-flex justify-content-center h-100\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h3>Sign In</h3>
\t\t\t\t<div class=\"d-flex justify-content-end social_icon\">
\t\t\t\t\t<span><i class=\"fab fa-facebook-square\"></i></span>
\t\t\t\t\t<span><i class=\"fab fa-google-plus-square\"></i></span>
\t\t\t\t\t<span><i class=\"fab fa-twitter-square\"></i></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form>
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"username\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"password\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row align-items-center remember\">
\t\t\t\t\t\t<input type=\"checkbox\">Remember Me
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Login\" class=\"btn float-right login_btn\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"card-footer\">
\t\t\t\t<div class=\"d-flex justify-content-center links\">
\t\t\t\t\tDon't have an account?<a href=\"signup\">Sign Up</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<a href=\"#\">Forgot your password?</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/signin.html.twig";
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
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/signin.css\">
</head>
<body>
<div class=\"container\">
    <a href=\"home\" class=\"previous\">&laquo; Home</a>
\t<div class=\"d-flex justify-content-center h-100\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h3>Sign In</h3>
\t\t\t\t<div class=\"d-flex justify-content-end social_icon\">
\t\t\t\t\t<span><i class=\"fab fa-facebook-square\"></i></span>
\t\t\t\t\t<span><i class=\"fab fa-google-plus-square\"></i></span>
\t\t\t\t\t<span><i class=\"fab fa-twitter-square\"></i></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form>
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"username\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"password\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row align-items-center remember\">
\t\t\t\t\t\t<input type=\"checkbox\">Remember Me
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Login\" class=\"btn float-right login_btn\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"card-footer\">
\t\t\t\t<div class=\"d-flex justify-content-center links\">
\t\t\t\t\tDon't have an account?<a href=\"signup\">Sign Up</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<a href=\"#\">Forgot your password?</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</body>
</html>", "default/signin.html.twig", "/var/www/html/new/main_project/templates/default/signin.html.twig");
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
