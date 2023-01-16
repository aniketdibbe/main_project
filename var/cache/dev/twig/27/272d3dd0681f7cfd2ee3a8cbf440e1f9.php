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

/* default/signup.html.twig */
class __TwigTemplate_4c5a9b69484dca7d619444a73ca1f9a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/signup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/signup.html.twig"));

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
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/signup.css\">
</head>
<body>
<div class=\"container\">
\t<section class=\"h-100 bg-dark\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col\">
        <div class=\"card card-registration my-4\">
          <div class=\"row g-0\">
            <div class=\"col-xl-6 d-none d-xl-block\">
              <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp\"
                alt=\"Sample photo\" class=\"img-fluid\"
                style=\"border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;\" />
            </div>
            <div class=\"col-xl-6\">
\t\t\t <a href=\"signin\" class=\"previous\">&laquo; SignIn</a>
              <div class=\"card-body p-md-5 text-black\">
                <h3 class=\"mb-5 text-uppercase\">Registration form</h3>

                <div class=\"row\">
                  <div class=\"col-md-6 mb-4\">
                    <div class=\"form-outline\">
                      <input type=\"text\" id=\"form3Example1m\" class=\"form-control form-control-lg\" />
                      <label class=\"form-label\" for=\"form3Example1m\">First name</label>
                    </div>
                  </div>
                  <div class=\"col-md-6 mb-4\">
                    <div class=\"form-outline\">
                      <input type=\"text\" id=\"form3Example1n\" class=\"form-control form-control-lg\" />
                      <label class=\"form-label\" for=\"form3Example1n\">Last name</label>
                    </div>
                  </div>
                </div>


                <div class=\"form-outline mb-4\">
                  <input type=\"text\" id=\"form3Example8\" class=\"form-control form-control-lg\" />
                  <label class=\"form-label\" for=\"form3Example8\">Address</label>
                </div>

                <div class=\"d-md-flex justify-content-start align-items-center mb-4 py-2\">

                  <h6 class=\"mb-0 me-4\">Gender: </h6>

                  <div class=\"form-check form-check-inline mb-0 me-4\">
                    <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\" id=\"femaleGender\"
                      value=\"option1\" />
                    <label class=\"form-check-label\" for=\"femaleGender\">Female</label>
                  </div>

                  <div class=\"form-check form-check-inline mb-0 me-4\">
                    <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\" id=\"maleGender\"
                      value=\"option2\" />
                    <label class=\"form-check-label\" for=\"maleGender\">Male</label>
                  </div>

                  <div class=\"form-check form-check-inline mb-0\">
                    <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\" id=\"otherGender\"
                      value=\"option3\" />
                    <label class=\"form-check-label\" for=\"otherGender\">Other</label>
                  </div>

                </div>

                <div class=\"row\">
                  <div class=\"col-md-6 mb-4\">

                    <select class=\"select\">
                      <option value=\"1\">State</option>
                      <option value=\"2\">Maharashtra</option>
                      <option value=\"3\">Jammu & Kashmir</option>
                      <option value=\"4\">Karnataka</option>
                    </select>

                  </div>
                  <div class=\"col-md-6 mb-4\">

                    <select class=\"select\">
                      <option value=\"1\">City</option>
                      <option value=\"2\">MH</option>
                      <option value=\"3\">Bihar</option>
                      <option value=\"4\">UP</option>
                    </select>

                  </div>
                </div>

                <div class=\"form-outline mb-4\">
                  <input type=\"text\" id=\"form3Example90\" class=\"form-control form-control-lg\" />
                  <label class=\"form-label\" for=\"form3Example90\">Pincode</label>
                </div>

                <div class=\"form-outline mb-4\">
                  <input type=\"text\" id=\"form3Example97\" class=\"form-control form-control-lg\" />
                  <label class=\"form-label\" for=\"form3Example97\">Email ID</label>
                </div>

                <div class=\"d-flex justify-content-end pt-3\">
                  <button type=\"button\" class=\"btn btn-light btn-lg\">Reset all</button>
                  <button type=\"button\" class=\"btn btn-warning btn-lg ms-2\">Submit form</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/signup.html.twig";
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
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/signup.css\">
</head>
<body>
<div class=\"container\">
\t<section class=\"h-100 bg-dark\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col\">
        <div class=\"card card-registration my-4\">
          <div class=\"row g-0\">
            <div class=\"col-xl-6 d-none d-xl-block\">
              <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp\"
                alt=\"Sample photo\" class=\"img-fluid\"
                style=\"border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;\" />
            </div>
            <div class=\"col-xl-6\">
\t\t\t <a href=\"signin\" class=\"previous\">&laquo; SignIn</a>
              <div class=\"card-body p-md-5 text-black\">
                <h3 class=\"mb-5 text-uppercase\">Registration form</h3>

                <div class=\"row\">
                  <div class=\"col-md-6 mb-4\">
                    <div class=\"form-outline\">
                      <input type=\"text\" id=\"form3Example1m\" class=\"form-control form-control-lg\" />
                      <label class=\"form-label\" for=\"form3Example1m\">First name</label>
                    </div>
                  </div>
                  <div class=\"col-md-6 mb-4\">
                    <div class=\"form-outline\">
                      <input type=\"text\" id=\"form3Example1n\" class=\"form-control form-control-lg\" />
                      <label class=\"form-label\" for=\"form3Example1n\">Last name</label>
                    </div>
                  </div>
                </div>


                <div class=\"form-outline mb-4\">
                  <input type=\"text\" id=\"form3Example8\" class=\"form-control form-control-lg\" />
                  <label class=\"form-label\" for=\"form3Example8\">Address</label>
                </div>

                <div class=\"d-md-flex justify-content-start align-items-center mb-4 py-2\">

                  <h6 class=\"mb-0 me-4\">Gender: </h6>

                  <div class=\"form-check form-check-inline mb-0 me-4\">
                    <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\" id=\"femaleGender\"
                      value=\"option1\" />
                    <label class=\"form-check-label\" for=\"femaleGender\">Female</label>
                  </div>

                  <div class=\"form-check form-check-inline mb-0 me-4\">
                    <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\" id=\"maleGender\"
                      value=\"option2\" />
                    <label class=\"form-check-label\" for=\"maleGender\">Male</label>
                  </div>

                  <div class=\"form-check form-check-inline mb-0\">
                    <input class=\"form-check-input\" type=\"radio\" name=\"inlineRadioOptions\" id=\"otherGender\"
                      value=\"option3\" />
                    <label class=\"form-check-label\" for=\"otherGender\">Other</label>
                  </div>

                </div>

                <div class=\"row\">
                  <div class=\"col-md-6 mb-4\">

                    <select class=\"select\">
                      <option value=\"1\">State</option>
                      <option value=\"2\">Maharashtra</option>
                      <option value=\"3\">Jammu & Kashmir</option>
                      <option value=\"4\">Karnataka</option>
                    </select>

                  </div>
                  <div class=\"col-md-6 mb-4\">

                    <select class=\"select\">
                      <option value=\"1\">City</option>
                      <option value=\"2\">MH</option>
                      <option value=\"3\">Bihar</option>
                      <option value=\"4\">UP</option>
                    </select>

                  </div>
                </div>

                <div class=\"form-outline mb-4\">
                  <input type=\"text\" id=\"form3Example90\" class=\"form-control form-control-lg\" />
                  <label class=\"form-label\" for=\"form3Example90\">Pincode</label>
                </div>

                <div class=\"form-outline mb-4\">
                  <input type=\"text\" id=\"form3Example97\" class=\"form-control form-control-lg\" />
                  <label class=\"form-label\" for=\"form3Example97\">Email ID</label>
                </div>

                <div class=\"d-flex justify-content-end pt-3\">
                  <button type=\"button\" class=\"btn btn-light btn-lg\">Reset all</button>
                  <button type=\"button\" class=\"btn btn-warning btn-lg ms-2\">Submit form</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</body>
</html>", "default/signup.html.twig", "/var/www/html/new/main_project/templates/default/signup.html.twig");
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
