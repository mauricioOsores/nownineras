<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                        <li><a href="#" class="black-text">Bienvenido Niñera/o </a></li>
                        <li><a href="<?php echo site_url(); ?>/cerrarsesion" class="black-text" ><i class="material-icons">power_settings_new</i></a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#" class="black-text">Bienvenido</a></li>
                        li><a href="<?php echo site_url(); ?>/cerrarsesion" class="black-text" ><i class="material-icons">power_settings_new</i></a></li>
                    </ul>

                    <ul class="tabs tabs-transparent green accent-3">
                        <li class="tab"><a href="#perfil" class="black-text">Perfil</a></li>
                        <li class="tab"><a href="#gestionContrato" class="black-text">Gestion Contratos</a></li>
                    </ul>
                </div>
            </nav>

            <!------------------------------ perfil---------------------------------------------->

            <div id="perfil" class="col s12 ">
                <div class="col s3 "></div>
                
                <div class="row">
                    
                    <div class="col s12 m6 green accent-3" style="margin-top: 2%">
                        <h3 class="center">Perfil</h3>
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

            <!---------------------------Gestion Contrato---------------------------------------------->

            <div id="gestionContrato" class="col s12">
                <h3 class="center">Contratos</h3>
                <div class="col s3"></div>
                <div class="row">

                    <div class="col s12">
                        <table class="striped ">
                            <thead>
                                <tr>
                                    <td class="green accent-3">Fecha</td>
                                    <td class="green accent-3">cliente</td>
                                    <td class="green accent-3">Niñera</td>
                                    <td class="green accent-3">Precio Hora</td>
                                    <td class="green accent-3">Precio</td>
                                    <td class="green accent-3">Total</td>
                                </tr>
                            </thead>
                            <tbody id="tbodycontratosad">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!---------------------------------------------------------------------------->



        </div>



        <!------------------------------ modal---------------------------------------------->


        <div id="modalEliminar" class="modal">
            <div class="modal-content">
                <h3>¿Esta seguro que desea eliminar este producto?</h3>
                <input type="hidden" id="idoculto" />
            </div>
            <div class="modal-footer">
                <input type="button" value="Si" id="bteliminarSi" class="btn green"/>
                <input type="button" value="No" id="bteliminarNo" class="btn yellow modal-action modal-close"/>
            </div>
        </div>





        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="<?php echo base_url(); ?>lib/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>lib/js/materialize.min.js"></script>
        <script>
            $(function () {
                $('ul.tabs').tabs();
                $(".modal").modal();




            });

        </script>
    </body>
</html>
