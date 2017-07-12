<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="<?php echo base_url(); ?>lib/css/icon.css" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>lib/css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body class="green accent-1">
        <div class="row">
            <nav class="nav-extended white" >
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo"><img src="<?php echo base_url(); ?>img/largo.png" class="responsive-img" style="height: 2em;"/></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#" class="black-text">Bienvenido Admin </a></li>
                        <li><a href="<?php echo site_url(); ?>/cerrarsesion" class="black-text" ><i class="material-icons">power_settings_new</i></a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#" class="black-text">Bienvenido Admin</a></li>
                        li><a href="<?php echo site_url(); ?>/cerrarsesion" class="black-text" ><i class="material-icons">power_settings_new</i></a></li>
                    </ul>

                    <ul class="tabs tabs-transparent green accent-3">
                        <li class="tab"><a href="#perfil" class="black-text">Perfil</a></li>
                        <li class="tab"><a href="#gestionN" class="black-text">Gestion Niñera</a></li>
                        <li class="tab"><a href="#gestionClientes" class="black-text">Gestion Clientes</a></li>
                        <li class="tab"><a href="#gestionContrato" class="black-text">Gestion Contratos</a></li>
                    </ul>
                </div>
            </nav>

            <!--------------------perfil--------------------------------------->

            <div id="perfil" class="col s12 ">
                <div class="col s3"></div>
                <div class="row">
                    <div class="col s12 m6">
                        <h3>Perfil</h3>
                        <div class="input-field">
                            <label for="fotoA" class="black-text">Foto</label>
                            <input type="text" name="fotoA" id="fotoA" required="true" />
                        </div>
                        <div class="col m6">
                            <div class="input-field">
                                <label for="rutA" class="black-text">Rut</label>
                                <input type="text" name="rutA" id="rutA" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="nombreA" class="black-text">Nombre</label>
                                <input type="text" name="nombreA" id="nombreA" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="apellidoA" class="black-text">Apellido</label>
                                <input type="text" name="apellidoA" id="apellidoA" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="rolA" class="black-text">Rol</label>
                                <input type="text" name="rolA" id="rolA" required="true" />
                            </div>
                        </div>
                        <div class="col m6">
                            <div class="input-field">
                                <label for="direccionA" class="black-text">Direccion</label>
                                <input type="text" name="direccionA" id="direccionA" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="telefonoA" class="black-text">Telefono</label>
                                <input type="text" name="telefonoA" id="telefonoA" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="emailA" class="black-text">Email</label>
                                <input type="text" name="emailA" id="emailA" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="claveA" class="black-text">Clave</label>
                                <input type="text" name="claveA" id="claveA" required="true" />
                            </div>
                        </div>
                        <input type="submit" id="bteditarA" value="Editar" class="btn deep-orange"/>
                    </div>
                </div>
            </div>

            <!--------------------Gestion Niñeras--------------------------------------->


            <div id="gestionN" class="col s12">
                <div class="row">
                    <div class="col s12 m6">
                        <h3>Nuevo/a Niñero/a</h3>
                        <div class="input-field">
                            <label for="fotoN" class="black-text">Foto Perfil</label>
                            <input type="text" name="fotoN" id="fotoN" required="true" />
                        </div>
                        <div class="col m5 ">
                            <div class="input-field">
                                <label for="rutN" class="black-text">Rut</label>
                                <input type="text" name="rutN" id="rutN" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="nombreN" class="black-text">Nombre</label>
                                <input type="text" name="nombreN" id="nombreN" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="apellidoN" class="black-text">Apellido</label>
                                <input type="text" name="apellidoN" id="apellidoN" required="true" />
                            </div>

                            <div class="input-field">
                                <label for="direccionN" class="black-text">Direccion</label>
                                <input type="text" name="direccionN" id="direccionN" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="telefonoN" class="black-text">Telefono</label>
                                <input type="text" name="telefonoN" id="telefonoN" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="emailN" class="black-text">Email</label>
                                <input type="text" name="emailN" id="emailN" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="claveN" class="black-text">Clave</label>
                                <input type="text" name="claveN" id="claveN" required="true" />
                            </div>

                        </div>
                        <div class="col m6">
                            <div class="input-field">
                                <label for="lugaresN" class="black-text">Lugares a trabajar (separar con guion)</label>
                                <input type="text" name="lugaresN" id="lugaresN" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="actividadesN" class="black-text">Actividades (separar con guion)</label>
                                <input type="text" name="actividadesN" id="actividadesN" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="horariosN" class="black-text">Horarios</label>
                                <input type="text" name="horariosN" id="horariosN" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="costosHN" class="black-text">Precio Hora</label>
                                <input type="number" min="1" name="costosHN" id="costosHN" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="costosSN" class="black-text">Precio Semana</label>
                                <input type="number" min="1" name="costosSN" id="costosSN" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="antecedentesN" class="black-text">Antecedentes Personales</label>
                                <input type="text" name="antecedentesN" id="antecedentesN" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="cursosN" class="black-text">Cursos Realizados (separar con guion)</label>
                                <input type="text" name="cursosN" id="cursosN" required="true" />
                            </div>
                        </div>
                        <input type="submit" id="btingresar" value="Agregar" class="btn deep-orange"/>
                    </div>

                    <div class="col s12 m6">
                        <h3>Niñeras</h3>
                        <table>
                            <thead>
                                <tr>
                                    <td>Rut</td><td>Nombre</td><td>Apellido</td><td>Direccion</td><td>Telefono</td><td>Eliminar</td>
                                </tr>
                            </thead>
                            <tbody id="tbodyNn">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!--------------------gestion Usuarios--------------------------------------->

            <div id="gestionClientes" class="col s12 m12">
                <h3 class="center">Clientes</h3>
                <div class="row">
                    <div class="col s12 m12">

                        <table class="striped ">
                            <thead>
                                <tr>
                                    <td>Rut</td><td>Nombre</td><td>Apellido</td><td>Rol</td><td>Direccion</td><td>telefono</td><td>email</td><td>clave</td><td>Eliminar</td>
                                </tr>
                            </thead>
                            <tbody id="tbodyClientes">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            <!--------------------Gestion Contrato--------------------------------------->

            <div id="gestionContrato" class="col s12">
                <h3 class="center">Contratos</h3>
                <div class="row">
                    <div class="col s12">
                        <table>
                            <thead>
                                <tr>
                                    <td>Fecha</td><td>Cliente</td><td>Niñera</td><td>Precio Hora</td><td>Precio</td><td>Total</td>
                                </tr>
                            </thead>
                            <tbody id="tbodycontratosad">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!----------------------------------------------------------->


        </div>


        <!--------------------Modal--------------------------------------->


        <div id="modalEliminarN" class="modal">
            <div class="modal-content">
                <h3>¿Esta seguro que desea eliminar esta Niñera?</h3>
                <input type="hidden" id="rutoculto" />
            </div>
            <div class="modal-footer">
                <input type="button" value="Si" id="bteliminarSiN" class="btn green"/>
                <input type="button" value="No" id="bteliminarNoN" class="btn yellow modal-action modal-close"/>
            </div>
        </div>


        <div id="modalEliminarU" class="modal">
            <div class="modal-content">
                <h3>¿Esta seguro que desea eliminar este Cliente?</h3>
                <input type="hidden" id="rutUoculto" />
            </div>
            <div class="modal-footer">
                <input type="button" value="Si" id="bteliminarSiU" class="btn green"/>
                <input type="button" value="No" id="bteliminarNoU" class="btn yellow modal-action modal-close"/>
            </div>
        </div>


        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="<?php echo base_url(); ?>lib/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>lib/js/materialize.min.js"></script>
        
        <script>
            $(function () {
                $('ul.tabs').tabs();
                $(".modal").modal();
                cargarNineras();
                cargarClientes();
                cargarContratosAD();

                function cargarNineras() {
                    var url = "<?php echo site_url(); ?>/ver";
                    $("#tbodyNn").empty();
                    $.getJSON(url, function (res) {
                        $.each(res, function (i, o) {
                            var x = "<tr><td>" + o.rut + "</td>";
                            x += "<td>" + o.nombre + "</td>";
                            x += "<td>" + o.apellido + "</td>";
                            x += "<td>" + o.direccion + "</td>";
                            x += "<td>" + o.telefono + "</td>";
                            x += '<td> <button id="delete" value="' + o.rut + '" class="btn-ﬂoating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></button></ td></tr>';
                            $("#tbodyNn").append(x);
                        });
                    });
                }
                function cargarClientes() {
                    var url = "<?php echo site_url(); ?>/veru";
                    $("#tbodyUsuarios").empty();
                    $.getJSON(url, function (res) {
                        $.each(res, function (i, o) {
                            var x = "<tr><td>" + o.rut + "</td>";
                            x += "<td>" + o.nombre + "</td>";
                            x += "<td>" + o.apellido + "</td>";
                            x += "<td>" + o.rol + "</td>";
                            x += "<td>" + o.direccion + "</td>";
                            x += "<td>" + o.telefono + "</td>";
                            x += "<td>" + o.email + "</td>";
                            x += "<td>" + o.clave + "</td>";
                            x += '<td> <button id="delete" value="' + o.rut + '" class="btn-ﬂoating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></button></ td></tr>';
                            $("#tbodyClientes").append(x);
                        });
                    });
                }

                $("#btingresar").click(function () {
                    var foto = $("#fotoN").val();
                    var rut = $("#rutN").val();
                    var nombre = $("#nombreN").val();
                    var apellido = $("#apellidoN").val();
                    var rol = "cuidadora";
                    var direccion = $("#direccionN").val();
                    var telefono = $("#telefonoN").val();
                    var email = $("#emailN").val();
                    var clave = $("#claveN").val();
                    if (foto == "" || rut == "" || nombre == "" || apellido == "" || rol == "" || direccion == "" || telefono == "" || email == "" || clave == "" ) {
                        Materialize.toast('Faltan datos!', 3000);
                    } else {
                        if (costosH <= 0 || costosS <= 0) {
                            Materialize.toast("precio hora y precio semana tiene que ser mayor a 0", 3000);
                        } else {
                            $.ajax({
                                url: "<?php echo site_url(); ?>/insertarn",
                                type: 'POST',
                                dataType: 'json',
                                data: {"foto": foto, "rut": rut, "nombre": nombre, "apellido": apellido, "rol": rol, "direccion": direccion, "telefono": telefono, "email": email, "clave": clave}
                            }).success(function (obj) {
                                Materialize.toast("" + obj.msg, 3000);
                                cargarNineras();
                            }).fail(function (jqXHR, textStatus, errorThrown) {
                                if (jqXHR.status === 0) {
                                    alert('Not connect: Verify Network.');
                                } else if (jqXHR.status == 404) {
                                    alert('Requested page not found [404]');
                                } else if (jqXHR.status == 500) {
                                    alert('Internal Server Error [500].');
                                } else if (textStatus === 'parsererror') {
                                    alert('Requested JSON parse failed.');
                                } else if (textStatus === 'timeout') {
                                    alert('Time out error.');
                                } else if (textStatus === 'abort') {
                                    alert('Ajax request aborted.');
                                } else {
                                    alert('Uncaught Error: ' + jqXHR.responseText);
                                }
                            });
                        }
                    }
                });

                $("#tbodyNn").on("click", "#delete", function (e) {
                    e.preventDefault();
                    $("#rutoculto").val($(this).val());
                    $("#modalEliminarN").modal("open");
                });

                $("#bteliminarSiN").click(function () {
                    var rut = $("#rutoculto").val();
                    $.ajax({
                        url: "<?php echo site_url() ?>/eliminarn",
                        type: 'POST',
                        dataType: 'json',
                        data: {"rut": rut}
                    }).success(function (obj) {
                        Materialize.toast("" + obj.msg, 3000);
                        $("#modalEliminarN").modal("close");
                        $("#tbodyNn").empty();
                        cargarNineras();
                    }).fail(function (jqXHR, textStatus, errorThrown) {
                        if (jqXHR.status === 0) {
                            alert('Not connect: Verify Network.');
                        } else if (jqXHR.status == 404) {
                            alert('Requested page not found [404]');
                        } else if (jqXHR.status == 500) {
                            alert('Internal Server Error [500].');
                        } else if (textStatus === 'parsererror') {
                            alert('Requested JSON parse failed.');
                        } else if (textStatus === 'timeout') {
                            alert('Time out error.');
                        } else if (textStatus === 'abort') {
                            alert('Ajax request aborted.');
                        } else {
                            alert('Uncaught Error: ' + jqXHR.responseText);
                        }
                    });
                });

                $("#tbodyUsuarios").on("click", "#delete", function (e) {
                    e.preventDefault();
                    $("#rutUoculto").val($(this).val());
                    $("#modalEliminarU").modal("open");
                });


                $("#bteliminarSiU").click(function () {
                    var rut = $("#rutUoculto").val();
                    $.ajax({
                        url: "<?php echo site_url() ?>/eliminaru",
                        type: 'POST',
                        dataType: 'json',
                        data: {"rut": rut}
                    }).success(function (obj) {
                        Materialize.toast("" + obj.msg, 3000);
                        $("#modalEliminarU").modal("close");
                        $("#tbodyClientes").empty();
                        cargarUsuarios();
                    }).fail(function (jqXHR, textStatus, errorThrown) {
                        if (jqXHR.status === 0) {
                            alert('Not connect: Verify Network.');
                        } else if (jqXHR.status == 404) {
                            alert('Requested page not found [404]');
                        } else if (jqXHR.status == 500) {
                            alert('Internal Server Error [500].');
                        } else if (textStatus === 'parsererror') {
                            alert('Requested JSON parse failed.');
                        } else if (textStatus === 'timeout') {
                            alert('Time out error.');
                        } else if (textStatus === 'abort') {
                            alert('Ajax request aborted.');
                        } else {
                            alert('Uncaught Error: ' + jqXHR.responseText);
                        }
                    });
                });

//-----------------------pendiente a funcionar-----------------------------------------

                function cargarContratosAD() {
                    var url = "<?php echo site_url(); ?>/contratosad";
                    $("#tbodycontratosad").empty();
                    $.getJSON(url, function (res) {
                        $.each(res, function (i, o) {
                            var x = "<tr><td>" + o.fecha + "</td>";
                            x += "<td>" + o.cliente + "</td>";
                            x += "<td>" + o.niñera + "</td>";
                            x += "<td>" + o.costosH + "</td>";
                            x += "<td>" + o.precio + "</td>";
                            x += "<td>" + o.total + "</td>";
                            $("#tbodycontratosad").append(x);
                        });
                    });
                }

                


//---------------------------------aun no vistos---------------------------------------










            });
        </script>
    </body>
</html>
