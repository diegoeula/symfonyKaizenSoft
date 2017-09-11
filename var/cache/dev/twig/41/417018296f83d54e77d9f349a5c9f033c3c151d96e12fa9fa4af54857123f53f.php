<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_872d483ab458f3aaecd66dba5083be61eaee4cf2af08b60776ee9f28ce641002 extends Twig_Template
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
        $__internal_7371a123f8cee44b55a57925924443cf9e1c3d85de2ef17e354227d78ed6fc93 = $this->env->getExtension("native_profiler");
        $__internal_7371a123f8cee44b55a57925924443cf9e1c3d85de2ef17e354227d78ed6fc93->enter($__internal_7371a123f8cee44b55a57925924443cf9e1c3d85de2ef17e354227d78ed6fc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7371a123f8cee44b55a57925924443cf9e1c3d85de2ef17e354227d78ed6fc93->leave($__internal_7371a123f8cee44b55a57925924443cf9e1c3d85de2ef17e354227d78ed6fc93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
