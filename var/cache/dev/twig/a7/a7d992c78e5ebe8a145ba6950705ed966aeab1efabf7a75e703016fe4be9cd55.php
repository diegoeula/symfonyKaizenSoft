<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6b4b0aaa1d8d8444aa7725c88eebdd03c47e6fcb5c1d7d013ace0b911585a3b6 extends Twig_Template
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
        $__internal_a1c333eeeaebb09cb85135bef86ad79ff614e9e51c6b23c59988c40668e25310 = $this->env->getExtension("native_profiler");
        $__internal_a1c333eeeaebb09cb85135bef86ad79ff614e9e51c6b23c59988c40668e25310->enter($__internal_a1c333eeeaebb09cb85135bef86ad79ff614e9e51c6b23c59988c40668e25310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a1c333eeeaebb09cb85135bef86ad79ff614e9e51c6b23c59988c40668e25310->leave($__internal_a1c333eeeaebb09cb85135bef86ad79ff614e9e51c6b23c59988c40668e25310_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
