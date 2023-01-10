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

/* default/Header.html.twig */
class __TwigTemplate_0424a7f2db9687812561b38bcfcfdf2c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/Header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/Header.html.twig"));

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
   <!-- start of navigation -->
   <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Electronic</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Clothing</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Beauty</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Footwear</a>
            </li>
         </ul>
         <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-warning my-2 my-sm-0\" type=\"submit\">Search</button>
         </form>
      </div>
   </nav>
   <!-- End of navigation -->
   <!-- first row of col-md-12 -->
   <h2> Electronic Devices </h2>
   <span>Call us for all your electronic component needs.
         Obsolete, hard to find, or franchised stock.
         Your one source for Semiconductors, Connectors, Cables, LEDs, Displays and more...</span>
   <div class=\"row\" style=\"margin-top:20px;\">
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">    
            <h3 align=\"center\">Mobile (Oppo F21 Pro)</h3>       
            <img class=\"rounded mx-auto d-block\" src=\"images/F21PRO.png\" style=\"height:200px; widht:50px;\"/>          
            <h3 align=\"center\"><b> 20,999 &nbsp;&nbsp;</b><del style=\"color:red;\">22,999 </del><span style=\"color:green\">&nbsp;&nbsp;9 % off</span></h3>
            <p><b>Oppo F21 Pro </b>(8 GB RAM, 128 GB ROM, Sunset Orange)Android 12, ColorOS 12.1 6.43 inches (16.33 cm) AMOLED (Rigid screen) Display
               Qualcomm® Snapdragon™ 680 Processor </p>
         </div>
      </div>
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Laptop (ThinkPad L13 Gen 2)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/Thinkpad.png\" style=\"height:200px; widht:10px;\"/>          
            <h3 align=\"center\"><b> 72,567.6&nbsp;&nbsp;</b><del style=\"color:red;\">86,390</del><span style=\"color:green\">&nbsp;&nbsp;11 % off</span></h3>
            <p><b>ThinkPad L13 Gen 2 (13, Intel)</b>The 33.7cms (13.3) ThinkPad L13 Gen 2 laptop delivers powerful 11th Gen Intel® performance and graphics.
                  At barely over 3lbs / 1.38kg, it’s an easy travel companion.</p>
         </div>
      </div>
       <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Camera (Canon EOS M50)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/camera.jpg\" style=\"height:200px; widht:100px;\"/>          
            <h3 align=\"center\"><b> 54,999.00 &nbsp;&nbsp;</b><del style=\"color:red;\">60,995.00</del><span style=\"color:green\">&nbsp;&nbsp;10 % off</span></h3>
            <p><b>Canon EOS M50 Mark II 24.1MP Mirrorless Camera</b>(15-45 mm Lens, 22.3 x 14.9 mm Sensor, 5-Axis Stabilisation)Effective Pixels: 24.1 MP
                  Video Resolution: 4K at 120 FPS Sensor: CMOS Sensor.</p>
         </div>
      </div>
   </div>

   <!-- second row of col-md-12 -->
   <h2> Clothing </h2>
   <span>Grab them all at Flat 40% off and get ready to make a statement. Limited time only. 
         Enter an Indo-Western Paradise with the most stunning outfits from Chique. 24/7 customer service. 
         Addl 5% Off on Prepaid. Free Shipping.</span>
   <div class=\"row\" style=\"margin-top:20px;\">
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">    
            <h3 align=\"center\">Mobile (Oppo F21 Pro)</h3>       
            <img class=\"rounded mx-auto d-block\" src=\"images/F21PRO.png\" style=\"height:200px; widht:50px;\"/>          
            <h3 align=\"center\"><b> 20,999 &nbsp;&nbsp;</b><del style=\"color:red;\">22,999 </del><span style=\"color:green\">&nbsp;&nbsp;9 % off</span></h3>
            <p><b>Oppo F21 Pro </b>(8 GB RAM, 128 GB ROM, Sunset Orange)Android 12, ColorOS 12.1 6.43 inches (16.33 cm) AMOLED (Rigid screen) Display
               Qualcomm® Snapdragon™ 680 Processor </p>
         </div>
      </div>
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Laptop (ThinkPad L13 Gen 2)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/Thinkpad.png\" style=\"height:200px; widht:10px;\"/>          
            <h3 align=\"center\"><b> 72,567.6&nbsp;&nbsp;</b><del style=\"color:red;\">86,390</del><span style=\"color:green\">&nbsp;&nbsp;11 % off</span></h3>
            <p><b>ThinkPad L13 Gen 2 (13, Intel)</b>The 33.7cms (13.3) ThinkPad L13 Gen 2 laptop delivers powerful 11th Gen Intel® performance and graphics.
                  At barely over 3lbs / 1.38kg, it’s an easy travel companion.</p>
         </div>
      </div>
       <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Camera (Canon EOS M50)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/camera.jpg\" style=\"height:200px; widht:100px;\"/>          
            <h3 align=\"center\"><b> 54,999.00 &nbsp;&nbsp;</b><del style=\"color:red;\">60,995.00</del><span style=\"color:green\">&nbsp;&nbsp;10 % off</span></h3>
            <p><b>Canon EOS M50 Mark II 24.1MP Mirrorless Camera</b>(15-45 mm Lens, 22.3 x 14.9 mm Sensor, 5-Axis Stabilisation)Effective Pixels: 24.1 MP
                  Video Resolution: 4K at 120 FPS Sensor: CMOS Sensor.</p>
         </div>
      </div>
   </div>

   <!-- third row of col-md-12 -->
   <div class=\"row\" style=\"margin-top:20px;\">
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">    
            <h3 align=\"center\">Mobile (Oppo F21 Pro)</h3>       
            <img class=\"rounded mx-auto d-block\" src=\"images/F21PRO.png\" style=\"height:200px; widht:50px;\"/>          
            <h3 align=\"center\"><b> 20,999 &nbsp;&nbsp;</b><del style=\"color:red;\">22,999 </del><span style=\"color:green\">&nbsp;&nbsp;9 % off</span></h3>
            <p><b>Oppo F21 Pro </b>(8 GB RAM, 128 GB ROM, Sunset Orange)Android 12, ColorOS 12.1 6.43 inches (16.33 cm) AMOLED (Rigid screen) Display
               Qualcomm® Snapdragon™ 680 Processor </p>
         </div>
      </div>
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Laptop (ThinkPad L13 Gen 2)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/Thinkpad.png\" style=\"height:200px; widht:10px;\"/>          
            <h3 align=\"center\"><b> 72,567.6&nbsp;&nbsp;</b><del style=\"color:red;\">86,390</del><span style=\"color:green\">&nbsp;&nbsp;11 % off</span></h3>
            <p><b>ThinkPad L13 Gen 2 (13, Intel)</b>The 33.7cms (13.3) ThinkPad L13 Gen 2 laptop delivers powerful 11th Gen Intel® performance and graphics.
                  At barely over 3lbs / 1.38kg, it’s an easy travel companion.</p>
         </div>
      </div>
       <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Camera (Canon EOS M50)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/camera.jpg\" style=\"height:200px; widht:100px;\"/>          
            <h3 align=\"center\"><b> 54,999.00 &nbsp;&nbsp;</b><del style=\"color:red;\">60,995.00</del><span style=\"color:green\">&nbsp;&nbsp;10 % off</span></h3>
            <p><b>Canon EOS M50 Mark II 24.1MP Mirrorless Camera</b>(15-45 mm Lens, 22.3 x 14.9 mm Sensor, 5-Axis Stabilisation)Effective Pixels: 24.1 MP
                  Video Resolution: 4K at 120 FPS Sensor: CMOS Sensor.</p>
         </div>
      </div>
   </div>
   <!-- footer section start -->
      <div class=\"footer_section layout_padding\" style=\"margin-top:20px;\">
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
                              <li><a href=\"index.html\">Home</a></li>
                              <li><a href=\"about.html\">About</a></li>
                              <li><a href=\"services.html\">Services</a></li>
                              <li><a href=\"blog.html\">Blog</a></li>
                              <li><a href=\"news.html\">News</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-lg-3\">
                     <div class=\"information_main\">
                        <div class=\"footer_logo\"><a href=\"index.html\"><img src=\"images/ecommerce.png\"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <!-- footer section end -->
</body>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/Header.html.twig";
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
   <!-- start of navigation -->
   <nav class=\"navbar navbar-expand-lg navbar-dark \" style=\"background-color:gray;\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
         <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
         <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Electronic</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Clothing</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Beauty</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Footwear</a>
            </li>
         </ul>
         <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-warning my-2 my-sm-0\" type=\"submit\">Search</button>
         </form>
      </div>
   </nav>
   <!-- End of navigation -->
   <!-- first row of col-md-12 -->
   <h2> Electronic Devices </h2>
   <span>Call us for all your electronic component needs.
         Obsolete, hard to find, or franchised stock.
         Your one source for Semiconductors, Connectors, Cables, LEDs, Displays and more...</span>
   <div class=\"row\" style=\"margin-top:20px;\">
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">    
            <h3 align=\"center\">Mobile (Oppo F21 Pro)</h3>       
            <img class=\"rounded mx-auto d-block\" src=\"images/F21PRO.png\" style=\"height:200px; widht:50px;\"/>          
            <h3 align=\"center\"><b> 20,999 &nbsp;&nbsp;</b><del style=\"color:red;\">22,999 </del><span style=\"color:green\">&nbsp;&nbsp;9 % off</span></h3>
            <p><b>Oppo F21 Pro </b>(8 GB RAM, 128 GB ROM, Sunset Orange)Android 12, ColorOS 12.1 6.43 inches (16.33 cm) AMOLED (Rigid screen) Display
               Qualcomm® Snapdragon™ 680 Processor </p>
         </div>
      </div>
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Laptop (ThinkPad L13 Gen 2)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/Thinkpad.png\" style=\"height:200px; widht:10px;\"/>          
            <h3 align=\"center\"><b> 72,567.6&nbsp;&nbsp;</b><del style=\"color:red;\">86,390</del><span style=\"color:green\">&nbsp;&nbsp;11 % off</span></h3>
            <p><b>ThinkPad L13 Gen 2 (13, Intel)</b>The 33.7cms (13.3) ThinkPad L13 Gen 2 laptop delivers powerful 11th Gen Intel® performance and graphics.
                  At barely over 3lbs / 1.38kg, it’s an easy travel companion.</p>
         </div>
      </div>
       <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Camera (Canon EOS M50)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/camera.jpg\" style=\"height:200px; widht:100px;\"/>          
            <h3 align=\"center\"><b> 54,999.00 &nbsp;&nbsp;</b><del style=\"color:red;\">60,995.00</del><span style=\"color:green\">&nbsp;&nbsp;10 % off</span></h3>
            <p><b>Canon EOS M50 Mark II 24.1MP Mirrorless Camera</b>(15-45 mm Lens, 22.3 x 14.9 mm Sensor, 5-Axis Stabilisation)Effective Pixels: 24.1 MP
                  Video Resolution: 4K at 120 FPS Sensor: CMOS Sensor.</p>
         </div>
      </div>
   </div>

   <!-- second row of col-md-12 -->
   <h2> Clothing </h2>
   <span>Grab them all at Flat 40% off and get ready to make a statement. Limited time only. 
         Enter an Indo-Western Paradise with the most stunning outfits from Chique. 24/7 customer service. 
         Addl 5% Off on Prepaid. Free Shipping.</span>
   <div class=\"row\" style=\"margin-top:20px;\">
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">    
            <h3 align=\"center\">Mobile (Oppo F21 Pro)</h3>       
            <img class=\"rounded mx-auto d-block\" src=\"images/F21PRO.png\" style=\"height:200px; widht:50px;\"/>          
            <h3 align=\"center\"><b> 20,999 &nbsp;&nbsp;</b><del style=\"color:red;\">22,999 </del><span style=\"color:green\">&nbsp;&nbsp;9 % off</span></h3>
            <p><b>Oppo F21 Pro </b>(8 GB RAM, 128 GB ROM, Sunset Orange)Android 12, ColorOS 12.1 6.43 inches (16.33 cm) AMOLED (Rigid screen) Display
               Qualcomm® Snapdragon™ 680 Processor </p>
         </div>
      </div>
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Laptop (ThinkPad L13 Gen 2)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/Thinkpad.png\" style=\"height:200px; widht:10px;\"/>          
            <h3 align=\"center\"><b> 72,567.6&nbsp;&nbsp;</b><del style=\"color:red;\">86,390</del><span style=\"color:green\">&nbsp;&nbsp;11 % off</span></h3>
            <p><b>ThinkPad L13 Gen 2 (13, Intel)</b>The 33.7cms (13.3) ThinkPad L13 Gen 2 laptop delivers powerful 11th Gen Intel® performance and graphics.
                  At barely over 3lbs / 1.38kg, it’s an easy travel companion.</p>
         </div>
      </div>
       <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Camera (Canon EOS M50)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/camera.jpg\" style=\"height:200px; widht:100px;\"/>          
            <h3 align=\"center\"><b> 54,999.00 &nbsp;&nbsp;</b><del style=\"color:red;\">60,995.00</del><span style=\"color:green\">&nbsp;&nbsp;10 % off</span></h3>
            <p><b>Canon EOS M50 Mark II 24.1MP Mirrorless Camera</b>(15-45 mm Lens, 22.3 x 14.9 mm Sensor, 5-Axis Stabilisation)Effective Pixels: 24.1 MP
                  Video Resolution: 4K at 120 FPS Sensor: CMOS Sensor.</p>
         </div>
      </div>
   </div>

   <!-- third row of col-md-12 -->
   <div class=\"row\" style=\"margin-top:20px;\">
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">    
            <h3 align=\"center\">Mobile (Oppo F21 Pro)</h3>       
            <img class=\"rounded mx-auto d-block\" src=\"images/F21PRO.png\" style=\"height:200px; widht:50px;\"/>          
            <h3 align=\"center\"><b> 20,999 &nbsp;&nbsp;</b><del style=\"color:red;\">22,999 </del><span style=\"color:green\">&nbsp;&nbsp;9 % off</span></h3>
            <p><b>Oppo F21 Pro </b>(8 GB RAM, 128 GB ROM, Sunset Orange)Android 12, ColorOS 12.1 6.43 inches (16.33 cm) AMOLED (Rigid screen) Display
               Qualcomm® Snapdragon™ 680 Processor </p>
         </div>
      </div>
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Laptop (ThinkPad L13 Gen 2)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/Thinkpad.png\" style=\"height:200px; widht:10px;\"/>          
            <h3 align=\"center\"><b> 72,567.6&nbsp;&nbsp;</b><del style=\"color:red;\">86,390</del><span style=\"color:green\">&nbsp;&nbsp;11 % off</span></h3>
            <p><b>ThinkPad L13 Gen 2 (13, Intel)</b>The 33.7cms (13.3) ThinkPad L13 Gen 2 laptop delivers powerful 11th Gen Intel® performance and graphics.
                  At barely over 3lbs / 1.38kg, it’s an easy travel companion.</p>
         </div>
      </div>
       <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Camera (Canon EOS M50)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/camera.jpg\" style=\"height:200px; widht:100px;\"/>          
            <h3 align=\"center\"><b> 54,999.00 &nbsp;&nbsp;</b><del style=\"color:red;\">60,995.00</del><span style=\"color:green\">&nbsp;&nbsp;10 % off</span></h3>
            <p><b>Canon EOS M50 Mark II 24.1MP Mirrorless Camera</b>(15-45 mm Lens, 22.3 x 14.9 mm Sensor, 5-Axis Stabilisation)Effective Pixels: 24.1 MP
                  Video Resolution: 4K at 120 FPS Sensor: CMOS Sensor.</p>
         </div>
      </div>
   </div>
   <!-- footer section start -->
      <div class=\"footer_section layout_padding\" style=\"margin-top:20px;\">
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
                              <li><a href=\"index.html\">Home</a></li>
                              <li><a href=\"about.html\">About</a></li>
                              <li><a href=\"services.html\">Services</a></li>
                              <li><a href=\"blog.html\">Blog</a></li>
                              <li><a href=\"news.html\">News</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-lg-3\">
                     <div class=\"information_main\">
                        <div class=\"footer_logo\"><a href=\"index.html\"><img src=\"images/ecommerce.png\"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <!-- footer section end -->
</body>", "default/Header.html.twig", "/var/www/html/new/main_project/templates/default/Header.html.twig");
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
