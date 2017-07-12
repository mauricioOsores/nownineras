<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("gestionModel");
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    #----------------inicio sesiones----------------------

    public function admin() {
        if ($this->session->userdata('usuario')) {
            $this->load->view("moduloAdmin");
        } else {
            $this->load->view('welcome_message');
        }
    }

    public function cliente() {
        if ($this->session->userdata('usuario')) {
            $this->load->view("moduloCliente");
        } else {
            $this->load->view('welcome_message');
        }
    }

    public function nineras() {
        if ($this->session->userdata('usuario')) {
            $this->load->view("moduloNineras");
        } else {
            $this->load->view('welcome_message');
        }
    }

    public function registrar() {
        $this->load->view("moduloRegistrar");
    }

    #----------------validar usuarios y administradores----------------------

    public function validarUsuario() {
        $rut = $this->input->post("rut");
        $clave = $this->input->post("clave");
        echo json_encode($this->gestionModel->validarUsuario($rut, $clave));
    }

    #----------------mas----------------------

    public function getNineras() {
        echo json_encode($this->gestionModel->getNineras());
    }

    public function getUsuarios() {
        echo json_encode($this->gestionModel->getUsuarios());
    }

    public function cerrarSesion() {
        $this->gestionModel->cerrarSesion();
    }

    public function getDettaleVenta() {
        echo json_encode($this->gestionModel->getDetalleVenta());
    }

    #----------------SECCION ADMIN----------------------
    #----------------SECCION ADMIN listos----------------------

    public function ContratosAD() {
        echo json_encode($this->gestionModel->ContratosAD());
    }

    public function insertarNinera() {
        $foto = $this->input->post("foto");
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $rol = $this->input->post("rol");
        $direccion = $this->input->post("direccion");
        $telefono = $this->input->post("telefono");
        $email = $this->input->post("email");
        $clave = $this->input->post("clave");
        $this->gestionModel->insertarNinera($foto, $rut, $nombre, $apellido, $rol, $direccion, $telefono, $email, $clave);
        echo json_encode(array("msg" => "Niñera agregada!"));
    }

    public function eliminarNinera() {
        $rut = $this->input->post("rut");
        $this->gestionModel->eliminarNinera($rut);
        echo json_encode(array("msg" => "Niñera eliminada"));
    }

    public function eliminarUsuario() {
        $rut = $this->input->post("rut");
        $this->gestionModel->eliminarUsuario($rut);
        echo json_encode(array("msg" => "Usuario eliminado"));
    }

    public function buscarnine() {
        $direccion = $this->input->post("direccion");
        echo json_encode($this->gestionModel->buscarnine($direccion));
    }

    #--------------------aun no vistos------------------------------
    #---------------FIN SECCION ADMIN-------------------
    #
    #
    #
    #
    #
    #--------------------pendientes a funcionar---------------------

    public function getContratar() {
        $contrato = $this->session->userdata("contratar");
        echo json_encode($contrato);
    }

    /* public function addContratar() {
      $foto = $this->input->post("foto");
      $rut = $this->input->post("rut");
      $nombre = $this->input->post("nombre");
      $apellido = $this->input->post("apellido");
      $direccion = $this->input->post("direccion");
      $telefono = $this->input->post("telefono");
      $email = $this->input->post("email");
      $lugares = $this->input->post("lugares");
      $actividades = $this->input->post("actividades");
      $horarios = $this->input->post("horarios");
      $costosH = $this->input->post("costosH");
      $costosS = $this->input->post("costosS");
      $antecedentes = $this->input->post("antecedentes");
      $cursos = $this->input->post("cursos");

      $this->gestionModel->insertarNinera($foto, $rut, $nombre, $apellido, $direccion, $telefono, $email, $lugares, $actividades, $horarios, $costosH, $costosS, $antecedentes_p, $cursos);
      echo json_encode(array("msg" => "Niñera agregada!"));
      } */

    public function addContratar() {

        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $direccion = $this->input->post("direccion");


        $this->gestionModel->insertarNinera($foto, $rut, $nombre, $apellido, $direccion, $telefono, $email, $lugares, $actividades, $horarios, $costosH, $costosS, $antecedentes_p, $cursos);
        echo json_encode(array("msg" => "Niñera agregada!"));
    }

}
