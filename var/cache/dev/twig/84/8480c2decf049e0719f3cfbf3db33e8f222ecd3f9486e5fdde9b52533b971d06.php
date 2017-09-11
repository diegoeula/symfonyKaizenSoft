<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_17bbc1e37e7243155622a9c4d6baa71be37ab10f0b36eab274ab928deaf36a1a extends Twig_Template
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
        $__internal_d077c6df9bfe63c419925d60a417448f00556783a3f05656b9d37b0a4efb400d = $this->env->getExtension("native_profiler");
        $__internal_d077c6df9bfe63c419925d60a417448f00556783a3f05656b9d37b0a4efb400d->enter($__internal_d077c6df9bfe63c419925d60a417448f00556783a3f05656b9d37b0a4efb400d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d077c6df9bfe63c419925d60a417448f00556783a3f05656b9d37b0a4efb400d->leave($__internal_d077c6df9bfe63c419925d60a417448f00556783a3f05656b9d37b0a4efb400d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
