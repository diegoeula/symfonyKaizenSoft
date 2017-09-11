<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_0f4ae49b813b54934c99548b9e7ec829e56590e782a1c91317b1aa7c2bfcb903 extends Twig_Template
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
        $__internal_af4450c5cb8e51cc97fcf0c4e7a8fcb687e22b0ed88dc28c59487053ce161aa0 = $this->env->getExtension("native_profiler");
        $__internal_af4450c5cb8e51cc97fcf0c4e7a8fcb687e22b0ed88dc28c59487053ce161aa0->enter($__internal_af4450c5cb8e51cc97fcf0c4e7a8fcb687e22b0ed88dc28c59487053ce161aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_af4450c5cb8e51cc97fcf0c4e7a8fcb687e22b0ed88dc28c59487053ce161aa0->leave($__internal_af4450c5cb8e51cc97fcf0c4e7a8fcb687e22b0ed88dc28c59487053ce161aa0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */
