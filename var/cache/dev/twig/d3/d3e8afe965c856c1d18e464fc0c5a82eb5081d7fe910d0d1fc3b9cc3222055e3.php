<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_17b6df7f744c157c62fb041691f47f749efd9703804028a26b704582df717ef6 extends Twig_Template
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
        $__internal_2fc0638dec7ad6e55a8b951bd0754311822d9237274aa89cc324d787694634aa = $this->env->getExtension("native_profiler");
        $__internal_2fc0638dec7ad6e55a8b951bd0754311822d9237274aa89cc324d787694634aa->enter($__internal_2fc0638dec7ad6e55a8b951bd0754311822d9237274aa89cc324d787694634aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2fc0638dec7ad6e55a8b951bd0754311822d9237274aa89cc324d787694634aa->leave($__internal_2fc0638dec7ad6e55a8b951bd0754311822d9237274aa89cc324d787694634aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
