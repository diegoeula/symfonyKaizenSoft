<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_365390b11a59f08eac210a04e7c43bb991a6ba1cc5d0e2865adeed82b03edf77 extends Twig_Template
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
        $__internal_6cb57e5047d588fd996bcae00faa52f3d286fff77812a155d5d06e80acbadfef = $this->env->getExtension("native_profiler");
        $__internal_6cb57e5047d588fd996bcae00faa52f3d286fff77812a155d5d06e80acbadfef->enter($__internal_6cb57e5047d588fd996bcae00faa52f3d286fff77812a155d5d06e80acbadfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6cb57e5047d588fd996bcae00faa52f3d286fff77812a155d5d06e80acbadfef->leave($__internal_6cb57e5047d588fd996bcae00faa52f3d286fff77812a155d5d06e80acbadfef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
