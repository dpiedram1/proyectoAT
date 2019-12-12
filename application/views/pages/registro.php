<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?= base_url('');?>img/favicon.png">

  <title>Registro</title>

  <!-- Bootstrap CSS -->
  <link href="<?= base_url('');?>css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?= base_url('');?>css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?= base_url('');?>css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?= base_url('');?>css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?= base_url('');?>css/style.css" rel="stylesheet">
  <link href="<?= base_url('');?>css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    
    <?php echo form_open('User/registro', array('class'=>'login-form'))?>
    
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" id="cedula" name="cedula" class="form-control" placeholder="Cédula" autofocus required maxlength="10" onkeypress="return solonumero(event)" onblur="validarDocumento()"/>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" autofocus maxlength="15" onkeypress="return soloLetras(event);"/>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" autofocus maxlength="15" onkeypress="return soloLetras(event);"/>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña" required maxlength="20" onkeypress="return contra(event);" onblur="validarTamaño1()"/>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" id="pass2" name="pass2" class="form-control" placeholder="Repetir Contraseña" required maxlength="20" onkeypress="return contra(event);" onblur="return comprobarClave()"/>
        </div>
        
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <?php echo $this->session->flashdata('login_error'); ?>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </div>

    <!-- javascripts -->
  <script src="<?= base_url('');?>js/jquery.js"></script>
  <script src="<?= base_url('');?>js/jquery-ui-1.10.4.min.js"></script>
  <script src="<?= base_url('');?>js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="<?= base_url('');?>js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="<?= base_url('');?>js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="<?= base_url('');?>js/jquery.scrollTo.min.js"></script>
  <script src="<?= base_url('');?>js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="<?= base_url('');?>assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="<?= base_url('');?>js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="<?= base_url('');?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="<?= base_url('');?>js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="<?= base_url('');?>js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?= base_url('');?>assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?= base_url('');?>js/calendar-custom.js"></script>
    <script src="<?= base_url('');?>js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?= base_url('');?>js/jquery.customSelect.min.js"></script>
    <script src="<?= base_url('');?>assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="<?= base_url('');?>js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?= base_url('');?>js/sparkline-chart.js"></script>
    <script src="<?= base_url('');?>js/easy-pie-chart.js"></script>
    <script src="<?= base_url('');?>js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= base_url('');?>js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url('');?>js/xcharts.min.js"></script>
    <script src="<?= base_url('');?>js/jquery.autosize.min.js"></script>
    <script src="<?= base_url('');?>js/jquery.placeholder.min.js"></script>
    <script src="<?= base_url('');?>js/gdp-data.js"></script>
    <script src="<?= base_url('');?>js/morris.min.js"></script>
    <script src="<?= base_url('');?>js/sparklines.js"></script>
    <script src="<?= base_url('');?>js/charts.js"></script>
    <script src="<?= base_url('');?>js/jquery.slimscroll.min.js"></script>
  
<script>
        $(document).ready(function (){
          $('.solo-numero').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
          });
        });
 </script>


<script type="text/javascript">
   validarDocumento  = function() {
      numero = document.getElementById('cedula').value;
    /* alert(numero); */
      var suma = 0;
      var residuo = 0;
      var pri = false;
      var pub = false;
      var nat = false;
      var numeroProvincias = 22;
      var modulo = 11;
      /* Verifico que el campo no contenga letras */
      var ok=1;
      for (i=0; i<numero.length && ok==1 ; i++){
         var n = parseInt(numero.charAt(i));
         if (isNaN(n)) ok=0;
      }
      if (ok==0){
         alert("No puede ingresar caracteres en el número");
         document.forms[0].cedula.value="";
         return false;
      }
      if (numero.length < 10 && numero.length >0 ){
         alert('El número ingresado no es válido');
         document.forms[0].cedula.value="";
         return false;
      }
      /* Los primeros dos digitos corresponden al codigo de la provincia */
      provincia = numero.substr(0,2);
      if (provincia < 1 || provincia > numeroProvincias){
         //alert('El código de la provincia (dos primeros dígitos) es inválido');
         document.forms[0].cedula.value="";
     return false;
      }
      /* Aqui almacenamos los digitos de la cedula en variables. */
      d1  = numero.substr(0,1);
      d2  = numero.substr(1,1);
      d3  = numero.substr(2,1);
      d4  = numero.substr(3,1);
      d5  = numero.substr(4,1);
      d6  = numero.substr(5,1);
      d7  = numero.substr(6,1);
      d8  = numero.substr(7,1);
      d9  = numero.substr(8,1);
      d10 = numero.substr(9,1);
      /* El tercer digito es: */
      /* 9 para sociedades privadas y extranjeros   */
      /* 6 para sociedades publicas */
      /* menor que 6 (0,1,2,3,4,5) para personas naturales */
      if (d3==7 || d3==8){
         alert('El tercer dígito ingresado es inválido');
         document.forms[0].cedula.value="";
         return false;
      }
      /* Solo para personas naturales (modulo 10) */
      if (d3 < 6){
         nat = true;
         p1 = d1 * 2;  if (p1 >= 10) p1 -= 9;
         p2 = d2 * 1;  if (p2 >= 10) p2 -= 9;
         p3 = d3 * 2;  if (p3 >= 10) p3 -= 9;
         p4 = d4 * 1;  if (p4 >= 10) p4 -= 9;
         p5 = d5 * 2;  if (p5 >= 10) p5 -= 9;
         p6 = d6 * 1;  if (p6 >= 10) p6 -= 9;
         p7 = d7 * 2;  if (p7 >= 10) p7 -= 9;
         p8 = d8 * 1;  if (p8 >= 10) p8 -= 9;
         p9 = d9 * 2;  if (p9 >= 10) p9 -= 9;
         modulo = 10;
      }
      /* Solo para sociedades publicas (modulo 11) */
      /* Aqui el digito verficador esta en la posicion 9, en las otras 2 en la pos. 10 */
      else if(d3 == 6){
         pub = true;
         p1 = d1 * 3;
         p2 = d2 * 2;
         p3 = d3 * 7;
         p4 = d4 * 6;
         p5 = d5 * 5;
         p6 = d6 * 4;
         p7 = d7 * 3;
         p8 = d8 * 2;
         p9 = 0;
      }
      /* Solo para entidades privadas (modulo 11) */
      else if(d3 == 9) {
         pri = true;
         p1 = d1 * 4;
         p2 = d2 * 3;
         p3 = d3 * 2;
         p4 = d4 * 7;
         p5 = d5 * 6;
         p6 = d6 * 5;
         p7 = d7 * 4;
         p8 = d8 * 3;
         p9 = d9 * 2;
      }
      suma = p1 + p2 + p3 + p4 + p5 + p6 + p7 + p8 + p9;
      residuo = suma % modulo;
      /* Si residuo=0, dig.ver.=0, caso contrario 10 - residuo*/
      digitoVerificador = residuo==0 ? 0: modulo - residuo;
      /* ahora comparamos el elemento de la posicion 10 con el dig. ver.*/
      if (pub==true){
         if (digitoVerificador != d9){
            alert('La cédula del usuario es incorrecta.');
            document.forms[0].cedula.value="";
            return false;
         }
         /* El ruc de las empresas del sector publico terminan con 0001*/
         if ( numero.substr(9,4) != '0001' ){
            alert('El ruc de la empresa del sector público debe terminar con 0001');
            document.forms[0].cedula.value="";
            return false;
         }
      }
      else if(pri == true){
         if (digitoVerificador != d10){
            alert('La cédula del usuario es es incorrecta.');
            document.forms[0].cedula.value="";
            return false;
         }
         if ( numero.substr(10,3) != '001' ){
            alert('El ruc de la empresa del sector privado debe terminar con 001');
            document.forms[0].cedula.value="";
            return false;
         }
      }
      else if(nat == true){
         if (digitoVerificador != d10){
            alert('El número de cédula es incorrecto.');
            document.forms[0].cedula.value="";
            return false;
         }
         if (numero.length >10 && numero.substr(10,3) != '001' ){
            alert('El ruc de la persona natural debe terminar con 001');
            document.forms[0].cedula.value="";
            return false;
         }
      }
      return true;
   }
</script>

<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";
       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

<script>
    function solonumero(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "0123456789";
       especiales = "8-37-39-46";
       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

<script>
    validarTamaño1  = function() {
        num = document.getElementById('pass').value;
        if(num.length<6 && num.length>0){
            alert('la contraseña debe ser mayor a 5 caracteres.');
            document.forms[0].pass.value="";
            return false;
        }else{
            return true;
        }
        return true;
    }
</script>

<script>
function comprobarClave(){ 
    clave1  = document.getElementById('pass').value; 
    clave2  = document.getElementById('pass2').value;
    if (clave1 == clave2) {
       // alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo") 
    }
    else {
        alert("Las contraseñas no coindicen");
        document.forms[0].pass2.value="";
        //swal("Usuario Registrado","Ahora puedes acceder a nuestros beneficios","success");
    }
} 
</script>

<script>
    function contra(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "0123456789áéíóúabcdefghijklmnñopqrstuvwxyz@!";
       especiales = "8-37-39-46";
       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

</body>


</html>