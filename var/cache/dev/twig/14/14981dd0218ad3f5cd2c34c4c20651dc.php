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

/* @SchebTwoFactor/Authentication/form.html.twig */
class __TwigTemplate_27f09fd98ba6bf868150f748078349cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SchebTwoFactor/Authentication/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SchebTwoFactor/Authentication/form.html.twig"));

        // line 5
        echo "
";
        // line 7
        if ((isset($context["authenticationError"]) || array_key_exists("authenticationError", $context) ? $context["authenticationError"] : (function () { throw new RuntimeError('Variable "authenticationError" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "<p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed((isset($context["authenticationError"]) || array_key_exists("authenticationError", $context) ? $context["authenticationError"] : (function () { throw new RuntimeError('Variable "authenticationError" does not exist.', 8, $this->source); })()), 8, $this->source), $this->sandbox->ensureToStringAllowed((isset($context["authenticationErrorData"]) || array_key_exists("authenticationErrorData", $context) ? $context["authenticationErrorData"] : (function () { throw new RuntimeError('Variable "authenticationErrorData" does not exist.', 8, $this->source); })()), 8, $this->source), "SchebTwoFactorBundle"), "html", null, true);
            echo "</p>
";
        }
        // line 10
        echo "
";
        // line 12
        echo "<p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("choose_provider", [], "SchebTwoFactorBundle"), "html", null, true);
        echo ":
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availableTwoFactorProviders"]) || array_key_exists("availableTwoFactorProviders", $context) ? $context["availableTwoFactorProviders"] : (function () { throw new RuntimeError('Variable "availableTwoFactorProviders" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 14
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("2fa_login", ["preferProvider" => $context["provider"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["provider"], 14, $this->source), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</p>

";
        // line 19
        echo "<p class=\"label\"><label for=\"_auth_code\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("auth_code", [], "SchebTwoFactorBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["twoFactorProvider"]) || array_key_exists("twoFactorProvider", $context) ? $context["twoFactorProvider"] : (function () { throw new RuntimeError('Variable "twoFactorProvider" does not exist.', 19, $this->source); })()), 19, $this->source), "html", null, true);
        echo ":</label></p>

<form class=\"form\" action=\"";
        // line 21
        (((isset($context["checkPathUrl"]) || array_key_exists("checkPathUrl", $context) ? $context["checkPathUrl"] : (function () { throw new RuntimeError('Variable "checkPathUrl" does not exist.', 21, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["checkPathUrl"]) || array_key_exists("checkPathUrl", $context) ? $context["checkPathUrl"] : (function () { throw new RuntimeError('Variable "checkPathUrl" does not exist.', 21, $this->source); })()), "html", null, true))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["checkPathRoute"]) || array_key_exists("checkPathRoute", $context) ? $context["checkPathRoute"] : (function () { throw new RuntimeError('Variable "checkPathRoute" does not exist.', 21, $this->source); })())))));
        echo "\" method=\"post\">
    <p class=\"widget\">
        <input
            id=\"_auth_code\"
            type=\"text\"
            name=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["authCodeParameterName"]) || array_key_exists("authCodeParameterName", $context) ? $context["authCodeParameterName"] : (function () { throw new RuntimeError('Variable "authCodeParameterName" does not exist.', 26, $this->source); })()), 26, $this->source), "html", null, true);
        echo "\"
            autocomplete=\"one-time-code\"
            autofocus
            ";
        // line 35
        echo "        />
    </p>

    ";
        // line 38
        if ((isset($context["displayTrustedOption"]) || array_key_exists("displayTrustedOption", $context) ? $context["displayTrustedOption"] : (function () { throw new RuntimeError('Variable "displayTrustedOption" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "        <p class=\"widget\"><label for=\"_trusted\"><input id=\"_trusted\" type=\"checkbox\" name=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["trustedParameterName"]) || array_key_exists("trustedParameterName", $context) ? $context["trustedParameterName"] : (function () { throw new RuntimeError('Variable "trustedParameterName" does not exist.', 39, $this->source); })()), 39, $this->source), "html", null, true);
            echo "\" /> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("trusted", [], "SchebTwoFactorBundle"), "html", null, true);
            echo "</label></p>
    ";
        }
        // line 41
        echo "    ";
        if ((isset($context["isCsrfProtectionEnabled"]) || array_key_exists("isCsrfProtectionEnabled", $context) ? $context["isCsrfProtectionEnabled"] : (function () { throw new RuntimeError('Variable "isCsrfProtectionEnabled" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["csrfParameterName"]) || array_key_exists("csrfParameterName", $context) ? $context["csrfParameterName"] : (function () { throw new RuntimeError('Variable "csrfParameterName" does not exist.', 42, $this->source); })()), 42, $this->source), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken($this->sandbox->ensureToStringAllowed((isset($context["csrfTokenId"]) || array_key_exists("csrfTokenId", $context) ? $context["csrfTokenId"] : (function () { throw new RuntimeError('Variable "csrfTokenId" does not exist.', 42, $this->source); })()), 42, $this->source)), "html", null, true);
            echo "\">
    ";
        }
        // line 44
        echo "    <p class=\"submit\"><input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login", [], "SchebTwoFactorBundle"), "html", null, true);
        echo "\" /></p>
</form>

";
        // line 48
        echo "<p class=\"cancel\"><a href=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["logoutPath"]) || array_key_exists("logoutPath", $context) ? $context["logoutPath"] : (function () { throw new RuntimeError('Variable "logoutPath" does not exist.', 48, $this->source); })()), 48, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cancel", [], "SchebTwoFactorBundle"), "html", null, true);
        echo "</a></p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SchebTwoFactor/Authentication/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  131 => 44,  123 => 42,  120 => 41,  112 => 39,  110 => 38,  105 => 35,  99 => 26,  91 => 21,  83 => 19,  79 => 16,  68 => 14,  64 => 13,  59 => 12,  56 => 10,  50 => 8,  48 => 7,  45 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This is a demo template for the authentication form. Please consider overwriting this with your own template,
especially when you're using different route names than the ones used here.
#}

{# Authentication errors #}
{% if authenticationError %}
<p>{{ authenticationError|trans(authenticationErrorData, 'SchebTwoFactorBundle') }}</p>
{% endif %}

{# Let the user select the authentication method #}
<p>{{ \"choose_provider\"|trans({}, 'SchebTwoFactorBundle') }}:
    {% for provider in availableTwoFactorProviders %}
        <a href=\"{{ path(\"2fa_login\", {\"preferProvider\": provider}) }}\">{{ provider }}</a>
    {% endfor %}
</p>

{# Display current two-factor provider #}
<p class=\"label\"><label for=\"_auth_code\">{{ \"auth_code\"|trans({}, 'SchebTwoFactorBundle') }} {{ twoFactorProvider }}:</label></p>

<form class=\"form\" action=\"{{ checkPathUrl ? checkPathUrl: path(checkPathRoute) }}\" method=\"post\">
    <p class=\"widget\">
        <input
            id=\"_auth_code\"
            type=\"text\"
            name=\"{{ authCodeParameterName }}\"
            autocomplete=\"one-time-code\"
            autofocus
            {#
            https://www.twilio.com/blog/html-attributes-two-factor-authentication-autocomplete
            If your 2fa methods are using numeric codes only, add these attributes for better user experience:
            inputmode=\"numeric\"
            pattern=\"[0-9]*\"
            #}
        />
    </p>

    {% if displayTrustedOption %}
        <p class=\"widget\"><label for=\"_trusted\"><input id=\"_trusted\" type=\"checkbox\" name=\"{{ trustedParameterName }}\" /> {{ \"trusted\"|trans({}, 'SchebTwoFactorBundle') }}</label></p>
    {% endif %}
    {% if isCsrfProtectionEnabled %}
        <input type=\"hidden\" name=\"{{ csrfParameterName }}\" value=\"{{ csrf_token(csrfTokenId) }}\">
    {% endif %}
    <p class=\"submit\"><input type=\"submit\" value=\"{{ \"login\"|trans({}, 'SchebTwoFactorBundle') }}\" /></p>
</form>

{# The logout link gives the user a way out if they can't complete two-factor authentication #}
<p class=\"cancel\"><a href=\"{{ logoutPath }}\">{{ \"cancel\"|trans({}, 'SchebTwoFactorBundle') }}</a></p>
", "@SchebTwoFactor/Authentication/form.html.twig", "/var/www/html/new/main_project/vendor/scheb/2fa-bundle/Resources/views/Authentication/form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "for" => 13);
        static $filters = array("escape" => 8, "trans" => 8);
        static $functions = array("path" => 14, "csrf_token" => 42);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'trans'],
                ['path', 'csrf_token']
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
