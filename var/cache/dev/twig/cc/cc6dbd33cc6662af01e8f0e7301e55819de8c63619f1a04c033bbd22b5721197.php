<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8598c2b01ae867735900517c4f85af3d1df46543651d7394770fc2953530f0eb extends Twig_Template
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
        $__internal_d9108b7ce0e14f911c9b5c765be1773f4a521fc42e8d62a698ed627a41dc3154 = $this->env->getExtension("native_profiler");
        $__internal_d9108b7ce0e14f911c9b5c765be1773f4a521fc42e8d62a698ed627a41dc3154->enter($__internal_d9108b7ce0e14f911c9b5c765be1773f4a521fc42e8d62a698ed627a41dc3154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d9108b7ce0e14f911c9b5c765be1773f4a521fc42e8d62a698ed627a41dc3154->leave($__internal_d9108b7ce0e14f911c9b5c765be1773f4a521fc42e8d62a698ed627a41dc3154_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
