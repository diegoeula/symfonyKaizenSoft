<?php

/* ControlBundle:TableroControl:formulario.html.twig */
class __TwigTemplate_b4c1273dbc7986a13beb93c1ff7cf9041ee725f5118b8675cd573c776766bdf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ControlBundle:Default:.twig", "ControlBundle:TableroControl:formulario.html.twig", 1);
        $this->blocks = array(
            'bootstrap' => array($this, 'block_bootstrap'),
            'javascripts' => array($this, 'block_javascripts'),
            'centralHeader' => array($this, 'block_centralHeader'),
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ControlBundle:Default:.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffecec7aceac96d9a608aeca294eff9271ea158326c12792bbf79a3f2815cc4f = $this->env->getExtension("native_profiler");
        $__internal_ffecec7aceac96d9a608aeca294eff9271ea158326c12792bbf79a3f2815cc4f->enter($__internal_ffecec7aceac96d9a608aeca294eff9271ea158326c12792bbf79a3f2815cc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:TableroControl:formulario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffecec7aceac96d9a608aeca294eff9271ea158326c12792bbf79a3f2815cc4f->leave($__internal_ffecec7aceac96d9a608aeca294eff9271ea158326c12792bbf79a3f2815cc4f_prof);

    }

    // line 3
    public function block_bootstrap($context, array $blocks = array())
    {
        $__internal_3bd0bfc6686020e97838d548e838a0ddbb66165390a12ab46ec86e8f7df3369b = $this->env->getExtension("native_profiler");
        $__internal_3bd0bfc6686020e97838d548e838a0ddbb66165390a12ab46ec86e8f7df3369b->enter($__internal_3bd0bfc6686020e97838d548e838a0ddbb66165390a12ab46ec86e8f7df3369b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        // line 4
        echo "    ";
        $this->displayParentBlock("bootstrap", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-table/bootstrap-table.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_3bd0bfc6686020e97838d548e838a0ddbb66165390a12ab46ec86e8f7df3369b->leave($__internal_3bd0bfc6686020e97838d548e838a0ddbb66165390a12ab46ec86e8f7df3369b_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12dadc27f3d3f342ad2df31a9c2add84e635381688e920d9b568d30e50c6b7fd = $this->env->getExtension("native_profiler");
        $__internal_12dadc27f3d3f342ad2df31a9c2add84e635381688e920d9b568d30e50c6b7fd->enter($__internal_12dadc27f3d3f342ad2df31a9c2add84e635381688e920d9b568d30e50c6b7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-table/bootstrap-table.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-table/locale/bootstrap-table-es-AR.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/SMA/formularios.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        var salida = -1;
        function checkUrl() {


            \$.ajax({
                 url: \"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["node"]) ? $context["node"] : $this->getContext($context, "node")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["checkconfn2"]) ? $context["checkconfn2"] : $this->getContext($context, "checkconfn2")), "html", null, true);
        echo "?callback=?\".concat(\"&fecha_d=\").concat(document.getElementById(\"ConfN2_fecha_d\").value.replace(\"-\", \"\")).concat(\"&fecha_h=\").concat(document.getElementById(\"ConfN2_fecha_h\").value.replace(\"-\", \"\")),
                async: false,
                dataType: \"jsonp\",
                success: function (data) {
                    salida = 1;
         ";
        // line 33
        echo "                }

            });

        }
        function validateForm(funcCallback)
        {
            funcCallback();
            if (salida == 1) {
                return true;
            } else {
                return false;
            }
        }
        ;
    </script>
";
        
        $__internal_12dadc27f3d3f342ad2df31a9c2add84e635381688e920d9b568d30e50c6b7fd->leave($__internal_12dadc27f3d3f342ad2df31a9c2add84e635381688e920d9b568d30e50c6b7fd_prof);

    }

    // line 51
    public function block_centralHeader($context, array $blocks = array())
    {
        $__internal_e127c96ce3da39258a13c81a4bff91284f4652d4078bcaac8327158c732ea221 = $this->env->getExtension("native_profiler");
        $__internal_e127c96ce3da39258a13c81a4bff91284f4652d4078bcaac8327158c732ea221->enter($__internal_e127c96ce3da39258a13c81a4bff91284f4652d4078bcaac8327158c732ea221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "centralHeader"));

        echo "<h2 style=\"margin-left: 20px\"> titulo </h2>";
        
        $__internal_e127c96ce3da39258a13c81a4bff91284f4652d4078bcaac8327158c732ea221->leave($__internal_e127c96ce3da39258a13c81a4bff91284f4652d4078bcaac8327158c732ea221_prof);

    }

    // line 52
    public function block_central($context, array $blocks = array())
    {
        $__internal_df6e33e1eeb15573c41dc74f436c34d52bbc6da6a58dc61725d2e979209e824e = $this->env->getExtension("native_profiler");
        $__internal_df6e33e1eeb15573c41dc74f436c34d52bbc6da6a58dc61725d2e979209e824e->enter($__internal_df6e33e1eeb15573c41dc74f436c34d52bbc6da6a58dc61725d2e979209e824e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "central"));

        // line 53
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("onsubmit" => "return validateForm(checkUrl);")));
        echo "
    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"container\">

        <div class=\"form-group row\">
            <div class=\"col-sm-2\">
                <div class=\"form-inline\">
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"form-inline\">
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_d", array()), 'label', array("label_attr" => array("style" => "font-size: 150%"), "label" => "Desde:"));
        echo "
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_d", array()), 'errors');
        echo "
                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_d", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"form-inline\">
                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_h", array()), 'label', array("label_attr" => array("style" => "font-size: 150%"), "label" => "Hasta:"));
        echo "
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_h", array()), 'errors');
        echo "
                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_h", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
                </div>
            </div>
            <div class=\"col-sm-2\">
                <div class=\"form-inline\">
                </div>
            </div>
        </div>
        <div class=\"form-group row\">
            <div class=\"col-md-6\">
                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temporalidad", array()), 'label', array("label_attr" => array("style" => "font-size: 150%"), "label" => "Temporalidad:"));
        echo "
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temporalidad", array()), 'errors');
        echo "
                ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temporalidad", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
            </div>
        </div>
        ";
        // line 88
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div> <!-- /container -->

";
        
        $__internal_df6e33e1eeb15573c41dc74f436c34d52bbc6da6a58dc61725d2e979209e824e->leave($__internal_df6e33e1eeb15573c41dc74f436c34d52bbc6da6a58dc61725d2e979209e824e_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:TableroControl:formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 88,  212 => 85,  208 => 84,  204 => 83,  191 => 73,  187 => 72,  183 => 71,  175 => 66,  171 => 65,  167 => 64,  154 => 54,  149 => 53,  143 => 52,  131 => 51,  108 => 33,  98 => 22,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  71 => 11,  65 => 10,  56 => 7,  52 => 6,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'ControlBundle:Default:.twig' %}*/
/* */
/* {% block bootstrap %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" />*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap-table/bootstrap-table.css') }}">*/
/*     <link href="{{ asset('css/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript" src="{{ asset('js/bootstrap-table/bootstrap-table.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/bootstrap-table/locale/bootstrap-table-es-AR.js') }}"></script>*/
/*     <script src="{{ asset('js/jquery/jquery-ui.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/SMA/formularios.js') }}"></script>*/
/*     <script type="text/javascript">*/
/*         var salida = -1;*/
/*         function checkUrl() {*/
/* */
/* */
/*             $.ajax({*/
/*                  url: "{{node}}/{{checkconfn2}}?callback=?".concat("&fecha_d=").concat(document.getElementById("ConfN2_fecha_d").value.replace("-", "")).concat("&fecha_h=").concat(document.getElementById("ConfN2_fecha_h").value.replace("-", "")),*/
/*                 async: false,*/
/*                 dataType: "jsonp",*/
/*                 success: function (data) {*/
/*                     salida = 1;*/
/*          {#           if (data[0].count === "0") {*/
/*                         salida = 0;*/
/*                         alert("No existen datos");*/
/*                     } else {*/
/*                         salida = 1;*/
/*                     }#}*/
/*                 }*/
/* */
/*             });*/
/* */
/*         }*/
/*         function validateForm(funcCallback)*/
/*         {*/
/*             funcCallback();*/
/*             if (salida == 1) {*/
/*                 return true;*/
/*             } else {*/
/*                 return false;*/
/*             }*/
/*         }*/
/*         ;*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block centralHeader %}<h2 style="margin-left: 20px"> titulo </h2>{% endblock %}*/
/* {% block central %}*/
/*     {{ form_start(form, {'attr': {'onsubmit':'return validateForm(checkUrl);'}}) }}*/
/*     {{ form_errors(form) }}*/
/*     <div class="container">*/
/* */
/*         <div class="form-group row">*/
/*             <div class="col-sm-2">*/
/*                 <div class="form-inline">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*                 <div class="form-inline">*/
/*                     {{ form_label(form.fecha_d, 'Desde:',{'label_attr':{'style':'font-size: 150%'}}) }}*/
/*                     {{ form_errors(form.fecha_d)}}*/
/*                     {{ form_widget(form.fecha_d,{'attr':{'class':'form-control input-lg'} }  ) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*                 <div class="form-inline">*/
/*                     {{ form_label(form.fecha_h, 'Hasta:',{'label_attr':{'style':'font-size: 150%'}}) }}*/
/*                     {{ form_errors(form.fecha_h)}}*/
/*                     {{ form_widget(form.fecha_h,{'attr':{'class':'form-control input-lg'} }  ) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-2">*/
/*                 <div class="form-inline">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group row">*/
/*             <div class="col-md-6">*/
/*                 {{ form_label(form.temporalidad, 'Temporalidad:',{'label_attr':{'style':'font-size: 150%'}}) }}*/
/*                 {{ form_errors(form.temporalidad)}}*/
/*                 {{ form_widget(form.temporalidad,{'attr':{'class':'form-control input-lg'} }  ) }}*/
/*             </div>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div> <!-- /container -->*/
/* */
/* {% endblock %}*/
