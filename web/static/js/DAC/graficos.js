
var lang = {
    contextButtonTitle: "Menú contextual de gráfico",
    downloadJPEG: "Descargar en imagen JPEG",
    downloadPDF: "Descargar en documento PDF",
    downloadPNG: "Descargar en imagen PNG",
    downloadSVG: "Descargar en imagen vectorial SVG",
    drillUpText: "Volver a {series.name}",
    loading: "Cargando...",
    months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    noData: "No hay información para mostrar",
    printChart: "Imprimir gráfico",
    resetZoom: "Resetear zoom",
    resetZoomTitle: "Resetear zoom a nivel 1:1",
    shortMonths: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
    weekdays: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
};
var line = function (data, title, subtitle, divName, exclude, visible, tooltip) {
    visible = typeof visible !== 'undefined' ? visible : true;
    tooltip = typeof tooltip !== 'undefined' ? tooltip : false;
    var options = {
        credits: {
            enabled: false
        },
        chart: {
            renderTo: divName,
            width: 500,
            height: 300,
            marginRight: 20,
            type: 'line'
        },
        title: {
            text: title,
            x: -20 //center
            , style: {
                font: 'arial',
                fontWeight: 'bold'
            }

        },
        subtitle: {
            text: subtitle,
            x: -20,
            style: {
                fontSize: 'large',
                font: 'arial',
                fontWeight: 'bold'
            }
        },
        xAxis: {
            categories: [{}]
            , style: {
                font: 'arial',
                fontWeight: 'bold'
            }
        },
        yAxis: {
            title: {
                text: ''
            }
        },
        tooltip: {
            enabled: tooltip
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true,
                    format: '{point.y}', //format: '<b>{point.name}</b>: {point.y} ({point.percentage:.2f}%)',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                },
                enableMouseTracking: false
            },
            series: {
                dataLabels: {
                    enabled: true
                }

            }
        },
        tooltip: {
            //shared:true,
            pointFormat: '<tr><td style="color: {series.color}">{series.name}: </td>' +
                    '<td style="text-align: right"><b>{point.y} %</b></td></tr>',
            enabled: tooltip
        },
        series: [{
                name: 'Promedio Anual',
                data: [50, 50, 50, 50, 50, 50]
            }]
    };
    ajaxRecord = data;
    cnt_all = 1;
    if (exclude !== null)
    {
        cnt = 0;
        for (var i = 0, j = 0; i < ajaxRecord.datos.length; i++) {
            if (ajaxRecord.datos[i].tipo === exclude) {
                cnt = cnt + 1;
            }
        }
    } else
    {
        cnt = 1;
    }
    var jsonSerie = [];
    for (var i = 0; i < cnt; i++) {
        jsonSerie.push({});
    }
    $.extend(options, {series: jsonSerie});
    options.xAxis.categories = ajaxRecord.categorias;
    for (var i = 0, j = 0; i < cnt_all; i++) {
        if (exclude !== null)
        {
            if (ajaxRecord.datos[i].tipo === exclude) {
                options.series[j].data = ajaxRecord.values;
                j = j + 1;
            }
        } else {
            options.series[i].data = ajaxRecord.values;
            options.series[i].visible = visible;
        }
    }
    Highcharts.setOptions({
        lang: lang
    });
    var chart = new Highcharts.Chart(options);
    /*});*/
};
var pie = function (datadb, title, subtitle, divName, tooltip) {
    tooltip = typeof tooltip !== 'undefined' ? tooltip : false;
    var options = {
        size: 10,
        credits: {
            enabled: false
        },
        chart: {
            renderTo: divName,
            type: 'pie',
//            options3d: {
//                enabled: true,
//                alpha: 45,
//                beta: 0,
//                //   depth: 40
//            },
        },
        title: {
            text: title

        },
        subtitle: {
            text: subtitle,
            style: {
                fontSize: 'large'
            }
        },
        plotOptions: {
            pie: {
//                borderColor: '#000000',
                size: 250,
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    //format: '{point.percentage:.1f}%', <b>{point.name}</b>: 
                    format: '{point.y} ({point.percentage:.1f}%)',
//                    style: {
//                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'white',
////                        textOutline: false,
////                        fontSize: '11px',
//                    },
//                    distance: -40,
//                    inside: true,
                },
                showInLegend: true
            }
        },
        tooltip: {
            shared: true,
            //pointFormat: '<tr><td style="color: {series.color}">{series.name}: </td>' +
            //   '<td style="text-align: right"><b>{point.percentage:.2f} %</b></td></tr>',
            enabled: tooltip
        },
    };
    var jsonSerie = [];
    var jsonSerie1 = [];
    for (var i = 0; i < datadb.length; i++) {
        jsonSerie1.push({
            name: '',
            y: 0
        });
    }
    jsonSerie.push({type: 'pie',
        data: jsonSerie1
    });
    $.extend(options, {series: jsonSerie});
    for (var i = 0; i < datadb.length; i++) {
        options.series[0].data[i].y = parseInt(datadb[i].y);
        options.series[0].data[i].name = datadb[i].name;
    }

//    Highcharts.setOptions({
//        colors: ['#6307f5', '#f37f83', '#258279', '#74fec1', '#707ceb', '#48ab65', '#86a11d', '#1c7335', '#6704b9', '#4f2ee5', '#99f4b0', '#572921', '#acfa9d', '#6170ac', '#0b68ec', '#dfdc06', '#137861', '#306152', '#a9c3ee', '#fb177d']
//    });
    Highcharts.setOptions({
        lang: lang
    });
    var chartTortaComisarias = new Highcharts.Chart(options);
};
var stacked_column = function (data, title, subtitle, divName, exclude, visible, tooltip) {
    tooltip = typeof tooltip !== 'undefined' ? tooltip : false;
    visible = typeof visible !== 'undefined' ? visible : true;
    var options = {
        chart: {
            renderTo: divName,
            type: 'column'
        },
        title: {
            text: title
        },
        credits: {
            enabled: false
        },
        subtitle: {
            text: subtitle,
            style: {
                fontSize: 'large'
            }
        },
        xAxis: {
            categories: [{}]
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        tooltip: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                }
            }
//            enabled: tooltip
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                }
            }
        },
    };
    $.extend(options, {series: data.valores});
    options.xAxis.categories = data.categorias;
    Highcharts.setOptions({
        lang: lang
    });
    var chart = new Highcharts.Chart(options);
};
var multiline = function (data, title, subtitle, divName, exclude, visible, tooltip) {
    tooltip = typeof tooltip !== 'undefined' ? tooltip : false;
    visible = typeof visible !== 'undefined' ? visible : true;
    var options = {
        chart: {
            renderTo: divName,
//            type: 'column'
        },
        title: {
            text: title
        },
        credits: {
            enabled: false
        },
        subtitle: {
            text: subtitle,
            style: {
                fontSize: 'large'
            }
        },
        xAxis: {
            categories: [{}]
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        tooltip: {
            enabled: tooltip
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true,
                    format: '{point.y}', //format: '<b>{point.name}</b>: {point.y} ({point.percentage:.2f}%)',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                },
                enableMouseTracking: false
            },
            series: {
                dataLabels: {
                    enabled: true
                }

            }
//            column: {
//                stacking: 'normal',
//                dataLabels: {
//                    enabled: true,
//                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
//                }
//            }
        },
    };
    $.extend(options, {series: data.valores});
    options.xAxis.categories = data.categorias;
    Highcharts.setOptions({
        lang: lang
    });
    var chart = new Highcharts.Chart(options);
};
function cargarfiltros(datos) {
    if (datos.areaanalisis) {
        var etiqueta;
        switch (datos.areaanalisis) {
            case "1":
                etiqueta = 'DAC';
                break;
            case "4":
                etiqueta = 'Rosario';
                break;
            case "3":
                etiqueta = 'Salta';
                break;
            case "98":
                etiqueta = 'Santiago del Estero';
                break;
            case "2":
                etiqueta = 'Mar del Plata';
                break;
        }
        $("#filtros").append("Área de análisis: ".concat(etiqueta).concat("</br>"));
    }
    if (datos.fechad) {
        var d = new Date(datos.fechad.date),
                month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear();
        if (month.length < 2)
            month = '0' + month;
        if (day.length < 2)
            day = '0' + day;
        $("#filtros").append("Fecha y hora del hecho desde: ".concat([year, month, day].join('-')).concat("</br>"));
    }
    if (datos.fechah) {
        var d = new Date(datos.fechah.date),
                month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear();
        if (month.length < 2)
            month = '0' + month;
        if (day.length < 2)
            day = '0' + day;
        $("#filtros").append("Fecha y hora del hecho hasta: ".concat([year, month, day].join('-')).concat("</br>"));
    }
    if (datos.direccion) {
        $("#filtros").append("Dirección: ".concat(datos.direccion).concat("</br>"));
    }
}