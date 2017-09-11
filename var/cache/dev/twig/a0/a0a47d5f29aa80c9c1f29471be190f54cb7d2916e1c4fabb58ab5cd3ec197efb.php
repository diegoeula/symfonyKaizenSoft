<?php

/* ControlBundle:Default:dash_topbar.html.twig */
class __TwigTemplate_7cae35fd5a55c60b57d4d4c5eeb393f25f3518b6e4d28f2ed13d208d94a524a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "ControlBundle:Default:dash_topbar.html.twig", 1);
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
        $__internal_312fd52eef7f986fa56dc2bcce0f8a79c186fcd9cf647cad96c507f285978164 = $this->env->getExtension("native_profiler");
        $__internal_312fd52eef7f986fa56dc2bcce0f8a79c186fcd9cf647cad96c507f285978164->enter($__internal_312fd52eef7f986fa56dc2bcce0f8a79c186fcd9cf647cad96c507f285978164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:Default:dash_topbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_312fd52eef7f986fa56dc2bcce0f8a79c186fcd9cf647cad96c507f285978164->leave($__internal_312fd52eef7f986fa56dc2bcce0f8a79c186fcd9cf647cad96c507f285978164_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_9427230db1208dc60aba829c835483519ca010239dbe0b99b1c792aec3789678 = $this->env->getExtension("native_profiler");
        $__internal_9427230db1208dc60aba829c835483519ca010239dbe0b99b1c792aec3789678->enter($__internal_9427230db1208dc60aba829c835483519ca010239dbe0b99b1c792aec3789678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "ControlBundle:Default:dash_topbar.html.twig", 4);
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
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 39
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown"));
                // line 40
                echo "        ";
            }
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
        
        $__internal_9427230db1208dc60aba829c835483519ca010239dbe0b99b1c792aec3789678->leave($__internal_9427230db1208dc60aba829c835483519ca010239dbe0b99b1c792aec3789678_prof);

    }

    // line 71
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_a250f67d41f7584d4a49f9d2113417b63121c86222b5c6341b933b8f755b41ae = $this->env->getExtension("native_profiler");
        $__internal_a250f67d41f7584d4a49f9d2113417b63121c86222b5c6341b933b8f755b41ae->enter($__internal_a250f67d41f7584d4a49f9d2113417b63121c86222b5c6341b933b8f755b41ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

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
        
        $__internal_a250f67d41f7584d4a49f9d2113417b63121c86222b5c6341b933b8f755b41ae->leave($__internal_a250f67d41f7584d4a49f9d2113417b63121c86222b5c6341b933b8f755b41ae_prof);

    }

    // line 79
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_63c07350c20c8428f85f0e9c63356c908ee7bc56d6626805e159b9f44578e665 = $this->env->getExtension("native_profiler");
        $__internal_63c07350c20c8428f85f0e9c63356c908ee7bc56d6626805e159b9f44578e665->enter($__internal_63c07350c20c8428f85f0e9c63356c908ee7bc56d6626805e159b9f44578e665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

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
        
        $__internal_63c07350c20c8428f85f0e9c63356c908ee7bc56d6626805e159b9f44578e665->leave($__internal_63c07350c20c8428f85f0e9c63356c908ee7bc56d6626805e159b9f44578e665_prof);

    }

    // line 90
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_fdf2a126f67e6c2456c861bb41a85dcb121afe4de67cabe25768aa51ed8a5ffa = $this->env->getExtension("native_profiler");
        $__internal_fdf2a126f67e6c2456c861bb41a85dcb121afe4de67cabe25768aa51ed8a5ffa->enter($__internal_fdf2a126f67e6c2456c861bb41a85dcb121afe4de67cabe25768aa51ed8a5ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

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
        
        $__internal_fdf2a126f67e6c2456c861bb41a85dcb121afe4de67cabe25768aa51ed8a5ffa->leave($__internal_fdf2a126f67e6c2456c861bb41a85dcb121afe4de67cabe25768aa51ed8a5ffa_prof);

    }

    // line 99
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_8b668e86f3f829ed401970056054d3dc050ec326c7acfcc2d8a29a13f2ae189b = $this->env->getExtension("native_profiler");
        $__internal_8b668e86f3f829ed401970056054d3dc050ec326c7acfcc2d8a29a13f2ae189b->enter($__internal_8b668e86f3f829ed401970056054d3dc050ec326c7acfcc2d8a29a13f2ae189b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 100
        $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 101
        $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown-toggle"));
        // line 102
        $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array());
        // line 103
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
        // line 104
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("data-toggle" => "dropdown"));
        // line 105
        echo "    <a href=\"#\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
        echo ">
        ";
        // line 106
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 107
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i> 
            ";
            // line 109
            echo "        ";
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
        
        $__internal_8b668e86f3f829ed401970056054d3dc050ec326c7acfcc2d8a29a13f2ae189b->leave($__internal_8b668e86f3f829ed401970056054d3dc050ec326c7acfcc2d8a29a13f2ae189b_prof);

    }

    // line 115
    public function block_profileElement($context, array $blocks = array())
    {
        $__internal_a7a0829254e1cefe5d0666c00cc15a6940a03624ea18e90e2326669b78a7a68b = $this->env->getExtension("native_profiler");
        $__internal_a7a0829254e1cefe5d0666c00cc15a6940a03624ea18e90e2326669b78a7a68b->enter($__internal_a7a0829254e1cefe5d0666c00cc15a6940a03624ea18e90e2326669b78a7a68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profileElement"));

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
        
        $__internal_a7a0829254e1cefe5d0666c00cc15a6940a03624ea18e90e2326669b78a7a68b->leave($__internal_a7a0829254e1cefe5d0666c00cc15a6940a03624ea18e90e2326669b78a7a68b_prof);

    }

    // line 120
    public function block_label($context, array $blocks = array())
    {
        $__internal_ec970b1ac1aedb0e56edbb91321a7f80dec993b40b55c12f4441936b24ae795c = $this->env->getExtension("native_profiler");
        $__internal_ec970b1ac1aedb0e56edbb91321a7f80dec993b40b55c12f4441936b24ae795c->enter($__internal_ec970b1ac1aedb0e56edbb91321a7f80dec993b40b55c12f4441936b24ae795c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
        
        $__internal_ec970b1ac1aedb0e56edbb91321a7f80dec993b40b55c12f4441936b24ae795c->leave($__internal_ec970b1ac1aedb0e56edbb91321a7f80dec993b40b55c12f4441936b24ae795c_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:Default:dash_topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 120,  324 => 117,  317 => 116,  311 => 115,  303 => 112,  297 => 110,  294 => 109,  289 => 107,  287 => 106,  282 => 105,  280 => 104,  278 => 103,  276 => 102,  274 => 101,  272 => 100,  266 => 99,  255 => 95,  249 => 93,  247 => 92,  242 => 91,  236 => 90,  228 => 87,  222 => 85,  217 => 83,  212 => 82,  210 => 81,  203 => 80,  197 => 79,  190 => 77,  186 => 75,  182 => 73,  179 => 72,  173 => 71,  165 => 68,  161 => 66,  159 => 65,  153 => 62,  151 => 61,  147 => 59,  143 => 57,  141 => 56,  138 => 54,  136 => 53,  132 => 52,  130 => 51,  126 => 49,  124 => 48,  122 => 47,  119 => 45,  117 => 44,  114 => 42,  111 => 40,  109 => 39,  107 => 38,  104 => 36,  102 => 35,  100 => 34,  97 => 32,  94 => 30,  92 => 29,  89 => 27,  87 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  73 => 18,  69 => 16,  67 => 15,  65 => 13,  62 => 11,  60 => 10,  58 => 9,  56 => 8,  54 => 7,  52 => 6,  49 => 5,  46 => 4,  40 => 3,  11 => 1,);
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
/*         {%- if is_dropdown %}*/
/*         {%- set classes = classes|merge(['dropdown']) %}*/
/*         {#{%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}#}*/
/*         {%- endif %}*/
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
/*     {%- set classes = classes|merge(['dropdown-toggle']) %}*/
/*     {%- set attributes = item.linkAttributes %}*/
/*     {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*     {%- set attributes = attributes|merge({'data-toggle': 'dropdown'}) %}*/
/*     <a href="#"{{ macros.attributes(attributes) }}>*/
/*         {% if item.attribute('icon') is not empty  %}*/
/*             <i class="{{ item.attribute('icon') }}"></i> */
/*             {#<span class="{{ item.attribute('span') }}">4</span>#}*/
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
