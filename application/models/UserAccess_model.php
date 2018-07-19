<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserAccess_model
 *
 * @author Roberto Rojas
 */
class UserAccess_model extends CI_Model{
        protected $nombre_empleado = null;
        protected $apellido_empleado = null;
        protected $no_empleado = null;
        protected $correo_empleado = null;
        protected $activo = 0;
        protected $contrasena = null;
        protected $rol = null;
        
        function getNombre_empleado() {
            return $this->nombre_empleado;
        }

        function getApellido_empleado() {
            return $this->apellido_empleado;
        }

        function getNo_empleado() {
            return $this->no_empleado;
        }

        function getCorreo_empleado() {
            return $this->correo_empleado;
        }

        function getActivo() {
            return $this->activo;
        }

        function getContrasena() {
            return $this->contrasena;
        }

        function setNombre_empleado($nombre_empleado) {
            $this->nombre_empleado = $nombre_empleado;
        }

        function setApellido_empleado($apellido_empleado) {
            $this->apellido_empleado = $apellido_empleado;
        }

        function setNo_empleado($no_empleado) {
            $this->no_empleado = $no_empleado;
        }

        function setCorreo_empleado($correo_empleado) {
            $this->correo_empleado = $correo_empleado;
        }

        function setActivo($activo) {
            $this->activo = $activo;
        }

        function setContrasena($contrasena) {
            $this->contrasena = $contrasena;
        }
        
        function getRol() {
            return $this->rol;
        }

        function setRol($rol) {
            $this->rol = $rol;
        }

        
                
    public function isActive($mail_empleado){
        $this->db->select('activo');
        $this->db->from('usuarios');
        $this->db->where('correo_empleado', $mail_empleado);
        return $this->db->get();
    }    
    
    public function isValid($mail_empleado, $contrasena){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('correo_empleado', $mail_empleado);
        $this->db->where('contrasena', $contrasena);
    }
   
    public function saveRegistration($data){
        $this->db->insert('usuarios', $data);
    }
    
    public function isEmployeeAlreadyRegistered($no_empleado){
        $this->db->from('usuarios');
        $this->db->where('no_empleado', $no_empleado);
        if($this->db->count_all_results() > 0){
            return true;
        }
        return false;
    }
    
    
    public function retrieveUserInfo($mail_empleado){
        $this->db->from('usuarios');
        $this->db->where('correo_empleado', $mail_empleado);
        return $this->db->get();
    }
    
    
}
