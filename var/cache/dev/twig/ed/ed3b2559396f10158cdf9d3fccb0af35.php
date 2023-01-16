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

/* default/footer.html.twig */
class __TwigTemplate_7b90c5ffe6a2b76c8d1f7552dffe0363 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

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
    <title>Example</title>
</head>
<body>
<!-- footer section start -->
      <div class=\"footer_section layout_padding\" style=\"margin-top:20px;background-color:gray;\">
         <div class=\"container\">
            <div class=\"subscribe_bt\"><a href=\"#\">Subscribe</a></div>
            <input type=\"text\" class=\"email_text\" placeholder=\"Enter Your Email\" name=\"Enter Your Email\">
            <div class=\"footer_section_2\">
               <div class=\"row\">
                  <div class=\"col-lg-3 margin_top\">
                     <div class=\"call_text\"><a href=\"#\"><img src=\"images/call-icon1.png\"><span class=\"padding_left_15\">Call Now +01 9876543210</span></a></div>
                     <div class=\"call_text\"><a href=\"#\"><img src=\"images/mail-icon1.png\"><span class=\"padding_left_15\">demo@gmail.com</span></a></div>
                  </div>
                  <div class=\"col-lg-3\">
                     <div class=\"information_main\">
                        <h4 class=\"information_text\">Information</h4>
                        <p class=\"many_text\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                     </div>
                  </div>
                  <div class=\"col-lg-3 col-md-6\">
                     <div class=\"information_main\">
                        <h4 class=\"information_text\">Helpful Links</h4>
                        <div class=\"footer_menu\">
                           <ul>
                              <li><a href=\"home\">Home</a></li>
                              <li><a href=\"Electronics\">Electronics</a></li>
                              <li><a href=\"Clothing\">Clothing</a></li>
                              <li><a href=\"Beauty\">Beauty</a></li>
                              <li><a href=\"Footwear\">Footwear</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-lg-3\">
                     <div class=\"information_main\">
                        <div class=\"footer_logo\"><a href=\"index.html\"><img src=\"images/Elogo.jpg\"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <!-- footer section end -->
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
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
    <title>Example</title>
</head>
<body>
<!-- footer section start -->
      <div class=\"footer_section layout_padding\" style=\"margin-top:20px;background-color:gray;\">
         <div class=\"container\">
            <div class=\"subscribe_bt\"><a href=\"#\">Subscribe</a></div>
            <input type=\"text\" class=\"email_text\" placeholder=\"Enter Your Email\" name=\"Enter Your Email\">
            <div class=\"footer_section_2\">
               <div class=\"row\">
                  <div class=\"col-lg-3 margin_top\">
                     <div class=\"call_text\"><a href=\"#\"><img src=\"images/call-icon1.png\"><span class=\"padding_left_15\">Call Now +01 9876543210</span></a></div>
                     <div class=\"call_text\"><a href=\"#\"><img src=\"images/mail-icon1.png\"><span class=\"padding_left_15\">demo@gmail.com</span></a></div>
                  </div>
                  <div class=\"col-lg-3\">
                     <div class=\"information_main\">
                        <h4 class=\"information_text\">Information</h4>
                        <p class=\"many_text\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                     </div>
                  </div>
                  <div class=\"col-lg-3 col-md-6\">
                     <div class=\"information_main\">
                        <h4 class=\"information_text\">Helpful Links</h4>
                        <div class=\"footer_menu\">
                           <ul>
                              <li><a href=\"home\">Home</a></li>
                              <li><a href=\"Electronics\">Electronics</a></li>
                              <li><a href=\"Clothing\">Clothing</a></li>
                              <li><a href=\"Beauty\">Beauty</a></li>
                              <li><a href=\"Footwear\">Footwear</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-lg-3\">
                     <div class=\"information_main\">
                        <div class=\"footer_logo\"><a href=\"index.html\"><img src=\"images/Elogo.jpg\"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <!-- footer section end -->
    </body>
</html>", "default/footer.html.twig", "/var/www/html/new/main_project/templates/default/footer.html.twig");
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
