<?php

/* ControlBundle:TableroControl:tcGral.html.twig */
class __TwigTemplate_792cee1e667dcf3aa4fc2e0fd20bc0d0698bed508264e46cdf5feee2e13d74bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ControlBundle:Default:.twig", "ControlBundle:TableroControl:tcGral.html.twig", 1);
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
        $__internal_39396946cce94cdb0ac2c6239cb7813448c50a880b1f29c191d44c11c9321f06 = $this->env->getExtension("native_profiler");
        $__internal_39396946cce94cdb0ac2c6239cb7813448c50a880b1f29c191d44c11c9321f06->enter($__internal_39396946cce94cdb0ac2c6239cb7813448c50a880b1f29c191d44c11c9321f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:TableroControl:tcGral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39396946cce94cdb0ac2c6239cb7813448c50a880b1f29c191d44c11c9321f06->leave($__internal_39396946cce94cdb0ac2c6239cb7813448c50a880b1f29c191d44c11c9321f06_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3485d9ef5d5ede771e8709d7173842a09494f825a202b6e62be87af64df539b1 = $this->env->getExtension("native_profiler");
        $__internal_3485d9ef5d5ede771e8709d7173842a09494f825a202b6e62be87af64df539b1->enter($__internal_3485d9ef5d5ede771e8709d7173842a09494f825a202b6e62be87af64df539b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style type=\"text/css\">
        body{margin:0; }
        #contenido{
            width:1150px;
        }

        #cont
        {  
            float: left;
            width: 600px;
        }
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/leaflet/leaflet.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-table/bootstrap-table.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/SMA/mapa.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/SMA/markers.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/SMA/tagsCloud.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/leaflet/Leaflet.NavBar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/leaflet/fullscreen/Control.FullScreen.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/leaflet/zoom/L.Control.ZoomBox.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/leaflet/easyprint/easyPrint.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/leaflet/sidebar/leaflet-sidebar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/leaflet/toolbar/leaflet.toolbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/leaflet/toolbar/leaflet.draw.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" />
";
        
        $__internal_3485d9ef5d5ede771e8709d7173842a09494f825a202b6e62be87af64df539b1->leave($__internal_3485d9ef5d5ede771e8709d7173842a09494f825a202b6e62be87af64df539b1_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6bb6f8d396c2ba1488188eba4c8d0f34ff3ce7778ec0a81de77c55ec680347a = $this->env->getExtension("native_profiler");
        $__internal_a6bb6f8d396c2ba1488188eba4c8d0f34ff3ce7778ec0a81de77c55ec680347a->enter($__internal_a6bb6f8d396c2ba1488188eba4c8d0f34ff3ce7778ec0a81de77c55ec680347a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet/leaflet.js"), "html", null, true);
        echo "\"></script> <!-- this is the javascript file that does the magic-->
    <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet/leaflet-google.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-table/bootstrap-table.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-table/locale/bootstrap-table-es-AR.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-table/extensions/export/bootstrap-table-export.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery/tableExport.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/SMA/funcionesMapa.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/SMA/tags.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet/Leaflet.NavBar.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet/fullscreen/Control.FullScreen.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet/zoom/L.Control.ZoomBox.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet/jQuery.print.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet/leaflet.easyPrint.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet/sidebar/leaflet-sidebar.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet/toolbar/leaflet.toolbar-src.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet/toolbar/leaflet.draw-src.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet/toolbar/ColorPicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/leaflet/Autolinker.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mapas.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"https://code.highcharts.com/highcharts.js\"></script>
    <script src=\"https://code.highcharts.com/highcharts-more.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/graficos.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"https://code.highcharts.com/modules/drilldown.js\"></script>

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
        ";
        // line 243
        echo "                     });

                     \$.getJSON(\"http://192.168.57.76:3000/n2/modalidad/grafico/total?callback=?&val=93&fecha_d=20150101&fecha_h=20151126&bar=&sec=&dist=&calle=&temp=M\")
                             .done(function (data) {
                                 line(data, \"\", \"\", \"lineaDS\", \"T\");
                                 spline(data, \"\", \"\", \"lineaTDS\", \"TC\");
                             });

                     \$(document).ready(function () { /*begin chart render*/
                         var colors = Highcharts.getOptions().colors,
                                 categories = ['The Americas', 'Asia Pacific', 'Europe & Africa']
                                 //name = 'Sectors',
                                 ;
                         \$(window).on('load', function () {
                             var chart;
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
                                     text: 'Conflictividad'
                                 },
                                 subtitle: {
                                     text: 'Desagregación'
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
                                                 click: function () {
                                                     var chart = this.series.chart,
                                                             drilldown = this.drilldown
                                                     series = chart.upper
                                                     console.log(this)
                                                     //if (chart.upper.length==0) { // drill down
                                                     chart.setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                                                     console.log(chart.upper.length);
                                                     // }
                                                     //    else {
                                                     //console.log(series)
                                                     // chart.setChart(series.name, series.categories, series.data, series.color);
        ";
        // line 308
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
                                    formatter: function () {
                                        return '<b>' + this.point.name + '</b>: ' + this.y;
                                    }
                                }
                            }
                        },
                        //formatting over hover tooltip
                        tooltip: {
                            formatter: function () {
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
                                data: [],
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
                    }, function (chart) {

                        chart.upper = [];
                        var up = false;
                        chart.setChart = function (name, categories, data, color) {
                            //chart.xAxis[0].setCategories(categories);
                            if (name === true && chart.upper.length) {
                                chart.series[0].remove();
                                chart.addSeries(chart.upper.pop());
                                if (chart.upper.length === 0) {
                                    \$(\"#pie\").hide('up');
                                    up = false;
                                }
                                return true;
                            }

                            if (up === false) {
                                \$(\"#pie\").show().bind('click', function () {
                                    chart.setChart(true);
                                });
                                up = true;
                            }

                            chart.upper.push(chart.series[0].options);
                            chart.series[0].remove();
                            chart.addSeries({
                                name: name,
                                data: data,
                                color: color || 'white'
                            });
                        }
                    });
                    \$.getJSON(\"http://192.168.57.76:3001/control/urbano?fecha_d=201500&fecha_h=201600\")
                            .done(function (data) {
                                var grafico = \$('#container-conflictividad').highcharts();
                                grafico.series[0].setData(data);

                            });
                });
            }); //]]> 

            var basemap = L.tileLayer.wms(\"http://192.168.2.123:8080/service?\", {
                layers: 'osm',
                format: 'image/png'});

            var baseLayer = L.tileLayer.wms(\"http://192.168.2.123:8080/service?\", {
                layers: 'mapbox_black',
                format: 'image/png'});
            var map = new L.Map('map', {
                fullscreenControl: true,
                fullscreenControlOptions: {
                    position: 'bottomleft'
                },
                center: new L.LatLng(-34.627125, -58.446688),
                zoom: 11,
                layers: [basemap]

            });
            var additional_attrib = 'Creado por MPF DAC - Área I+D+i ';
            map.attributionControl.addAttribution(additional_attrib + '&copy;');

            var title = new L.Control();
            title.onAdd = function (map) {
                this._div = L.DomUtil.create('div', 'info'); // create a div with a class \"info\"
                this.update();
                return this._div;
            };
            title.update = function (props) {
                this._div.innerHTML = '<h3>Titulo</h3><h4>Subtitulo</h4>';
            };
        ";
        // line 436
        echo "             title.addTo(map);
             /*Codigo de clorocletas*/
             // get color depending on population density value

             number = 0;
             var legendCl = L.control({position: 'bottomright'});
             \$.getJSON(\"http://192.168.57.76:3001/n2/modalidad/mapa/barrio/max?callback=?&val=93&fecha_d=20150101&fecha_h=20151126&bar=&sec=&dist=&calle=\", function (rawData) {
                 number = rawData[0]['densidad'] / 8;
                 legendCl.onAdd = function (map) {

                     var div = L.DomUtil.create('div', 'info legend'),
                             grades = [],
                             labels = [],
                             from, to;
                     if (rawData[0]['densidad'] > 8) {
                         for (var i = 0; i < 8; i++) {
                             grades.push(Math.floor(i * number));
                         }
                     } else {
                         for (var i = 0; i < rawData[0]['densidad']; i++) {
                             grades.push(i);
                         }
                     }
                     for (var i = 0; i < grades.length; i++) {
                         from = grades[i];
                         to = grades[i + 1];
                         labels.push(
                                 '<i style=\"background:' + getColor(from + 1) + '\"></i> ' +
                                 from + (to ? '&ndash;' + to : '+'));
                     }

                     div.innerHTML = labels.join('<br>');
                     return div;
                 };
                 legendCl.addTo(map);
             });
             var geojsonCloro;
             /*fin codigo clorocletas */
             \$.getJSON(\"http://192.168.57.76:3001/n2/modalidad/mapa/barrio/dato?callback=?&val=93&fecha_d=20150101&fecha_h=20151126&bar=&sec=&dist=&calle=\", function (rawData) {
        ";
        // line 476
        echo "                geojsonCloro = L.geoJson(rawData, {
                    style: style,
                    onEachFeature: onEachFeature
                }).addTo(map);
            });
    </script>
</script>
";
        
        $__internal_a6bb6f8d396c2ba1488188eba4c8d0f34ff3ce7778ec0a81de77c55ec680347a->leave($__internal_a6bb6f8d396c2ba1488188eba4c8d0f34ff3ce7778ec0a81de77c55ec680347a_prof);

    }

    // line 484
    public function block_body($context, array $blocks = array())
    {
        $__internal_81d9ed52953539f5cb2e61c51f89c46f4aa606be1246f48960cf6b92422155fd = $this->env->getExtension("native_profiler");
        $__internal_81d9ed52953539f5cb2e61c51f89c46f4aa606be1246f48960cf6b92422155fd->enter($__internal_81d9ed52953539f5cb2e61c51f89c46f4aa606be1246f48960cf6b92422155fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 485
        echo "    <div id=\"contenido\">
        <div style=\"width: 1150px; height: 680px; margin: 0 auto;border: 1px solid #bdbdbd;\">
            <div id=\"container-conflictividad\"  style=\"width: 570px; height: 335px; float: left;border-radius: 30px 0px 0px 30px;
                 -moz-border-radius: 30px 0px 0px 30px;
                 -webkit-border-radius: 30px 0px 0px 30px;
                 border: 5px solid #bdbdbd;\"></div>
            <div id=\"container-vacio\" style=\"width: 570px; height: 335px; float: left;border-radius: 0px 30px 30px 0px;
                 -moz-border-radius: 0px 30px 30px 0px;
                 -webkit-border-radius: 0px 30px 30px 0px;
                 border: 5px solid #bdbdbd;\">
                <div id=\"lineaDS\" style=\"float: left;width: 450px!important;height: 150px;\"></div>
                <div id=\"lineaTDS\" style=\"float: left;width: 450px!important;height: 150px;\"></div>


            </div>
            <div  id=\"map\" style=\"width: 570px; height: 335px; float: left;border-radius: 30px 0px 0px 30px;
                  -moz-border-radius: 30px 0px 0px 30px;
                  -webkit-border-radius: 30px 0px 0px 30px;
                  border: 5px solid #bdbdbd;\"></div>
            <div id=\"container-interseccion\" style=\"width: 570px; height: 335px; float: left;border-radius: 0px 30px 30px 0px;
                 -moz-border-radius: 0px 30px 30px 0px;
                 -webkit-border-radius: 0px 30px 30px 0px;
                 border: 5px solid #bdbdbd;\">
                <h3>Distribución Por Comisaria</h3>
                <table id=\"table\"
                       data-toggle=\"table\"
                       data-height=\"250\"
                       data-ajax=\"ajaxRequest\"
                       data-search=\"false\"
                       data-side-pagination=\"server\"
                       data-pagination=\"false\">
                    <thead>
                        <tr>
                            <th data-field=\"id\">Comisaria</th>
                            <th data-field=\"name\">Valor Absoluto</th>
                            <th data-field=\"price\">Valor Relativo</th>
                        </tr>
                    </thead>
                </table>





            </div>
        </div>
    </div>


    <script>
        ";
        // line 536
        echo "            // custom your ajax request here
            function ajaxRequest(params) {
                // data you need
                console.log(params.data);
                // just use setTimeout
                setTimeout(function () {
                    params.success({
                        total: 100,
                        rows: [{
                                \"id\": 0,
                                \"name\": \"Comisaria 0\",
                                \"price\": \"Comisaria 0\"
                            }, {
                                \"id\": 1,
                                \"name\": \"Comisaria 1\",
                                \"price\": \"Comisaria 1\"
                            }, {
                                \"id\": 2,
                                \"name\": \"Comisaria 2\",
                                \"price\": \"Comisaria 2\"
                            }, {
                                \"id\": 3,
                                \"name\": \"Comisaria 3\",
                                \"price\": \"Comisaria 3\"
                            }, {
                                \"id\": 4,
                                \"name\": \"Comisaria 4\",
                                \"price\": \"Comisaria 4\"
                            }, {
                                \"id\": 5,
                                \"name\": \"Comisaria 5\",
                                \"price\": \"Comisaria 5\"
                            }, {
                                \"id\": 6,
                                \"name\": \"Comisaria 6\",
                                \"price\": \"Comisaria 6\"
                            }, ]
                    });
                    // hide loading
                    params.complete();
                }, 1000);
            }
    </script>
";
        
        $__internal_81d9ed52953539f5cb2e61c51f89c46f4aa606be1246f48960cf6b92422155fd->leave($__internal_81d9ed52953539f5cb2e61c51f89c46f4aa606be1246f48960cf6b92422155fd_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:TableroControl:tcGral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 536,  514 => 485,  508 => 484,  494 => 476,  453 => 436,  328 => 308,  262 => 243,  204 => 56,  197 => 52,  193 => 51,  189 => 50,  185 => 49,  181 => 48,  177 => 47,  173 => 46,  169 => 45,  165 => 44,  161 => 43,  157 => 42,  153 => 41,  149 => 40,  145 => 39,  141 => 38,  137 => 37,  133 => 36,  129 => 35,  125 => 34,  119 => 32,  113 => 31,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'ControlBundle:Default:.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style type="text/css">*/
/*         body{margin:0; }*/
/*         #contenido{*/
/*             width:1150px;*/
/*         }*/
/* */
/*         #cont*/
/*         {  */
/*             float: left;*/
/*             width: 600px;*/
/*         }*/
/*     </style>*/
/*     <link rel="stylesheet" href="{{asset('css/leaflet/leaflet.css')}}" />*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap-table/bootstrap-table.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/SMA/mapa.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/SMA/markers.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/SMA/tagsCloud.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/leaflet/Leaflet.NavBar.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/leaflet/fullscreen/Control.FullScreen.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/leaflet/zoom/L.Control.ZoomBox.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/leaflet/easyprint/easyPrint.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/leaflet/sidebar/leaflet-sidebar.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/leaflet/toolbar/leaflet.toolbar.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/leaflet/toolbar/leaflet.draw.css') }}">*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/leaflet/leaflet.js')}}"></script> <!-- this is the javascript file that does the magic-->*/
/*     <script type="text/javascript" src="{{ asset('js/leaflet/leaflet-google.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/bootstrap-table/bootstrap-table.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/bootstrap-table/locale/bootstrap-table-es-AR.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/bootstrap-table/extensions/export/bootstrap-table-export.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery/tableExport.js')}}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/SMA/funcionesMapa.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/SMA/tags.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/leaflet/Leaflet.NavBar.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/leaflet/fullscreen/Control.FullScreen.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/leaflet/zoom/L.Control.ZoomBox.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/leaflet/jQuery.print.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/leaflet/leaflet.easyPrint.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/leaflet/sidebar/leaflet-sidebar.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/leaflet/toolbar/leaflet.toolbar-src.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/leaflet/toolbar/leaflet.draw-src.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/leaflet/toolbar/ColorPicker.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/leaflet/Autolinker.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/mapas.js') }}"></script>*/
/*     */
/*     <script src="https://code.highcharts.com/highcharts.js"></script>*/
/*     <script src="https://code.highcharts.com/highcharts-more.js"></script>*/
/*     <script type="text/javascript" src="{{asset('js/graficos.js')}}"></script> */
/*     <script src="https://code.highcharts.com/modules/drilldown.js"></script>*/
/* */
/*     <script type="text/javascript">*/
/* */
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
/*         {# $.getJSON("http://192.168.64.230:3000/control")*/
/*                  .done(function (data) {*/
/*                      // The speed gauge*/
/* */
/*                      $('#container-caba').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                          yAxis: {*/
/*                              min: 0,*/
/*                              max: Math.round(data[0].avg * 2),*/
/*                              title: {*/
/*                                  text: 'Caba/No indicado'*/
/*                              }*/
/*                          },*/
/*                          credits: {*/
/*                              enabled: false*/
/*                          },*/
/*                          series: [{*/
/*                                  name: 'Caba/No indicado',*/
/*                                  data: [Math.round(data[1].avg)],*/
/*                                  dataLabels: {*/
/*                                      format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                              ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +*/
/*                                              '<span style="font-size:12px;color:silver">Cantidad Mensual</span></div>'*/
/*                                  },*/
/*                                  tooltip: {*/
/*                                      valueSuffix: ' km/h'*/
/*                                  }*/
/*                              }]*/
/* */
/*                      }));*/
/*                      ;*/
/*                      // The RPM gauge*/
/*                      $('#container-vacio').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                          yAxis: {*/
/*                              min: 0,*/
/*                              max: Math.round(data[2].avg * 2),*/
/*                              title: {*/
/*                                  text: 'Vacios'*/
/*                              }*/
/*                          },*/
/*                          credits: {*/
/*                              enabled: false*/
/*                          },*/
/*                          series: [{*/
/*                                  name: 'Vacios',*/
/*                                  data: [Math.round(data[3].avg)],*/
/*                                  dataLabels: {*/
/*                                      format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                              ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                              '<span style="font-size:12px;color:silver">Cantidad Mensual</span></div>'*/
/*                                  },*/
/*                                  tooltip: {*/
/*                                      valueSuffix: ' revolutions/min'*/
/*                                  }*/
/*                              }]*/
/* */
/*                      }));*/
/*                      $('#container-referenciables').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                          yAxis: {*/
/*                              min: 0,*/
/*                              max: Math.round(data[4].avg * 2),*/
/*                              title: {*/
/*                                  text: 'Referenciables'*/
/*                              }*/
/*                          },*/
/*                          credits: {*/
/*                              enabled: false*/
/*                          },*/
/*                          series: [{*/
/*                                  name: 'RPM',*/
/*                                  data: [Math.round(data[5].avg)],*/
/*                                  dataLabels: {*/
/*                                      format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                              ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                              '<span style="font-size:12px;color:silver">Cantidad Mensual</span></div>'*/
/*                                  },*/
/*                                  tooltip: {*/
/*                                      valueSuffix: 'Cantidad Mensual'*/
/*                                  }*/
/*                              }]*/
/* */
/*                      }));*/
/*                      $('#container-barrio').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                          yAxis: {*/
/*                              min: 0,*/
/*                              max: Math.round(data[6].avg * 2),*/
/*                              title: {*/
/*                                  text: 'Sin Barrio'*/
/*                              }*/
/*                          },*/
/*                          credits: {*/
/*                              enabled: false*/
/*                          },*/
/*                          series: [{*/
/*                                  name: 'RPM',*/
/*                                  data: [Math.round(data[7].avg)],*/
/*                                  dataLabels: {*/
/*                                      format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                              ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                              '<span style="font-size:12px;color:silver">Cantidad Mensual</span></div>'*/
/*                                  },*/
/*                                  tooltip: {*/
/*                                      valueSuffix: 'Cantidad Mensual'*/
/*                                  }*/
/*                              }]*/
/* */
/*                      }));*/
/*                      $('#container-interseccion').highcharts(Highcharts.merge(gaugeOptions, {*/
/*                          yAxis: {*/
/*                              min: 0,*/
/*                              max: Math.round(data[8].avg * 2),*/
/*                              title: {*/
/*                                  text: 'Interseccion'*/
/*                              }*/
/*                          },*/
/*                          credits: {*/
/*                              enabled: false*/
/*                          },*/
/*                          series: [{*/
/*                                  name: 'RPM',*/
/*                                  data: [Math.round(data[9].avg)],*/
/*                                  dataLabels: {*/
/*                                      format: '<div style="text-align:center"><span style="font-size:25px;color:' +*/
/*                                              ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +*/
/*                                              '<span style="font-size:12px;color:silver">Cantidad Mensual</span></div>'*/
/*                                  },*/
/*                                  tooltip: {*/
/*                                      valueSuffix: 'Cantidad Mensual'*/
/*                                  }*/
/*                              }]*/
/* */
/*                      }));*/
/*                  });#}*/
/*                      });*/
/* */
/*                      $.getJSON("http://192.168.57.76:3000/n2/modalidad/grafico/total?callback=?&val=93&fecha_d=20150101&fecha_h=20151126&bar=&sec=&dist=&calle=&temp=M")*/
/*                              .done(function (data) {*/
/*                                  line(data, "", "", "lineaDS", "T");*/
/*                                  spline(data, "", "", "lineaTDS", "TC");*/
/*                              });*/
/* */
/*                      $(document).ready(function () { /*begin chart render*//* */
/*                          var colors = Highcharts.getOptions().colors,*/
/*                                  categories = ['The Americas', 'Asia Pacific', 'Europe & Africa']*/
/*                                  //name = 'Sectors',*/
/*                                  ;*/
/*                          $(window).on('load', function () {*/
/*                              var chart;*/
/*                              window.chart = new Highcharts.Chart({*/
/*                                  chart: {*/
/*                                      renderTo: 'container-conflictividad',*/
/*                                      type: 'pie',*/
/*                                      /* changes bar size *//* */
/*                                      pointPadding: -0.3,*/
/*                                      borderWidth: 0,*/
/*                                      pointWidth: 10,*/
/*                                      shadow: false,*/
/*                                      backgroundColor: '#e2dfd3'*/
/*                                  },*/
/*                                  title: {*/
/*                                      text: 'Conflictividad'*/
/*                                  },*/
/*                                  subtitle: {*/
/*                                      text: 'Desagregación'*/
/*                                  },*/
/*                                  xAxis: {*/
/*                                      categories: categories*/
/*                                  },*/
/*                                  yAxis: {*/
/*                                      title: {*/
/*                                          text: 'Total Brand Value',*/
/*                                          categories: categories*/
/*                                      }*/
/*                                  },*/
/*                                  //drilldown plot*/
/*                                  plotOptions: {*/
/*                                      pie: {*/
/*                                          cursor: 'pointer',*/
/*                                          allowPointSelect: true,*/
/*                                          pointPadding: -0.3,*/
/*                                          borderWidth: 0,*/
/*                                          pointWidth: 15,*/
/*                                          shadow: false,*/
/*                                          point: {*/
/*                                              events: {*/
/*                                                  click: function () {*/
/*                                                      var chart = this.series.chart,*/
/*                                                              drilldown = this.drilldown*/
/*                                                      series = chart.upper*/
/*                                                      console.log(this)*/
/*                                                      //if (chart.upper.length==0) { // drill down*/
/*                                                      chart.setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);*/
/*                                                      console.log(chart.upper.length);*/
/*                                                      // }*/
/*                                                      //    else {*/
/*                                                      //console.log(series)*/
/*                                                      // chart.setChart(series.name, series.categories, series.data, series.color);*/
/*         {#    }#}*/
/* */
/*                                         },*/
/*                                         drillup: function (e) {*/
/*                                             alert('drill Up');*/
/*                                             console.log(this);*/
/*                                             console.log(this.options.series[0].name);*/
/*                                             console.log(this.options.series[0].data[0].name);*/
/*                                         }*/
/*                                     }*/
/*                                 },*/
/*                                 dataLabels: {*/
/*                                     enabled: true,*/
/*                                     color: '#000',*/
/*                                     //label colors*/
/*                                     connectorColor: '#000',*/
/*                                     // connector label colors*/
/*                                     formatter: function () {*/
/*                                         return '<b>' + this.point.name + '</b>: ' + this.y;*/
/*                                     }*/
/*                                 }*/
/*                             }*/
/*                         },*/
/*                         //formatting over hover tooltip*/
/*                         tooltip: {*/
/*                             formatter: function () {*/
/*                                 var point = this.point,*/
/*                                         s = point.name + ':<b>' + this.y + '% market share</b><br/>';*/
/*                                 if (point.drilldown) {*/
/*                                     s = point.name + ':<b>' + this.y + '</b><br/>';*/
/*                                     s += 'Click to view ' + point.name + ' versions';*/
/*                                 } else {*/
/*                                     s = categories.name + ':<b>' + this.y + '</b><br/>';*/
/*                                     s += 'Click to return to browser brands';*/
/*                                 }*/
/*                                 return s;*/
/*                             }*/
/*                         },*/
/*                         credits: {*/
/*                             enabled: false*/
/*                         },*/
/*                         series: [{*/
/*                                 name: name,*/
/*                                 data: [],*/
/*                                 /* changes bar size *//* */
/*                                 pointPadding: -0.3,*/
/*                                 borderWidth: 0,*/
/*                                 pointWidth: 15,*/
/*                                 shadow: false,*/
/*                                 color: 'black' //Sectors icon*/
/*                             }],*/
/*                         exporting: {*/
/*                             enabled: false*/
/*                         }*/
/*                     }, function (chart) {*/
/* */
/*                         chart.upper = [];*/
/*                         var up = false;*/
/*                         chart.setChart = function (name, categories, data, color) {*/
/*                             //chart.xAxis[0].setCategories(categories);*/
/*                             if (name === true && chart.upper.length) {*/
/*                                 chart.series[0].remove();*/
/*                                 chart.addSeries(chart.upper.pop());*/
/*                                 if (chart.upper.length === 0) {*/
/*                                     $("#pie").hide('up');*/
/*                                     up = false;*/
/*                                 }*/
/*                                 return true;*/
/*                             }*/
/* */
/*                             if (up === false) {*/
/*                                 $("#pie").show().bind('click', function () {*/
/*                                     chart.setChart(true);*/
/*                                 });*/
/*                                 up = true;*/
/*                             }*/
/* */
/*                             chart.upper.push(chart.series[0].options);*/
/*                             chart.series[0].remove();*/
/*                             chart.addSeries({*/
/*                                 name: name,*/
/*                                 data: data,*/
/*                                 color: color || 'white'*/
/*                             });*/
/*                         }*/
/*                     });*/
/*                     $.getJSON("http://192.168.57.76:3001/control/urbano?fecha_d=201500&fecha_h=201600")*/
/*                             .done(function (data) {*/
/*                                 var grafico = $('#container-conflictividad').highcharts();*/
/*                                 grafico.series[0].setData(data);*/
/* */
/*                             });*/
/*                 });*/
/*             }); //]]> */
/* */
/*             var basemap = L.tileLayer.wms("http://192.168.2.123:8080/service?", {*/
/*                 layers: 'osm',*/
/*                 format: 'image/png'});*/
/* */
/*             var baseLayer = L.tileLayer.wms("http://192.168.2.123:8080/service?", {*/
/*                 layers: 'mapbox_black',*/
/*                 format: 'image/png'});*/
/*             var map = new L.Map('map', {*/
/*                 fullscreenControl: true,*/
/*                 fullscreenControlOptions: {*/
/*                     position: 'bottomleft'*/
/*                 },*/
/*                 center: new L.LatLng(-34.627125, -58.446688),*/
/*                 zoom: 11,*/
/*                 layers: [basemap]*/
/* */
/*             });*/
/*             var additional_attrib = 'Creado por MPF DAC - Área I+D+i ';*/
/*             map.attributionControl.addAttribution(additional_attrib + '&copy;');*/
/* */
/*             var title = new L.Control();*/
/*             title.onAdd = function (map) {*/
/*                 this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"*/
/*                 this.update();*/
/*                 return this._div;*/
/*             };*/
/*             title.update = function (props) {*/
/*                 this._div.innerHTML = '<h3>Titulo</h3><h4>Subtitulo</h4>';*/
/*             };*/
/*         {# title.updateCl = function (props) {*/
/*              this._div.innerHTML = '<h4>Cantidad Delitos</h4>' + (props ?*/
/*                      '<b>' + props.name + '</b><br />' + props.density + ' delitos'*/
/*                      : 'Coloquese sobre un barrio');*/
/*          };#}*/
/*              title.addTo(map);*/
/*              /*Codigo de clorocletas*//* */
/*              // get color depending on population density value*/
/* */
/*              number = 0;*/
/*              var legendCl = L.control({position: 'bottomright'});*/
/*              $.getJSON("http://192.168.57.76:3001/n2/modalidad/mapa/barrio/max?callback=?&val=93&fecha_d=20150101&fecha_h=20151126&bar=&sec=&dist=&calle=", function (rawData) {*/
/*                  number = rawData[0]['densidad'] / 8;*/
/*                  legendCl.onAdd = function (map) {*/
/* */
/*                      var div = L.DomUtil.create('div', 'info legend'),*/
/*                              grades = [],*/
/*                              labels = [],*/
/*                              from, to;*/
/*                      if (rawData[0]['densidad'] > 8) {*/
/*                          for (var i = 0; i < 8; i++) {*/
/*                              grades.push(Math.floor(i * number));*/
/*                          }*/
/*                      } else {*/
/*                          for (var i = 0; i < rawData[0]['densidad']; i++) {*/
/*                              grades.push(i);*/
/*                          }*/
/*                      }*/
/*                      for (var i = 0; i < grades.length; i++) {*/
/*                          from = grades[i];*/
/*                          to = grades[i + 1];*/
/*                          labels.push(*/
/*                                  '<i style="background:' + getColor(from + 1) + '"></i> ' +*/
/*                                  from + (to ? '&ndash;' + to : '+'));*/
/*                      }*/
/* */
/*                      div.innerHTML = labels.join('<br>');*/
/*                      return div;*/
/*                  };*/
/*                  legendCl.addTo(map);*/
/*              });*/
/*              var geojsonCloro;*/
/*              /*fin codigo clorocletas *//* */
/*              $.getJSON("http://192.168.57.76:3001/n2/modalidad/mapa/barrio/dato?callback=?&val=93&fecha_d=20150101&fecha_h=20151126&bar=&sec=&dist=&calle=", function (rawData) {*/
/*         {#                 tablaBarrios(rawData.features);#}*/
/*                 geojsonCloro = L.geoJson(rawData, {*/
/*                     style: style,*/
/*                     onEachFeature: onEachFeature*/
/*                 }).addTo(map);*/
/*             });*/
/*     </script>*/
/* </script>*/
/* {% endblock %}  */
/* {% block body %}*/
/*     <div id="contenido">*/
/*         <div style="width: 1150px; height: 680px; margin: 0 auto;border: 1px solid #bdbdbd;">*/
/*             <div id="container-conflictividad"  style="width: 570px; height: 335px; float: left;border-radius: 30px 0px 0px 30px;*/
/*                  -moz-border-radius: 30px 0px 0px 30px;*/
/*                  -webkit-border-radius: 30px 0px 0px 30px;*/
/*                  border: 5px solid #bdbdbd;"></div>*/
/*             <div id="container-vacio" style="width: 570px; height: 335px; float: left;border-radius: 0px 30px 30px 0px;*/
/*                  -moz-border-radius: 0px 30px 30px 0px;*/
/*                  -webkit-border-radius: 0px 30px 30px 0px;*/
/*                  border: 5px solid #bdbdbd;">*/
/*                 <div id="lineaDS" style="float: left;width: 450px!important;height: 150px;"></div>*/
/*                 <div id="lineaTDS" style="float: left;width: 450px!important;height: 150px;"></div>*/
/* */
/* */
/*             </div>*/
/*             <div  id="map" style="width: 570px; height: 335px; float: left;border-radius: 30px 0px 0px 30px;*/
/*                   -moz-border-radius: 30px 0px 0px 30px;*/
/*                   -webkit-border-radius: 30px 0px 0px 30px;*/
/*                   border: 5px solid #bdbdbd;"></div>*/
/*             <div id="container-interseccion" style="width: 570px; height: 335px; float: left;border-radius: 0px 30px 30px 0px;*/
/*                  -moz-border-radius: 0px 30px 30px 0px;*/
/*                  -webkit-border-radius: 0px 30px 30px 0px;*/
/*                  border: 5px solid #bdbdbd;">*/
/*                 <h3>Distribución Por Comisaria</h3>*/
/*                 <table id="table"*/
/*                        data-toggle="table"*/
/*                        data-height="250"*/
/*                        data-ajax="ajaxRequest"*/
/*                        data-search="false"*/
/*                        data-side-pagination="server"*/
/*                        data-pagination="false">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th data-field="id">Comisaria</th>*/
/*                             <th data-field="name">Valor Absoluto</th>*/
/*                             <th data-field="price">Valor Relativo</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                 </table>*/
/* */
/* */
/* */
/* */
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <script>*/
/*         {#        var $table = $('#table');#}*/
/*             // custom your ajax request here*/
/*             function ajaxRequest(params) {*/
/*                 // data you need*/
/*                 console.log(params.data);*/
/*                 // just use setTimeout*/
/*                 setTimeout(function () {*/
/*                     params.success({*/
/*                         total: 100,*/
/*                         rows: [{*/
/*                                 "id": 0,*/
/*                                 "name": "Comisaria 0",*/
/*                                 "price": "Comisaria 0"*/
/*                             }, {*/
/*                                 "id": 1,*/
/*                                 "name": "Comisaria 1",*/
/*                                 "price": "Comisaria 1"*/
/*                             }, {*/
/*                                 "id": 2,*/
/*                                 "name": "Comisaria 2",*/
/*                                 "price": "Comisaria 2"*/
/*                             }, {*/
/*                                 "id": 3,*/
/*                                 "name": "Comisaria 3",*/
/*                                 "price": "Comisaria 3"*/
/*                             }, {*/
/*                                 "id": 4,*/
/*                                 "name": "Comisaria 4",*/
/*                                 "price": "Comisaria 4"*/
/*                             }, {*/
/*                                 "id": 5,*/
/*                                 "name": "Comisaria 5",*/
/*                                 "price": "Comisaria 5"*/
/*                             }, {*/
/*                                 "id": 6,*/
/*                                 "name": "Comisaria 6",*/
/*                                 "price": "Comisaria 6"*/
/*                             }, ]*/
/*                     });*/
/*                     // hide loading*/
/*                     params.complete();*/
/*                 }, 1000);*/
/*             }*/
/*     </script>*/
/* {% endblock %} */
/* */
/* */
/* */
