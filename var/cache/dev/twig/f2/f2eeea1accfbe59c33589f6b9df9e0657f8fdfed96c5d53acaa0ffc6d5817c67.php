<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_afd9368647c5804ee349776fad9cc785b1adba227d29b32e7f508e73902970a8 extends Twig_Template
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
        $__internal_697207dd632a03850196a1f6e9ff5b7f3c382266b81474b2a51baf6ffe59fbe8 = $this->env->getExtension("native_profiler");
        $__internal_697207dd632a03850196a1f6e9ff5b7f3c382266b81474b2a51baf6ffe59fbe8->enter($__internal_697207dd632a03850196a1f6e9ff5b7f3c382266b81474b2a51baf6ffe59fbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_697207dd632a03850196a1f6e9ff5b7f3c382266b81474b2a51baf6ffe59fbe8->leave($__internal_697207dd632a03850196a1f6e9ff5b7f3c382266b81474b2a51baf6ffe59fbe8_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
