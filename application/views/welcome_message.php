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
    <body class="deep-orange darken" style="background-image: url(<?php echo base_url(); ?>img/fondo5.jpg)">

        <div class="container">

            <div class="row">

                <div class="col s12 m6 offset-m3  green accent-3 center-align z-depth-4" style="margin-top: 30%">
                    <form method="POST">
                        <h3 class="white-text">Iniciar Sesion</h3>
                        <div class="input-field">
                            <label for="txtRut" class="black-text">Rut</label>
                            <input type="text" name="txtRut" id="txtRut" required="true" />
                        </div>
                        <div class="input-field">
                            <label for="txtClave" class=" black-text">Clave</label>
                            <input type="password" name="txtClave" id="txtClave" required="true" />
                        </div>
                        <div>
                            <input type="submit" value="Iniciar" id="btnIngresar" name="btnIngresar" class="btn deep-orange lighten-1" />
                            <input type="submit" value="Iniciar como Niñera" id="btnIngresarN" name="btnIngresarN" class="btn deep-orange lighten-1" />
                        </div>
                        <div> 
                            <br>
                            <br>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="<?php echo base_url(); ?>lib/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>lib/js/materialize.min.js"></script>
        <script>
            $(function () {


                $("#btnIngresar").click(function () {
                    var rut = $("#txtRut").val();
                    var clave = $("#txtClave").val();
                    if (rut == "" || clave == "") {
                        Materialize.toast("Faltan datos", 3000);
                    } else {
                        $.ajax({
                            url: "<?php echo site_url(); ?>/buscaru",
                            type: 'POST',
                            dataType: 'json',
                            data: {"rut": rut, "clave": clave}
                        }).success(function (obj) {
                            if (obj == "usuario") {
                                window.location = "<?php echo site_url(); ?>/mcliente";
                            } else if (obj == "administrador") {
                                window.location = "<?php echo site_url(); ?>/madmin";
                            } else if (obj == "cuidadora") {
                                window.location = "<?php echo site_url(); ?>/mnineras";
                            } else {
                                alert(obj);
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






            });
        </script>
    </body>
</html>