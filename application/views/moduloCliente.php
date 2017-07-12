<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>lib/css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body class="green accent-1">
        <div class="row">
            <nav class="nav-extended white">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo"><img src="<?php echo base_url(); ?>img/largo.png" class="responsive-img" style="height: 2em;"/></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#" class="black-text">Bienvenido Cliente </a></li>
                        <li><a href="<?php echo site_url(); ?>/cerrarsesion" class="black-text" ><i class="material-icons">power_settings_new</i></a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#" class="black-text">Bienvenido Cliente</a></li>
                        li><a href="<?php echo site_url(); ?>/cerrarsesion" class="black-text" ><i class="material-icons">power_settings_new</i></a></li>
                    </ul>

                    <ul class="tabs tabs-transparent green accent-3">
                        <li class="tab"><a href="#perfil" class="black-text">Perfil</a></li>
                        <li class="tab"><a href="#busqueda" class="black-text">Busqueda</a></li>
                        <li class="tab"><a href="#test1" class="black-text">Contratado</a></li>

                    </ul>
                </div>
            </nav>

            <!--------------------perfil--------------------------------------->

            <div id="perfil" class="col s12 ">
                <div class="col s3 "></div>
                
                <div class="row">
                    
                    <div class="col s12 m6 green accent-3" style="margin-top: 2%">
                        <h3 class="center white">Perfil</h3>
                        <div class="input-field">
                            <label for="fotoU" class="black-text">Foto</label>
                            <input type="text" name="fotoU" id="fotoU" required="true" />
                        </div>
                        <div class="col m6">
                            <div class="input-field">
                                <label for="rutU" class="black-text ">Rut</label>
                                <input disabled="true" type="text" name="rutU" id="rutU" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="nombreU" class="black-text">Nombre</label>
                                <input type="text" name="nombreU" id="nombreU" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="apellidoU" class="black-text">Apellido</label>
                                <input type="text" name="apellidoU" id="apellidoU" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="direccionU" class="black-text">Direccion</label>
                                <input type="text" name="direccionU" id="direccionU" required="true" />
                            </div>
                        </div>
                        <div class="col m6">

                            <div class="input-field">
                                <label for="telefonoU" class="black-text">Telefono</label>
                                <input type="text" name="telefonoU" id="telefonoU" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="emailU" class="black-text">Email</label>
                                <input type="text" name="emailU" id="emailU" required="true" />
                            </div>
                            <div class="input-field">
                                <label for="claveU" class="black-text">Clave</label>
                                <input type="text" name="claveU" id="claveU" required="true" />
                            </div>

                        </div>
                        <input type="submit" id="bteditarU" value="Editar" class="btn deep-orange"/>
                    </div>
                </div>
            </div>

            <!--------------------gestion contrato--------------------------------------->

            <div id="test1" class="col s12">

                <div class="col s2"></div>

                <div class="col s8">
                    <h3>Contratado</h3>
                    <a id="btventa" class="waves-effect btn cyan lighten-3">borrar niñera</a>
                    <table id="tablap" class="striped ">
                        <thead>
                            <tr>
                                <td>FOTO</td>
                                <td>RUT</td>
                                <td>NOMBRE</td>
                                <td>APELLIDO</td>
                                <td>DIRECCION</td>
                                <td>HORARIO</td>
                                <td>TELEFONO</td>
                                <td>ANTECEDENTES PERSONALES</td>
                                <td>CHAT</td>
                            </tr>
                        </thead>
                        <tbody id="tbody2" >

                        </tbody>
                    </table>
                    <a id="btpago" class="waves-effect waves-light btn right">Trabajo Realizado</a>
                </div>
            </div>



            <!--------------------gestion busqueda--------------------------------------->

            <div id="busqueda" class="col s12 m12">
                <div class="col s3"></div>
                <div class="col s6 m6">
                    <h3>Buscar Niñera</h3>
                    <div class="input-field">
                        <label for="txtBuscarn" class="black-text">Ciudad:</label>
                        <input type="text" name="txtBuscarp" id="txtBuscarn" required="true" />
                        <input type="submit" value="Buscar" id="btnBuscarn" class="btn green" />
                        <input type="submit" value="borrar Busqueda" id="btnBorrarB" class="btn deep-orange" />
                    </div>
                </div>
                <div class="col s3"></div>
                <table class="striped " style="margin-top: 16%">
                    <thead>
                        <tr>
                            <td class="green accent-3">FOTO</td>
                            <td class="green accent-3">NOMBRE</td>
                            <td class="green accent-3">APELLIDO</td>
                            <td class="green accent-3">DIRECCION A TRABAJAR</td>
                            <td class="green accent-3">OTROS LUGARES</td>
                            <td class="green accent-3">HORARIOS</td>
                            <td class="green accent-3">TELEFONO</td>
                            <td class="green accent-3">PRECIO HORA</td>
                            <td class="green accent-3">CURSOS</td>
                            <td class="green accent-3">EMAIL</td>
                            <td class="green accent-3">CONTRATAR</td>


                        </tr>
                    </thead>
                    <tbody id="tbodybuscarn">

                    </tbody>
                </table>
            </div>







        </div>


        <!-------------------------------modal contratar----------------------->

        <div id="modalcontratar" class="modal">
            <div class="modal-content">
                <h4>Informacion de Niñera</h4>
                <div class="row">
                    <div class="col s6">
                        Foto<input type="text" id="foto" readonly="readonly" />
                    </div>
                    <div class="col s6">
                        Rut<input type="text" id="rut" readonly="readonly" />
                    </div>
                    <div class="col s6">
                        Nombre<input type="text" id="nombre" readonly="readonly" />
                    </div>
                    <div class="col s6">
                        Apellido<input type="text" id="apellido" readonly="readonly" />
                    </div>
                    <div class="col s6">
                        Direccion<input type="text" id="direccion" readonly="readonly" />
                    </div>
                    <div class="col s6">
                        Telefono<input type="text" id="telefono" readonly="readonly" />
                    </div>
                    <div class="col s6">
                        Email<input type="text" id="email" readonly="readonly" />
                    </div>
                    <div class="col s6">
                        Lugares<input type="text" id="lugares" readonly="readonly" />
                    </div>

                </div>
                <div class="row">

                    <div class="col s6">
                        Actividades<input type="text" id="actividades" readonly="readonly" />
                    </div>
                    <div class="col s6">
                        Horarios<input type="text" id="horarios" readonly="readonly" />
                    </div>
                    <div class="col s6">
                        Precio Hora<input type="text" id="costosH" readonly="readonly" />
                    </div>
                    <div class="col s6">
                        Precio Semana<input type="text" id="costosS" readonly="readonly" />
                    </div>
                    <div class="col s6">
                        Antecedentes Penales<input type="text" id="antecedentes" readonly="readonly" />
                    </div>
                    <div class="col s6">
                        Cursos<input type="text" id="cursos" readonly="readonly" />
                    </div>

                </div>
                <div class="row">
                    <div class="col s6">
                        <a id="btcontratar" href="#" class="modal-action modal-close waves-effect waves-green btn">contratar</a>
                    </div>
                </div>
            </div>
        </div>


        <!-------------------------------modal------------------------------------>



        <!----------modal pago-------------------------------------------------------------->   

        <div id="modalpago" class="modal">
            <div class="modal-content">
                <h4>Generar Pago</h4>
                <div class="row">
                    <div class="col s6">
                        NOMBRE CLIENTE<input type="text" id="ncliente" />
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <a id="btpagar" href="#" class="modal-action modal-close waves-effect waves-green btn">Pagar</a>
                    </div>
                </div>
            </div>
        </div>




        <!----------------------------------------------------------------------------->   





    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>lib/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('ul.tabs').tabs();
            $(".modal").modal();
            verNineras();


            //-------------------------bt-----------------------------

            $("#btnBuscarn").click(function () {
                var ciudad = $("#txtBuscarn").val();
                if (ciudad == "") {
                    Materialize.toast("CIUDAD o COMUNA es obligatorio para la busqueda", 3000);
                } else {
                    $.ajax({
                        url: "<?php echo site_url(); ?>/buscarnine",
                        type: 'POST',
                        dataType: 'json',
                        data: {"direccion": ciudad}
                    }).success(function (obj) {
                        $("#tbodybuscarn").empty();
                        if (obj.length == 0) {
                            Materialize.toast("No existe niñera asociado a la Ciudad", 3000);
                        } else {
                            $.each(obj, function (i, o) {
                                var x = "<tr><td>" + o.foto + "</td>";
                                x += "<td>" + o.nombre + "</td>";
                                x += "<td>" + o.apellido + "</td>";
                                x += "<td>" + o.direccion + "</td>";
                                x += "<td>" + o.lugares + "</td>";
                                x += "<td>" + o.horarios + "</td>";
                                x += "<td>" + o.telefono + "</td>";
                                x += "<td>" + o.costosH + "</td>";
                                x += "<td>" + o.cursos + "</td>";
                                x += "<td>" + o.email + "</td>";

                                x += "<td> <button id='add' value='" + o.foto + "," + o.rut + "," + o.apellido + "," + o.direccion + "," + o.lugares + "," + o.actividades + "," + o.horarios + "," + "," + o.telefono + "," + "," + o.costosH + "," + "," + o.costosS + "," + "," + o.antecedentes_p + "," + "," + o.cursos + "," + "," + o.email + "," + "' class='btn-floating btn-large waves-effect waves-light green'><i class='material-icons'>add</i></button>" + "</td></tr>";

                                $("#tbodybuscarn").append(x);
                            });
                        }
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
            });

            $("#btcontratar").click(function (e) {
                e.preventDefault();
                var datos = $(this).val();
                var fila = datos.split(",");
                var foto = $("#foto").val();
                var rut = $("#rut").val();
                var nombre = $("#nombre").val();
                var apellido = $("#apellido").val();
                var direccion = $("#direccion").val();
                var telefono = $("#telefono").val();
                var email = $("#email").val();
                var lugares = $("#lugares").val();
                var actividades = $("#actividades").val();
                var horarios = $("#horarios").val();
                var costosH = $("#costosH").val();
                var costosS = $("#costosS").val();
                var antecedentes_p = $("#antecedentes").val();
                var cursos = $("#cursos").val();
                $.ajax({
                    url: '<?php echo site_url() ?>/add',
                    type: 'POST',
                    datatype: 'json',
                    data: {"foto": foto, "rut": rut, "nombre": nombre, "apellido": apellido, "direccion": direccion, "telefono": telefono, "email": email, "lugares": lugares, "actividades": actividades, "horarios": horarios, "costosH": costosH, "costosS": costosS, "antecedentes_p": antecedentes_p, "cursos": cursos}
                }).success(function (o) {
                    alert("Contratada!!");
                    verNineras();
                }).fail(function () {
                    alert("error");
                });
            });


            //-------------------Funcion Ver Niñeras---------------------------------------------------------

            function verNineras() {
                var url = "<?php echo site_url() ?>/ver";
                $("#tbodybuscarn").empty();
                $.getJSON(url, function (result) {
                    $.each(result, function (i, o) {
                        var fila = "<tr><td>" + o.foto + "</td><td>" + o.nombre + "</td><td>" + o.apellido + "</td><td>" + o.direccion + "</td><td>" + o.lugares + "</td><td>" + o.horarios + "</td><td>" + o.telefono + "</td><<td>" + o.costosH + "</td><td>" + o.cursos + "</td><td>" + o.email + "</td><td> <button id='add' value='" + o.foto + "," + o.rut + "," + o.nombre + "," + o.apellido + "," + o.direccion + "," + o.telefono + "," + o.email + "," + o.lugares + "," + o.actividades + "," + o.horarios + "," + o.costosH + "," + o.costosS + "," + o.antecedentes_p + "," + o.cursos + "' class='btn-floating btn-large waves-effect waves-light green'><i class='material-icons'>add</i></button>" + "</td></tr>";
                        $("#tbodybuscarn").append(fila);
                    });
                });
            }


            $("body").on("click", "#add", function (e) {
                e.preventDefault();
                //SE OBTIENEN LOS DATOS DEL BOTON
                var datos = $(this).val();
                var fila = datos.split(",");

                $("#foto").val(fila[0]);
                $("#rut").val(fila[1]);
                $("#nombre").val(fila[2]);
                $("#apellido").val(fila[3]);
                $("#direccion").val(fila[4]);
                $("#telefono").val(fila[5]);
                $("#email").val(fila[6]);
                $("#lugares").val(fila[7]);
                $("#actividades").val(fila[8]);
                $("#horarios").val(fila[9]);
                $("#costosH").val(fila[10]);
                $("#costosS").val(fila[11]);
                $("#antecedentes").val(fila[12]);
                $("#cursos").val(fila[13]);
                $("#modalcontratar").modal('open');
            });





















        });
    </script>
</body>
</html>