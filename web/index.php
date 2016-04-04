<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="sistem manajemen peran universitas indonesia">
    <meta name="keyword" content="sistem manajemen peran indonesia, role management University of Indonesia">
    <meta name="author" content="universitas indonesia">

    <title>Manajemen Peran</title>
   <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Custom Fonts -->
    <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/lora.css" rel="stylesheet" type="text/css">
    <link href="css/montserrat.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
        </div>
        <div class="container">

            <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Manajemen</span> Peran
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
<!--
                    <li>
                        <a class="page-scroll" href="#about">Definisi</a>
                    </li>
-->
<!--                    <li>
                        <a class="page-scroll" href="#daftar-beasiswa">Daftar Beasiswa</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Informasi</a>
                    </li>
<!--
                    <li>
                        <a class="page-scroll" href="#contact">Kontak</a>
                    </li>
-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
<!--
                        <h1 class="brand-heading">Grayscale</h1>
                        <p class="intro-text">A free, responsive, one page Bootstrap theme.<br>Created by Start Bootstrap.</p>
-->
                        <a href="#manajemen-peran" class="btn btn-circle page-scroll">
                            <!-- <i class="fa fa-angle-double-down animated"></i> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Daftar beasiswa Section -->
    <section id="manajemen-peran" class="content-section text-center">
	<div class="manajemen-peran-section">
            <div class="container">
		<h4>Manajemen Peran</h4>
          
                <div class="col-lg-12">
                <?php  ?>
                        <a href="<?php echo $_SERVER['REQUEST_URI']."../apps/" ?>" class="btn-lihat btn-circle-kecil">
                            <i class="glyphicon glyphicon-edit"></i>&nbsp;Masuk Manajemen Peran
                        </a>
            </div>
            </div>

        </div>
    </section>


    <!-- Definisi Section -->
    <section id="informasi" class="container content-section text-left">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2" id="definisi">
		<h3>Definisi</h3>
                
                <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                
            <div class="col-lg-12" style="text-align: center">
                        <a href="#manajemen-peran" class="btn-kecil btn-circle-kecil page-scroll">
                            <i class="fa fa-angle-up animated"></i>
                        </a>
	    </div>
        </div>
    </section>

    <!-- Map Section -->
    <!-- <div id="map"></div> -->

    <!-- Footer -->
    <footer>
        <div class="container text-center">
	    &copy; Copyright 2014 <a href=http://mahasiswa.ui.ac.id>Direktorat Kemahasiswaan</a> - <a href=http://ppsi.ui.ac.id>Kantor DSTI</a> - <a href=http://ui.ac.id>Universitas Indonesia</a>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66179834-1', 'auto');
  ga('send', 'pageview');

</script>
</body>

</html>
