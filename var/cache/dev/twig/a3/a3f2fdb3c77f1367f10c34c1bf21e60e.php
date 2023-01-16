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
class __TwigTemplate_342f468106572076ae8f61825d530883 extends Template
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
   ";
        // line 17
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "Header");
        echo "



   <!-- carousel code -->
    <div >
      <img style=\"height:700px;width:1500px\" src=\"images/BEAUTY PRODUCTS.png\" alt=\"First slide\">
    </div>
   
   <!-- first row for Electronic Devices-->
   <h2><a href=\"Electronics\"><b><u> Electronic Devices</b></u> </a></h2>
      <span>Call us for all your electronic component needs.
         Obsolete, hard to find, or franchised stock.
         Your one source for Semiconductors, Connectors, Cables, LEDs, Displays and more...</span>
   <div class=\"row\" style=\"margin-top:20px;\">
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">    
            <h3 align=\"center\">Mobile (Oppo F21 Pro)</h3>       
            <img class=\"rounded mx-auto d-block\" src=\"images/F21PRO.png\" style=\"height:200px; widht:50px;\"/>          
            <h3 align=\"center\"><b> 20,999 &nbsp;&nbsp;</b><del style=\"color:red;\">22,999 </del><span style=\"color:green\">&nbsp;&nbsp;9% off</span></h3>
            <p><b>Oppo F21 Pro </b>(8 GB RAM, 128 GB ROM, Sunset Orange)Android 12, ColorOS 12.1 6.43 inches (16.33 cm) AMOLED (Rigid screen) Display
               Qualcomm® Snapdragon™ 680 Processor </p>
         </div>
      </div>
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Laptop (ThinkPad L13 Gen 2)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/Thinkpad.png\" style=\"height:200px; widht:10px;\"/>          
            <h3 align=\"center\"><b> 72,567.6&nbsp;&nbsp;</b><del style=\"color:red;\">86,390</del><span style=\"color:green\">&nbsp;&nbsp;11% off</span></h3>
            <p><b>ThinkPad L13 Gen 2 (13, Intel)</b>The 33.7cms (13.3) ThinkPad L13 Gen 2 laptop delivers powerful 11th Gen Intel® performance and graphics.
                  At barely over 3lbs / 1.38kg, it’s an easy travel companion.</p>
         </div>
      </div>
       <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Camera (Canon EOS M50)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/camera.jpg\" style=\"height:200px; widht:100px;\"/>          
            <h3 align=\"center\"><b> 54,999.00 &nbsp;&nbsp;</b><del style=\"color:red;\">60,995.00</del><span style=\"color:green\">&nbsp;&nbsp;10% off</span></h3>
            <p><b>Canon EOS M50 Mark II 24.1MP Mirrorless Camera</b>(15-45 mm Lens, 22.3 x 14.9 mm Sensor, 5-Axis Stabilisation)Effective Pixels: 24.1 MP
                  Video Resolution: 4K at 120 FPS Sensor: CMOS Sensor.</p>
         </div>
      </div>
   </div>

   <!-- second row for Clothing -->
   <h2><a href=\"Clothing\"><b><u> Clothing</b></u> </a></h2>
      <span>Grab them all at Flat 40% off and get ready to make a statement. Limited time only. 
            Enter an Indo-Western Paradise with the most stunning outfits from Chique. 24/7 customer service. 
            Addl 5% Off on Prepaid. Free Shipping.</span>
      <div class=\"row\" style=\"margin-top:20px;\">
         <div class=\"col-md-4\" >
            <div style=\"border:solid Gray;\">    
               <h3 align=\"center\">Gown (Womens Wear)</h3>       
               <img class=\"rounded mx-auto d-block\" src=\"images/gown.png\" style=\"height:200px; widht:50px;\"/>          
               <h3 align=\"center\"><b> 6,299&nbsp;&nbsp;</b><del style=\"color:red;\">12,269 </del><span style=\"color:green\">&nbsp;&nbsp;10% off</span></h3>
               <p><b>Barn Red Georgette Embroidered Anarkali Suit </b>Statement bridal weaves to suit every event! This hypnotising Barn Red Georgette 
               Anarkali Suit with enthralling Embroidery work is a perfect glam that redefines grace </p>
            </div>
         </div>
         <div class=\"col-md-4\" >
            <div style=\"border:solid Gray;\"> 
               <h3 align=\"center\">Indo-western (Kids Wear)</h3>          
               <img class=\"rounded mx-auto d-block\" src=\"images/kids.jpg\" style=\"height:200px; widht:10px;\"/>          
               <h3 align=\"center\"><b> 1,400&nbsp;&nbsp;</b><del style=\"color:red;\">3,000</del><span style=\"color:green\">&nbsp;&nbsp;11% off</span></h3>
               <p><b>Mr. & Ms. Junior Front Slit Blue Kids Girls Dress </b>
                  Package inclusions: front slit dress, leggings and yellow neckline bow
                  Fabric: 80% polyester 20% viscose
                  Designed to be suitable for every occasion
               </p>
            </div>
         </div>
         <div class=\"col-md-4\" >
            <div style=\"border:solid Gray;\"> 
               <h3 align=\"center\">Formal (Mens Wear)</h3>          
               <img class=\"rounded mx-auto d-block\" src=\"images/men.jpg\" style=\"height:200px; widht:100px;\"/>          
               <h3 align=\"center\"><b> 2,309 &nbsp;&nbsp;</b><del style=\"color:red;\">7,999</del><span style=\"color:green\">&nbsp;&nbsp;71% off</span></h3>
               <p><b>hangup Formal Coat Suits for Mens (one Coat and one Trousers Flat Front) </b>(BGN APPARELS, formed in the year 1980, is the brainchild of Shri Satish Gupta and family.
                Hangup deals in menswear which is currently being marketed </p>
            </div>
         </div>
      </div>

   <!-- third row for Beauty -->
   <h2><a href=\"Beauty\"><b><u> Electronic Devices</b></u> </a></h2>
   <span>Beauty is the the quality or aggregate of qualities in a person or thing that gives pleasure to the senses 
         or pleasurably exalts the mind or spirit : loveliness. a woman of great physical beauty.
         Image result for what is beauty. It's a radiance of spirit, having character, kindness to ourselves and to others,
         it's strength and self-confidence to know that with or without makeup the real beauty is you. 
         Part of beauty also has to be about the things that make you feel beautiful.</span>
   <div class=\"row\" style=\"margin-top:20px;\">
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">    
            <h3 align=\"center\"> Fit-Me (Foundation)</h3>       
            <img class=\"rounded mx-auto d-block\" src=\"images/foundation.jpg\" style=\"height:200px; widht:50px;\"/>          
            <h3 align=\"center\"><b> 389.60 &nbsp;&nbsp;</b><del style=\"color:red;\">629.00 </del><span style=\"color:green\">&nbsp;&nbsp;38% off</span></h3>
            <p><b> Maybelline New York Fit Me Matte Poreless Liquid Foundation 230 Natural Buff - 30 ml</b>
                  Gives oil-free look and is suitable for everyday use thanks to its lightweight formula.</p>
         </div>
      </div>
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Charcoal Mask</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/mask.jpg\" style=\"height:200px; widht:10px;\"/>          
            <h3 align=\"center\"><b> 169&nbsp;&nbsp;</b><del style=\"color:red;\">199</del><span style=\"color:green\">&nbsp;&nbsp;15% off</span></h3>
            <p><b>Charcoal Face Anti Blackhead Peel Off Mask 130ml</b>Blackhead. Charcoal Mask is derived from natural ingredients - to remove the oil on the face - 
            Cleaning and removed all the dirt.</p>
         </div>
      </div>
       <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Hair Spa Loreal Shampoo</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/shampoo.jpg\" style=\"height:200px; widht:100px;\"/>          
            <h3 align=\"center\"><b>676&nbsp;&nbsp;</b><del style=\"color:red;\">798</del><span style=\"color:green\">&nbsp;&nbsp;15% off</span></h3>
            <p><b>L'Oréal Professionnel Hair Spa Deep Nourishing Shampoo for Dry Hair with Water Lily, 250 ml </b>
               It gently cleanses and infuses the hair fibre with nutrients and moisture
               L'oreal
               Shampoo
            </p>
         </div>
      </div>
   </div>
   <!-- fourth row for Footwear -->
   <h2><a href=\"Footwear\"> <b><u> Footwear</b></u> </a></h2>
   <span>There is wisdom in shoes: “Once I was sad because I had no shoes. Then I met a man who had no feet.” 
         Your problems are not as bad as they could be. “Before you criticize a man, walk a mile in his shoes.” 
         Knowing the other's context puts you in a better position to judge him.</span>
   <div class=\"row\" style=\"margin-top:20px;\">
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">    
            <h3 align=\"center\">Sport Shoes</h3>       
            <img class=\"rounded mx-auto d-block\" src=\"images/shoe.jpg\" style=\"height:200px; widht:50px;\"/>          
            <h3 align=\"center\"><b> 599 &nbsp;&nbsp;</b><del style=\"color:red;\">699 </del><span style=\"color:green\">&nbsp;&nbsp;9% off</span></h3>
            <p>Waan Sport Shoes Athletic Lightweight Breathable Running Casual Walking Comfortable Ultralight Men's Sports Light Weighted Shoe with Mesh
               Designed Lace-up Running Shoes for Men </p>
         </div>
      </div>
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">High Heels (Womens-Wear)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/heels.jpg\" style=\"height:200px; widht:10px;\"/>          
            <h3 align=\"center\"><b>1,199.00 &nbsp;&nbsp;</b><del style=\"color:red;\">14,999</del><span style=\"color:green\">&nbsp;&nbsp;11 % off</span></h3>
            <p><b>Rare Beauty Dual Strap Rose Gold Heels</b>Material: Synthetic Patent
               Color: Rose Gold
               Sole: Tunic Sheet Sole
               Lining: P.U
               Occasion: Party Wear
               Heel Length : Measured between 3.5 inches to 4 will be considered to 4 inches</p>
         </div>
      </div>
       <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Winters Slippers</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/slipper.jpg\" style=\"height:200px; widht:100px;\"/>          
            <h3 align=\"center\"><b> 399.00 &nbsp;&nbsp;</b><del style=\"color:red;\">599</del><span style=\"color:green\">&nbsp;&nbsp;50 % off</span></h3>
            <p><b>
               Model Name: Striped Home Slippers
               Material: Rubber; Water resistance
               Heel type: Flat
               Heel Height: 1 inch
               Care instructions: Wipe with damp cloth and leave to dry in the sunlight
               Infispace Hand knitted  </p>
         </div>
      </div>
   </div>
   <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
   ";
        // line 182
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "Footer");
        echo "
</body>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/Header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 182,  63 => 17,  45 => 1,);
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
   {{pimcore_snippet(\"Header\")}}



   <!-- carousel code -->
    <div >
      <img style=\"height:700px;width:1500px\" src=\"images/BEAUTY PRODUCTS.png\" alt=\"First slide\">
    </div>
   
   <!-- first row for Electronic Devices-->
   <h2><a href=\"Electronics\"><b><u> Electronic Devices</b></u> </a></h2>
      <span>Call us for all your electronic component needs.
         Obsolete, hard to find, or franchised stock.
         Your one source for Semiconductors, Connectors, Cables, LEDs, Displays and more...</span>
   <div class=\"row\" style=\"margin-top:20px;\">
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">    
            <h3 align=\"center\">Mobile (Oppo F21 Pro)</h3>       
            <img class=\"rounded mx-auto d-block\" src=\"images/F21PRO.png\" style=\"height:200px; widht:50px;\"/>          
            <h3 align=\"center\"><b> 20,999 &nbsp;&nbsp;</b><del style=\"color:red;\">22,999 </del><span style=\"color:green\">&nbsp;&nbsp;9% off</span></h3>
            <p><b>Oppo F21 Pro </b>(8 GB RAM, 128 GB ROM, Sunset Orange)Android 12, ColorOS 12.1 6.43 inches (16.33 cm) AMOLED (Rigid screen) Display
               Qualcomm® Snapdragon™ 680 Processor </p>
         </div>
      </div>
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Laptop (ThinkPad L13 Gen 2)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/Thinkpad.png\" style=\"height:200px; widht:10px;\"/>          
            <h3 align=\"center\"><b> 72,567.6&nbsp;&nbsp;</b><del style=\"color:red;\">86,390</del><span style=\"color:green\">&nbsp;&nbsp;11% off</span></h3>
            <p><b>ThinkPad L13 Gen 2 (13, Intel)</b>The 33.7cms (13.3) ThinkPad L13 Gen 2 laptop delivers powerful 11th Gen Intel® performance and graphics.
                  At barely over 3lbs / 1.38kg, it’s an easy travel companion.</p>
         </div>
      </div>
       <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Camera (Canon EOS M50)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/camera.jpg\" style=\"height:200px; widht:100px;\"/>          
            <h3 align=\"center\"><b> 54,999.00 &nbsp;&nbsp;</b><del style=\"color:red;\">60,995.00</del><span style=\"color:green\">&nbsp;&nbsp;10% off</span></h3>
            <p><b>Canon EOS M50 Mark II 24.1MP Mirrorless Camera</b>(15-45 mm Lens, 22.3 x 14.9 mm Sensor, 5-Axis Stabilisation)Effective Pixels: 24.1 MP
                  Video Resolution: 4K at 120 FPS Sensor: CMOS Sensor.</p>
         </div>
      </div>
   </div>

   <!-- second row for Clothing -->
   <h2><a href=\"Clothing\"><b><u> Clothing</b></u> </a></h2>
      <span>Grab them all at Flat 40% off and get ready to make a statement. Limited time only. 
            Enter an Indo-Western Paradise with the most stunning outfits from Chique. 24/7 customer service. 
            Addl 5% Off on Prepaid. Free Shipping.</span>
      <div class=\"row\" style=\"margin-top:20px;\">
         <div class=\"col-md-4\" >
            <div style=\"border:solid Gray;\">    
               <h3 align=\"center\">Gown (Womens Wear)</h3>       
               <img class=\"rounded mx-auto d-block\" src=\"images/gown.png\" style=\"height:200px; widht:50px;\"/>          
               <h3 align=\"center\"><b> 6,299&nbsp;&nbsp;</b><del style=\"color:red;\">12,269 </del><span style=\"color:green\">&nbsp;&nbsp;10% off</span></h3>
               <p><b>Barn Red Georgette Embroidered Anarkali Suit </b>Statement bridal weaves to suit every event! This hypnotising Barn Red Georgette 
               Anarkali Suit with enthralling Embroidery work is a perfect glam that redefines grace </p>
            </div>
         </div>
         <div class=\"col-md-4\" >
            <div style=\"border:solid Gray;\"> 
               <h3 align=\"center\">Indo-western (Kids Wear)</h3>          
               <img class=\"rounded mx-auto d-block\" src=\"images/kids.jpg\" style=\"height:200px; widht:10px;\"/>          
               <h3 align=\"center\"><b> 1,400&nbsp;&nbsp;</b><del style=\"color:red;\">3,000</del><span style=\"color:green\">&nbsp;&nbsp;11% off</span></h3>
               <p><b>Mr. & Ms. Junior Front Slit Blue Kids Girls Dress </b>
                  Package inclusions: front slit dress, leggings and yellow neckline bow
                  Fabric: 80% polyester 20% viscose
                  Designed to be suitable for every occasion
               </p>
            </div>
         </div>
         <div class=\"col-md-4\" >
            <div style=\"border:solid Gray;\"> 
               <h3 align=\"center\">Formal (Mens Wear)</h3>          
               <img class=\"rounded mx-auto d-block\" src=\"images/men.jpg\" style=\"height:200px; widht:100px;\"/>          
               <h3 align=\"center\"><b> 2,309 &nbsp;&nbsp;</b><del style=\"color:red;\">7,999</del><span style=\"color:green\">&nbsp;&nbsp;71% off</span></h3>
               <p><b>hangup Formal Coat Suits for Mens (one Coat and one Trousers Flat Front) </b>(BGN APPARELS, formed in the year 1980, is the brainchild of Shri Satish Gupta and family.
                Hangup deals in menswear which is currently being marketed </p>
            </div>
         </div>
      </div>

   <!-- third row for Beauty -->
   <h2><a href=\"Beauty\"><b><u> Electronic Devices</b></u> </a></h2>
   <span>Beauty is the the quality or aggregate of qualities in a person or thing that gives pleasure to the senses 
         or pleasurably exalts the mind or spirit : loveliness. a woman of great physical beauty.
         Image result for what is beauty. It's a radiance of spirit, having character, kindness to ourselves and to others,
         it's strength and self-confidence to know that with or without makeup the real beauty is you. 
         Part of beauty also has to be about the things that make you feel beautiful.</span>
   <div class=\"row\" style=\"margin-top:20px;\">
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">    
            <h3 align=\"center\"> Fit-Me (Foundation)</h3>       
            <img class=\"rounded mx-auto d-block\" src=\"images/foundation.jpg\" style=\"height:200px; widht:50px;\"/>          
            <h3 align=\"center\"><b> 389.60 &nbsp;&nbsp;</b><del style=\"color:red;\">629.00 </del><span style=\"color:green\">&nbsp;&nbsp;38% off</span></h3>
            <p><b> Maybelline New York Fit Me Matte Poreless Liquid Foundation 230 Natural Buff - 30 ml</b>
                  Gives oil-free look and is suitable for everyday use thanks to its lightweight formula.</p>
         </div>
      </div>
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Charcoal Mask</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/mask.jpg\" style=\"height:200px; widht:10px;\"/>          
            <h3 align=\"center\"><b> 169&nbsp;&nbsp;</b><del style=\"color:red;\">199</del><span style=\"color:green\">&nbsp;&nbsp;15% off</span></h3>
            <p><b>Charcoal Face Anti Blackhead Peel Off Mask 130ml</b>Blackhead. Charcoal Mask is derived from natural ingredients - to remove the oil on the face - 
            Cleaning and removed all the dirt.</p>
         </div>
      </div>
       <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Hair Spa Loreal Shampoo</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/shampoo.jpg\" style=\"height:200px; widht:100px;\"/>          
            <h3 align=\"center\"><b>676&nbsp;&nbsp;</b><del style=\"color:red;\">798</del><span style=\"color:green\">&nbsp;&nbsp;15% off</span></h3>
            <p><b>L'Oréal Professionnel Hair Spa Deep Nourishing Shampoo for Dry Hair with Water Lily, 250 ml </b>
               It gently cleanses and infuses the hair fibre with nutrients and moisture
               L'oreal
               Shampoo
            </p>
         </div>
      </div>
   </div>
   <!-- fourth row for Footwear -->
   <h2><a href=\"Footwear\"> <b><u> Footwear</b></u> </a></h2>
   <span>There is wisdom in shoes: “Once I was sad because I had no shoes. Then I met a man who had no feet.” 
         Your problems are not as bad as they could be. “Before you criticize a man, walk a mile in his shoes.” 
         Knowing the other's context puts you in a better position to judge him.</span>
   <div class=\"row\" style=\"margin-top:20px;\">
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\">    
            <h3 align=\"center\">Sport Shoes</h3>       
            <img class=\"rounded mx-auto d-block\" src=\"images/shoe.jpg\" style=\"height:200px; widht:50px;\"/>          
            <h3 align=\"center\"><b> 599 &nbsp;&nbsp;</b><del style=\"color:red;\">699 </del><span style=\"color:green\">&nbsp;&nbsp;9% off</span></h3>
            <p>Waan Sport Shoes Athletic Lightweight Breathable Running Casual Walking Comfortable Ultralight Men's Sports Light Weighted Shoe with Mesh
               Designed Lace-up Running Shoes for Men </p>
         </div>
      </div>
      <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">High Heels (Womens-Wear)</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/heels.jpg\" style=\"height:200px; widht:10px;\"/>          
            <h3 align=\"center\"><b>1,199.00 &nbsp;&nbsp;</b><del style=\"color:red;\">14,999</del><span style=\"color:green\">&nbsp;&nbsp;11 % off</span></h3>
            <p><b>Rare Beauty Dual Strap Rose Gold Heels</b>Material: Synthetic Patent
               Color: Rose Gold
               Sole: Tunic Sheet Sole
               Lining: P.U
               Occasion: Party Wear
               Heel Length : Measured between 3.5 inches to 4 will be considered to 4 inches</p>
         </div>
      </div>
       <div class=\"col-md-4\" >
         <div style=\"border:solid Gray;\"> 
            <h3 align=\"center\">Winters Slippers</h3>          
            <img class=\"rounded mx-auto d-block\" src=\"images/slipper.jpg\" style=\"height:200px; widht:100px;\"/>          
            <h3 align=\"center\"><b> 399.00 &nbsp;&nbsp;</b><del style=\"color:red;\">599</del><span style=\"color:green\">&nbsp;&nbsp;50 % off</span></h3>
            <p><b>
               Model Name: Striped Home Slippers
               Material: Rubber; Water resistance
               Heel type: Flat
               Heel Height: 1 inch
               Care instructions: Wipe with damp cloth and leave to dry in the sunlight
               Infispace Hand knitted  </p>
         </div>
      </div>
   </div>
   <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
   {{pimcore_snippet(\"Footer\")}}
</body>", "default/Header.html.twig", "/var/www/html/new/main_project/templates/default/Header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("pimcore_snippet" => 17);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
