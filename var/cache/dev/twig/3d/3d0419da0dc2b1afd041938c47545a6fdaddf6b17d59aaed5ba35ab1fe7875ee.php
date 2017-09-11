<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_93e9d0c13e70aaab2085ea5f7f846b0ca526addd8c793173cebe7a029f16eb77 extends Twig_Template
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
        $__internal_e9acbec67f513cb2908a758d32763ba267a96e3df04cd31a41edd9fc968cab5e = $this->env->getExtension("native_profiler");
        $__internal_e9acbec67f513cb2908a758d32763ba267a96e3df04cd31a41edd9fc968cab5e->enter($__internal_e9acbec67f513cb2908a758d32763ba267a96e3df04cd31a41edd9fc968cab5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e9acbec67f513cb2908a758d32763ba267a96e3df04cd31a41edd9fc968cab5e->leave($__internal_e9acbec67f513cb2908a758d32763ba267a96e3df04cd31a41edd9fc968cab5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
