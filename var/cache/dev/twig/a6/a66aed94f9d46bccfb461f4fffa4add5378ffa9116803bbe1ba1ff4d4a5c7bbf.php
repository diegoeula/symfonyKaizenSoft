<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1f830e3652077664c2ad5a800fb11266f507582f8331b13f76873a43e4869a26 extends Twig_Template
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
        $__internal_f060d3ba8be207574d271d322844b7032f4fc23ad19d8d5b44bb26225162e4f4 = $this->env->getExtension("native_profiler");
        $__internal_f060d3ba8be207574d271d322844b7032f4fc23ad19d8d5b44bb26225162e4f4->enter($__internal_f060d3ba8be207574d271d322844b7032f4fc23ad19d8d5b44bb26225162e4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f060d3ba8be207574d271d322844b7032f4fc23ad19d8d5b44bb26225162e4f4->leave($__internal_f060d3ba8be207574d271d322844b7032f4fc23ad19d8d5b44bb26225162e4f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
