<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_cbf6a516a174ba77a383959570a7b5a4bbf7501c548e64e71b422e83489b3062 extends Twig_Template
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
        $__internal_11d6911cb041ae6d5ba2aa9a856128d6b90905599a51980fde4dd802864765c9 = $this->env->getExtension("native_profiler");
        $__internal_11d6911cb041ae6d5ba2aa9a856128d6b90905599a51980fde4dd802864765c9->enter($__internal_11d6911cb041ae6d5ba2aa9a856128d6b90905599a51980fde4dd802864765c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_11d6911cb041ae6d5ba2aa9a856128d6b90905599a51980fde4dd802864765c9->leave($__internal_11d6911cb041ae6d5ba2aa9a856128d6b90905599a51980fde4dd802864765c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
