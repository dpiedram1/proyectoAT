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
    <!-- full calendar css-->
    <link href="<?= base_url('');?>assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="<?= base_url('');?>assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?= base_url('');?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?= base_url('');?>css/owl.carousel.css" type="text/css">
    <link href="<?= base_url('');?>css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?= base_url('');?>css/fullcalendar.css">
    <link href="<?= base_url('');?>css/widgets.css" rel="stylesheet">
    <link href="<?= base_url('');?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('');?>css/style-responsive.css" rel="stylesheet" />
    <link href="<?= base_url('');?>css/xcharts.min.css" rel=" stylesheet">
    <link href="<?= base_url('');?>css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
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
              <li><a class="" href="<?= base_url('');?>index.php/User/grafica_temp">Sensor A</a></li>
              <li><a class="" href="<?= base_url('');?>index.php/User/grafica_temp2">Sensor B</a></li>
              <li><a class="" href="<?= base_url('');?>form_validation.html">Sensor C</a></li>
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

