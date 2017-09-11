<?php

/* ControlBundle:dashgumfree2:chartjs.html.twig */
class __TwigTemplate_c1634395037a64e42e7f1a911304e0aeeb81676a24c4c03d6c466a218b6a02cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_dash2.html.twig", "ControlBundle:dashgumfree2:chartjs.html.twig", 1);
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
        $__internal_a56e33417a5faea7b4e19b5e23a5ac0f9ebfeb847b950ce76d8ba4299d1bb853 = $this->env->getExtension("native_profiler");
        $__internal_a56e33417a5faea7b4e19b5e23a5ac0f9ebfeb847b950ce76d8ba4299d1bb853->enter($__internal_a56e33417a5faea7b4e19b5e23a5ac0f9ebfeb847b950ce76d8ba4299d1bb853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:dashgumfree2:chartjs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a56e33417a5faea7b4e19b5e23a5ac0f9ebfeb847b950ce76d8ba4299d1bb853->leave($__internal_a56e33417a5faea7b4e19b5e23a5ac0f9ebfeb847b950ce76d8ba4299d1bb853_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9f78029b86933ebf1687238fbb94d2c7047b31e6e5216259164743ba8a09a68 = $this->env->getExtension("native_profiler");
        $__internal_b9f78029b86933ebf1687238fbb94d2c7047b31e6e5216259164743ba8a09a68->enter($__internal_b9f78029b86933ebf1687238fbb94d2c7047b31e6e5216259164743ba8a09a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    

";
        
        $__internal_b9f78029b86933ebf1687238fbb94d2c7047b31e6e5216259164743ba8a09a68->leave($__internal_b9f78029b86933ebf1687238fbb94d2c7047b31e6e5216259164743ba8a09a68_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_783e2b6f435368f472cdeb7ca592d4bb805340c3872359da124fefda3f29323f = $this->env->getExtension("native_profiler");
        $__internal_783e2b6f435368f472cdeb7ca592d4bb805340c3872359da124fefda3f29323f->enter($__internal_783e2b6f435368f472cdeb7ca592d4bb805340c3872359da124fefda3f29323f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id=\"main-content\">
          <section class=\"wrapper\">
          <h3><i class=\"fa fa-angle-right\"></i> Chartjs Charts</h3>
              <!-- page start-->
              <div class=\"tab-pane\" id=\"chartjs\">
                  <div class=\"row mt\">
                      <div class=\"col-lg-6\">
                          <div class=\"content-panel\">
\t\t\t\t\t\t\t  <h4><i class=\"fa fa-angle-right\"></i> Doughnut</h4>
                              <div class=\"panel-body text-center\">
                                  <canvas id=\"doughnut\" height=\"300\" width=\"400\"></canvas>
                              </div>
                          </div>
                      </div>
                      <div class=\"col-lg-6\">
                          <div class=\"content-panel\">
\t\t\t\t\t\t\t  <h4><i class=\"fa fa-angle-right\"></i> Line</h4>
                              <div class=\"panel-body text-center\">
                                  <canvas id=\"line\" height=\"300\" width=\"400\"></canvas>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class=\"row mt\">
                      <div class=\"col-lg-6\">
                          <div class=\"content-panel\">
\t\t\t\t\t\t\t  <h4><i class=\"fa fa-angle-right\"></i> Radar</h4>
                              <div class=\"panel-body text-center\">
                                  <canvas id=\"radar\" height=\"300\" width=\"400\"></canvas>
                              </div>
                          </div>
                      </div>
                      <div class=\"col-lg-6\">
                          <div class=\"content-panel\">
\t\t\t\t\t\t\t  <h4><i class=\"fa fa-angle-right\"></i> Polar Area</h4>
                              <div class=\"panel-body text-center\">
                                  <canvas id=\"polarArea\" height=\"300\" width=\"400\"></canvas>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class=\"row mt\">
                      <div class=\"col-lg-6\">
                          <div class=\"content-panel\">
\t\t\t\t\t\t\t  <h4><i class=\"fa fa-angle-right\"></i> Bar</h4>
                              <div class=\"panel-body text-center\">
                                  <canvas id=\"bar\" height=\"300\" width=\"400\"></canvas>
                              </div>
                          </div>
                      </div>
                      <div class=\"col-lg-6\">
                          <div class=\"content-panel\">
\t\t\t\t\t\t\t  <h4><i class=\"fa fa-angle-right\"></i> Pie</h4>
                              <div class=\"panel-body text-center\">
                                  <canvas id=\"pie\" height=\"300\" width=\"400\"></canvas>
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
        
        $__internal_783e2b6f435368f472cdeb7ca592d4bb805340c3872359da124fefda3f29323f->leave($__internal_783e2b6f435368f472cdeb7ca592d4bb805340c3872359da124fefda3f29323f_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35157ba8a78d1a94ef70df28f6250a2a10d82f7275ba95252767a9578907c1e9 = $this->env->getExtension("native_profiler");
        $__internal_35157ba8a78d1a94ef70df28f6250a2a10d82f7275ba95252767a9578907c1e9->enter($__internal_35157ba8a78d1a94ef70df28f6250a2a10d82f7275ba95252767a9578907c1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


    <!--script for this page-->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/chart-master/Chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/chartjs-conf.js"), "html", null, true);
        echo "\"></script>
    
  <script>
      //custom select box

      \$(function(){
          \$('select.styled').customSelect();
      });

  </script>
";
        
        $__internal_35157ba8a78d1a94ef70df28f6250a2a10d82f7275ba95252767a9578907c1e9->leave($__internal_35157ba8a78d1a94ef70df28f6250a2a10d82f7275ba95252767a9578907c1e9_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:dashgumfree2:chartjs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 93,  171 => 92,  163 => 88,  157 => 87,  81 => 17,  75 => 16,  64 => 12,  60 => 11,  54 => 8,  49 => 6,  42 => 3,  36 => 2,  11 => 1,);
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
/*         */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{asset('dashgumfree2/css/style.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('dashgumfree2/css/style-responsive.css')}}" rel="stylesheet">*/
/*     */
/* */
/* {% endblock %}    */
/*  {% block body %}*/
/*       <!-- ***********************************************************************************************************************************************************/
/*       MAIN CONTENT*/
/*       *********************************************************************************************************************************************************** -->*/
/*       <!--main content start-->*/
/*       <section id="main-content">*/
/*           <section class="wrapper">*/
/*           <h3><i class="fa fa-angle-right"></i> Chartjs Charts</h3>*/
/*               <!-- page start-->*/
/*               <div class="tab-pane" id="chartjs">*/
/*                   <div class="row mt">*/
/*                       <div class="col-lg-6">*/
/*                           <div class="content-panel">*/
/* 							  <h4><i class="fa fa-angle-right"></i> Doughnut</h4>*/
/*                               <div class="panel-body text-center">*/
/*                                   <canvas id="doughnut" height="300" width="400"></canvas>*/
/*                               </div>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="col-lg-6">*/
/*                           <div class="content-panel">*/
/* 							  <h4><i class="fa fa-angle-right"></i> Line</h4>*/
/*                               <div class="panel-body text-center">*/
/*                                   <canvas id="line" height="300" width="400"></canvas>*/
/*                               </div>*/
/*                           </div>*/
/*                       </div>*/
/*                   </div>*/
/*                   <div class="row mt">*/
/*                       <div class="col-lg-6">*/
/*                           <div class="content-panel">*/
/* 							  <h4><i class="fa fa-angle-right"></i> Radar</h4>*/
/*                               <div class="panel-body text-center">*/
/*                                   <canvas id="radar" height="300" width="400"></canvas>*/
/*                               </div>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="col-lg-6">*/
/*                           <div class="content-panel">*/
/* 							  <h4><i class="fa fa-angle-right"></i> Polar Area</h4>*/
/*                               <div class="panel-body text-center">*/
/*                                   <canvas id="polarArea" height="300" width="400"></canvas>*/
/*                               </div>*/
/*                           </div>*/
/*                       </div>*/
/*                   </div>*/
/*                   <div class="row mt">*/
/*                       <div class="col-lg-6">*/
/*                           <div class="content-panel">*/
/* 							  <h4><i class="fa fa-angle-right"></i> Bar</h4>*/
/*                               <div class="panel-body text-center">*/
/*                                   <canvas id="bar" height="300" width="400"></canvas>*/
/*                               </div>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="col-lg-6">*/
/*                           <div class="content-panel">*/
/* 							  <h4><i class="fa fa-angle-right"></i> Pie</h4>*/
/*                               <div class="panel-body text-center">*/
/*                                   <canvas id="pie" height="300" width="400"></canvas>*/
/*                               </div>*/
/*                           </div>*/
/*                       </div>*/
/*                   </div>*/
/*               </div>*/
/*               <!-- page end-->*/
/*           </section>          */
/*       </section><!-- /MAIN CONTENT -->*/
/* */
/*       <!--main content end-->*/
/*  {% endblock %}*/
/*  {% block javascripts %}*/
/*      {{ parent() }}*/
/* */
/* */
/*     <!--script for this page-->*/
/*     <script src="{{asset('dashgumfree2/js/chart-master/Chart.js')}}"></script>*/
/*     <script src="{{asset('dashgumfree2/js/chartjs-conf.js')}}"></script>*/
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
