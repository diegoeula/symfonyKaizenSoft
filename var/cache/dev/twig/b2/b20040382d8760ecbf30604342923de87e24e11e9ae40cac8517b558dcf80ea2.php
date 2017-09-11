<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5ce46d8db805b7d4723a5d0cda6b651ab601347d8a65831d6305071e50b45805 extends Twig_Template
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
        $__internal_0a8b43b45c941d2e3cdb60871997b71b2dcaaf79be3be800e12e1232301efb46 = $this->env->getExtension("native_profiler");
        $__internal_0a8b43b45c941d2e3cdb60871997b71b2dcaaf79be3be800e12e1232301efb46->enter($__internal_0a8b43b45c941d2e3cdb60871997b71b2dcaaf79be3be800e12e1232301efb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0a8b43b45c941d2e3cdb60871997b71b2dcaaf79be3be800e12e1232301efb46->leave($__internal_0a8b43b45c941d2e3cdb60871997b71b2dcaaf79be3be800e12e1232301efb46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
