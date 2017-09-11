<?php

/* DacTemplateBundle:Default:index.html.twig */
class __TwigTemplate_7d93dc20c831148d5ad9fc9ef0e840ed356d9777cd15568ec55bb6c506f1d839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "DacTemplateBundle:Default:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c35117741026f1dae7b54ef7cd7e6dd26d524687bf450247407198a72da9382a = $this->env->getExtension("native_profiler");
        $__internal_c35117741026f1dae7b54ef7cd7e6dd26d524687bf450247407198a72da9382a->enter($__internal_c35117741026f1dae7b54ef7cd7e6dd26d524687bf450247407198a72da9382a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DacTemplateBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c35117741026f1dae7b54ef7cd7e6dd26d524687bf450247407198a72da9382a->leave($__internal_c35117741026f1dae7b54ef7cd7e6dd26d524687bf450247407198a72da9382a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ee973054dc43b3a066fa51e64971d0cfb56a4dcf2b0920d73ba42a02036922f = $this->env->getExtension("native_profiler");
        $__internal_0ee973054dc43b3a066fa51e64971d0cfb56a4dcf2b0920d73ba42a02036922f->enter($__internal_0ee973054dc43b3a066fa51e64971d0cfb56a4dcf2b0920d73ba42a02036922f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "My Awesome Page!";
        
        $__internal_0ee973054dc43b3a066fa51e64971d0cfb56a4dcf2b0920d73ba42a02036922f->leave($__internal_0ee973054dc43b3a066fa51e64971d0cfb56a4dcf2b0920d73ba42a02036922f_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_bfdb3a18f3eb70521eeeb18d0854c320ba7ba12d8163d62a2d9c51a2a7146925 = $this->env->getExtension("native_profiler");
        $__internal_bfdb3a18f3eb70521eeeb18d0854c320ba7ba12d8163d62a2d9c51a2a7146925->enter($__internal_bfdb3a18f3eb70521eeeb18d0854c320ba7ba12d8163d62a2d9c51a2a7146925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class=\"header black-bg\">
              <div class=\"sidebar-toggle-box\">
                  <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
              </div>
            <!--logo start-->
            <a href=\"\" class=\"logo\"><b>Tablero Control</b></a>
            <!--logo end-->
            <div class=\"nav notify-row\" id=\"top_menu\">
                <!--  notification start -->
                ";
        // line 21
        echo $this->env->getExtension('knp_menu')->render("main", array("currentClass" => "active", "template" => "ControlBundle:Default:dash_topbar.html.twig"));
        echo "
                
                <!--  notification end -->
            </div>
            <div class=\"top-menu\">
            \t<ul class=\"nav pull-right top-menu\">
                    <li><a class=\"logout\" href=\"login\">Logout</a></li>
            \t</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
\t\t\t";
        // line 40
        echo $this->env->getExtension('knp_menu')->render("sidebar", array("currentClass" => "active", "template" => "ControlBundle:Default:dash_sidebar.html.twig"));
        echo "
 </div>
      </aside>
      <!--sidebar end-->
";
        
        $__internal_bfdb3a18f3eb70521eeeb18d0854c320ba7ba12d8163d62a2d9c51a2a7146925->leave($__internal_bfdb3a18f3eb70521eeeb18d0854c320ba7ba12d8163d62a2d9c51a2a7146925_prof);

    }

    public function getTemplateName()
    {
        return "DacTemplateBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 40,  68 => 21,  53 => 8,  47 => 7,  35 => 5,  11 => 3,);
    }
}
/* {#{% set menu = knp_menu_get('sidebar', [], {include_homepage: false}) %}*/
/* {{ knp_menu_render('main') }}#}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}My Awesome Page!{% endblock %}*/
/*  */
/* {% block header %}*/
/*       <!-- ***********************************************************************************************************************************************************/
/*       TOP BAR CONTENT & NOTIFICATIONS*/
/*       *********************************************************************************************************************************************************** -->*/
/*       <!--header start-->*/
/*       <header class="header black-bg">*/
/*               <div class="sidebar-toggle-box">*/
/*                   <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>*/
/*               </div>*/
/*             <!--logo start-->*/
/*             <a href="" class="logo"><b>Tablero Control</b></a>*/
/*             <!--logo end-->*/
/*             <div class="nav notify-row" id="top_menu">*/
/*                 <!--  notification start -->*/
/*                 {{ knp_menu_render('main', {'currentClass': 'active', 'template': 'ControlBundle:Default:dash_topbar.html.twig'}) }}*/
/*                 */
/*                 <!--  notification end -->*/
/*             </div>*/
/*             <div class="top-menu">*/
/*             	<ul class="nav pull-right top-menu">*/
/*                     <li><a class="logout" href="login">Logout</a></li>*/
/*             	</ul>*/
/*             </div>*/
/*         </header>*/
/*       <!--header end-->*/
/*       */
/*       <!-- ***********************************************************************************************************************************************************/
/*       MAIN SIDEBAR MENU*/
/*       *********************************************************************************************************************************************************** -->*/
/*       <!--sidebar start-->*/
/*       <aside>*/
/*           <div id="sidebar"  class="nav-collapse ">*/
/*               <!-- sidebar menu start-->*/
/* 			{{ knp_menu_render('sidebar', {'currentClass': 'active', 'template': 'ControlBundle:Default:dash_sidebar.html.twig'}) }}*/
/*  </div>*/
/*       </aside>*/
/*       <!--sidebar end-->*/
/* {% endblock %}*/
/*  */
/* */
