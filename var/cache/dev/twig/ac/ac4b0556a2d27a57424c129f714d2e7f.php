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

/* @WebProfiler/Icon/messenger.svg */
class __TwigTemplate_20493a89277e81f0f627231416023781 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/messenger.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/messenger.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#aaa\" d=\"M16 9a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2h-3V4a1 1 0 0 0-1-1H8a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2h3v6H8a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2h3v9a1 1 0 0 0 2 0v-5h3a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2h-3V9zm2.52-2.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1zm0 1.63h3a.5.5 0 0 1 .5.5.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5.5.5 0 0 1 .5-.52zm-13-2.82h-3a.5.5 0 0 1-.5-.5.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5.5.5 0 0 1-.54.48zm0-1.62h-3a.5.5 0 0 1-.5-.5.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5.5.5 0 0 1-.54.48zm0 9.62h-3a.5.5 0 0 1-.5-.5.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5.5.5 0 0 1-.54.48zm0-1.62h-3a.5.5 0 0 1-.5-.5.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5.5.5 0 0 1-.54.48zm13 2.81h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1zm0 1.63h3a.5.5 0 0 1 .5.5.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5.5.5 0 0 1 .5-.52z\"/></svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/messenger.svg";
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#aaa\" d=\"M16 9a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2h-3V4a1 1 0 0 0-1-1H8a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2h3v6H8a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2h3v9a1 1 0 0 0 2 0v-5h3a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2h-3V9zm2.52-2.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1zm0 1.63h3a.5.5 0 0 1 .5.5.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5.5.5 0 0 1 .5-.52zm-13-2.82h-3a.5.5 0 0 1-.5-.5.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5.5.5 0 0 1-.54.48zm0-1.62h-3a.5.5 0 0 1-.5-.5.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5.5.5 0 0 1-.54.48zm0 9.62h-3a.5.5 0 0 1-.5-.5.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5.5.5 0 0 1-.54.48zm0-1.62h-3a.5.5 0 0 1-.5-.5.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5.5.5 0 0 1-.54.48zm13 2.81h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1zm0 1.63h3a.5.5 0 0 1 .5.5.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5.5.5 0 0 1 .5-.52z\"/></svg>
", "@WebProfiler/Icon/messenger.svg", "/var/www/html/pimcore/main_project/vendor/symfony/web-profiler-bundle/Resources/views/Icon/messenger.svg");
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
