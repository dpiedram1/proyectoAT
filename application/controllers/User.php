<?php
$id = 0;

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->helper('url');
    }
    
    public function index()
    {
        $this->load->view('welcome_message');
        //flecha es como usar el punto en java, acceder al metodo o atributo de un objeto
    }
    
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////

   
    /////////////////////////////////////////////////////////////////////////////////////////////////////

 
    public function perfil()
    {
        $this->load->view('pages/perfil_usuario');
        //flecha es como usar el punto en java, acceder al metodo o atributo de un objeto
    }
    
    public function sensorA()
    {
        $this->load->view('pages/sensorA');
        //flecha es como usar el punto en java, acceder al metodo o atributo de un objeto
    }
    
    public function generarRandom(){
        $this->user_model->guardarDB();
    }
    
    public function generarRandomUlt(){
        $this->user_model->guardarDBUlt();
    }
    
    public function ingreso() {

        $this->load->helper('form');
        if(!isset($_POST['cedula'])){
            $this->load->view('pages/login');
        }else{

            $validar['usuarios']=$this->user_model->comprobar($_POST['cedula'],$_POST['pass']);

            if($validar['usuarios'])
            {
                /*echo "<script>
                alert('Usuario Verificado');
                </script>"; */

                $this->user_model->sesiones($_POST['cedula']);
                
                $this->load->view('pages/perfil_usuario');

            }else{    //    Si no logró validar
                    echo "<script>
                    alert('Su usuario o contraseña son incorrectos');
                    </script>";
                     $this->load->view('pages/login');
                }
            }
    
        
        
            
    }
    
    public function registro()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('cedula', 'cedula', 'required');      
        $this->form_validation->set_rules('apellido', 'apellido', 'required');
        $this->form_validation->set_rules('pass', 'pass', 'required');
        

        if ($this->form_validation->run() === FALSE)
        {
           $this->load->view('pages/registro');
            
        }
        else
        {
            if($this->user_model->set_users()){
               $this->load->view('pages/login');
                echo '<script> alert("Usuario Registrado exitosamente")</script>';
                echo '<script> swal("Usuario Registrado","Ahora puedes acceder a la página web","success"); </script>'; 
            }else{
                $this->load->view('pages/registro');
                echo '<script> alert("El usuario ya existe")</script>';
            }
            
            
        }
    }
        

    public function logout() {
        $this->session->sess_destroy();
        $this->load->helper('form');
        $this->load->view('welcome_message');
    }

    public function sensorB()
    {
        $this->load->view('pages/sensorB');
        //flecha es como usar el punto en java, acceder al metodo o atributo de un objeto
    }
    
    public function sensorC()
    {
        $this->load->view('pages/sensorC');
        //flecha es como usar el punto en java, acceder al metodo o atributo de un objeto
    }
    
    public function obtenerValor($contador){
        $data['temperatura'] = $this->user_model->get_1Temp($contador);
        foreach ($data['temperatura'] as $temp_item): 
            $datos = $temp_item['Grados'];
            $datos2 = $temp_item['Hora'];
        endforeach;
        echo $datos.",";
        echo $datos2;
    }
    
    public function obtenerValorUlt($contador){
        $data['ultra'] = $this->user_model->get_1Ult($contador);
        foreach ($data['ultra'] as $temp_item): 
            $datos = $temp_item['Distancia'];
            $datos2 = $temp_item['Hora'];
        endforeach;
        echo $datos.",";
        echo $datos2;
    }
 
}
