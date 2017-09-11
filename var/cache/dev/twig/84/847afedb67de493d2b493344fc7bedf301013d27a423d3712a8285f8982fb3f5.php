<?php

/* ControlBundle:Default:index1.html.twig */
class __TwigTemplate_1c36924fbddcbd7aead75d76b3e7b764980fec75bbb86d95f5069988b7e48eed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "ControlBundle:Default:index1.html.twig", 3);
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
        $__internal_b021106b2505c46f12b956f8f9682f3e8391ce4a1f6bee982e775226a4348888 = $this->env->getExtension("native_profiler");
        $__internal_b021106b2505c46f12b956f8f9682f3e8391ce4a1f6bee982e775226a4348888->enter($__internal_b021106b2505c46f12b956f8f9682f3e8391ce4a1f6bee982e775226a4348888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:Default:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b021106b2505c46f12b956f8f9682f3e8391ce4a1f6bee982e775226a4348888->leave($__internal_b021106b2505c46f12b956f8f9682f3e8391ce4a1f6bee982e775226a4348888_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c94070f69e68a526cb5f17dd1e700c296bd503a0f88a2af8476124cca97c942f = $this->env->getExtension("native_profiler");
        $__internal_c94070f69e68a526cb5f17dd1e700c296bd503a0f88a2af8476124cca97c942f->enter($__internal_c94070f69e68a526cb5f17dd1e700c296bd503a0f88a2af8476124cca97c942f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "My Awesome Page!";
        
        $__internal_c94070f69e68a526cb5f17dd1e700c296bd503a0f88a2af8476124cca97c942f->leave($__internal_c94070f69e68a526cb5f17dd1e700c296bd503a0f88a2af8476124cca97c942f_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_38c94acb1fea33100fe26f8f9f88cc1fe2d6f9aac1c215f31cb254df78756142 = $this->env->getExtension("native_profiler");
        $__internal_38c94acb1fea33100fe26f8f9f88cc1fe2d6f9aac1c215f31cb254df78756142->enter($__internal_38c94acb1fea33100fe26f8f9f88cc1fe2d6f9aac1c215f31cb254df78756142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo $this->env->getExtension('knp_menu')->render("ControlBundle:Builder_n:topMenu", array("currentClass" => "active", "template" => "ControlBundle:Default:dash_topbar.html.twig"));
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
        echo $this->env->getExtension('knp_menu')->render("ControlBundle:Builder_n:sideMenu", array("currentClass" => "active", "template" => "ControlBundle:Default:dash_sidebar.html.twig"));
        echo "
 </div>
      </aside>
      <!--sidebar end-->
";
        
        $__internal_38c94acb1fea33100fe26f8f9f88cc1fe2d6f9aac1c215f31cb254df78756142->leave($__internal_38c94acb1fea33100fe26f8f9f88cc1fe2d6f9aac1c215f31cb254df78756142_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:Default:index1.html.twig";
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
/*                 {{ knp_menu_render('ControlBundle:Builder_n:topMenu', {'currentClass': 'active', 'template': 'ControlBundle:Default:dash_topbar.html.twig'}) }}*/
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
/* 			{{ knp_menu_render('ControlBundle:Builder_n:sideMenu', {'currentClass': 'active', 'template': 'ControlBundle:Default:dash_sidebar.html.twig'}) }}*/
/*  </div>*/
/*       </aside>*/
/*       <!--sidebar end-->*/
/* {% endblock %}*/
/*  */
/* */
