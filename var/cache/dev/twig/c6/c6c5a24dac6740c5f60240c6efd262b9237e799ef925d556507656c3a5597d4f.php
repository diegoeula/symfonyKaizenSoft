<?php

/* :user:edit.html.twig */
class __TwigTemplate_44b36e275131356396188cd8671c69dbd09b5688c8884e0bf53b2a1c1f94f5f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ControlBundle:Default:index1.html.twig", ":user:edit.html.twig", 1);
        $this->blocks = array(
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ControlBundle:Default:index1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_826bbeb233b93c266078df17cd511df638b1569142034311688c46a43fcfd707 = $this->env->getExtension("native_profiler");
        $__internal_826bbeb233b93c266078df17cd511df638b1569142034311688c46a43fcfd707->enter($__internal_826bbeb233b93c266078df17cd511df638b1569142034311688c46a43fcfd707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_826bbeb233b93c266078df17cd511df638b1569142034311688c46a43fcfd707->leave($__internal_826bbeb233b93c266078df17cd511df638b1569142034311688c46a43fcfd707_prof);

    }

    // line 3
    public function block_central($context, array $blocks = array())
    {
        $__internal_917a173d105ea5dbfef8ec07fbe0087d2199d58c3d320948d8f4e910f4089343 = $this->env->getExtension("native_profiler");
        $__internal_917a173d105ea5dbfef8ec07fbe0087d2199d58c3d320948d8f4e910f4089343->enter($__internal_917a173d105ea5dbfef8ec07fbe0087d2199d58c3d320948d8f4e910f4089343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "central"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_917a173d105ea5dbfef8ec07fbe0087d2199d58c3d320948d8f4e910f4089343->leave($__internal_917a173d105ea5dbfef8ec07fbe0087d2199d58c3d320948d8f4e910f4089343_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'ControlBundle:Default:index1.html.twig' %}*/
/* */
/* {% block central %}*/
/*     <h1>User edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
