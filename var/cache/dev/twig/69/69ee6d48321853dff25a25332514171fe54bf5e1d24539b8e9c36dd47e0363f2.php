<?php

/* ControlBundle:dashgumfree2:basic_table.html.twig */
class __TwigTemplate_689c156d219b3a534df73e376ee05b14f2ef265edfadda7c9dccc3acd0673dea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_dash2.html.twig", "ControlBundle:dashgumfree2:basic_table.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_dash2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5921a3dfe956a83a98b298c78868b1ec4b4bd5e9fdb7398cb99259c790adbb9e = $this->env->getExtension("native_profiler");
        $__internal_5921a3dfe956a83a98b298c78868b1ec4b4bd5e9fdb7398cb99259c790adbb9e->enter($__internal_5921a3dfe956a83a98b298c78868b1ec4b4bd5e9fdb7398cb99259c790adbb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:dashgumfree2:basic_table.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5921a3dfe956a83a98b298c78868b1ec4b4bd5e9fdb7398cb99259c790adbb9e->leave($__internal_5921a3dfe956a83a98b298c78868b1ec4b4bd5e9fdb7398cb99259c790adbb9e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_482e7b4214b07464b87fdb06fae3041106517718ec8cd7e4a0f26528bdf07cc1 = $this->env->getExtension("native_profiler");
        $__internal_482e7b4214b07464b87fdb06fae3041106517718ec8cd7e4a0f26528bdf07cc1->enter($__internal_482e7b4214b07464b87fdb06fae3041106517718ec8cd7e4a0f26528bdf07cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id=\"main-content\">
        <section class=\"wrapper\">
            <h3><i class=\"fa fa-angle-right\"></i> Basic Table Examples</h3>
            <div class=\"row\">

                <div class=\"col-md-12\">
                    <div class=\"content-panel\">
                        <h4><i class=\"fa fa-angle-right\"></i> Basic Table</h4>
                        <hr>
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><! --/content-panel -->
                </div><!-- /col-md-12 -->

                <div class=\"col-md-12 mt\">
                    <div class=\"content-panel\">
                        <table class=\"table table-hover\">
                            <h4><i class=\"fa fa-angle-right\"></i> Hover Table</h4>
                            <hr>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Simon</td>
                                    <td>Mosa</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><! --/content-panel -->
                </div><!-- /col-md-12 -->
            </div><!-- row -->

            <div class=\"row mt\">
                <div class=\"col-md-12\">
                    <div class=\"content-panel\">
                        <table class=\"table table-striped table-advance table-hover\">
                            <h4><i class=\"fa fa-angle-right\"></i> Advanced Table</h4>
                            <hr>
                            <thead>
                                <tr>
                                    <th><i class=\"fa fa-bullhorn\"></i> Company</th>
                                    <th class=\"hidden-phone\"><i class=\"fa fa-question-circle\"></i> Descrition</th>
                                    <th><i class=\"fa fa-bookmark\"></i> Profit</th>
                                    <th><i class=\" fa fa-edit\"></i> Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href=\"basic_table.html#\">Company Ltd</a></td>
                                    <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                    <td>12000.00\$ </td>
                                    <td><span class=\"label label-info label-mini\">Due</span></td>
                                    <td>
                                        <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                        <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                        <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href=\"basic_table.html#\">
                                            Dashgum co
                                        </a>
                                    </td>
                                    <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                    <td>17900.00\$ </td>
                                    <td><span class=\"label label-warning label-mini\">Due</span></td>
                                    <td>
                                        <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                        <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                        <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href=\"basic_table.html#\">
                                            Another Co
                                        </a>
                                    </td>
                                    <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                    <td>14400.00\$ </td>
                                    <td><span class=\"label label-success label-mini\">Paid</span></td>
                                    <td>
                                        <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                        <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                        <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href=\"basic_table.html#\">
                                            Dashgum ext
                                        </a>
                                    </td>
                                    <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                    <td>22000.50\$ </td>
                                    <td><span class=\"label label-success label-mini\">Paid</span></td>
                                    <td>
                                        <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                        <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                        <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href=\"basic_table.html#\">Total Ltd</a></td>
                                    <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                    <td>12120.00\$ </td>
                                    <td><span class=\"label label-warning label-mini\">Due</span></td>
                                    <td>
                                        <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                        <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                        <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- /content-panel -->
                </div><!-- /col-md-12 -->
            </div><!-- /row -->

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
";
        
        $__internal_482e7b4214b07464b87fdb06fae3041106517718ec8cd7e4a0f26528bdf07cc1->leave($__internal_482e7b4214b07464b87fdb06fae3041106517718ec8cd7e4a0f26528bdf07cc1_prof);

    }

    // line 183
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f12482233f5b59a4bc02b1633309b761781ec87f3c75c9747177640d925b7e5 = $this->env->getExtension("native_profiler");
        $__internal_0f12482233f5b59a4bc02b1633309b761781ec87f3c75c9747177640d925b7e5->enter($__internal_0f12482233f5b59a4bc02b1633309b761781ec87f3c75c9747177640d925b7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 184
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!--script for this page-->

    <script>
        //custom select box

        \$(function () {
            \$('select.styled').customSelect();
        });
          </script>

    ";
        
        $__internal_0f12482233f5b59a4bc02b1633309b761781ec87f3c75c9747177640d925b7e5->leave($__internal_0f12482233f5b59a4bc02b1633309b761781ec87f3c75c9747177640d925b7e5_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:dashgumfree2:basic_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 184,  226 => 183,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base_dash2.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <!-- ***********************************************************************************************************************************************************/
/*     MAIN CONTENT*/
/*     *********************************************************************************************************************************************************** -->*/
/*     <!--main content start-->*/
/*     <section id="main-content">*/
/*         <section class="wrapper">*/
/*             <h3><i class="fa fa-angle-right"></i> Basic Table Examples</h3>*/
/*             <div class="row">*/
/* */
/*                 <div class="col-md-12">*/
/*                     <div class="content-panel">*/
/*                         <h4><i class="fa fa-angle-right"></i> Basic Table</h4>*/
/*                         <hr>*/
/*                         <table class="table">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>#</th>*/
/*                                     <th>First Name</th>*/
/*                                     <th>Last Name</th>*/
/*                                     <th>Username</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                     <td>1</td>*/
/*                                     <td>Mark</td>*/
/*                                     <td>Otto</td>*/
/*                                     <td>@mdo</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>2</td>*/
/*                                     <td>Jacob</td>*/
/*                                     <td>Thornton</td>*/
/*                                     <td>@fat</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>3</td>*/
/*                                     <td>Larry</td>*/
/*                                     <td>the Bird</td>*/
/*                                     <td>@twitter</td>*/
/*                                 </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div><! --/content-panel -->*/
/*                 </div><!-- /col-md-12 -->*/
/* */
/*                 <div class="col-md-12 mt">*/
/*                     <div class="content-panel">*/
/*                         <table class="table table-hover">*/
/*                             <h4><i class="fa fa-angle-right"></i> Hover Table</h4>*/
/*                             <hr>*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>#</th>*/
/*                                     <th>First Name</th>*/
/*                                     <th>Last Name</th>*/
/*                                     <th>Username</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                     <td>1</td>*/
/*                                     <td>Mark</td>*/
/*                                     <td>Otto</td>*/
/*                                     <td>@mdo</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>2</td>*/
/*                                     <td>Jacob</td>*/
/*                                     <td>Thornton</td>*/
/*                                     <td>@fat</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>3</td>*/
/*                                     <td>Simon</td>*/
/*                                     <td>Mosa</td>*/
/*                                     <td>@twitter</td>*/
/*                                 </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div><! --/content-panel -->*/
/*                 </div><!-- /col-md-12 -->*/
/*             </div><!-- row -->*/
/* */
/*             <div class="row mt">*/
/*                 <div class="col-md-12">*/
/*                     <div class="content-panel">*/
/*                         <table class="table table-striped table-advance table-hover">*/
/*                             <h4><i class="fa fa-angle-right"></i> Advanced Table</h4>*/
/*                             <hr>*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th><i class="fa fa-bullhorn"></i> Company</th>*/
/*                                     <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>*/
/*                                     <th><i class="fa fa-bookmark"></i> Profit</th>*/
/*                                     <th><i class=" fa fa-edit"></i> Status</th>*/
/*                                     <th></th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                     <td><a href="basic_table.html#">Company Ltd</a></td>*/
/*                                     <td class="hidden-phone">Lorem Ipsum dolor</td>*/
/*                                     <td>12000.00$ </td>*/
/*                                     <td><span class="label label-info label-mini">Due</span></td>*/
/*                                     <td>*/
/*                                         <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>*/
/*                                         <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>*/
/*                                         <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <a href="basic_table.html#">*/
/*                                             Dashgum co*/
/*                                         </a>*/
/*                                     </td>*/
/*                                     <td class="hidden-phone">Lorem Ipsum dolor</td>*/
/*                                     <td>17900.00$ </td>*/
/*                                     <td><span class="label label-warning label-mini">Due</span></td>*/
/*                                     <td>*/
/*                                         <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>*/
/*                                         <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>*/
/*                                         <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <a href="basic_table.html#">*/
/*                                             Another Co*/
/*                                         </a>*/
/*                                     </td>*/
/*                                     <td class="hidden-phone">Lorem Ipsum dolor</td>*/
/*                                     <td>14400.00$ </td>*/
/*                                     <td><span class="label label-success label-mini">Paid</span></td>*/
/*                                     <td>*/
/*                                         <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>*/
/*                                         <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>*/
/*                                         <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <a href="basic_table.html#">*/
/*                                             Dashgum ext*/
/*                                         </a>*/
/*                                     </td>*/
/*                                     <td class="hidden-phone">Lorem Ipsum dolor</td>*/
/*                                     <td>22000.50$ </td>*/
/*                                     <td><span class="label label-success label-mini">Paid</span></td>*/
/*                                     <td>*/
/*                                         <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>*/
/*                                         <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>*/
/*                                         <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td><a href="basic_table.html#">Total Ltd</a></td>*/
/*                                     <td class="hidden-phone">Lorem Ipsum dolor</td>*/
/*                                     <td>12120.00$ </td>*/
/*                                     <td><span class="label label-warning label-mini">Due</span></td>*/
/*                                     <td>*/
/*                                         <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>*/
/*                                         <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>*/
/*                                         <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div><!-- /content-panel -->*/
/*                 </div><!-- /col-md-12 -->*/
/*             </div><!-- /row -->*/
/* */
/*         </section><! --/wrapper -->*/
/*     </section><!-- /MAIN CONTENT -->*/
/* */
/*     <!--main content end-->*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <!--script for this page-->*/
/* */
/*     <script>*/
/*         //custom select box*/
/* */
/*         $(function () {*/
/*             $('select.styled').customSelect();*/
/*         });*/
/*           </script>*/
/* */
/*     {% endblock %}*/
