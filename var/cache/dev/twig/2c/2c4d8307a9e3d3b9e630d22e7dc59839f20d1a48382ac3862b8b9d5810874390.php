<?php

/* ControlBundle:Funcionalidad:index.html.twig */
class __TwigTemplate_2e8cb094cd535f92c8bd80a0755c872ecf8216c4b8e28ab9b84aaa84e57b55d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DacAdminBundle:Default:index.html.twig", "ControlBundle:Funcionalidad:index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DacAdminBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4e7c7eafc72129af1dcab697c1fd6886e369c8d87141504439e8601a33371d2 = $this->env->getExtension("native_profiler");
        $__internal_c4e7c7eafc72129af1dcab697c1fd6886e369c8d87141504439e8601a33371d2->enter($__internal_c4e7c7eafc72129af1dcab697c1fd6886e369c8d87141504439e8601a33371d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:Funcionalidad:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4e7c7eafc72129af1dcab697c1fd6886e369c8d87141504439e8601a33371d2->leave($__internal_c4e7c7eafc72129af1dcab697c1fd6886e369c8d87141504439e8601a33371d2_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e5f0376251bdaa1381679c0fabc225061f658ccf51eac4613f1405a6874234e = $this->env->getExtension("native_profiler");
        $__internal_0e5f0376251bdaa1381679c0fabc225061f658ccf51eac4613f1405a6874234e->enter($__internal_0e5f0376251bdaa1381679c0fabc225061f658ccf51eac4613f1405a6874234e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-table/bootstrap-table.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-table/locale/bootstrap-table-es-AR.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-table/bootstrap-table.css"), "html", null, true);
        echo "\">
    <script>
        function actionFormatter(value, row, index) {
    return [
        '<a class=\"edit ml10\" href=\"javascript:void(0)\" title=\"Edit\">',
        '<i class=\"glyphicon glyphicon-edit\"></i>',
        '</a>',
        '<a class=\"remove ml10\" href=\"javascript:void(0)\" title=\"Remove\">',
        '<i class=\"glyphicon glyphicon-remove\"></i>',
        '</a>'
    ].join('');
}

window.actionEvents = {
    'click .edit': function (e, value, row, index) {
        salida=\$('#'.concat(row.Id)).data('edit');
        window.location.assign(salida);
    },
    'click .remove': function (e, value, row, index) {
        if (confirm('Estas seguro que queres borrar el registro?')) {
            salida=\$('#'.concat(row.Id)).data('delete');
           window.location.assign(salida);
        } 
    }
};</script>
";
        
        $__internal_0e5f0376251bdaa1381679c0fabc225061f658ccf51eac4613f1405a6874234e->leave($__internal_0e5f0376251bdaa1381679c0fabc225061f658ccf51eac4613f1405a6874234e_prof);

    }

    // line 32
    public function block_central($context, array $blocks = array())
    {
        $__internal_4e591f215310d84da1a33ce28e57b3c3d1f2e1870b4ef4e44865d4059ae76bdc = $this->env->getExtension("native_profiler");
        $__internal_4e591f215310d84da1a33ce28e57b3c3d1f2e1870b4ef4e44865d4059ae76bdc->enter($__internal_4e591f215310d84da1a33ce28e57b3c3d1f2e1870b4ef4e44865d4059ae76bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "central"));

        // line 33
        echo "    <h1>Funcionalidades</h1>

    <table class=\"records_list\" data-toggle=\"table\">
        <thead>
            <tr>
                <th data-field=\"Id\">Id</th>
                <th data-field=\"Funcionalidadnombre\">Nombre</th>
                <th data-field=\"Funcionalidaddescripcion\">Descripcion</th>
                <th data-field=\"Funcionalidadroute\">Ruta</th>
                <th data-field=\"Funcionalidadpadre\">Padre</th>
                <th data-field=\"Funcionalidadorden\">Orden</th>
                <th data-field=\"Funcionalidadalta\">Fecha alta</th>
                <th data-field=\"Funcionalidadusualta\">Usuario Alta</th>
                <th data-field=\"action\" data-formatter=\"actionFormatter\" data-events=\"actionEvents\">Action</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 51
            echo "            <tr>
                <td data-edit=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("funcionalidad_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"
                    data-delete=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("funcionalidad_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "
                </td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "funcionalidadNombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "funcionalidadDescripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "funcionalidadRoute", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "funcionalidadPadre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "funcionalidadOrden", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            if ($this->getAttribute($context["entity"], "funcionalidadAlta", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "funcionalidadAlta", array()), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "funcionalidadUsuAlta", array()), "html", null, true);
            echo "</td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </tbody>
    </table>

    ";
        
        $__internal_4e591f215310d84da1a33ce28e57b3c3d1f2e1870b4ef4e44865d4059ae76bdc->leave($__internal_4e591f215310d84da1a33ce28e57b3c3d1f2e1870b4ef4e44865d4059ae76bdc_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:Funcionalidad:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 65,  158 => 61,  152 => 60,  148 => 59,  144 => 58,  140 => 57,  136 => 56,  132 => 55,  123 => 53,  119 => 52,  116 => 51,  112 => 50,  93 => 33,  87 => 32,  54 => 6,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'DacAdminBundle:Default:index.html.twig' %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript" src="{{ asset('js/bootstrap-table/bootstrap-table.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/bootstrap-table/locale/bootstrap-table-es-AR.js') }}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('js/bootstrap-table/bootstrap-table.css') }}">*/
/*     <script>*/
/*         function actionFormatter(value, row, index) {*/
/*     return [*/
/*         '<a class="edit ml10" href="javascript:void(0)" title="Edit">',*/
/*         '<i class="glyphicon glyphicon-edit"></i>',*/
/*         '</a>',*/
/*         '<a class="remove ml10" href="javascript:void(0)" title="Remove">',*/
/*         '<i class="glyphicon glyphicon-remove"></i>',*/
/*         '</a>'*/
/*     ].join('');*/
/* }*/
/* */
/* window.actionEvents = {*/
/*     'click .edit': function (e, value, row, index) {*/
/*         salida=$('#'.concat(row.Id)).data('edit');*/
/*         window.location.assign(salida);*/
/*     },*/
/*     'click .remove': function (e, value, row, index) {*/
/*         if (confirm('Estas seguro que queres borrar el registro?')) {*/
/*             salida=$('#'.concat(row.Id)).data('delete');*/
/*            window.location.assign(salida);*/
/*         } */
/*     }*/
/* };</script>*/
/* {% endblock %}*/
/* {% block central %}*/
/*     <h1>Funcionalidades</h1>*/
/* */
/*     <table class="records_list" data-toggle="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th data-field="Id">Id</th>*/
/*                 <th data-field="Funcionalidadnombre">Nombre</th>*/
/*                 <th data-field="Funcionalidaddescripcion">Descripcion</th>*/
/*                 <th data-field="Funcionalidadroute">Ruta</th>*/
/*                 <th data-field="Funcionalidadpadre">Padre</th>*/
/*                 <th data-field="Funcionalidadorden">Orden</th>*/
/*                 <th data-field="Funcionalidadalta">Fecha alta</th>*/
/*                 <th data-field="Funcionalidadusualta">Usuario Alta</th>*/
/*                 <th data-field="action" data-formatter="actionFormatter" data-events="actionEvents">Action</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td data-edit="{{ path('funcionalidad_edit', { 'id': entity.id }) }}"*/
/*                     data-delete="{{ path('funcionalidad_delete', { 'id': entity.id }) }}" id="{{ entity.id }}">{{ entity.id }}*/
/*                 </td>*/
/*                 <td>{{ entity.funcionalidadNombre }}</td>*/
/*                 <td>{{ entity.funcionalidadDescripcion }}</td>*/
/*                 <td>{{ entity.funcionalidadRoute }}</td>*/
/*                 <td>{{ entity.funcionalidadPadre }}</td>*/
/*                 <td>{{ entity.funcionalidadOrden }}</td>*/
/*                 <td>{% if entity.funcionalidadAlta %}{{ entity.funcionalidadAlta|date('d-m-Y H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ entity.funcionalidadUsuAlta }}</td>*/
/*                 */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     {% endblock %}*/
/* */
