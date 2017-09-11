<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a333ce83d6dc0398dd695f4b6875d16b2fe630ac162b4200fdbb733202e7f07d extends Twig_Template
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
        $__internal_ac593a86c7ad4a2a27d8aecfcefc4976061fe255b32d941d558a9a5a6b1378ae = $this->env->getExtension("native_profiler");
        $__internal_ac593a86c7ad4a2a27d8aecfcefc4976061fe255b32d941d558a9a5a6b1378ae->enter($__internal_ac593a86c7ad4a2a27d8aecfcefc4976061fe255b32d941d558a9a5a6b1378ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ac593a86c7ad4a2a27d8aecfcefc4976061fe255b32d941d558a9a5a6b1378ae->leave($__internal_ac593a86c7ad4a2a27d8aecfcefc4976061fe255b32d941d558a9a5a6b1378ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
