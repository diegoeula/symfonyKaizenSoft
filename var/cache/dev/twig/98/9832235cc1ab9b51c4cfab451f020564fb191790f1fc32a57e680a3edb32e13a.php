<?php

/* ControlBundle:Default:index.html.twig */
class __TwigTemplate_2134f2f9ddecb3c57a3a66f69a396c9561ec260f05e8843ad924214ddd471c0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_dac_simplificada.html.twig", "ControlBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'bootstrap' => array($this, 'block_bootstrap'),
            'topnav' => array($this, 'block_topnav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_dac_simplificada.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce5e9bed829180c50a33c8aaaed7ed5ae827ed4820ba06dbd02e714a38ca134e = $this->env->getExtension("native_profiler");
        $__internal_ce5e9bed829180c50a33c8aaaed7ed5ae827ed4820ba06dbd02e714a38ca134e->enter($__internal_ce5e9bed829180c50a33c8aaaed7ed5ae827ed4820ba06dbd02e714a38ca134e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce5e9bed829180c50a33c8aaaed7ed5ae827ed4820ba06dbd02e714a38ca134e->leave($__internal_ce5e9bed829180c50a33c8aaaed7ed5ae827ed4820ba06dbd02e714a38ca134e_prof);

    }

    // line 3
    public function block_bootstrap($context, array $blocks = array())
    {
        $__internal_7ccbe5ed3f773ff4d4850e4a7a2a538430fe6a241ace2a82042e7e03a9dd51ea = $this->env->getExtension("native_profiler");
        $__internal_7ccbe5ed3f773ff4d4850e4a7a2a538430fe6a241ace2a82042e7e03a9dd51ea->enter($__internal_7ccbe5ed3f773ff4d4850e4a7a2a538430fe6a241ace2a82042e7e03a9dd51ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        echo "    
    ";
        // line 4
        $this->displayParentBlock("bootstrap", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome/font-awesome.css"), "html", null, true);
        echo "\">
";
        
        $__internal_7ccbe5ed3f773ff4d4850e4a7a2a538430fe6a241ace2a82042e7e03a9dd51ea->leave($__internal_7ccbe5ed3f773ff4d4850e4a7a2a538430fe6a241ace2a82042e7e03a9dd51ea_prof);

    }

    // line 10
    public function block_topnav($context, array $blocks = array())
    {
        $__internal_b3ebbb52437974a6f6534e02c1a1f2393211516a018e3656617f38f8b3791b7a = $this->env->getExtension("native_profiler");
        $__internal_b3ebbb52437974a6f6534e02c1a1f2393211516a018e3656617f38f8b3791b7a->enter($__internal_b3ebbb52437974a6f6534e02c1a1f2393211516a018e3656617f38f8b3791b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topnav"));

        // line 11
        echo "
    <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">Tablero de Control</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              ";
        // line 20
        echo "            </div>
        </div><!-- /.navbar-collapse -->
    </nav>
";
        
        $__internal_b3ebbb52437974a6f6534e02c1a1f2393211516a018e3656617f38f8b3791b7a->leave($__internal_b3ebbb52437974a6f6534e02c1a1f2393211516a018e3656617f38f8b3791b7a_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  66 => 11,  60 => 10,  51 => 6,  47 => 5,  43 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base_dac_simplificada.html.twig' %}*/
/* */
/* {% block bootstrap %}    */
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/font-awesome/font-awesome.css') }}">*/
/* {% endblock %}*/
/* */
/* */
/* {% block topnav %}*/
/* */
/*     <nav class="navbar navbar-default">*/
/*         <div class="container-fluid">*/
/*             <div class="navbar-header">*/
/*                 <a class="navbar-brand" href="#">Tablero de Control</a>*/
/*             </div>*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*               {#  {{ knp_menu_render('DacSmaBundle:MenuBuilder:smaMainMenu', {'currentClass': 'active', 'template': 'DacSmaBundle:Menu:knp_menu.html.twig'}) }}*/
/*                 {{ knp_menu_render('DacSmaBundle:MenuBuilder:userMenu', {'currentClass': 'active', 'template': 'DacSmaBundle:Menu:knp_menu.html.twig'}) }}#}*/
/*             </div>*/
/*         </div><!-- /.navbar-collapse -->*/
/*     </nav>*/
/* {% endblock %}*/
