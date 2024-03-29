<?php
class User_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
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
    
    public function guardarDB(){
        
        $this->load->helper('url');
        date_default_timezone_set('America/Guayaquil');
        $date = date('Y/m/d');
        $time = date('H:i:s.v');
        $data = array(
            'ID_tem' => 'NULL',
            'Fecha' => $date,
            'Hora' => $time,
            'Grados' => rand(1,100)                      
        );
        return $this->db->insert('Temperatura', $data);
    }
    
    public function guardarDBUlt(){
        
        $this->load->helper('url');
        date_default_timezone_set('America/Guayaquil');
        $date = date('Y/m/d');
        $time = date('H:i:s.v');
        $data = array(
            'ID_ult' => 'NULL',
            'Fecha' => $date,
            'Hora' => $time,
            'Distancia' => rand(1,100)                      
        );
        return $this->db->insert('Ultrasonido', $data);
    }
    
    public function guardarDBC(){
        
        $this->load->helper('url');
        date_default_timezone_set('America/Guayaquil');
        $date = date('Y/m/d');
        $time = date('H:i:s.v');
        $data = array(
            'ID_sensor' => 'NULL',
            'Fecha' => $date,
            'Hora' => $time,
            'Valor' => rand(1,100)                      
        );
        return $this->db->insert('SensorC', $data);
    }
    
    public function get_Temp()
    {
        $sql='SELECT * from Temperatura';
        $query=$this->db->  query($sql);
        return $query->result_array();
    }
    
    public function get_1Temp($count)
    {
        $sql='SELECT * FROM Temperatura WHERE ID_tem = (SELECT min(ID_tem + '.$count.' ) FROM Temperatura)';
        $query=$this->db->  query($sql);
        return $query->result_array();
    }
    
    public function get_1Ult($count)
    {
        $sql='SELECT * FROM Ultrasonido WHERE ID_ult = (SELECT min(ID_ult + '.$count.' ) FROM Ultrasonido)';
        $query=$this->db->  query($sql);
        return $query->result_array();
    }
    
    public function get_1C($count)
    {
        $sql='SELECT * FROM SensorC WHERE ID_sensor = (SELECT min(ID_sensor + '.$count.' ) FROM SensorC)';
        $query=$this->db->  query($sql);
        return $query->result_array();
    }
    
    
}