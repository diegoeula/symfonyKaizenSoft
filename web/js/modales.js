//  *****************************************************************
//                      Santiago
// ******************************************************************

window.operateEvents = {
    'click .removeLugar': function (e, value, row, index) {
        $('#lugarTable').bootstrapTable('remove', {
            field: 'id',
            values: [row.id]
        });
        $("select[id$=_lugar] option[value='" + row.id + "']").prop("selected", false)
    },
    'click .editLugar': function (e, value, row, index) {
        $.getJSON(Routing.generate('editLugar', {id: [row.id]}))
                .done(function (data) {
                    $("select[id=lugar_form_tipolugar]").val(data.datos.tipolugar);
                    $('.chosen-select').trigger('chosen:updated');
                    document.getElementById("lugar_form_direccion").value = data.datos.direccion;
                    document.getElementById("lugar_form_latitud").value = data.datos.latitud;
                    document.getElementById("lugar_form_longitud").value = data.datos.longitud;
                    document.getElementById("lugar_form_manzana").value = data.datos.manzana;
                    document.getElementById("lugar_form_torre").value = data.datos.torre;
                    document.getElementById("lugar_form_piso").value = data.datos.piso;
                    document.getElementById("lugar_form_depto").value = data.datos.depto;
                    document.getElementById("lugar_form_casa").value = data.datos.casa;
                    document.getElementById("lugar_form_referencia").value = data.datos.referencia;
                    document.lugar_form.action = Routing.generate('editLugar', {id: [row.id]});
                })
        $('#new_lugar').modal('show');
    },
    'click .viewLugar': function (e, value, row, index) {
        $.getJSON(Routing.generate('editLugar', {id: [row.id]}))
                .done(function (data) {
                    $("select[id=lugar_form_tipolugar]").val(data.datos.tipolugar);
                    $('.chosen-select').trigger('chosen:updated');
                    document.getElementById("lugar_form_direccion").value = data.datos.direccion;
                    document.getElementById("lugar_form_latitud").value = data.datos.latitud;
                    document.getElementById("lugar_form_longitud").value = data.datos.longitud;
                    document.getElementById("lugar_form_manzana").value = data.datos.manzana;
                    document.getElementById("lugar_form_torre").value = data.datos.torre;
                    document.getElementById("lugar_form_piso").value = data.datos.piso;
                    document.getElementById("lugar_form_depto").value = data.datos.depto;
                    document.getElementById("lugar_form_casa").value = data.datos.casa;
                    document.getElementById("lugar_form_referencia").value = data.datos.referencia;
                    document.getElementById("save_lugar").style.display = "none";
                    document.lugar_form.action = Routing.generate('editLugar', {id: [row.id]});
                    deshabilitarBotonesForm('new_lugar', true);
                })
        $('#new_lugar').modal('show');
    },
    'click .removePersona': function (e, value, row, index) {
        $('#personaTable').bootstrapTable('remove', {
            field: 'id',
            values: [row.id]
        });
    },
    'click .editPersona': function (e, value, row, index) {
        $.getJSON(Routing.generate('editPersona', {id: [row.id]}))
                .done(function (data) {
                    $("select[id=persona_form_nacionalidad]").val(data.datos.nacionalidad);
                    $("select[id=persona_form_tipodocumento]").val(data.datos.tipodocumento);
                    $("select[id=persona_form_genero]").val(data.datos.genero);
                    $("select[id=persona_form_tiporazonsocial]").val(data.datos.tiporazonsocial);
                    if (data.datos.personafisica == 1) {
                        $("select[id=persona_form_personafisica]").val(1);
                    } else {
                        $("select[id=persona_form_personafisica]").val(2);
                    }
                    if (data.datos.esfuncionario == 1) {
                        $("select[id=persona_form_esfuncionario]").val(1);
                    } else {
                        $("select[id=persona_form_esfuncionario]").val(2);
                    }
                    $('.chosen-select').trigger('chosen:updated');
                    $("#persona_form_personafisica").change();
                    $("#persona_form_esfuncionario").change();
                    document.getElementById("persona_form_razonsocial").value = data.datos.razonsocial;
                    document.getElementById("persona_form_nombre").value = data.datos.nombre;
                    document.getElementById("persona_form_apellido").value = data.datos.apellido;
                    document.getElementById("persona_form_apodo").value = data.datos.apodo;
                    document.getElementById("persona_form_nrodocumento").value = data.datos.nrodocumento;
                    document.getElementById("persona_form_fechanacimiento").value = data.datos.fechanacimiento;
                    document.getElementById("persona_form_edad").value = data.datos.edad;
                    document.getElementById("persona_form_telefono").value = data.datos.telefono;
                    document.getElementById("persona_form_email").value = data.datos.email;
                    document.getElementById("persona_form_redessociales").value = data.datos.redessociales;
                    document.getElementById("persona_form_direccion").value = data.datos.direccion;
                    document.getElementById("persona_form_latitud").value = data.datos.latitud;
                    document.getElementById("persona_form_longitud").value = data.datos.longitud;
                    document.getElementById("persona_form_manzana").value = data.datos.manzana;
                    document.getElementById("persona_form_torre").value = data.datos.torre;
                    document.getElementById("persona_form_piso").value = data.datos.piso;
                    document.getElementById("persona_form_depto").value = data.datos.depto;
                    document.getElementById("persona_form_casa").value = data.datos.casa;
                    document.getElementById("persona_form_referencia").value = data.datos.referencia;
                    document.getElementById("persona_form_funcion").value = data.datos.funcion;
                    document.getElementById("persona_form_esfuncionariodescripcion").value = data.datos.esfuncionariodescripcion;
//                    document.getElementById("persona_form_observaciones").value = data.datos.observaciones;
                    document.persona_form.action = Routing.generate('editPersona', {id: [row.id]});
                })
        $('#new_persona').modal('show');
    },
    'click .viewPersona': function (e, value, row, index) {
        $.getJSON(Routing.generate('editPersona', {id: [row.id]}))
                .done(function (data) {
                    $("select[id=persona_form_nacionalidad]").val(data.datos.nacionalidad);
                    $("select[id=persona_form_tipodocumento]").val(data.datos.tipodocumento);
                    $("select[id=persona_form_genero]").val(data.datos.genero);
                    $("select[id=persona_form_tiporazonsocial]").val(data.datos.tiporazonsocial);
                    if (data.datos.personafisica == 1) {
                        $("select[id=persona_form_personafisica]").val(1);
                    } else {
                        $("select[id=persona_form_personafisica]").val(2);
                    }
                    if (data.datos.esfuncionario == 1) {
                        $("select[id=persona_form_esfuncionario]").val(1);
                    } else {
                        $("select[id=persona_form_esfuncionario]").val(2);
                    }
                    $('.chosen-select').trigger('chosen:updated');
                    $("#persona_form_personafisica").change();
                    $("#persona_form_esfuncionario").change();
                    document.getElementById("persona_form_razonsocial").value = data.datos.razonsocial;
                    document.getElementById("persona_form_nombre").value = data.datos.nombre;
                    document.getElementById("persona_form_apellido").value = data.datos.apellido;
                    document.getElementById("persona_form_apodo").value = data.datos.apodo;
                    document.getElementById("persona_form_nrodocumento").value = data.datos.nrodocumento;
                    document.getElementById("persona_form_fechanacimiento").value = data.datos.fechanacimiento;
                    document.getElementById("persona_form_edad").value = data.datos.edad;
                    document.getElementById("persona_form_telefono").value = data.datos.telefono;
                    document.getElementById("persona_form_email").value = data.datos.email;
                    document.getElementById("persona_form_redessociales").value = data.datos.redessociales;
                    document.getElementById("persona_form_direccion").value = data.datos.direccion;
                    document.getElementById("persona_form_latitud").value = data.datos.latitud;
                    document.getElementById("persona_form_longitud").value = data.datos.longitud;
                    document.getElementById("persona_form_manzana").value = data.datos.manzana;
                    document.getElementById("persona_form_torre").value = data.datos.torre;
                    document.getElementById("persona_form_piso").value = data.datos.piso;
                    document.getElementById("persona_form_depto").value = data.datos.depto;
                    document.getElementById("persona_form_casa").value = data.datos.casa;
                    document.getElementById("persona_form_referencia").value = data.datos.referencia;
                    document.getElementById("persona_form_funcion").value = data.datos.funcion;
                    document.getElementById("persona_form_esfuncionariodescripcion").value = data.datos.esfuncionariodescripcion;
//                    document.getElementById("persona_form_observaciones").value = data.datos.observaciones;
                    document.getElementById("save_persona").style.display = "none";
                    document.persona_form.action = Routing.generate('editPersona', {id: [row.id]});
                    deshabilitarBotonesForm('new_persona', true);
                })
        $('#new_persona').modal('show');
    },
    'click .removeDroga': function (e, value, row, index) {
        $('#drogasTable').bootstrapTable('remove', {
            field: 'id',
            values: [row.id]
        });
    },
    'click .editDroga': function (e, value, row, index) {
        $.getJSON(Routing.generate('editDroga', {id: [row.id]}))
                .done(function (data) {
                    $("select[id=droga_form_tipo]").val(data.datos.tipo);
//                    $("select[id=droga_form_estado]").val(data.datos.estado);
                    $("select[id=droga_form_unidadestupefaciente]").val(data.datos.unidadestupefaciente);
                    $("select[id=droga_form_EstupefacienteEncuentra]").val(data.datos.EstupefacienteEncuentra);
                    $("select[id=droga_form_EstupefacienteEncuentraCamuflada]").val(data.datos.EstupefacienteEncuentraCamuflada);
                    if (data.datos.fraccionadaparaconsumo == 1) {
                        $("select[id=droga_form_fraccionadaparaconsumo]").val(1);
                    } else {
                        $("select[id=droga_form_fraccionadaparaconsumo]").val(2);
                    }
                    $('.chosen-select').trigger('chosen:updated');
                    document.getElementById("droga_form_cantidad").value = data.datos.cantidad;
//                    document.getElementById("droga_form_precio").value = data.datos.precio;
                    document.getElementById("droga_form_nivelPureza").value = data.datos.nivelPureza;
                    document.getElementById("droga_form_colorenvoltorio").value = data.datos.colorenvoltorio;
                    document.getElementById("droga_form_simboloenvoltorio").value = data.datos.simboloenvoltorio;
                    document.getElementById("droga_form_formapresentacion").value = data.datos.formapresentacion;
                    document.getElementById("droga_form_formapresentacioncantidad").value = data.datos.formapresentacioncantidad;
//                    document.getElementById("droga_form_observaciones").value = data.datos.observaciones;
                    document.droga_form.action = Routing.generate('editDroga', {id: [row.id]});
                })
        $('#new_droga').modal('show');
    },
    'click .viewDroga': function (e, value, row, index) {
        $.getJSON(Routing.generate('editDroga', {id: [row.id]}))
                .done(function (data) {
                    $("select[id=droga_form_tipo]").val(data.datos.tipo);
//                    $("select[id=droga_form_estado]").val(data.datos.estado);
                    $("select[id=droga_form_unidadestupefaciente]").val(data.datos.unidadestupefaciente);
                    $("select[id=droga_form_EstupefacienteEncuentra]").val(data.datos.EstupefacienteEncuentra);
                    $("select[id=droga_form_EstupefacienteEncuentraCamuflada]").val(data.datos.EstupefacienteEncuentraCamuflada);
                    if (data.datos.fraccionadaparaconsumo == 1) {
                        $("select[id=droga_form_fraccionadaparaconsumo]").val(1);
                    } else {
                        $("select[id=droga_form_fraccionadaparaconsumo]").val(2);
                    }
                    $('.chosen-select').trigger('chosen:updated');
                    document.getElementById("droga_form_cantidad").value = data.datos.cantidad;
//                    document.getElementById("droga_form_precio").value = data.datos.precio;
                    document.getElementById("droga_form_nivelPureza").value = data.datos.nivelPureza;
                    document.getElementById("droga_form_colorenvoltorio").value = data.datos.colorenvoltorio;
                    document.getElementById("droga_form_simboloenvoltorio").value = data.datos.simboloenvoltorio;
                    document.getElementById("droga_form_formapresentacion").value = data.datos.formapresentacion;
                    document.getElementById("droga_form_formapresentacioncantidad").value = data.datos.formapresentacioncantidad;
//                    document.getElementById("droga_form_observaciones").value = data.datos.observaciones;
                    document.getElementById("save_droga").style.display = "none";
                    document.droga_form.action = Routing.generate('editDroga', {id: [row.id]});
                    deshabilitarBotonesForm('new_droga', true);
                })
        $('#new_droga').modal('show');
    },
    'click .removeElemento': function (e, value, row, index) {
        $('#elementosTable').bootstrapTable('remove', {
            field: 'id',
            values: [row.id]
        });
    },
    'click .editElemento': function (e, value, row, index) {
        $.getJSON(Routing.generate('editElemento', {id: [row.id]}))
                .done(function (data) {
                    $("select[id=elementos_form_tipoelemento]").val(data.datos.tipoelemento);
                    $("select[id=elementos_form_elementoId]").val(data.datos.elementoId);
                    $("select[id=elementos_form_tipovehiculo]").val(data.datos.tipovehiculo);
                    $("select[id=elementos_form_nacionalidad]").val(data.datos.nacionalidad);
                    $("select[id=elementos_form_tipobien]").val(data.datos.tipobien);
                    $("select[id=elementos_form_dinerounidad]").val(data.datos.dinerounidad);
                    $("select[id=elementos_form_celularcompania]").val(data.datos.celularcompania);
                    $("select[id=elementos_form_celularmodocontratacion]").val(data.datos.celularmodocontratacion);
                    $('.chosen-select').trigger('chosen:updated');
                    $("#elementos_form_tipoelemento").chosen().change();
                    document.getElementById("elementos_form_cantidad").value = data.datos.cantidad;
                    document.getElementById("elementos_form_modelo").value = data.datos.modelo;
                    document.getElementById("elementos_form_dominioserie").value = data.datos.dominioserie;
                    document.getElementById("elementos_form_color").value = data.datos.color;
                    document.getElementById("elementos_form_propietariov").value = data.datos.propietariov;
                    document.getElementById("elementos_form_descripcion").value = data.datos.descripcion;
                    document.getElementById("elementos_form_propietario").value = data.datos.propietario;
                    document.getElementById("elementos_form_dinerocantidad").value = data.datos.dinerocantidad;
                    document.getElementById("elementos_form_celularmarca").value = data.datos.celularmarca;
                    document.getElementById("elementos_form_celularmodelo").value = data.datos.celularmodelo;
                    document.getElementById("elementos_form_celulartitular").value = data.datos.celulartitular;
                    document.getElementById("elementos_form_celularnro").value = data.datos.celularnro;
                    document.getElementById("elementos_form_celularimei").value = data.datos.celularimei;
                    document.getElementById("elementos_form_celularsim").value = data.datos.celularsim;
                    document.getElementById("elementos_form_armacalibre").value = data.datos.armacalibre;
                    document.getElementById("elementos_form_armamarca").value = data.datos.armamarca;
                    document.getElementById("elementos_form_armamodelo").value = data.datos.armamodelo;
                    document.getElementById("elementos_form_armaanmac").value = data.datos.armaanmac;
                    document.getElementById("elementos_form_armaserie").value = data.datos.armaserie;
                    document.getElementById("elementos_form_direccion").value = data.datos.direccion;
                    document.getElementById("elementos_form_latitud").value = data.datos.latitud;
                    document.getElementById("elementos_form_longitud").value = data.datos.longitud;
                    document.getElementById("elementos_form_manzana").value = data.datos.manzana;
                    document.getElementById("elementos_form_torre").value = data.datos.torre;
                    document.getElementById("elementos_form_piso").value = data.datos.piso;
                    document.getElementById("elementos_form_depto").value = data.datos.depto;
                    document.getElementById("elementos_form_casa").value = data.datos.casa;
                    document.getElementById("elementos_form_referencia").value = data.datos.referencia;
                    $('#elementosLugar').empty();
                    document.elementos_form.action = Routing.generate('editElemento', {id: [row.id]});
                })
        $('#new_elemento').modal('show');
    },
    'click .viewElemento': function (e, value, row, index) {
        $.getJSON(Routing.generate('editElemento', {id: [row.id]}))
                .done(function (data) {
                    $("select[id=elementos_form_tipoelemento]").val(data.datos.tipoelemento);
                    $("select[id=elementos_form_elementoId]").val(data.datos.elementoId);
                    $("select[id=elementos_form_tipovehiculo]").val(data.datos.tipovehiculo);
                    $("select[id=elementos_form_nacionalidad]").val(data.datos.nacionalidad);
                    $("select[id=elementos_form_tipobien]").val(data.datos.tipobien);
                    $("select[id=elementos_form_dinerounidad]").val(data.datos.dinerounidad);
                    $("select[id=elementos_form_celularcompania]").val(data.datos.celularcompania);
                    $("select[id=elementos_form_celularmodocontratacion]").val(data.datos.celularmodocontratacion);
                    $('.chosen-select').trigger('chosen:updated');
                    $("#elementos_form_tipoelemento").chosen().change();
                    document.getElementById("elementos_form_cantidad").value = data.datos.cantidad;
                    document.getElementById("elementos_form_modelo").value = data.datos.modelo;
                    document.getElementById("elementos_form_dominioserie").value = data.datos.dominioserie;
                    document.getElementById("elementos_form_color").value = data.datos.color;
                    document.getElementById("elementos_form_propietariov").value = data.datos.propietariov;
                    document.getElementById("elementos_form_descripcion").value = data.datos.descripcion;
                    document.getElementById("elementos_form_propietario").value = data.datos.propietario;
                    document.getElementById("elementos_form_dinerocantidad").value = data.datos.dinerocantidad;
                    document.getElementById("elementos_form_celularmarca").value = data.datos.celularmarca;
                    document.getElementById("elementos_form_celularmodelo").value = data.datos.celularmodelo;
                    document.getElementById("elementos_form_celulartitular").value = data.datos.celulartitular;
                    document.getElementById("elementos_form_celularnro").value = data.datos.celularnro;
                    document.getElementById("elementos_form_celularimei").value = data.datos.celularimei;
                    document.getElementById("elementos_form_celularsim").value = data.datos.celularsim;
                    document.getElementById("elementos_form_armacalibre").value = data.datos.armacalibre;
                    document.getElementById("elementos_form_armamarca").value = data.datos.armamarca;
                    document.getElementById("elementos_form_armamodelo").value = data.datos.armamodelo;
                    document.getElementById("elementos_form_armaanmac").value = data.datos.armaanmac;
                    document.getElementById("elementos_form_armaserie").value = data.datos.armaserie;
                    document.getElementById("elementos_form_direccion").value = data.datos.direccion;
                    document.getElementById("elementos_form_latitud").value = data.datos.latitud;
                    document.getElementById("elementos_form_longitud").value = data.datos.longitud;
                    document.getElementById("elementos_form_manzana").value = data.datos.manzana;
                    document.getElementById("elementos_form_torre").value = data.datos.torre;
                    document.getElementById("elementos_form_piso").value = data.datos.piso;
                    document.getElementById("elementos_form_depto").value = data.datos.depto;
                    document.getElementById("elementos_form_casa").value = data.datos.casa;
                    document.getElementById("elementos_form_referencia").value = data.datos.referencia;
                    document.getElementById("elementos_form_descripcionmaterial").value = data.datos.descripcionmaterial;
                    document.getElementById("elementos_form_fojamaterial").value = data.datos.fojamaterial;
                    document.getElementById("save_elemento").style.display = "none";
                    $('#elementosLugar').empty();
                    document.elementos_form.action = Routing.generate('editElemento', {id: [row.id]});
                    deshabilitarBotonesForm('new_elemento', true);
                })
        $('#new_elemento').modal('show');
    },
    'click .removeIntermedia': function (e, value, row, index) {
        $('#intermediasTable').bootstrapTable('remove', {
            field: 'id',
            values: [row.id]
        });
    },
    'click .editIntermedia': function (e, value, row, index) {
        $.getJSON(Routing.generate('editIntermedia', {id: [row.id]}))
                .done(function (data) {
                    $("select[id=intermedias_form_origenpais]").val(data.datos.origenpais);
                    $("select[id=intermedias_form_destinopais]").val(data.datos.destinopais);
                    $('.chosen-select').trigger('chosen:updated');
                    document.getElementById("intermedias_form_origenprovincia").value = data.datos.origenprovincia;
                    document.getElementById("intermedias_form_origendepartamento").value = data.datos.origendepartamento;
                    document.getElementById("intermedias_form_origenlocalidad").value = data.datos.origenlocalidad;
                    document.getElementById("intermedias_form_origendireccion").value = data.datos.origendireccion;
                    document.getElementById("intermedias_form_destinoprovincia").value = data.datos.destinoprovincia;
                    document.getElementById("intermedias_form_destinodepartamento").value = data.datos.destinodepartamento;
                    document.getElementById("intermedias_form_destinolocalidad").value = data.datos.destinolocalidad;
                    document.getElementById("intermedias_form_destinodireccion").value = data.datos.destinodireccion;
                    document.getElementById("intermedias_form_origenMerc").value = data.datos.origenMerc;
                    document.getElementById("intermedias_form_paradasInter").value = data.datos.paradasInter;
                    document.getElementById("intermedias_form_destinoMerc").value = data.datos.destinoMerc;
                    document.intermedias_form.action = Routing.generate('editIntermedia', {id: [row.id]});
                })
        $('#new_intermedia').modal('show');
    },
    'click .viewIntermedia': function (e, value, row, index) {
        $.getJSON(Routing.generate('editIntermedia', {id: [row.id]}))
                .done(function (data) {
                    $("select[id=intermedias_form_origenpais]").val(data.datos.origenpais);
                    $("select[id=intermedias_form_destinopais]").val(data.datos.destinopais);
                    $('.chosen-select').trigger('chosen:updated');
                    document.getElementById("intermedias_form_origenprovincia").value = data.datos.origenprovincia;
                    document.getElementById("intermedias_form_origendepartamento").value = data.datos.origendepartamento;
                    document.getElementById("intermedias_form_origenlocalidad").value = data.datos.origenlocalidad;
                    document.getElementById("intermedias_form_origendireccion").value = data.datos.origendireccion;
                    document.getElementById("intermedias_form_destinoprovincia").value = data.datos.destinoprovincia;
                    document.getElementById("intermedias_form_destinodepartamento").value = data.datos.destinodepartamento;
                    document.getElementById("intermedias_form_destinolocalidad").value = data.datos.destinolocalidad;
                    document.getElementById("intermedias_form_destinodireccion").value = data.datos.destinodireccion;
                    document.getElementById("intermedias_form_origenMerc").value = data.datos.origenMerc;
                    document.getElementById("intermedias_form_paradasInter").value = data.datos.paradasInter;
                    document.getElementById("intermedias_form_destinoMerc").value = data.datos.destinoMerc;
                    document.getElementById("save_intermedia").style.display = "none";
                    document.intermedias_form.action = Routing.generate('editIntermedia', {id: [row.id]});
                    deshabilitarBotonesForm('new_intermedia', true);
                })
        $('#new_intermedia').modal('show');
    },
};
function operateFormatterLugar(value, row, index) {
    return [
        '<a class="editLugar" href="javascript:void(0)" title="Editar">',
        '<i class="glyphicon glyphicon-edit"></i>',
        '</a>',
        '<a class="removeLugar" href="javascript:void(0)" title="Eliminar">',
        '<i class="glyphicon glyphicon-remove"></i>',
        '</a>',
        '<a class="viewLugar" href="javascript:void(0)" title="Ver">',
        '<i class="glyphicon glyphicon-eye-open"></i>',
        '</a>'
    ].join('');
}
function operateFormatterPersona(value, row, index) {
    return [
        '<a class="editPersona" href="javascript:void(0)" title="Editar">',
        '<i class="glyphicon glyphicon-edit"></i>',
        '</a>',
        '<a class="removePersona" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-remove"></i>',
        '</a>',
        '<a class="viewPersona" href="javascript:void(0)" title="Ver">',
        '<i class="glyphicon glyphicon-eye-open"></i>',
        '</a>'
    ].join('');
}
function operateFormatterDroga(value, row, index) {
    return [
        '<a class="editDroga" href="javascript:void(0)" title="Editar">',
        '<i class="glyphicon glyphicon-edit"></i>',
        '</a>',
        '<a class="removeDroga" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-remove"></i>',
        '</a>',
        '<a class="viewDroga" href="javascript:void(0)" title="Ver">',
        '<i class="glyphicon glyphicon-eye-open"></i>',
        '</a>'
    ].join('');
}
function operateFormatterElemento(value, row, index) {
    return [
        '<a class="editElemento" href="javascript:void(0)" title="Editar">',
        '<i class="glyphicon glyphicon-edit"></i>',
        '</a>',
        '<a class="removeElemento" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-remove"></i>',
        '</a>',
        '<a class="viewElemento" href="javascript:void(0)" title="Ver">',
        '<i class="glyphicon glyphicon-eye-open"></i>',
        '</a>'
    ].join('');
}

function operateFormatterIntermedia(value, row, index) {
    return [
        '<a class="editIntermedia" href="javascript:void(0)" title="Editar">',
        '<i class="glyphicon glyphicon-edit"></i>',
        '</a>',
        '<a class="removeIntermedia" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-remove"></i>',
        '</a>',
        '<a class="viewIntermedia" href="javascript:void(0)" title="Ver">',
        '<i class="glyphicon glyphicon-eye-open"></i>',
        '</a>'
    ].join('');
}



$(function () {
    $("input:radio[name*='acumulada']").change(function () {
        document.getElementById("acumulada").style.display = 'none';
        if ((this.checked && this.value == '1') || (this.checked == false && this.value == '0') || (this.checked == false && this.value == '')){
            document.getElementById("acumulada").style.display = 'block';
        }
    });
    function removeItemFromArr(arr, item) {
        var i = arr.indexOf(item);
        arr.splice(i, 1);
    }
    $('select[id$=_causasacumulada]')
            .append($('<option>', {value: 'new', text: 'Agregar Otro'}))
            .on('change', function () {
                var id = $("select[id$=causa_causasacumulada]").val();
                if (jQuery.inArray("new", id) >= 0) {
                    $('#new_causaacumulada').modal('show');
                }
            });
    $('#save_causaacumulada').on('click', function (e) {
        e.preventDefault();
        sendForm($('#new_causaacumulada').find('form'), function (response) {
            if (typeof response === "object") {
                var valores = $("select[id$=_causasacumulada]").val();
                valores.push(response.id);
                removeItemFromArr(valores, "new");
                $('select[id$=_causasacumulada]')
                        .prepend($('<option>', {value: response.id, text: response.name}))
                        .val(valores);
                $('.chosen-select').trigger('chosen:updated');
                $('#new_causaacumulada').modal('hide');
            } else {
                $('#new_causaacumulada').find('.modal-body').html(response);
            }
        });
    });
    $('select[id$=_ModalidadVenta]')
            .append($('<option>', {value: 'new', text: 'Agregar Otro'}))
            .on('change', function () {
                var id = $("select[id$=_ModalidadVenta]").val();
                if (jQuery.inArray("new", id) >= 0) {
                    $('#new_modalidadventa').modal('show');
                }
            });
    $('#save_modalidadventa').on('click', function (e) {
        e.preventDefault();
        sendForm($('#new_modalidadventa').find('form'), function (response) {
            if (typeof response === "object") {
                var valores = $("select[id$=_ModalidadVenta]").val();
                valores.push(response.id);
                removeItemFromArr(valores, "new");
                $('select[id$=_ModalidadVenta]')
                        .prepend($('<option>', {value: response.id, text: response.name}))
                        .val(valores);
                $('.chosen-select').trigger('chosen:updated');
                $('#new_modalidadventa').modal('hide');
            } else {
                $('#new_modalidadventa').find('.modal-body').html(response);
            }
        });
    });
    $('select[id$=_EstupefacienteEncuentra]')
            .append($('<option>', {value: 'new', text: 'Agregar Otro'}))
            .on('change', function () {
                var id = $("select[id$=_EstupefacienteEncuentra]").val();
                if (jQuery.inArray("new", id) >= 0) {
                    $('#new_estupefacienteencuentra').modal('show');
                }
            });
    $('#save_estupefacienteencuentra').on('click', function (e) {
        e.preventDefault();
        sendForm($('#new_estupefacienteencuentra').find('form'), function (response) {
            if (typeof response === "object") {
                var valores = $("select[id$=_EstupefacienteEncuentra]").val();
                valores.push(response.id);
                removeItemFromArr(valores, "new");
                $('select[id$=_EstupefacienteEncuentra]')
                        .prepend($('<option>', {value: response.id, text: response.name}))
                        .val(valores);
                $('.chosen-select').trigger('chosen:updated');
                $('#new_estupefacienteencuentra').modal('hide');
            } else {
                $('#new_estupefacienteencuentra').find('.modal-body').html(response);
            }
        });
    });
    $('select[id$=_MedioConcretaOperacion]')
            .append($('<option>', {value: 'new', text: 'Agregar Otro'}))
            .on('change', function () {
                var id = $("select[id$=_MedioConcretaOperacion]").val();
                if (jQuery.inArray("new", id) >= 0) {
                    $('#new_medioconcretaoperacion').modal('show');
                }
            });
    $('#save_medioconcretaoperacion').on('click', function (e) {
        e.preventDefault();
        sendForm($('#new_medioconcretaoperacion').find('form'), function (response) {
            if (typeof response === "object") {
                var valores = $("select[id$=_MedioConcretaOperacion]").val();
                valores.push(response.id);
                removeItemFromArr(valores, "new");
                $('select[id$=_MedioConcretaOperacion]')
                        .prepend($('<option>', {value: response.id, text: response.name}))
                        .val(valores);
                $('.chosen-select').trigger('chosen:updated');
                $('#new_medioconcretaoperacion').modal('hide');
            } else {
                $('#new_medioconcretaoperacion').find('.modal-body').html(response);
            }
        });
    });
    $('select[id$=_MedidaSeguridad]')
            .append($('<option>', {value: 'new', text: 'Agregar Otro'}))
            .on('change', function () {
                var id = $("select[id$=_MedidaSeguridad]").val();
                if (jQuery.inArray("new", id) >= 0) {
                    $('#new_medidaseguridad').modal('show');
                }
            });
    $('#save_medidaseguridad').on('click', function (e) {
        e.preventDefault();
        sendForm($('#new_medidaseguridad').find('form'), function (response) {
            if (typeof response === "object") {
                var valores = $("select[id$=_MedidaSeguridad]").val();
                valores.push(response.id);
                removeItemFromArr(valores, "new");
                $('select[id$=_MedidaSeguridad]')
                        .prepend($('<option>', {value: response.id, text: response.name}))
                        .val(valores);
                $('.chosen-select').trigger('chosen:updated');
                $('#new_medidaseguridad').modal('hide');
            } else {
                $('#new_medidaseguridad').find('.modal-body').html(response);
            }
        });
    });
    $('select[id$=_TipoHechoViolencia]')
            .append($('<option>', {value: 'new', text: 'Agregar Otro'}))
            .on('change', function () {
                var id = $("select[id$=_TipoHechoViolencia]").val();
                if (jQuery.inArray("new", id) >= 0) {
                    $('#new_tipohechoviolencia').modal('show');
                }
            });
    $('#save_tipohechoviolencia').on('click', function (e) {
        e.preventDefault();
        sendForm($('#new_tipohechoviolencia').find('form'), function (response) {
            if (typeof response === "object") {
                var valores = $("select[id$=_TipoHechoViolencia]").val();
                valores.push(response.id);
                removeItemFromArr(valores, "new");
                $('select[id$=_TipoHechoViolencia]')
                        .prepend($('<option>', {value: response.id, text: response.name}))
                        .val(valores);
                $('.chosen-select').trigger('chosen:updated');
                $('#new_tipohechoviolencia').modal('hide');
            } else {
                $('#new_tipohechoviolencia').find('.modal-body').html(response);
            }
        });
    });
    $('select[id$=_elementoId]')
            .append($('<option>', {value: 'new', text: 'Agregar Elemento'}))
            .on('change', function () {
                if ($("select[id$=_elementoId] option:selected").val() === 'new') {
                    $('#new_elementoId').modal('show');
                }
            });
    $('#save_elementoId').on('click', function (e) {
        e.preventDefault();
        sendForm($('#new_elementoId').find('form'), function (response) {
            if (typeof response === "object") {
                $('select[id$=_elementoId]')
                        .prepend($('<option>', {value: response.id, text: response.name}))
                        .val(response.id);
                $('#new_elementoId').modal('hide');
                $('.chosen-select').trigger('chosen:updated');
            } else {
                $('#new_elementoId').find('.modal-body').html(response);
            }
        });
    });
//    $('select[id$=droga_form_estado]')
//            .append($('<option>', {value: 'new', text: 'Agregar Estado'}))
//            .on('change', function () {
//                if ($("select[id$=droga_form_estado] option:selected").val() === 'new') {
//                    $('#new_estado_droga').modal('show');
//                }
//            });
//    $('#save_estado_droga').on('click', function (e) {
//        e.preventDefault();
//        sendForm($('#new_estado_droga').find('form'), function (response) {
//            if (typeof response === "object") {
//                $('select[id$=droga_form_estado]')
//                        .prepend($('<option>', {value: response.id, text: response.name}))
//                        .val(response.id);
//                $('#new_estado_droga').modal('hide');
//                $('.chosen-select').trigger('chosen:updated');
//            } else {
//                $('#new_estado_droga').find('.modal-body').html(response);
//            }
//        });
//    });
    $('select[id$=causa_unidad]')
            .append($('<option>', {value: 'new', text: 'Agregar Dependencia/Delegación'}))
            .on('change', function () {
                if ($("select[id$=causa_unidad] option:selected").val() === 'new') {
                    $('#new_unidad').modal('show');
                }
            });
    $('#save_unidad').on('click', function (e) {
        e.preventDefault();
        sendForm($('#new_unidad').find('form'), function (response) {
            if (typeof response === "object") {
                $('select[id$=causa_unidad]')
                        .prepend($('<option>', {value: response.id, text: response.name}))
                        .val(response.id);
                $('#new_unidad').modal('hide');
                $('.chosen-select').trigger('chosen:updated');
            } else {
                $('#new_unidad').find('.modal-body').html(response);
            }
        });
    });
    $('select[id$=causa_fuerzaSeguridad]')
            .append($('<option>', {value: 'new', text: 'Agregar Fuerza'}))
            .on('change', function () {
                var id = $("select[id$=causa_fuerzaSeguridad]").val();
                if (jQuery.inArray("new", id) >= 0) {
                    $('#new_ffss').modal('show');
                }
            });
    $('#save_ffss').on('click', function (e) {
        e.preventDefault();
        sendForm($('#new_ffss').find('form'), function (response) {
            if (typeof response === "object") {
                var valores = $("select[id$=causa_fuerzaSeguridad]").val();
                valores.push(response.id);
                removeItemFromArr(valores, "new");
                $('select[id$=causa_fuerzaSeguridad]')
                        .prepend($('<option>', {value: response.id, text: response.name}))
                        .val(valores);
                $('#new_ffss').modal('hide');
                $('.chosen-select').trigger('chosen:updated');
            } else {
                $('#new_ffss').find('.modal-body').html(response);
            }
        });
    });
    $('select[id$=hecho_fuerzaSeguridad]')
            .append($('<option>', {value: 'new', text: 'Agregar Fuerza'}))
            .on('change', function () {
                var id = $("select[id$=hecho_fuerzaSeguridad]").val();
                if (jQuery.inArray("new", id) >= 0) {
                    $('#new_ffss').modal('show');
                }
            });
    $('#save_ffsshecho').on('click', function (e) {
        e.preventDefault();
        sendForm($('#new_ffss').find('form'), function (response) {
            if (typeof response === "object") {
                var valores = $("select[id$=hecho_fuerzaSeguridad]").val();
                valores.push(response.id);
                removeItemFromArr(valores, "new");
                $('select[id$=hecho_fuerzaSeguridad]')
                        .prepend($('<option>', {value: response.id, text: response.name}))
                        .val(valores);
                $('#new_ffss').modal('hide');
                $('.chosen-select').trigger('chosen:updated');
            } else {
                $('#new_ffss').find('.modal-body').html(response);
            }
        });
    });
    $('#save_lugar').click(function () {
        var direccion = document.getElementById("lugar_form_direccion").value;
        sendForm($('#new_lugar').find('form'), function (response) {
            if (typeof response === "object") {
                var index = response.id;
                if ($("select[id$=_lugar] option[value='" + index + "']").length > 0) {
                    $("select[id$=_lugar] option[value='" + index + "']").prop("selected", true)
                } else {
                    $('#'.concat(origen).concat('_lugar')).append('<option value="'.concat(index).concat('" selected ></option>'));
                }
                addLugarForm(direccion, index);
                $('#new_lugar').modal('hide');
            } else {
                $('#new_lugar').find('.modal-body').html(response);
            }
        });
    });
    $('#save_persona').click(function () {
        var personafisica = document.getElementById("persona_form_personafisica").value;
        var razonsocial = document.getElementById("persona_form_razonsocial").value;
        var nombre = document.getElementById("persona_form_nombre").value;
        var apellido = document.getElementById("persona_form_apellido").value;
        sendForm($('#new_persona').find('form'), function (response) {
            if (typeof response === "object") {
                var index = response.id;
                if ($("select[id$=_personas] option[value='" + index + "']").length > 0) {
                    $("select[id$=_personas] option[value='" + index + "']").prop("selected", true)
                } else {
                    $('#'.concat(origen).concat('_personas')).append('<option value="'.concat(index).concat('" selected ></option>'));
                }
                var etiqueta;
                if (personafisica == 2) {
                    etiqueta = razonsocial;
                } else {
                    etiqueta = apellido + ', ' + nombre;
                }
                addPersonaForm(etiqueta, index);
                $('#new_persona').modal('hide');
            } else {
                $('#new_persona').find('.modal-body').html(response);
            }
        });
    });
    $('#save_droga').click(function () {
        var tipo = $('select[id$=droga_form_tipo] option:selected')[0].label;
        var cantidad = document.getElementById("droga_form_cantidad").value;
        var unidad = $('select[id$=droga_form_unidadestupefaciente] option:selected')[0].label;
        var fraccionada = document.getElementById("droga_form_fraccionadaparaconsumo").value;
        sendForm($('#new_droga').find('form'), function (response) {
            if (typeof response === "object") {
                var index = response.id;
                if ($("select[id$=_droga] option[value='" + index + "']").length > 0) {
                    $("select[id$=_droga] option[value='" + index + "']").prop("selected", true)
                } else {
                    $('#'.concat(origen).concat('_droga')).append('<option value="'.concat(index).concat('" selected ></option>'));
                }
                var etiqueta;
                if (fraccionada == 0) {
                    etiqueta = 'No';
                } else {
                    etiqueta = 'Sí';
                }
                addDrogaForm(tipo, cantidad, unidad, etiqueta, index);
                $('#new_droga').modal('hide');
            } else {
                $('#new_droga').find('.modal-body').html(response);
            }

        });
    });
    $('#save_elemento').click(function () {
        var elemento = $("select[id=elementos_form_tipoelemento]").val();
        var elementoetiqueta = $('select[id$=elementos_form_tipoelemento] option:selected')[0].label;
        var dinerounidad = $('select[id$=elementos_form_dinerounidad] option:selected')[0].label;
        var elementoid = $('select[id$=elementos_form_elementoId] option:selected')[0].label;
        var tipovehiculo = $('select[id$=elementos_form_tipovehiculo] option:selected')[0].label;
        var tipobien = $('select[id$=elementos_form_tipobien] option:selected')[0].label;
        var fojamaterial = $("select[id=elementos_form_fojamaterial]").val();
        sendForm($('#new_elemento').find('form'), function (response) {
            if (typeof response === "object") {
                var index = response.id;
                if ($("select[id$=_elementos] option[value='" + index + "']").length > 0) {
                    $("select[id$=_elementos] option[value='" + index + "']").prop("selected", true)
                } else {
                    $('#'.concat(origen).concat('_elementos')).append('<option value="'.concat(index).concat('" selected ></option>'));
                }
                var etiqueta = "";
                switch (elemento) {
                    case "1":
                        etiqueta = elementoetiqueta + " -> " + elementoid;
                        break;
                    case "2":
                        etiqueta = elementoetiqueta + " -> " + tipovehiculo;
                        break;
                    case "4":
                        etiqueta = elementoetiqueta + " -> " + tipobien;
                        break;
                    case "6":
                        etiqueta = elementoetiqueta + " -> " + dinerounidad;
                        break;
                    case "7":
                        etiqueta = elementoetiqueta + " -> " + "Celular";
                        break;
                    case "8":
                        etiqueta = elementoetiqueta + " -> " + "Arma";
                        break;
                    case "8":
                        etiqueta = elementoetiqueta + " -> " + fojamaterial;
                        break;
                }
                addElementoForm(etiqueta, index);
                $("select[id=elementos_form_tipoelemento]").val(null);
                $("select[id=elementos_form_elementoId]").val(null);
                $("select[id=elementos_form_tipovehiculo]").val(null);
                $("select[id=elementos_form_nacionalidad]").val(null);
                $("select[id=elementos_form_tipobien]").val(null);
                $("select[id=elementos_form_dinerounidad]").val(null);
                $("select[id=elementos_form_celularcompania]").val(null);
                $("select[id=elementos_form_celularmodocontratacion]").val(null);
                $('.chosen-select').trigger('chosen:updated');
                $("#elementos_form_tipoelemento").chosen().change();
                document.getElementById("elementos_form_cantidad").value = null;
                document.getElementById("elementos_form_modelo").value = null;
                document.getElementById("elementos_form_dominioserie").value = null;
                document.getElementById("elementos_form_color").value = null;
                document.getElementById("elementos_form_propietariov").value = null;
                document.getElementById("elementos_form_descripcion").value = null;
                document.getElementById("elementos_form_propietario").value = null;
                document.getElementById("elementos_form_dinerocantidad").value = null;
                document.getElementById("elementos_form_celularmarca").value = null;
                document.getElementById("elementos_form_celularmodelo").value = null;
                document.getElementById("elementos_form_celulartitular").value = null;
                document.getElementById("elementos_form_celularnro").value = null;
                document.getElementById("elementos_form_celularimei").value = null;
                document.getElementById("elementos_form_celularsim").value = null;
                document.getElementById("elementos_form_armacalibre").value = null;
                document.getElementById("elementos_form_armamarca").value = null;
                document.getElementById("elementos_form_armamodelo").value = null;
                document.getElementById("elementos_form_armaanmac").value = null;
                document.getElementById("elementos_form_armaserie").value = null;
                document.getElementById("elementos_form_direccion").value = null;
                document.getElementById("elementos_form_latitud").value = null;
                document.getElementById("elementos_form_longitud").value = null;
                document.getElementById("elementos_form_manzana").value = null;
                document.getElementById("elementos_form_torre").value = null;
                document.getElementById("elementos_form_piso").value = null;
                document.getElementById("elementos_form_depto").value = null;
                document.getElementById("elementos_form_casa").value = null;
                document.getElementById("elementos_form_referencia").value = null;
                document.getElementById("elementos_form_descripcionmaterial").value = null;
                document.getElementById("elementos_form_fojamaterial").value = null;
                $('#elementosLugar').empty();
                document.getElementById("save_elemento").style.display = "block";
                document.elementos_form.action = Routing.generate('newElementos');
            } else {
                $('#new_elemento').find('.modal-body').html(response);
            }
        });
    });
    $('#save_intermedia').click(function () {
        var origenpais = $('select[id$=intermedias_form_origenpais] option:selected')[0].label;
        var origenprovincia = document.getElementById("intermedias_form_origenprovincia").value;
        var origendepartamento = document.getElementById("intermedias_form_origendepartamento").value;
        var origenlocalidad = document.getElementById("intermedias_form_origenlocalidad").value;
        var origendireccion = document.getElementById("intermedias_form_origendireccion").value;
        var destinopais = $('select[id$=intermedias_form_destinopais] option:selected')[0].label;
        var destinoprovincia = document.getElementById("intermedias_form_destinoprovincia").value;
        var destinodepartamento = document.getElementById("intermedias_form_destinodepartamento").value;
        var destinolocalidad = document.getElementById("intermedias_form_destinolocalidad").value;
        var destinodireccion = document.getElementById("intermedias_form_destinodireccion").value;
        var origenMerc = document.getElementById("intermedias_form_origenMerc").value;
        var paradasInter = document.getElementById("intermedias_form_paradasInter").value;
        var destinoMerc = document.getElementById("intermedias_form_destinoMerc").value;
        var etiquetaorigen = "";
        if (origenpais.length > 0) {
            etiquetaorigen = etiquetaorigen + origenpais;
        }
        if (origenprovincia.length > 0) {
            etiquetaorigen = etiquetaorigen + ', ' + origenprovincia;
        }
        if (origendepartamento.length > 0) {
            etiquetaorigen = etiquetaorigen + ', ' + origendepartamento;
        }
        if (origenlocalidad.length > 0) {
            etiquetaorigen = etiquetaorigen + ', ' + origenlocalidad;
        }
        if (origendireccion.length > 0) {
            etiquetaorigen = etiquetaorigen + ', ' + origendireccion;
        }
        var etiquetadestino = "";
        if (destinopais.length > 0) {
            etiquetadestino = etiquetadestino + destinopais;
        }
        if (destinoprovincia.length > 0) {
            etiquetadestino = etiquetadestino + ', ' + destinoprovincia;
        }
        if (destinodepartamento.length > 0) {
            etiquetadestino = etiquetadestino + ', ' + destinodepartamento;
        }
        if (destinolocalidad.length > 0) {
            etiquetadestino = etiquetadestino + ', ' + destinolocalidad;
        }
        if (destinodireccion.length > 0) {
            etiquetadestino = etiquetadestino + ', ' + destinodireccion;
        }
        sendForm($('#new_intermedia').find('form'), function (response) {
            if (typeof response === "object") {
                var index = response.id;
                if ($("select[id$=_intermedia] option[value='" + index + "']").length > 0) {
                    $("select[id$=_intermedia] option[value='" + index + "']").prop("selected", true)
                } else {
                    $('#'.concat(origen).concat('_intermedia')).append('<option value="'.concat(index).concat('" selected ></option>'));
                }
                addIntermediaForm(etiquetaorigen, etiquetadestino, index);
                $('#new_intermedia').modal('hide');
            } else {
                $('#new_intermedia').find('.modal-body').html(response);
            }

        });
    });
});
function addLugarForm(direccion, index) {
    if (($('#lugarTable').bootstrapTable('getRowByUniqueId', index)) == null) {
        $('#lugarTable').bootstrapTable('insertRow', {
            index: index,
            row: {
                id: index,
                direccion: direccion
            }
        });
    } else {
        $('#lugarTable').bootstrapTable('updateByUniqueId', {
            id: index,
            row: {
                id: index,
                direccion: direccion
            }
        });
    }
}
;
function addPersonaForm(etiqueta, index) {
    if (($('#personaTable').bootstrapTable('getRowByUniqueId', index)) == null) {
        $('#personaTable').bootstrapTable('insertRow', {
            index: index,
            row: {
                id: index,
                nombre: etiqueta
            }
        });
    } else {
        $('#personaTable').bootstrapTable('updateByUniqueId', {
            id: index,
            row: {
                id: index,
                nombre: etiqueta
            }
        });
    }
}
;
function addDrogaForm(tipo, cantidad, unidad, fraccionada, index) {
    if (($('#drogasTable').bootstrapTable('getRowByUniqueId', index)) == null) {
        $('#drogasTable').bootstrapTable('insertRow', {
            index: index,
            row: {
                id: index,
                tipo: tipo,
                cantidad: cantidad,
                unidad: unidad,
                fraccionada: fraccionada,
            }
        });
    } else {
        $('#drogasTable').bootstrapTable('updateByUniqueId', {
            id: index,
            row: {
                id: index,
                tipo: tipo,
                cantidad: cantidad,
                unidad: unidad,
                fraccionada: fraccionada,
            }
        });
    }
}
;
function addElementoForm(elemento, index) {
    if (($('#elementosTable').bootstrapTable('getRowByUniqueId', index)) == null) {
        $('#elementosTable').bootstrapTable('insertRow', {
            index: index,
            row: {
                id: index,
                elemento: elemento,
            }
        });
    } else {
        $('#elementosTable').bootstrapTable('updateByUniqueId', {
            id: index,
            row: {
                id: index,
                elemento: elemento,
            }
        });
    }
}
;
function addIntermediaForm(origen, destino, index) {
    if (($('#intermediasTable').bootstrapTable('getRowByUniqueId', index)) == null) {
        $('#intermediasTable').bootstrapTable('insertRow', {
            index: index,
            row: {
                id: index,
                origen: origen,
                destino: destino,
            }
        });
    } else {
        $('#intermediasTable').bootstrapTable('updateByUniqueId', {
            id: index,
            row: {
                id: index,
                origen: origen,
                destino: destino,
            }
        });
    }
}
;
$('#new_lugar').on('hidden.bs.modal', function (e) {
    $("select[id=lugar_form_tipolugar]").val(null);
    $('.chosen-select').trigger('chosen:updated');
    document.getElementById("lugar_form_tipolugar").value = null;
    document.getElementById("lugar_form_direccion").value = null;
    document.getElementById("lugar_form_latitud").value = null;
    document.getElementById("lugar_form_longitud").value = null;
    document.getElementById("lugar_form_manzana").value = null;
    document.getElementById("lugar_form_torre").value = null;
    document.getElementById("lugar_form_piso").value = null;
    document.getElementById("lugar_form_depto").value = null;
    document.getElementById("lugar_form_casa").value = null;
    document.getElementById("lugar_form_referencia").value = null;
    document.getElementById("save_lugar").style.display = "block";
    $('#lugar').empty();
    document.lugar_form.action = Routing.generate('newLugar');
    deshabilitarBotonesForm('new_lugar', false);
});
$('#new_persona').on('hidden.bs.modal', function (e) {
    $("select[id=persona_form_nacionalidad]").val(null);
    $("select[id=persona_form_tipodocumento]").val(null);
    $("select[id=persona_form_genero]").val(null);
    $("select[id=persona_form_tiporazonsocial]").val(null);
    $("select[id=persona_form_personafisica]").val(null);
    $("select[id=persona_form_esfuncionario]").val(null);
    $('.chosen-select').trigger('chosen:updated');
    $("#persona_form_personafisica").change();
    $("#persona_form_esfuncionario").change();
    document.getElementById("fisica").style.display = 'none';
    document.getElementById("juridica").style.display = 'none';
    document.getElementById("datopersona").style.display = 'none';
    document.getElementById("funcionario").style.display = 'none';
    document.getElementById("persona_form_razonsocial").value = null;
    document.getElementById("persona_form_nombre").value = null;
    document.getElementById("persona_form_apellido").value = null;
    document.getElementById("persona_form_apodo").value = null;
    document.getElementById("persona_form_nrodocumento").value = null;
    document.getElementById("persona_form_fechanacimiento").value = null;
    document.getElementById("persona_form_edad").value = null;
    document.getElementById("persona_form_telefono").value = null;
    document.getElementById("persona_form_email").value = null;
    document.getElementById("persona_form_redessociales").value = null;
    document.getElementById("persona_form_direccion").value = null;
    document.getElementById("persona_form_latitud").value = null;
    document.getElementById("persona_form_longitud").value = null;
    document.getElementById("persona_form_manzana").value = null;
    document.getElementById("persona_form_torre").value = null;
    document.getElementById("persona_form_piso").value = null;
    document.getElementById("persona_form_depto").value = null;
    document.getElementById("persona_form_casa").value = null;
    document.getElementById("persona_form_referencia").value = null;
    document.getElementById("persona_form_funcion").value = null;
    document.getElementById("persona_form_nacionalidad").value = null;
    document.getElementById("persona_form_esfuncionario").checked = null;
    document.getElementById("persona_form_esfuncionariodescripcion").value = null;
//    document.getElementById("persona_form_observaciones").value = null;
    document.getElementById("save_persona").style.display = "block";
    $('#lugarPersona').empty();
    document.persona_form.action = Routing.generate('newPersona');
    deshabilitarBotonesForm('new_persona', false);
});
$('#new_droga').on('hidden.bs.modal', function (e) {
    $("select[id=droga_form_tipo]").val(null);
//    $("select[id=droga_form_estado]").val(null);
    $("select[id=droga_form_unidadestupefaciente]").val(null);
    $("select[id=droga_form_fraccionadaparaconsumo]").val(null);
    $("select[id=droga_form_EstupefacienteEncuentra]").val(null);
    $("select[id=droga_form_EstupefacienteEncuentraCamuflada]").val(null);
    $('.chosen-select').trigger('chosen:updated');
    document.getElementById("droga_form_cantidad").value = null;
//    document.getElementById("droga_form_precio").value = null;
    document.getElementById("droga_form_nivelPureza").value = null;
    document.getElementById("droga_form_colorenvoltorio").value = null;
    document.getElementById("droga_form_simboloenvoltorio").value = null;
    document.getElementById("droga_form_formapresentacion").value = null;
    document.getElementById("droga_form_formapresentacioncantidad").value = null;
//    document.getElementById("droga_form_observaciones").value = null;
    document.getElementById("save_droga").style.display = "block";
    document.droga_form.action = Routing.generate('newDroga');
    deshabilitarBotonesForm('new_droga', false);
});
$('#new_elemento').on('hidden.bs.modal', function (e) {
    $("select[id=elementos_form_tipoelemento]").val(null);
    $("select[id=elementos_form_elementoId]").val(null);
    $("select[id=elementos_form_tipovehiculo]").val(null);
    $("select[id=elementos_form_nacionalidad]").val(null);
    $("select[id=elementos_form_tipobien]").val(null);
    $("select[id=elementos_form_dinerounidad]").val(null);
    $("select[id=elementos_form_celularcompania]").val(null);
    $("select[id=elementos_form_celularmodocontratacion]").val(null);
    $('.chosen-select').trigger('chosen:updated');
    $("#elementos_form_tipoelemento").chosen().change();
    document.getElementById("elementos_form_cantidad").value = null;
    document.getElementById("elementos_form_modelo").value = null;
    document.getElementById("elementos_form_dominioserie").value = null;
    document.getElementById("elementos_form_color").value = null;
    document.getElementById("elementos_form_propietariov").value = null;
    document.getElementById("elementos_form_descripcion").value = null;
    document.getElementById("elementos_form_propietario").value = null;
    document.getElementById("elementos_form_dinerocantidad").value = null;
    document.getElementById("elementos_form_celularmarca").value = null;
    document.getElementById("elementos_form_celularmodelo").value = null;
    document.getElementById("elementos_form_celulartitular").value = null;
    document.getElementById("elementos_form_celularnro").value = null;
    document.getElementById("elementos_form_celularimei").value = null;
    document.getElementById("elementos_form_celularsim").value = null;
    document.getElementById("elementos_form_armacalibre").value = null;
    document.getElementById("elementos_form_armamarca").value = null;
    document.getElementById("elementos_form_armamodelo").value = null;
    document.getElementById("elementos_form_armaanmac").value = null;
    document.getElementById("elementos_form_armaserie").value = null;
    document.getElementById("elementos_form_direccion").value = null;
    document.getElementById("elementos_form_latitud").value = null;
    document.getElementById("elementos_form_longitud").value = null;
    document.getElementById("elementos_form_manzana").value = null;
    document.getElementById("elementos_form_torre").value = null;
    document.getElementById("elementos_form_piso").value = null;
    document.getElementById("elementos_form_depto").value = null;
    document.getElementById("elementos_form_casa").value = null;
    document.getElementById("elementos_form_referencia").value = null;
    document.getElementById("elementos_form_descripcionmaterial").value = null;
    document.getElementById("elementos_form_fojamaterial").value = null;
    $('#elementosLugar').empty();
    document.getElementById("save_elemento").style.display = "block";
    document.elementos_form.action = Routing.generate('newElementos');
    deshabilitarBotonesForm('new_elemento', false);
});
$('#new_intermedia').on('hidden.bs.modal', function (e) {
    $("select[id=intermedias_form_origenpais]").val(null);
    $("select[id=intermedias_form_destinopais]").val(null);
    $('.chosen-select').trigger('chosen:updated');
    document.getElementById("intermedias_form_origenprovincia").value = null;
    document.getElementById("intermedias_form_origendepartamento").value = null;
    document.getElementById("intermedias_form_origenlocalidad").value = null;
    document.getElementById("intermedias_form_origendireccion").value = null;
    document.getElementById("intermedias_form_destinoprovincia").value = null;
    document.getElementById("intermedias_form_destinodepartamento").value = null;
    document.getElementById("intermedias_form_destinolocalidad").value = null;
    document.getElementById("intermedias_form_destinodireccion").value = null;
    document.getElementById("intermedias_form_origenMerc").value = null;
    document.getElementById("intermedias_form_paradasInter").value = null;
    document.getElementById("intermedias_form_destinoMerc").value = null;
    document.getElementById("save_intermedia").style.display = "block";
    document.intermedias_form.action = Routing.generate('newIntermedia');
    deshabilitarBotonesForm('new_intermedia', false);
});
function deshabilitarBotones()
{
    for (a = 0; a < document.getElementsByTagName('input').length; a++)
    {
        document.getElementsByTagName('input')[a].disabled = true;
    }
    for (a = 0; a < document.getElementsByTagName('textarea').length; a++)
    {
        document.getElementsByTagName('textarea')[a].disabled = true;
    }
    $(".chosen-select").attr('disabled', true).trigger("chosen:updated")

}
function deshabilitarBotonesForm(formulario, valor)
{
    $("#" + formulario).find(':input').each(function () {
        var elemento = this;
        switch (elemento.textContent) {
            case "Cerrar":
            case "×":
                break;
            default:
                elemento.disabled = valor;
                break;
        }
    });
    $("#" + formulario + " .chosen-select").attr('disabled', valor).trigger("chosen:updated")
}