<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class gestionModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    #----------------inicio usuarios y administradores----------------------

    function buscarUsuario($rut) {
        $this->db->select("rut, nombre, apellido,rol,direccion,,telefono,email,clave,foto");
        $this->db->from("usuario");
        $this->db->where("rut", $rut);
        return $this->db->get()->result();
    }

    function validarUsuario($rut, $pass) {
        $user = $this->buscarUsuario($rut);
        $resp = "Datos no existen";
        foreach ($user as $i) {
            if ($i->clave == $pass) {
                $this->session->set_userdata("usuario", $i);
                $resp = $i->rol;
            }
        }
        return $resp;
    }


    #----------------mas-------------------------------------------

    function getNineras() {
        $rol = "cuidadora";
        $this->db->select("rut, nombre, apellido,rol,direccion,,telefono,email,clave");
        $this->db->from("usuario");
        $this->db->where("rol", $rol);
        return $this->db->get()->result();
    }

    function getUsuarios() {
        $rol = "usuario";
        $this->db->select("rut, nombre, apellido,rol,direccion,,telefono,email,clave");
        $this->db->from("usuario");
        $this->db->where("rol", $rol);
        return $this->db->get()->result();
    }

    function cerrarSesion() {
        $datos = array();
        $this->session->set_userdata("usuario", $datos);
        header("Location:" . site_url());
    }

    function getDetalleVenta() {
        return $this->db->get("detalleventa")->result();
    }

    #-----------------SECCION ADMIN--------------------
            #-----------------SECCION ADMIN listos--------------------

    function insertarNinera($foto, $rut, $nombre, $apellido, $rol, $direccion, $telefono, $email, $clave) {
        $datos = array("rut" => $rut, "nombre" => $nombre, "apellido" => $apellido, "rol" => $rol, "direccion" => $direccion, "telefono" => $telefono, "email" => $email, "clave" => $clave);
        $this->db->insert("usuario", $datos);
    }
    
    function eliminarNinera($rut) {
         $this->db->where("rut", $rut);
        $this->db->delete("usuario");
    }
    
    function eliminarUsuario($rut) {
        $this->db->where("rut", $rut);
        $this->db->delete("usuario");
    }

    function buscarnine($direccion) {
        $this->db->select(" foto,rut,nombre,apellido,direccion,lugares,actividades,horarios,telefono,costosH,costosS,antecedentes_p,cursos,cursos,email");
        $this->db->from("nineras");
        //$this->db->where("direccion", $direccion);
        $this->db->like("direccion", $direccion);
        $this->db->or_like("lugares", $direccion);
        return $this->db->get()->result();
    }
            #----------------------pendientes a funcionar--------------

    function ContratosAD() {
        $this->db->select("c.fecha,u.nombre as 'Cliente',n.nombre as 'Niñera',n.costosH,d.precio,c.total");
        $this->db->from("contrato c");
        $this->db->join("detallecontrato d", "d.idcontrato = c.idcontrato");
        $this->db->join("niñeras n", "d.rut_ninera = n.rut");
        $this->db->join("usuario u", "u.rut = c.rut");
        return $this->db->get()->result();
    }
    
    
    
            #--------------------------aun no vistos----------------------------------  
    
    
    

    

    

    #----------------FIN SECCION ADMIN--------------------


    

}
