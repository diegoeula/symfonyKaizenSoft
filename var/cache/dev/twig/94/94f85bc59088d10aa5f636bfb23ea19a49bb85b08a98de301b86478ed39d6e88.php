<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7b2d81fb76db853e23e20476e3caf9647f529d6c0e0193e2cf7c84f51a9c3300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_60d85f67cba656417eff2461b20effca6f4a73f7d458940ecc9e50ac18c5009c = $this->env->getExtension("native_profiler");
        $__internal_60d85f67cba656417eff2461b20effca6f4a73f7d458940ecc9e50ac18c5009c->enter($__internal_60d85f67cba656417eff2461b20effca6f4a73f7d458940ecc9e50ac18c5009c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60d85f67cba656417eff2461b20effca6f4a73f7d458940ecc9e50ac18c5009c->leave($__internal_60d85f67cba656417eff2461b20effca6f4a73f7d458940ecc9e50ac18c5009c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1207584f9262013b490ff2aa224318eecc860c276521c5dfe62b1ef23e7588b6 = $this->env->getExtension("native_profiler");
        $__internal_1207584f9262013b490ff2aa224318eecc860c276521c5dfe62b1ef23e7588b6->enter($__internal_1207584f9262013b490ff2aa224318eecc860c276521c5dfe62b1ef23e7588b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1207584f9262013b490ff2aa224318eecc860c276521c5dfe62b1ef23e7588b6->leave($__internal_1207584f9262013b490ff2aa224318eecc860c276521c5dfe62b1ef23e7588b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e0067101275fdd9708972b3eab6a42442a829baa0d352f8f367bfe301643096 = $this->env->getExtension("native_profiler");
        $__internal_4e0067101275fdd9708972b3eab6a42442a829baa0d352f8f367bfe301643096->enter($__internal_4e0067101275fdd9708972b3eab6a42442a829baa0d352f8f367bfe301643096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4e0067101275fdd9708972b3eab6a42442a829baa0d352f8f367bfe301643096->leave($__internal_4e0067101275fdd9708972b3eab6a42442a829baa0d352f8f367bfe301643096_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_174c6af3b71e003c37315681dc8d43e9f7426c18195262fe29ed663d71cba5a9 = $this->env->getExtension("native_profiler");
        $__internal_174c6af3b71e003c37315681dc8d43e9f7426c18195262fe29ed663d71cba5a9->enter($__internal_174c6af3b71e003c37315681dc8d43e9f7426c18195262fe29ed663d71cba5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_174c6af3b71e003c37315681dc8d43e9f7426c18195262fe29ed663d71cba5a9->leave($__internal_174c6af3b71e003c37315681dc8d43e9f7426c18195262fe29ed663d71cba5a9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
