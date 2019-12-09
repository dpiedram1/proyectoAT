<?php
class User_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
         $this->load->library('encrypt');
        $this->load->library('session');
    }

        public function comprobar($cedula,$clave)
    {
        $this->db->select('Password');
        $this->db->where('Cedula',$cedula);
        $this->db->where('Password',$clave);
        $query = $this->db->get('Usuarios');
        if ($query->num_rows()==1) 
        {
            return true;
        }else{
            return false;
        }
           
    }
    
    public function sesiones($ci)
    {
        $this->db->select('Cedula,Nombre,Apellido,Password');
        $this->db->where('Cedula',$ci);
        $query = $this->db->get('Usuarios');
        if ($query->num_rows()==1) {
            $consulta = $query->row();
            $nombres = $consulta->Nombre;
            $ci_usuario = $consulta->Cedula;
            $clave=$consulta->Password;
            $apellidos=$consulta->Apellido;

            $newdata = array(
            'ci'  => $ci_usuario,
            'nombres'     => $nombres,
            'clave'     => $clave,
            'apellidos'     => $apellidos,
            'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);
         }
    }
    
    public function set_users()
    {
        $this->load->helper('url');
        
        $data = array(
            'Cedula' => $this->input->post('cedula'),
            'Nombre' => $this->input->post('nombre'),
            'Password' => $this->input->post('pass'),
            'Apellido' => $this->input->post('apellido')
                      
        );
        $this->db->where('Cedula',$this->input->post('cedula'));
        $this->db->from('Usuarios');
        $count = $this->db->count_all_results();
        
        if($count == 0){
            return $this->db->insert('Usuarios', $data);
        }else{
            return false;
        }        
    }
    
}