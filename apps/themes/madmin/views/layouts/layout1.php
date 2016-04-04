<!DOCTYPE html>
<html lang="en">
<head><title>Sistem Beasiswa</title>
	<?php 
		$baseUrl = Yii::app()->theme->baseUrl; 
	?>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="vendors/jplist/html/css/jplist-custom.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-pace/pace.css">
    <link type="text/css" rel="stylesheet" href="vendors/iCheck/skins/all.css">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-notific8/jquery.notific8.min.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="css/themes/style1/orange-blue-beasiswa.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="css/themes/style1/orange-blue-beasiswa.css" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="css/style-responsive-beasiswa.css">
</head>
<body class="undefined header-static clear-cookie">
<div>
    <!--BEGIN BACK TO TOP-->

    <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>

    <!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
    <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;" class="navbar navbar-default navbar-static-top">

        <div class="navbar-header hidden-xs" style="padding: 5px">
            <a id="logo" href="index.html" >
                <img src=http://humas.ui.ac.id/sites/default/files/logo-ui-horizontal_no_frame_fordarkbackground.png width=150 height=40>
            </a>
        </div>

        <div class="topbar-main"></a>
            <ul class="nav navbar-nav navbar-top-links horizontal-menu">

                <li class="mega-menu-dropdown visible-xs" >

                    <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"> <img src=images/ui.png > &nbsp; Sistem Beasiswa UI &nbsp;<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="mega-menu-content">
                                <div class="row">
                                    <ul class="col-md-4 mega-menu-submenu">
                                        <li><h3>Home</h3></li>
                                        <li><a href="home.html"><i class="fa fa-angle-right"></i>Home</a></li>
                                    </ul>
                                    <ul class="col-md-4 mega-menu-submenu">
                                        <li><h3>Beranda</h3></li>
                                        <li><a href="beranda-pendaftar.html"><i class="fa fa-angle-right"></i>Pendaftar</a></li>
                                        <li><a href="beranda-pendonor.html"><i class="fa fa-angle-right"></i>Pendonor</a></li>
                                        <li><a href="beranda-pengelola.html"><i class="fa fa-angle-right"></i>Pengelola</a></li>
                                    </ul>
                                    <ul class="col-md-4 mega-menu-submenu">
                                        <li><h3>Bantuan</h3></li>
                                        <li><a href="bantuan-akses.html"><i class="fa fa-angle-right"></i>Akses dan user Account</a></li>
                                        <li><a href="bantuan-pendaftaran.html"><i class="fa fa-angle-right"></i>Pendaftaran</a></li>
                                        <li><a href="bantuan-faw.html"><i class="fa fa-angle-right"></i>FAQ</a></li>
                                        <li><a href="bantuan-dokumentasi.html"><i class="fa fa-angle-right"></i>Dokumentasi</a></li>
                                        <li><a href="bantuan-kontak.html"><i class="fa fa-angle-right"></i>Kontak Pengelola</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>


                <li class="hidden-xs"><a href="home.html">Home</a></li>
                <li class="hidden-xs">
                    <a data-toggle="dropdown" class="dropdown-toggle">
                        Beranda &nbsp; <i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="beranda-pendaftar.html">Pendaftar</a></li>
                        <li><a href="beranda-pengelola.html">Pengelola</a></li>
                        <li><a href="beranda-pendonor.html">Pendonor</a></li>
                    </ul>
                </li>
                <li  class="hidden-xs">
                    <a data-toggle="dropdown" class="dropdown-toggle">Bantuan &nbsp; <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="bantuan-akses.html"><i class="fa fa-angle-right"></i>Akses dan user Account</a></li>
                        <li><a href="bantuan-pendaftaran.html"><i class="fa fa-angle-right"></i>Pendaftaran</a></li>
                        <li><a href="bantuan-faw.html"><i class="fa fa-angle-right"></i>FAQ</a></li>
                        <li><a href="bantuan-dokumentasi.html"><i class="fa fa-angle-right"></i>Dokumentasi</a></li>
                        <li><a href="bantuan-kontak.html"><i class="fa fa-angle-right"></i>Kontak Pengelola</a></li>
                    </ul>
                </li>




            </ul>
            <ul class="nav navbar-nav navbar-top-links horizontal-menu navbar-right">

                <li class="dropdown hidden-xs"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li><p>You have 14 new notifications</p></li>
                        <li>
                            <div class="dropdown-slimscroll">
                                <ul>
                                    <li><a href="#"><span class="label label-blue"><i class="fa fa-comment"></i></span>New Comment<span class="pull-right text-muted small">4 mins ago</span></a></li>
                                    <li><a href="#"><span class="label label-violet"><i class="fa fa-twitter"></i></span>3 New Followers<span class="pull-right text-muted small">12 mins ago</span></a></li>
                                    <li><a href="#"><span class="label label-pink"><i class="fa fa-envelope"></i></span>Message Sent<span class="pull-right text-muted small">15 mins ago</span></a></li>
                                    <li><a href="#"><span class="label label-green"><i class="fa fa-tasks"></i></span>New Task<span class="pull-right text-muted small">18 mins ago</span></a></li>
                                    <li><a href="#"><span class="label label-yellow"><i class="fa fa-upload"></i></span>Server Rebooted<span class="pull-right text-muted small">19 mins ago</span></a></li>
                                    <li><a href="#"><span class="label label-green"><i class="fa fa-tasks"></i></span>New Task<span class="pull-right text-muted small">2 days ago</span></a></li>
                                    <li><a href="#"><span class="label label-pink"><i class="fa fa-envelope"></i></span>Message Sent<span class="pull-right text-muted small">5 days ago</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="last"><a href="#" class="text-right">See all alerts</a></li>
                    </ul>
                </li>



                <li class="dropdown topbar-user  hidden-xs"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">John Doe</span>&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-user pull-right">
                        <li><a href="extra-profile.html"><i class="fa fa-user"></i>My Profile</a></li>
                        <li><a href="page-calendar.html"><i class="fa fa-calendar"></i>My Calendar</a></li>
                        <li><a href="email-inbox.html"><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a></li>
                        <li><a href="#"><i class="fa fa-tasks"></i>My Tasks<span class="badge badge-success">7</span></a></li>
                        <li class="divider"></li>
                        <li><a href="extra-lock-screen.html"><i class="fa fa-lock"></i>Lock Screen</a></li>
                        <li><a href="extra-signin.html"><i class="fa fa-key"></i>Log Out</a></li>
                    </ul>
                </li>


            </ul>
        </div>
    </nav>
</div>
<!--END TOPBAR-->
<div id="wrapper">
    <!--BEGIN SIDEBAR MENU-->
    <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side" style="min-height: 100%">
        <div class="sidebar-collapse menu-scroll collapse in" style="ovefrlow: initial;">
            <ul id="side-menu" class="nav">
                <li class="user-panel">
                    <span class="forced-title">Beasiswa Sampoerna</span>
                    <!--<div class="thumb"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" alt="" class="img-circle"/></div>
                    <div class="info"><p>John Doe</p>
                        <ul class="list-inline list-unstyled">
                            <li><a href="extra-profile.html" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a></li>
                            <li><a href="email-inbox.html" data-hover="tooltip" title="Mail"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="#" data-hover="tooltip" title="Setting" data-toggle="modal" data-target="#modal-config"><i class="fa fa-cog"></i></a></li>
                            <li><a href="extra-signin.html" data-hover="tooltip" title="Logout"><i class="fa fa-sign-out"></i></a></li>
                        </ul>
                    </div>-->
                    <div class="clearfix"></div>
                </li>
                <li><a href="beasiswa-info.html"><i class="fa fa-tachometer fa-fw">
                            <div class="icon-bg bg-orange"></div>
                        </i><span class="menu-title">Informasi</span></a></li>
                <li><a href="beasiswa-pendaftaran.html"><i class="fa fa-laptop fa-fw">
                            <div class="icon-bg bg-pink"></div>
                        </i><span class="menu-title">Pendaftaran</span></a></li>
                <li><a href="beasiswa-aktivitas.html"><i class="fa fa-slack fa-fw">
                            <div class="icon-bg bg-green"></div>
                        </i><span class="menu-title">Aktivitas</span></a></li>
                <!--li.charts-sum<div id="ajax-loaded-data-sidebar"></div>--></ul>
        </div>
    </nav>
    <!--END SIDEBAR MENU-->
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">Informasi</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a href="beranda-copy.html">Beranda</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                <li><a href="#">Beasiswa Sampoerna</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                <li class="active">Informasi</li>
            </ol>
            <div class="clearfix"></div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
        <!--BEGIN CONTENT-->
        <div class="page-content">
            <div class="row">
                <div class="panel panel-white">
                    <div class="panel-heading">Informasi Beasiswa</div>
                    <div class="panel-body pan">
                        <form action="#" class="form-horizontal form-bordered  dashed form-row-stripped">
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Nama Beasiswa :</label>
                                    <div class="col-md-8">Sampoerna</div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary">Daftar</button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Deskripsi :</label>
                                    <div class="col-md-10">Beasiswa untuk lalalala</div>
                                </div>

                                <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Periode Pendaftaran:</label>
                                    <div class="col-md-10">1 Agustus 2014 - 30 Agustus 2014</div>
                                </div>

                                <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Status :</label>
                                    <div class="col-md-10">Pendaftaran masih dibuka</div>
                                </div>

                                <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Syarat dan Ketentuan :</label>
                                    <div class="col-md-10">
                                        <ol>
                                            <li>Mahasiswa S1 UI</li>
                                            <li>IPK minimal 3.00 (Skala 4)</li>
                                            <li>Tidak merokok</li>
                                            <li>Usia <= 22 tahun</li>
                                            <li>Tidak terlibat Narkoba</li>
                                        </ol>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Deskripsi :</label>
                                    <div class="col-md-10">Beasiswa untuk lalalala</div>
                                </div>


                            </div>
                        </form>
                    </div>

                    <div class="panel-heading">Informasi Pendonor</div>
                    <div class="panel-body pan">
                        <form action="#" class="form-horizontal form-bordered  dashed form-row-stripped">
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Nama Pendonor :</label>
                                    <div class="col-md-10">PT Sampoerna</div>
                                </div>



                            </div>
                        </form>
                    </div>


                    <div class="panel-heading">Dokumen Pendukung</div>
                    <div class="panel-body pan">
                        <form action="#" class="form-horizontal form-bordered  dashed form-row-stripped">
                            <div class="form-body">
                                <div class="form-group">
                                    <ol>
                                        <li>lbasdlasbdsa</li>
                                        <li>lbasdlasbdsa</li>
                                    </ol>
                                </div>



                            </div>
                        </form>
                    </div>

                </div>




            </div>
        </div>

<?php echo $content; ?>
        <!--END CONTENT-->
        <!--END PAGE WRAPPER--></div>
    <!--BEGIN FOOTER-->
    <div id="footer">
        <p style="text-align: left" >
            &copy; Copyright 2014 <a href='http://ui.ac.id'>Universitas Indonesia</a> -
            <a href="home.html">Home</a> |
            <a href="beranda.html">Beranda</a> |
            <a href="bantuan.html">Bantuan</a> |
            <a href="logout.html">Logout</a>
        </p>

    </div>
    <!--END FOOTER-->
</div>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!--loading bootstrap js-->

<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="vendors/iCheck/icheck.min.js"></script>
<script src="vendors/iCheck/custom.min.js"></script>
<script src="vendors/jquery-notific8/jquery.notific8.min.js"></script>
<script src="vendors/jquery-highcharts/highcharts.js"></script>

<script src="vendors/jquery-pace/pace.min.js"></script>
<script src="vendors/holder/holder.js"></script>
<script src="vendors/responsive-tabs/responsive-tabs.js"></script>
<script src="vendors/jquery-news-ticker/jquery.newsTicker.min.js"></script>

<!--CORE JAVASCRIPT-->
<script src="js/jquery-beasiswa.menu.js"></script>
<script src="js/main-beasiswa.js"></script>
<script src="vendors/jplist/html/js/vendor/modernizr.min.js"></script>
<script src="vendors/jplist/html/js/jplist.min.js"></script>
<script src="js/jplist.js"></script>

<!--LOADING SCRIPTS FOR PAGE-->
<script type="text/javascript">(function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-XXXXXX-XX', 'auto');
    ga('send', 'pageview');


</script>
</body>
</html>
