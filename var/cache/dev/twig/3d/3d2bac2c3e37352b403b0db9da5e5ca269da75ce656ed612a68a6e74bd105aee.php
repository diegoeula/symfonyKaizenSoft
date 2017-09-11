<?php

/* ControlBundle:Funcionalidad:edit.html.twig */
class __TwigTemplate_e8d781e43fa5806916e405bb0bde6bfab68c626a073e4cd8b4704f8d528a87fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ControlBundle:Funcionalidad:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42a828168855b7403032cc3f513d363e9c27966b0afe7af798a365ee707af44a = $this->env->getExtension("native_profiler");
        $__internal_42a828168855b7403032cc3f513d363e9c27966b0afe7af798a365ee707af44a->enter($__internal_42a828168855b7403032cc3f513d363e9c27966b0afe7af798a365ee707af44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:Funcionalidad:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42a828168855b7403032cc3f513d363e9c27966b0afe7af798a365ee707af44a->leave($__internal_42a828168855b7403032cc3f513d363e9c27966b0afe7af798a365ee707af44a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5acf2417dce4d5fe6fcaa19c15c20591917a47052c17342579b67a4c3ebcbcc = $this->env->getExtension("native_profiler");
        $__internal_c5acf2417dce4d5fe6fcaa19c15c20591917a47052c17342579b67a4c3ebcbcc->enter($__internal_c5acf2417dce4d5fe6fcaa19c15c20591917a47052c17342579b67a4c3ebcbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Funcionalidad edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("funcionalidad");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_c5acf2417dce4d5fe6fcaa19c15c20591917a47052c17342579b67a4c3ebcbcc->leave($__internal_c5acf2417dce4d5fe6fcaa19c15c20591917a47052c17342579b67a4c3ebcbcc_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:Funcionalidad:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Funcionalidad edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('funcionalidad') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
