<!--BEGIN SIDEBAR MENU-->
<nav id="sidebar" role="navigation" class="navbar-default navbar-static-side hidden-sm hidden-xs" style="min-height: 100%">
	<h4>
		<a class="submenu-title" href="#" data-parent="#sidebar" data-toggle="collapse" data-target="#desktop-paket-menu" aria-expanded="true" aria-controls="desktop-paket-menu">
			Paket Beasiswa
			<span class="pull-right"><i class="fa fa-angle-down"></i></span>
		</a>
	</h4>
	<ul id="desktop-paket-menu" class="side-menu nav collapse in">
		<!--
		<li class="user-panel">
			<div class="thumb"><img class="img-circle" alt="" src="<?php echo $baseUrl ?>/images/icons/<?php echo Yii::app()->session['role'] ?>.png"></div>
			<div class="info"><p><?php //echo ucfirst(Yii::app()->session['role']) ?></p></div>
			<div class="clearfix"></div>
		</li>
		-->
		<?php
			$critPaket = new CDbCriteria();
			$critPaket->condition = 'id=:idPaketBeasiswa';
			$critPaket->params = array(':idPaketBeasiswa'=>$idPaket);
			$critPaketData = PaketBeasiswa::model()->find($critPaket);

			$roleMenus = Menu::model()->getMenuByRole(Yii::app()->session['roleName']);
			//echo "<pre>";print_r($roleMenus);die;
			$params = array('idPaket'=>$idPaket);
			foreach ($roleMenus as $menu) {
				//echo "menu : ".$menu['id'];
				//echo "<br />";
				if($critPaketData->seleksi_diluar != "" && strtolower($menu['id']) == "32")
				{	
					echo $menu['before_tag'];
					echo "<a href='".$critPaketData->url_seleksidiluar."' target='_blank'>";
					echo $menu['label'];
					echo "</a>";
					echo $menu['after_tag'];
					
				}else{
					echo $menu['before_tag'];
					echo "<a href=\"".Yii::app()->createUrl($menu['url'], $params)."\">";
					echo $menu['label'];
					echo "</a>";
					echo $menu['after_tag'];
				}
				
			}
			
		?>
	</ul>
</nav>