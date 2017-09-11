<?php

/* ControlBundle:dashgumfree2:index.html.old.twig */
class __TwigTemplate_d45ca2e25bd5d0184beaaf00b66ab430eab9d78e120a7f833c90bcb909a934fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_dash2.html.twig", "ControlBundle:dashgumfree2:index.html.old.twig", 1);
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
        $__internal_e5924d88053d990d718a45664d85d2f546e83990b47dde51575531a26cbd43d8 = $this->env->getExtension("native_profiler");
        $__internal_e5924d88053d990d718a45664d85d2f546e83990b47dde51575531a26cbd43d8->enter($__internal_e5924d88053d990d718a45664d85d2f546e83990b47dde51575531a26cbd43d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:dashgumfree2:index.html.old.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5924d88053d990d718a45664d85d2f546e83990b47dde51575531a26cbd43d8->leave($__internal_e5924d88053d990d718a45664d85d2f546e83990b47dde51575531a26cbd43d8_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f2089406fc58794a1e020139a249ab7bd83908fb4bee02529ef6fced3d7ee949 = $this->env->getExtension("native_profiler");
        $__internal_f2089406fc58794a1e020139a249ab7bd83908fb4bee02529ef6fced3d7ee949->enter($__internal_f2089406fc58794a1e020139a249ab7bd83908fb4bee02529ef6fced3d7ee949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!--external css-->
   
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/zabuto_calendar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/lineicons/style.css"), "html", null, true);
        echo "\">    

    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/chart-master/Chart.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f2089406fc58794a1e020139a249ab7bd83908fb4bee02529ef6fced3d7ee949->leave($__internal_f2089406fc58794a1e020139a249ab7bd83908fb4bee02529ef6fced3d7ee949_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7976014c10a4c3909f90f03019e64e72724d06b79c429b3eda314a149cbf11c = $this->env->getExtension("native_profiler");
        $__internal_d7976014c10a4c3909f90f03019e64e72724d06b79c429b3eda314a149cbf11c->enter($__internal_d7976014c10a4c3909f90f03019e64e72724d06b79c429b3eda314a149cbf11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "      <!-- **********************************************************************************************************************************************************
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
\t\t\t\t\t  \t\t\t<span class=\"li_heart\"></span>
\t\t\t\t\t  \t\t\t<h3>933</h3>
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
        // line 105
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
        // line 116
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
        // line 313
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
        // line 324
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
        // line 335
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
        // line 346
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
        // line 357
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
        
        $__internal_d7976014c10a4c3909f90f03019e64e72724d06b79c429b3eda314a149cbf11c->leave($__internal_d7976014c10a4c3909f90f03019e64e72724d06b79c429b3eda314a149cbf11c_prof);

    }

    // line 389
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_935bf6c199911ef40b2c5751149bac58bd62e580984278a60cb0bc09c600a6b7 = $this->env->getExtension("native_profiler");
        $__internal_935bf6c199911ef40b2c5751149bac58bd62e580984278a60cb0bc09c600a6b7->enter($__internal_935bf6c199911ef40b2c5751149bac58bd62e580984278a60cb0bc09c600a6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 390
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- js placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script class=\"include\" type=\"text/javascript\" src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>


    <!--common script for all pages-->
    <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/common-scripts.js"), "html", null, true);
        echo "\"></script>
    
    <script type=\"text/javascript\" src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/gritter/js/jquery.gritter.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/gritter-conf.js"), "html", null, true);
        echo "\"></script>

    <!--script for this page-->
    <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/sparkline-chart.js"), "html", null, true);
        echo "\"></script>    
\t<script src=\"";
        // line 409
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
            image: '";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-sam.jpg"), "html", null, true);
        echo "',
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
        
        $__internal_935bf6c199911ef40b2c5751149bac58bd62e580984278a60cb0bc09c600a6b7->leave($__internal_935bf6c199911ef40b2c5751149bac58bd62e580984278a60cb0bc09c600a6b7_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:dashgumfree2:index.html.old.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 419,  541 => 409,  537 => 408,  531 => 405,  527 => 404,  522 => 402,  515 => 398,  511 => 397,  507 => 396,  503 => 395,  499 => 394,  495 => 393,  491 => 392,  485 => 390,  479 => 389,  441 => 357,  427 => 346,  413 => 335,  399 => 324,  385 => 313,  185 => 116,  171 => 105,  77 => 13,  71 => 12,  62 => 10,  57 => 8,  53 => 7,  49 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::base_dash2.html.twig' %}*/
/* {% block stylesheets %}*/
/*      {{ parent() }}*/
/*     <!--external css-->*/
/*    */
/*     <link rel="stylesheet" type="text/css" href="{{asset('dashgumfree2/css/zabuto_calendar.css')}}">*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('dashgumfree2/js/gritter/css/jquery.gritter.css')}}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{asset('dashgumfree2/lineicons/style.css')}}">    */
/* */
/*     <script src="{{asset('dashgumfree2/js/chart-master/Chart.js')}}"></script>*/
/* {% endblock %}    */
/*  {% block body %}*/
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
/* 					  			<span class="li_heart"></span>*/
/* 					  			<h3>933</h3>*/
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
/*   */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*      {{ parent() }}*/
/*     <!-- js placed at the end of the document so the pages load faster -->*/
/*     <script src="{{asset('dashgumfree2/js/jquery.js')}}"></script>*/
/*     <script src="{{asset('dashgumfree2/js/jquery-1.8.3.min.js')}}"></script>*/
/*     <script src="{{asset('dashgumfree2/js/bootstrap.min.js')}}"></script>*/
/*     <script class="include" type="text/javascript" src="{{asset('dashgumfree2/js/jquery.dcjqaccordion.2.7.js')}}"></script>*/
/*     <script src="{{asset('dashgumfree2/js/jquery.scrollTo.min.js')}}"></script>*/
/*     <script src="{{asset('dashgumfree2/js/jquery.nicescroll.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('dashgumfree2/js/jquery.sparkline.js')}}"></script>*/
/* */
/* */
/*     <!--common script for all pages-->*/
/*     <script src="{{asset('dashgumfree2/js/common-scripts.js')}}"></script>*/
/*     */
/*     <script type="text/javascript" src="{{asset('dashgumfree2/js/gritter/js/jquery.gritter.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('dashgumfree2/js/gritter-conf.js')}}"></script>*/
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
/*             image: '{{asset('dashgumfree2/img/ui-sam.jpg')}}',*/
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
/* {% endblock %}*/
