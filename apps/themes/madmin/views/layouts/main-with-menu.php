<!DOCTYPE html>
<html lang="en">
<head><title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php 
        $baseUrl = Yii::app()->theme->baseUrl; 
	?>
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
	<!-- END -->
	
	
	<!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/jquery-pace/pace.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/iCheck/skins/all.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/vendors/jquery-notific8/jquery.notific8.min.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/css/themes/style1/orange-blue-beasiswa.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/css/themes/style1/orange-blue-beasiswa.css" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style-responsive-beasiswa.css">
</head>
<body class="undefined header-static clear-cookie">
<div>
    <!--BEGIN BACK TO TOP-->

    <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>

    <!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
    <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;" class="navbar navbar-default navbar-static-top">

        <div class="navbar-header hidden-xs" style="padding: 5px">
            <a id="logo" href="/apps" >
                <img src="<?php echo $baseUrl ?>/images/logo-ui-horizontal_no_frame_fordarkbackground.png">
            </a>
        </div>

        <div class="topbar-main"></a>
            <ul class="nav navbar-nav navbar-top-links horizontal-menu" style="margin-top:0px">

                <li class="mega-menu-dropdown visible-xs" style="height:50px">

                    <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"> <img src="<?php echo $baseUrl; ?>/images/ui.png" > &nbsp; Sistem Informasi Beasiswa UI &nbsp;<i class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">
                        <li>
                            <div class="mega-menu-content">
                                <div class="row">
                                    <ul class="col-md-4 mega-menu-submenu">
                                        <li><h3>Home</h3></li>
                                        <li><a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'>Home</a></li>
                                    </ul>
                                    <ul class="col-md-4 mega-menu-submenu">
                                        <li><h3>Beranda</h3></li>
                                        <li>
											<a href='<?php echo Yii::app()->createUrl('/site/beranda', array('action'=>'daftarPaketBeasiswa')); ?>'>Beranda</a>
										</li>
                                        
                                    </ul>
									<!--
                                    <ul class="col-md-4 mega-menu-submenu">
                                        <li><h3>Bantuan</h3></li>
                                        <li><a href='<?php //echo Yii::app()->createUrl('/site/index'); ?>'>Akses dan user Account</a></li>
                                        <li><a href='<?php //echo Yii::app()->createUrl('/site/index'); ?>'>Pendaftaran</a></li>
                                        <li><a href='<?php //echo Yii::app()->createUrl('/site/index'); ?>'>FAQ</a></li>
                                        <li><a href='<?php //echo Yii::app()->createUrl('/site/index'); ?>'>Dokumentasi</a></li>
                                        <li><a href='<?php //echo Yii::app()->createUrl('/site/index'); ?>'>Kontak Pengelola</a></li>
                                    </ul>
									-->
							<ul class="col-md-4 mega-menu-submenu">
                                        <li><h3>Pengguna</h3></li>
								<li><a href='<?php echo Yii::app()->createUrl('/login/logout'); ?>'>Log Out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <!--<?php 
                    $this->widget('zii.widgets.CMenu', $this->menu);
                ?>-->

                <li class="hidden-xs"><a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'>Home</a></li>
                <li class="hidden-xs">
					<a href='<?php echo Yii::app()->createUrl('/site/beranda', array('action'=>'daftarPaketBeasiswa')); ?>'>Beranda</a>
                </li>
			<!--
                <li  class="hidden-xs">
                    <a data-hover="dropdown" class="dropdown-toggle">Bantuan &nbsp; <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href='<?php //echo Yii::app()->createUrl('/site/index'); ?>'>Akses dan user Account</a></li>
                        <li><a href='<?php //echo Yii::app()->createUrl('/site/index'); ?>'>Pendaftaran</a></li>
                        <li><a href='<?php //echo Yii::app()->createUrl('/site/index'); ?>'>FAQ</a></li>
                        <li><a href='<?php //echo Yii::app()->createUrl('/site/index'); ?>'>Dokumentasi</a></li>
                        <li><a href='<?php //echo Yii::app()->createUrl('/site/index'); ?>'>Kontak Pengelola</a></li>
                    </ul>
                </li>
			-->
				
				<?php
					
					if (Yii::app()->user->isSuperuser) {
						
						echo "<li class=\"hidden-xs\">";
						echo "<a data-hover=\"dropdown\" class=\"dropdown-toggle\">";
                        echo "Role &nbsp; <i class=\"fa fa-angle-down\"></i>";
						echo "</a>";
						
						$superuserName = Rights::module()->superuserName;
						$all_roles=new RAuthItemDataProvider('roles', array('type'=>2));
						$datas=$all_roles->fetchData();
						$data = CHtml::listData($datas,'name','name');		
						
							echo "<ul class=\"dropdown-menu\">";	
								foreach($data as $speData){
									$roleName = $data[$speData];
									if ($data[$speData]!=$superuserName) {
										$roleProperty = Yii::app()->params['userRole'][$roleName];
										$roleUrl = $roleProperty['roleUrl'];
										echo "<li>";
										echo "<a href=\"".Yii::app()->createUrl($roleUrl)."\">";
										echo ucfirst($roleName);
										echo "</a>";
										echo "</li>";
									}
								}
							echo "</ul>";
						
						echo "</li>";
				}else{
				
					$roles=Rights::getAssignedRoles(Yii::app()->user->Id);
					$rolesCount = count($roles);
					//echo $rolesCount;
					
					$superuserName = Rights::module()->superuserName;
					if ($rolesCount > 1) {	
						
						echo "<li class=\"hidden-xs\">";
						echo "<a data-hover=\"dropdown\" class=\"dropdown-toggle\">";
						echo "Role &nbsp; <i class=\"fa fa-angle-down\"></i>";
						echo "</a>";
						
							echo "<ul class=\"dropdown-menu\">";	
							foreach ($roles as $role){
								
								$roleName = $role->name;
								if ($roleName!=$superuserName) {
									$roleProperty = Yii::app()->params['userRole'][$roleName];
									$roleUrl = $roleProperty['roleUrl'];
									echo "<li>";
									echo "<a href=\"".Yii::app()->createUrl($roleUrl)."\">";
									echo ucfirst($roleName);
									echo "</a>";
									echo "</li>";
								}
							
							}
							echo "</ul>";
					
						echo "</li>";
					
					}
				
				}
			?>
				
				
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


                <!--<?php 
                    $this->widget('zii.widgets.CMenu', $this->menu_profile);
                ?>-->
                <li class="dropdown topbar-user  hidden-xs">
		    <a data-hover="dropdown" href="#" class="dropdown-toggle">
<!--
		      <img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">
-->

					<?php

						if (isset(Yii::app()->user->casAttr['attributes']['nama'])) {	
							echo Yii::app()->user->casAttr['attributes']['nama']." sebagai ". strtoupper(Yii::app()->session['role']);
						}elseif (isset(Yii::app()->user->casAttr['attributes']['ldap_cn'])) {	
							echo Yii::app()->user->casAttr['attributes']['ldap_cn']." sebagai ". strtoupper(Yii::app()->session['role']); 
						}else{
							echo strtoupper(Yii::app()->session['role']); 
						}
						
					
					?>
                    </span>&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-user pull-right">
<!--
                        <li><a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'><i class="fa fa-user"></i>My Profile</a></li>
                        <li><a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'><i class="fa fa-calendar"></i>My Calendar</a></li>
                        <li><a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a></li>
                        <li><a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'><i class="fa fa-tasks"></i>My Tasks<span class="badge badge-success">7</span></a></li>
                        <li class="divider"></li>
                        <li><a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'><i class="fa fa-lock"></i>Lock Screen</a></li>
-->
                        <li><a href='<?php echo Yii::app()->createUrl('/login/logout'); ?>'><i class="fa fa-key"></i>Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!--END TOPBAR-->
<div id="wrapper">
	<?php echo $this->renderPartial('/layouts/_left-menu', array('baseUrl'=>$baseUrl, 'idPaket' => $this->id_paket)); ?>
	<?php
	
	echo $content; 
	
	?>
    <!--BEGIN FOOTER-->
    <div id="footer">
        <p style="text-align: left" >
            &copy; Copyright 2014 <a href='http://ui.ac.id'>Universitas Indonesia</a> -
            <a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'>Home</a> |
            <a href='<?php if (Yii::app()->session['role'] == 'pendaftar') {
                                echo Yii::app()->createUrl('/site/berandapendaftar');
                            }
                            else if (Yii::app()->session['role'] == 'kemahasiswaan' | Yii::app()->session['role'] == 'keuangan') {
                                echo Yii::app()->createUrl('/site/berandakemahasiswaan');
                            }
                            else echo Yii::app()->createUrl('/site/beranda');
                             ?>'>Beranda</a> |
            <a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'>Bantuan</a> |
            <a href='<?php echo Yii::app()->createUrl('/login/logout'); ?>'>Logout</a>
        </p>

    </div>
    <!--END FOOTER-->
</div>
<script src="<?php echo $baseUrl; ?>/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo $baseUrl; ?>/js/jquery-ui.js"></script>
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
<!--
<script src="<?php echo $baseUrl; ?>/js/form-components.js"></script>
-->
<!-- END OF GW -->


<!--CORE JAVASCRIPT-->
<!--
<script src="<?php echo $baseUrl; ?>/js/jquery-beasiswa.menu.js"></script>
<script src="<?php echo $baseUrl; ?>/js/main-beasiswa.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/jplist/html/js/vendor/modernizr.min.js"></script>
<script src="<?php echo $baseUrl; ?>/vendors/jplist/html/js/jplist.min.js"></script>
<script src="<?php echo $baseUrl; ?>/js/jplist.js"></script>
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
