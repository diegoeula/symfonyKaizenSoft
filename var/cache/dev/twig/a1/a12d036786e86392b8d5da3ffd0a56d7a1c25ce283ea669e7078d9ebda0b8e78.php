<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f4872ba9ca12551342d02470ee64f7ea055154353945ff11ea7a13f69fb9b11a extends Twig_Template
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
        $__internal_18bfbb0c1a30088618c137077b573f336fe5181044269159e18a98f27a9da068 = $this->env->getExtension("native_profiler");
        $__internal_18bfbb0c1a30088618c137077b573f336fe5181044269159e18a98f27a9da068->enter($__internal_18bfbb0c1a30088618c137077b573f336fe5181044269159e18a98f27a9da068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_18bfbb0c1a30088618c137077b573f336fe5181044269159e18a98f27a9da068->leave($__internal_18bfbb0c1a30088618c137077b573f336fe5181044269159e18a98f27a9da068_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
