<?php

/* @Control/dashgumfree2/todo_list.html */
class __TwigTemplate_446a5f9f13f0a83482be2acde996ac328b3fbffee51c960fbc9e3f5a8e57b65f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_dash2.html.twig", "@Control/dashgumfree2/todo_list.html", 1);
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
        $__internal_4fcb299b2472296190a0cf6ad5361b85e91cbb4707695b36cbd77ac3a30fda33 = $this->env->getExtension("native_profiler");
        $__internal_4fcb299b2472296190a0cf6ad5361b85e91cbb4707695b36cbd77ac3a30fda33->enter($__internal_4fcb299b2472296190a0cf6ad5361b85e91cbb4707695b36cbd77ac3a30fda33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Control/dashgumfree2/todo_list.html"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fcb299b2472296190a0cf6ad5361b85e91cbb4707695b36cbd77ac3a30fda33->leave($__internal_4fcb299b2472296190a0cf6ad5361b85e91cbb4707695b36cbd77ac3a30fda33_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a871aefb7d973f55af334a9d008a863fe7cd9ce30868b5c94149223853e3501 = $this->env->getExtension("native_profiler");
        $__internal_0a871aefb7d973f55af334a9d008a863fe7cd9ce30868b5c94149223853e3501->enter($__internal_0a871aefb7d973f55af334a9d008a863fe7cd9ce30868b5c94149223853e3501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/to-do.css"), "html", null, true);
        echo "\">

";
        
        $__internal_0a871aefb7d973f55af334a9d008a863fe7cd9ce30868b5c94149223853e3501->leave($__internal_0a871aefb7d973f55af334a9d008a863fe7cd9ce30868b5c94149223853e3501_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_10c94fe93ac6cf55f4d46c7122c59d746b5404f20a15386a4f04a5418214330a = $this->env->getExtension("native_profiler");
        $__internal_10c94fe93ac6cf55f4d46c7122c59d746b5404f20a15386a4f04a5418214330a->enter($__internal_10c94fe93ac6cf55f4d46c7122c59d746b5404f20a15386a4f04a5418214330a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id=\"main-content\">
          <section class=\"wrapper\">
          \t<h3><i class=\"fa fa-angle-right\"></i> To-Do Lists</h3>
          \t
          \t<!-- SIMPLE TO DO LIST -->
          \t<div class=\"row mt\">
          \t\t<div class=\"col-md-12\">
          \t\t\t<div class=\"white-panel pn\">
\t                \t<div class=\"panel-heading\">
\t                        <div class=\"pull-left\"><h5><i class=\"fa fa-tasks\"></i> Todo List - Basic Style</h5></div>
\t                        <br>
\t                 \t</div>
\t\t\t\t  \t\t<div class=\"custom-check goleft mt\">
\t\t\t\t             <table id=\"todo\" class=\"table table-hover custom-check\">
\t\t\t\t              <tbody>
\t\t\t\t                <tr>
\t\t\t\t           \t\t\t<td>
\t\t\t\t                        <span class=\"check\"><input type=\"checkbox\" class=\"checked\"></span>
\t\t\t\t                        <a href=\"#\">Send invoice</a></span>
\t\t\t\t                        <button class=\"close\" aria-hidden=\"true\" data-dismiss=\"alert\" type=\"button\">×</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t                </tr>
\t\t\t\t                <tr>
\t\t\t\t           \t\t\t<td>
\t\t\t\t                        <span class=\"check\"><input type=\"checkbox\" class=\"checked\"></span>
\t\t\t\t                        <a href=\"#\">Check messages</a></span>
\t\t\t\t                        <button class=\"close\" aria-hidden=\"true\" data-dismiss=\"alert\" type=\"button\">×</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t                </tr>
\t\t\t\t                <tr>
\t\t\t\t            \t\t<td>
\t\t\t\t                        <span class=\"check\"><input type=\"checkbox\" class=\"checked\"></span>
\t\t\t\t                        <a href=\"#\">Pay bills</a></span>
\t\t\t\t                        <button class=\"close\" aria-hidden=\"true\" data-dismiss=\"alert\" type=\"button\">×</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t                </tr>
\t\t\t\t                <tr>
\t\t\t\t            \t\t<td>
\t\t\t\t                        <span class=\"check\"><input type=\"checkbox\" class=\"checked\"></span>
\t\t\t\t                        <a href=\"#\">Schedule site </a></span>
\t\t\t\t                        <button class=\"close\" aria-hidden=\"true\" data-dismiss=\"alert\" type=\"button\">×</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t                 </tr>
\t\t\t\t              </tbody>
\t\t\t\t          </table>
\t\t\t\t\t\t</div><!-- /table-responsive -->
\t\t\t\t\t</div><!--/ White-panel -->
          \t\t</div><! --/col-md-12 -->
          \t</div><! -- row -->
\t\t\t

          \t<!-- COMPLEX TO DO LIST -->\t\t\t
              <div class=\"row mt\">
                  <div class=\"col-md-12\">
                      <section class=\"task-panel tasks-widget\">
\t                \t<div class=\"panel-heading\">
\t                        <div class=\"pull-left\"><h5><i class=\"fa fa-tasks\"></i> Todo List - Complex Style</h5></div>
\t                        <br>
\t                 \t</div>
                          <div class=\"panel-body\">
                              <div class=\"task-content\">

                                  <ul class=\"task-list\">
                                      <li>
                                          <div class=\"task-checkbox\">
                                              <input type=\"checkbox\" class=\"list-child\" value=\"\"  />
                                          </div>
                                          <div class=\"task-title\">
                                              <span class=\"task-title-sp\">Dashgum - Admin Panel Theme</span>
                                              <span class=\"badge bg-theme\">Done</span>
                                              <div class=\"pull-right hidden-phone\">
                                                  <button class=\"btn btn-success btn-xs\"><i class=\" fa fa-check\"></i></button>
                                                  <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                                  <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class=\"task-checkbox\">
                                              <input type=\"checkbox\" class=\"list-child\" value=\"\"  />
                                          </div>
                                          <div class=\"task-title\">
                                              <span class=\"task-title-sp\">Extensive collection of plugins</span>
                                              <span class=\"badge bg-warning\">Cool</span>
                                              <div class=\"pull-right hidden-phone\">
                                                  <button class=\"btn btn-success btn-xs\"><i class=\" fa fa-check\"></i></button>
                                                  <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                                  <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class=\"task-checkbox\">
                                              <input type=\"checkbox\" class=\"list-child\" value=\"\"  />
                                          </div>
                                          <div class=\"task-title\">
                                              <span class=\"task-title-sp\">Free updates always, no extra fees.</span>
                                              <span class=\"badge bg-success\">2 Days</span>
                                              <div class=\"pull-right hidden-phone\">
                                                  <button class=\"btn btn-success btn-xs\"><i class=\" fa fa-check\"></i></button>
                                                  <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                                  <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class=\"task-checkbox\">
                                              <input type=\"checkbox\" class=\"list-child\" value=\"\"  />
                                          </div>
                                          <div class=\"task-title\">
                                              <span class=\"task-title-sp\">More features coming soon</span>
                                              <span class=\"badge bg-info\">Tomorrow</span>
                                              <div class=\"pull-right hidden-phone\">
                                                  <button class=\"btn btn-success btn-xs\"><i class=\" fa fa-check\"></i></button>
                                                  <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                                  <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class=\"task-checkbox\">
                                              <input type=\"checkbox\" class=\"list-child\" value=\"\"  />
                                          </div>
                                          <div class=\"task-title\">
                                              <span class=\"task-title-sp\">Hey, seriously, you should buy this Dashboard</span>
                                              <span class=\"badge bg-important\">Now</span>
                                              <div class=\"pull-right\">
                                                  <button class=\"btn btn-success btn-xs\"><i class=\" fa fa-check\"></i></button>
                                                  <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                                  <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                              </div>
                                          </div>
                                      </li>                                      
                                  </ul>
                              </div>

                              <div class=\" add-task-row\">
                                  <a class=\"btn btn-success btn-sm pull-left\" href=\"todo_list.html#\">Add New Tasks</a>
                                  <a class=\"btn btn-default btn-sm pull-right\" href=\"todo_list.html#\">See All Tasks</a>
                              </div>
                          </div>
                      </section>
                  </div><!-- /col-md-12-->
              </div><!-- /row -->
\t\t\t
\t\t\t
          \t<!-- SORTABLE TO DO LIST -->
\t\t\t
              <div class=\"row mt mb\">
                  <div class=\"col-md-12\">
                      <section class=\"task-panel tasks-widget\">
\t                \t<div class=\"panel-heading\">
\t                        <div class=\"pull-left\"><h5><i class=\"fa fa-tasks\"></i> Todo List - Sortable Style</h5></div>
\t                        <br>
\t                 \t</div>
                          <div class=\"panel-body\">
                              <div class=\"task-content\">
                                  <ul id=\"sortable\" class=\"task-list\">
                                      <li class=\"list-primary\">
                                          <i class=\" fa fa-ellipsis-v\"></i>
                                          <div class=\"task-checkbox\">
                                              <input type=\"checkbox\" class=\"list-child\" value=\"\"  />
                                          </div>
                                          <div class=\"task-title\">
                                              <span class=\"task-title-sp\">Dashgum - Admin Panel Theme</span>
                                              <span class=\"badge bg-theme\">Done</span>
                                              <div class=\"pull-right hidden-phone\">
                                                  <button class=\"btn btn-success btn-xs fa fa-check\"></button>
                                                  <button class=\"btn btn-primary btn-xs fa fa-pencil\"></button>
                                                  <button class=\"btn btn-danger btn-xs fa fa-trash-o\"></button>
                                              </div>
                                          </div>
                                      </li>

                                      <li class=\"list-danger\">
                                          <i class=\" fa fa-ellipsis-v\"></i>
                                          <div class=\"task-checkbox\">
                                              <input type=\"checkbox\" class=\"list-child\" value=\"\"  />
                                          </div>
                                          <div class=\"task-title\">
                                              <span class=\"task-title-sp\">Extensive collection of plugins</span>
                                              <span class=\"badge bg-warning\">Cool</span>
                                              <div class=\"pull-right hidden-phone\">
                                                  <button class=\"btn btn-success btn-xs fa fa-check\"></button>
                                                  <button class=\"btn btn-primary btn-xs fa fa-pencil\"></button>
                                                  <button class=\"btn btn-danger btn-xs fa fa-trash-o\"></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class=\"list-success\">
                                          <i class=\" fa fa-ellipsis-v\"></i>
                                          <div class=\"task-checkbox\">
                                              <input type=\"checkbox\" class=\"list-child\" value=\"\"  />
                                          </div>
                                          <div class=\"task-title\">
                                              <span class=\"task-title-sp\">Free updates always, no extra fees.</span>
                                              <span class=\"badge bg-success\">2 Days</span>
                                              <div class=\"pull-right hidden-phone\">
                                                  <button class=\"btn btn-success btn-xs fa fa-check\"></button>
                                                  <button class=\"btn btn-primary btn-xs fa fa-pencil\"></button>
                                                  <button class=\"btn btn-danger btn-xs fa fa-trash-o\"></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class=\"list-warning\">
                                          <i class=\" fa fa-ellipsis-v\"></i>
                                          <div class=\"task-checkbox\">
                                              <input type=\"checkbox\" class=\"list-child\" value=\"\"  />
                                          </div>
                                          <div class=\"task-title\">
                                              <span class=\"task-title-sp\">More features coming soon</span>
                                              <span class=\"badge bg-info\">Tomorrow</span>
                                              <div class=\"pull-right hidden-phone\">
                                                  <button class=\"btn btn-success btn-xs fa fa-check\"></button>
                                                  <button class=\"btn btn-primary btn-xs fa fa-pencil\"></button>
                                                  <button class=\"btn btn-danger btn-xs fa fa-trash-o\"></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class=\"list-info\">
                                          <i class=\" fa fa-ellipsis-v\"></i>
                                          <div class=\"task-checkbox\">
                                              <input type=\"checkbox\" class=\"list-child\" value=\"\"  />
                                          </div>
                                          <div class=\"task-title\">
                                              <span class=\"task-title-sp\">Hey, seriously, you should buy this Dashboard</span>
                                              <span class=\"badge bg-important\">Now</span>
                                              <div class=\"pull-right hidden-phone\">
                                                  <button class=\"btn btn-success btn-xs fa fa-check\"></button>
                                                  <button class=\"btn btn-primary btn-xs fa fa-pencil\"></button>
                                                  <button class=\"btn btn-danger btn-xs fa fa-trash-o\"></button>
                                              </div>
                                          </div>
                                      </li>

                                  </ul>
                              </div>
                              <div class=\" add-task-row\">
                                  <a class=\"btn btn-success btn-sm pull-left\" href=\"todo_list.html#\">Add New Tasks</a>
                                  <a class=\"btn btn-default btn-sm pull-right\" href=\"todo_list.html#\">See All Tasks</a>
                              </div>
                          </div>
                      </section>
                  </div><!--/col-md-12 -->
              </div><!-- /row -->
\t\t\t
\t\t</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
     ";
        
        $__internal_10c94fe93ac6cf55f4d46c7122c59d746b5404f20a15386a4f04a5418214330a->leave($__internal_10c94fe93ac6cf55f4d46c7122c59d746b5404f20a15386a4f04a5418214330a_prof);

    }

    // line 275
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc201bfc2171c15aa6649f60913935b12ea424e60761340ee098c8cd1f2906a4 = $this->env->getExtension("native_profiler");
        $__internal_cc201bfc2171c15aa6649f60913935b12ea424e60761340ee098c8cd1f2906a4->enter($__internal_cc201bfc2171c15aa6649f60913935b12ea424e60761340ee098c8cd1f2906a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 276
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    
    <!--script for this page-->
\t<script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js')}}\"></script>    
    <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/tasks.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script>
      jQuery(document).ready(function() {
          TaskList.initTaskWidget();
      });

      \$(function() {
          \$( \"#sortable\" ).sortable();
          \$( \"#sortable\" ).disableSelection();
      });

    </script>
    
    
  <script>
      //custom select box

      \$(function(){
          \$('select.styled').customSelect();
      });

  </script>

     ";
        
        $__internal_cc201bfc2171c15aa6649f60913935b12ea424e60761340ee098c8cd1f2906a4->leave($__internal_cc201bfc2171c15aa6649f60913935b12ea424e60761340ee098c8cd1f2906a4_prof);

    }

    public function getTemplateName()
    {
        return "@Control/dashgumfree2/todo_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 281,  353 => 276,  347 => 275,  85 => 18,  79 => 17,  69 => 14,  65 => 13,  61 => 12,  55 => 9,  50 => 7,  42 => 3,  36 => 2,  11 => 1,);
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
/*     */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{asset('dashgumfree2/css/style.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('dashgumfree2/css/style-responsive.css')}}" rel="stylesheet">*/
/*     <link rel="stylesheet" href="{{asset('dashgumfree2/css/to-do.css')}}">*/
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
/*           	<h3><i class="fa fa-angle-right"></i> To-Do Lists</h3>*/
/*           	*/
/*           	<!-- SIMPLE TO DO LIST -->*/
/*           	<div class="row mt">*/
/*           		<div class="col-md-12">*/
/*           			<div class="white-panel pn">*/
/* 	                	<div class="panel-heading">*/
/* 	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Todo List - Basic Style</h5></div>*/
/* 	                        <br>*/
/* 	                 	</div>*/
/* 				  		<div class="custom-check goleft mt">*/
/* 				             <table id="todo" class="table table-hover custom-check">*/
/* 				              <tbody>*/
/* 				                <tr>*/
/* 				           			<td>*/
/* 				                        <span class="check"><input type="checkbox" class="checked"></span>*/
/* 				                        <a href="#">Send invoice</a></span>*/
/* 				                        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>*/
/* 									</td>*/
/* 				                </tr>*/
/* 				                <tr>*/
/* 				           			<td>*/
/* 				                        <span class="check"><input type="checkbox" class="checked"></span>*/
/* 				                        <a href="#">Check messages</a></span>*/
/* 				                        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>*/
/* 									</td>*/
/* 				                </tr>*/
/* 				                <tr>*/
/* 				            		<td>*/
/* 				                        <span class="check"><input type="checkbox" class="checked"></span>*/
/* 				                        <a href="#">Pay bills</a></span>*/
/* 				                        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>*/
/* 									</td>*/
/* 				                </tr>*/
/* 				                <tr>*/
/* 				            		<td>*/
/* 				                        <span class="check"><input type="checkbox" class="checked"></span>*/
/* 				                        <a href="#">Schedule site </a></span>*/
/* 				                        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>*/
/* 									</td>*/
/* 				                 </tr>*/
/* 				              </tbody>*/
/* 				          </table>*/
/* 						</div><!-- /table-responsive -->*/
/* 					</div><!--/ White-panel -->*/
/*           		</div><! --/col-md-12 -->*/
/*           	</div><! -- row -->*/
/* 			*/
/* */
/*           	<!-- COMPLEX TO DO LIST -->			*/
/*               <div class="row mt">*/
/*                   <div class="col-md-12">*/
/*                       <section class="task-panel tasks-widget">*/
/* 	                	<div class="panel-heading">*/
/* 	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Todo List - Complex Style</h5></div>*/
/* 	                        <br>*/
/* 	                 	</div>*/
/*                           <div class="panel-body">*/
/*                               <div class="task-content">*/
/* */
/*                                   <ul class="task-list">*/
/*                                       <li>*/
/*                                           <div class="task-checkbox">*/
/*                                               <input type="checkbox" class="list-child" value=""  />*/
/*                                           </div>*/
/*                                           <div class="task-title">*/
/*                                               <span class="task-title-sp">Dashgum - Admin Panel Theme</span>*/
/*                                               <span class="badge bg-theme">Done</span>*/
/*                                               <div class="pull-right hidden-phone">*/
/*                                                   <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>*/
/*                                                   <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>*/
/*                                                   <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>*/
/*                                               </div>*/
/*                                           </div>*/
/*                                       </li>*/
/*                                       <li>*/
/*                                           <div class="task-checkbox">*/
/*                                               <input type="checkbox" class="list-child" value=""  />*/
/*                                           </div>*/
/*                                           <div class="task-title">*/
/*                                               <span class="task-title-sp">Extensive collection of plugins</span>*/
/*                                               <span class="badge bg-warning">Cool</span>*/
/*                                               <div class="pull-right hidden-phone">*/
/*                                                   <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>*/
/*                                                   <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>*/
/*                                                   <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>*/
/*                                               </div>*/
/*                                           </div>*/
/*                                       </li>*/
/*                                       <li>*/
/*                                           <div class="task-checkbox">*/
/*                                               <input type="checkbox" class="list-child" value=""  />*/
/*                                           </div>*/
/*                                           <div class="task-title">*/
/*                                               <span class="task-title-sp">Free updates always, no extra fees.</span>*/
/*                                               <span class="badge bg-success">2 Days</span>*/
/*                                               <div class="pull-right hidden-phone">*/
/*                                                   <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>*/
/*                                                   <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>*/
/*                                                   <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>*/
/*                                               </div>*/
/*                                           </div>*/
/*                                       </li>*/
/*                                       <li>*/
/*                                           <div class="task-checkbox">*/
/*                                               <input type="checkbox" class="list-child" value=""  />*/
/*                                           </div>*/
/*                                           <div class="task-title">*/
/*                                               <span class="task-title-sp">More features coming soon</span>*/
/*                                               <span class="badge bg-info">Tomorrow</span>*/
/*                                               <div class="pull-right hidden-phone">*/
/*                                                   <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>*/
/*                                                   <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>*/
/*                                                   <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>*/
/*                                               </div>*/
/*                                           </div>*/
/*                                       </li>*/
/*                                       <li>*/
/*                                           <div class="task-checkbox">*/
/*                                               <input type="checkbox" class="list-child" value=""  />*/
/*                                           </div>*/
/*                                           <div class="task-title">*/
/*                                               <span class="task-title-sp">Hey, seriously, you should buy this Dashboard</span>*/
/*                                               <span class="badge bg-important">Now</span>*/
/*                                               <div class="pull-right">*/
/*                                                   <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>*/
/*                                                   <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>*/
/*                                                   <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>*/
/*                                               </div>*/
/*                                           </div>*/
/*                                       </li>                                      */
/*                                   </ul>*/
/*                               </div>*/
/* */
/*                               <div class=" add-task-row">*/
/*                                   <a class="btn btn-success btn-sm pull-left" href="todo_list.html#">Add New Tasks</a>*/
/*                                   <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a>*/
/*                               </div>*/
/*                           </div>*/
/*                       </section>*/
/*                   </div><!-- /col-md-12-->*/
/*               </div><!-- /row -->*/
/* 			*/
/* 			*/
/*           	<!-- SORTABLE TO DO LIST -->*/
/* 			*/
/*               <div class="row mt mb">*/
/*                   <div class="col-md-12">*/
/*                       <section class="task-panel tasks-widget">*/
/* 	                	<div class="panel-heading">*/
/* 	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Todo List - Sortable Style</h5></div>*/
/* 	                        <br>*/
/* 	                 	</div>*/
/*                           <div class="panel-body">*/
/*                               <div class="task-content">*/
/*                                   <ul id="sortable" class="task-list">*/
/*                                       <li class="list-primary">*/
/*                                           <i class=" fa fa-ellipsis-v"></i>*/
/*                                           <div class="task-checkbox">*/
/*                                               <input type="checkbox" class="list-child" value=""  />*/
/*                                           </div>*/
/*                                           <div class="task-title">*/
/*                                               <span class="task-title-sp">Dashgum - Admin Panel Theme</span>*/
/*                                               <span class="badge bg-theme">Done</span>*/
/*                                               <div class="pull-right hidden-phone">*/
/*                                                   <button class="btn btn-success btn-xs fa fa-check"></button>*/
/*                                                   <button class="btn btn-primary btn-xs fa fa-pencil"></button>*/
/*                                                   <button class="btn btn-danger btn-xs fa fa-trash-o"></button>*/
/*                                               </div>*/
/*                                           </div>*/
/*                                       </li>*/
/* */
/*                                       <li class="list-danger">*/
/*                                           <i class=" fa fa-ellipsis-v"></i>*/
/*                                           <div class="task-checkbox">*/
/*                                               <input type="checkbox" class="list-child" value=""  />*/
/*                                           </div>*/
/*                                           <div class="task-title">*/
/*                                               <span class="task-title-sp">Extensive collection of plugins</span>*/
/*                                               <span class="badge bg-warning">Cool</span>*/
/*                                               <div class="pull-right hidden-phone">*/
/*                                                   <button class="btn btn-success btn-xs fa fa-check"></button>*/
/*                                                   <button class="btn btn-primary btn-xs fa fa-pencil"></button>*/
/*                                                   <button class="btn btn-danger btn-xs fa fa-trash-o"></button>*/
/*                                               </div>*/
/*                                           </div>*/
/*                                       </li>*/
/*                                       <li class="list-success">*/
/*                                           <i class=" fa fa-ellipsis-v"></i>*/
/*                                           <div class="task-checkbox">*/
/*                                               <input type="checkbox" class="list-child" value=""  />*/
/*                                           </div>*/
/*                                           <div class="task-title">*/
/*                                               <span class="task-title-sp">Free updates always, no extra fees.</span>*/
/*                                               <span class="badge bg-success">2 Days</span>*/
/*                                               <div class="pull-right hidden-phone">*/
/*                                                   <button class="btn btn-success btn-xs fa fa-check"></button>*/
/*                                                   <button class="btn btn-primary btn-xs fa fa-pencil"></button>*/
/*                                                   <button class="btn btn-danger btn-xs fa fa-trash-o"></button>*/
/*                                               </div>*/
/*                                           </div>*/
/*                                       </li>*/
/*                                       <li class="list-warning">*/
/*                                           <i class=" fa fa-ellipsis-v"></i>*/
/*                                           <div class="task-checkbox">*/
/*                                               <input type="checkbox" class="list-child" value=""  />*/
/*                                           </div>*/
/*                                           <div class="task-title">*/
/*                                               <span class="task-title-sp">More features coming soon</span>*/
/*                                               <span class="badge bg-info">Tomorrow</span>*/
/*                                               <div class="pull-right hidden-phone">*/
/*                                                   <button class="btn btn-success btn-xs fa fa-check"></button>*/
/*                                                   <button class="btn btn-primary btn-xs fa fa-pencil"></button>*/
/*                                                   <button class="btn btn-danger btn-xs fa fa-trash-o"></button>*/
/*                                               </div>*/
/*                                           </div>*/
/*                                       </li>*/
/*                                       <li class="list-info">*/
/*                                           <i class=" fa fa-ellipsis-v"></i>*/
/*                                           <div class="task-checkbox">*/
/*                                               <input type="checkbox" class="list-child" value=""  />*/
/*                                           </div>*/
/*                                           <div class="task-title">*/
/*                                               <span class="task-title-sp">Hey, seriously, you should buy this Dashboard</span>*/
/*                                               <span class="badge bg-important">Now</span>*/
/*                                               <div class="pull-right hidden-phone">*/
/*                                                   <button class="btn btn-success btn-xs fa fa-check"></button>*/
/*                                                   <button class="btn btn-primary btn-xs fa fa-pencil"></button>*/
/*                                                   <button class="btn btn-danger btn-xs fa fa-trash-o"></button>*/
/*                                               </div>*/
/*                                           </div>*/
/*                                       </li>*/
/* */
/*                                   </ul>*/
/*                               </div>*/
/*                               <div class=" add-task-row">*/
/*                                   <a class="btn btn-success btn-sm pull-left" href="todo_list.html#">Add New Tasks</a>*/
/*                                   <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a>*/
/*                               </div>*/
/*                           </div>*/
/*                       </section>*/
/*                   </div><!--/col-md-12 -->*/
/*               </div><!-- /row -->*/
/* 			*/
/* 		</section><! --/wrapper -->*/
/*       </section><!-- /MAIN CONTENT -->*/
/* */
/*       <!--main content end-->*/
/*      {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*      {{ parent() }}*/
/* */
/*     */
/*     <!--script for this page-->*/
/* 	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js')}}"></script>    */
/*     <script src="{{asset('dashgumfree2/js/tasks.js')}}" type="text/javascript"></script>*/
/* */
/*     <script>*/
/*       jQuery(document).ready(function() {*/
/*           TaskList.initTaskWidget();*/
/*       });*/
/* */
/*       $(function() {*/
/*           $( "#sortable" ).sortable();*/
/*           $( "#sortable" ).disableSelection();*/
/*       });*/
/* */
/*     </script>*/
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
/* */
/*      {% endblock %}*/
/* */
