<?php

/* ControlBundle:Funcionalidad:new.html.twig */
class __TwigTemplate_59722d64c64fef29583152eb445110ea1dfcb8da74d9b2aac2400f26a330c979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DacAdminBundle:Default:index.html.twig", "ControlBundle:Funcionalidad:new.html.twig", 1);
        $this->blocks = array(
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DacAdminBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_226926cdc36f8367eaf380e950a4819201688248b3432181410351b2c148a652 = $this->env->getExtension("native_profiler");
        $__internal_226926cdc36f8367eaf380e950a4819201688248b3432181410351b2c148a652->enter($__internal_226926cdc36f8367eaf380e950a4819201688248b3432181410351b2c148a652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:Funcionalidad:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_226926cdc36f8367eaf380e950a4819201688248b3432181410351b2c148a652->leave($__internal_226926cdc36f8367eaf380e950a4819201688248b3432181410351b2c148a652_prof);

    }

    // line 2
    public function block_central($context, array $blocks = array())
    {
        $__internal_2b856404f0dd88115c3d1080e97385127cad5631a17b9890b0bdaeca255b42ff = $this->env->getExtension("native_profiler");
        $__internal_2b856404f0dd88115c3d1080e97385127cad5631a17b9890b0bdaeca255b42ff->enter($__internal_2b856404f0dd88115c3d1080e97385127cad5631a17b9890b0bdaeca255b42ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "central"));

        // line 3
        echo "    <h1>Crear Funcionalidad</h1>

    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div style=\"padding: 10px ; margin: 10px\">
        <div class=\"form-group row\">
        <div class=\"form-inline\">
            <div class='col-sm-2' style='height: 30px'>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadNombre", array()), 'label', array("label" => "Nombre"));
        echo "</div>
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadNombre", array()), 'errors');
        echo "
            <div class='col-sm-5'>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadNombre", array()), 'widget', array("attr" => array("class" => "input-lg", "style" => "height: 30px"), "required" => "true"));
        echo "</div>
        </div>
        </div>
        <div class=\"form-group row\">
        <div class=\"form-inline\">
          <div class='col-sm-2' style='height: 30px'>  ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadDescripcion", array()), 'label', array("label" => "Descripcion"));
        echo "</div>
              ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadDescripcion", array()), 'errors');
        echo "
            <div class='col-sm-5'>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadDescripcion", array()), 'widget', array("attr" => array("class" => "input-group-lg", "style" => "height: 30px")));
        echo "</div>
        </div>
        </div>
        <div class=\"form-group row\">
        <div class=\"form-inline\">
            <div class='col-sm-2' style='height: 30px'>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadRoute", array()), 'label', array("label" => "Ruta"));
        echo "</div>
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadRoute", array()), 'errors');
        echo "
            <div class='col-sm-5'>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadRoute", array()), 'widget', array("attr" => array("class" => "input-lg", "style" => "height: 30px"), "required" => "true"));
        echo "</div>
        </div>
        </div>
        <div class=\"form-group row\">
        <div class=\"form-inline \">
            <div class='col-sm-2'>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadPadre", array()), 'label', array("label" => "Padre"));
        echo "</div>
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadPadre", array()), 'errors');
        echo "
            <div class='col-sm-5'>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadPadre", array()), 'widget', array("attr" => array("class" => " input-lg", "style" => "height: 30px")));
        echo "</div>
        </div>
        </div>
        <div class=\"form-group row\">
        <div class=\"form-inline\">
            <div class='col-sm-2'>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadOrden", array()), 'label', array("label" => "Orden"));
        echo "</div>
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadOrden", array()), 'errors');
        echo "
            <div class='col-sm-5' >";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "funcionalidadOrden", array()), 'widget', array("attr" => array("class" => "input-lg", "style" => "height: 30px"), "required" => "true"));
        echo "</div>
        </div>
        </div>
         <div class=\"form-group row\">
        <div class=\"form-inline\">
            <div class='col-sm-2'>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isAdmin", array()), 'label', array("label" => "Menu Admin?"));
        echo "</div>
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isAdmin", array()), 'errors');
        echo "
            <div class='col-sm-5' >";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isAdmin", array()), 'widget', array("attr" => array("class" => "input-lg", "style" => "height: 30px")));
        echo "</div>
        </div>
</div>

    </div>
    ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_2b856404f0dd88115c3d1080e97385127cad5631a17b9890b0bdaeca255b42ff->leave($__internal_2b856404f0dd88115c3d1080e97385127cad5631a17b9890b0bdaeca255b42ff_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:Funcionalidad:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 52,  143 => 47,  139 => 46,  135 => 45,  127 => 40,  123 => 39,  119 => 38,  111 => 33,  107 => 32,  103 => 31,  95 => 26,  91 => 25,  87 => 24,  79 => 19,  75 => 18,  71 => 17,  63 => 12,  59 => 11,  55 => 10,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'DacAdminBundle:Default:index.html.twig' %}*/
/* {% block central %}*/
/*     <h1>Crear Funcionalidad</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/*     <div style="padding: 10px ; margin: 10px">*/
/*         <div class="form-group row">*/
/*         <div class="form-inline">*/
/*             <div class='col-sm-2' style='height: 30px'>{{ form_label(form.funcionalidadNombre, 'Nombre') }}</div>*/
/*             {{ form_errors(form.funcionalidadNombre)}}*/
/*             <div class='col-sm-5'>{{ form_widget(form.funcionalidadNombre,{'attr':{'class':'input-lg', 'style':'height: 30px'} , 'required': 'true'}  ) }}</div>*/
/*         </div>*/
/*         </div>*/
/*         <div class="form-group row">*/
/*         <div class="form-inline">*/
/*           <div class='col-sm-2' style='height: 30px'>  {{ form_label(form.funcionalidadDescripcion, 'Descripcion') }}</div>*/
/*               {{ form_errors(form.funcionalidadDescripcion)}}*/
/*             <div class='col-sm-5'>{{ form_widget(form.funcionalidadDescripcion,{'attr':{'class':'input-group-lg', 'style':'height: 30px'} }  ) }}</div>*/
/*         </div>*/
/*         </div>*/
/*         <div class="form-group row">*/
/*         <div class="form-inline">*/
/*             <div class='col-sm-2' style='height: 30px'>{{ form_label(form.funcionalidadRoute, 'Ruta') }}</div>*/
/*             {{ form_errors(form.funcionalidadRoute)}}*/
/*             <div class='col-sm-5'>{{ form_widget(form.funcionalidadRoute,{'attr':{'class':'input-lg', 'style':'height: 30px'} , 'required': 'true'}  ) }}</div>*/
/*         </div>*/
/*         </div>*/
/*         <div class="form-group row">*/
/*         <div class="form-inline ">*/
/*             <div class='col-sm-2'>{{ form_label(form.funcionalidadPadre, 'Padre') }}</div>*/
/*             {{ form_errors(form.funcionalidadPadre)}}*/
/*             <div class='col-sm-5'>{{ form_widget(form.funcionalidadPadre,{'attr':{'class':' input-lg', 'style':'height: 30px'} }  ) }}</div>*/
/*         </div>*/
/*         </div>*/
/*         <div class="form-group row">*/
/*         <div class="form-inline">*/
/*             <div class='col-sm-2'>{{ form_label(form.funcionalidadOrden, 'Orden') }}</div>*/
/*             {{ form_errors(form.funcionalidadOrden)}}*/
/*             <div class='col-sm-5' >{{ form_widget(form.funcionalidadOrden,{'attr':{'class':'input-lg', 'style':'height: 30px'} ,'required': 'true'}  ) }}</div>*/
/*         </div>*/
/*         </div>*/
/*          <div class="form-group row">*/
/*         <div class="form-inline">*/
/*             <div class='col-sm-2'>{{ form_label(form.isAdmin, 'Menu Admin?') }}</div>*/
/*             {{ form_errors(form.isAdmin)}}*/
/*             <div class='col-sm-5' >{{ form_widget(form.isAdmin,{'attr':{'class':'input-lg', 'style':'height: 30px'} }  ) }}</div>*/
/*         </div>*/
/* </div>*/
/* */
/*     </div>*/
/*     {{ form_end(form) }}*/
/* */
/* */
/* {% endblock %}*/
/* */
