<?php

/* ControlBundle:dashgumfree2:lock_screen.html.twig */
class __TwigTemplate_5b74bfdcd58d26f14af05a9dcbb4aa854b83f28e2ca01152b255e644bb2b9dc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40d2b52efc46c7ee51ae944776356958a919d1544c7e03ff7d016b4637631189 = $this->env->getExtension("native_profiler");
        $__internal_40d2b52efc46c7ee51ae944776356958a919d1544c7e03ff7d016b4637631189->enter($__internal_40d2b52efc46c7ee51ae944776356958a919d1544c7e03ff7d016b4637631189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:dashgumfree2:lock_screen.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--external css-->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}\"></script>
    <![endif]-->
  </head>

  <body onload=\"getTime()\">

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

\t  \t<div class=\"container\">
\t  \t
\t  \t\t<div id=\"showtime\"></div>
\t  \t\t\t<div class=\"col-lg-4 col-lg-offset-4\">
\t  \t\t\t\t<div class=\"lock-screen\">
\t\t  \t\t\t\t<h2><a data-toggle=\"modal\" href=\"#myModal\"><i class=\"fa fa-lock\"></i></a></h2>
\t\t  \t\t\t\t<p>UNLOCK</p>
\t\t  \t\t\t\t
\t\t\t\t          <!-- Modal -->
\t\t\t\t          <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"myModal\" class=\"modal fade\">
\t\t\t\t              <div class=\"modal-dialog\">
\t\t\t\t                  <div class=\"modal-content\">
\t\t\t\t                      <div class=\"modal-header\">
\t\t\t\t                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t                          <h4 class=\"modal-title\">Welcome Back</h4>
\t\t\t\t                      </div>
\t\t\t\t                      <div class=\"modal-body\">
\t\t\t\t                          <p class=\"centered\"><img class=\"img-circle\" width=\"80\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/ui-sam.jpg"), "html", null, true);
        echo "\"></p>
\t\t\t\t                          <input type=\"password\" name=\"password\" placeholder=\"Password\" autocomplete=\"off\" class=\"form-control placeholder-no-fix\">
\t\t\t\t
\t\t\t\t                      </div>
\t\t\t\t                      <div class=\"modal-footer centered\">
\t\t\t\t                          <button data-dismiss=\"modal\" class=\"btn btn-theme04\" type=\"button\">Cancel</button>
\t\t\t\t                          <button class=\"btn btn-theme03\" type=\"button\">Login</button>
\t\t\t\t                      </div>
\t\t\t\t                  </div>
\t\t\t\t              </div>
\t\t\t\t          </div>
\t\t\t\t          <!-- modal -->
\t\t  \t\t\t\t
\t\t  \t\t\t\t
\t  \t\t\t\t</div><! --/lock-screen -->
\t  \t\t\t</div><!-- /col-lg-4 -->
\t  \t
\t  \t</div><!-- /container -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/js/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$.backstretch(\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dashgumfree2/img/login-bg.jpg"), "html", null, true);
        echo "\", {speed: 500});
    </script>

    <script>
        function getTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('showtime').innerHTML=h+\":\"+m+\":\"+s;
            t=setTimeout(function(){getTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i=\"0\" + i;
            }
            return i;
        }
    </script>

  </body>
</html>
";
        
        $__internal_40d2b52efc46c7ee51ae944776356958a919d1544c7e03ff7d016b4637631189->leave($__internal_40d2b52efc46c7ee51ae944776356958a919d1544c7e03ff7d016b4637631189_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:dashgumfree2:lock_screen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 78,  120 => 76,  113 => 72,  109 => 71,  86 => 51,  51 => 19,  47 => 18,  41 => 15,  36 => 13,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="Dashboard">*/
/*     <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">*/
/* */
/*     <title>DASHGUM - Bootstrap Admin Template</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{asset('dashgumfree2/css/bootstrap.css')}}" rel="stylesheet">*/
/*     <!--external css-->*/
/*     <link href="{{asset('dashgumfree2/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />*/
/*         */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{asset('dashgumfree2/css/style.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('dashgumfree2/css/style-responsive.css')}}" rel="stylesheet">*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>*/
/*       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/* */
/*   <body onload="getTime()">*/
/* */
/*       <!-- ***********************************************************************************************************************************************************/
/*       MAIN CONTENT*/
/*       *********************************************************************************************************************************************************** -->*/
/* */
/* 	  	<div class="container">*/
/* 	  	*/
/* 	  		<div id="showtime"></div>*/
/* 	  			<div class="col-lg-4 col-lg-offset-4">*/
/* 	  				<div class="lock-screen">*/
/* 		  				<h2><a data-toggle="modal" href="#myModal"><i class="fa fa-lock"></i></a></h2>*/
/* 		  				<p>UNLOCK</p>*/
/* 		  				*/
/* 				          <!-- Modal -->*/
/* 				          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">*/
/* 				              <div class="modal-dialog">*/
/* 				                  <div class="modal-content">*/
/* 				                      <div class="modal-header">*/
/* 				                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/* 				                          <h4 class="modal-title">Welcome Back</h4>*/
/* 				                      </div>*/
/* 				                      <div class="modal-body">*/
/* 				                          <p class="centered"><img class="img-circle" width="80" src="{{asset('dashgumfree2/img/ui-sam.jpg')}}"></p>*/
/* 				                          <input type="password" name="password" placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix">*/
/* 				*/
/* 				                      </div>*/
/* 				                      <div class="modal-footer centered">*/
/* 				                          <button data-dismiss="modal" class="btn btn-theme04" type="button">Cancel</button>*/
/* 				                          <button class="btn btn-theme03" type="button">Login</button>*/
/* 				                      </div>*/
/* 				                  </div>*/
/* 				              </div>*/
/* 				          </div>*/
/* 				          <!-- modal -->*/
/* 		  				*/
/* 		  				*/
/* 	  				</div><! --/lock-screen -->*/
/* 	  			</div><!-- /col-lg-4 -->*/
/* 	  	*/
/* 	  	</div><!-- /container -->*/
/* */
/*     <!-- js placed at the end of the document so the pages load faster -->*/
/*     <script src="{{asset('dashgumfree2/js/jquery.js')}}"></script>*/
/*     <script src="{{asset('dashgumfree2/js/bootstrap.min.js')}}"></script>*/
/* */
/*     <!--BACKSTRETCH-->*/
/*     <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->*/
/*     <script type="text/javascript" src="{{asset('dashgumfree2/js/jquery.backstretch.min.js')}}"></script>*/
/*     <script>*/
/*         $.backstretch("{{asset('dashgumfree2/img/login-bg.jpg')}}", {speed: 500});*/
/*     </script>*/
/* */
/*     <script>*/
/*         function getTime()*/
/*         {*/
/*             var today=new Date();*/
/*             var h=today.getHours();*/
/*             var m=today.getMinutes();*/
/*             var s=today.getSeconds();*/
/*             // add a zero in front of numbers<10*/
/*             m=checkTime(m);*/
/*             s=checkTime(s);*/
/*             document.getElementById('showtime').innerHTML=h+":"+m+":"+s;*/
/*             t=setTimeout(function(){getTime()},500);*/
/*         }*/
/* */
/*         function checkTime(i)*/
/*         {*/
/*             if (i<10)*/
/*             {*/
/*                 i="0" + i;*/
/*             }*/
/*             return i;*/
/*         }*/
/*     </script>*/
/* */
/*   </body>*/
/* </html>*/
/* */
