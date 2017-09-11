<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0ef2054fbc705af160d77afa4e5e13ce744004b02021b42448dff124d25196bd extends Twig_Template
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
        $__internal_f53967cbc782c08561052afcac2c9b652a34fcafa2f8864a164bf7900fb6e9cb = $this->env->getExtension("native_profiler");
        $__internal_f53967cbc782c08561052afcac2c9b652a34fcafa2f8864a164bf7900fb6e9cb->enter($__internal_f53967cbc782c08561052afcac2c9b652a34fcafa2f8864a164bf7900fb6e9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f53967cbc782c08561052afcac2c9b652a34fcafa2f8864a164bf7900fb6e9cb->leave($__internal_f53967cbc782c08561052afcac2c9b652a34fcafa2f8864a164bf7900fb6e9cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
