<?php

/* ControlBundle:dashgumfree2:buttons.html.twig */
class __TwigTemplate_eee16818666e546ba465ff35859e24d51f489ddce3bf1ad3ce86742a9ba15d8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_dash2.html.twig", "ControlBundle:dashgumfree2:buttons.html.twig", 1);
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
        $__internal_7a093e4942b58c0643f16927daac203d050f04f6118eba492c83e1aff898cf40 = $this->env->getExtension("native_profiler");
        $__internal_7a093e4942b58c0643f16927daac203d050f04f6118eba492c83e1aff898cf40->enter($__internal_7a093e4942b58c0643f16927daac203d050f04f6118eba492c83e1aff898cf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:dashgumfree2:buttons.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a093e4942b58c0643f16927daac203d050f04f6118eba492c83e1aff898cf40->leave($__internal_7a093e4942b58c0643f16927daac203d050f04f6118eba492c83e1aff898cf40_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81c1aa0cdebaf933fcf73c0317c314428f38b0f10d8831bb442ed33956258338 = $this->env->getExtension("native_profiler");
        $__internal_81c1aa0cdebaf933fcf73c0317c314428f38b0f10d8831bb442ed33956258338->enter($__internal_81c1aa0cdebaf933fcf73c0317c314428f38b0f10d8831bb442ed33956258338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--external css-->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

   ";
        
        $__internal_81c1aa0cdebaf933fcf73c0317c314428f38b0f10d8831bb442ed33956258338->leave($__internal_81c1aa0cdebaf933fcf73c0317c314428f38b0f10d8831bb442ed33956258338_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_0090408fbe5eccb5361dd0e5856a4274f9244d329a7c8f96d126027c266a9316 = $this->env->getExtension("native_profiler");
        $__internal_0090408fbe5eccb5361dd0e5856a4274f9244d329a7c8f96d126027c266a9316->enter($__internal_0090408fbe5eccb5361dd0e5856a4274f9244d329a7c8f96d126027c266a9316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id=\"main-content\">
          <section class=\"wrapper\">
      \t\t<div class=\"row mt\">
      \t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
      \t\t\t\t<! -- BASIC BUTTONS -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Basic Buttons</h4>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Default</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Primary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success\">Success</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">Info</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\">Warning</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">Danger</button>
      \t\t\t\t</div><!-- /showback -->
      \t\t\t\t
      \t\t\t\t<! -- BUTTONS ROUND -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Buttons Round</h4>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-round btn-default\">Default</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-round btn-primary\">Primary</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-round btn-success\">Success</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-round btn-info\">Info</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-round btn-warning\">Warning</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-round btn-danger\">Danger</button>
      \t\t\t\t</div><!-- /showback -->
      \t\t\t\t
      \t\t\t\t<! -- THEME BUTTONS -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Theme Buttons</h4>
\t\t\t\t\t\t<!-- Standard button -->
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-theme\">Theme</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-theme02\">Theme 02</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-theme03\">Theme 03</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-theme04\">Theme 04</button>
      \t\t\t\t</div><!-- /showback -->
      \t\t\t\t
      \t\t\t\t<! -- BUTTONS GROUP -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Buttons Group</h4>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default\">Left</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default\">Middle</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default\">Right</button>
\t\t\t\t\t\t</div>      \t\t\t\t
      \t\t\t\t</div><!-- /showback -->
      \t\t\t\t
      \t\t\t\t<! -- BUTTONS NESTING -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Button Nesting</h4>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default\">1</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default\">2</button>
\t\t\t\t\t\t
\t\t\t\t\t\t  <div class=\"btn-group\">
\t\t\t\t\t\t    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t      Dropdown
\t\t\t\t\t\t      <span class=\"caret\"></span>
\t\t\t\t\t\t    </button>
\t\t\t\t\t\t    <ul class=\"dropdown-menu\">
\t\t\t\t\t\t      <li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t      <li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t    </ul>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>      \t\t\t\t\t
      \t\t\t\t</div><!-- /showback -->
      \t\t\t\t
      \t\t\t\t<! -- SPLIT BUTTONS -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Split Buttons</h4>
\t\t\t\t\t\t<!-- Split button -->
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-theme03\">Action</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-theme03 dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t    <span class=\"caret\"></span>
\t\t\t\t\t\t    <span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t    <li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t    <li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t    <li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t    <li class=\"divider\"></li>
\t\t\t\t\t\t    <li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>      \t\t\t\t
      \t\t\t\t
      \t\t\t\t</div><!-- /showback -->
      \t\t\t\t
      \t\t\t</div><! --/col-lg-6 -->
      \t\t\t
      \t\t\t
      \t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
      \t\t\t\t<! -- BUTTONS SIZES -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Buttons Sizes</h4>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-primary btn-lg\">Large button</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default btn-lg\">Large button</button>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-primary\">Default button</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default\">Default button</button>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-primary btn-sm\">Small button</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default btn-sm\">Small button</button>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-primary btn-xs\">Extra small button</button>
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default btn-xs\">Extra small button</button>
\t\t\t\t\t\t</p>      \t\t\t\t\t
      \t\t\t\t</div><!-- /showback -->
      \t\t\t\t
      \t\t\t\t<!-- BUTTON BLOCK -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Block Buttons</h4>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">Block level button</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-lg btn-block\">Block level button</button>
      \t\t\t\t</div><!--/showback -->
      \t\t\t\t
      \t\t\t\t<!-- JUSTIFIED BUTTONS -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Justified Buttons</h4>
\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\">
\t\t\t\t\t\t  <div class=\"btn-group\">
\t\t\t\t\t\t    <button type=\"button\" class=\"btn btn-theme\">Left</button>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"btn-group\">
\t\t\t\t\t\t    <button type=\"button\" class=\"btn btn-theme\">Middle</button>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"btn-group\">
\t\t\t\t\t\t    <button type=\"button\" class=\"btn btn-theme\">Right</button>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>      \t\t\t\t
      \t\t\t\t</div><!--/showback -->
      \t\t\t\t
      \t\t\t\t<!-- DROPDOWN BUTTONS -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Dropdown Buttons</h4>
      \t\t\t\t\t<!-- Single button -->
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-theme dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t    Action <span class=\"caret\"></span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t    <li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t    <li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t    <li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t    <li class=\"divider\"></li>
\t\t\t\t\t\t    <li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>
      \t\t\t\t\t<!-- Single button -->
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-theme04 dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t    Action <span class=\"caret\"></span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t    <li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t    <li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t    <li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t    <li class=\"divider\"></li>
\t\t\t\t\t\t    <li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>
      \t\t\t\t</div><!-- /showback -->
      \t\t\t\t
      \t\t\t\t<!-- BUTTONS WITH ICONS -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Buttons With Icons</h4>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-theme\"><i class=\"fa fa-cog\"></i> Button</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-theme02\"><i class=\"fa fa-check\"></i> Button</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-theme04\"><i class=\"fa fa-heart\"></i> Button</button>
      \t\t\t\t</div><!-- /showback -->
      \t\t\t
      \t\t\t</div><!-- /col-lg-6 -->
      \t\t\t
      \t\t</div><!--/ row -->
          </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
     ";
        
        $__internal_0090408fbe5eccb5361dd0e5856a4274f9244d329a7c8f96d126027c266a9316->leave($__internal_0090408fbe5eccb5361dd0e5856a4274f9244d329a7c8f96d126027c266a9316_prof);

    }

    // line 203
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_29d2af117ac1aac80713e040c0469a14206c8d9a4052599b3afbfdc5899f15bc = $this->env->getExtension("native_profiler");
        $__internal_29d2af117ac1aac80713e040c0469a14206c8d9a4052599b3afbfdc5899f15bc->enter($__internal_29d2af117ac1aac80713e040c0469a14206c8d9a4052599b3afbfdc5899f15bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 204
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- js placed at the end of the document so the pages load faster -->

    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jjquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
    
    <!--common script for all pages-->
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/common-scripts.js"), "html", null, true);
        echo "\"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      \$(function(){
          \$('select.styled').customSelect();
      });

  </script>
     ";
        
        $__internal_29d2af117ac1aac80713e040c0469a14206c8d9a4052599b3afbfdc5899f15bc->leave($__internal_29d2af117ac1aac80713e040c0469a14206c8d9a4052599b3afbfdc5899f15bc_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:dashgumfree2:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 211,  286 => 208,  278 => 204,  272 => 203,  79 => 15,  73 => 14,  63 => 11,  59 => 10,  53 => 7,  48 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::base_dash2.html.twig' %}*/
/* {% block stylesheets %}*/
/*      {{ parent() }}*/
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{asset('dashgumfree2/css/bootstrap.css')}}" rel="stylesheet">*/
/*     <!--external css-->*/
/*     <link href="{{asset('dashgumfree2/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />*/
/*         */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{asset('dashgumfree2/css/style.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('dashgumfree2/css/style-responsive.css')}}" rel="stylesheet">*/
/* */
/*    {% endblock %}    */
/*  {% block body %}*/
/*       */
/*       <!-- ***********************************************************************************************************************************************************/
/*       MAIN CONTENT*/
/*       *********************************************************************************************************************************************************** -->*/
/*       <!--main content start-->*/
/*       <section id="main-content">*/
/*           <section class="wrapper">*/
/*       		<div class="row mt">*/
/*       			<div class="col-lg-6 col-md-6 col-sm-12">*/
/*       				<! -- BASIC BUTTONS -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Basic Buttons</h4>*/
/* 						<button type="button" class="btn btn-default">Default</button>*/
/* 						<button type="button" class="btn btn-primary">Primary</button>*/
/* 						<button type="button" class="btn btn-success">Success</button>*/
/* 						<button type="button" class="btn btn-info">Info</button>*/
/* 						<button type="button" class="btn btn-warning">Warning</button>*/
/* 						<button type="button" class="btn btn-danger">Danger</button>*/
/*       				</div><!-- /showback -->*/
/*       				*/
/*       				<! -- BUTTONS ROUND -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Buttons Round</h4>*/
/* 						<button type="button" class="btn btn-round btn-default">Default</button>*/
/* 						<button type="button" class="btn btn-round btn-primary">Primary</button>*/
/* 						<button type="button" class="btn btn-round btn-success">Success</button>*/
/* 						<button type="button" class="btn btn-round btn-info">Info</button>*/
/* 						<button type="button" class="btn btn-round btn-warning">Warning</button>*/
/* 						<button type="button" class="btn btn-round btn-danger">Danger</button>*/
/*       				</div><!-- /showback -->*/
/*       				*/
/*       				<! -- THEME BUTTONS -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Theme Buttons</h4>*/
/* 						<!-- Standard button -->*/
/* 						<button type="button" class="btn btn-theme">Theme</button>*/
/* 						<button type="button" class="btn btn-theme02">Theme 02</button>*/
/* 						<button type="button" class="btn btn-theme03">Theme 03</button>*/
/* 						<button type="button" class="btn btn-theme04">Theme 04</button>*/
/*       				</div><!-- /showback -->*/
/*       				*/
/*       				<! -- BUTTONS GROUP -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Buttons Group</h4>*/
/* 						<div class="btn-group">*/
/* 						  <button type="button" class="btn btn-default">Left</button>*/
/* 						  <button type="button" class="btn btn-default">Middle</button>*/
/* 						  <button type="button" class="btn btn-default">Right</button>*/
/* 						</div>      				*/
/*       				</div><!-- /showback -->*/
/*       				*/
/*       				<! -- BUTTONS NESTING -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Button Nesting</h4>*/
/* 						<div class="btn-group">*/
/* 						  <button type="button" class="btn btn-default">1</button>*/
/* 						  <button type="button" class="btn btn-default">2</button>*/
/* 						*/
/* 						  <div class="btn-group">*/
/* 						    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/* 						      Dropdown*/
/* 						      <span class="caret"></span>*/
/* 						    </button>*/
/* 						    <ul class="dropdown-menu">*/
/* 						      <li><a href="#">Dropdown link</a></li>*/
/* 						      <li><a href="#">Dropdown link</a></li>*/
/* 						    </ul>*/
/* 						  </div>*/
/* 						</div>      					*/
/*       				</div><!-- /showback -->*/
/*       				*/
/*       				<! -- SPLIT BUTTONS -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Split Buttons</h4>*/
/* 						<!-- Split button -->*/
/* 						<div class="btn-group">*/
/* 						  <button type="button" class="btn btn-theme03">Action</button>*/
/* 						  <button type="button" class="btn btn-theme03 dropdown-toggle" data-toggle="dropdown">*/
/* 						    <span class="caret"></span>*/
/* 						    <span class="sr-only">Toggle Dropdown</span>*/
/* 						  </button>*/
/* 						  <ul class="dropdown-menu" role="menu">*/
/* 						    <li><a href="#">Action</a></li>*/
/* 						    <li><a href="#">Another action</a></li>*/
/* 						    <li><a href="#">Something else here</a></li>*/
/* 						    <li class="divider"></li>*/
/* 						    <li><a href="#">Separated link</a></li>*/
/* 						  </ul>*/
/* 						</div>      				*/
/*       				*/
/*       				</div><!-- /showback -->*/
/*       				*/
/*       			</div><! --/col-lg-6 -->*/
/*       			*/
/*       			*/
/*       			<div class="col-lg-6 col-md-6 col-sm-12">*/
/*       				<! -- BUTTONS SIZES -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Buttons Sizes</h4>*/
/* 						<p>*/
/* 						  <button type="button" class="btn btn-primary btn-lg">Large button</button>*/
/* 						  <button type="button" class="btn btn-default btn-lg">Large button</button>*/
/* 						</p>*/
/* 						<p>*/
/* 						  <button type="button" class="btn btn-primary">Default button</button>*/
/* 						  <button type="button" class="btn btn-default">Default button</button>*/
/* 						</p>*/
/* 						<p>*/
/* 						  <button type="button" class="btn btn-primary btn-sm">Small button</button>*/
/* 						  <button type="button" class="btn btn-default btn-sm">Small button</button>*/
/* 						</p>*/
/* 						<p>*/
/* 						  <button type="button" class="btn btn-primary btn-xs">Extra small button</button>*/
/* 						  <button type="button" class="btn btn-default btn-xs">Extra small button</button>*/
/* 						</p>      					*/
/*       				</div><!-- /showback -->*/
/*       				*/
/*       				<!-- BUTTON BLOCK -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Block Buttons</h4>*/
/* 						<button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>*/
/* 						<button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>*/
/*       				</div><!--/showback -->*/
/*       				*/
/*       				<!-- JUSTIFIED BUTTONS -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Justified Buttons</h4>*/
/* 						<div class="btn-group btn-group-justified">*/
/* 						  <div class="btn-group">*/
/* 						    <button type="button" class="btn btn-theme">Left</button>*/
/* 						  </div>*/
/* 						  <div class="btn-group">*/
/* 						    <button type="button" class="btn btn-theme">Middle</button>*/
/* 						  </div>*/
/* 						  <div class="btn-group">*/
/* 						    <button type="button" class="btn btn-theme">Right</button>*/
/* 						  </div>*/
/* 						</div>      				*/
/*       				</div><!--/showback -->*/
/*       				*/
/*       				<!-- DROPDOWN BUTTONS -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Dropdown Buttons</h4>*/
/*       					<!-- Single button -->*/
/* 						<div class="btn-group">*/
/* 						  <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">*/
/* 						    Action <span class="caret"></span>*/
/* 						  </button>*/
/* 						  <ul class="dropdown-menu" role="menu">*/
/* 						    <li><a href="#">Action</a></li>*/
/* 						    <li><a href="#">Another action</a></li>*/
/* 						    <li><a href="#">Something else here</a></li>*/
/* 						    <li class="divider"></li>*/
/* 						    <li><a href="#">Separated link</a></li>*/
/* 						  </ul>*/
/* 						</div>*/
/*       					<!-- Single button -->*/
/* 						<div class="btn-group">*/
/* 						  <button type="button" class="btn btn-theme04 dropdown-toggle" data-toggle="dropdown">*/
/* 						    Action <span class="caret"></span>*/
/* 						  </button>*/
/* 						  <ul class="dropdown-menu" role="menu">*/
/* 						    <li><a href="#">Action</a></li>*/
/* 						    <li><a href="#">Another action</a></li>*/
/* 						    <li><a href="#">Something else here</a></li>*/
/* 						    <li class="divider"></li>*/
/* 						    <li><a href="#">Separated link</a></li>*/
/* 						  </ul>*/
/* 						</div>*/
/*       				</div><!-- /showback -->*/
/*       				*/
/*       				<!-- BUTTONS WITH ICONS -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Buttons With Icons</h4>*/
/* 						<button type="button" class="btn btn-theme"><i class="fa fa-cog"></i> Button</button>*/
/* 						<button type="button" class="btn btn-theme02"><i class="fa fa-check"></i> Button</button>*/
/* 						<button type="button" class="btn btn-theme04"><i class="fa fa-heart"></i> Button</button>*/
/*       				</div><!-- /showback -->*/
/*       			*/
/*       			</div><!-- /col-lg-6 -->*/
/*       			*/
/*       		</div><!--/ row -->*/
/*           </section><! --/wrapper -->*/
/*       </section><!-- /MAIN CONTENT -->*/
/* */
/*       <!--main content end-->*/
/*      {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*      {{ parent() }}*/
/* */
/*     <!-- js placed at the end of the document so the pages load faster -->*/
/* */
/*     <script src="{{asset('dashgumfree2/js/jjquery-1.8.3.min.js')}}"></script>*/
/*     */
/*     <!--common script for all pages-->*/
/*     <script src="{{asset('dashgumfree2/js/common-scripts.js')}}"></script>*/
/* */
/*     <!--script for this page-->*/
/*     */
/*   <script>*/
/*       //custom select box*/
/* */
/*       $(function(){*/
/*           $('select.styled').customSelect();*/
/*       });*/
/* */
/*   </script>*/
/*      {% endblock %}*/
