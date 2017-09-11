<?php

/* ControlBundle:dashgumfree2:blank.html.twig */
class __TwigTemplate_ea5c49b4163a969c5363aec5edd9c4f97d8cce922a750db8933f0679bc4e3d3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_dash2.html.twig", "ControlBundle:dashgumfree2:blank.html.twig", 1);
        $this->blocks = array(
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
        $__internal_c613c21ff7303638ef0147f02a5f4ef054ac5fdb91dee24d0361d7244159ea53 = $this->env->getExtension("native_profiler");
        $__internal_c613c21ff7303638ef0147f02a5f4ef054ac5fdb91dee24d0361d7244159ea53->enter($__internal_c613c21ff7303638ef0147f02a5f4ef054ac5fdb91dee24d0361d7244159ea53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:dashgumfree2:blank.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c613c21ff7303638ef0147f02a5f4ef054ac5fdb91dee24d0361d7244159ea53->leave($__internal_c613c21ff7303638ef0147f02a5f4ef054ac5fdb91dee24d0361d7244159ea53_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_68000a63f39c09a078dcf6a6c7cc408c96835638c288db462965d397341a6a26 = $this->env->getExtension("native_profiler");
        $__internal_68000a63f39c09a078dcf6a6c7cc408c96835638c288db462965d397341a6a26->enter($__internal_68000a63f39c09a078dcf6a6c7cc408c96835638c288db462965d397341a6a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id=\"main-content\">
          <section class=\"wrapper site-min-height\">
          \t<h3><i class=\"fa fa-angle-right\"></i> Blank Page</h3>
          \t<div class=\"row mt\">
          \t\t<div class=\"col-lg-12\">
          \t\t<p>Place your content here.</p>
          \t\t</div>
          \t</div>
\t\t\t
\t\t</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      
";
        
        $__internal_68000a63f39c09a078dcf6a6c7cc408c96835638c288db462965d397341a6a26->leave($__internal_68000a63f39c09a078dcf6a6c7cc408c96835638c288db462965d397341a6a26_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_90c8d42a052c12cfad650d8305e40f6427dd518078dadf1103bf1cf7fb214d86 = $this->env->getExtension("native_profiler");
        $__internal_90c8d42a052c12cfad650d8305e40f6427dd518078dadf1103bf1cf7fb214d86->enter($__internal_90c8d42a052c12cfad650d8305e40f6427dd518078dadf1103bf1cf7fb214d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- js placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
    
    <!--script for this page-->
    
  <script>
      //custom select box

      \$(function(){
          \$('select.styled').customSelect();
      });

  </script>
";
        
        $__internal_90c8d42a052c12cfad650d8305e40f6427dd518078dadf1103bf1cf7fb214d86->leave($__internal_90c8d42a052c12cfad650d8305e40f6427dd518078dadf1103bf1cf7fb214d86_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:dashgumfree2:blank.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  78 => 26,  72 => 24,  66 => 23,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base_dash2.html.twig' %}*/
/*  {% block body %}*/
/*       <!-- ***********************************************************************************************************************************************************/
/*       MAIN CONTENT*/
/*       *********************************************************************************************************************************************************** -->*/
/*       <!--main content start-->*/
/*       <section id="main-content">*/
/*           <section class="wrapper site-min-height">*/
/*           	<h3><i class="fa fa-angle-right"></i> Blank Page</h3>*/
/*           	<div class="row mt">*/
/*           		<div class="col-lg-12">*/
/*           		<p>Place your content here.</p>*/
/*           		</div>*/
/*           	</div>*/
/* 			*/
/* 		</section><! --/wrapper -->*/
/*       </section><!-- /MAIN CONTENT -->*/
/* */
/*       <!--main content end-->*/
/*       */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*      {{ parent() }}*/
/*     <!-- js placed at the end of the document so the pages load faster -->*/
/*     <script src="{{asset('dashgumfree2/js/jquery-ui-1.9.2.custom.min.js')}}"></script>*/
/*     <script src="{{asset('dashgumfree2/js/jquery.ui.touch-punch.min.js')}}"></script>*/
/*     */
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
/* {% endblock %}*/
