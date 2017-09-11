<?php

/* ControlBundle:TableroControl:grafico.html.twig */
class __TwigTemplate_15f3f87e650800913af3dcbf0f14b8ae2a5ad34ad94d2bd02c82421f7a57eb98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ControlBundle:Default:.twig", "ControlBundle:TableroControl:grafico.html.twig", 1);
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
        $__internal_7d1a16f6328af9adb62bac6135b8ded27751f3eec858e197a63fa83b9fb1ecd2 = $this->env->getExtension("native_profiler");
        $__internal_7d1a16f6328af9adb62bac6135b8ded27751f3eec858e197a63fa83b9fb1ecd2->enter($__internal_7d1a16f6328af9adb62bac6135b8ded27751f3eec858e197a63fa83b9fb1ecd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:TableroControl:grafico.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1a16f6328af9adb62bac6135b8ded27751f3eec858e197a63fa83b9fb1ecd2->leave($__internal_7d1a16f6328af9adb62bac6135b8ded27751f3eec858e197a63fa83b9fb1ecd2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_676713cd65206569b364bd070b472973a40735eb29f3d3d30acc4b18da707108 = $this->env->getExtension("native_profiler");
        $__internal_676713cd65206569b364bd070b472973a40735eb29f3d3d30acc4b18da707108->enter($__internal_676713cd65206569b364bd070b472973a40735eb29f3d3d30acc4b18da707108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_676713cd65206569b364bd070b472973a40735eb29f3d3d30acc4b18da707108->leave($__internal_676713cd65206569b364bd070b472973a40735eb29f3d3d30acc4b18da707108_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc2754766041849b337a9e103c7ab1698be43410ee09b589b0991844fae2d9d4 = $this->env->getExtension("native_profiler");
        $__internal_fc2754766041849b337a9e103c7ab1698be43410ee09b589b0991844fae2d9d4->enter($__internal_fc2754766041849b337a9e103c7ab1698be43410ee09b589b0991844fae2d9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/graficos.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"https://code.highcharts.com/highcharts.js\"></script>
    <script src=\"https://code.highcharts.com/modules/data.js\"></script>
    <script src=\"https://code.highcharts.com/modules/drilldown.js\"></script>
    ";
        // line 25
        echo "

    <script type=\"text/javascript\">
 ";
        // line 134
        echo "            
            


\$(window).on('load', function() {
var chart;
\$(document).ready(function() { /*begin chart render*/
var colors = Highcharts.getOptions().colors,
    categories = ['The Americas', 'Asia Pacific', 'Europe & Africa']
    //name = 'Sectors',
 ;

\$.getJSON(\"http://192.168.64.230:3000/control/urbano?fecha_d=201500&fecha_h=201600\")
                    .done(function (data) {

window.chart = new Highcharts.Chart({
    chart: {
        renderTo: 'container-conflictividad',
        type: 'pie',
        /* changes bar size */
        pointPadding: -0.3,
        borderWidth: 0,
        pointWidth: 10,
        shadow: false,
        backgroundColor: '#e2dfd3'
    },
    title: {
        text: 'Pie Test'
    },
    subtitle: {
        text: 'Pie Chart Triple Breakdown'
    },
    xAxis: {
        categories: categories
    },
    yAxis: {
        title: {
            text: 'Total Brand Value',
            categories: categories
        }
    },
    //drilldown plot
    plotOptions: {
        pie: {
            cursor: 'pointer',
            allowPointSelect: true,
            pointPadding: -0.3,
            borderWidth: 0,
            pointWidth: 15,
            shadow: false,
            point: {
                events: {
                    click: function() {
                        var chart = this.series.chart,
                            drilldown = this.drilldown
                            series=chart.upper
                            console.log(this)
                        //if (chart.upper.length==0) { // drill down
                            chart.setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                            console.log(chart.upper.length);
                       // }
                         //    else {
                         //console.log(series)
                        // chart.setChart(series.name, series.categories, series.data, series.color);
";
        // line 199
        echo "                        
                    },
                     drillup: function (e) {
                    alert('drill Up');
                    console.log(this);
                    console.log(this.options.series[0].name);
                    console.log(this.options.series[0].data[0].name);
                }
                }
            },
            dataLabels: {
                enabled: true,
                color: '#000',
                //label colors
                connectorColor: '#000',
                // connector label colors
                formatter: function() {
                    return '<b>' + this.point.name + '</b>: ' + this.y;

                }
            }
        }
    },
    //formatting over hover tooltip
    tooltip: {
        formatter: function() {
            var point = this.point,
                s = point.name + ':<b>' + this.y + '% market share</b><br/>';
            if (point.drilldown) {
                s = point.name + ':<b>' + this.y + '</b><br/>';
                s += 'Click to view ' + point.name + ' versions';
            } else {
                s = categories.name + ':<b>' + this.y + '</b><br/>';
                s += 'Click to return to browser brands';
            }
            return s;
        }
    },
    credits: {
        enabled: false
    },
    series: [{
        name: name,
        data: data,
        /* changes bar size */
        pointPadding: -0.3,
        borderWidth: 0,
        pointWidth: 15,
        shadow: false,
        color: 'black' //Sectors icon
        }],
    exporting: {
        enabled: false
    }
}, function(chart){

    chart.upper = [];

    var up = false;

    chart.setChart = function(name, categories, data, color) {
        //chart.xAxis[0].setCategories(categories);
        if (name === true && chart.upper.length) {
            chart.series[0].remove();
            chart.addSeries( chart.upper.pop() );

            if( chart.upper.length === 0 ) {
                \$(\"#pie\").hide('up');

                up = false;
            }
            return true;
        }

        if (up === false) {
           \$(\"#pie\").show().bind('click', function(){ chart.setChart(true); });
            up = true;
        }

        chart.upper.push( chart.series[0].options );
        chart.series[0].remove();
        chart.addSeries({
            name: name,
            data: data,
            color: color || 'white'
            });
        }
    });
})  ;
});
});//]]> 

            
    </script>
";
        
        $__internal_fc2754766041849b337a9e103c7ab1698be43410ee09b589b0991844fae2d9d4->leave($__internal_fc2754766041849b337a9e103c7ab1698be43410ee09b589b0991844fae2d9d4_prof);

    }

    // line 294
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae6f8c762b28462a8baecc101a039748134ece4ffd3c074172aa2a1834f95057 = $this->env->getExtension("native_profiler");
        $__internal_ae6f8c762b28462a8baecc101a039748134ece4ffd3c074172aa2a1834f95057->enter($__internal_ae6f8c762b28462a8baecc101a039748134ece4ffd3c074172aa2a1834f95057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 295
        echo "    <div id=\"contenido\">
        <div style=\"width: 1200px; height: 550px; margin: 0 auto; border: 10px #000 solid\">
            <div id=\"container-conflictividad\" ></div>
            ";
        // line 301
        echo "            <button id=\"pie\">reset</button>
        </div>
    </div>
";
        
        $__internal_ae6f8c762b28462a8baecc101a039748134ece4ffd3c074172aa2a1834f95057->leave($__internal_ae6f8c762b28462a8baecc101a039748134ece4ffd3c074172aa2a1834f95057_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:TableroControl:grafico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 301,  260 => 295,  254 => 294,  153 => 199,  87 => 134,  82 => 25,  75 => 20,  70 => 19,  64 => 18,  42 => 4,  36 => 3,  11 => 1,);
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
/*     <script src="https://code.highcharts.com/modules/data.js"></script>*/
/*     <script src="https://code.highcharts.com/modules/drilldown.js"></script>*/
/*     {#<script src="https://code.highcharts.com/highcharts-3d.js"></script>#}*/
/* */
/* */
/*     <script type="text/javascript">*/
/*  {#       $(function () {*/
/* */
/* */
/*             $.getJSON("http://192.168.64.230:3000/control/urbano?fecha_d=201500&fecha_h=201600")*/
/*               $.getJSON("http://192.168.64.230:3000/control/urbano?fecha_d=201500&fecha_h=201600")*/
/*                     .done(function (data) {*/
/*                                 console(data);*/
/*                             $(function () {*/
/*                                 // Create the chart*/
/*                                 {#var delitourbarray = new Array();*/
/*                                 var nodelitourbarray = new Array();*/
/*                                 var valorurbano = parseFloat(parseInt(data.urbano) * 100 / (parseInt(data.urbano) + parseInt(data.nourbano)));*/
/*                                 var valornourbano = parseFloat(parseInt(data.nourbano) * 100 / (parseInt(data.urbano) + parseInt(data.nourbano)));*/
/*                                 for (var i = 0; i < data.datos.length; i++) {*/
/*                                     if (data.datos[i].conflictividad == 'Delitos Urbanos') {*/
/*                                         delitourbarray.push({*/
/*                                             name: data.datos[i].mod_tipo_delito,*/
/*                                             y: parseFloat(parseInt(data.datos[i].count) * 100 / parseInt(data.urbano)),*/
/*                                             // color: Highcharts.getOptions().colors[i]*/
/*                                         });*/
/*                                     }*/
/*                                     else {*/
/*                                         nodelitourbarray.push({*/
/*                                             name: data.datos[i].mod_tipo_delito,*/
/*                                             y: parseFloat(parseInt(data.datos[i].count) * 100 / parseInt(data.nourbano)),*/
/*                                             // color: Highcharts.getOptions().colors[i]*/
/*                                         });*/
/*                                     }*/
/* */
/*                                 }*/
/* */
/* */
/*                                 $('#container-conflictividad').highcharts({*/
/*                                     chart: {*/
/*                                         type: 'pie',*/
/*                                         {#options3d: {*/
/*                                             enabled: true,*/
/*                                             alpha: 45*/
/*                                         }*/
/*                                     },*/
/*                                     title: {*/
/*                                         text: 'Análisis de Conflictividades'*/
/*                                     },*/
/*                                     subtitle: {*/
/*                                         text: 'Click para ver su desagregación.'*/
/*                                     },*/
/*                                     plotOptions: {*/
/*                                         series: {*/
/*                                             dataLabels: {*/
/*                                                 enabled: true,*/
/*                                                 format: '{point.name}: {point.y:.1f}%'*/
/*                                             },*/
/*                                         }*/
/*                                     },*/
/*                                     credits: {*/
/*                                         enabled: false*/
/*                                     },*/
/*                                     tooltip: {*/
/*                                         headerFormat: '<span style="font-size:11px" >{series.name}</span><br>',*/
/*                                         pointFormat: '<span style="color:{point.color}" >{point.name}</span>: <b>{point.y:.2f}%</b> del total<br/>'*/
/*                                     },*/
/*                                     series: [data]*/
/*                             {*/
/*                                             name: 'Conflictividades',*/
/*                                             colorByPoint: true,*/
/*                                             data: [{*/
/*                                                     name: 'Delitos Urbanos',*/
/*                                                     y: valorurbano,*/
/*                                                     drilldown: 'Delitos Urbanos'*/
/*                                                 }, {*/
/*                                                     name: 'No Delitos Urbanos',*/
/*                                                     y: valornourbano,*/
/*                                                     drilldown: 'No Delitos Urbanos'*/
/*                                                 }]*/
/*                                         }],*/
/*                                     drilldown: {*/
/*                                         series: [{*/
/*                                                 name: 'Delitos Urbanos',*/
/*                                                 id: 'Delitos Urbanos',*/
/*                                                 data: delitourbarray*/
/*                                             }, {*/
/*                                                 name: 'No Delitos Urbanos',*/
/*                                                 id: 'No Delitos Urbanos',*/
/*                                                 data: nodelitourbarray*/
/*                                             }],*/
/*                                         credits: {*/
/*                                             enabled: false*/
/*                                         },*/
/*                                     }*/
/*                                 });*/
/*                             });*/
/*                         });*/
/* */
/*                 function arriba(valor) {*/
/*                     alert("arriba ".valor);*/
/*                 }*/
/*                 ;*/
/* */
/* */
/* */
/* */
/* */
/* */
/*             });*/
/*             */
/*             #}*/
/*             */
/*             */
/* */
/* */
/* $(window).on('load', function() {*/
/* var chart;*/
/* $(document).ready(function() { /*begin chart render*//* */
/* var colors = Highcharts.getOptions().colors,*/
/*     categories = ['The Americas', 'Asia Pacific', 'Europe & Africa']*/
/*     //name = 'Sectors',*/
/*  ;*/
/* */
/* $.getJSON("http://192.168.64.230:3000/control/urbano?fecha_d=201500&fecha_h=201600")*/
/*                     .done(function (data) {*/
/* */
/* window.chart = new Highcharts.Chart({*/
/*     chart: {*/
/*         renderTo: 'container-conflictividad',*/
/*         type: 'pie',*/
/*         /* changes bar size *//* */
/*         pointPadding: -0.3,*/
/*         borderWidth: 0,*/
/*         pointWidth: 10,*/
/*         shadow: false,*/
/*         backgroundColor: '#e2dfd3'*/
/*     },*/
/*     title: {*/
/*         text: 'Pie Test'*/
/*     },*/
/*     subtitle: {*/
/*         text: 'Pie Chart Triple Breakdown'*/
/*     },*/
/*     xAxis: {*/
/*         categories: categories*/
/*     },*/
/*     yAxis: {*/
/*         title: {*/
/*             text: 'Total Brand Value',*/
/*             categories: categories*/
/*         }*/
/*     },*/
/*     //drilldown plot*/
/*     plotOptions: {*/
/*         pie: {*/
/*             cursor: 'pointer',*/
/*             allowPointSelect: true,*/
/*             pointPadding: -0.3,*/
/*             borderWidth: 0,*/
/*             pointWidth: 15,*/
/*             shadow: false,*/
/*             point: {*/
/*                 events: {*/
/*                     click: function() {*/
/*                         var chart = this.series.chart,*/
/*                             drilldown = this.drilldown*/
/*                             series=chart.upper*/
/*                             console.log(this)*/
/*                         //if (chart.upper.length==0) { // drill down*/
/*                             chart.setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);*/
/*                             console.log(chart.upper.length);*/
/*                        // }*/
/*                          //    else {*/
/*                          //console.log(series)*/
/*                         // chart.setChart(series.name, series.categories, series.data, series.color);*/
/* {#    }#}*/
/*                         */
/*                     },*/
/*                      drillup: function (e) {*/
/*                     alert('drill Up');*/
/*                     console.log(this);*/
/*                     console.log(this.options.series[0].name);*/
/*                     console.log(this.options.series[0].data[0].name);*/
/*                 }*/
/*                 }*/
/*             },*/
/*             dataLabels: {*/
/*                 enabled: true,*/
/*                 color: '#000',*/
/*                 //label colors*/
/*                 connectorColor: '#000',*/
/*                 // connector label colors*/
/*                 formatter: function() {*/
/*                     return '<b>' + this.point.name + '</b>: ' + this.y;*/
/* */
/*                 }*/
/*             }*/
/*         }*/
/*     },*/
/*     //formatting over hover tooltip*/
/*     tooltip: {*/
/*         formatter: function() {*/
/*             var point = this.point,*/
/*                 s = point.name + ':<b>' + this.y + '% market share</b><br/>';*/
/*             if (point.drilldown) {*/
/*                 s = point.name + ':<b>' + this.y + '</b><br/>';*/
/*                 s += 'Click to view ' + point.name + ' versions';*/
/*             } else {*/
/*                 s = categories.name + ':<b>' + this.y + '</b><br/>';*/
/*                 s += 'Click to return to browser brands';*/
/*             }*/
/*             return s;*/
/*         }*/
/*     },*/
/*     credits: {*/
/*         enabled: false*/
/*     },*/
/*     series: [{*/
/*         name: name,*/
/*         data: data,*/
/*         /* changes bar size *//* */
/*         pointPadding: -0.3,*/
/*         borderWidth: 0,*/
/*         pointWidth: 15,*/
/*         shadow: false,*/
/*         color: 'black' //Sectors icon*/
/*         }],*/
/*     exporting: {*/
/*         enabled: false*/
/*     }*/
/* }, function(chart){*/
/* */
/*     chart.upper = [];*/
/* */
/*     var up = false;*/
/* */
/*     chart.setChart = function(name, categories, data, color) {*/
/*         //chart.xAxis[0].setCategories(categories);*/
/*         if (name === true && chart.upper.length) {*/
/*             chart.series[0].remove();*/
/*             chart.addSeries( chart.upper.pop() );*/
/* */
/*             if( chart.upper.length === 0 ) {*/
/*                 $("#pie").hide('up');*/
/* */
/*                 up = false;*/
/*             }*/
/*             return true;*/
/*         }*/
/* */
/*         if (up === false) {*/
/*            $("#pie").show().bind('click', function(){ chart.setChart(true); });*/
/*             up = true;*/
/*         }*/
/* */
/*         chart.upper.push( chart.series[0].options );*/
/*         chart.series[0].remove();*/
/*         chart.addSeries({*/
/*             name: name,*/
/*             data: data,*/
/*             color: color || 'white'*/
/*             });*/
/*         }*/
/*     });*/
/* })  ;*/
/* });*/
/* });//]]> */
/* */
/*             */
/*     </script>*/
/* {% endblock %}  */
/* {% block body %}*/
/*     <div id="contenido">*/
/*         <div style="width: 1200px; height: 550px; margin: 0 auto; border: 10px #000 solid">*/
/*             <div id="container-conflictividad" ></div>*/
/*             {# <div id="container-vacio" style="width: 590px; height: 270px; float: left;border: 5px #000 solid"></div>*/
/*              <div id="container-referenciables" style="width: 590px; height: 270px; float: left;border: 5px #000 solid"></div>*/
/*              <div id="container-interseccion" style="width: 590px; height: 270px; float: left;border: 5px #000 solid"></div>#}*/
/*             <button id="pie">reset</button>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %} */
/* */
/* */
/* */
