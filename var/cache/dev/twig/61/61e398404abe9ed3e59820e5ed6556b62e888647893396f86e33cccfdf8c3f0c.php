<?php

/* ControlBundle:dashgumfree2:responsive_table.html.twig */
class __TwigTemplate_b5362b72da57320901a550396ceebdf7a146e4caaf3da8d053278ef73f5447f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_dash2.html.twig", "ControlBundle:dashgumfree2:responsive_table.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_dash2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ead6fe9c4cc886f134d9ef45abb42803febf89bfac510bf5f0009b4849dbba60 = $this->env->getExtension("native_profiler");
        $__internal_ead6fe9c4cc886f134d9ef45abb42803febf89bfac510bf5f0009b4849dbba60->enter($__internal_ead6fe9c4cc886f134d9ef45abb42803febf89bfac510bf5f0009b4849dbba60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:dashgumfree2:responsive_table.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ead6fe9c4cc886f134d9ef45abb42803febf89bfac510bf5f0009b4849dbba60->leave($__internal_ead6fe9c4cc886f134d9ef45abb42803febf89bfac510bf5f0009b4849dbba60_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd72755fb1a8f2c79f9ea399fbcf80e87d71c74ca9fbde7505914bbd4d763fc8 = $this->env->getExtension("native_profiler");
        $__internal_dd72755fb1a8f2c79f9ea399fbcf80e87d71c74ca9fbde7505914bbd4d763fc8->enter($__internal_dd72755fb1a8f2c79f9ea399fbcf80e87d71c74ca9fbde7505914bbd4d763fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!--external css-->

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--external css-->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/table-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_dd72755fb1a8f2c79f9ea399fbcf80e87d71c74ca9fbde7505914bbd4d763fc8->leave($__internal_dd72755fb1a8f2c79f9ea399fbcf80e87d71c74ca9fbde7505914bbd4d763fc8_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_45a87efecfb59911f97fd812fb207adbf75110753f3095e592697c4da3b9a1d1 = $this->env->getExtension("native_profiler");
        $__internal_45a87efecfb59911f97fd812fb207adbf75110753f3095e592697c4da3b9a1d1->enter($__internal_45a87efecfb59911f97fd812fb207adbf75110753f3095e592697c4da3b9a1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id=\"main-content\">
          <section class=\"wrapper\">
          \t<h3><i class=\"fa fa-angle-right\"></i> Responsive Table Examples</h3>
\t\t  \t\t<div class=\"row mt\">
\t\t\t  \t\t<div class=\"col-lg-12\">
                      <div class=\"content-panel\">
                      <h4><i class=\"fa fa-angle-right\"></i> Responsive Table</h4>
                          <section id=\"unseen\">
                            <table class=\"table table-bordered table-striped table-condensed\">
                              <thead>
                              <tr>
                                  <th>Code</th>
                                  <th>Company</th>
                                  <th class=\"numeric\">Price</th>
                                  <th class=\"numeric\">Change</th>
                                  <th class=\"numeric\">Change %</th>
                                  <th class=\"numeric\">Open</th>
                                  <th class=\"numeric\">High</th>
                                  <th class=\"numeric\">Low</th>
                                  <th class=\"numeric\">Volume</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>AAC</td>
                                  <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                  <td class=\"numeric\">\$1.38</td>
                                  <td class=\"numeric\">-0.01</td>
                                  <td class=\"numeric\">-0.36%</td>
                                  <td class=\"numeric\">\$1.39</td>
                                  <td class=\"numeric\">\$1.39</td>
                                  <td class=\"numeric\">\$1.38</td>
                                  <td class=\"numeric\">9,395</td>
                              </tr>
                              <tr>
                                  <td>AAD</td>
                                  <td>ARDENT LEISURE GROUP</td>
                                  <td class=\"numeric\">\$1.15</td>
                                  <td class=\"numeric\">  +0.02</td>
                                  <td class=\"numeric\">1.32%</td>
                                  <td class=\"numeric\">\$1.14</td>
                                  <td class=\"numeric\">\$1.15</td>
                                  <td class=\"numeric\">\$1.13</td>
                                  <td class=\"numeric\">56,431</td>
                              </tr>
                              <tr>
                                  <td>AAX</td>
                                  <td>AUSENCO LIMITED</td>
                                  <td class=\"numeric\">\$4.00</td>
                                  <td class=\"numeric\">-0.04</td>
                                  <td class=\"numeric\">-0.99%</td>
                                  <td class=\"numeric\">\$4.01</td>
                                  <td class=\"numeric\">\$4.05</td>
                                  <td class=\"numeric\">\$4.00</td>
                                  <td class=\"numeric\">90,641</td>
                              </tr>
                              <tr>
                                  <td>ABC</td>
                                  <td>ADELAIDE BRIGHTON LIMITED</td>
                                  <td class=\"numeric\">\$3.00</td>
                                  <td class=\"numeric\">  +0.06</td>
                                  <td class=\"numeric\">2.04%</td>
                                  <td class=\"numeric\">\$2.98</td>
                                  <td class=\"numeric\">\$3.00</td>
                                  <td class=\"numeric\">\$2.96</td>
                                  <td class=\"numeric\">862,518</td>
                              </tr>
                              <tr>
                                  <td>ABP</td>
                                  <td>ABACUS PROPERTY GROUP</td>
                                  <td class=\"numeric\">\$1.91</td>
                                  <td class=\"numeric\">0.00</td>
                                  <td class=\"numeric\">0.00%</td>
                                  <td class=\"numeric\">\$1.92</td>
                                  <td class=\"numeric\">\$1.93</td>
                                  <td class=\"numeric\">\$1.90</td>
                                  <td class=\"numeric\">595,701</td>
                              </tr>
                              <tr>
                                  <td>ABY</td>
                                  <td>ADITYA BIRLA MINERALS LIMITED</td>
                                  <td class=\"numeric\">\$0.77</td>
                                  <td class=\"numeric\">  +0.02</td>
                                  <td class=\"numeric\">2.00%</td>
                                  <td class=\"numeric\">\$0.76</td>
                                  <td class=\"numeric\">\$0.77</td>
                                  <td class=\"numeric\">\$0.76</td>
                                  <td class=\"numeric\">54,567</td>
                              </tr>
                              <tr>
                                  <td>ACR</td>
                                  <td>ACRUX LIMITED</td>
                                  <td class=\"numeric\">\$3.71</td>
                                  <td class=\"numeric\">  +0.01</td>
                                  <td class=\"numeric\">0.14%</td>
                                  <td class=\"numeric\">\$3.70</td>
                                  <td class=\"numeric\">\$3.72</td>
                                  <td class=\"numeric\">\$3.68</td>
                                  <td class=\"numeric\">191,373</td>
                              </tr>
                              <tr>
                                  <td>ADU</td>
                                  <td>ADAMUS RESOURCES LIMITED</td>
                                  <td class=\"numeric\">\$0.72</td>
                                  <td class=\"numeric\">0.00</td>
                                  <td class=\"numeric\">0.00%</td>
                                  <td class=\"numeric\">\$0.73</td>
                                  <td class=\"numeric\">\$0.74</td>
                                  <td class=\"numeric\">\$0.72</td>
                                  <td class=\"numeric\">8,602,291</td>
                              </tr>
                              <tr>
                                  <td>AGG</td>
                                  <td>ANGLOGOLD ASHANTI LIMITED</td>
                                  <td class=\"numeric\">\$7.81</td>
                                  <td class=\"numeric\">-0.22</td>
                                  <td class=\"numeric\">-2.74%</td>
                                  <td class=\"numeric\">\$7.82</td>
                                  <td class=\"numeric\">\$7.82</td>
                                  <td class=\"numeric\">\$7.81</td>
                                  <td class=\"numeric\">148</td>
                              </tr>
                              <tr>
                                  <td>AGK</td>
                                  <td>AGL ENERGY LIMITED</td>
                                  <td class=\"numeric\">\$13.82</td>
                                  <td class=\"numeric\">  +0.02</td>
                                  <td class=\"numeric\">0.14%</td>
                                  <td class=\"numeric\">\$13.83</td>
                                  <td class=\"numeric\">\$13.83</td>
                                  <td class=\"numeric\">\$13.67</td>
                                  <td class=\"numeric\">846,403</td>
                              </tr>
                              <tr>
                                  <td>AGO</td>
                                  <td>ATLAS IRON LIMITED</td>
                                  <td class=\"numeric\">\$3.17</td>
                                  <td class=\"numeric\">-0.02</td>
                                  <td class=\"numeric\">-0.47%</td>
                                  <td class=\"numeric\">\$3.11</td>
                                  <td class=\"numeric\">\$3.22</td>
                                  <td class=\"numeric\">\$3.10</td>
                                  <td class=\"numeric\">5,416,303</td>
                              </tr>
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->\t\t\t
\t\t  \t</div><!-- /row -->
\t\t  \t
\t\t  \t<div class=\"row mt\">
              <div class=\"col-lg-12\">
                      <div class=\"content-panel\">
\t\t\t\t\t\t  <h4><i class=\"fa fa-angle-right\"></i> No More Table</h4>
                          <section id=\"no-more-tables\">
                              <table class=\"table table-bordered table-striped table-condensed cf\">
                                  <thead class=\"cf\">
                                  <tr>
                                      <th>Code</th>
                                      <th>Company</th>
                                      <th class=\"numeric\">Price</th>
                                      <th class=\"numeric\">Change</th>
                                      <th class=\"numeric\">Change %</th>
                                      <th class=\"numeric\">Open</th>
                                      <th class=\"numeric\">High</th>
                                      <th class=\"numeric\">Low</th>
                                      <th class=\"numeric\">Volume</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td data-title=\"Code\">AAC</td>
                                      <td data-title=\"Company\">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                      <td class=\"numeric\" data-title=\"Price\">\$1.38</td>
                                      <td class=\"numeric\" data-title=\"Change\">-0.01</td>
                                      <td class=\"numeric\" data-title=\"Change %\">-0.36%</td>
                                      <td class=\"numeric\" data-title=\"Open\">\$1.39</td>
                                      <td class=\"numeric\" data-title=\"High\">\$1.39</td>
                                      <td class=\"numeric\" data-title=\"Low\">\$1.38</td>
                                      <td class=\"numeric\" data-title=\"Volume\">9,395</td>
                                  </tr>
                                  <tr>
                                      <td data-title=\"Code\">AAD</td>
                                      <td data-title=\"Company\">ARDENT LEISURE GROUP</td>
                                      <td class=\"numeric\" data-title=\"Price\">\$1.15</td>
                                      <td class=\"numeric\" data-title=\"Change\">  +0.02</td>
                                      <td class=\"numeric\" data-title=\"Change %\">1.32%</td>
                                      <td class=\"numeric\" data-title=\"Open\">\$1.14</td>
                                      <td class=\"numeric\" data-title=\"High\">\$1.15</td>
                                      <td class=\"numeric\" data-title=\"Low\">\$1.13</td>
                                      <td class=\"numeric\" data-title=\"Volume\">56,431</td>
                                  </tr>
                                  <tr>
                                      <td data-title=\"Code\">AAX</td>
                                      <td data-title=\"Company\">AUSENCO LIMITED</td>
                                      <td class=\"numeric\" data-title=\"Price\">\$4.00</td>
                                      <td class=\"numeric\" data-title=\"Change\">-0.04</td>
                                      <td class=\"numeric\" data-title=\"Change %\">-0.99%</td>
                                      <td class=\"numeric\" data-title=\"Open\">\$4.01</td>
                                      <td class=\"numeric\" data-title=\"High\">\$4.05</td>
                                      <td class=\"numeric\" data-title=\"Low\">\$4.00</td>
                                      <td class=\"numeric\" data-title=\"Volume\">90,641</td>
                                  </tr>
                                  <tr>
                                      <td data-title=\"Code\">ABC</td>
                                      <td data-title=\"Company\">ADELAIDE BRIGHTON LIMITED</td>
                                      <td class=\"numeric\" data-title=\"Price\">\$3.00</td>
                                      <td class=\"numeric\" data-title=\"Change\">  +0.06</td>
                                      <td class=\"numeric\" data-title=\"Change %\">2.04%</td>
                                      <td class=\"numeric\" data-title=\"Open\">\$2.98</td>
                                      <td class=\"numeric\" data-title=\"High\">\$3.00</td>
                                      <td class=\"numeric\" data-title=\"Low\">\$2.96</td>
                                      <td class=\"numeric\" data-title=\"Volume\">862,518</td>
                                  </tr>
                                  <tr>
                                      <td data-title=\"Code\">ABP</td>
                                      <td data-title=\"Company\">ABACUS PROPERTY GROUP</td>
                                      <td class=\"numeric\" data-title=\"Price\">\$1.91</td>
                                      <td class=\"numeric\" data-title=\"Change\">0.00</td>
                                      <td class=\"numeric\" data-title=\"Change %\">0.00%</td>
                                      <td class=\"numeric\" data-title=\"Open\">\$1.92</td>
                                      <td class=\"numeric\" data-title=\"High\">\$1.93</td>
                                      <td class=\"numeric\" data-title=\"Low\">\$1.90</td>
                                      <td class=\"numeric\" data-title=\"Volume\">595,701</td>
                                  </tr>
                                  <tr>
                                      <td data-title=\"Code\">ABY</td>
                                      <td data-title=\"Company\">ADITYA BIRLA MINERALS LIMITED</td>
                                      <td class=\"numeric\" data-title=\"Price\">\$0.77</td>
                                      <td class=\"numeric\" data-title=\"Change\">  +0.02</td>
                                      <td class=\"numeric\" data-title=\"Change %\">2.00%</td>
                                      <td class=\"numeric\" data-title=\"Open\">\$0.76</td>
                                      <td class=\"numeric\" data-title=\"High\">\$0.77</td>
                                      <td class=\"numeric\" data-title=\"Low\">\$0.76</td>
                                      <td class=\"numeric\" data-title=\"Volume\">54,567</td>
                                  </tr>
                                  <tr>
                                      <td data-title=\"Code\">ACR</td>
                                      <td data-title=\"Company\">ACRUX LIMITED</td>
                                      <td class=\"numeric\" data-title=\"Price\">\$3.71</td>
                                      <td class=\"numeric\" data-title=\"Change\">  +0.01</td>
                                      <td class=\"numeric\" data-title=\"Change %\">0.14%</td>
                                      <td class=\"numeric\" data-title=\"Open\">\$3.70</td>
                                      <td class=\"numeric\" data-title=\"High\">\$3.72</td>
                                      <td class=\"numeric\" data-title=\"Low\">\$3.68</td>
                                      <td class=\"numeric\" data-title=\"Volume\">191,373</td>
                                  </tr>
                                  <tr>
                                      <td data-title=\"Code\">ADU</td>
                                      <td data-title=\"Company\">ADAMUS RESOURCES LIMITED</td>
                                      <td class=\"numeric\" data-title=\"Price\">\$0.72</td>
                                      <td class=\"numeric\" data-title=\"Change\">0.00</td>
                                      <td class=\"numeric\" data-title=\"Change %\">0.00%</td>
                                      <td class=\"numeric\" data-title=\"Open\">\$0.73</td>
                                      <td class=\"numeric\" data-title=\"High\">\$0.74</td>
                                      <td class=\"numeric\" data-title=\"Low\">\$0.72</td>
                                      <td class=\"numeric\" data-title=\"Volume\">8,602,291</td>
                                  </tr>
                                  <tr>
                                      <td data-title=\"Code\">AGG</td>
                                      <td data-title=\"Company\">ANGLOGOLD ASHANTI LIMITED</td>
                                      <td class=\"numeric\" data-title=\"Price\">\$7.81</td>
                                      <td class=\"numeric\" data-title=\"Change\">-0.22</td>
                                      <td class=\"numeric\" data-title=\"Change %\">-2.74%</td>
                                      <td class=\"numeric\" data-title=\"Open\">\$7.82</td>
                                      <td class=\"numeric\" data-title=\"High\">\$7.82</td>
                                      <td class=\"numeric\" data-title=\"Low\">\$7.81</td>
                                      <td class=\"numeric\" data-title=\"Volume\">148</td>
                                  </tr>
                                  <tr>
                                      <td data-title=\"Code\">AGK</td>
                                      <td data-title=\"Company\">AGL ENERGY LIMITED</td>
                                      <td class=\"numeric\" data-title=\"Price\">\$13.82</td>
                                      <td class=\"numeric\" data-title=\"Change\">  +0.02</td>
                                      <td class=\"numeric\" data-title=\"Change %\">0.14%</td>
                                      <td class=\"numeric\" data-title=\"Open\">\$13.83</td>
                                      <td class=\"numeric\" data-title=\"High\">\$13.83</td>
                                      <td class=\"numeric\" data-title=\"Low\">\$13.67</td>
                                      <td class=\"numeric\" data-title=\"Volume\">846,403</td>
                                  </tr>
                                  <tr>
                                      <td data-title=\"Code\">AGO</td>
                                      <td data-title=\"Company\">ATLAS IRON LIMITED</td>
                                      <td class=\"numeric\" data-title=\"Price\">\$3.17</td>
                                      <td class=\"numeric\" data-title=\"Change\">-0.02</td>
                                      <td class=\"numeric\" data-title=\"Change %\">-0.47%</td>
                                      <td class=\"numeric\" data-title=\"Open\">\$3.11</td>
                                      <td class=\"numeric\" data-title=\"High\">\$3.22</td>
                                      <td class=\"numeric\" data-title=\"Low\">\$3.10</td>
                                      <td class=\"numeric\" data-title=\"Volume\">5,416,303</td>
                                  </tr>
                                  </tbody>
                              </table>
                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

\t\t</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
     ";
        
        $__internal_45a87efecfb59911f97fd812fb207adbf75110753f3095e592697c4da3b9a1d1->leave($__internal_45a87efecfb59911f97fd812fb207adbf75110753f3095e592697c4da3b9a1d1_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:dashgumfree2:responsive_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  79 => 18,  69 => 15,  64 => 13,  60 => 12,  54 => 9,  49 => 7,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base_dash2.html.twig' %}*/
/* {% block stylesheets %}*/
/*      {{ parent() }}*/
/*     <!--external css-->*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{asset('dashgumfree2/css/bootstrap.css')}}" rel="stylesheet">*/
/*     <!--external css-->*/
/*     <link href="{{asset('dashgumfree2/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />*/
/*         */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{asset('dashgumfree2/css/style.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('dashgumfree2/css/style-responsive.css')}}" rel="stylesheet">*/
/* */
/*     <link href="{{asset('dashgumfree2/css/table-responsive.css')}}" rel="stylesheet">*/
/* */
/* {% endblock %}    */
/*  {% block body %}*/
/*       */
/*       <!-- ***********************************************************************************************************************************************************/
/*       MAIN CONTENT*/
/*       *********************************************************************************************************************************************************** -->*/
/*       <!--main content start-->*/
/*       <section id="main-content">*/
/*           <section class="wrapper">*/
/*           	<h3><i class="fa fa-angle-right"></i> Responsive Table Examples</h3>*/
/* 		  		<div class="row mt">*/
/* 			  		<div class="col-lg-12">*/
/*                       <div class="content-panel">*/
/*                       <h4><i class="fa fa-angle-right"></i> Responsive Table</h4>*/
/*                           <section id="unseen">*/
/*                             <table class="table table-bordered table-striped table-condensed">*/
/*                               <thead>*/
/*                               <tr>*/
/*                                   <th>Code</th>*/
/*                                   <th>Company</th>*/
/*                                   <th class="numeric">Price</th>*/
/*                                   <th class="numeric">Change</th>*/
/*                                   <th class="numeric">Change %</th>*/
/*                                   <th class="numeric">Open</th>*/
/*                                   <th class="numeric">High</th>*/
/*                                   <th class="numeric">Low</th>*/
/*                                   <th class="numeric">Volume</th>*/
/*                               </tr>*/
/*                               </thead>*/
/*                               <tbody>*/
/*                               <tr>*/
/*                                   <td>AAC</td>*/
/*                                   <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>*/
/*                                   <td class="numeric">$1.38</td>*/
/*                                   <td class="numeric">-0.01</td>*/
/*                                   <td class="numeric">-0.36%</td>*/
/*                                   <td class="numeric">$1.39</td>*/
/*                                   <td class="numeric">$1.39</td>*/
/*                                   <td class="numeric">$1.38</td>*/
/*                                   <td class="numeric">9,395</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                   <td>AAD</td>*/
/*                                   <td>ARDENT LEISURE GROUP</td>*/
/*                                   <td class="numeric">$1.15</td>*/
/*                                   <td class="numeric">  +0.02</td>*/
/*                                   <td class="numeric">1.32%</td>*/
/*                                   <td class="numeric">$1.14</td>*/
/*                                   <td class="numeric">$1.15</td>*/
/*                                   <td class="numeric">$1.13</td>*/
/*                                   <td class="numeric">56,431</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                   <td>AAX</td>*/
/*                                   <td>AUSENCO LIMITED</td>*/
/*                                   <td class="numeric">$4.00</td>*/
/*                                   <td class="numeric">-0.04</td>*/
/*                                   <td class="numeric">-0.99%</td>*/
/*                                   <td class="numeric">$4.01</td>*/
/*                                   <td class="numeric">$4.05</td>*/
/*                                   <td class="numeric">$4.00</td>*/
/*                                   <td class="numeric">90,641</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                   <td>ABC</td>*/
/*                                   <td>ADELAIDE BRIGHTON LIMITED</td>*/
/*                                   <td class="numeric">$3.00</td>*/
/*                                   <td class="numeric">  +0.06</td>*/
/*                                   <td class="numeric">2.04%</td>*/
/*                                   <td class="numeric">$2.98</td>*/
/*                                   <td class="numeric">$3.00</td>*/
/*                                   <td class="numeric">$2.96</td>*/
/*                                   <td class="numeric">862,518</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                   <td>ABP</td>*/
/*                                   <td>ABACUS PROPERTY GROUP</td>*/
/*                                   <td class="numeric">$1.91</td>*/
/*                                   <td class="numeric">0.00</td>*/
/*                                   <td class="numeric">0.00%</td>*/
/*                                   <td class="numeric">$1.92</td>*/
/*                                   <td class="numeric">$1.93</td>*/
/*                                   <td class="numeric">$1.90</td>*/
/*                                   <td class="numeric">595,701</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                   <td>ABY</td>*/
/*                                   <td>ADITYA BIRLA MINERALS LIMITED</td>*/
/*                                   <td class="numeric">$0.77</td>*/
/*                                   <td class="numeric">  +0.02</td>*/
/*                                   <td class="numeric">2.00%</td>*/
/*                                   <td class="numeric">$0.76</td>*/
/*                                   <td class="numeric">$0.77</td>*/
/*                                   <td class="numeric">$0.76</td>*/
/*                                   <td class="numeric">54,567</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                   <td>ACR</td>*/
/*                                   <td>ACRUX LIMITED</td>*/
/*                                   <td class="numeric">$3.71</td>*/
/*                                   <td class="numeric">  +0.01</td>*/
/*                                   <td class="numeric">0.14%</td>*/
/*                                   <td class="numeric">$3.70</td>*/
/*                                   <td class="numeric">$3.72</td>*/
/*                                   <td class="numeric">$3.68</td>*/
/*                                   <td class="numeric">191,373</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                   <td>ADU</td>*/
/*                                   <td>ADAMUS RESOURCES LIMITED</td>*/
/*                                   <td class="numeric">$0.72</td>*/
/*                                   <td class="numeric">0.00</td>*/
/*                                   <td class="numeric">0.00%</td>*/
/*                                   <td class="numeric">$0.73</td>*/
/*                                   <td class="numeric">$0.74</td>*/
/*                                   <td class="numeric">$0.72</td>*/
/*                                   <td class="numeric">8,602,291</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                   <td>AGG</td>*/
/*                                   <td>ANGLOGOLD ASHANTI LIMITED</td>*/
/*                                   <td class="numeric">$7.81</td>*/
/*                                   <td class="numeric">-0.22</td>*/
/*                                   <td class="numeric">-2.74%</td>*/
/*                                   <td class="numeric">$7.82</td>*/
/*                                   <td class="numeric">$7.82</td>*/
/*                                   <td class="numeric">$7.81</td>*/
/*                                   <td class="numeric">148</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                   <td>AGK</td>*/
/*                                   <td>AGL ENERGY LIMITED</td>*/
/*                                   <td class="numeric">$13.82</td>*/
/*                                   <td class="numeric">  +0.02</td>*/
/*                                   <td class="numeric">0.14%</td>*/
/*                                   <td class="numeric">$13.83</td>*/
/*                                   <td class="numeric">$13.83</td>*/
/*                                   <td class="numeric">$13.67</td>*/
/*                                   <td class="numeric">846,403</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                   <td>AGO</td>*/
/*                                   <td>ATLAS IRON LIMITED</td>*/
/*                                   <td class="numeric">$3.17</td>*/
/*                                   <td class="numeric">-0.02</td>*/
/*                                   <td class="numeric">-0.47%</td>*/
/*                                   <td class="numeric">$3.11</td>*/
/*                                   <td class="numeric">$3.22</td>*/
/*                                   <td class="numeric">$3.10</td>*/
/*                                   <td class="numeric">5,416,303</td>*/
/*                               </tr>*/
/*                               </tbody>*/
/*                           </table>*/
/*                           </section>*/
/*                   </div><!-- /content-panel -->*/
/*                </div><!-- /col-lg-4 -->			*/
/* 		  	</div><!-- /row -->*/
/* 		  	*/
/* 		  	<div class="row mt">*/
/*               <div class="col-lg-12">*/
/*                       <div class="content-panel">*/
/* 						  <h4><i class="fa fa-angle-right"></i> No More Table</h4>*/
/*                           <section id="no-more-tables">*/
/*                               <table class="table table-bordered table-striped table-condensed cf">*/
/*                                   <thead class="cf">*/
/*                                   <tr>*/
/*                                       <th>Code</th>*/
/*                                       <th>Company</th>*/
/*                                       <th class="numeric">Price</th>*/
/*                                       <th class="numeric">Change</th>*/
/*                                       <th class="numeric">Change %</th>*/
/*                                       <th class="numeric">Open</th>*/
/*                                       <th class="numeric">High</th>*/
/*                                       <th class="numeric">Low</th>*/
/*                                       <th class="numeric">Volume</th>*/
/*                                   </tr>*/
/*                                   </thead>*/
/*                                   <tbody>*/
/*                                   <tr>*/
/*                                       <td data-title="Code">AAC</td>*/
/*                                       <td data-title="Company">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>*/
/*                                       <td class="numeric" data-title="Price">$1.38</td>*/
/*                                       <td class="numeric" data-title="Change">-0.01</td>*/
/*                                       <td class="numeric" data-title="Change %">-0.36%</td>*/
/*                                       <td class="numeric" data-title="Open">$1.39</td>*/
/*                                       <td class="numeric" data-title="High">$1.39</td>*/
/*                                       <td class="numeric" data-title="Low">$1.38</td>*/
/*                                       <td class="numeric" data-title="Volume">9,395</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                       <td data-title="Code">AAD</td>*/
/*                                       <td data-title="Company">ARDENT LEISURE GROUP</td>*/
/*                                       <td class="numeric" data-title="Price">$1.15</td>*/
/*                                       <td class="numeric" data-title="Change">  +0.02</td>*/
/*                                       <td class="numeric" data-title="Change %">1.32%</td>*/
/*                                       <td class="numeric" data-title="Open">$1.14</td>*/
/*                                       <td class="numeric" data-title="High">$1.15</td>*/
/*                                       <td class="numeric" data-title="Low">$1.13</td>*/
/*                                       <td class="numeric" data-title="Volume">56,431</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                       <td data-title="Code">AAX</td>*/
/*                                       <td data-title="Company">AUSENCO LIMITED</td>*/
/*                                       <td class="numeric" data-title="Price">$4.00</td>*/
/*                                       <td class="numeric" data-title="Change">-0.04</td>*/
/*                                       <td class="numeric" data-title="Change %">-0.99%</td>*/
/*                                       <td class="numeric" data-title="Open">$4.01</td>*/
/*                                       <td class="numeric" data-title="High">$4.05</td>*/
/*                                       <td class="numeric" data-title="Low">$4.00</td>*/
/*                                       <td class="numeric" data-title="Volume">90,641</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                       <td data-title="Code">ABC</td>*/
/*                                       <td data-title="Company">ADELAIDE BRIGHTON LIMITED</td>*/
/*                                       <td class="numeric" data-title="Price">$3.00</td>*/
/*                                       <td class="numeric" data-title="Change">  +0.06</td>*/
/*                                       <td class="numeric" data-title="Change %">2.04%</td>*/
/*                                       <td class="numeric" data-title="Open">$2.98</td>*/
/*                                       <td class="numeric" data-title="High">$3.00</td>*/
/*                                       <td class="numeric" data-title="Low">$2.96</td>*/
/*                                       <td class="numeric" data-title="Volume">862,518</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                       <td data-title="Code">ABP</td>*/
/*                                       <td data-title="Company">ABACUS PROPERTY GROUP</td>*/
/*                                       <td class="numeric" data-title="Price">$1.91</td>*/
/*                                       <td class="numeric" data-title="Change">0.00</td>*/
/*                                       <td class="numeric" data-title="Change %">0.00%</td>*/
/*                                       <td class="numeric" data-title="Open">$1.92</td>*/
/*                                       <td class="numeric" data-title="High">$1.93</td>*/
/*                                       <td class="numeric" data-title="Low">$1.90</td>*/
/*                                       <td class="numeric" data-title="Volume">595,701</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                       <td data-title="Code">ABY</td>*/
/*                                       <td data-title="Company">ADITYA BIRLA MINERALS LIMITED</td>*/
/*                                       <td class="numeric" data-title="Price">$0.77</td>*/
/*                                       <td class="numeric" data-title="Change">  +0.02</td>*/
/*                                       <td class="numeric" data-title="Change %">2.00%</td>*/
/*                                       <td class="numeric" data-title="Open">$0.76</td>*/
/*                                       <td class="numeric" data-title="High">$0.77</td>*/
/*                                       <td class="numeric" data-title="Low">$0.76</td>*/
/*                                       <td class="numeric" data-title="Volume">54,567</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                       <td data-title="Code">ACR</td>*/
/*                                       <td data-title="Company">ACRUX LIMITED</td>*/
/*                                       <td class="numeric" data-title="Price">$3.71</td>*/
/*                                       <td class="numeric" data-title="Change">  +0.01</td>*/
/*                                       <td class="numeric" data-title="Change %">0.14%</td>*/
/*                                       <td class="numeric" data-title="Open">$3.70</td>*/
/*                                       <td class="numeric" data-title="High">$3.72</td>*/
/*                                       <td class="numeric" data-title="Low">$3.68</td>*/
/*                                       <td class="numeric" data-title="Volume">191,373</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                       <td data-title="Code">ADU</td>*/
/*                                       <td data-title="Company">ADAMUS RESOURCES LIMITED</td>*/
/*                                       <td class="numeric" data-title="Price">$0.72</td>*/
/*                                       <td class="numeric" data-title="Change">0.00</td>*/
/*                                       <td class="numeric" data-title="Change %">0.00%</td>*/
/*                                       <td class="numeric" data-title="Open">$0.73</td>*/
/*                                       <td class="numeric" data-title="High">$0.74</td>*/
/*                                       <td class="numeric" data-title="Low">$0.72</td>*/
/*                                       <td class="numeric" data-title="Volume">8,602,291</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                       <td data-title="Code">AGG</td>*/
/*                                       <td data-title="Company">ANGLOGOLD ASHANTI LIMITED</td>*/
/*                                       <td class="numeric" data-title="Price">$7.81</td>*/
/*                                       <td class="numeric" data-title="Change">-0.22</td>*/
/*                                       <td class="numeric" data-title="Change %">-2.74%</td>*/
/*                                       <td class="numeric" data-title="Open">$7.82</td>*/
/*                                       <td class="numeric" data-title="High">$7.82</td>*/
/*                                       <td class="numeric" data-title="Low">$7.81</td>*/
/*                                       <td class="numeric" data-title="Volume">148</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                       <td data-title="Code">AGK</td>*/
/*                                       <td data-title="Company">AGL ENERGY LIMITED</td>*/
/*                                       <td class="numeric" data-title="Price">$13.82</td>*/
/*                                       <td class="numeric" data-title="Change">  +0.02</td>*/
/*                                       <td class="numeric" data-title="Change %">0.14%</td>*/
/*                                       <td class="numeric" data-title="Open">$13.83</td>*/
/*                                       <td class="numeric" data-title="High">$13.83</td>*/
/*                                       <td class="numeric" data-title="Low">$13.67</td>*/
/*                                       <td class="numeric" data-title="Volume">846,403</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                       <td data-title="Code">AGO</td>*/
/*                                       <td data-title="Company">ATLAS IRON LIMITED</td>*/
/*                                       <td class="numeric" data-title="Price">$3.17</td>*/
/*                                       <td class="numeric" data-title="Change">-0.02</td>*/
/*                                       <td class="numeric" data-title="Change %">-0.47%</td>*/
/*                                       <td class="numeric" data-title="Open">$3.11</td>*/
/*                                       <td class="numeric" data-title="High">$3.22</td>*/
/*                                       <td class="numeric" data-title="Low">$3.10</td>*/
/*                                       <td class="numeric" data-title="Volume">5,416,303</td>*/
/*                                   </tr>*/
/*                                   </tbody>*/
/*                               </table>*/
/*                           </section>*/
/*                       </div><!-- /content-panel -->*/
/*                   </div><!-- /col-lg-12 -->*/
/*               </div><!-- /row -->*/
/* */
/* 		</section><! --/wrapper -->*/
/*       </section><!-- /MAIN CONTENT -->*/
/* */
/*       <!--main content end-->*/
/*      {% endblock %}*/
/* */
/* */
