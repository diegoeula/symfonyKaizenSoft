<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_aeb630d98aef071d884253f720e27cfc0d298d4dc444d01990e629f56a125e08 extends Twig_Template
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
        $__internal_fb4adeaf8ef26595388d9a3de6904848294c25e05d997766c8a32b96ffdf2d89 = $this->env->getExtension("native_profiler");
        $__internal_fb4adeaf8ef26595388d9a3de6904848294c25e05d997766c8a32b96ffdf2d89->enter($__internal_fb4adeaf8ef26595388d9a3de6904848294c25e05d997766c8a32b96ffdf2d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fb4adeaf8ef26595388d9a3de6904848294c25e05d997766c8a32b96ffdf2d89->leave($__internal_fb4adeaf8ef26595388d9a3de6904848294c25e05d997766c8a32b96ffdf2d89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
