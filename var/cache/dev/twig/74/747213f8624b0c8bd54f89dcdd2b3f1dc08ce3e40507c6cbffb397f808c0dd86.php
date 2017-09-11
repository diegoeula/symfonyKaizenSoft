<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8071dada4b680bfe3b7cacbea1c717aaf5fa496b81c33c147056a0e5e4721955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10725a2d5b8460aefbafa4926b0b1d677aad72be6a6681366b1845028f4c955a = $this->env->getExtension("native_profiler");
        $__internal_10725a2d5b8460aefbafa4926b0b1d677aad72be6a6681366b1845028f4c955a->enter($__internal_10725a2d5b8460aefbafa4926b0b1d677aad72be6a6681366b1845028f4c955a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_10725a2d5b8460aefbafa4926b0b1d677aad72be6a6681366b1845028f4c955a->leave($__internal_10725a2d5b8460aefbafa4926b0b1d677aad72be6a6681366b1845028f4c955a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0071864bc17fa3a7ac197e586356887264affc67cc8b0ee6bd44a004f36b6795 = $this->env->getExtension("native_profiler");
        $__internal_0071864bc17fa3a7ac197e586356887264affc67cc8b0ee6bd44a004f36b6795->enter($__internal_0071864bc17fa3a7ac197e586356887264affc67cc8b0ee6bd44a004f36b6795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0071864bc17fa3a7ac197e586356887264affc67cc8b0ee6bd44a004f36b6795->leave($__internal_0071864bc17fa3a7ac197e586356887264affc67cc8b0ee6bd44a004f36b6795_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
