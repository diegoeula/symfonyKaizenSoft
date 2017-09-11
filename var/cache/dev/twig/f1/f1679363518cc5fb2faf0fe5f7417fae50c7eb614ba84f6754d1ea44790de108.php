<?php

/* ControlBundle:dashgumfree2:form_component.html.twig */
class __TwigTemplate_746667bdeb7f56bb6ee10ae57fd8d990ed16623559a23b44e4b422e9809c5b41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_dash2.html.twig", "ControlBundle:dashgumfree2:form_component.html.twig", 1);
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
        $__internal_54a1aeec262ae3e988644a5858911772e671694a45e6af86a81c8c9d57e41080 = $this->env->getExtension("native_profiler");
        $__internal_54a1aeec262ae3e988644a5858911772e671694a45e6af86a81c8c9d57e41080->enter($__internal_54a1aeec262ae3e988644a5858911772e671694a45e6af86a81c8c9d57e41080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:dashgumfree2:form_component.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54a1aeec262ae3e988644a5858911772e671694a45e6af86a81c8c9d57e41080->leave($__internal_54a1aeec262ae3e988644a5858911772e671694a45e6af86a81c8c9d57e41080_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60a9ac4d8d9e7af0ae50288f3af01909ea69fe5fe5e086fb060b0daf606160b3 = $this->env->getExtension("native_profiler");
        $__internal_60a9ac4d8d9e7af0ae50288f3af01909ea69fe5fe5e086fb060b0daf606160b3->enter($__internal_60a9ac4d8d9e7af0ae50288f3af01909ea69fe5fe5e086fb060b0daf606160b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/bootstrap-datepicker/css/datepicker.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" />
        
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_60a9ac4d8d9e7af0ae50288f3af01909ea69fe5fe5e086fb060b0daf606160b3->leave($__internal_60a9ac4d8d9e7af0ae50288f3af01909ea69fe5fe5e086fb060b0daf606160b3_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c254e27bd3d70dc65ee3f72d7009c92e0d81df25c7241ff0d9652ee850b31c6 = $this->env->getExtension("native_profiler");
        $__internal_6c254e27bd3d70dc65ee3f72d7009c92e0d81df25c7241ff0d9652ee850b31c6->enter($__internal_6c254e27bd3d70dc65ee3f72d7009c92e0d81df25c7241ff0d9652ee850b31c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id=\"main-content\">
          <section class=\"wrapper\">
          \t<h3><i class=\"fa fa-angle-right\"></i> Form Components</h3>
          \t
          \t<!-- BASIC FORM ELELEMNTS -->
          \t<div class=\"row mt\">
          \t\t<div class=\"col-lg-12\">
                  <div class=\"form-panel\">
                  \t  <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Form Elements</h4>
                      <form class=\"form-horizontal style-form\" method=\"get\">
                          <div class=\"form-group\">
                              <label class=\"col-sm-2 col-sm-2 control-label\">Default</label>
                              <div class=\"col-sm-10\">
                                  <input type=\"text\" class=\"form-control\">
                              </div>
                          </div>
                          <div class=\"form-group\">
                              <label class=\"col-sm-2 col-sm-2 control-label\">Help text</label>
                              <div class=\"col-sm-10\">
                                  <input type=\"text\" class=\"form-control\">
                                  <span class=\"help-block\">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                              </div>
                          </div>
                          <div class=\"form-group\">
                              <label class=\"col-sm-2 col-sm-2 control-label\">Rounder</label>
                              <div class=\"col-sm-10\">
                                  <input type=\"text\" class=\"form-control round-form\">
                              </div>
                          </div>
                          <div class=\"form-group\">
                              <label class=\"col-sm-2 col-sm-2 control-label\">Input focus</label>
                              <div class=\"col-sm-10\">
                                  <input class=\"form-control\" id=\"focusedInput\" type=\"text\" value=\"This is focused...\">
                              </div>
                          </div>
                          <div class=\"form-group\">
                              <label class=\"col-sm-2 col-sm-2 control-label\">Disabled</label>
                              <div class=\"col-sm-10\">
                                  <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here...\" disabled>
                              </div>
                          </div>
                          <div class=\"form-group\">
                              <label class=\"col-sm-2 col-sm-2 control-label\">Placeholder</label>
                              <div class=\"col-sm-10\">
                                  <input type=\"text\"  class=\"form-control\" placeholder=\"placeholder\">
                              </div>
                          </div>
                          <div class=\"form-group\">
                              <label class=\"col-sm-2 col-sm-2 control-label\">Password</label>
                              <div class=\"col-sm-10\">
                                  <input type=\"password\"  class=\"form-control\" placeholder=\"\">
                              </div>
                          </div>
                          <div class=\"form-group\">
                              <label class=\"col-lg-2 col-sm-2 control-label\">Static control</label>
                              <div class=\"col-lg-10\">
                                  <p class=\"form-control-static\">email@example.com</p>
                              </div>
                          </div>
                      </form>
                  </div>
          \t\t</div><!-- col-lg-12-->      \t
          \t</div><!-- /row -->
          \t
          \t<!-- INLINE FORM ELELEMNTS -->
          \t<div class=\"row mt\">
          \t\t<div class=\"col-lg-12\">
          \t\t\t<div class=\"form-panel\">
                  \t  <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Inline Form</h4>
                      <form class=\"form-inline\" role=\"form\">
                          <div class=\"form-group\">
                              <label class=\"sr-only\" for=\"exampleInputEmail2\">Email address</label>
                              <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Enter email\">
                          </div>
                          <div class=\"form-group\">
                              <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
                              <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Password\">
                          </div>
                          <button type=\"submit\" class=\"btn btn-theme\">Sign in</button>
                      </form>
          \t\t\t</div><!-- /form-panel -->
          \t\t</div><!-- /col-lg-12 -->
          \t</div><!-- /row -->
          \t
          \t<!-- INPUT MESSAGES -->
          \t<div class=\"row mt\">
          \t\t<div class=\"col-lg-12\">
          \t\t\t<div class=\"form-panel\">
                  \t  <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Input Messages</h4>
                          <form class=\"form-horizontal tasi-form\" method=\"get\">
                              <div class=\"form-group has-success\">
                                  <label class=\"col-sm-2 control-label col-lg-2\" for=\"inputSuccess\">Input with success</label>
                                  <div class=\"col-lg-10\">
                                      <input type=\"text\" class=\"form-control\" id=\"inputSuccess\">
                                  </div>
                              </div>
                              <div class=\"form-group has-warning\">
                                  <label class=\"col-sm-2 control-label col-lg-2\" for=\"inputWarning\">Input with warning</label>
                                  <div class=\"col-lg-10\">
                                      <input type=\"text\" class=\"form-control\" id=\"inputWarning\">
                                  </div>
                              </div>
                              <div class=\"form-group has-error\">
                                  <label class=\"col-sm-2 control-label col-lg-2\" for=\"inputError\">Input with error</label>
                                  <div class=\"col-lg-10\">
                                      <input type=\"text\" class=\"form-control\" id=\"inputError\">
                                  </div>
                              </div>
                          </form>
          \t\t\t</div><!-- /form-panel -->
          \t\t</div><!-- /col-lg-12 -->
          \t</div><!-- /row -->
          \t
          \t<!-- INPUT MESSAGES -->
          \t<div class=\"row mt\">
          \t\t<div class=\"col-lg-12\">
          \t\t\t<div class=\"form-panel\">
                  \t  <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Checkboxes, Radios & Selects</h4>
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t  <label>
\t\t\t\t\t\t    <input type=\"checkbox\" value=\"\">
\t\t\t\t\t\t    Option one is this and that&mdash;be sure to include why it's great
\t\t\t\t\t\t  </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t  <label>
\t\t\t\t\t\t    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
\t\t\t\t\t\t    Option one is this and that&mdash;be sure to include why it's great
\t\t\t\t\t\t  </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t  <label>
\t\t\t\t\t\t    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
\t\t\t\t\t\t    Option two can be something else and selecting it will deselect option one
\t\t\t\t\t\t  </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t  <input type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\"> 1
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t  <input type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\"> 2
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t  <input type=\"checkbox\" id=\"inlineCheckbox3\" value=\"option3\"> 3
\t\t\t\t\t\t</label>
\t\t\t\t\t\t
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<select multiple class=\"form-control\">
\t\t\t\t\t\t  <option>1</option>
\t\t\t\t\t\t  <option>2</option>
\t\t\t\t\t\t  <option>3</option>
\t\t\t\t\t\t  <option>4</option>
\t\t\t\t\t\t  <option>5</option>
\t\t\t\t\t\t</select>        \t\t
          \t\t\t</div><!-- /form-panel -->
          \t\t</div><!-- /col-lg-12 -->
          \t\t
          \t<!-- CUSTOM TOGGLES -->
          \t\t<div class=\"col-lg-12\">
          \t\t\t<div class=\"form-panel\">
                  \t  <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Custom Toggles</h4>
                          <div class=\"row mt\">
                              <div class=\"col-sm-6 text-center\">
                                  <input type=\"checkbox\" checked=\"\" data-toggle=\"switch\" />
                              </div>
                              <div class=\"col-sm-6 text-center\">
                                  <input type=\"checkbox\" data-toggle=\"switch\" />
                              </div>
                          </div>
                          <div class=\"row mt\">
                              <div class=\"col-sm-6 text-center\">
                                  <div class=\"switch switch-square\"
                                       data-on-label=\"<i class=' fa fa-check'></i>\"
                                       data-off-label=\"<i class='fa fa-times'></i>\">
                                      <input type=\"checkbox\" />
                                  </div>
                              </div>
                              <div class=\"col-sm-6 text-center\">
                                  <div class=\"switch switch-square\"
                                       data-on-label=\"<i class=' fa fa-check'></i>\"
                                       data-off-label=\"<i class='fa fa-times'></i>\">
                                      <input type=\"checkbox\" checked=\"\" />
                                  </div>
                              </div>
                          </div>
                          <div class=\"row mt\">
                              <div class=\"col-sm-6 text-center\">
                                  <input type=\"checkbox\" disabled data-toggle=\"switch\" />
                              </div>
                              <div class=\"col-sm-6 text-center\">
                                  <input type=\"checkbox\" checked disabled data-toggle=\"switch\" />
                              </div>
                          </div>
          \t\t\t</div>
          \t\t</div>
          \t</div><!-- /row -->
          \t
          \t
\t\t</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      ";
        
        $__internal_6c254e27bd3d70dc65ee3f72d7009c92e0d81df25c7241ff0d9652ee850b31c6->leave($__internal_6c254e27bd3d70dc65ee3f72d7009c92e0d81df25c7241ff0d9652ee850b31c6_prof);

    }

    // line 239
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7c52fb431d334a617db31736e6f3712c464cab6f27da8985615dd08576c988f = $this->env->getExtension("native_profiler");
        $__internal_d7c52fb431d334a617db31736e6f3712c464cab6f27da8985615dd08576c988f->enter($__internal_d7c52fb431d334a617db31736e6f3712c464cab6f27da8985615dd08576c988f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 240
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!--script for this page-->
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>

\t<!--custom switch-->
\t<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/bootstrap-switch.js"), "html", null, true);
        echo "\"></script>
\t
\t<!--custom tagsinput-->
\t<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
\t
\t<!--custom checkbox & radio-->
\t
\t<script type=\"text/javascript\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/bootstrap-daterangepicker/date.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
\t
\t<script type=\"text/javascript\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/bootstrap-inputmask/bootstrap-inputmask.min.js"), "html", null, true);
        echo "\"></script>
\t
\t
\t<script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/form-component.js"), "html", null, true);
        echo "\"></script>    
    
    
  <script>
      //custom select box

      \$(function(){
          \$('select.styled').customSelect();
      });

  </script>
      ";
        
        $__internal_d7c52fb431d334a617db31736e6f3712c464cab6f27da8985615dd08576c988f->leave($__internal_d7c52fb431d334a617db31736e6f3712c464cab6f27da8985615dd08576c988f_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:dashgumfree2:form_component.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 260,  359 => 257,  354 => 255,  350 => 254,  346 => 253,  339 => 249,  333 => 246,  327 => 243,  320 => 240,  314 => 239,  89 => 19,  83 => 18,  73 => 15,  69 => 14,  63 => 11,  59 => 10,  55 => 9,  50 => 7,  42 => 3,  36 => 2,  11 => 1,);
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
/*     <link rel="stylesheet" type="text/css" href="{{asset('dashgumfree2/js/bootstrap-datepicker/css/datepicker.css')}}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('dashgumfree2/js/bootstrap-daterangepicker/daterangepicker.css')}}" />*/
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
/*           <section class="wrapper">*/
/*           	<h3><i class="fa fa-angle-right"></i> Form Components</h3>*/
/*           	*/
/*           	<!-- BASIC FORM ELELEMNTS -->*/
/*           	<div class="row mt">*/
/*           		<div class="col-lg-12">*/
/*                   <div class="form-panel">*/
/*                   	  <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>*/
/*                       <form class="form-horizontal style-form" method="get">*/
/*                           <div class="form-group">*/
/*                               <label class="col-sm-2 col-sm-2 control-label">Default</label>*/
/*                               <div class="col-sm-10">*/
/*                                   <input type="text" class="form-control">*/
/*                               </div>*/
/*                           </div>*/
/*                           <div class="form-group">*/
/*                               <label class="col-sm-2 col-sm-2 control-label">Help text</label>*/
/*                               <div class="col-sm-10">*/
/*                                   <input type="text" class="form-control">*/
/*                                   <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>*/
/*                               </div>*/
/*                           </div>*/
/*                           <div class="form-group">*/
/*                               <label class="col-sm-2 col-sm-2 control-label">Rounder</label>*/
/*                               <div class="col-sm-10">*/
/*                                   <input type="text" class="form-control round-form">*/
/*                               </div>*/
/*                           </div>*/
/*                           <div class="form-group">*/
/*                               <label class="col-sm-2 col-sm-2 control-label">Input focus</label>*/
/*                               <div class="col-sm-10">*/
/*                                   <input class="form-control" id="focusedInput" type="text" value="This is focused...">*/
/*                               </div>*/
/*                           </div>*/
/*                           <div class="form-group">*/
/*                               <label class="col-sm-2 col-sm-2 control-label">Disabled</label>*/
/*                               <div class="col-sm-10">*/
/*                                   <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>*/
/*                               </div>*/
/*                           </div>*/
/*                           <div class="form-group">*/
/*                               <label class="col-sm-2 col-sm-2 control-label">Placeholder</label>*/
/*                               <div class="col-sm-10">*/
/*                                   <input type="text"  class="form-control" placeholder="placeholder">*/
/*                               </div>*/
/*                           </div>*/
/*                           <div class="form-group">*/
/*                               <label class="col-sm-2 col-sm-2 control-label">Password</label>*/
/*                               <div class="col-sm-10">*/
/*                                   <input type="password"  class="form-control" placeholder="">*/
/*                               </div>*/
/*                           </div>*/
/*                           <div class="form-group">*/
/*                               <label class="col-lg-2 col-sm-2 control-label">Static control</label>*/
/*                               <div class="col-lg-10">*/
/*                                   <p class="form-control-static">email@example.com</p>*/
/*                               </div>*/
/*                           </div>*/
/*                       </form>*/
/*                   </div>*/
/*           		</div><!-- col-lg-12-->      	*/
/*           	</div><!-- /row -->*/
/*           	*/
/*           	<!-- INLINE FORM ELELEMNTS -->*/
/*           	<div class="row mt">*/
/*           		<div class="col-lg-12">*/
/*           			<div class="form-panel">*/
/*                   	  <h4 class="mb"><i class="fa fa-angle-right"></i> Inline Form</h4>*/
/*                       <form class="form-inline" role="form">*/
/*                           <div class="form-group">*/
/*                               <label class="sr-only" for="exampleInputEmail2">Email address</label>*/
/*                               <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">*/
/*                           </div>*/
/*                           <div class="form-group">*/
/*                               <label class="sr-only" for="exampleInputPassword2">Password</label>*/
/*                               <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">*/
/*                           </div>*/
/*                           <button type="submit" class="btn btn-theme">Sign in</button>*/
/*                       </form>*/
/*           			</div><!-- /form-panel -->*/
/*           		</div><!-- /col-lg-12 -->*/
/*           	</div><!-- /row -->*/
/*           	*/
/*           	<!-- INPUT MESSAGES -->*/
/*           	<div class="row mt">*/
/*           		<div class="col-lg-12">*/
/*           			<div class="form-panel">*/
/*                   	  <h4 class="mb"><i class="fa fa-angle-right"></i> Input Messages</h4>*/
/*                           <form class="form-horizontal tasi-form" method="get">*/
/*                               <div class="form-group has-success">*/
/*                                   <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Input with success</label>*/
/*                                   <div class="col-lg-10">*/
/*                                       <input type="text" class="form-control" id="inputSuccess">*/
/*                                   </div>*/
/*                               </div>*/
/*                               <div class="form-group has-warning">*/
/*                                   <label class="col-sm-2 control-label col-lg-2" for="inputWarning">Input with warning</label>*/
/*                                   <div class="col-lg-10">*/
/*                                       <input type="text" class="form-control" id="inputWarning">*/
/*                                   </div>*/
/*                               </div>*/
/*                               <div class="form-group has-error">*/
/*                                   <label class="col-sm-2 control-label col-lg-2" for="inputError">Input with error</label>*/
/*                                   <div class="col-lg-10">*/
/*                                       <input type="text" class="form-control" id="inputError">*/
/*                                   </div>*/
/*                               </div>*/
/*                           </form>*/
/*           			</div><!-- /form-panel -->*/
/*           		</div><!-- /col-lg-12 -->*/
/*           	</div><!-- /row -->*/
/*           	*/
/*           	<!-- INPUT MESSAGES -->*/
/*           	<div class="row mt">*/
/*           		<div class="col-lg-12">*/
/*           			<div class="form-panel">*/
/*                   	  <h4 class="mb"><i class="fa fa-angle-right"></i> Checkboxes, Radios & Selects</h4>*/
/* 						<div class="checkbox">*/
/* 						  <label>*/
/* 						    <input type="checkbox" value="">*/
/* 						    Option one is this and that&mdash;be sure to include why it's great*/
/* 						  </label>*/
/* 						</div>*/
/* 						*/
/* 						<div class="radio">*/
/* 						  <label>*/
/* 						    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>*/
/* 						    Option one is this and that&mdash;be sure to include why it's great*/
/* 						  </label>*/
/* 						</div>*/
/* 						<div class="radio">*/
/* 						  <label>*/
/* 						    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">*/
/* 						    Option two can be something else and selecting it will deselect option one*/
/* 						  </label>*/
/* 						</div>*/
/* 						*/
/* 						<hr>*/
/* 						<label class="checkbox-inline">*/
/* 						  <input type="checkbox" id="inlineCheckbox1" value="option1"> 1*/
/* 						</label>*/
/* 						<label class="checkbox-inline">*/
/* 						  <input type="checkbox" id="inlineCheckbox2" value="option2"> 2*/
/* 						</label>*/
/* 						<label class="checkbox-inline">*/
/* 						  <input type="checkbox" id="inlineCheckbox3" value="option3"> 3*/
/* 						</label>*/
/* 						*/
/* 						<hr>*/
/* 						<select class="form-control">*/
/* 						  <option>1</option>*/
/* 						  <option>2</option>*/
/* 						  <option>3</option>*/
/* 						  <option>4</option>*/
/* 						  <option>5</option>*/
/* 						</select>*/
/* 						<br>*/
/* 						<select multiple class="form-control">*/
/* 						  <option>1</option>*/
/* 						  <option>2</option>*/
/* 						  <option>3</option>*/
/* 						  <option>4</option>*/
/* 						  <option>5</option>*/
/* 						</select>        		*/
/*           			</div><!-- /form-panel -->*/
/*           		</div><!-- /col-lg-12 -->*/
/*           		*/
/*           	<!-- CUSTOM TOGGLES -->*/
/*           		<div class="col-lg-12">*/
/*           			<div class="form-panel">*/
/*                   	  <h4 class="mb"><i class="fa fa-angle-right"></i> Custom Toggles</h4>*/
/*                           <div class="row mt">*/
/*                               <div class="col-sm-6 text-center">*/
/*                                   <input type="checkbox" checked="" data-toggle="switch" />*/
/*                               </div>*/
/*                               <div class="col-sm-6 text-center">*/
/*                                   <input type="checkbox" data-toggle="switch" />*/
/*                               </div>*/
/*                           </div>*/
/*                           <div class="row mt">*/
/*                               <div class="col-sm-6 text-center">*/
/*                                   <div class="switch switch-square"*/
/*                                        data-on-label="<i class=' fa fa-check'></i>"*/
/*                                        data-off-label="<i class='fa fa-times'></i>">*/
/*                                       <input type="checkbox" />*/
/*                                   </div>*/
/*                               </div>*/
/*                               <div class="col-sm-6 text-center">*/
/*                                   <div class="switch switch-square"*/
/*                                        data-on-label="<i class=' fa fa-check'></i>"*/
/*                                        data-off-label="<i class='fa fa-times'></i>">*/
/*                                       <input type="checkbox" checked="" />*/
/*                                   </div>*/
/*                               </div>*/
/*                           </div>*/
/*                           <div class="row mt">*/
/*                               <div class="col-sm-6 text-center">*/
/*                                   <input type="checkbox" disabled data-toggle="switch" />*/
/*                               </div>*/
/*                               <div class="col-sm-6 text-center">*/
/*                                   <input type="checkbox" checked disabled data-toggle="switch" />*/
/*                               </div>*/
/*                           </div>*/
/*           			</div>*/
/*           		</div>*/
/*           	</div><!-- /row -->*/
/*           	*/
/*           	*/
/* 		</section><! --/wrapper -->*/
/*       </section><!-- /MAIN CONTENT -->*/
/* */
/*       <!--main content end-->*/
/*       {% endblock %}*/
/* */
/*    {% block javascripts %}*/
/*      {{ parent() }}*/
/* */
/*     <!--script for this page-->*/
/*     <script src="{{asset('dashgumfree2/js/jquery-ui-1.9.2.custom.min.js')}}"></script>*/
/* */
/* 	<!--custom switch-->*/
/* 	<script src="{{asset('dashgumfree2/js/bootstrap-switch.js')}}"></script>*/
/* 	*/
/* 	<!--custom tagsinput-->*/
/* 	<script src="{{asset('dashgumfree2/js/jquery.tagsinput.js')}}"></script>*/
/* 	*/
/* 	<!--custom checkbox & radio-->*/
/* 	*/
/* 	<script type="text/javascript" src="{{asset('dashgumfree2/js/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>*/
/* 	<script type="text/javascript" src="{{asset('dashgumfree2/js/bootstrap-daterangepicker/date.js')}}"></script>*/
/* 	<script type="text/javascript" src="{{asset('dashgumfree2/js/bootstrap-daterangepicker/daterangepicker.js')}}"></script>*/
/* 	*/
/* 	<script type="text/javascript" src="{{asset('dashgumfree2/js/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>*/
/* 	*/
/* 	*/
/* 	<script src="{{asset('dashgumfree2/js/form-component.js')}}"></script>    */
/*     */
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
