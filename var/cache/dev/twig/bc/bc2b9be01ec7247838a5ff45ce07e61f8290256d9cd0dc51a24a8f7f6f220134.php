<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_547f7ed7d8862792e6011de2fb4d674bad32622c599679847d44853efa171b90 extends Twig_Template
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
        $__internal_4279f7abe2d67c25965c4f2fea8c2deee68c6aa44bcccaf3e2d7627a1e16b887 = $this->env->getExtension("native_profiler");
        $__internal_4279f7abe2d67c25965c4f2fea8c2deee68c6aa44bcccaf3e2d7627a1e16b887->enter($__internal_4279f7abe2d67c25965c4f2fea8c2deee68c6aa44bcccaf3e2d7627a1e16b887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4279f7abe2d67c25965c4f2fea8c2deee68c6aa44bcccaf3e2d7627a1e16b887->leave($__internal_4279f7abe2d67c25965c4f2fea8c2deee68c6aa44bcccaf3e2d7627a1e16b887_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
