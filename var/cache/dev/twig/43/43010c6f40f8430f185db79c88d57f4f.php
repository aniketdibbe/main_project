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

/* emails/form.html.twig */
class __TwigTemplate_c858b0060478fc0b6c861289d5de77e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/form.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "
<div class=\"container\">
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->sandbox->ensureToStringAllowed((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 5, $this->source), 'form_start', ["attr" => ["class" => "row g-3 mt-5", "novalidate" => true]]);
        echo "
\t<form class=\"row g-3 mt-5\">
        <div class=\"offset-3 col-6\">
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, true, 8), 8, $this->source), 'label');
        echo "
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, true, 9), 9, $this->source), 'widget');
        echo "
            <b>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, true, 10), 10, $this->source), 'errors');
        echo "</b>
            ";
        // line 13
        echo "        
         </div>
          <div class=\"offset-3 col-6\">
           ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, true, 16), 16, $this->source), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, true, 17), 17, $this->source), 'widget');
        echo "
            <b>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, true, 18), 18, $this->source), 'errors');
        echo "</b>
            ";
        // line 21
        echo "        
         </div>
         <div class=\"col-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary px-5\"><b>Submit</b></button>
         </div>
    
    
    </form>
    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->sandbox->ensureToStringAllowed((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 29, $this->source), 'form_end');
        echo "
</div>
";
        // line 32
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "emails/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  97 => 29,  87 => 21,  83 => 18,  79 => 17,  75 => 16,  70 => 13,  66 => 10,  62 => 9,  58 => 8,  52 => 5,  48 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# {% div %} #}

<div class=\"container\">
{{form_start(form,{'attr':{'class':'row g-3 mt-5','novalidate':true}})}}
\t<form class=\"row g-3 mt-5\">
        <div class=\"offset-3 col-6\">
            {{form_label(form.email)}}
            {{form_widget(form.email)}}
            <b>{{form_errors(form.email)}}</b>
            {# <label for=\"email\" class=\"form-label\">Email</label>
            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"example@example.com\"> #}
        
         </div>
          <div class=\"offset-3 col-6\">
           {{form_label(form.name)}}
            {{form_widget(form.name)}}
            <b>{{form_errors(form.name)}}</b>
            {# <label for=\"name\" class=\"form-label\">Name</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"john-doe\"> #}
        
         </div>
         <div class=\"col-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary px-5\"><b>Submit</b></button>
         </div>
    
    
    </form>
    {{form_end(form)}}
</div>
{# {% enddiv %} #}
</body>
</html>", "emails/form.html.twig", "/var/www/html/pim/main_project/templates/emails/form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("form_start" => 5, "form_label" => 8, "form_widget" => 9, "form_errors" => 10, "form_end" => 29);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['form_start', 'form_label', 'form_widget', 'form_errors', 'form_end']
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
