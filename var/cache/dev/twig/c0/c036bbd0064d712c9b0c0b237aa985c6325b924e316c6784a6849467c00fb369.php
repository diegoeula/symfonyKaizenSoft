<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_48f031288a24cdcdc7aa1fdef722e316fb6b873313b0fa75c6d684c2a199985c extends Twig_Template
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
        $__internal_3eeb678526116695ff8677fd5e535ef026252bd6feabbe6b77c39b9aa838653e = $this->env->getExtension("native_profiler");
        $__internal_3eeb678526116695ff8677fd5e535ef026252bd6feabbe6b77c39b9aa838653e->enter($__internal_3eeb678526116695ff8677fd5e535ef026252bd6feabbe6b77c39b9aa838653e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3eeb678526116695ff8677fd5e535ef026252bd6feabbe6b77c39b9aa838653e->leave($__internal_3eeb678526116695ff8677fd5e535ef026252bd6feabbe6b77c39b9aa838653e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
