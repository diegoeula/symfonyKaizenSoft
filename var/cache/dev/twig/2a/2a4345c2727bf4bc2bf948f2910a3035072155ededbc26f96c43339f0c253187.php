<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_01f60ee3136cb4bdde33d6ee8ed2de4ee617e866a57dcddeb1a7086b45d22ee4 extends Twig_Template
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
        $__internal_8a0fa36d17701854b64745625dfc14b2207bece6db28a5bcc71cb54dd1568bd3 = $this->env->getExtension("native_profiler");
        $__internal_8a0fa36d17701854b64745625dfc14b2207bece6db28a5bcc71cb54dd1568bd3->enter($__internal_8a0fa36d17701854b64745625dfc14b2207bece6db28a5bcc71cb54dd1568bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8a0fa36d17701854b64745625dfc14b2207bece6db28a5bcc71cb54dd1568bd3->leave($__internal_8a0fa36d17701854b64745625dfc14b2207bece6db28a5bcc71cb54dd1568bd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
