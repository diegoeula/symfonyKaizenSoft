<?php

/* ControlBundle:TableroControl:tc.html.twig */
class __TwigTemplate_10d008a7308c00862be95efb4ca4ca93984acc39b2014c3adc7f1be0457885fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ControlBundle:Default:.twig", "ControlBundle:TableroControl:tc.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ControlBundle:Default:.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_736988da54d9354b445c7efa6f87d2c2cdd425ed32d1a49bf7ba3e88957c619f = $this->env->getExtension("native_profiler");
        $__internal_736988da54d9354b445c7efa6f87d2c2cdd425ed32d1a49bf7ba3e88957c619f->enter($__internal_736988da54d9354b445c7efa6f87d2c2cdd425ed32d1a49bf7ba3e88957c619f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:TableroControl:tc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_736988da54d9354b445c7efa6f87d2c2cdd425ed32d1a49bf7ba3e88957c619f->leave($__internal_736988da54d9354b445c7efa6f87d2c2cdd425ed32d1a49bf7ba3e88957c619f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39d8df6337f9bb00e74b1d76750fe2b5add799c85baf870b371646d7741861cf = $this->env->getExtension("native_profiler");
        $__internal_39d8df6337f9bb00e74b1d76750fe2b5add799c85baf870b371646d7741861cf->enter($__internal_39d8df6337f9bb00e74b1d76750fe2b5add799c85baf870b371646d7741861cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style type=\"text/css\">
        body{margin:0; }
        #contenido{
            width:1250px;
        }

        #cont
        {  
            float: left;
            width: 600px;
        }
    </style>
";
        
        $__internal_39d8df6337f9bb00e74b1d76750fe2b5add799c85baf870b371646d7741861cf->leave($__internal_39d8df6337f9bb00e74b1d76750fe2b5add799c85baf870b371646d7741861cf_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_921dbb162c17f0ea0d6df7c413cb8c85cf4e032822d88c9f2d642818e095b62b = $this->env->getExtension("native_profiler");
        $__internal_921dbb162c17f0ea0d6df7c413cb8c85cf4e032822d88c9f2d642818e095b62b->enter($__internal_921dbb162c17f0ea0d6df7c413cb8c85cf4e032822d88c9f2d642818e095b62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/graficos.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"https://code.highcharts.com/highcharts.js\"></script>
    <script src=\"https://code.highcharts.com/highcharts-more.js\"></script>

    <script src=\"https://code.highcharts.com/modules/solid-gauge.js\"></script>
    <script type=\"text/javascript\">
        \$(function () {

            var gaugeOptions = {
                chart: {
                    type: 'solidgauge'
                },
                title: null,
                pane: {
                    center: ['50%', '85%'],
                    size: '140%',
                    startAngle: -90,
                    endAngle: 90,
                    background: {
                        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                        innerRadius: '60%',
                        outerRadius: '100%',
                        shape: 'arc'
                    }
                },
                tooltip: {
                    enabled: false
                },
                // the value axis
                yAxis: {
                    stops: [
                        [0.1, '#55BF3B'], // green
                        [0.5, '#DDDF0D'], // yellow
                        [0.9, '#DF5353'] // red
                    ],
                    lineWidth: 0,
                    minorTickInterval: null,
                    tickPixelInterval: 400,
                    tickWidth: 0,
                    title: {
                        y: -70
                    },
                    labels: {
                        y: 16
                    }
                },
                plotOptions: {
                    solidgauge: {
                        dataLabels: {
                            y: 5,
                            borderWidth: 0,
                            useHTML: true
                        }
                    }
                }
            };
            \$.getJSON(\"http://192.168.64.230:3000/control\")
                .done(function (data) {
                    // The speed gauge

            \$('#container-caba').highcharts(Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: Math.round(data[0].avg *2),
                    title: {
                        text: 'Caba/No indicado'
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                        name: 'Caba/No indicado',
                        data: [Math.round(data[1].avg)],
                        dataLabels: {
                            format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y}</span><br/>' +
                                    '<span style=\"font-size:12px;color:silver\">Cantidad Mensual</span></div>'
                        },
                        tooltip: {
                            valueSuffix: ' km/h'
                        }
                    }]

            }));;
               
            

            // The RPM gauge
            \$('#container-vacio').highcharts(Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: Math.round(data[2].avg *2),
                    title: {
                        text: 'Vacios'
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                        name: 'Vacios',
                        data: [Math.round(data[3].avg)],
                        dataLabels: {
                            format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                    '<span style=\"font-size:12px;color:silver\">Cantidad Mensual</span></div>'
                        },
                        tooltip: {
                            valueSuffix: ' revolutions/min'
                        }
                    }]

            }));
            \$('#container-referenciables').highcharts(Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: Math.round(data[4].avg *2),
                    title: {
                        text: 'Referenciables'
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                        name: 'RPM',
                        data: [Math.round(data[5].avg)],
                        dataLabels: {
                            format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                    '<span style=\"font-size:12px;color:silver\">Cantidad Mensual</span></div>'
                        },
                        tooltip: {
                            valueSuffix: 'Cantidad Mensual'
                        }
                    }]

            }));
            \$('#container-barrio').highcharts(Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: Math.round(data[6].avg *2),
                    title: {
                        text: 'Sin Barrio'
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                        name: 'RPM',
                        data: [Math.round(data[7].avg)],
                        dataLabels: {
                            format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                    '<span style=\"font-size:12px;color:silver\">Cantidad Mensual</span></div>'
                        },
                        tooltip: {
                            valueSuffix: 'Cantidad Mensual'
                        }
                    }]

            }));
            \$('#container-interseccion').highcharts(Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: Math.round(data[8].avg *2),
                    title: {
                        text: 'Interseccion'
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                        name: 'RPM',
                        data: [Math.round(data[9].avg)],
                        dataLabels: {
                            format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                    '<span style=\"font-size:12px;color:silver\">Cantidad Mensual</span></div>'
                        },
                        tooltip: {
                            valueSuffix: 'Cantidad Mensual'
                        }
                    }]

            }));
 });
       


        });
    </script>
";
        
        $__internal_921dbb162c17f0ea0d6df7c413cb8c85cf4e032822d88c9f2d642818e095b62b->leave($__internal_921dbb162c17f0ea0d6df7c413cb8c85cf4e032822d88c9f2d642818e095b62b_prof);

    }

    // line 216
    public function block_body($context, array $blocks = array())
    {
        $__internal_5010742ea1a51e1368d706f83917e98653a712c781ca19b25d2b85a24f8a266d = $this->env->getExtension("native_profiler");
        $__internal_5010742ea1a51e1368d706f83917e98653a712c781ca19b25d2b85a24f8a266d->enter($__internal_5010742ea1a51e1368d706f83917e98653a712c781ca19b25d2b85a24f8a266d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 217
        echo "    <div id=\"contenido\">
        <div style=\"width: 1200px; height: 550px; margin: 0 auto; border: 10px #000 solid\">
            <div id=\"container-caba\" style=\"width: 590px; height: 270px; float: left;border: 5px #000 solid\"></div>
            <div id=\"container-vacio\" style=\"width: 590px; height: 270px; float: left;border: 5px #000 solid\"></div>
            <div id=\"container-referenciables\" style=\"width: 590px; height: 270px; float: left;border: 5px #000 solid\"></div>
            <div id=\"container-interseccion\" style=\"width: 590px; height: 270px; float: left;border: 5px #000 solid\"></div>
        </div>
    </div>
";
        
        $__internal_5010742ea1a51e1368d706f83917e98653a712c781ca19b25d2b85a24f8a266d->leave($__internal_5010742ea1a51e1368d706f83917e98653a712c781ca19b25d2b85a24f8a266d_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:TableroControl:tc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 217,  278 => 216,  75 => 20,  70 => 19,  64 => 18,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'ControlBundle:Default:.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style type="text/css">*/
/*         body{margin:0; }*/
/*         #contenido{*/
/*             width:1250px;*/
/*         }*/
/* */
/*         #cont*/
/*         {  */
/*             float: left;*/
/*             width: 600px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript" src="{{asset('js/graficos.js')}}"></script> */
/*     <script src="https://code.highcharts.com/highcharts.js"></script>*/
/*     <script src="https://code.highcharts.com/highcharts-more.js"></script>*/
/* */
/*     <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>*/
/*     <script type="text/javascript">*/
/*         $(function () {*/
/* */
/*             var gaugeOptions = {*/
/*                 chart: {*/
/*                     type: 'solidgauge'*/
/*                 },*/
/*                 title: null,*/
/*                 pane: {*/
/*                     center: ['50%', '85%'],*/
/*                     size: '140%',*/
/*                     startAngle: -90,*/
/*                     endAngle: 90,*/
/*                     background: {*/
/*                         backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',*/
/*                         innerRadius: '60%',*/
/*                         outerRadius: '100%',*/
/*                         shape: 'arc'*/
/*                     }*/
/*                 },*/
/*                 tooltip: {*/
/*                     enabled: false*/
/*                 },*/
/*                 // the value axis*/
/*                 yAxis: {*/
/*                     stops: [*/
/*                         [0.1, '#55BF3B'], // green*/
/*                         [0.5, '#DDDF0D'], // yellow*/
/*                         [0.9, '#DF5353'] // red*/
/*                     ],*/
/*                     lineWidth: 0,*/
/*                     minorTickInterval: null,*/
/*                     tickPixelInterval: 400,*/
/*                     tickWidth: 0,*/
/*                     title: {*/
/*                         y: -70*/
/*                     },*/
/*                     labels: {*/
/*                         y: 16*/
/*                     }*/
/*                 },*/
/*                 plotOptions: {*/
/*                     solidgauge: {*/
/*                         dataLabels: {*/
/*                             y: 5,*/
/*                             borderWidth: 0,*/
/*                             useHTML: true*/
/*                         }*/
/*                     }*/
/*                 }*/
/*             };*/
/*             $.getJSON("http://192.168.64.230:3000/control")*/
/*                 .done(function (data) {*/
/*                     // The speed gauge*/
/* */
/*             $('#container-caba').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                 yAxis: {*/
/*                     min: 0,*/
/*                     max: Math.round(data[0].avg *2),*/
/*                     title: {*/
/*                         text: 'Caba/No indicado'*/
/*                     }*/
/*                 },*/
/*                 credits: {*/
/*                     enabled: false*/
/*                 },*/
/*                 series: [{*/
/*                         name: 'Caba/No indicado',*/
/*                         data: [Math.round(data[1].avg)],*/
/*                         dataLabels: {*/
/*                             format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                     ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +*/
/*                                     '<span style="font-size:12px;color:silver">Cantidad Mensual</span></div>'*/
/*                         },*/
/*                         tooltip: {*/
/*                             valueSuffix: ' km/h'*/
/*                         }*/
/*                     }]*/
/* */
/*             }));;*/
/*                */
/*             */
/* */
/*             // The RPM gauge*/
/*             $('#container-vacio').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                 yAxis: {*/
/*                     min: 0,*/
/*                     max: Math.round(data[2].avg *2),*/
/*                     title: {*/
/*                         text: 'Vacios'*/
/*                     }*/
/*                 },*/
/*                 credits: {*/
/*                     enabled: false*/
/*                 },*/
/*                 series: [{*/
/*                         name: 'Vacios',*/
/*                         data: [Math.round(data[3].avg)],*/
/*                         dataLabels: {*/
/*                             format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                     ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                     '<span style="font-size:12px;color:silver">Cantidad Mensual</span></div>'*/
/*                         },*/
/*                         tooltip: {*/
/*                             valueSuffix: ' revolutions/min'*/
/*                         }*/
/*                     }]*/
/* */
/*             }));*/
/*             $('#container-referenciables').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                 yAxis: {*/
/*                     min: 0,*/
/*                     max: Math.round(data[4].avg *2),*/
/*                     title: {*/
/*                         text: 'Referenciables'*/
/*                     }*/
/*                 },*/
/*                 credits: {*/
/*                     enabled: false*/
/*                 },*/
/*                 series: [{*/
/*                         name: 'RPM',*/
/*                         data: [Math.round(data[5].avg)],*/
/*                         dataLabels: {*/
/*                             format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                     ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                     '<span style="font-size:12px;color:silver">Cantidad Mensual</span></div>'*/
/*                         },*/
/*                         tooltip: {*/
/*                             valueSuffix: 'Cantidad Mensual'*/
/*                         }*/
/*                     }]*/
/* */
/*             }));*/
/*             $('#container-barrio').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                 yAxis: {*/
/*                     min: 0,*/
/*                     max: Math.round(data[6].avg *2),*/
/*                     title: {*/
/*                         text: 'Sin Barrio'*/
/*                     }*/
/*                 },*/
/*                 credits: {*/
/*                     enabled: false*/
/*                 },*/
/*                 series: [{*/
/*                         name: 'RPM',*/
/*                         data: [Math.round(data[7].avg)],*/
/*                         dataLabels: {*/
/*                             format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                     ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                     '<span style="font-size:12px;color:silver">Cantidad Mensual</span></div>'*/
/*                         },*/
/*                         tooltip: {*/
/*                             valueSuffix: 'Cantidad Mensual'*/
/*                         }*/
/*                     }]*/
/* */
/*             }));*/
/*             $('#container-interseccion').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                 yAxis: {*/
/*                     min: 0,*/
/*                     max: Math.round(data[8].avg *2),*/
/*                     title: {*/
/*                         text: 'Interseccion'*/
/*                     }*/
/*                 },*/
/*                 credits: {*/
/*                     enabled: false*/
/*                 },*/
/*                 series: [{*/
/*                         name: 'RPM',*/
/*                         data: [Math.round(data[9].avg)],*/
/*                         dataLabels: {*/
/*                             format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                     ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                     '<span style="font-size:12px;color:silver">Cantidad Mensual</span></div>'*/
/*                         },*/
/*                         tooltip: {*/
/*                             valueSuffix: 'Cantidad Mensual'*/
/*                         }*/
/*                     }]*/
/* */
/*             }));*/
/*  });*/
/*        */
/* */
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}  */
/* {% block body %}*/
/*     <div id="contenido">*/
/*         <div style="width: 1200px; height: 550px; margin: 0 auto; border: 10px #000 solid">*/
/*             <div id="container-caba" style="width: 590px; height: 270px; float: left;border: 5px #000 solid"></div>*/
/*             <div id="container-vacio" style="width: 590px; height: 270px; float: left;border: 5px #000 solid"></div>*/
/*             <div id="container-referenciables" style="width: 590px; height: 270px; float: left;border: 5px #000 solid"></div>*/
/*             <div id="container-interseccion" style="width: 590px; height: 270px; float: left;border: 5px #000 solid"></div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %} */
/* */
/* */
/* */
