<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_341aa906a514f8fde85eabf7b30d1dec9dac04ba679d767d893674c2ffe7b4c3 extends Twig_Template
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
        $__internal_69fba9bd86744bc57d644db26c59e2355847d3861b997bdf824ffba43795352b = $this->env->getExtension("native_profiler");
        $__internal_69fba9bd86744bc57d644db26c59e2355847d3861b997bdf824ffba43795352b->enter($__internal_69fba9bd86744bc57d644db26c59e2355847d3861b997bdf824ffba43795352b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_69fba9bd86744bc57d644db26c59e2355847d3861b997bdf824ffba43795352b->leave($__internal_69fba9bd86744bc57d644db26c59e2355847d3861b997bdf824ffba43795352b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
