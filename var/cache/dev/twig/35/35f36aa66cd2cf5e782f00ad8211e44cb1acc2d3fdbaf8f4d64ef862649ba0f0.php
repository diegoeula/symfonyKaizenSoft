<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0fb4f171f8dbb15895ecdb7a12260d5750ad3aba5e90ff837818f371d6157fa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a0f770333c16560e69070257427ad3dda139c7fa95a608d24459ca10825104da = $this->env->getExtension("native_profiler");
        $__internal_a0f770333c16560e69070257427ad3dda139c7fa95a608d24459ca10825104da->enter($__internal_a0f770333c16560e69070257427ad3dda139c7fa95a608d24459ca10825104da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0f770333c16560e69070257427ad3dda139c7fa95a608d24459ca10825104da->leave($__internal_a0f770333c16560e69070257427ad3dda139c7fa95a608d24459ca10825104da_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2ffa1e5be5622107ff72acbeb10326a945f3303db5f90610913cc8eab2c878b = $this->env->getExtension("native_profiler");
        $__internal_c2ffa1e5be5622107ff72acbeb10326a945f3303db5f90610913cc8eab2c878b->enter($__internal_c2ffa1e5be5622107ff72acbeb10326a945f3303db5f90610913cc8eab2c878b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c2ffa1e5be5622107ff72acbeb10326a945f3303db5f90610913cc8eab2c878b->leave($__internal_c2ffa1e5be5622107ff72acbeb10326a945f3303db5f90610913cc8eab2c878b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebddcafd087acf8b230dc642678985e0c9de41859af07937bbae23268af0da36 = $this->env->getExtension("native_profiler");
        $__internal_ebddcafd087acf8b230dc642678985e0c9de41859af07937bbae23268af0da36->enter($__internal_ebddcafd087acf8b230dc642678985e0c9de41859af07937bbae23268af0da36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ebddcafd087acf8b230dc642678985e0c9de41859af07937bbae23268af0da36->leave($__internal_ebddcafd087acf8b230dc642678985e0c9de41859af07937bbae23268af0da36_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
