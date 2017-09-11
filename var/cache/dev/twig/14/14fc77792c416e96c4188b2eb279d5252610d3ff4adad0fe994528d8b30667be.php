<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e07ba8fb3f78104bd93d85ad229010b34780b8560c0756bb666d6b07ec6fd7e9 extends Twig_Template
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
        $__internal_191688f06378d90829bc4da86653e63303f277498c9b10d0d571ec046abbf09e = $this->env->getExtension("native_profiler");
        $__internal_191688f06378d90829bc4da86653e63303f277498c9b10d0d571ec046abbf09e->enter($__internal_191688f06378d90829bc4da86653e63303f277498c9b10d0d571ec046abbf09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_191688f06378d90829bc4da86653e63303f277498c9b10d0d571ec046abbf09e->leave($__internal_191688f06378d90829bc4da86653e63303f277498c9b10d0d571ec046abbf09e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
