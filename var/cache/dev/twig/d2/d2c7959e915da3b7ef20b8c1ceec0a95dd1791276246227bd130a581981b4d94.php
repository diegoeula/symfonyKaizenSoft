<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_084b07fa3db16a691b2bd0b9892a69075271b5f403a615caba4861662a0ca333 extends Twig_Template
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
        $__internal_131598fbac408005ba125b032099ed9419ec43057916f17c541964f3d3f733b9 = $this->env->getExtension("native_profiler");
        $__internal_131598fbac408005ba125b032099ed9419ec43057916f17c541964f3d3f733b9->enter($__internal_131598fbac408005ba125b032099ed9419ec43057916f17c541964f3d3f733b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_131598fbac408005ba125b032099ed9419ec43057916f17c541964f3d3f733b9->leave($__internal_131598fbac408005ba125b032099ed9419ec43057916f17c541964f3d3f733b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
