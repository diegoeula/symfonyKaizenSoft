<?php

/* ControlBundle:dashgumfree2:morris.html.twig */
class __TwigTemplate_cc0bae8c15150ff7d7cf62cf0a4331d9809b3801c73e8ac8b0d7717803e26da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_dash2.html.twig", "ControlBundle:dashgumfree2:morris.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_dash2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4de2854c31f394986523d1b3c13d620f9e98f4ac4565ed34d333c96e4d6628e6 = $this->env->getExtension("native_profiler");
        $__internal_4de2854c31f394986523d1b3c13d620f9e98f4ac4565ed34d333c96e4d6628e6->enter($__internal_4de2854c31f394986523d1b3c13d620f9e98f4ac4565ed34d333c96e4d6628e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:dashgumfree2:morris.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4de2854c31f394986523d1b3c13d620f9e98f4ac4565ed34d333c96e4d6628e6->leave($__internal_4de2854c31f394986523d1b3c13d620f9e98f4ac4565ed34d333c96e4d6628e6_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d7cff777b00e1bc71fb07e1fea85024a6e7c62d9e081f41a941e485481fe31e = $this->env->getExtension("native_profiler");
        $__internal_0d7cff777b00e1bc71fb07e1fea85024a6e7c62d9e081f41a941e485481fe31e->enter($__internal_0d7cff777b00e1bc71fb07e1fea85024a6e7c62d9e081f41a941e485481fe31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!--external css-->
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--external css-->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link rel=\"stylesheet\" href=\"http://cdn.oesmith.co.uk/morris-0.4.3.min.css')}}\">    
        
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_0d7cff777b00e1bc71fb07e1fea85024a6e7c62d9e081f41a941e485481fe31e->leave($__internal_0d7cff777b00e1bc71fb07e1fea85024a6e7c62d9e081f41a941e485481fe31e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_e71db93627821539727f4747d4aa4247cb5e8c7df803582564bfaa4e8e862bab = $this->env->getExtension("native_profiler");
        $__internal_e71db93627821539727f4747d4aa4247cb5e8c7df803582564bfaa4e8e862bab->enter($__internal_e71db93627821539727f4747d4aa4247cb5e8c7df803582564bfaa4e8e862bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id=\"main-content\">
          <section class=\"wrapper site-min-height\">
          <h3><i class=\"fa fa-angle-right\"></i> Morris Charts</h3>
              <!-- page start-->
              <div id=\"morris\">
                  <div class=\"row mt\">
                      <div class=\"col-lg-6\">
                          <div class=\"content-panel\">
                              <h4><i class=\"fa fa-angle-right\"></i> Chart Example 1</h4>
                              <div class=\"panel-body\">
                                  <div id=\"hero-graph\" class=\"graph\"></div>
                              </div>
                          </div>
                      </div>
                      <div class=\"col-lg-6\">
                          <div class=\"content-panel\">
                              <h4><i class=\"fa fa-angle-right\"></i> Chart Example 2</h4>
                              <div class=\"panel-body\">
                                  <div id=\"hero-bar\" class=\"graph\"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class=\"row mt\">
                      <div class=\"col-lg-6\">
                          <div class=\"content-panel\">
                              <h4><i class=\"fa fa-angle-right\"></i> Chart Example 3</h4>
                              <div class=\"panel-body\">
                                  <div id=\"hero-area\" class=\"graph\"></div>
                              </div>
                          </div>
                      </div>
                      <div class=\"col-lg-6\">
                          <div class=\"content-panel\">
                              <h4><i class=\"fa fa-angle-right\"></i> Chart Example 4</h4>
                              <div class=\"panel-body\">
                                  <div id=\"hero-donut\" class=\"graph\"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      ";
        
        $__internal_e71db93627821539727f4747d4aa4247cb5e8c7df803582564bfaa4e8e862bab->leave($__internal_e71db93627821539727f4747d4aa4247cb5e8c7df803582564bfaa4e8e862bab_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_250542f3ba613fcbb5f10d24f3793bf27c0a11eaaaa7c2403e80b1b6154781bb = $this->env->getExtension("native_profiler");
        $__internal_250542f3ba613fcbb5f10d24f3793bf27c0a11eaaaa7c2403e80b1b6154781bb->enter($__internal_250542f3ba613fcbb5f10d24f3793bf27c0a11eaaaa7c2403e80b1b6154781bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


    <!--common script for all pages-->
\t<script src=\"http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}\"></script>
\t<script src=\"http://cdn.oesmith.co.uk/morris-0.4.3.min.js')}}\"></script>


    <!--script for this page-->
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/morris-conf.js"), "html", null, true);
        echo "\"></script>
    
  <script>
      //custom select box

      \$(function(){
          \$('select.styled').customSelect();
      });

  </script>
      ";
        
        $__internal_250542f3ba613fcbb5f10d24f3793bf27c0a11eaaaa7c2403e80b1b6154781bb->leave($__internal_250542f3ba613fcbb5f10d24f3793bf27c0a11eaaaa7c2403e80b1b6154781bb_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:dashgumfree2:morris.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 81,  146 => 72,  140 => 71,  81 => 17,  75 => 16,  65 => 13,  61 => 12,  54 => 8,  49 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::base_dash2.html.twig' %}*/
/* {% block stylesheets %}*/
/*      {{ parent() }}*/
/*     <!--external css-->*/
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{asset('dashgumfree2/css/bootstrap.css')}}" rel="stylesheet">*/
/*     <!--external css-->*/
/*     <link href="{{asset('dashgumfree2/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />*/
/* 	<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css')}}">    */
/*         */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{asset('dashgumfree2/css/style.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('dashgumfree2/css/style-responsive.css')}}" rel="stylesheet">*/
/* */
/* {% endblock %}    */
/*  {% block body %}*/
/*       */
/*       <!-- ***********************************************************************************************************************************************************/
/*       MAIN CONTENT*/
/*       *********************************************************************************************************************************************************** -->*/
/*       <!--main content start-->*/
/*       <section id="main-content">*/
/*           <section class="wrapper site-min-height">*/
/*           <h3><i class="fa fa-angle-right"></i> Morris Charts</h3>*/
/*               <!-- page start-->*/
/*               <div id="morris">*/
/*                   <div class="row mt">*/
/*                       <div class="col-lg-6">*/
/*                           <div class="content-panel">*/
/*                               <h4><i class="fa fa-angle-right"></i> Chart Example 1</h4>*/
/*                               <div class="panel-body">*/
/*                                   <div id="hero-graph" class="graph"></div>*/
/*                               </div>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="col-lg-6">*/
/*                           <div class="content-panel">*/
/*                               <h4><i class="fa fa-angle-right"></i> Chart Example 2</h4>*/
/*                               <div class="panel-body">*/
/*                                   <div id="hero-bar" class="graph"></div>*/
/*                               </div>*/
/*                           </div>*/
/*                       </div>*/
/*                   </div>*/
/*                   <div class="row mt">*/
/*                       <div class="col-lg-6">*/
/*                           <div class="content-panel">*/
/*                               <h4><i class="fa fa-angle-right"></i> Chart Example 3</h4>*/
/*                               <div class="panel-body">*/
/*                                   <div id="hero-area" class="graph"></div>*/
/*                               </div>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="col-lg-6">*/
/*                           <div class="content-panel">*/
/*                               <h4><i class="fa fa-angle-right"></i> Chart Example 4</h4>*/
/*                               <div class="panel-body">*/
/*                                   <div id="hero-donut" class="graph"></div>*/
/*                               </div>*/
/*                           </div>*/
/*                       </div>*/
/*                   </div>*/
/*               </div>*/
/*               <!-- page end-->*/
/*           </section>*/
/*       </section><!-- /MAIN CONTENT -->*/
/* */
/*       <!--main content end-->*/
/*       {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/* */
/*     <!--common script for all pages-->*/
/* 	<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>*/
/* 	<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js')}}"></script>*/
/* */
/* */
/*     <!--script for this page-->*/
/*     <script src="{{asset('dashgumfree2/js/morris-conf.js')}}"></script>*/
/*     */
/*   <script>*/
/*       //custom select box*/
/* */
/*       $(function(){*/
/*           $('select.styled').customSelect();*/
/*       });*/
/* */
/*   </script>*/
/*       {% endblock %}*/
/* */
