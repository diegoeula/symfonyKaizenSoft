<?php

/* ControlBundle:Estadisticas:estadisticas.html.twig */
class __TwigTemplate_eef4be6689a54d80109bb87bd72fbf97905b02bac72f4e6e37fe4e8c8507ac96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ControlBundle:Default:.twig", "ControlBundle:Estadisticas:estadisticas.html.twig", 1);
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
        $__internal_ac1674e125d0af6d9ad05ffc91fc2b20f933002fed7db3b69994bb07ed3f1c23 = $this->env->getExtension("native_profiler");
        $__internal_ac1674e125d0af6d9ad05ffc91fc2b20f933002fed7db3b69994bb07ed3f1c23->enter($__internal_ac1674e125d0af6d9ad05ffc91fc2b20f933002fed7db3b69994bb07ed3f1c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:Estadisticas:estadisticas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac1674e125d0af6d9ad05ffc91fc2b20f933002fed7db3b69994bb07ed3f1c23->leave($__internal_ac1674e125d0af6d9ad05ffc91fc2b20f933002fed7db3b69994bb07ed3f1c23_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8a58c001c180c2d83cff92d5a629d1809c82241dc909a4a3bb2e7e101ef53a2c = $this->env->getExtension("native_profiler");
        $__internal_8a58c001c180c2d83cff92d5a629d1809c82241dc909a4a3bb2e7e101ef53a2c->enter($__internal_8a58c001c180c2d83cff92d5a629d1809c82241dc909a4a3bb2e7e101ef53a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style type=\"text/css\">
        body{margin:0; }
        #contenido{
            width:1850px;
        }

        #cont
        {  
            float: left;
            width: 600px;
        }
    </style>
";
        
        $__internal_8a58c001c180c2d83cff92d5a629d1809c82241dc909a4a3bb2e7e101ef53a2c->leave($__internal_8a58c001c180c2d83cff92d5a629d1809c82241dc909a4a3bb2e7e101ef53a2c_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5193147868c1fa8f09b51cbb471659042cdd4bda0a68c4f74550edddf59a1fa = $this->env->getExtension("native_profiler");
        $__internal_f5193147868c1fa8f09b51cbb471659042cdd4bda0a68c4f74550edddf59a1fa->enter($__internal_f5193147868c1fa8f09b51cbb471659042cdd4bda0a68c4f74550edddf59a1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            \$.getJSON(\"http://192.168.64.230:3000/control?fecha=2013\")
                    .done(function (data) {
                        // The speed gauge

                        \$('#container-caba-13').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Errores de carga'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'Caba/No indicado',
                                    data: [Math.round(data[0].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% sin lat/long</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: ' km/h'
                                    }
                                }]

                        }));
                        ;



                        // The RPM gauge
                        \$('#container-vacio-13').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Vacios'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'Vacios',
                                    data: [Math.round(data[1].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% sin lat/long</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: ' revolutions/min'
                                    }
                                }]

                        }));
                        \$('#container-referenciables-13').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Referenciables'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'RPM',
                                    data: [Math.round(data[2].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% sin lat/long</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: 'Cantidad Mensual'
                                    }
                                }]

                        }));
                        \$('#container-barrio-13').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Sin Barrio'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'RPM',
                                    data: [Math.round(data[3].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% sin lat/long</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: 'Cantidad Mensual'
                                    }
                                }]

                        }));
                        \$('#container-interseccion-13').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Interseccion'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'RPM',
                                    data: [Math.round(data[4].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% respecto </br>referenciables</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: 'Cantidad Mensual'
                                    }
                                }]

                        }));
                    });
                 
                         setInterval(function () {
                             // Speed
                             \$.ajax({
                                 url: \"http://192.168.64.230:3000/control?fecha=2013\",
                                 dataType: \"jsonp\",
                                 context: document.body
                             }).done(function (data) {
                                 var chart = \$('#container-caba-13').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[0].porcentaje));
                                 }
                                 
                                 
                                 var chart = \$('#container-vacio-13').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[1].porcentaje));
                                 }
                                 // RPM
                                 var chart = \$('#container-referenciables-13').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[2].porcentaje));
                                 }
                                 
                                 var chart = \$('#container-barrio-13').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[3].porcentaje));
                                 }
                                 
                                 var chart = \$('#container-interseccion-13').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[4].porcentaje));
                                 }
                             });
                         }, 50000);
                         
                         \$.getJSON(\"http://192.168.64.230:3000/control?fecha=2014\")
                    .done(function (data) {
                        // The speed gauge

                        \$('#container-caba-14').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Errores de carga'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'Caba/No indicado',
                                    data: [Math.round(data[0].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% sin lat/long</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: ' km/h'
                                    }
                                }]

                        }));
                        ;



                        // The RPM gauge
                        \$('#container-vacio-14').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Vacios'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'Vacios',
                                    data: [Math.round(data[1].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% sin lat/long</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: ' revolutions/min'
                                    }
                                }]

                        }));
                        \$('#container-referenciables-14').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Referenciables'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'RPM',
                                    data: [Math.round(data[2].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% sin lat/long</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: 'Cantidad Mensual'
                                    }
                                }]

                        }));
                        \$('#container-barrio-14').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Sin Barrio'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'RPM',
                                    data: [Math.round(data[3].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% sin lat/long</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: 'Cantidad Mensual'
                                    }
                                }]

                        }));
                        \$('#container-interseccion-14').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Interseccion'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'RPM',
                                    data: [Math.round(data[4].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% respecto </br>referenciables</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: 'Cantidad Mensual'
                                    }
                                }]

                        }));
                    });
                 
                         setInterval(function () {
                             // Speed
                             \$.ajax({
                                 url: \"http://192.168.64.230:3000/control?fecha=2014\",
                                 dataType: \"jsonp\",
                                 context: document.body
                             }).done(function (data) {
                                 var chart = \$('#container-caba-14').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[0].porcentaje));
                                 }
                                 
                                 
                                 var chart = \$('#container-vacio-14').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[1].porcentaje));
                                 }
                                 // RPM
                                 var chart = \$('#container-referenciables-14').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[2].porcentaje));
                                 }
                                 
                                 var chart = \$('#container-barrio-14').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[3].porcentaje));
                                 }
                                 
                                 var chart = \$('#container-interseccion-14').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[4].porcentaje));
                                 }
                             });
                         }, 50000);
                         \$.getJSON(\"http://192.168.64.230:3000/control?fecha=2015\")
                    .done(function (data) {
                        // The speed gauge

                        \$('#container-caba-15').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Errores de carga'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'Caba/No indicado',
                                    data: [Math.round(data[0].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% sin lat/long</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: ' km/h'
                                    }
                                }]

                        }));
                        ;



                        // The RPM gauge
                        \$('#container-vacio-15').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Vacios'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'Vacios',
                                    data: [Math.round(data[1].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% sin lat/long</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: ' revolutions/min'
                                    }
                                }]

                        }));
                        \$('#container-referenciables-15').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Referenciables'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'RPM',
                                    data: [Math.round(data[2].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% sin lat/long</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: 'Porcentaje sin lat/long'
                                    }
                                }]

                        }));
                        \$('#container-barrio-15').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Sin Barrio'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'RPM',
                                    data: [Math.round(data[3].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% sin lat/long</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: 'Porcentaje del total de hechos'
                                    }
                                }]

                        }));
                        \$('#container-interseccion-15').highcharts(Highcharts.merge(gaugeOptions, {
                            yAxis: {
                                min: 0,
                                max: 100,
                                title: {
                                    text: 'Interseccion'
                                }
                            },
                            credits: {
                                enabled: false
                            },
                            series: [{
                                    name: 'RPM',
                                    data: [Math.round(data[4].porcentaje)],
                                    dataLabels: {
                                        format: '<div style=\"text-align:center\"><span style=\"font-size:25px;color:' +
                                                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y:.1f}</span><br/>' +
                                                '<span style=\"font-size:12px;color:silver\">% respecto </br>referenciables</span></div>'
                                    },
                                    tooltip: {
                                        valueSuffix: 'Cantidad Mensual'
                                    }
                                }]

                        }));
                    });
                 
                         setInterval(function () {
                             // Speed
                             \$.ajax({
                                 url: \"http://192.168.64.230:3000/control?fecha=2015\",
                                 dataType: \"jsonp\",
                                 context: document.body
                             }).done(function (data) {
                                 var chart = \$('#container-caba-15').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[0].porcentaje));
                                 }
                                 
                                 
                                 var chart = \$('#container-vacio-15').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[1].porcentaje));
                                 }
                                 // RPM
                                 var chart = \$('#container-referenciables-15').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[2].porcentaje));
                                 }
                                 
                                 var chart = \$('#container-barrio-15').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[3].porcentaje));
                                 }
                                 
                                 var chart = \$('#container-interseccion-15').highcharts(),
                                         point;

                                 if (chart) {
                                     point = chart.series[0].points[0];
                                     point.update(Math.round(data[4].porcentaje));
                                 }
                             });
                         }, 50000);

             });
    </script>
";
        
        $__internal_f5193147868c1fa8f09b51cbb471659042cdd4bda0a68c4f74550edddf59a1fa->leave($__internal_f5193147868c1fa8f09b51cbb471659042cdd4bda0a68c4f74550edddf59a1fa_prof);

    }

    // line 636
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fb790a4cff2e220c30de17589e6d325ef51d657f168231d028ae2a9d473f8eb = $this->env->getExtension("native_profiler");
        $__internal_3fb790a4cff2e220c30de17589e6d325ef51d657f168231d028ae2a9d473f8eb->enter($__internal_3fb790a4cff2e220c30de17589e6d325ef51d657f168231d028ae2a9d473f8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 637
        echo "    <div id=\"contenido\">
        <div style=\"width: 1800; height: 200px; margin: 0 auto\">
            <div style=\"width: 300px; height: 200px; float: left\"><h1>2013</h1></div>
            <div id=\"container-caba-13\" style=\"width: 300px; height: 200px; float: left\"></div>
            <div id=\"container-vacio-13\" style=\"width: 300px; height: 200px; float: left\"></div>
            <div id=\"container-referenciables-13\" style=\"width: 300px; height: 200px; float: left\"></div>
            <div id=\"container-interseccion-13\" style=\"width: 300px; height: 200px; float: left\"></div>
            <div id=\"container-barrio-13\" style=\"width: 300px; height: 200px; float: left\"></div>
        </div>
        <div style=\"width: 1800; height: 200px; margin: 0 auto\">
            <div style=\"width: 300px; height: 200px; float: left\"><h1>2014</h1></div>
            <div id=\"container-caba-14\" style=\"width: 300px; height: 200px; float: left\"></div>
            <div id=\"container-vacio-14\" style=\"width: 300px; height: 200px; float: left\"></div>
            <div id=\"container-referenciables-14\" style=\"width: 300px; height: 200px; float: left\"></div>
            <div id=\"container-interseccion-14\" style=\"width: 300px; height: 200px; float: left\"></div>
            <div id=\"container-barrio-14\" style=\"width: 300px; height: 200px; float: left\"></div>
        </div>
        <div style=\"width: 1800; height: 200px; margin: 0 auto\">
            <div style=\"width: 300px; height: 200px; float: left\"><h1>2015</h1></div>
            <div id=\"container-caba-15\" style=\"width: 300px; height: 200px; float: left\"></div>
            <div id=\"container-vacio-15\" style=\"width: 300px; height: 200px; float: left\"></div>
            <div id=\"container-referenciables-15\" style=\"width: 300px; height: 200px; float: left\"></div>
            <div id=\"container-interseccion-15\" style=\"width: 300px; height: 200px; float: left\"></div>
            <div id=\"container-barrio-15\" style=\"width: 300px; height: 200px; float: left\"></div>
        </div>
    </div>
";
        
        $__internal_3fb790a4cff2e220c30de17589e6d325ef51d657f168231d028ae2a9d473f8eb->leave($__internal_3fb790a4cff2e220c30de17589e6d325ef51d657f168231d028ae2a9d473f8eb_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:Estadisticas:estadisticas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  704 => 637,  698 => 636,  75 => 20,  70 => 19,  64 => 18,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'ControlBundle:Default:.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style type="text/css">*/
/*         body{margin:0; }*/
/*         #contenido{*/
/*             width:1850px;*/
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
/*             $.getJSON("http://192.168.64.230:3000/control?fecha=2013")*/
/*                     .done(function (data) {*/
/*                         // The speed gauge*/
/* */
/*                         $('#container-caba-13').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Errores de carga'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'Caba/No indicado',*/
/*                                     data: [Math.round(data[0].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% sin lat/long</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: ' km/h'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                         ;*/
/* */
/* */
/* */
/*                         // The RPM gauge*/
/*                         $('#container-vacio-13').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Vacios'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'Vacios',*/
/*                                     data: [Math.round(data[1].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% sin lat/long</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: ' revolutions/min'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                         $('#container-referenciables-13').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Referenciables'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'RPM',*/
/*                                     data: [Math.round(data[2].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% sin lat/long</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: 'Cantidad Mensual'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                         $('#container-barrio-13').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Sin Barrio'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'RPM',*/
/*                                     data: [Math.round(data[3].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% sin lat/long</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: 'Cantidad Mensual'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                         $('#container-interseccion-13').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Interseccion'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'RPM',*/
/*                                     data: [Math.round(data[4].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% respecto </br>referenciables</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: 'Cantidad Mensual'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                     });*/
/*                  */
/*                          setInterval(function () {*/
/*                              // Speed*/
/*                              $.ajax({*/
/*                                  url: "http://192.168.64.230:3000/control?fecha=2013",*/
/*                                  dataType: "jsonp",*/
/*                                  context: document.body*/
/*                              }).done(function (data) {*/
/*                                  var chart = $('#container-caba-13').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[0].porcentaje));*/
/*                                  }*/
/*                                  */
/*                                  */
/*                                  var chart = $('#container-vacio-13').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[1].porcentaje));*/
/*                                  }*/
/*                                  // RPM*/
/*                                  var chart = $('#container-referenciables-13').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[2].porcentaje));*/
/*                                  }*/
/*                                  */
/*                                  var chart = $('#container-barrio-13').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[3].porcentaje));*/
/*                                  }*/
/*                                  */
/*                                  var chart = $('#container-interseccion-13').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[4].porcentaje));*/
/*                                  }*/
/*                              });*/
/*                          }, 50000);*/
/*                          */
/*                          $.getJSON("http://192.168.64.230:3000/control?fecha=2014")*/
/*                     .done(function (data) {*/
/*                         // The speed gauge*/
/* */
/*                         $('#container-caba-14').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Errores de carga'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'Caba/No indicado',*/
/*                                     data: [Math.round(data[0].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% sin lat/long</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: ' km/h'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                         ;*/
/* */
/* */
/* */
/*                         // The RPM gauge*/
/*                         $('#container-vacio-14').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Vacios'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'Vacios',*/
/*                                     data: [Math.round(data[1].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% sin lat/long</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: ' revolutions/min'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                         $('#container-referenciables-14').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Referenciables'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'RPM',*/
/*                                     data: [Math.round(data[2].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% sin lat/long</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: 'Cantidad Mensual'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                         $('#container-barrio-14').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Sin Barrio'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'RPM',*/
/*                                     data: [Math.round(data[3].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% sin lat/long</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: 'Cantidad Mensual'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                         $('#container-interseccion-14').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Interseccion'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'RPM',*/
/*                                     data: [Math.round(data[4].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% respecto </br>referenciables</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: 'Cantidad Mensual'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                     });*/
/*                  */
/*                          setInterval(function () {*/
/*                              // Speed*/
/*                              $.ajax({*/
/*                                  url: "http://192.168.64.230:3000/control?fecha=2014",*/
/*                                  dataType: "jsonp",*/
/*                                  context: document.body*/
/*                              }).done(function (data) {*/
/*                                  var chart = $('#container-caba-14').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[0].porcentaje));*/
/*                                  }*/
/*                                  */
/*                                  */
/*                                  var chart = $('#container-vacio-14').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[1].porcentaje));*/
/*                                  }*/
/*                                  // RPM*/
/*                                  var chart = $('#container-referenciables-14').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[2].porcentaje));*/
/*                                  }*/
/*                                  */
/*                                  var chart = $('#container-barrio-14').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[3].porcentaje));*/
/*                                  }*/
/*                                  */
/*                                  var chart = $('#container-interseccion-14').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[4].porcentaje));*/
/*                                  }*/
/*                              });*/
/*                          }, 50000);*/
/*                          $.getJSON("http://192.168.64.230:3000/control?fecha=2015")*/
/*                     .done(function (data) {*/
/*                         // The speed gauge*/
/* */
/*                         $('#container-caba-15').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Errores de carga'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'Caba/No indicado',*/
/*                                     data: [Math.round(data[0].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% sin lat/long</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: ' km/h'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                         ;*/
/* */
/* */
/* */
/*                         // The RPM gauge*/
/*                         $('#container-vacio-15').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Vacios'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'Vacios',*/
/*                                     data: [Math.round(data[1].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% sin lat/long</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: ' revolutions/min'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                         $('#container-referenciables-15').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Referenciables'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'RPM',*/
/*                                     data: [Math.round(data[2].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% sin lat/long</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: 'Porcentaje sin lat/long'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                         $('#container-barrio-15').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Sin Barrio'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'RPM',*/
/*                                     data: [Math.round(data[3].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% sin lat/long</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: 'Porcentaje del total de hechos'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                         $('#container-interseccion-15').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                             yAxis: {*/
/*                                 min: 0,*/
/*                                 max: 100,*/
/*                                 title: {*/
/*                                     text: 'Interseccion'*/
/*                                 }*/
/*                             },*/
/*                             credits: {*/
/*                                 enabled: false*/
/*                             },*/
/*                             series: [{*/
/*                                     name: 'RPM',*/
/*                                     data: [Math.round(data[4].porcentaje)],*/
/*                                     dataLabels: {*/
/*                                         format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                                 ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                                 '<span style="font-size:12px;color:silver">% respecto </br>referenciables</span></div>'*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         valueSuffix: 'Cantidad Mensual'*/
/*                                     }*/
/*                                 }]*/
/* */
/*                         }));*/
/*                     });*/
/*                  */
/*                          setInterval(function () {*/
/*                              // Speed*/
/*                              $.ajax({*/
/*                                  url: "http://192.168.64.230:3000/control?fecha=2015",*/
/*                                  dataType: "jsonp",*/
/*                                  context: document.body*/
/*                              }).done(function (data) {*/
/*                                  var chart = $('#container-caba-15').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[0].porcentaje));*/
/*                                  }*/
/*                                  */
/*                                  */
/*                                  var chart = $('#container-vacio-15').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[1].porcentaje));*/
/*                                  }*/
/*                                  // RPM*/
/*                                  var chart = $('#container-referenciables-15').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[2].porcentaje));*/
/*                                  }*/
/*                                  */
/*                                  var chart = $('#container-barrio-15').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[3].porcentaje));*/
/*                                  }*/
/*                                  */
/*                                  var chart = $('#container-interseccion-15').highcharts(),*/
/*                                          point;*/
/* */
/*                                  if (chart) {*/
/*                                      point = chart.series[0].points[0];*/
/*                                      point.update(Math.round(data[4].porcentaje));*/
/*                                  }*/
/*                              });*/
/*                          }, 50000);*/
/* */
/*              });*/
/*     </script>*/
/* {% endblock %}  */
/* {% block body %}*/
/*     <div id="contenido">*/
/*         <div style="width: 1800; height: 200px; margin: 0 auto">*/
/*             <div style="width: 300px; height: 200px; float: left"><h1>2013</h1></div>*/
/*             <div id="container-caba-13" style="width: 300px; height: 200px; float: left"></div>*/
/*             <div id="container-vacio-13" style="width: 300px; height: 200px; float: left"></div>*/
/*             <div id="container-referenciables-13" style="width: 300px; height: 200px; float: left"></div>*/
/*             <div id="container-interseccion-13" style="width: 300px; height: 200px; float: left"></div>*/
/*             <div id="container-barrio-13" style="width: 300px; height: 200px; float: left"></div>*/
/*         </div>*/
/*         <div style="width: 1800; height: 200px; margin: 0 auto">*/
/*             <div style="width: 300px; height: 200px; float: left"><h1>2014</h1></div>*/
/*             <div id="container-caba-14" style="width: 300px; height: 200px; float: left"></div>*/
/*             <div id="container-vacio-14" style="width: 300px; height: 200px; float: left"></div>*/
/*             <div id="container-referenciables-14" style="width: 300px; height: 200px; float: left"></div>*/
/*             <div id="container-interseccion-14" style="width: 300px; height: 200px; float: left"></div>*/
/*             <div id="container-barrio-14" style="width: 300px; height: 200px; float: left"></div>*/
/*         </div>*/
/*         <div style="width: 1800; height: 200px; margin: 0 auto">*/
/*             <div style="width: 300px; height: 200px; float: left"><h1>2015</h1></div>*/
/*             <div id="container-caba-15" style="width: 300px; height: 200px; float: left"></div>*/
/*             <div id="container-vacio-15" style="width: 300px; height: 200px; float: left"></div>*/
/*             <div id="container-referenciables-15" style="width: 300px; height: 200px; float: left"></div>*/
/*             <div id="container-interseccion-15" style="width: 300px; height: 200px; float: left"></div>*/
/*             <div id="container-barrio-15" style="width: 300px; height: 200px; float: left"></div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %} */
/* */
/* */
/* */
