<?php

/* ControlBundle:Default:dash_sidebar.html.twig */
class __TwigTemplate_84570baebf32998482d152a0f242b8c0af5d039c9c861032051cbeac5dbfb0a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "ControlBundle:Default:dash_sidebar.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'profileElement' => array($this, 'block_profileElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f4b2cd7c61eb3702d6cfd6d8ef22a5d36e48d22248ad8be5a275f3a1a374b72 = $this->env->getExtension("native_profiler");
        $__internal_6f4b2cd7c61eb3702d6cfd6d8ef22a5d36e48d22248ad8be5a275f3a1a374b72->enter($__internal_6f4b2cd7c61eb3702d6cfd6d8ef22a5d36e48d22248ad8be5a275f3a1a374b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:Default:dash_sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f4b2cd7c61eb3702d6cfd6d8ef22a5d36e48d22248ad8be5a275f3a1a374b72->leave($__internal_6f4b2cd7c61eb3702d6cfd6d8ef22a5d36e48d22248ad8be5a275f3a1a374b72_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_0cc2c58857ce22356b382fdf4bf469b6296d711d0153d5eca722d61e15a4235b = $this->env->getExtension("native_profiler");
        $__internal_0cc2c58857ce22356b382fdf4bf469b6296d711d0153d5eca722d61e15a4235b->enter($__internal_0cc2c58857ce22356b382fdf4bf469b6296d711d0153d5eca722d61e15a4235b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "ControlBundle:Default:dash_sidebar.html.twig", 4);
        // line 5
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 6
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 7
            $context["is_dropdown"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array()), false)) : (false));
            // line 8
            $context["is_profile"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "profile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "profile", array()), false)) : (false));
            // line 9
            $context["divider_prepend"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array()), false)) : (false));
            // line 10
            $context["divider_append"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array()), false)) : (false));
            // line 11
            echo "
        ";
            // line 13
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 15
            if ((isset($context["divider_prepend"]) ? $context["divider_prepend"] : $this->getContext($context, "divider_prepend"))) {
                // line 16
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 18
            echo "
        ";
            // line 20
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 22
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 23
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array())), "method")) {
                // line 24
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 26
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 27
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 29
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 30
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 32
            echo "
        ";
            // line 34
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 35
            echo "        ";
            // line 36
            echo "
        ";
            // line 38
            echo "        ";
            // line 42
            echo "
        ";
            // line 44
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 45
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 47
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 48
            if ((isset($context["is_profile"]) ? $context["is_profile"] : $this->getContext($context, "is_profile"))) {
                // line 49
                echo "        ";
                $this->displayBlock("profileElement", $context, $blocks);
            } else {
                // line 51
                echo "        ";
                // line 52
                echo "        <li";
                echo $context["macros"]->getattributes(twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("icon" => null)));
                echo ">";
                // line 53
                if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                    // line 54
                    echo "            ";
                    $this->displayBlock("dropdownElement", $context, $blocks);
                } elseif (( !twig_test_empty($this->getAttribute(                // line 56
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array()) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                    // line 57
                    echo "            ";
                    $this->displayBlock("linkElement", $context, $blocks);
                } else {
                    // line 59
                    echo "            ";
                    $this->displayBlock("spanElement", $context, $blocks);
                }
                // line 61
                echo "            ";
                // line 62
                echo "            ";
                $this->displayBlock("list", $context, $blocks);
                echo "
        </li>";
            }
            // line 65
            if ((isset($context["divider_append"]) ? $context["divider_append"] : $this->getContext($context, "divider_append"))) {
                // line 66
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 68
            echo "    ";
        }
        
        $__internal_0cc2c58857ce22356b382fdf4bf469b6296d711d0153d5eca722d61e15a4235b->leave($__internal_0cc2c58857ce22356b382fdf4bf469b6296d711d0153d5eca722d61e15a4235b_prof);

    }

    // line 71
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_9bdf44905ea298bceeb9065a3c7d6cf5e54e5e4cb7315f41c8fa057a5be68970 = $this->env->getExtension("native_profiler");
        $__internal_9bdf44905ea298bceeb9065a3c7d6cf5e54e5e4cb7315f41c8fa057a5be68970->enter($__internal_9bdf44905ea298bceeb9065a3c7d6cf5e54e5e4cb7315f41c8fa057a5be68970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 72
        echo "    ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) == 1)) {
            // line 73
            echo "        <li class=\"divider-vertical\"></li>
        ";
        } else {
            // line 75
            echo "        <li class=\"divider\"></li>
        ";
        }
        // line 77
        echo "    ";
        
        $__internal_9bdf44905ea298bceeb9065a3c7d6cf5e54e5e4cb7315f41c8fa057a5be68970->leave($__internal_9bdf44905ea298bceeb9065a3c7d6cf5e54e5e4cb7315f41c8fa057a5be68970_prof);

    }

    // line 79
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_87ac1ebd9036ee65b179a4de8f36b25da5b6fdd6dbb69b8991430baf9efdc7a4 = $this->env->getExtension("native_profiler");
        $__internal_87ac1ebd9036ee65b179a4de8f36b25da5b6fdd6dbb69b8991430baf9efdc7a4->enter($__internal_87ac1ebd9036ee65b179a4de8f36b25da5b6fdd6dbb69b8991430baf9efdc7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 80
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array())), "method");
        echo ">
        ";
        // line 81
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 82
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i> 
            <span>";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 85
            echo "            ";
            $this->displayBlock("label", $context, $blocks);
            echo "
        ";
        }
        // line 87
        echo "    </a>
";
        
        $__internal_87ac1ebd9036ee65b179a4de8f36b25da5b6fdd6dbb69b8991430baf9efdc7a4->leave($__internal_87ac1ebd9036ee65b179a4de8f36b25da5b6fdd6dbb69b8991430baf9efdc7a4_prof);

    }

    // line 90
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_ca613667c542c6c092577f6195b506f1c74312b134f56699d5648fff5ce183c7 = $this->env->getExtension("native_profiler");
        $__internal_ca613667c542c6c092577f6195b506f1c74312b134f56699d5648fff5ce183c7->enter($__internal_ca613667c542c6c092577f6195b506f1c74312b134f56699d5648fff5ce183c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 91
        echo "    <span>";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array())), "method");
        echo ">
        ";
        // line 92
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 93
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i> 
        ";
        }
        // line 95
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
        
        $__internal_ca613667c542c6c092577f6195b506f1c74312b134f56699d5648fff5ce183c7->leave($__internal_ca613667c542c6c092577f6195b506f1c74312b134f56699d5648fff5ce183c7_prof);

    }

    // line 99
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_69f49330c2ba14ae20c1f759dfcd75df301702aebff3399be9028882876d9625 = $this->env->getExtension("native_profiler");
        $__internal_69f49330c2ba14ae20c1f759dfcd75df301702aebff3399be9028882876d9625->enter($__internal_69f49330c2ba14ae20c1f759dfcd75df301702aebff3399be9028882876d9625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 100
        $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 101
        echo "    ";
        // line 102
        $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array());
        // line 103
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
        // line 104
        echo "    ";
        // line 105
        echo "    <a href=\"javascript:;\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
        echo ">
        ";
        // line 106
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 107
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i> 
            <span>";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 110
            echo "            ";
            $this->displayBlock("label", $context, $blocks);
            echo "
        ";
        }
        // line 112
        echo "    </a>
";
        
        $__internal_69f49330c2ba14ae20c1f759dfcd75df301702aebff3399be9028882876d9625->leave($__internal_69f49330c2ba14ae20c1f759dfcd75df301702aebff3399be9028882876d9625_prof);

    }

    // line 115
    public function block_profileElement($context, array $blocks = array())
    {
        $__internal_ea32a26e5415afd281e96791c01ecaa6140a2b78e4bf186b9323cdc15add5cdc = $this->env->getExtension("native_profiler");
        $__internal_ea32a26e5415afd281e96791c01ecaa6140a2b78e4bf186b9323cdc15add5cdc->enter($__internal_ea32a26e5415afd281e96791c01ecaa6140a2b78e4bf186b9323cdc15add5cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profileElement"));

        // line 116
        echo "    <p class=\"centered\"><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "image"), "method"), "html", null, true);
        echo "\" class=\"img-circle\" width=\"60\"></a></p>
    <h5 class=\"centered\">";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "name"), "method"), "html", null, true);
        echo "</h5>
";
        
        $__internal_ea32a26e5415afd281e96791c01ecaa6140a2b78e4bf186b9323cdc15add5cdc->leave($__internal_ea32a26e5415afd281e96791c01ecaa6140a2b78e4bf186b9323cdc15add5cdc_prof);

    }

    // line 120
    public function block_label($context, array $blocks = array())
    {
        $__internal_254d659c20c982d7336b3692cd9eefb9761711f727c348e728eee67ddc926232 = $this->env->getExtension("native_profiler");
        $__internal_254d659c20c982d7336b3692cd9eefb9761711f727c348e728eee67ddc926232->enter($__internal_254d659c20c982d7336b3692cd9eefb9761711f727c348e728eee67ddc926232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
        
        $__internal_254d659c20c982d7336b3692cd9eefb9761711f727c348e728eee67ddc926232->leave($__internal_254d659c20c982d7336b3692cd9eefb9761711f727c348e728eee67ddc926232_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:Default:dash_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 120,  321 => 117,  314 => 116,  308 => 115,  300 => 112,  294 => 110,  289 => 108,  284 => 107,  282 => 106,  277 => 105,  275 => 104,  273 => 103,  271 => 102,  269 => 101,  267 => 100,  261 => 99,  250 => 95,  244 => 93,  242 => 92,  237 => 91,  231 => 90,  223 => 87,  217 => 85,  212 => 83,  207 => 82,  205 => 81,  198 => 80,  192 => 79,  185 => 77,  181 => 75,  177 => 73,  174 => 72,  168 => 71,  160 => 68,  156 => 66,  154 => 65,  148 => 62,  146 => 61,  142 => 59,  138 => 57,  136 => 56,  133 => 54,  131 => 53,  127 => 52,  125 => 51,  121 => 49,  119 => 48,  117 => 47,  114 => 45,  112 => 44,  109 => 42,  107 => 38,  104 => 36,  102 => 35,  100 => 34,  97 => 32,  94 => 30,  92 => 29,  89 => 27,  87 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  73 => 18,  69 => 16,  67 => 15,  65 => 13,  62 => 11,  60 => 10,  58 => 9,  56 => 8,  54 => 7,  52 => 6,  49 => 5,  46 => 4,  40 => 3,  11 => 1,);
    }
}
/* {% extends 'knp_menu.html.twig' %}*/
/* */
/* {% block item %}*/
/*     {% import "knp_menu.html.twig" as macros %}*/
/*     {% if item.displayed %}*/
/*         {%- set attributes = item.attributes %}*/
/*         {%- set is_dropdown = attributes.dropdown|default(false) %}*/
/*         {%- set is_profile = attributes.profile|default(false) %}*/
/*         {%- set divider_prepend = attributes.divider_prepend|default(false) %}*/
/*         {%- set divider_append = attributes.divider_append|default(false) %}*/
/* */
/*         {# unset bootstrap specific attributes #}*/
/*         {%- set attributes = attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}*/
/* */
/*         {%- if divider_prepend %}*/
/*         {{ block('dividerElement') }}*/
/*         {%- endif %}*/
/* */
/*         {# building the class of the item #}*/
/*         {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}*/
/*         {%- if matcher.isCurrent(item) %}*/
/*         {%- set classes = classes|merge([options.currentClass]) %}*/
/*         {%- elseif matcher.isAncestor(item, options.depth) %}*/
/*         {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*         {%- endif %}*/
/*         {%- if item.actsLikeFirst %}*/
/*         {%- set classes = classes|merge([options.firstClass]) %}*/
/*         {%- endif %}*/
/*         {%- if item.actsLikeLast %}*/
/*         {%- set classes = classes|merge([options.lastClass]) %}*/
/*         {%- endif %}*/
/* */
/*         {# building the class of the children #}*/
/*         {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}*/
/*         {#{%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}#}*/
/* */
/*         {# adding classes for dropdown #}*/
/*         {#{%- if is_dropdown %}*/
/*         {%- set classes = classes|merge(['dropdown']) %}*/
/*         {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}*/
/*         {%- endif %}#}*/
/* */
/*         {# putting classes together #}*/
/*         {%- if classes is not empty %}*/
/*         {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*         {%- endif %}*/
/*         {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}*/
/*         {%- if is_profile %}*/
/*         {{ block('profileElement') }}*/
/*         {%- else %}*/
/*         {# displaying the item #}*/
/*         <li{{ macros.attributes(attributes|merge({'icon': null })) }}>*/
/*             {%- if is_dropdown %}*/
/*             {{ block('dropdownElement') }}*/
/* */
/*             {%- elseif item.uri is not empty and (not item.current or options.currentAsLink) %}*/
/*             {{ block('linkElement') }}*/
/*             {%- else %}*/
/*             {{ block('spanElement') }}*/
/*             {%- endif %}*/
/*             {# render the list of children#}*/
/*             {{ block('list') }}*/
/*         </li>*/
/*         {%- endif %}*/
/*         {%- if divider_append %}*/
/*         {{ block('dividerElement') }}*/
/*         {%- endif %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block dividerElement %}*/
/*     {% if item.level == 1 %}*/
/*         <li class="divider-vertical"></li>*/
/*         {% else %}*/
/*         <li class="divider"></li>*/
/*         {% endif %}*/
/*     {% endblock %}*/
/* */
/* {% block linkElement %}*/
/*     <a href="{{ item.uri }}"{{ macros.attributes(item.linkAttributes) }}>*/
/*         {% if item.attribute('icon') is not empty  %}*/
/*             <i class="{{ item.attribute('icon') }}"></i> */
/*             <span>{{ item.label|trans }}</span>*/
/*         {% else %}*/
/*             {{ block('label') }}*/
/*         {% endif %}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block spanElement %}*/
/*     <span>{{ macros.attributes(item.labelAttributes) }}>*/
/*         {% if item.attribute('icon') is not empty  %}*/
/*             <i class="{{ item.attribute('icon') }}"></i> */
/*         {% endif %}*/
/*         {{ block('label') }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block dropdownElement %}*/
/*     {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}*/
/*     {#{%- set classes = classes|merge(['dropdown-toggle']) %}#}*/
/*     {%- set attributes = item.linkAttributes %}*/
/*     {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*     {#{%- set attributes = attributes|merge({'data-toggle': 'dropdown'}) %}#}*/
/*     <a href="javascript:;"{{ macros.attributes(attributes) }}>*/
/*         {% if item.attribute('icon') is not empty  %}*/
/*             <i class="{{ item.attribute('icon') }}"></i> */
/*             <span>{{ item.label|trans }}</span>*/
/*         {% else %}*/
/*             {{ block('label') }}*/
/*         {% endif %}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block profileElement %}*/
/*     <p class="centered"><a href="{{ item.uri }}"><img src="{{item.attribute('image')}}" class="img-circle" width="60"></a></p>*/
/*     <h5 class="centered">{{item.attribute('name')}}</h5>*/
/* {% endblock %}*/
/* */
/* {% block label %}{{ item.label|trans }}{% endblock %}*/
