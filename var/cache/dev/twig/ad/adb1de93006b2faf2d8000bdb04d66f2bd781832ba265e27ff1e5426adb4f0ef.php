<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e846e56cb2ad66745cf7e090bc84773843a95085c49cfc4a8ce66ce5c295331d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd7858525d8409f7a237b7d0bd025d3a7e3954692ab2432f10f265d227051d90 = $this->env->getExtension("native_profiler");
        $__internal_fd7858525d8409f7a237b7d0bd025d3a7e3954692ab2432f10f265d227051d90->enter($__internal_fd7858525d8409f7a237b7d0bd025d3a7e3954692ab2432f10f265d227051d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd7858525d8409f7a237b7d0bd025d3a7e3954692ab2432f10f265d227051d90->leave($__internal_fd7858525d8409f7a237b7d0bd025d3a7e3954692ab2432f10f265d227051d90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06f51e6db5e1e187c91172c9fcbb167bbbde3acd665712b0390c554dc07b1fff = $this->env->getExtension("native_profiler");
        $__internal_06f51e6db5e1e187c91172c9fcbb167bbbde3acd665712b0390c554dc07b1fff->enter($__internal_06f51e6db5e1e187c91172c9fcbb167bbbde3acd665712b0390c554dc07b1fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_06f51e6db5e1e187c91172c9fcbb167bbbde3acd665712b0390c554dc07b1fff->leave($__internal_06f51e6db5e1e187c91172c9fcbb167bbbde3acd665712b0390c554dc07b1fff_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35da19c640d3dac313ddc5327c9515b0a82ea420dc7b5f654edd881391e343de = $this->env->getExtension("native_profiler");
        $__internal_35da19c640d3dac313ddc5327c9515b0a82ea420dc7b5f654edd881391e343de->enter($__internal_35da19c640d3dac313ddc5327c9515b0a82ea420dc7b5f654edd881391e343de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_35da19c640d3dac313ddc5327c9515b0a82ea420dc7b5f654edd881391e343de->leave($__internal_35da19c640d3dac313ddc5327c9515b0a82ea420dc7b5f654edd881391e343de_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47fdf6e0a0c86d7f648b4deabff1dc7e3f0a15bf9c72ee1ecc38e7226ed2acbe = $this->env->getExtension("native_profiler");
        $__internal_47fdf6e0a0c86d7f648b4deabff1dc7e3f0a15bf9c72ee1ecc38e7226ed2acbe->enter($__internal_47fdf6e0a0c86d7f648b4deabff1dc7e3f0a15bf9c72ee1ecc38e7226ed2acbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_47fdf6e0a0c86d7f648b4deabff1dc7e3f0a15bf9c72ee1ecc38e7226ed2acbe->leave($__internal_47fdf6e0a0c86d7f648b4deabff1dc7e3f0a15bf9c72ee1ecc38e7226ed2acbe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
