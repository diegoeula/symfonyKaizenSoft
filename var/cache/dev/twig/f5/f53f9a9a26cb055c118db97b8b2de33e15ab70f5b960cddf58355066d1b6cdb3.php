<?php

/* ControlBundle:dashgumfree2:index.html.twig */
class __TwigTemplate_98d24e6ecf1e46bd48d061acd370fb0663db39a197f242ccb623a4e6803a0ee0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ControlBundle:dashgumfree2:index.html.twig", 1);
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
        $__internal_eb0de6debbfcb289b82b80251dea83448f3ea0beb858b99cf851997bfd81dcf3 = $this->env->getExtension("native_profiler");
        $__internal_eb0de6debbfcb289b82b80251dea83448f3ea0beb858b99cf851997bfd81dcf3->enter($__internal_eb0de6debbfcb289b82b80251dea83448f3ea0beb858b99cf851997bfd81dcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:dashgumfree2:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb0de6debbfcb289b82b80251dea83448f3ea0beb858b99cf851997bfd81dcf3->leave($__internal_eb0de6debbfcb289b82b80251dea83448f3ea0beb858b99cf851997bfd81dcf3_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7636c365746c8a43c45c56e4f474159e4acb677c3cc5a50eeb46d1bf36bea3b5 = $this->env->getExtension("native_profiler");
        $__internal_7636c365746c8a43c45c56e4f474159e4acb677c3cc5a50eeb46d1bf36bea3b5->enter($__internal_7636c365746c8a43c45c56e4f474159e4acb677c3cc5a50eeb46d1bf36bea3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
   ";
        
        $__internal_7636c365746c8a43c45c56e4f474159e4acb677c3cc5a50eeb46d1bf36bea3b5->leave($__internal_7636c365746c8a43c45c56e4f474159e4acb677c3cc5a50eeb46d1bf36bea3b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_848b6502c8574da430279d5fd68fcb9bf42454cf9c7cfa03184b7e82c417e37c = $this->env->getExtension("native_profiler");
        $__internal_848b6502c8574da430279d5fd68fcb9bf42454cf9c7cfa03184b7e82c417e37c->enter($__internal_848b6502c8574da430279d5fd68fcb9bf42454cf9c7cfa03184b7e82c417e37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <section id=\"container\" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class=\"header black-bg\">
              <div class=\"sidebar-toggle-box\">
                  <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
              </div>
            <!--logo start-->
            <a href=\"\" class=\"logo\"><b>Tablero Control</b></a>
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
                                    <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-zac.jpg"), "html", null, true);
        echo "\"></span>
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
                                    <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-divya.jpg"), "html", null, true);
        echo "\"></span>
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
                                    <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-danro.jpg"), "html", null, true);
        echo "\"></span>
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
                                    <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-sherman.jpg"), "html", null, true);
        echo "\"></span>
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
              
              \t  <p class=\"centered\"><a href=\"profile\"><img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-sam.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" width=\"60\"></a></p>
              \t  <h5 class=\"centered\">Marcel Newman</h5>
              \t  \t
                  <li class=\"mt\">
                      <a class=\"active\" href=\"\">
                          <i class=\"fa fa-dashboard\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-desktop\"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"general\">General</a></li>
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

              <div class=\"row\">
                  <div class=\"col-lg-9 main-chart\">
                  
                  \t<div class=\"row mtbox\">
                  \t\t<div class=\"col-md-2 col-sm-2 col-md-offset-1 box0\">
                  \t\t\t<div class=\"box1\">
\t\t\t\t\t  \t\t\t<span class=\"li_eye\"></span>
\t\t\t\t\t  \t\t\t<h3>0</h3>
                  \t\t\t</div>
\t\t\t\t\t  \t\t\t<p>933 People liked your page the last 24hs. Whoohoo!</p>
                  \t\t</div>
                  \t\t<div class=\"col-md-2 col-sm-2 box0\">
                  \t\t\t<div class=\"box1\">
\t\t\t\t\t  \t\t\t<span class=\"li_cloud\"></span>
\t\t\t\t\t  \t\t\t<h3>+48</h3>
                  \t\t\t</div>
\t\t\t\t\t  \t\t\t<p>48 New files were added in your cloud storage.</p>
                  \t\t</div>
                  \t\t<div class=\"col-md-2 col-sm-2 box0\">
                  \t\t\t<div class=\"box1\">
\t\t\t\t\t  \t\t\t<span class=\"li_stack\"></span>
\t\t\t\t\t  \t\t\t<h3>23</h3>
                  \t\t\t</div>
\t\t\t\t\t  \t\t\t<p>You have 23 unread messages in your inbox.</p>
                  \t\t</div>
                  \t\t<div class=\"col-md-2 col-sm-2 box0\">
                  \t\t\t<div class=\"box1\">
\t\t\t\t\t  \t\t\t<span class=\"li_news\"></span>
\t\t\t\t\t  \t\t\t<h3>+10</h3>
                  \t\t\t</div>
\t\t\t\t\t  \t\t\t<p>More than 10 news were added in your reader.</p>
                  \t\t</div>
                  \t\t<div class=\"col-md-2 col-sm-2 box0\">
                  \t\t\t<div class=\"box1\">
\t\t\t\t\t  \t\t\t<span class=\"li_data\"></span>
\t\t\t\t\t  \t\t\t<h3>OK!</h3>
                  \t\t\t</div>
\t\t\t\t\t  \t\t\t<p>Your server is working perfectly. Relax & enjoy.</p>
                  \t\t</div>
                  \t
                  \t</div><!-- /row mt -->\t
                  
                      
                      <div class=\"row mt\">
                      <!-- SERVER STATUS PANELS -->
                      \t<div class=\"col-md-4 col-sm-4 mb\">
                      \t\t<div class=\"white-panel pn donut-chart\">
                      \t\t\t<div class=\"white-header\">
\t\t\t\t\t\t  \t\t\t<h5>SERVER LOAD</h5>
                      \t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-6 goleft\">
\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-database\"></i> 70%</p>
\t\t\t\t\t\t\t\t\t</div>
\t                      \t\t</div>
\t\t\t\t\t\t\t\t<canvas id=\"serverstatus01\" height=\"120\" width=\"120\"></canvas>
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tvar doughnutData = [
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\tvalue: 70,
\t\t\t\t\t\t\t\t\t\t\t\tcolor:\"#68dff0\"
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\tvalue : 30,
\t\t\t\t\t\t\t\t\t\t\t\tcolor : \"#fdfdfd\"
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t];
\t\t\t\t\t\t\t\t\t\tvar myDoughnut = new Chart(document.getElementById(\"serverstatus01\").getContext(\"2d\")).Doughnut(doughnutData);
\t\t\t\t\t\t\t\t</script>
\t                      \t</div><! --/grey-panel -->
                      \t</div><!-- /col-md-4-->
                      \t

                      \t<div class=\"col-md-4 col-sm-4 mb\">
                      \t\t<div class=\"white-panel pn\">
                      \t\t\t<div class=\"white-header\">
\t\t\t\t\t\t  \t\t\t<h5>TOP PRODUCT</h5>
                      \t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-6 goleft\">
\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-heart\"></i> 122</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-6\"></div>
\t                      \t\t</div>
\t                      \t\t<div class=\"centered\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/product.png"), "html", null, true);
        echo "\" width=\"120\">
\t                      \t\t</div>
                      \t\t</div>
                      \t</div><!-- /col-md-4 -->
                      \t
\t\t\t\t\t\t<div class=\"col-md-4 mb\">
\t\t\t\t\t\t\t<!-- WHITE PANEL - TOP USER -->
\t\t\t\t\t\t\t<div class=\"white-panel pn\">
\t\t\t\t\t\t\t\t<div class=\"white-header\">
\t\t\t\t\t\t\t\t\t<h5>TOP USER</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p><img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-zac.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" width=\"80\"></p>
\t\t\t\t\t\t\t\t<p><b>Zac Snider</b></p>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<p class=\"small mt\">MEMBER SINCE</p>
\t\t\t\t\t\t\t\t\t\t<p>2012</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<p class=\"small mt\">TOTAL SPEND</p>
\t\t\t\t\t\t\t\t\t\t<p>\$ 47,60</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- /col-md-4 -->
                      \t

                    </div><!-- /row -->
                    
                    \t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<!-- TWITTER PANEL -->
\t\t\t\t\t\t<div class=\"col-md-4 mb\">
                      \t\t<div class=\"darkblue-panel pn\">
                      \t\t\t<div class=\"darkblue-header\">
\t\t\t\t\t\t  \t\t\t<h5>DROPBOX STATICS</h5>
                      \t\t\t</div>
\t\t\t\t\t\t\t\t<canvas id=\"serverstatus02\" height=\"120\" width=\"120\"></canvas>
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tvar doughnutData = [
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\tvalue: 60,
\t\t\t\t\t\t\t\t\t\t\t\tcolor:\"#68dff0\"
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\tvalue : 40,
\t\t\t\t\t\t\t\t\t\t\t\tcolor : \"#444c57\"
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t];
\t\t\t\t\t\t\t\t\t\tvar myDoughnut = new Chart(document.getElementById(\"serverstatus02\").getContext(\"2d\")).Doughnut(doughnutData);
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t<p>April 17, 2014</p>
\t\t\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t<h5><i class=\"fa fa-hdd-o\"></i> 17 GB</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t<h5>60% Used</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</footer>
                      \t\t</div><! -- /darkblue panel -->
\t\t\t\t\t\t</div><!-- /col-md-4 -->
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 mb\">
\t\t\t\t\t\t\t<!-- INSTAGRAM PANEL -->
\t\t\t\t\t\t\t<div class=\"instagram-panel pn\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram fa-4x\"></i>
\t\t\t\t\t\t\t\t<p>@THISISYOU<br/>
\t\t\t\t\t\t\t\t\t5 min. ago
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p><i class=\"fa fa-comment\"></i> 18 | <i class=\"fa fa-heart\"></i> 49</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- /col-md-4 -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 mb\">
\t\t\t\t\t\t\t<!-- REVENUE PANEL -->
\t\t\t\t\t\t\t<div class=\"darkblue-panel pn\">
\t\t\t\t\t\t\t\t<div class=\"darkblue-header\">
\t\t\t\t\t\t\t\t\t<h5>REVENUE</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"chart mt\">
\t\t\t\t\t\t\t\t\t<div class=\"sparkline\" data-type=\"line\" data-resize=\"true\" data-height=\"75\" data-width=\"90%\" data-line-width=\"1\" data-line-color=\"#fff\" data-spot-color=\"#fff\" data-fill-color=\"\" data-highlight-line-color=\"#fff\" data-spot-radius=\"4\" data-data=\"[200,135,667,333,526,996,564,123,890,464,655]\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mt\"><b>\$ 17,980</b><br/>Month Income</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- /col-md-4 -->
\t\t\t\t\t\t
\t\t\t\t\t</div><!-- /row -->
\t\t\t\t\t
\t\t\t\t\t<div class=\"row mt\">
                      <!--CUSTOM CHART START -->
                      <div class=\"border-head\">
                          <h3>VISITS</h3>
                      </div>
                      <div class=\"custom-bar-chart\">
                          <ul class=\"y-axis\">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class=\"bar\">
                              <div class=\"title\">JAN</div>
                              <div class=\"value tooltips\" data-original-title=\"8.500\" data-toggle=\"tooltip\" data-placement=\"top\">85%</div>
                          </div>
                          <div class=\"bar \">
                              <div class=\"title\">FEB</div>
                              <div class=\"value tooltips\" data-original-title=\"5.000\" data-toggle=\"tooltip\" data-placement=\"top\">50%</div>
                          </div>
                          <div class=\"bar \">
                              <div class=\"title\">MAR</div>
                              <div class=\"value tooltips\" data-original-title=\"6.000\" data-toggle=\"tooltip\" data-placement=\"top\">60%</div>
                          </div>
                          <div class=\"bar \">
                              <div class=\"title\">APR</div>
                              <div class=\"value tooltips\" data-original-title=\"4.500\" data-toggle=\"tooltip\" data-placement=\"top\">45%</div>
                          </div>
                          <div class=\"bar\">
                              <div class=\"title\">MAY</div>
                              <div class=\"value tooltips\" data-original-title=\"3.200\" data-toggle=\"tooltip\" data-placement=\"top\">32%</div>
                          </div>
                          <div class=\"bar \">
                              <div class=\"title\">JUN</div>
                              <div class=\"value tooltips\" data-original-title=\"6.200\" data-toggle=\"tooltip\" data-placement=\"top\">62%</div>
                          </div>
                          <div class=\"bar\">
                              <div class=\"title\">JUL</div>
                              <div class=\"value tooltips\" data-original-title=\"7.500\" data-toggle=\"tooltip\" data-placement=\"top\">75%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
\t\t\t\t\t</div><!-- /row -->\t
\t\t\t\t\t
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class=\"col-lg-3 ds\">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
\t\t\t\t\t\t<h3>NOTIFICATIONS</h3>
                                        
                      <!-- First Action -->
                      <div class=\"desc\">
                      \t<div class=\"thumb\">
                      \t\t<span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
                      \t</div>
                      \t<div class=\"details\">
                      \t\t<p><muted>2 Minutes Ago</muted><br/>
                      \t\t   <a href=\"#\">James Brown</a> subscribed to your newsletter.<br/>
                      \t\t</p>
                      \t</div>
                      </div>
                      <!-- Second Action -->
                      <div class=\"desc\">
                      \t<div class=\"thumb\">
                      \t\t<span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
                      \t</div>
                      \t<div class=\"details\">
                      \t\t<p><muted>3 Hours Ago</muted><br/>
                      \t\t   <a href=\"#\">Diana Kennedy</a> purchased a year subscription.<br/>
                      \t\t</p>
                      \t</div>
                      </div>
                      <!-- Third Action -->
                      <div class=\"desc\">
                      \t<div class=\"thumb\">
                      \t\t<span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
                      \t</div>
                      \t<div class=\"details\">
                      \t\t<p><muted>7 Hours Ago</muted><br/>
                      \t\t   <a href=\"#\">Brandon Page</a> purchased a year subscription.<br/>
                      \t\t</p>
                      \t</div>
                      </div>
                      <!-- Fourth Action -->
                      <div class=\"desc\">
                      \t<div class=\"thumb\">
                      \t\t<span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
                      \t</div>
                      \t<div class=\"details\">
                      \t\t<p><muted>11 Hours Ago</muted><br/>
                      \t\t   <a href=\"#\">Mark Twain</a> commented your post.<br/>
                      \t\t</p>
                      \t</div>
                      </div>
                      <!-- Fifth Action -->
                      <div class=\"desc\">
                      \t<div class=\"thumb\">
                      \t\t<span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
                      \t</div>
                      \t<div class=\"details\">
                      \t\t<p><muted>18 Hours Ago</muted><br/>
                      \t\t   <a href=\"#\">Daniel Pratt</a> purchased a wallet in your store.<br/>
                      \t\t</p>
                      \t</div>
                      </div>

                       <!-- USERS ONLINE SECTION -->
\t\t\t\t\t\t<h3>TEAM MEMBERS</h3>
                      <!-- First Member -->
                      <div class=\"desc\">
                      \t<div class=\"thumb\">
                      \t\t<img class=\"img-circle\" src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-divya.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
                      \t</div>
                      \t<div class=\"details\">
                      \t\t<p><a href=\"#\">DIVYA MANIAN</a><br/>
                      \t\t   <muted>Available</muted>
                      \t\t</p>
                      \t</div>
                      </div>
                      <!-- Second Member -->
                      <div class=\"desc\">
                      \t<div class=\"thumb\">
                      \t\t<img class=\"img-circle\" src=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-sherman.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
                      \t</div>
                      \t<div class=\"details\">
                      \t\t<p><a href=\"#\">DJ SHERMAN</a><br/>
                      \t\t   <muted>I am Busy</muted>
                      \t\t</p>
                      \t</div>
                      </div>
                      <!-- Third Member -->
                      <div class=\"desc\">
                      \t<div class=\"thumb\">
                      \t\t<img class=\"img-circle\" src=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-danro.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
                      \t</div>
                      \t<div class=\"details\">
                      \t\t<p><a href=\"#\">DAN ROGERS</a><br/>
                      \t\t   <muted>Available</muted>
                      \t\t</p>
                      \t</div>
                      </div>
                      <!-- Fourth Member -->
                      <div class=\"desc\">
                      \t<div class=\"thumb\">
                      \t\t<img class=\"img-circle\" src=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-zac.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
                      \t</div>
                      \t<div class=\"details\">
                      \t\t<p><a href=\"#\">Zac Sniders</a><br/>
                      \t\t   <muted>Available</muted>
                      \t\t</p>
                      \t</div>
                      </div>
                      <!-- Fifth Member -->
                      <div class=\"desc\">
                      \t<div class=\"thumb\">
                      \t\t<img class=\"img-circle\" src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-sam.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
                      \t</div>
                      \t<div class=\"details\">
                      \t\t<p><a href=\"#\">Marcel Newman</a><br/>
                      \t\t   <muted>Available</muted>
                      \t\t</p>
                      \t</div>
                      </div>

                        <!-- CALENDAR-->
                        <div id=\"calendar\" class=\"mb\">
                            <div class=\"panel green-panel no-margin\">
                                <div class=\"panel-body\">
                                    <div id=\"date-popover\" class=\"popover top\" style=\"cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;\">
                                        <div class=\"arrow\"></div>
                                        <h3 class=\"popover-title\" style=\"disadding: none;\"></h3>
                                        <div id=\"date-popover-content\" class=\"popover-content\"></div>
                                    </div>
                                    <div id=\"my-calendar\"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      ";
        
        $__internal_848b6502c8574da430279d5fd68fcb9bf42454cf9c7cfa03184b7e82c417e37c->leave($__internal_848b6502c8574da430279d5fd68fcb9bf42454cf9c7cfa03184b7e82c417e37c_prof);

    }

    // line 631
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d3c64d4fbddbc89fed314d91eefd5ab77ea65652d139c7fd67de87d7196925d = $this->env->getExtension("native_profiler");
        $__internal_2d3c64d4fbddbc89fed314d91eefd5ab77ea65652d139c7fd67de87d7196925d->enter($__internal_2d3c64d4fbddbc89fed314d91eefd5ab77ea65652d139c7fd67de87d7196925d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 632
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!--script for this page-->
    <script src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/sparkline-chart.js"), "html", null, true);
        echo "\"></script>    
\t<script src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/zabuto_calendar.js"), "html", null, true);
        echo "\"></script>\t
\t
\t<script type=\"text/javascript\">
        \$(document).ready(function () {
        var unique_id = \$.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href=\"http://blacktie.co\" target=\"_blank\" style=\"color:#ffd777\">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: \"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-sam.jpg"), "html", null, true);
        echo "\",
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
\t</script>
\t
\t<script type=\"application/javascript\">
        \$(document).ready(function () {
            \$(\"#date-popover\").popover({html: true, trigger: \"manual\"});
            \$(\"#date-popover\").hide();
            \$(\"#date-popover\").click(function (e) {
                \$(this).hide();
            });
        
            \$(\"#my-calendar\").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: \"show_data.php?action=1\",
                    modal: true
                },
                legend: [
                    {type: \"text\", label: \"Special event\", badge: \"00\"},
                    {type: \"block\", label: \"Regular event\", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            \$(\"#date-popover\").hide();
            var nav = \$(\"#\" + id).data(\"navigation\");
            var to = \$(\"#\" + id).data(\"to\");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  
";
        
        $__internal_2d3c64d4fbddbc89fed314d91eefd5ab77ea65652d139c7fd67de87d7196925d->leave($__internal_2d3c64d4fbddbc89fed314d91eefd5ab77ea65652d139c7fd67de87d7196925d_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:dashgumfree2:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  754 => 646,  741 => 636,  737 => 635,  730 => 632,  724 => 631,  687 => 600,  673 => 589,  659 => 578,  645 => 567,  631 => 556,  431 => 359,  417 => 348,  242 => 176,  203 => 140,  188 => 128,  173 => 116,  158 => 104,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{parent()}}*/
/*    {% endblock %}    */
/*  {% block body %}*/
/* */
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
/*             <a href="" class="logo"><b>Tablero Control</b></a>*/
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
/*                                     <span class="photo"><img alt="avatar" src="{{asset('dashgumfree2/img/ui-zac.jpg')}}"></span>*/
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
/*                                     <span class="photo"><img alt="avatar" src="{{asset('dashgumfree2/img/ui-divya.jpg')}}"></span>*/
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
/*                                     <span class="photo"><img alt="avatar" src="{{asset('dashgumfree2/img/ui-danro.jpg')}}"></span>*/
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
/*                                     <span class="photo"><img alt="avatar" src="{{asset('dashgumfree2/img/ui-sherman.jpg')}}"></span>*/
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
/*               	  <p class="centered"><a href="profile"><img src="{{asset('dashgumfree2/img/ui-sam.jpg')}}" class="img-circle" width="60"></a></p>*/
/*               	  <h5 class="centered">Marcel Newman</h5>*/
/*               	  	*/
/*                   <li class="mt">*/
/*                       <a class="active" href="">*/
/*                           <i class="fa fa-dashboard"></i>*/
/*                           <span>Dashboard</span>*/
/*                       </a>*/
/*                   </li>*/
/* */
/*                   <li class="sub-menu">*/
/*                       <a href="javascript:;" >*/
/*                           <i class="fa fa-desktop"></i>*/
/*                           <span>UI Elements</span>*/
/*                       </a>*/
/*                       <ul class="sub">*/
/*                           <li><a  href="general">General</a></li>*/
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
/* */
/*               <div class="row">*/
/*                   <div class="col-lg-9 main-chart">*/
/*                   */
/*                   	<div class="row mtbox">*/
/*                   		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">*/
/*                   			<div class="box1">*/
/* 					  			<span class="li_eye"></span>*/
/* 					  			<h3>0</h3>*/
/*                   			</div>*/
/* 					  			<p>933 People liked your page the last 24hs. Whoohoo!</p>*/
/*                   		</div>*/
/*                   		<div class="col-md-2 col-sm-2 box0">*/
/*                   			<div class="box1">*/
/* 					  			<span class="li_cloud"></span>*/
/* 					  			<h3>+48</h3>*/
/*                   			</div>*/
/* 					  			<p>48 New files were added in your cloud storage.</p>*/
/*                   		</div>*/
/*                   		<div class="col-md-2 col-sm-2 box0">*/
/*                   			<div class="box1">*/
/* 					  			<span class="li_stack"></span>*/
/* 					  			<h3>23</h3>*/
/*                   			</div>*/
/* 					  			<p>You have 23 unread messages in your inbox.</p>*/
/*                   		</div>*/
/*                   		<div class="col-md-2 col-sm-2 box0">*/
/*                   			<div class="box1">*/
/* 					  			<span class="li_news"></span>*/
/* 					  			<h3>+10</h3>*/
/*                   			</div>*/
/* 					  			<p>More than 10 news were added in your reader.</p>*/
/*                   		</div>*/
/*                   		<div class="col-md-2 col-sm-2 box0">*/
/*                   			<div class="box1">*/
/* 					  			<span class="li_data"></span>*/
/* 					  			<h3>OK!</h3>*/
/*                   			</div>*/
/* 					  			<p>Your server is working perfectly. Relax & enjoy.</p>*/
/*                   		</div>*/
/*                   	*/
/*                   	</div><!-- /row mt -->	*/
/*                   */
/*                       */
/*                       <div class="row mt">*/
/*                       <!-- SERVER STATUS PANELS -->*/
/*                       	<div class="col-md-4 col-sm-4 mb">*/
/*                       		<div class="white-panel pn donut-chart">*/
/*                       			<div class="white-header">*/
/* 						  			<h5>SERVER LOAD</h5>*/
/*                       			</div>*/
/* 								<div class="row">*/
/* 									<div class="col-sm-6 col-xs-6 goleft">*/
/* 										<p><i class="fa fa-database"></i> 70%</p>*/
/* 									</div>*/
/* 	                      		</div>*/
/* 								<canvas id="serverstatus01" height="120" width="120"></canvas>*/
/* 								<script>*/
/* 									var doughnutData = [*/
/* 											{*/
/* 												value: 70,*/
/* 												color:"#68dff0"*/
/* 											},*/
/* 											{*/
/* 												value : 30,*/
/* 												color : "#fdfdfd"*/
/* 											}*/
/* 										];*/
/* 										var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);*/
/* 								</script>*/
/* 	                      	</div><! --/grey-panel -->*/
/*                       	</div><!-- /col-md-4-->*/
/*                       	*/
/* */
/*                       	<div class="col-md-4 col-sm-4 mb">*/
/*                       		<div class="white-panel pn">*/
/*                       			<div class="white-header">*/
/* 						  			<h5>TOP PRODUCT</h5>*/
/*                       			</div>*/
/* 								<div class="row">*/
/* 									<div class="col-sm-6 col-xs-6 goleft">*/
/* 										<p><i class="fa fa-heart"></i> 122</p>*/
/* 									</div>*/
/* 									<div class="col-sm-6 col-xs-6"></div>*/
/* 	                      		</div>*/
/* 	                      		<div class="centered">*/
/* 										<img src="{{asset('dashgumfree2/img/product.png')}}" width="120">*/
/* 	                      		</div>*/
/*                       		</div>*/
/*                       	</div><!-- /col-md-4 -->*/
/*                       	*/
/* 						<div class="col-md-4 mb">*/
/* 							<!-- WHITE PANEL - TOP USER -->*/
/* 							<div class="white-panel pn">*/
/* 								<div class="white-header">*/
/* 									<h5>TOP USER</h5>*/
/* 								</div>*/
/* 								<p><img src="{{asset('dashgumfree2/img/ui-zac.jpg')}}" class="img-circle" width="80"></p>*/
/* 								<p><b>Zac Snider</b></p>*/
/* 								<div class="row">*/
/* 									<div class="col-md-6">*/
/* 										<p class="small mt">MEMBER SINCE</p>*/
/* 										<p>2012</p>*/
/* 									</div>*/
/* 									<div class="col-md-6">*/
/* 										<p class="small mt">TOTAL SPEND</p>*/
/* 										<p>$ 47,60</p>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div><!-- /col-md-4 -->*/
/*                       	*/
/* */
/*                     </div><!-- /row -->*/
/*                     */
/*                     				*/
/* 					<div class="row">*/
/* 						<!-- TWITTER PANEL -->*/
/* 						<div class="col-md-4 mb">*/
/*                       		<div class="darkblue-panel pn">*/
/*                       			<div class="darkblue-header">*/
/* 						  			<h5>DROPBOX STATICS</h5>*/
/*                       			</div>*/
/* 								<canvas id="serverstatus02" height="120" width="120"></canvas>*/
/* 								<script>*/
/* 									var doughnutData = [*/
/* 											{*/
/* 												value: 60,*/
/* 												color:"#68dff0"*/
/* 											},*/
/* 											{*/
/* 												value : 40,*/
/* 												color : "#444c57"*/
/* 											}*/
/* 										];*/
/* 										var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);*/
/* 								</script>*/
/* 								<p>April 17, 2014</p>*/
/* 								<footer>*/
/* 									<div class="pull-left">*/
/* 										<h5><i class="fa fa-hdd-o"></i> 17 GB</h5>*/
/* 									</div>*/
/* 									<div class="pull-right">*/
/* 										<h5>60% Used</h5>*/
/* 									</div>*/
/* 								</footer>*/
/*                       		</div><! -- /darkblue panel -->*/
/* 						</div><!-- /col-md-4 -->*/
/* 						*/
/* 						*/
/* 						<div class="col-md-4 mb">*/
/* 							<!-- INSTAGRAM PANEL -->*/
/* 							<div class="instagram-panel pn">*/
/* 								<i class="fa fa-instagram fa-4x"></i>*/
/* 								<p>@THISISYOU<br/>*/
/* 									5 min. ago*/
/* 								</p>*/
/* 								<p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>*/
/* 							</div>*/
/* 						</div><!-- /col-md-4 -->*/
/* 						*/
/* 						<div class="col-md-4 col-sm-4 mb">*/
/* 							<!-- REVENUE PANEL -->*/
/* 							<div class="darkblue-panel pn">*/
/* 								<div class="darkblue-header">*/
/* 									<h5>REVENUE</h5>*/
/* 								</div>*/
/* 								<div class="chart mt">*/
/* 									<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>*/
/* 								</div>*/
/* 								<p class="mt"><b>$ 17,980</b><br/>Month Income</p>*/
/* 							</div>*/
/* 						</div><!-- /col-md-4 -->*/
/* 						*/
/* 					</div><!-- /row -->*/
/* 					*/
/* 					<div class="row mt">*/
/*                       <!--CUSTOM CHART START -->*/
/*                       <div class="border-head">*/
/*                           <h3>VISITS</h3>*/
/*                       </div>*/
/*                       <div class="custom-bar-chart">*/
/*                           <ul class="y-axis">*/
/*                               <li><span>10.000</span></li>*/
/*                               <li><span>8.000</span></li>*/
/*                               <li><span>6.000</span></li>*/
/*                               <li><span>4.000</span></li>*/
/*                               <li><span>2.000</span></li>*/
/*                               <li><span>0</span></li>*/
/*                           </ul>*/
/*                           <div class="bar">*/
/*                               <div class="title">JAN</div>*/
/*                               <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>*/
/*                           </div>*/
/*                           <div class="bar ">*/
/*                               <div class="title">FEB</div>*/
/*                               <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>*/
/*                           </div>*/
/*                           <div class="bar ">*/
/*                               <div class="title">MAR</div>*/
/*                               <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>*/
/*                           </div>*/
/*                           <div class="bar ">*/
/*                               <div class="title">APR</div>*/
/*                               <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>*/
/*                           </div>*/
/*                           <div class="bar">*/
/*                               <div class="title">MAY</div>*/
/*                               <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>*/
/*                           </div>*/
/*                           <div class="bar ">*/
/*                               <div class="title">JUN</div>*/
/*                               <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>*/
/*                           </div>*/
/*                           <div class="bar">*/
/*                               <div class="title">JUL</div>*/
/*                               <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>*/
/*                           </div>*/
/*                       </div>*/
/*                       <!--custom chart end-->*/
/* 					</div><!-- /row -->	*/
/* 					*/
/*                   </div><!-- /col-lg-9 END SECTION MIDDLE -->*/
/*                   */
/*                   */
/*       <!-- ***********************************************************************************************************************************************************/
/*       RIGHT SIDEBAR CONTENT*/
/*       *********************************************************************************************************************************************************** -->                  */
/*                   */
/*                   <div class="col-lg-3 ds">*/
/*                     <!--COMPLETED ACTIONS DONUTS CHART-->*/
/* 						<h3>NOTIFICATIONS</h3>*/
/*                                         */
/*                       <!-- First Action -->*/
/*                       <div class="desc">*/
/*                       	<div class="thumb">*/
/*                       		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>*/
/*                       	</div>*/
/*                       	<div class="details">*/
/*                       		<p><muted>2 Minutes Ago</muted><br/>*/
/*                       		   <a href="#">James Brown</a> subscribed to your newsletter.<br/>*/
/*                       		</p>*/
/*                       	</div>*/
/*                       </div>*/
/*                       <!-- Second Action -->*/
/*                       <div class="desc">*/
/*                       	<div class="thumb">*/
/*                       		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>*/
/*                       	</div>*/
/*                       	<div class="details">*/
/*                       		<p><muted>3 Hours Ago</muted><br/>*/
/*                       		   <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>*/
/*                       		</p>*/
/*                       	</div>*/
/*                       </div>*/
/*                       <!-- Third Action -->*/
/*                       <div class="desc">*/
/*                       	<div class="thumb">*/
/*                       		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>*/
/*                       	</div>*/
/*                       	<div class="details">*/
/*                       		<p><muted>7 Hours Ago</muted><br/>*/
/*                       		   <a href="#">Brandon Page</a> purchased a year subscription.<br/>*/
/*                       		</p>*/
/*                       	</div>*/
/*                       </div>*/
/*                       <!-- Fourth Action -->*/
/*                       <div class="desc">*/
/*                       	<div class="thumb">*/
/*                       		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>*/
/*                       	</div>*/
/*                       	<div class="details">*/
/*                       		<p><muted>11 Hours Ago</muted><br/>*/
/*                       		   <a href="#">Mark Twain</a> commented your post.<br/>*/
/*                       		</p>*/
/*                       	</div>*/
/*                       </div>*/
/*                       <!-- Fifth Action -->*/
/*                       <div class="desc">*/
/*                       	<div class="thumb">*/
/*                       		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>*/
/*                       	</div>*/
/*                       	<div class="details">*/
/*                       		<p><muted>18 Hours Ago</muted><br/>*/
/*                       		   <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>*/
/*                       		</p>*/
/*                       	</div>*/
/*                       </div>*/
/* */
/*                        <!-- USERS ONLINE SECTION -->*/
/* 						<h3>TEAM MEMBERS</h3>*/
/*                       <!-- First Member -->*/
/*                       <div class="desc">*/
/*                       	<div class="thumb">*/
/*                       		<img class="img-circle" src="{{asset('dashgumfree2/img/ui-divya.jpg')}}" width="35px" height="35px" align="">*/
/*                       	</div>*/
/*                       	<div class="details">*/
/*                       		<p><a href="#">DIVYA MANIAN</a><br/>*/
/*                       		   <muted>Available</muted>*/
/*                       		</p>*/
/*                       	</div>*/
/*                       </div>*/
/*                       <!-- Second Member -->*/
/*                       <div class="desc">*/
/*                       	<div class="thumb">*/
/*                       		<img class="img-circle" src="{{asset('dashgumfree2/img/ui-sherman.jpg')}}" width="35px" height="35px" align="">*/
/*                       	</div>*/
/*                       	<div class="details">*/
/*                       		<p><a href="#">DJ SHERMAN</a><br/>*/
/*                       		   <muted>I am Busy</muted>*/
/*                       		</p>*/
/*                       	</div>*/
/*                       </div>*/
/*                       <!-- Third Member -->*/
/*                       <div class="desc">*/
/*                       	<div class="thumb">*/
/*                       		<img class="img-circle" src="{{asset('dashgumfree2/img/ui-danro.jpg')}}" width="35px" height="35px" align="">*/
/*                       	</div>*/
/*                       	<div class="details">*/
/*                       		<p><a href="#">DAN ROGERS</a><br/>*/
/*                       		   <muted>Available</muted>*/
/*                       		</p>*/
/*                       	</div>*/
/*                       </div>*/
/*                       <!-- Fourth Member -->*/
/*                       <div class="desc">*/
/*                       	<div class="thumb">*/
/*                       		<img class="img-circle" src="{{asset('dashgumfree2/img/ui-zac.jpg')}}" width="35px" height="35px" align="">*/
/*                       	</div>*/
/*                       	<div class="details">*/
/*                       		<p><a href="#">Zac Sniders</a><br/>*/
/*                       		   <muted>Available</muted>*/
/*                       		</p>*/
/*                       	</div>*/
/*                       </div>*/
/*                       <!-- Fifth Member -->*/
/*                       <div class="desc">*/
/*                       	<div class="thumb">*/
/*                       		<img class="img-circle" src="{{asset('dashgumfree2/img/ui-sam.jpg')}}" width="35px" height="35px" align="">*/
/*                       	</div>*/
/*                       	<div class="details">*/
/*                       		<p><a href="#">Marcel Newman</a><br/>*/
/*                       		   <muted>Available</muted>*/
/*                       		</p>*/
/*                       	</div>*/
/*                       </div>*/
/* */
/*                         <!-- CALENDAR-->*/
/*                         <div id="calendar" class="mb">*/
/*                             <div class="panel green-panel no-margin">*/
/*                                 <div class="panel-body">*/
/*                                     <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">*/
/*                                         <div class="arrow"></div>*/
/*                                         <h3 class="popover-title" style="disadding: none;"></h3>*/
/*                                         <div id="date-popover-content" class="popover-content"></div>*/
/*                                     </div>*/
/*                                     <div id="my-calendar"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!-- / calendar -->*/
/*                       */
/*                   </div><!-- /col-lg-3 -->*/
/*               </div><! --/row -->*/
/*           </section>*/
/*       </section>*/
/* */
/*       <!--main content end-->*/
/*       {% endblock %}  */
/* */
/* {% block javascripts %}*/
/*     {{parent()}}*/
/* */
/*     <!--script for this page-->*/
/*     <script src="{{asset('dashgumfree2/js/sparkline-chart.js')}}"></script>    */
/* 	<script src="{{asset('dashgumfree2/js/zabuto_calendar.js')}}"></script>	*/
/* 	*/
/* 	<script type="text/javascript">*/
/*         $(document).ready(function () {*/
/*         var unique_id = $.gritter.add({*/
/*             // (string | mandatory) the heading of the notification*/
/*             title: 'Welcome to Dashgum!',*/
/*             // (string | mandatory) the text inside the notification*/
/*             text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',*/
/*             // (string | optional) the image to display on the left*/
/*             image: "{{asset('dashgumfree2/img/ui-sam.jpg')}}",*/
/*             // (bool | optional) if you want it to fade out on its own or just sit there*/
/*             sticky: true,*/
/*             // (int | optional) the time you want it to be alive for before fading out*/
/*             time: '',*/
/*             // (string | optional) the class name you want to apply to that specific message*/
/*             class_name: 'my-sticky-class'*/
/*         });*/
/* */
/*         return false;*/
/*         });*/
/* 	</script>*/
/* 	*/
/* 	<script type="application/javascript">*/
/*         $(document).ready(function () {*/
/*             $("#date-popover").popover({html: true, trigger: "manual"});*/
/*             $("#date-popover").hide();*/
/*             $("#date-popover").click(function (e) {*/
/*                 $(this).hide();*/
/*             });*/
/*         */
/*             $("#my-calendar").zabuto_calendar({*/
/*                 action: function () {*/
/*                     return myDateFunction(this.id, false);*/
/*                 },*/
/*                 action_nav: function () {*/
/*                     return myNavFunction(this.id);*/
/*                 },*/
/*                 ajax: {*/
/*                     url: "show_data.php?action=1",*/
/*                     modal: true*/
/*                 },*/
/*                 legend: [*/
/*                     {type: "text", label: "Special event", badge: "00"},*/
/*                     {type: "block", label: "Regular event", }*/
/*                 ]*/
/*             });*/
/*         });*/
/*         */
/*         */
/*         function myNavFunction(id) {*/
/*             $("#date-popover").hide();*/
/*             var nav = $("#" + id).data("navigation");*/
/*             var to = $("#" + id).data("to");*/
/*             console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);*/
/*         }*/
/*     </script>*/
/*   */
/* {% endblock %}*/
/* */
