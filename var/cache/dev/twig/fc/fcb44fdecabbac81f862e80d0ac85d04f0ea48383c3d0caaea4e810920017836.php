<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b9c403b2086de260b818e3dcb5179bb5802f71a5ea60dcdb433ebf8876445337 extends Twig_Template
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
        $__internal_90a13699da26df8a1e14b94269647c20671bd36acd2532460dbe6beaf15b6385 = $this->env->getExtension("native_profiler");
        $__internal_90a13699da26df8a1e14b94269647c20671bd36acd2532460dbe6beaf15b6385->enter($__internal_90a13699da26df8a1e14b94269647c20671bd36acd2532460dbe6beaf15b6385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_90a13699da26df8a1e14b94269647c20671bd36acd2532460dbe6beaf15b6385->leave($__internal_90a13699da26df8a1e14b94269647c20671bd36acd2532460dbe6beaf15b6385_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
