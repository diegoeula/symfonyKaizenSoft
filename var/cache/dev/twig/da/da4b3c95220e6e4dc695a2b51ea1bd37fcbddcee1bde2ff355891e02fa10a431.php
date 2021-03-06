<?php

/* ControlBundle:dashgumfree2:general.html.twig */
class __TwigTemplate_481af26e9d67c93ce46a4d868064067aeab0bd6d1b8daab9f76b2d2cd8028598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ControlBundle:dashgumfree2:general.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8872fa7a6424676a6d18cf62a90f9210380259d38f1b7dc32e50825ca330731b = $this->env->getExtension("native_profiler");
        $__internal_8872fa7a6424676a6d18cf62a90f9210380259d38f1b7dc32e50825ca330731b->enter($__internal_8872fa7a6424676a6d18cf62a90f9210380259d38f1b7dc32e50825ca330731b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:dashgumfree2:general.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8872fa7a6424676a6d18cf62a90f9210380259d38f1b7dc32e50825ca330731b->leave($__internal_8872fa7a6424676a6d18cf62a90f9210380259d38f1b7dc32e50825ca330731b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce61c4dfacbfc22bb3279c55f6dc2675f4c94dc3f7cf2734db5b07e021bbe740 = $this->env->getExtension("native_profiler");
        $__internal_ce61c4dfacbfc22bb3279c55f6dc2675f4c94dc3f7cf2734db5b07e021bbe740->enter($__internal_ce61c4dfacbfc22bb3279c55f6dc2675f4c94dc3f7cf2734db5b07e021bbe740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "\" />
        
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_ce61c4dfacbfc22bb3279c55f6dc2675f4c94dc3f7cf2734db5b07e021bbe740->leave($__internal_ce61c4dfacbfc22bb3279c55f6dc2675f4c94dc3f7cf2734db5b07e021bbe740_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5df1d881c0068c2b7d7e4f4e7b084e34b2f6d9b0e3ba9fed05a513bba3e8e46 = $this->env->getExtension("native_profiler");
        $__internal_b5df1d881c0068c2b7d7e4f4e7b084e34b2f6d9b0e3ba9fed05a513bba3e8e46->enter($__internal_b5df1d881c0068c2b7d7e4f4e7b084e34b2f6d9b0e3ba9fed05a513bba3e8e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "  <section id=\"container\" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class=\"header black-bg\">
              <div class=\"sidebar-toggle-box\">
                  <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
              </div>
            <!--logo start-->
            <a href=\"\" class=\"logo\"><b>DASHGUM FREE</b></a>
            <!--logo end-->
            <div class=\"nav notify-row\" id=\"top_menu\">
                <!--  notification start -->
                <ul class=\"nav top-menu\">
                    <!-- settings start -->
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <i class=\"fa fa-tasks\"></i>
                            <span class=\"badge bg-theme\">4</span>
                        </a>
                        <ul class=\"dropdown-menu extended tasks-bar\">
                            <div class=\"notify-arrow notify-arrow-green\"></div>
                            <li>
                                <p class=\"green\">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <div class=\"task-info\">
                                        <div class=\"desc\">DashGum Admin Panel</div>
                                        <div class=\"percent\">40%</div>
                                    </div>
                                    <div class=\"progress progress-striped\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                            <span class=\"sr-only\">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <div class=\"task-info\">
                                        <div class=\"desc\">Database Update</div>
                                        <div class=\"percent\">60%</div>
                                    </div>
                                    <div class=\"progress progress-striped\">
                                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                            <span class=\"sr-only\">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <div class=\"task-info\">
                                        <div class=\"desc\">Product Development</div>
                                        <div class=\"percent\">80%</div>
                                    </div>
                                    <div class=\"progress progress-striped\">
                                        <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                            <span class=\"sr-only\">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <div class=\"task-info\">
                                        <div class=\"desc\">Payments Sent</div>
                                        <div class=\"percent\">70%</div>
                                    </div>
                                    <div class=\"progress progress-striped\">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%\">
                                            <span class=\"sr-only\">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"external\">
                                <a href=\"#\">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id=\"header_inbox_bar\" class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"badge bg-theme\">5</span>
                        </a>
                        <ul class=\"dropdown-menu extended inbox\">
                            <div class=\"notify-arrow notify-arrow-green\"></div>
                            <li>
                                <p class=\"green\">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"photo\"><img alt=\"avatar\" src=\"assets/img/ui-zac.jpg\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Zac Snider</span>
                                    <span class=\"time\">Just now</span>
                                    </span>
                                    <span class=\"message\">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"photo\"><img alt=\"avatar\" src=\"assets/img/ui-divya.jpg\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Divya Manian</span>
                                    <span class=\"time\">40 mins.</span>
                                    </span>
                                    <span class=\"message\">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"photo\"><img alt=\"avatar\" src=\"assets/img/ui-danro.jpg\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Dan Rogers</span>
                                    <span class=\"time\">2 hrs.</span>
                                    </span>
                                    <span class=\"message\">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"photo\"><img alt=\"avatar\" src=\"assets/img/ui-sherman.jpg\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Dj Sherman</span>
                                    <span class=\"time\">4 hrs.</span>
                                    </span>
                                    <span class=\"message\">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class=\"top-menu\">
            \t<ul class=\"nav pull-right top-menu\">
                    <li><a class=\"logout\" href=\"login\">Logout</a></li>
            \t</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\" id=\"nav-accordion\">
              
              \t  <p class=\"centered\"><a href=\"profile\"><img src=\"assets/img/ui-sam.jpg\" class=\"img-circle\" width=\"60\"></a></p>
              \t  <h5 class=\"centered\">Marcel Newman</h5>
              \t  \t
                  <li class=\"mt\">
                      <a href=\"\">
                          <i class=\"fa fa-dashboard\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class=\"sub-menu\">
                      <a class=\"active\" href=\"javascript:;\" >
                          <i class=\"fa fa-desktop\"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class=\"sub\">
                          <li class=\"active\"><a  href=\"general\">General</a></li>
                          <li><a  href=\"buttons\">Buttons</a></li>
                          <li><a  href=\"panels\">Panels</a></li>
                      </ul>
                  </li>

                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-cogs\"></i>
                          <span>Components</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"calendar\">Calendar</a></li>
                          <li><a  href=\"gallery\">Gallery</a></li>
                          <li><a  href=\"todo_list\">Todo List</a></li>
                      </ul>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-book\"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"blank\">Blank Page</a></li>
                          <li><a  href=\"login\">Login</a></li>
                          <li><a  href=\"lock_screen\">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-tasks\"></i>
                          <span>Forms</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"form_component\">Form Components</a></li>
                      </ul>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-th\"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"basic_table\">Basic Table</a></li>
                          <li><a  href=\"responsive_table\">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\" fa fa-bar-chart-o\"></i>
                          <span>Charts</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"morris\">Morris</a></li>
                          <li><a  href=\"chartjs\">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id=\"main-content\">
          <section class=\"wrapper\">
      \t\t<div class=\"row mt\">
      \t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
      \t\t\t\t<! -- BASIC PROGRESS BARS -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Basic Progress Bars</h4>
\t      \t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t  <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
\t\t\t\t\t\t    <span class=\"sr-only\">40% Complete (success)</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t  <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
\t\t\t\t\t\t    <span class=\"sr-only\">20% Complete</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t  <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
\t\t\t\t\t\t    <span class=\"sr-only\">60% Complete (warning)</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t  <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
\t\t\t\t\t\t    <span class=\"sr-only\">80% Complete</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
      \t\t\t\t</div><!--/showback -->
      \t\t\t\t
      \t\t\t\t<! -- STRIPPED PROGRESS BARS -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Stripped Progress Bars</h4>
\t\t\t\t\t\t<div class=\"progress progress-striped\">
\t\t\t\t\t\t  <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
\t\t\t\t\t\t    <span class=\"sr-only\">40% Complete (success)</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"progress progress-striped\">
\t\t\t\t\t\t  <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
\t\t\t\t\t\t    <span class=\"sr-only\">20% Complete</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"progress progress-striped\">
\t\t\t\t\t\t  <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
\t\t\t\t\t\t    <span class=\"sr-only\">60% Complete (warning)</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"progress progress-striped\">
\t\t\t\t\t\t  <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
\t\t\t\t\t\t    <span class=\"sr-only\">80% Complete (danger)</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>      \t\t\t\t
\t\t\t\t\t</div><!-- /showback -->
\t\t\t\t\t
      \t\t\t\t<! -- ANIMATED PROGRESS BARS -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Animated Progress Bars</h4>
\t      \t\t\t\t<div class=\"progress progress-striped active\">
\t\t\t\t\t\t  <div class=\"progress-bar\"  role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%\">
\t\t\t\t\t\t    <span class=\"sr-only\">45% Complete</span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
      \t\t\t\t</div><!-- /showback -->
      \t\t\t\t
      \t\t\t\t<! -- MODALS -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Modal Example</h4>
\t\t\t\t\t\t<!-- Button trigger modal -->
\t\t\t\t\t\t<button class=\"btn btn-success btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t\t\t  Launch Modal
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Modal -->
\t\t\t\t\t\t<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t\t\t      <div class=\"modal-header\">
\t\t\t\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t        <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t      <div class=\"modal-body\">
\t\t\t\t\t\t        Hi there, I am a Modal Example for Dashgum Admin Panel.
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t      <div class=\"modal-footer\">
\t\t\t\t\t\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>      \t\t\t\t
      \t\t\t\t</div><!-- /showback -->
      \t\t\t\t
      \t\t\t\t<! -- GRITTER NOTICES -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Gritter Examples</h4>
\t\t\t\t\t\t\t<p>Click on below buttons to check it out.</p>
\t\t\t\t\t\t\t<a id=\"add-regular\" class=\"btn btn-default btn-sm\" href=\"javascript:;\">Regular</a>
\t\t\t\t\t\t\t<a id=\"add-sticky\" class=\"btn btn-success  btn-sm\" href=\"javascript:;\">Sticky</a>
\t\t\t\t\t\t\t<a id=\"add-without-image\" class=\"btn btn-info  btn-sm\" href=\"javascript:;\">Imageless</a>
\t\t\t\t\t\t\t<a id=\"add-gritter-light\" class=\"btn btn-warning  btn-sm\" href=\"javascript:;\">Light</a>
\t\t\t\t\t\t\t<a id=\"remove-all\" class=\"btn btn-danger  btn-sm\" href=\"general#\">Remove all</a>
      \t\t\t\t</div><!-- /showback -->
      \t\t\t\t
      \t\t\t</div><! --/col-lg-6 -->
      \t\t\t
      \t\t\t
      \t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
      \t\t\t\t<! -- ALERTS EXAMPLES -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Alerts Examples</h4>
\t\t\t\t\t\t\t<div class=\"alert alert-success\"><b>Well done!</b> You successfully read this important alert message.</div>
\t\t\t\t\t\t\t<div class=\"alert alert-info\"><b>Heads up!</b> This alert needs your attention, but it's not super important.</div>
\t\t\t\t\t\t\t<div class=\"alert alert-warning\"><b>Warning!</b> Better check yourself, you're not looking too good.</div>
\t\t\t\t\t\t\t<div class=\"alert alert-danger\"><b>Oh snap!</b> Change a few things up and try submitting again.</div>      \t\t\t\t
      \t\t\t\t</div><!-- /showback -->
      \t\t\t\t
      \t\t\t\t<! -- DISMISSABLE ALERT -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Dismissable Alert</h4>
\t\t\t\t\t\t<div class=\"alert alert-warning alert-dismissable\">
\t\t\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t  <strong>Warning!</strong> Better check yourself, you're not looking too good.
\t\t\t\t\t\t</div>      \t\t\t\t
      \t\t\t\t</div><!-- /showback -->
      \t\t\t\t
      \t\t\t\t<! -- BADGES -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Badges</h4>
\t\t\t\t\t\t<span class=\"badge\">5</span>
\t\t\t\t\t\t<span class=\"badge bg-primary\">10</span>
\t\t\t\t\t\t<span class=\"badge bg-success\">15</span>
\t\t\t\t\t\t<span class=\"badge bg-info\">20</span>
\t\t\t\t\t\t<span class=\"badge bg-inverse\">25</span>
\t\t\t\t\t\t<span class=\"badge bg-warning\">30</span>
\t\t\t\t\t\t<span class=\"badge bg-important\">35</span>
      \t\t\t\t</div><!-- /showback -->
      \t\t\t\t
      \t\t\t\t<! -- LABELS -->
      \t\t\t\t<div class=\"showback\">
      \t\t\t\t\t<h4><i class=\"fa fa-angle-right\"></i> Labels</h4>
\t\t\t\t\t\t\t<span class=\"label label-default\">label</span>
\t\t\t\t\t\t\t<span class=\"label label-primary\">Primary</span>
\t\t\t\t\t\t\t<span class=\"label label-success\">Success</span>
\t\t\t\t\t\t\t<span class=\"label label-info\">Info</span>
\t\t\t\t\t\t\t<span class=\"label label-warning\">Warning</span>
\t\t\t\t\t\t\t<span class=\"label label-danger\">Danger</span>
                    </div><!-- /showback -->
      \t\t\t
      \t\t\t</div><!-- /col-lg-6 -->
      \t\t\t
      \t\t</div><!--/ row -->
          </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
    ";
        
        $__internal_b5df1d881c0068c2b7d7e4f4e7b084e34b2f6d9b0e3ba9fed05a513bba3e8e46->leave($__internal_b5df1d881c0068c2b7d7e4f4e7b084e34b2f6d9b0e3ba9fed05a513bba3e8e46_prof);

    }

    // line 428
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87baf17a2a5e00e3b2d663215fc018e768efa5efbd6e8179737229cad45bcc00 = $this->env->getExtension("native_profiler");
        $__internal_87baf17a2a5e00e3b2d663215fc018e768efa5efbd6e8179737229cad45bcc00->enter($__internal_87baf17a2a5e00e3b2d663215fc018e768efa5efbd6e8179737229cad45bcc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 429
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
      //custom select box

      \$(function(){
          \$('select.styled').customSelect();
      });

  </script>

         ";
        
        $__internal_87baf17a2a5e00e3b2d663215fc018e768efa5efbd6e8179737229cad45bcc00->leave($__internal_87baf17a2a5e00e3b2d663215fc018e768efa5efbd6e8179737229cad45bcc00_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:dashgumfree2:general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 429,  500 => 428,  85 => 18,  79 => 17,  69 => 14,  65 => 13,  59 => 10,  55 => 9,  50 => 7,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*      {{ parent() }}*/
/*     <!--external css-->*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{asset('dashgumfree2/css/bootstrap.css')}}" rel="stylesheet">*/
/*     <!--external css-->*/
/*     <link href="{{asset('dashgumfree2/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('dashgumfree2/js/gritter/css/jquery.gritter.css')}}" />*/
/*         */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{asset('dashgumfree2/css/style.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('dashgumfree2/css/style-responsive.css')}}" rel="stylesheet">*/
/* */
/* {% endblock %}    */
/*  {% block body %}*/
/*   <section id="container" >*/
/*       <!-- ***********************************************************************************************************************************************************/
/*       TOP BAR CONTENT & NOTIFICATIONS*/
/*       *********************************************************************************************************************************************************** -->*/
/*       <!--header start-->*/
/*       <header class="header black-bg">*/
/*               <div class="sidebar-toggle-box">*/
/*                   <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>*/
/*               </div>*/
/*             <!--logo start-->*/
/*             <a href="" class="logo"><b>DASHGUM FREE</b></a>*/
/*             <!--logo end-->*/
/*             <div class="nav notify-row" id="top_menu">*/
/*                 <!--  notification start -->*/
/*                 <ul class="nav top-menu">*/
/*                     <!-- settings start -->*/
/*                     <li class="dropdown">*/
/*                         <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                             <i class="fa fa-tasks"></i>*/
/*                             <span class="badge bg-theme">4</span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu extended tasks-bar">*/
/*                             <div class="notify-arrow notify-arrow-green"></div>*/
/*                             <li>*/
/*                                 <p class="green">You have 4 pending tasks</p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div class="task-info">*/
/*                                         <div class="desc">DashGum Admin Panel</div>*/
/*                                         <div class="percent">40%</div>*/
/*                                     </div>*/
/*                                     <div class="progress progress-striped">*/
/*                                         <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">*/
/*                                             <span class="sr-only">40% Complete (success)</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div class="task-info">*/
/*                                         <div class="desc">Database Update</div>*/
/*                                         <div class="percent">60%</div>*/
/*                                     </div>*/
/*                                     <div class="progress progress-striped">*/
/*                                         <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">*/
/*                                             <span class="sr-only">60% Complete (warning)</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div class="task-info">*/
/*                                         <div class="desc">Product Development</div>*/
/*                                         <div class="percent">80%</div>*/
/*                                     </div>*/
/*                                     <div class="progress progress-striped">*/
/*                                         <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">*/
/*                                             <span class="sr-only">80% Complete</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div class="task-info">*/
/*                                         <div class="desc">Payments Sent</div>*/
/*                                         <div class="percent">70%</div>*/
/*                                     </div>*/
/*                                     <div class="progress progress-striped">*/
/*                                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">*/
/*                                             <span class="sr-only">70% Complete (Important)</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="external">*/
/*                                 <a href="#">See All Tasks</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <!-- settings end -->*/
/*                     <!-- inbox dropdown start-->*/
/*                     <li id="header_inbox_bar" class="dropdown">*/
/*                         <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                             <i class="fa fa-envelope-o"></i>*/
/*                             <span class="badge bg-theme">5</span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu extended inbox">*/
/*                             <div class="notify-arrow notify-arrow-green"></div>*/
/*                             <li>*/
/*                                 <p class="green">You have 5 new messages</p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>*/
/*                                     <span class="subject">*/
/*                                     <span class="from">Zac Snider</span>*/
/*                                     <span class="time">Just now</span>*/
/*                                     </span>*/
/*                                     <span class="message">*/
/*                                         Hi mate, how is everything?*/
/*                                     </span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>*/
/*                                     <span class="subject">*/
/*                                     <span class="from">Divya Manian</span>*/
/*                                     <span class="time">40 mins.</span>*/
/*                                     </span>*/
/*                                     <span class="message">*/
/*                                      Hi, I need your help with this.*/
/*                                     </span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>*/
/*                                     <span class="subject">*/
/*                                     <span class="from">Dan Rogers</span>*/
/*                                     <span class="time">2 hrs.</span>*/
/*                                     </span>*/
/*                                     <span class="message">*/
/*                                         Love your new Dashboard.*/
/*                                     </span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>*/
/*                                     <span class="subject">*/
/*                                     <span class="from">Dj Sherman</span>*/
/*                                     <span class="time">4 hrs.</span>*/
/*                                     </span>*/
/*                                     <span class="message">*/
/*                                         Please, answer asap.*/
/*                                     </span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">See all messages</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <!-- inbox dropdown end -->*/
/*                 </ul>*/
/*                 <!--  notification end -->*/
/*             </div>*/
/*             <div class="top-menu">*/
/*             	<ul class="nav pull-right top-menu">*/
/*                     <li><a class="logout" href="login">Logout</a></li>*/
/*             	</ul>*/
/*             </div>*/
/*         </header>*/
/*       <!--header end-->*/
/*       */
/*       <!-- ***********************************************************************************************************************************************************/
/*       MAIN SIDEBAR MENU*/
/*       *********************************************************************************************************************************************************** -->*/
/*       <!--sidebar start-->*/
/*       <aside>*/
/*           <div id="sidebar"  class="nav-collapse ">*/
/*               <!-- sidebar menu start-->*/
/*               <ul class="sidebar-menu" id="nav-accordion">*/
/*               */
/*               	  <p class="centered"><a href="profile"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>*/
/*               	  <h5 class="centered">Marcel Newman</h5>*/
/*               	  	*/
/*                   <li class="mt">*/
/*                       <a href="">*/
/*                           <i class="fa fa-dashboard"></i>*/
/*                           <span>Dashboard</span>*/
/*                       </a>*/
/*                   </li>*/
/* */
/*                   <li class="sub-menu">*/
/*                       <a class="active" href="javascript:;" >*/
/*                           <i class="fa fa-desktop"></i>*/
/*                           <span>UI Elements</span>*/
/*                       </a>*/
/*                       <ul class="sub">*/
/*                           <li class="active"><a  href="general">General</a></li>*/
/*                           <li><a  href="buttons">Buttons</a></li>*/
/*                           <li><a  href="panels">Panels</a></li>*/
/*                       </ul>*/
/*                   </li>*/
/* */
/*                   <li class="sub-menu">*/
/*                       <a href="javascript:;" >*/
/*                           <i class="fa fa-cogs"></i>*/
/*                           <span>Components</span>*/
/*                       </a>*/
/*                       <ul class="sub">*/
/*                           <li><a  href="calendar">Calendar</a></li>*/
/*                           <li><a  href="gallery">Gallery</a></li>*/
/*                           <li><a  href="todo_list">Todo List</a></li>*/
/*                       </ul>*/
/*                   </li>*/
/*                   <li class="sub-menu">*/
/*                       <a href="javascript:;" >*/
/*                           <i class="fa fa-book"></i>*/
/*                           <span>Extra Pages</span>*/
/*                       </a>*/
/*                       <ul class="sub">*/
/*                           <li><a  href="blank">Blank Page</a></li>*/
/*                           <li><a  href="login">Login</a></li>*/
/*                           <li><a  href="lock_screen">Lock Screen</a></li>*/
/*                       </ul>*/
/*                   </li>*/
/*                   <li class="sub-menu">*/
/*                       <a href="javascript:;" >*/
/*                           <i class="fa fa-tasks"></i>*/
/*                           <span>Forms</span>*/
/*                       </a>*/
/*                       <ul class="sub">*/
/*                           <li><a  href="form_component">Form Components</a></li>*/
/*                       </ul>*/
/*                   </li>*/
/*                   <li class="sub-menu">*/
/*                       <a href="javascript:;" >*/
/*                           <i class="fa fa-th"></i>*/
/*                           <span>Data Tables</span>*/
/*                       </a>*/
/*                       <ul class="sub">*/
/*                           <li><a  href="basic_table">Basic Table</a></li>*/
/*                           <li><a  href="responsive_table">Responsive Table</a></li>*/
/*                       </ul>*/
/*                   </li>*/
/*                   <li class="sub-menu">*/
/*                       <a href="javascript:;" >*/
/*                           <i class=" fa fa-bar-chart-o"></i>*/
/*                           <span>Charts</span>*/
/*                       </a>*/
/*                       <ul class="sub">*/
/*                           <li><a  href="morris">Morris</a></li>*/
/*                           <li><a  href="chartjs">Chartjs</a></li>*/
/*                       </ul>*/
/*                   </li>*/
/* */
/*               </ul>*/
/*               <!-- sidebar menu end-->*/
/*           </div>*/
/*       </aside>*/
/*       <!--sidebar end-->*/
/*       */
/*       <!-- ***********************************************************************************************************************************************************/
/*       MAIN CONTENT*/
/*       *********************************************************************************************************************************************************** -->*/
/*       <!--main content start-->*/
/*       <section id="main-content">*/
/*           <section class="wrapper">*/
/*       		<div class="row mt">*/
/*       			<div class="col-lg-6 col-md-6 col-sm-12">*/
/*       				<! -- BASIC PROGRESS BARS -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Basic Progress Bars</h4>*/
/* 	      				<div class="progress">*/
/* 						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">*/
/* 						    <span class="sr-only">40% Complete (success)</span>*/
/* 						  </div>*/
/* 						</div>*/
/* 						<div class="progress">*/
/* 						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">*/
/* 						    <span class="sr-only">20% Complete</span>*/
/* 						  </div>*/
/* 						</div>*/
/* 						<div class="progress">*/
/* 						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">*/
/* 						    <span class="sr-only">60% Complete (warning)</span>*/
/* 						  </div>*/
/* 						</div>*/
/* 						<div class="progress">*/
/* 						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">*/
/* 						    <span class="sr-only">80% Complete</span>*/
/* 						  </div>*/
/* 						</div>*/
/*       				</div><!--/showback -->*/
/*       				*/
/*       				<! -- STRIPPED PROGRESS BARS -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Stripped Progress Bars</h4>*/
/* 						<div class="progress progress-striped">*/
/* 						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">*/
/* 						    <span class="sr-only">40% Complete (success)</span>*/
/* 						  </div>*/
/* 						</div>*/
/* 						<div class="progress progress-striped">*/
/* 						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">*/
/* 						    <span class="sr-only">20% Complete</span>*/
/* 						  </div>*/
/* 						</div>*/
/* 						<div class="progress progress-striped">*/
/* 						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">*/
/* 						    <span class="sr-only">60% Complete (warning)</span>*/
/* 						  </div>*/
/* 						</div>*/
/* 						<div class="progress progress-striped">*/
/* 						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">*/
/* 						    <span class="sr-only">80% Complete (danger)</span>*/
/* 						  </div>*/
/* 						</div>      				*/
/* 					</div><!-- /showback -->*/
/* 					*/
/*       				<! -- ANIMATED PROGRESS BARS -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Animated Progress Bars</h4>*/
/* 	      				<div class="progress progress-striped active">*/
/* 						  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">*/
/* 						    <span class="sr-only">45% Complete</span>*/
/* 						  </div>*/
/* 						</div>*/
/*       				</div><!-- /showback -->*/
/*       				*/
/*       				<! -- MODALS -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Modal Example</h4>*/
/* 						<!-- Button trigger modal -->*/
/* 						<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">*/
/* 						  Launch Modal*/
/* 						</button>*/
/* 						*/
/* 						<!-- Modal -->*/
/* 						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* 						  <div class="modal-dialog">*/
/* 						    <div class="modal-content">*/
/* 						      <div class="modal-header">*/
/* 						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/* 						        <h4 class="modal-title" id="myModalLabel">Modal title</h4>*/
/* 						      </div>*/
/* 						      <div class="modal-body">*/
/* 						        Hi there, I am a Modal Example for Dashgum Admin Panel.*/
/* 						      </div>*/
/* 						      <div class="modal-footer">*/
/* 						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/* 						        <button type="button" class="btn btn-primary">Save changes</button>*/
/* 						      </div>*/
/* 						    </div>*/
/* 						  </div>*/
/* 						</div>      				*/
/*       				</div><!-- /showback -->*/
/*       				*/
/*       				<! -- GRITTER NOTICES -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Gritter Examples</h4>*/
/* 							<p>Click on below buttons to check it out.</p>*/
/* 							<a id="add-regular" class="btn btn-default btn-sm" href="javascript:;">Regular</a>*/
/* 							<a id="add-sticky" class="btn btn-success  btn-sm" href="javascript:;">Sticky</a>*/
/* 							<a id="add-without-image" class="btn btn-info  btn-sm" href="javascript:;">Imageless</a>*/
/* 							<a id="add-gritter-light" class="btn btn-warning  btn-sm" href="javascript:;">Light</a>*/
/* 							<a id="remove-all" class="btn btn-danger  btn-sm" href="general#">Remove all</a>*/
/*       				</div><!-- /showback -->*/
/*       				*/
/*       			</div><! --/col-lg-6 -->*/
/*       			*/
/*       			*/
/*       			<div class="col-lg-6 col-md-6 col-sm-12">*/
/*       				<! -- ALERTS EXAMPLES -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Alerts Examples</h4>*/
/* 							<div class="alert alert-success"><b>Well done!</b> You successfully read this important alert message.</div>*/
/* 							<div class="alert alert-info"><b>Heads up!</b> This alert needs your attention, but it's not super important.</div>*/
/* 							<div class="alert alert-warning"><b>Warning!</b> Better check yourself, you're not looking too good.</div>*/
/* 							<div class="alert alert-danger"><b>Oh snap!</b> Change a few things up and try submitting again.</div>      				*/
/*       				</div><!-- /showback -->*/
/*       				*/
/*       				<! -- DISMISSABLE ALERT -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Dismissable Alert</h4>*/
/* 						<div class="alert alert-warning alert-dismissable">*/
/* 						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/* 						  <strong>Warning!</strong> Better check yourself, you're not looking too good.*/
/* 						</div>      				*/
/*       				</div><!-- /showback -->*/
/*       				*/
/*       				<! -- BADGES -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Badges</h4>*/
/* 						<span class="badge">5</span>*/
/* 						<span class="badge bg-primary">10</span>*/
/* 						<span class="badge bg-success">15</span>*/
/* 						<span class="badge bg-info">20</span>*/
/* 						<span class="badge bg-inverse">25</span>*/
/* 						<span class="badge bg-warning">30</span>*/
/* 						<span class="badge bg-important">35</span>*/
/*       				</div><!-- /showback -->*/
/*       				*/
/*       				<! -- LABELS -->*/
/*       				<div class="showback">*/
/*       					<h4><i class="fa fa-angle-right"></i> Labels</h4>*/
/* 							<span class="label label-default">label</span>*/
/* 							<span class="label label-primary">Primary</span>*/
/* 							<span class="label label-success">Success</span>*/
/* 							<span class="label label-info">Info</span>*/
/* 							<span class="label label-warning">Warning</span>*/
/* 							<span class="label label-danger">Danger</span>*/
/*                     </div><!-- /showback -->*/
/*       			*/
/*       			</div><!-- /col-lg-6 -->*/
/*       			*/
/*       		</div><!--/ row -->*/
/*           </section><! --/wrapper -->*/
/*       </section><!-- /MAIN CONTENT -->*/
/* */
/*       <!--main content end-->*/
/*     {% endblock %}*/
/* */
/*    {% block javascripts %}*/
/*      {{ parent() }}*/
/*   <script>*/
/*       //custom select box*/
/* */
/*       $(function(){*/
/*           $('select.styled').customSelect();*/
/*       });*/
/* */
/*   </script>*/
/* */
/*          {% endblock %}*/
