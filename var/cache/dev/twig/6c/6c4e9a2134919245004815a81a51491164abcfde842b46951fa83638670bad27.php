<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e0364a66c0b1de69963eea1e6fc3b027038d99cd4a9e134095f144c5df387f55 extends Twig_Template
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
        $__internal_eacf53d032f6a0edaefa75f300cc95fbbf6586953c930673bfe927ee1f303663 = $this->env->getExtension("native_profiler");
        $__internal_eacf53d032f6a0edaefa75f300cc95fbbf6586953c930673bfe927ee1f303663->enter($__internal_eacf53d032f6a0edaefa75f300cc95fbbf6586953c930673bfe927ee1f303663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_eacf53d032f6a0edaefa75f300cc95fbbf6586953c930673bfe927ee1f303663->leave($__internal_eacf53d032f6a0edaefa75f300cc95fbbf6586953c930673bfe927ee1f303663_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
