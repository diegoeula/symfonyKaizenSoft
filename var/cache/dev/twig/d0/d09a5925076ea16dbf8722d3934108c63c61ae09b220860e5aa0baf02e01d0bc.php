<?php

/* ControlBundle:Default:form_conf.html.twig */
class __TwigTemplate_3c08f127ab62b625caa73d4dcc567670ced6c6480f456540c6f3b36e524d2673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ControlBundle:Default:.twig", "ControlBundle:Default:form_conf.html.twig", 1);
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
        $__internal_d2f03f050ed5e026bfc4e4107dcefa485d06d810a2f03716befca6cd3ba9219e = $this->env->getExtension("native_profiler");
        $__internal_d2f03f050ed5e026bfc4e4107dcefa485d06d810a2f03716befca6cd3ba9219e->enter($__internal_d2f03f050ed5e026bfc4e4107dcefa485d06d810a2f03716befca6cd3ba9219e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:Default:form_conf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2f03f050ed5e026bfc4e4107dcefa485d06d810a2f03716befca6cd3ba9219e->leave($__internal_d2f03f050ed5e026bfc4e4107dcefa485d06d810a2f03716befca6cd3ba9219e_prof);

    }

    // line 3
    public function block_bootstrap($context, array $blocks = array())
    {
        $__internal_c5e7d4d656e9cf280395b754eaf67f904cfb55f0b1a9b2244c28f1c81281239d = $this->env->getExtension("native_profiler");
        $__internal_c5e7d4d656e9cf280395b754eaf67f904cfb55f0b1a9b2244c28f1c81281239d->enter($__internal_c5e7d4d656e9cf280395b754eaf67f904cfb55f0b1a9b2244c28f1c81281239d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

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
        
        $__internal_c5e7d4d656e9cf280395b754eaf67f904cfb55f0b1a9b2244c28f1c81281239d->leave($__internal_c5e7d4d656e9cf280395b754eaf67f904cfb55f0b1a9b2244c28f1c81281239d_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7a3d96b0cde86b84e0d93af3542162a1d99d8df713e43657a54195bb872feb4 = $this->env->getExtension("native_profiler");
        $__internal_b7a3d96b0cde86b84e0d93af3542162a1d99d8df713e43657a54195bb872feb4->enter($__internal_b7a3d96b0cde86b84e0d93af3542162a1d99d8df713e43657a54195bb872feb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
      
";
        
        $__internal_b7a3d96b0cde86b84e0d93af3542162a1d99d8df713e43657a54195bb872feb4->leave($__internal_b7a3d96b0cde86b84e0d93af3542162a1d99d8df713e43657a54195bb872feb4_prof);

    }

    // line 19
    public function block_centralHeader($context, array $blocks = array())
    {
        $__internal_d395368f5270cfce16f4206d5e8a6d6bff7133ecb6f25c5c9b594d763cd022b1 = $this->env->getExtension("native_profiler");
        $__internal_d395368f5270cfce16f4206d5e8a6d6bff7133ecb6f25c5c9b594d763cd022b1->enter($__internal_d395368f5270cfce16f4206d5e8a6d6bff7133ecb6f25c5c9b594d763cd022b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "centralHeader"));

        echo "<h2 style=\"margin-left: 20px\"> ";
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo")), "html", null, true);
        echo " </h2>";
        
        $__internal_d395368f5270cfce16f4206d5e8a6d6bff7133ecb6f25c5c9b594d763cd022b1->leave($__internal_d395368f5270cfce16f4206d5e8a6d6bff7133ecb6f25c5c9b594d763cd022b1_prof);

    }

    // line 20
    public function block_central($context, array $blocks = array())
    {
        $__internal_111433c55621e214093a2568e0b6ff04ddba0bf085f273e971eb7714f35b4dc9 = $this->env->getExtension("native_profiler");
        $__internal_111433c55621e214093a2568e0b6ff04ddba0bf085f273e971eb7714f35b4dc9->enter($__internal_111433c55621e214093a2568e0b6ff04ddba0bf085f273e971eb7714f35b4dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "central"));

        // line 21
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("onsubmit" => "return validateForm(checkUrl);")));
        echo "
    ";
        // line 22
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
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_d", array()), 'label', array("label_attr" => array("style" => "font-size: 150%"), "label" => "Desde:"));
        echo "
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_d", array()), 'errors');
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_d", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"form-inline\">
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_h", array()), 'label', array("label_attr" => array("style" => "font-size: 150%"), "label" => "Hasta:"));
        echo "
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_h", array()), 'errors');
        echo "
                    ";
        // line 41
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
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temporalidad", array()), 'label', array("label_attr" => array("style" => "font-size: 150%"), "label" => "Temporalidad:"));
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temporalidad", array()), 'errors');
        echo "
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temporalidad", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
            </div>
        </div>
        ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div> <!-- /container -->

";
        
        $__internal_111433c55621e214093a2568e0b6ff04ddba0bf085f273e971eb7714f35b4dc9->leave($__internal_111433c55621e214093a2568e0b6ff04ddba0bf085f273e971eb7714f35b4dc9_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:Default:form_conf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 56,  181 => 53,  177 => 52,  173 => 51,  160 => 41,  156 => 40,  152 => 39,  144 => 34,  140 => 33,  136 => 32,  123 => 22,  118 => 21,  112 => 20,  98 => 19,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  71 => 11,  65 => 10,  56 => 7,  52 => 6,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
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
/*       */
/* {% endblock %}*/
/* */
/* {% block centralHeader %}<h2 style="margin-left: 20px"> {{titulo}} </h2>{% endblock %}*/
/* {% block central %}*/
/*     {{ form_start(form, {'attr': {'onsubmit':'return validateForm(checkUrl);'}}) }}*/
/*     {{ form_errors(form) }}*/
/*     <div class="container">*/
/*        */
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
