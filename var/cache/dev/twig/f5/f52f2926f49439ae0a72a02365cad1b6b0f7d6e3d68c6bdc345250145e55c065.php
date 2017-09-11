<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9c253018a648f841481e8a8771d30337ca549fc8731f7d1f03126f197f28cd07 extends Twig_Template
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
        $__internal_30729e68b15de29e5c9cb464c543a8abfad8147451a62db91f8e47cb50025244 = $this->env->getExtension("native_profiler");
        $__internal_30729e68b15de29e5c9cb464c543a8abfad8147451a62db91f8e47cb50025244->enter($__internal_30729e68b15de29e5c9cb464c543a8abfad8147451a62db91f8e47cb50025244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_30729e68b15de29e5c9cb464c543a8abfad8147451a62db91f8e47cb50025244->leave($__internal_30729e68b15de29e5c9cb464c543a8abfad8147451a62db91f8e47cb50025244_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
