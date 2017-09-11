<?php

/* :user:index.html.twig */
class __TwigTemplate_bd9d5379928eabe5d088b3e90732a886dab9651da9fea43dd94d9989517acf80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ControlBundle:Default:index1.html.twig", ":user:index.html.twig", 1);
        $this->blocks = array(
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ControlBundle:Default:index1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc8e6661872bb4055a91b73ae77be2106b79c831946a9efe77c79f0cb05c6de7 = $this->env->getExtension("native_profiler");
        $__internal_dc8e6661872bb4055a91b73ae77be2106b79c831946a9efe77c79f0cb05c6de7->enter($__internal_dc8e6661872bb4055a91b73ae77be2106b79c831946a9efe77c79f0cb05c6de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc8e6661872bb4055a91b73ae77be2106b79c831946a9efe77c79f0cb05c6de7->leave($__internal_dc8e6661872bb4055a91b73ae77be2106b79c831946a9efe77c79f0cb05c6de7_prof);

    }

    // line 3
    public function block_central($context, array $blocks = array())
    {
        $__internal_0af8988d338a1517fa6a6d866b22a6cb53f98b7458f688119f8b24e2d22d694e = $this->env->getExtension("native_profiler");
        $__internal_0af8988d338a1517fa6a6d866b22a6cb53f98b7458f688119f8b24e2d22d694e->enter($__internal_0af8988d338a1517fa6a6d866b22a6cb53f98b7458f688119f8b24e2d22d694e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "central"));

        // line 4
        echo "    <h1>User list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Isactive</th>
                <th>Isadmin</th>
                <th>Image</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["user"], "isActive", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["user"], "isAdmin", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "image", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_0af8988d338a1517fa6a6d866b22a6cb53f98b7458f688119f8b24e2d22d694e->leave($__internal_0af8988d338a1517fa6a6d866b22a6cb53f98b7458f688119f8b24e2d22d694e_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 46,  124 => 41,  112 => 35,  106 => 32,  99 => 28,  95 => 27,  87 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'ControlBundle:Default:index1.html.twig' %}*/
/* */
/* {% block central %}*/
/*     <h1>User list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Username</th>*/
/*                 <th>Email</th>*/
/*                 <th>Isactive</th>*/
/*                 <th>Isadmin</th>*/
/*                 <th>Image</th>*/
/*                 <th>Name</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('user_show', { 'id': user.id }) }}">{{ user.id }}</a></td>*/
/*                 <td>{{ user.username }}</td>*/
/*                 <td>{{ user.email }}</td>*/
/*                 <td>{% if user.isActive %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if user.isAdmin %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ user.image }}</td>*/
/*                 <td>{{ user.name }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('user_show', { 'id': user.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('user_edit', { 'id': user.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
