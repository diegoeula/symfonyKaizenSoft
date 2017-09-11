<?php

/* :user:new.html.twig */
class __TwigTemplate_82d8cd38e32a9aa54d4f42e76e2aa96631c4f32fe0b048da520b0de53c0f7168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4021e1374640e937cb42760d77b31ba6e475e9f1ef3722719db6808cd83d85d1 = $this->env->getExtension("native_profiler");
        $__internal_4021e1374640e937cb42760d77b31ba6e475e9f1ef3722719db6808cd83d85d1->enter($__internal_4021e1374640e937cb42760d77b31ba6e475e9f1ef3722719db6808cd83d85d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4021e1374640e937cb42760d77b31ba6e475e9f1ef3722719db6808cd83d85d1->leave($__internal_4021e1374640e937cb42760d77b31ba6e475e9f1ef3722719db6808cd83d85d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3713c72c8f2e94bbb9dd789cd59156f5a936cdc1a7a8b5c148061f2e6f2cbff2 = $this->env->getExtension("native_profiler");
        $__internal_3713c72c8f2e94bbb9dd789cd59156f5a936cdc1a7a8b5c148061f2e6f2cbff2->enter($__internal_3713c72c8f2e94bbb9dd789cd59156f5a936cdc1a7a8b5c148061f2e6f2cbff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3713c72c8f2e94bbb9dd789cd59156f5a936cdc1a7a8b5c148061f2e6f2cbff2->leave($__internal_3713c72c8f2e94bbb9dd789cd59156f5a936cdc1a7a8b5c148061f2e6f2cbff2_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
