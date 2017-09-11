<?php

/* ::base_1.html.twig */
class __TwigTemplate_4be50ec417695074d2853e5abc5a060caddf034f89b3de859b0b9c355e93edae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67e9f8ed2aa3284eebb5f82a9b64982dfe627ef4db95b93e425bbf720f09ee06 = $this->env->getExtension("native_profiler");
        $__internal_67e9f8ed2aa3284eebb5f82a9b64982dfe627ef4db95b93e425bbf720f09ee06->enter($__internal_67e9f8ed2aa3284eebb5f82a9b64982dfe627ef4db95b93e425bbf720f09ee06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_67e9f8ed2aa3284eebb5f82a9b64982dfe627ef4db95b93e425bbf720f09ee06->leave($__internal_67e9f8ed2aa3284eebb5f82a9b64982dfe627ef4db95b93e425bbf720f09ee06_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_094348e563c70533feb8235bbdf632030f323cc03dcd7cccd21615e8af6ede35 = $this->env->getExtension("native_profiler");
        $__internal_094348e563c70533feb8235bbdf632030f323cc03dcd7cccd21615e8af6ede35->enter($__internal_094348e563c70533feb8235bbdf632030f323cc03dcd7cccd21615e8af6ede35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_094348e563c70533feb8235bbdf632030f323cc03dcd7cccd21615e8af6ede35->leave($__internal_094348e563c70533feb8235bbdf632030f323cc03dcd7cccd21615e8af6ede35_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d1499e76fe0d4ffcfc67421f8192fc026f63ddfa2ba51a244fe4b1da2800bce = $this->env->getExtension("native_profiler");
        $__internal_4d1499e76fe0d4ffcfc67421f8192fc026f63ddfa2ba51a244fe4b1da2800bce->enter($__internal_4d1499e76fe0d4ffcfc67421f8192fc026f63ddfa2ba51a244fe4b1da2800bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4d1499e76fe0d4ffcfc67421f8192fc026f63ddfa2ba51a244fe4b1da2800bce->leave($__internal_4d1499e76fe0d4ffcfc67421f8192fc026f63ddfa2ba51a244fe4b1da2800bce_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c382d522026dffe8c4bb4875bb82916b1b415434fba26abd3b56a8bb81ed42b8 = $this->env->getExtension("native_profiler");
        $__internal_c382d522026dffe8c4bb4875bb82916b1b415434fba26abd3b56a8bb81ed42b8->enter($__internal_c382d522026dffe8c4bb4875bb82916b1b415434fba26abd3b56a8bb81ed42b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c382d522026dffe8c4bb4875bb82916b1b415434fba26abd3b56a8bb81ed42b8->leave($__internal_c382d522026dffe8c4bb4875bb82916b1b415434fba26abd3b56a8bb81ed42b8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_95962faf792a138d02ddf9775aef650121a18cf75ecd2abc8ddbbd0ecdfb9155 = $this->env->getExtension("native_profiler");
        $__internal_95962faf792a138d02ddf9775aef650121a18cf75ecd2abc8ddbbd0ecdfb9155->enter($__internal_95962faf792a138d02ddf9775aef650121a18cf75ecd2abc8ddbbd0ecdfb9155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_95962faf792a138d02ddf9775aef650121a18cf75ecd2abc8ddbbd0ecdfb9155->leave($__internal_95962faf792a138d02ddf9775aef650121a18cf75ecd2abc8ddbbd0ecdfb9155_prof);

    }

    public function getTemplateName()
    {
        return "::base_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
