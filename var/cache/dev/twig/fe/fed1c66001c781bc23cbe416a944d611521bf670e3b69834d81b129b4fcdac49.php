<?php

/* ControlBundle:dashgumfree2:calendar.html.twig */
class __TwigTemplate_dc34d9c664230e5c275a2fa33c2c904e0a3096ffc94bcb3038f708b952ac5c39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_dash2.html.twig", "ControlBundle:dashgumfree2:calendar.html.twig", 1);
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
        $__internal_4830d64d016f4115a935d99e56847433bbea329d4098eb909c2b9f7001b9a05f = $this->env->getExtension("native_profiler");
        $__internal_4830d64d016f4115a935d99e56847433bbea329d4098eb909c2b9f7001b9a05f->enter($__internal_4830d64d016f4115a935d99e56847433bbea329d4098eb909c2b9f7001b9a05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:dashgumfree2:calendar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4830d64d016f4115a935d99e56847433bbea329d4098eb909c2b9f7001b9a05f->leave($__internal_4830d64d016f4115a935d99e56847433bbea329d4098eb909c2b9f7001b9a05f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6159a9477f70d445cb7d25102a920775c5ad64814332bfea386f22b85c1175ea = $this->env->getExtension("native_profiler");
        $__internal_6159a9477f70d445cb7d25102a920775c5ad64814332bfea386f22b85c1175ea->enter($__internal_6159a9477f70d445cb7d25102a920775c5ad64814332bfea386f22b85c1175ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/fullcalendar/bootstrap-fullcalendar.css"), "html", null, true);
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

";
        
        $__internal_6159a9477f70d445cb7d25102a920775c5ad64814332bfea386f22b85c1175ea->leave($__internal_6159a9477f70d445cb7d25102a920775c5ad64814332bfea386f22b85c1175ea_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_500c7b69dbc66b668e72fa5a0f2c49d5e9490207e4ae5e2720bde39e5412f9d0 = $this->env->getExtension("native_profiler");
        $__internal_500c7b69dbc66b668e72fa5a0f2c49d5e9490207e4ae5e2720bde39e5412f9d0->enter($__internal_500c7b69dbc66b668e72fa5a0f2c49d5e9490207e4ae5e2720bde39e5412f9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id=\"main-content\">
          <section class=\"wrapper\">
          \t<h3><i class=\"fa fa-angle-right\"></i> Calendar</h3>
              <!-- page start-->
              <div class=\"row mt\">
                  <aside class=\"col-lg-3 mt\">
                      <h4><i class=\"fa fa-angle-right\"></i> Draggable Events</h4>
                      <div id=\"external-events\">
                          <div class=\"external-event label label-theme\">My Event 1</div>
                          <div class=\"external-event label label-success\">My Event 2</div>
                          <div class=\"external-event label label-info\">My Event 3</div>
                          <div class=\"external-event label label-warning\">My Event 4</div>
                          <div class=\"external-event label label-danger\">My Event 5</div>
                          <div class=\"external-event label label-default\">My Event 6</div>
                          <div class=\"external-event label label-theme\">My Event 7</div>
                          <div class=\"external-event label label-info\">My Event 8</div>
                          <div class=\"external-event label label-success\">My Event 9</div>
                          <p class=\"drop-after\">
                              <input type=\"checkbox\" id=\"drop-remove\">
                              Remove After Drop
                          </p>
                      </div>
                  </aside>
                  <aside class=\"col-lg-9 mt\">
                      <section class=\"panel\">
                          <div class=\"panel-body\">
                              <div id=\"calendar\" class=\"has-toolbar\"></div>
                          </div>
                      </section>
                  </aside>
              </div>
              <!-- page end-->
\t\t</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
    ";
        
        $__internal_500c7b69dbc66b668e72fa5a0f2c49d5e9490207e4ae5e2720bde39e5412f9d0->leave($__internal_500c7b69dbc66b668e72fa5a0f2c49d5e9490207e4ae5e2720bde39e5412f9d0_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35de9215d0b9b5928245ef30f910351bd6144c3fe7b663fae3d2359bda690037 = $this->env->getExtension("native_profiler");
        $__internal_35de9215d0b9b5928245ef30f910351bd6144c3fe7b663fae3d2359bda690037->enter($__internal_35de9215d0b9b5928245ef30f910351bd6144c3fe7b663fae3d2359bda690037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- js placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>    


    <!--script for this page-->
\t<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/calendar-conf-events.js"), "html", null, true);
        echo "\"></script>    
  
  <script>
      //custom select box

      \$(function(){
          \$(\"select.styled\").customSelect();
      });

  </script>

    ";
        
        $__internal_35de9215d0b9b5928245ef30f910351bd6144c3fe7b663fae3d2359bda690037->leave($__internal_35de9215d0b9b5928245ef30f910351bd6144c3fe7b663fae3d2359bda690037_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:dashgumfree2:calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 68,  148 => 64,  144 => 63,  138 => 61,  132 => 60,  84 => 17,  78 => 16,  68 => 13,  64 => 12,  58 => 9,  54 => 8,  49 => 6,  42 => 3,  36 => 2,  11 => 1,);
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
/*     <link href="{{asset('dashgumfree2/js/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />*/
/*         */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{asset('dashgumfree2/css/style.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('dashgumfree2/css/style-responsive.css')}}" rel="stylesheet">*/
/* */
/* {% endblock %}    */
/*  {% block body %}*/
/* */
/*       <!-- ***********************************************************************************************************************************************************/
/*       MAIN CONTENT*/
/*       *********************************************************************************************************************************************************** -->*/
/*       <!--main content start-->*/
/*       <section id="main-content">*/
/*           <section class="wrapper">*/
/*           	<h3><i class="fa fa-angle-right"></i> Calendar</h3>*/
/*               <!-- page start-->*/
/*               <div class="row mt">*/
/*                   <aside class="col-lg-3 mt">*/
/*                       <h4><i class="fa fa-angle-right"></i> Draggable Events</h4>*/
/*                       <div id="external-events">*/
/*                           <div class="external-event label label-theme">My Event 1</div>*/
/*                           <div class="external-event label label-success">My Event 2</div>*/
/*                           <div class="external-event label label-info">My Event 3</div>*/
/*                           <div class="external-event label label-warning">My Event 4</div>*/
/*                           <div class="external-event label label-danger">My Event 5</div>*/
/*                           <div class="external-event label label-default">My Event 6</div>*/
/*                           <div class="external-event label label-theme">My Event 7</div>*/
/*                           <div class="external-event label label-info">My Event 8</div>*/
/*                           <div class="external-event label label-success">My Event 9</div>*/
/*                           <p class="drop-after">*/
/*                               <input type="checkbox" id="drop-remove">*/
/*                               Remove After Drop*/
/*                           </p>*/
/*                       </div>*/
/*                   </aside>*/
/*                   <aside class="col-lg-9 mt">*/
/*                       <section class="panel">*/
/*                           <div class="panel-body">*/
/*                               <div id="calendar" class="has-toolbar"></div>*/
/*                           </div>*/
/*                       </section>*/
/*                   </aside>*/
/*               </div>*/
/*               <!-- page end-->*/
/* 		</section><! --/wrapper -->*/
/*       </section><!-- /MAIN CONTENT -->*/
/* */
/*       <!--main content end-->*/
/*     {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*      {{ parent() }}*/
/*     <!-- js placed at the end of the document so the pages load faster -->*/
/*     <script src="{{asset('dashgumfree2/js/jquery-ui-1.9.2.custom.min.js')}}"></script>*/
/* 	<script src="{{asset('dashgumfree2/js/fullcalendar/fullcalendar.min.js')}}"></script>    */
/* */
/* */
/*     <!--script for this page-->*/
/* 	<script src="{{asset('dashgumfree2/js/calendar-conf-events.js')}}"></script>    */
/*   */
/*   <script>*/
/*       //custom select box*/
/* */
/*       $(function(){*/
/*           $("select.styled").customSelect();*/
/*       });*/
/* */
/*   </script>*/
/* */
/*     {% endblock %}*/
