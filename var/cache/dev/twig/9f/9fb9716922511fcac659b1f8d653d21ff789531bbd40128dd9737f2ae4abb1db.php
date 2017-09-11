<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1dbfa03af566b139f7cb9cd9c7200221fde76f22aa0ceb8908abd5588f6800fb extends Twig_Template
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
        $__internal_f602986c3bbab62a786ff31de9a85eb45957f5eb20caac17fd898d3539b479df = $this->env->getExtension("native_profiler");
        $__internal_f602986c3bbab62a786ff31de9a85eb45957f5eb20caac17fd898d3539b479df->enter($__internal_f602986c3bbab62a786ff31de9a85eb45957f5eb20caac17fd898d3539b479df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f602986c3bbab62a786ff31de9a85eb45957f5eb20caac17fd898d3539b479df->leave($__internal_f602986c3bbab62a786ff31de9a85eb45957f5eb20caac17fd898d3539b479df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
