<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c7c2dae628468b4f335bdf0b209f4417c7013f0b75012bc55f049c946984f18a extends Twig_Template
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
        $__internal_5d4f27009c16ad54f3a670c16dc6a2ee061adb53f6edbc314b32f536c118645e = $this->env->getExtension("native_profiler");
        $__internal_5d4f27009c16ad54f3a670c16dc6a2ee061adb53f6edbc314b32f536c118645e->enter($__internal_5d4f27009c16ad54f3a670c16dc6a2ee061adb53f6edbc314b32f536c118645e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5d4f27009c16ad54f3a670c16dc6a2ee061adb53f6edbc314b32f536c118645e->leave($__internal_5d4f27009c16ad54f3a670c16dc6a2ee061adb53f6edbc314b32f536c118645e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
