<!DOCTYPE html>
<?php
	$baseUrl = Yii::app()->theme->baseUrl; 
	//Yii::app()->bootstrap->register();
?>
<html lang="en">
<head><title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <link rel="shortcut icon" href="<?php echo $baseUrl; ?>/images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $baseUrl; ?>/images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $baseUrl; ?>/images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $baseUrl; ?>/images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/css/google-font-open-sans-italic.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/css/google-font-oswald.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/bootstrap/css/bootstrap.min.css">
    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/jplist/html/css/jplist-custom.css">
    
	
	<!-- GW -->
	<link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/bootstrap-colorpicker/css/colorpicker.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/bootstrap-datepicker/css/datepicker.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/bootstrap-clockface/css/clockface.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/bootstrap-switch/css/bootstrap-switch.css">
	<link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/jquery-tablesorter/themes/blue/style-custom.css">
	<!-- END -->
	
	
	<!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/jquery-pace/pace.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/iCheck/skins/all.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/jquery-notific8/jquery.notific8.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/bootstrap-tabdrop/tabdrop.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/css/themes/style1/orange-blue-beasiswa.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/css/themes/style1/orange-blue-beasiswa.css" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style-responsive-beasiswa.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/css/mobile-beasiswa.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/css/treeview.css">
</head>
<body class="header-static clear-cookie">
<div class="mobile-menu">
	<?php 
	if(isset($this->id_paket)) 
		echo $this->renderPartial('/layouts/_mobile-menu', array('baseUrl' => $baseUrl, 'idPaket' => $this->id_paket));
	else
		echo $this->renderPartial('/layouts/_mobile-menu', array('baseUrl' => $baseUrl));
	?>
</div>
<div class="desktop-menu">
    <!--BEGIN BACK TO TOP-->
    <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
    <!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
    <nav id="topbar" role="navigation" class="navbar navbar-default navbar-static-top">

        <div class="navbar-header">
            <a id="logo" href="<?php echo Yii::app()->baseUrl ?>">
                <img src="<?php echo $baseUrl ?>/images/logo-ui-horizontal_no_frame_fordarkbackground.png">
            </a>
        </div>

        <div class="topbar-main"></a>
            <ul class="nav navbar-nav navbar-top-links horizontal-menu">

               

                <?php
				//$this->widget('zii.widgets.CMenu', $this->menu);
                ?>

                <li><a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a></li>
               <!---
		 <li  class="hidden-xs">
                    <a data-hover="dropdown" class="dropdown-toggle">Komplain &nbsp; <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href='<?php echo Yii::app()->createUrl('/site/searchKomplain'); ?>'>Membuat Komplain</a></li>
                        <li><a href='<?php //echo Yii::app()->createUrl('/site/index'); ?>'>Melihat History</a></li>
                    </ul>
                </li>
		-->
				
            </ul>
            <ul class="nav navbar navbar-top-links horizontal-menu navbar-right mbn">

<!--
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
-->
                <?php 
                //$this->widget('zii.widgets.CMenu', $this->menu_profile);
                ?>
                <?php echo $this->renderPartial('/layouts/_desktop-menu-user', array('baseUrl' => $baseUrl)); ?>
            </ul>
        </div>
    </nav>
</div>
<!--END TOPBAR-->
<div id="wrapper">
    <?php 
	if(isset($this->id_paket)) 
		echo $this->renderPartial('/layouts/_left-menu-paket', array('baseUrl'=>$baseUrl, 'idPaket' => $this->id_paket)); 
	?>
	<?php echo $content; ?>
    <!--BEGIN FOOTER-->
    <div id="footer">
		<div class="row">
			<div class="col-sm-12">
				<a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'>Home</a> |
				<a href='<?php if (Yii::app()->session['role'] == 'pendaftar') {
										echo Yii::app()->createUrl('/site/berandapendaftar');
									}
									else if (Yii::app()->session['role'] == 'kemahasiswaan' | Yii::app()->session['role'] == 'keuangan') {
										echo Yii::app()->createUrl('/site/berandakemahasiswaan');
									}
									else echo Yii::app()->createUrl('/site/beranda');
									 ?>'>Paket Beasiswa</a> |
				<a href='<?php echo Yii::app()->createUrl('/login/logout'); ?>'>Logout</a>
			</div>
		</div>
		<div class="row mtm">
			<div class="col-sm-12">Hak Cipta &copy; <a href='http://ui.ac.id'>Universitas Indonesia</a></div>
		</div>
    </div>
    <!--END FOOTER-->
</div>

<script src="<?php echo $baseUrl; ?>/js/jquery-migrate-1.2.1.min.js"></script>
<!-- Ini dimatikan karena bentrok dengan Widgets bawaan nya Yii
<script src="<?php //echo $baseUrl; ?>/js/jquery-ui.js"></script>
-->
<script src="<?php echo $baseUrl; ?>/js/mobile-beasiswa.js"></script>

<!--loading bootstrap js-->

<script src="<?php echo $baseUrl; ?>/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="<?php echo $baseUrl; ?>/js/html5shiv.js"></script>
<script src="<?php echo $baseUrl; ?>/js/respond.min.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/iCheck/icheck.min.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/iCheck/custom.min.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/jquery-notific8/jquery.notific8.min.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/jquery-highcharts/highcharts.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/jquery-pace/pace.min.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/holder/holder.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/responsive-tabs/responsive-tabs.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/jquery-news-ticker/jquery.news-ticker.js"></script>

<!-- GW -->

<script src="<?php echo $baseUrl; ?>/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/moment/moment.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/bootstrap-clockface/js/clockface.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/jquery-maskedinput/jquery-maskedinput.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/charCount.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/jquery-tablesorter/jquery.tablesorter.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/bootstrap-tabdrop/tabdrop.js"></script>
<script>$(function(){$('.nav-pills, .nav-tabs').tabdrop()})</script>
<script src="<?php echo $baseUrl; ?>/js/table-advanced.js"></script>
<!--
<script src="<?php //echo $baseUrl; ?>/js/form-components.js"></script>
-->
<!-- END OF GW -->


<!--CORE JAVASCRIPT-->
<!--
<script src="<?php //echo $baseUrl; ?>/js/jquery-beasiswa.menu.js"></script>
<script src="<?php //echo $baseUrl; ?>/js/main-beasiswa.js"></script>
<script src="<?php //echo $baseUrl; ?>/vendors/jplist/html/js/vendor/modernizr.min.js"></script>
<script src="<?php //echo $baseUrl; ?>/vendors/jplist/html/js/jplist.min.js"></script>
<script src="<?php //echo $baseUrl; ?>/js/jplist.js"></script>
-->
<!--LOADING SCRIPTS FOR PAGE-->
<!--
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
-->
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
