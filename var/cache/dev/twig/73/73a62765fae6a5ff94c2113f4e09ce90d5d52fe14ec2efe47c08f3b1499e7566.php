<?php

/* ControlBundle:Funcionalidad:show.html.twig */
class __TwigTemplate_ec974df8ebd1b68f1333a716fa33f5427a50f434b4e8367bb3be45f325f7056b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ControlBundle:Funcionalidad:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7183b46c4ef5e39a3ba28393a84073c36530867db28799328087c0d67e334944 = $this->env->getExtension("native_profiler");
        $__internal_7183b46c4ef5e39a3ba28393a84073c36530867db28799328087c0d67e334944->enter($__internal_7183b46c4ef5e39a3ba28393a84073c36530867db28799328087c0d67e334944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:Funcionalidad:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7183b46c4ef5e39a3ba28393a84073c36530867db28799328087c0d67e334944->leave($__internal_7183b46c4ef5e39a3ba28393a84073c36530867db28799328087c0d67e334944_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50e2caadf03f2e6b645250239eb2b3e6c4a89a7a0eccf6af2c03f90d24f24a55 = $this->env->getExtension("native_profiler");
        $__internal_50e2caadf03f2e6b645250239eb2b3e6c4a89a7a0eccf6af2c03f90d24f24a55->enter($__internal_50e2caadf03f2e6b645250239eb2b3e6c4a89a7a0eccf6af2c03f90d24f24a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Funcionalidad</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Funcionalidadnombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "funcionalidadNombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Funcionalidaddescripcion</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "funcionalidadDescripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Funcionalidadroute</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "funcionalidadRoute", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Funcionalidadorden</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "funcionalidadOrden", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Funcionalidadalta</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "funcionalidadAlta", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Funcionalidadusualta</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "funcionalidadUsuAlta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isadmin</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isAdmin", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("funcionalidad");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("funcionalidad_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_50e2caadf03f2e6b645250239eb2b3e6c4a89a7a0eccf6af2c03f90d24f24a55->leave($__internal_50e2caadf03f2e6b645250239eb2b3e6c4a89a7a0eccf6af2c03f90d24f24a55_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:Funcionalidad:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 54,  115 => 50,  107 => 45,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Funcionalidad</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Funcionalidadnombre</th>*/
/*                 <td>{{ entity.funcionalidadNombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Funcionalidaddescripcion</th>*/
/*                 <td>{{ entity.funcionalidadDescripcion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Funcionalidadroute</th>*/
/*                 <td>{{ entity.funcionalidadRoute }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Funcionalidadorden</th>*/
/*                 <td>{{ entity.funcionalidadOrden }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Funcionalidadalta</th>*/
/*                 <td>{{ entity.funcionalidadAlta|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Funcionalidadusualta</th>*/
/*                 <td>{{ entity.funcionalidadUsuAlta }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Isadmin</th>*/
/*                 <td>{{ entity.isAdmin }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('funcionalidad') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('funcionalidad_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
