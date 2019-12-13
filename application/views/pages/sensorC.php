<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Sensores</title>

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('');?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?= base_url('');?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?= base_url('');?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?= base_url('');?>css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?= base_url('');?>css/widgets.css" rel="stylesheet">
    <link href="<?= base_url('');?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('');?>css/style-responsive.css" rel="stylesheet" />

    <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
    
    
    <script>
        var resp = [];
        var time = new Date;
        var valorY;
    </script>
    
    <script type="text/javascript">
        function crearCadena(json){
            var parsed = JSON.parse(json);
            var arr=[];
            for(var x in parsed){
                arr.push(parsed[x]);
            }
            return arr;
            }
    </script>
    
        <script src="<?= base_url('');?>js/jquery.js"></script>
        <script>
        var count = -1;
        var abc;
        $(document).ready(function(){
            
            var refreshId = setInterval(function(){
                count++;
                $('#timeval').load('<?= base_url('');?>index.php/User/obtenerValorC/'+count);
                abc = document.getElementById('timeval');
                var a = abc.innerHTML.split(",");
                var tiempo = a[1].split(":");
                time.setHours(tiempo[0],tiempo[1],tiempo[2]);
                valorY = parseInt(a[0]);
                //resp.push({
		//	x: time.getTime(),
		//	y: valorY
		//});
                }, 2000);
        });
        </script>
        
        <script>
        $(document).ready(function(){
            var refreshId = setInterval(function(){
                $('#timeval2').load('<?= base_url('');?>index.php/User/generarRandomC');
            }, 2000);
            
            $("#stop").click(function()
            {
                clearInterval(refreshId);
            });
        });
        </script>
        
        <div align="center" hidden="true" id="timeval"></div>
        <div align="center" id="timeval2"></div>
        
<script>
window.onload = function () {

var dataPoints1 = [];

var options = {
	title: {
		text: "Sensor C"
	},
	axisX: {
		title: "Actualizado cada 2 segundos"
	},
	axisY: {
		suffix: "unidades",
		includeZero: false,
                gridColor: "lightblue"
	},
	toolTip: {
		shared: true
	},
	legend: {
		cursor: "pointer",
		verticalAlign: "top",
		fontSize: 22,
		fontColor: "dimGrey",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "line",
		xValueType: "dateTime",
		yValueFormatString: "###.00unidades",
		xValueFormatString: "hh:mm:ss TT",
		showInLegend: true,
		name: "Turbine 1",
		dataPoints: dataPoints1
	}]
};

var chart = $("#chartContainer").CanvasJSChart(options);

function toggleDataSeries(e) {
	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	e.chart.render();
}

var updateInterval = 2000;
// initial value
var yValue1 = 0;

function updateChart(count) {
	count = count || 1;
	var deltaY1;
        
	for (var i = 0; i < count; i++) {
		//time.setTime(time.getTime() + updateInterval);
		deltaY1 = -1 + Math.random() * (1 + 1);

		// adding random value and rounding it to two digits. 
		yValue1 = Math.round((yValue1 + deltaY1) * 100) / 100;
                //time.setHours(tiempo[0],tiempo[1],tiempo[2]);
               // var valorY = parseInt(arreglo[i]);
		// pushing the new values
                
		//dataPoints1.push({
		//	x: time.getTime(),
		//	y: valorY
		//});
                
                dataPoints1.push({
			x: time.getTime(),
			y: valorY
		});
	}

	// updating legend text with  updated with y Value 
	options.data[0].legendText = "Sensor C : "+ valorY +" unidades";
	$("#chartContainer").CanvasJSChart().render();
}
// generates first set of dataPoints 
updateChart(10);
setInterval(function () { updateChart() }, updateInterval);

}
</script>
    
    
</head>
<body>

<!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="<?= base_url('');?>index.php/user/perfil" class="logo">Control <span class="lite">Nivel de agua</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username"><?php echo $this->session->userdata("nombres")?> <?php echo $this->session->userdata("apellidos")?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a href="<?= base_url('');?>index.php/user/logout"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="<?= base_url('');?>index.php/user/perfil">
                          <i class="icon_house_alt"></i>
                          <span>Inicio</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Sensores</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?= base_url('');?>index.php/User/sensorA">Sensor A</a></li>
              <li><a class="" href="<?= base_url('');?>index.php/User/sensorB">Sensor B</a></li>
              <li><a class="" href="<?= base_url('');?>index.php/User/sensorC">Sensor C</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Inicio</h3>
            <!--<ol class="breadcrumb">-->
            <!--  <li><i class="fa fa-home"></i><a href="<?= base_url('');?>index.php/login">Login</a></li>-->
            <!--  <li><i class="fa fa-laptop"></i>Inicio</li>-->
          </div>
        </div>
        
        <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
        <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
        <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
        
      </section>
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
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <!-- bootstrap -->
  <script src="<?= base_url('');?>js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="<?= base_url('');?>js/jquery.scrollTo.min.js"></script>
  <script src="<?= base_url('');?>js/jquery.nicescroll.js" type="text/javascript"></script>
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
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>


</body>
</html>