<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2178bd00fd1b9ca1da2252dfc2ff8a39b191c4354e6bd80450f12a9ea3224d76 extends Twig_Template
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
        $__internal_9c61f790c8c5ddb3db58d741a341a37b77c80a40ba92975bcb6d190c76ba69c3 = $this->env->getExtension("native_profiler");
        $__internal_9c61f790c8c5ddb3db58d741a341a37b77c80a40ba92975bcb6d190c76ba69c3->enter($__internal_9c61f790c8c5ddb3db58d741a341a37b77c80a40ba92975bcb6d190c76ba69c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9c61f790c8c5ddb3db58d741a341a37b77c80a40ba92975bcb6d190c76ba69c3->leave($__internal_9c61f790c8c5ddb3db58d741a341a37b77c80a40ba92975bcb6d190c76ba69c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
