<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7b4a2802d7a77b0cb2394e4fe926943485b5b0ea553241a6b74be5d0d100fd45 extends Twig_Template
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
        $__internal_cd626ac3e54c9fd0fd5975476bf573c577a049d8ae18bf2babf666314b459135 = $this->env->getExtension("native_profiler");
        $__internal_cd626ac3e54c9fd0fd5975476bf573c577a049d8ae18bf2babf666314b459135->enter($__internal_cd626ac3e54c9fd0fd5975476bf573c577a049d8ae18bf2babf666314b459135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cd626ac3e54c9fd0fd5975476bf573c577a049d8ae18bf2babf666314b459135->leave($__internal_cd626ac3e54c9fd0fd5975476bf573c577a049d8ae18bf2babf666314b459135_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
