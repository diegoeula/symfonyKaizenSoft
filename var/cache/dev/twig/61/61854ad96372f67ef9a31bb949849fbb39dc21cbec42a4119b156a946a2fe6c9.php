<?php

/* ::base.html.twig */
class __TwigTemplate_e9874180cb21ebec7abfe06dfe9fcd311ba27eddb65c6e22b65d7381f53d952f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'central' => array($this, 'block_central'),
            'rightSidebar' => array($this, 'block_rightSidebar'),
            'rightSidebarContent' => array($this, 'block_rightSidebarContent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd8d524697f36046686ba1daf9985208d6ce6b3327fe4fc3443c02392a52e415 = $this->env->getExtension("native_profiler");
        $__internal_cd8d524697f36046686ba1daf9985208d6ce6b3327fe4fc3443c02392a52e415->enter($__internal_cd8d524697f36046686ba1daf9985208d6ce6b3327fe4fc3443c02392a52e415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"Dashboard\">
        <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body>
        ";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "  
        <!-- **********************************************************************************************************************************************************
             MAIN CONTENT
             *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id=\"main-content\">
            <section class=\"wrapper\">
                <div class=\"row\">
                    <div class=\"col-lg-9 main-chart\">
                        ";
        // line 47
        $this->displayBlock('central', $context, $blocks);
        // line 48
        echo " 
                    </div><!-- /col-lg-9 END SECTION MIDDLE -->
                    ";
        // line 50
        $this->displayBlock('rightSidebar', $context, $blocks);
        // line 189
        echo " 
                </div><! --/row -->
            </section>
        </section>
        <!--footer start-->
        <footer class=\"site-footer\">
            <div class=\"text-center\">
                2014 - Alvarez.is
                <a href=\"index.html#\" class=\"go-top\">
                    <i class=\"fa fa-angle-up\"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>
    ";
        // line 204
        $this->displayBlock('javascripts', $context, $blocks);
        // line 221
        echo "</body>
</html>";
        
        $__internal_cd8d524697f36046686ba1daf9985208d6ce6b3327fe4fc3443c02392a52e415->leave($__internal_cd8d524697f36046686ba1daf9985208d6ce6b3327fe4fc3443c02392a52e415_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_b58a8969bd7bbdaac6fb58e1d5ccade84990cd6e2163139ec01ee4ad35286b60 = $this->env->getExtension("native_profiler");
        $__internal_b58a8969bd7bbdaac6fb58e1d5ccade84990cd6e2163139ec01ee4ad35286b60->enter($__internal_b58a8969bd7bbdaac6fb58e1d5ccade84990cd6e2163139ec01ee4ad35286b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b58a8969bd7bbdaac6fb58e1d5ccade84990cd6e2163139ec01ee4ad35286b60->leave($__internal_b58a8969bd7bbdaac6fb58e1d5ccade84990cd6e2163139ec01ee4ad35286b60_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d706213f01add1e5b3b04a7922d3d5df2552b063a4e59de6f8c6f2b0e18fc7e = $this->env->getExtension("native_profiler");
        $__internal_8d706213f01add1e5b3b04a7922d3d5df2552b063a4e59de6f8c6f2b0e18fc7e->enter($__internal_8d706213f01add1e5b3b04a7922d3d5df2552b063a4e59de6f8c6f2b0e18fc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <!-- Bootstrap core CSS -->
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!--external css-->
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/zabuto_calendar.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/lineicons/style.css"), "html", null, true);
        echo "\"> 



            <!-- Custom styles for this template -->
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/chart-master/Chart.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_8d706213f01add1e5b3b04a7922d3d5df2552b063a4e59de6f8c6f2b0e18fc7e->leave($__internal_8d706213f01add1e5b3b04a7922d3d5df2552b063a4e59de6f8c6f2b0e18fc7e_prof);

    }

    // line 37
    public function block_header($context, array $blocks = array())
    {
        $__internal_c0febbbc057e91744a9fd2b8bbde4066ad215091f7361ead3b5994f47f88f19e = $this->env->getExtension("native_profiler");
        $__internal_c0febbbc057e91744a9fd2b8bbde4066ad215091f7361ead3b5994f47f88f19e->enter($__internal_c0febbbc057e91744a9fd2b8bbde4066ad215091f7361ead3b5994f47f88f19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 38
        echo "        ";
        
        $__internal_c0febbbc057e91744a9fd2b8bbde4066ad215091f7361ead3b5994f47f88f19e->leave($__internal_c0febbbc057e91744a9fd2b8bbde4066ad215091f7361ead3b5994f47f88f19e_prof);

    }

    // line 47
    public function block_central($context, array $blocks = array())
    {
        $__internal_14704c2c427735c4978f6351949c002257c013bb5971dd03c85a4133f148a741 = $this->env->getExtension("native_profiler");
        $__internal_14704c2c427735c4978f6351949c002257c013bb5971dd03c85a4133f148a741->enter($__internal_14704c2c427735c4978f6351949c002257c013bb5971dd03c85a4133f148a741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "central"));

        // line 48
        echo "                        ";
        
        $__internal_14704c2c427735c4978f6351949c002257c013bb5971dd03c85a4133f148a741->leave($__internal_14704c2c427735c4978f6351949c002257c013bb5971dd03c85a4133f148a741_prof);

    }

    // line 50
    public function block_rightSidebar($context, array $blocks = array())
    {
        $__internal_c1148894c0bb6f34908a9270c1537a7ac410d20bbcd5cae5f2c02615b301a78b = $this->env->getExtension("native_profiler");
        $__internal_c1148894c0bb6f34908a9270c1537a7ac410d20bbcd5cae5f2c02615b301a78b->enter($__internal_c1148894c0bb6f34908a9270c1537a7ac410d20bbcd5cae5f2c02615b301a78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightSidebar"));

        echo "  
                        <!-- **********************************************************************************************************************************************************
                       RIGHT SIDEBAR CONTENT
                       *********************************************************************************************************************************************************** -->                  

                        <div class=\"col-lg-3 ds\">
                            ";
        // line 56
        $this->displayBlock('rightSidebarContent', $context, $blocks);
        // line 187
        echo " 
                        </div><!-- /col-lg-3 -->
                    ";
        
        $__internal_c1148894c0bb6f34908a9270c1537a7ac410d20bbcd5cae5f2c02615b301a78b->leave($__internal_c1148894c0bb6f34908a9270c1537a7ac410d20bbcd5cae5f2c02615b301a78b_prof);

    }

    // line 56
    public function block_rightSidebarContent($context, array $blocks = array())
    {
        $__internal_cee9246d1935883268580661226dbd2e275c4cefd6497ccc7e823f218b35398a = $this->env->getExtension("native_profiler");
        $__internal_cee9246d1935883268580661226dbd2e275c4cefd6497ccc7e823f218b35398a->enter($__internal_cee9246d1935883268580661226dbd2e275c4cefd6497ccc7e823f218b35398a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightSidebarContent"));

        echo " 
                                <!--COMPLETED ACTIONS DONUTS CHART-->
                                <h3>NOTIFICATIONS</h3>

                                <!-- First Action -->
                                <div class=\"desc\">
                                    <div class=\"thumb\">
                                        <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
                                    </div>
                                    <div class=\"details\">
                                        <p><muted>2 Minutes Ago</muted><br/>
                                        <a href=\"#\">James Brown</a> subscribed to your newsletter.<br/>
                                        </p>
                                    </div>
                                </div>
                                <!-- Second Action -->
                                <div class=\"desc\">
                                    <div class=\"thumb\">
                                        <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
                                    </div>
                                    <div class=\"details\">
                                        <p><muted>3 Hours Ago</muted><br/>
                                        <a href=\"#\">Diana Kennedy</a> purchased a year subscription.<br/>
                                        </p>
                                    </div>
                                </div>
                                <!-- Third Action -->
                                <div class=\"desc\">
                                    <div class=\"thumb\">
                                        <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
                                    </div>
                                    <div class=\"details\">
                                        <p><muted>7 Hours Ago</muted><br/>
                                        <a href=\"#\">Brandon Page</a> purchased a year subscription.<br/>
                                        </p>
                                    </div>
                                </div>
                                <!-- Fourth Action -->
                                <div class=\"desc\">
                                    <div class=\"thumb\">
                                        <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
                                    </div>
                                    <div class=\"details\">
                                        <p><muted>11 Hours Ago</muted><br/>
                                        <a href=\"#\">Mark Twain</a> commented your post.<br/>
                                        </p>
                                    </div>
                                </div>
                                <!-- Fifth Action -->
                                <div class=\"desc\">
                                    <div class=\"thumb\">
                                        <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
                                    </div>
                                    <div class=\"details\">
                                        <p><muted>18 Hours Ago</muted><br/>
                                        <a href=\"#\">Daniel Pratt</a> purchased a wallet in your store.<br/>
                                        </p>
                                    </div>
                                </div>

                                <!-- USERS ONLINE SECTION -->
                                <h3>TEAM MEMBERS</h3>
                                <!-- First Member -->
                                <div class=\"desc\">
                                    <div class=\"thumb\">
                                        <img class=\"img-circle\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-divya.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
                                    </div>
                                    <div class=\"details\">
                                        <p><a href=\"#\">DIVYA MANIAN</a><br/>
                                        <muted>Available</muted>
                                        </p>
                                    </div>
                                </div>
                                <!-- Second Member -->
                                <div class=\"desc\">
                                    <div class=\"thumb\">
                                        <img class=\"img-circle\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-sherman.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
                                    </div>
                                    <div class=\"details\">
                                        <p><a href=\"#\">DJ SHERMAN</a><br/>
                                        <muted>I am Busy</muted>
                                        </p>
                                    </div>
                                </div>
                                <!-- Third Member -->
                                <div class=\"desc\">
                                    <div class=\"thumb\">
                                        <img class=\"img-circle\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-danro.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
                                    </div>
                                    <div class=\"details\">
                                        <p><a href=\"#\">DAN ROGERS</a><br/>
                                        <muted>Available</muted>
                                        </p>
                                    </div>
                                </div>
                                <!-- Fourth Member -->
                                <div class=\"desc\">
                                    <div class=\"thumb\">
                                        <img class=\"img-circle\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-zac.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
                                    </div>
                                    <div class=\"details\">
                                        <p><a href=\"#\">Zac Sniders</a><br/>
                                        <muted>Available</muted>
                                        </p>
                                    </div>
                                </div>
                                <!-- Fifth Member -->
                                <div class=\"desc\">
                                    <div class=\"thumb\">
                                        <img class=\"img-circle\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-sam.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
                                    </div>
                                    <div class=\"details\">
                                        <p><a href=\"#\">Marcel Newman</a><br/>
                                        <muted>Available</muted>
                                        </p>
                                    </div>
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
                            ";
        
        $__internal_cee9246d1935883268580661226dbd2e275c4cefd6497ccc7e823f218b35398a->leave($__internal_cee9246d1935883268580661226dbd2e275c4cefd6497ccc7e823f218b35398a_prof);

    }

    // line 204
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b74f108de30e4173bc3aca23522f232a947c7467d121d79d6afebdf65fc13d09 = $this->env->getExtension("native_profiler");
        $__internal_b74f108de30e4173bc3aca23522f232a947c7467d121d79d6afebdf65fc13d09->enter($__internal_b74f108de30e4173bc3aca23522f232a947c7467d121d79d6afebdf65fc13d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 205
        echo "        <!-- js placed at the end of the document so the pages load faster -->
        <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script class=\"include\" type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>


        <!--common script for all pages-->
        <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/common-scripts.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/gritter/js/jquery.gritter.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/gritter-conf.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_b74f108de30e4173bc3aca23522f232a947c7467d121d79d6afebdf65fc13d09->leave($__internal_b74f108de30e4173bc3aca23522f232a947c7467d121d79d6afebdf65fc13d09_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  425 => 219,  421 => 218,  416 => 216,  409 => 212,  405 => 211,  401 => 210,  397 => 209,  393 => 208,  389 => 207,  385 => 206,  382 => 205,  376 => 204,  346 => 165,  332 => 154,  318 => 143,  304 => 132,  290 => 121,  218 => 56,  209 => 187,  207 => 56,  194 => 50,  187 => 48,  181 => 47,  174 => 38,  168 => 37,  159 => 26,  154 => 24,  150 => 23,  142 => 18,  138 => 17,  134 => 16,  130 => 15,  125 => 13,  122 => 12,  116 => 11,  105 => 10,  97 => 221,  95 => 204,  78 => 189,  76 => 50,  72 => 48,  70 => 47,  59 => 38,  57 => 37,  46 => 28,  44 => 11,  40 => 10,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="Dashboard">*/
/*         <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">*/
/* */
/*         <title>{% block title %}{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <!-- Bootstrap core CSS -->*/
/*             <link href="{{asset('dashgumfree2/css/bootstrap.css')}}" rel="stylesheet">*/
/*             <!--external css-->*/
/*             <link href="{{asset('dashgumfree2/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('dashgumfree2/css/zabuto_calendar.css')}}">*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('dashgumfree2/js/gritter/css/jquery.gritter.css')}}" />*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('dashgumfree2/lineicons/style.css')}}"> */
/* */
/* */
/* */
/*             <!-- Custom styles for this template -->*/
/*             <link href="{{asset('dashgumfree2/css/style.css')}}" rel="stylesheet">*/
/*             <link href="{{asset('dashgumfree2/css/style-responsive.css')}}" rel="stylesheet">*/
/* */
/*             <script src="{{asset('dashgumfree2/js/chart-master/Chart.js')}}"></script>*/
/*         {% endblock %}*/
/* */
/*         <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!--[if lt IE 9]>*/
/*           <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*           <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/* */
/*     <body>*/
/*         {% block header %}*/
/*         {% endblock %}  */
/*         <!-- ***********************************************************************************************************************************************************/
/*              MAIN CONTENT*/
/*              *********************************************************************************************************************************************************** -->*/
/*         <!--main content start-->*/
/*         <section id="main-content">*/
/*             <section class="wrapper">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-9 main-chart">*/
/*                         {% block central %}*/
/*                         {% endblock %} */
/*                     </div><!-- /col-lg-9 END SECTION MIDDLE -->*/
/*                     {% block rightSidebar %}  */
/*                         <!-- ***********************************************************************************************************************************************************/
/*                        RIGHT SIDEBAR CONTENT*/
/*                        *********************************************************************************************************************************************************** -->                  */
/* */
/*                         <div class="col-lg-3 ds">*/
/*                             {% block rightSidebarContent %} */
/*                                 <!--COMPLETED ACTIONS DONUTS CHART-->*/
/*                                 <h3>NOTIFICATIONS</h3>*/
/* */
/*                                 <!-- First Action -->*/
/*                                 <div class="desc">*/
/*                                     <div class="thumb">*/
/*                                         <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>*/
/*                                     </div>*/
/*                                     <div class="details">*/
/*                                         <p><muted>2 Minutes Ago</muted><br/>*/
/*                                         <a href="#">James Brown</a> subscribed to your newsletter.<br/>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- Second Action -->*/
/*                                 <div class="desc">*/
/*                                     <div class="thumb">*/
/*                                         <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>*/
/*                                     </div>*/
/*                                     <div class="details">*/
/*                                         <p><muted>3 Hours Ago</muted><br/>*/
/*                                         <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- Third Action -->*/
/*                                 <div class="desc">*/
/*                                     <div class="thumb">*/
/*                                         <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>*/
/*                                     </div>*/
/*                                     <div class="details">*/
/*                                         <p><muted>7 Hours Ago</muted><br/>*/
/*                                         <a href="#">Brandon Page</a> purchased a year subscription.<br/>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- Fourth Action -->*/
/*                                 <div class="desc">*/
/*                                     <div class="thumb">*/
/*                                         <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>*/
/*                                     </div>*/
/*                                     <div class="details">*/
/*                                         <p><muted>11 Hours Ago</muted><br/>*/
/*                                         <a href="#">Mark Twain</a> commented your post.<br/>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- Fifth Action -->*/
/*                                 <div class="desc">*/
/*                                     <div class="thumb">*/
/*                                         <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>*/
/*                                     </div>*/
/*                                     <div class="details">*/
/*                                         <p><muted>18 Hours Ago</muted><br/>*/
/*                                         <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <!-- USERS ONLINE SECTION -->*/
/*                                 <h3>TEAM MEMBERS</h3>*/
/*                                 <!-- First Member -->*/
/*                                 <div class="desc">*/
/*                                     <div class="thumb">*/
/*                                         <img class="img-circle" src="{{asset('dashgumfree2/img/ui-divya.jpg')}}" width="35px" height="35px" align="">*/
/*                                     </div>*/
/*                                     <div class="details">*/
/*                                         <p><a href="#">DIVYA MANIAN</a><br/>*/
/*                                         <muted>Available</muted>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- Second Member -->*/
/*                                 <div class="desc">*/
/*                                     <div class="thumb">*/
/*                                         <img class="img-circle" src="{{asset('dashgumfree2/img/ui-sherman.jpg')}}" width="35px" height="35px" align="">*/
/*                                     </div>*/
/*                                     <div class="details">*/
/*                                         <p><a href="#">DJ SHERMAN</a><br/>*/
/*                                         <muted>I am Busy</muted>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- Third Member -->*/
/*                                 <div class="desc">*/
/*                                     <div class="thumb">*/
/*                                         <img class="img-circle" src="{{asset('dashgumfree2/img/ui-danro.jpg')}}" width="35px" height="35px" align="">*/
/*                                     </div>*/
/*                                     <div class="details">*/
/*                                         <p><a href="#">DAN ROGERS</a><br/>*/
/*                                         <muted>Available</muted>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- Fourth Member -->*/
/*                                 <div class="desc">*/
/*                                     <div class="thumb">*/
/*                                         <img class="img-circle" src="{{asset('dashgumfree2/img/ui-zac.jpg')}}" width="35px" height="35px" align="">*/
/*                                     </div>*/
/*                                     <div class="details">*/
/*                                         <p><a href="#">Zac Sniders</a><br/>*/
/*                                         <muted>Available</muted>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- Fifth Member -->*/
/*                                 <div class="desc">*/
/*                                     <div class="thumb">*/
/*                                         <img class="img-circle" src="{{asset('dashgumfree2/img/ui-sam.jpg')}}" width="35px" height="35px" align="">*/
/*                                     </div>*/
/*                                     <div class="details">*/
/*                                         <p><a href="#">Marcel Newman</a><br/>*/
/*                                         <muted>Available</muted>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <!-- CALENDAR-->*/
/*                                 <div id="calendar" class="mb">*/
/*                                     <div class="panel green-panel no-margin">*/
/*                                         <div class="panel-body">*/
/*                                             <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">*/
/*                                                 <div class="arrow"></div>*/
/*                                                 <h3 class="popover-title" style="disadding: none;"></h3>*/
/*                                                 <div id="date-popover-content" class="popover-content"></div>*/
/*                                             </div>*/
/*                                             <div id="my-calendar"></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div><!-- / calendar -->*/
/*                             {% endblock %} */
/*                         </div><!-- /col-lg-3 -->*/
/*                     {% endblock %} */
/*                 </div><! --/row -->*/
/*             </section>*/
/*         </section>*/
/*         <!--footer start-->*/
/*         <footer class="site-footer">*/
/*             <div class="text-center">*/
/*                 2014 - Alvarez.is*/
/*                 <a href="index.html#" class="go-top">*/
/*                     <i class="fa fa-angle-up"></i>*/
/*                 </a>*/
/*             </div>*/
/*         </footer>*/
/*         <!--footer end-->*/
/*     </section>*/
/*     {% block javascripts %}*/
/*         <!-- js placed at the end of the document so the pages load faster -->*/
/*         <script src="{{asset('dashgumfree2/js/jquery.js')}}"></script>*/
/*         <script src="{{asset('dashgumfree2/js/jquery-1.8.3.min.js')}}"></script>*/
/*         <script src="{{asset('dashgumfree2/js/bootstrap.min.js')}}"></script>*/
/*         <script class="include" type="text/javascript" src="{{asset('dashgumfree2/js/jquery.dcjqaccordion.2.7.js')}}"></script>*/
/*         <script src="{{asset('dashgumfree2/js/jquery.scrollTo.min.js')}}"></script>*/
/*         <script src="{{asset('dashgumfree2/js/jquery.nicescroll.js')}}" type="text/javascript"></script>*/
/*         <script src="{{asset('dashgumfree2/js/jquery.sparkline.js')}}"></script>*/
/* */
/* */
/*         <!--common script for all pages-->*/
/*         <script src="{{asset('dashgumfree2/js/common-scripts.js')}}"></script>*/
/* */
/*         <script type="text/javascript" src="{{asset('dashgumfree2/js/gritter/js/jquery.gritter.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('dashgumfree2/js/gritter-conf.js')}}"></script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
