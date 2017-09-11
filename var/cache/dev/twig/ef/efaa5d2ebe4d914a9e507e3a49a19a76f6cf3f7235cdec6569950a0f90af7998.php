<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_305a6f68275827c9eee6ae44bcffccfd362042d3b28a78c17a6678952d2c264e extends Twig_Template
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
        $__internal_8f72283406bd7a900be748671eede58db709439efb3d4a5c337236aaa97efc94 = $this->env->getExtension("native_profiler");
        $__internal_8f72283406bd7a900be748671eede58db709439efb3d4a5c337236aaa97efc94->enter($__internal_8f72283406bd7a900be748671eede58db709439efb3d4a5c337236aaa97efc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8f72283406bd7a900be748671eede58db709439efb3d4a5c337236aaa97efc94->leave($__internal_8f72283406bd7a900be748671eede58db709439efb3d4a5c337236aaa97efc94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
