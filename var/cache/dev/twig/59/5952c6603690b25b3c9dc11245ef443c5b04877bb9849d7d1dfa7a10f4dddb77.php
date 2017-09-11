<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8552573b95a1d556099fd360dfcb5e79eac5b406fd38ef2ce87ca66ec520c442 extends Twig_Template
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
        $__internal_401099649f786f5f29a0bf17c1eb336188c7a0ccefdf5d49aedb8aaa03c9e63a = $this->env->getExtension("native_profiler");
        $__internal_401099649f786f5f29a0bf17c1eb336188c7a0ccefdf5d49aedb8aaa03c9e63a->enter($__internal_401099649f786f5f29a0bf17c1eb336188c7a0ccefdf5d49aedb8aaa03c9e63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_401099649f786f5f29a0bf17c1eb336188c7a0ccefdf5d49aedb8aaa03c9e63a->leave($__internal_401099649f786f5f29a0bf17c1eb336188c7a0ccefdf5d49aedb8aaa03c9e63a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
