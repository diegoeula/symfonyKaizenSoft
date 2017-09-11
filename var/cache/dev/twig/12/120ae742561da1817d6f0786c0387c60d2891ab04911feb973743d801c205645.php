<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0c719951d7386ae779cb2416f94999461e28864f3d5d8e3b726c55cd263f00e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51daa2f6465e873c717ae6b4fc7c9a70770dd278b68df9d5ebee9162ea1464e2 = $this->env->getExtension("native_profiler");
        $__internal_51daa2f6465e873c717ae6b4fc7c9a70770dd278b68df9d5ebee9162ea1464e2->enter($__internal_51daa2f6465e873c717ae6b4fc7c9a70770dd278b68df9d5ebee9162ea1464e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51daa2f6465e873c717ae6b4fc7c9a70770dd278b68df9d5ebee9162ea1464e2->leave($__internal_51daa2f6465e873c717ae6b4fc7c9a70770dd278b68df9d5ebee9162ea1464e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eef2db21bf65f7f95c5f92de4b8b365021ceb62569a0f41f14f17a1a2dd148d4 = $this->env->getExtension("native_profiler");
        $__internal_eef2db21bf65f7f95c5f92de4b8b365021ceb62569a0f41f14f17a1a2dd148d4->enter($__internal_eef2db21bf65f7f95c5f92de4b8b365021ceb62569a0f41f14f17a1a2dd148d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eef2db21bf65f7f95c5f92de4b8b365021ceb62569a0f41f14f17a1a2dd148d4->leave($__internal_eef2db21bf65f7f95c5f92de4b8b365021ceb62569a0f41f14f17a1a2dd148d4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb1b5ae2b78d3a46519a0c2260377825006940d4fc48680ffbad49f0462f81d7 = $this->env->getExtension("native_profiler");
        $__internal_bb1b5ae2b78d3a46519a0c2260377825006940d4fc48680ffbad49f0462f81d7->enter($__internal_bb1b5ae2b78d3a46519a0c2260377825006940d4fc48680ffbad49f0462f81d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb1b5ae2b78d3a46519a0c2260377825006940d4fc48680ffbad49f0462f81d7->leave($__internal_bb1b5ae2b78d3a46519a0c2260377825006940d4fc48680ffbad49f0462f81d7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef0256441d36aea223801f070b7ce81d4636f3dcd09b874ddc032149c688519f = $this->env->getExtension("native_profiler");
        $__internal_ef0256441d36aea223801f070b7ce81d4636f3dcd09b874ddc032149c688519f->enter($__internal_ef0256441d36aea223801f070b7ce81d4636f3dcd09b874ddc032149c688519f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ef0256441d36aea223801f070b7ce81d4636f3dcd09b874ddc032149c688519f->leave($__internal_ef0256441d36aea223801f070b7ce81d4636f3dcd09b874ddc032149c688519f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
