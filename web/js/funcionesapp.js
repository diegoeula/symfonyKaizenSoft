function update_grafico(url) {
    $.getJSON(url + "&temp=M")
            .done(function (data) {
                line_update(data, '#lineaM', "T");
                spline_update(data, '#lineaTM', "TC");
            })
            ;
    $.getJSON(url + "&temp=S")
            .done(function (data) {
                line_update(data, '#lineaW', "T");
                spline_update(data, '#lineaTW', "TC");
                $("#lineaW").fadeOut();
                $("#lineaTW").fadeOut();
            })

            ;
    $.getJSON(url + "&temp=D")
            .done(function (data) {
                stock_line(data, '#lineaD', "T");
                spline_stock(data, '#lineaTD', "TC");
                $("#lineaTD").fadeOut();
                $("#lineaD").fadeOut();
            });

}
function update_grafico_ds(url) {
    $.getJSON(url)
            .done(function (data) {
                line_update(data, '#lineaDS', "T");
                spline_update(data, '#lineaTDS', "TC");
            });

}

function update_hora(url) {
    $.getJSON(url)
            .done(function (data) {
                spider_update(data, '#SPIDER');
            })
            ;
}

function line_update(data, grafico, exclude) {
    ajaxRecord = data;

    cnt_all = ajaxRecord.datos.length;

    var chart = $(grafico).highcharts();
    for (var i = 0, j = 0; i < cnt_all; i++) {
        if (exclude !== null)
        {
            if (ajaxRecord.datos[i].tipo === exclude) {
                chart.series[j].setData(ajaxRecord.datos[i].values);
                j = j + 1;
            }
        } else {
            chart.series[i].setData(ajaxRecord.datos[i].values);
        }

    }
}

function spline_update(data, grafico, exclude) {
    ajaxRecord = data;
    cnt_all = ajaxRecord.datos.length;
    var chart = $(grafico).highcharts();
    for (var i = 0, j = 0; i < cnt_all; i++) {
        if (exclude !== null)
        {
            if (ajaxRecord.datos[i].tipo === exclude) {
                chart.series[j].setData(ajaxRecord.datos[i].values);
                j = j + 1;
            }
        } else {
            chart.series[i].setData(ajaxRecord.datos[i].values);
        }

    }
}

function stock_line_update() {
    ajaxRecord = data;

    cnt_all = ajaxRecord.datos.length;

    var chart = $(grafico).highcharts();
    for (var i = 0, j = 0; i < cnt_all; i++) {
        if (exclude !== null)
        {
            if (ajaxRecord.datos[i].tipo === exclude) {
                chart.series[j].setData(ajaxRecord.datos[i].values);
                j = j + 1;
            }
        } else {
            chart.series[i].setData(ajaxRecord.datos[i].values);
        }

    }
}

function spline_stock_update() {
    ajaxRecord = data;
    cnt_all = ajaxRecord.datos.length;

    var chart = $(grafico).highcharts();
    for (var i = 0, j = 0; i < cnt_all; i++) {
        if (exclude !== null)
        {
            if (ajaxRecord.datos[i].tipo === exclude) {
                chart.series[j].setData(ajaxRecord.datos[i].values);
                j = j + 1;
            }
        } else {
            chart.series[i].setData(ajaxRecord.datos[i].values);
        }

    }
}


function spider_update(data, grafico) {
    ajaxRecord = data;

    cnt_all = ajaxRecord.datos.length;

    var chart = $(grafico).highcharts();
    for (var i = 0, j = 0; i < cnt_all; i++) {

        chart.series[i].setData(ajaxRecord.datos[i].values);

    }
}


function detailFeature(e) {
    $table.bootstrapTable('updateRow', {
        index: 0,
        row: {
            Direccion:e.properties.direccion,
            Fiscalia: e.properties.fiscalia,
            FFSS: e.properties.ffss,
            UnidadFFSS: e.properties.unidadffss,
            SumarioPolicial: e.properties.sumariopolicial,
            Victima: e.properties.victima,
            Imputado: e.properties.imputado,
            UFESE: e.properties.ufese,
        }
    });
}

function agregarActuacion(e) {
    if (typeof datos.actuacionSelect === 'undefined') {
        datos.actuacionSelect = [];
    }
    if(datos.actuacionSelect.indexOf(e.properties.id_mod_ori) === -1){
    $tableDatosCapa.bootstrapTable('insertRow', {
        index: 1,
        row: {
            Actuacion: e.properties.actuacion,
            FechaHecho: e.properties.fechahecho,
            HoraHecho: e.properties.hora_hecho,
            LugarHecho: e.properties.lugar_hecho,
            DescripcionHecho: e.properties.descripcion_hecho,
            TotalAutores: e.properties.total_autores,
            Armas: e.properties.uso_armas,
            Modalidad: e.properties.modalidad,
            Seccional: e.properties.desc_secc_seccional,
            Fiscalia: e.properties.desc_fisc_fiscalia,
            Juzgado: e.properties.id_juzgado,
        }
    });
    datos.actuacionSelect.push(e.properties.id_mod_ori);
    }
}


