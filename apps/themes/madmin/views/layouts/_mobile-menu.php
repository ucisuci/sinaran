<?php
$submenu_paket_enable = false;
if(isset($idPaket) and !empty($idPaket)) {
	$submenu_paket_enable = true;
}
//print_r($submenu_paket_enable);die();
?>
<nav id="slide-nav" role="navigation" style="margin-bottom: 0; z-index: 2;" class="navbar navbar-static-top">
	<div class="navbar-header">
		<a class="navbar-toggle">
			<img src="<?php echo $baseUrl ?>/images/logo-ui-horizontal_no_frame_fordarkbackground.png">
			<i class="fa fa-bars pull-right"></i>
		</a>
	</div>
	<div id="slidemenu">
		<div style="padding:10px 0px">
			<div class="col-xs-8">
				<div style="float:left;margin-right:10px">
					<img src="<?php echo $baseUrl ?>/images/icons/<?php echo Yii::app()->session['roleName'] ?>-medium.png">
				</div>
				<div style="float:left;color:#fff;">
					<span style="overflow:hidden">
						<?php
						if (isset(Yii::app()->user->casAttr['attributes']['nama']))
							$name = Yii::app()->user->casAttr['attributes']['nama'];
						elseif (isset(Yii::app()->user->casAttr['attributes']['ldap_cn']))
							$name = Yii::app()->user->casAttr['attributes']['ldap_cn'];
						else
							$name = ucfirst(Yii::app()->session['role']);

						echo '<b>' . $name . ' ('.Yii::app()->session['roleDescription'].')</b>';
						?>
					</span>
					<br>
					<div>
						<?php
						echo strtoupper(Yii::app()->session['role']);
						?>
					</div>
				</div>
			</div>
			<div class="col-xs-4">
				<a class="pull-right btn btn-danger" href='<?php echo Yii::app()->createUrl('/login/logout'); ?>'><i class="fa fa-key"></i>&nbsp;&nbsp;Log Out</a>
			</div>
			<div class="clearfix"></div>
		</div>

		<h4>
			<a class="submenu-title" href="#" data-parent="#slidemenu" data-toggle="collapse" data-target="#mobile-main-menu" aria-expanded="true" aria-controls="mobile-main-menu">
				Menu Utama
				<span class="pull-right"><i class="fa fa-angle-down"></i></span>
			</a>
		</h4>
		<ul class="mobile-side-menu nav <?php echo ($submenu_paket_enable) ? 'collapse' : 'collapse in' ?>" id="mobile-main-menu">
			<li><a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'><i class="fa fa-home"></i><span class="menu-title">Home</span></a></li>
			<li><a href='<?php echo Yii::app()->createUrl('/site/beranda', array('action'=>'daftarPaketBeasiswa')); ?>'><i class="fa fa-dashboard"></i><span class="menu-title">Paket Beasiswa</span></a></li>
		</ul>
		<?php if (Yii::app()->user->isSuperuser) { ?>
		<h4>
			<a class="submenu-title" href="javascript:void(0)" data-parent="#slidemenu" data-toggle="collapse" data-target="#mobile-role-menu" aria-expanded="true" aria-controls="mobile-role-menu">
				Ubah Role
				<span class="pull-right"><i class="fa fa-angle-down"></i></span>
			</a>
		</h4>
		<ul class="mobile-side-menu nav <?php echo ($submenu_paket_enable) ? 'collapse' : 'collapse in' ?>" id="mobile-role-menu">
			<?php
			$superuserName = Rights::module()->superuserName;
			$all_roles=new RAuthItemDataProvider('roles', array('type'=>2));
			$datas=$all_roles->fetchData();
			$data = CHtml::listData($datas,'name','name');

			foreach($data as $speData){
				$roleName = $data[$speData];
				if ($data[$speData] != $superuserName) {
					$roleProperty = Yii::app()->params['userRole'][$roleName];
					$roleUrl = $roleProperty['roleUrl'];
					print_r($roleUrl);
					?>
					<li>
						<!-- <a href="<?php echo Yii::app()->createUrl($roleUrl) ?>"> -->
						<a href="<?php echo Yii::app()->createUrl('site/ubahRole', array('roleName'=>$roleName)) ?>">
							<img src="<?php echo $baseUrl .'/images/icons/' . $roleName . '-small.png' ?>">
							<span class="menu-title"><?php echo ucfirst($roleName) ?></span>
						</a>
					</li>
					<?php
				}
			}
			?>
		</ul>
		<?php } else {
			$roles=Rights::getAssignedRoles(Yii::app()->user->Id);
			$rolesCount = count($roles);
				//echo $rolesCount;

			$superuserName = Rights::module()->superuserName;
			if ($rolesCount > 1) {
				?>
				<h4>
					<a class="submenu-title" href="javascript:void(0)" data-parent="#slidemenu" data-toggle="collapse" data-target="#mobile-role-menu" aria-expanded="true" aria-controls="mobile-role-menu">
						Ubah Role
						<span class="pull-right"><i class="fa fa-angle-down"></i></span>
					</a>
				</h4>
				<ul class="mobile-side-menu nav <?php echo ($submenu_paket_enable) ? 'collapse' : 'collapse in' ?>" id="mobile-role-menu">
					<?php
					foreach ($roles as $role) {
						$roleName = $role->name;
						if ($roleName!=$superuserName) {
							$roleProperty = Yii::app()->params['userRole'][$roleName];
							$roleUrl = $roleProperty['roleUrl'];
							?>
							<li>
								<!-- <a href="<?php echo Yii::app()->createUrl($roleUrl) ?>"> -->
								<a href="<?php echo Yii::app()->createUrl('site/ubahRole', array('roleName'=>$roleName)) ?>">

									<img src="<?php echo $baseUrl .'/images/icons/' . $roleName . '-small.png' ?>">
									<span class="menu-title"><?php echo ucfirst($roleName) ?></span>
								</a>
							</li>
							<?php
						}
					}
				}
			}
			?>
		</ul>

		<?php if($submenu_paket_enable) { ?>
		<h4>
			<a class="submenu-title" href="javascript:void(0)" data-parent="#slidemenu" data-toggle="collapse" data-target="#mobile-paket-beasiswa-menu" aria-expanded="true" aria-controls="mobile-paket-beasiswa-menu">
				Paket Beasiswa
				<span class="pull-right"><i class="fa fa-angle-down"></i></span>
			</a>
		</h4>
		<ul class="mobile-side-menu nav <?php echo ($submenu_paket_enable) ? 'collapse' : 'collapse in' ?>" id="mobile-paket-beasiswa-menu">

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
					?>
					<li>
						<a href="<?php echo $critPaketData->url_seleksidiluar ?>">
							<?php //echo $menu['icon']; ?>
							<span class="menu-title"><?php echo $menu['label']?></span>
						</a>
					</li>
					<?php

				}else{
					?>
					<li>
						<a href="<?php echo Yii::app()->createUrl($menu['url'], $params) ?>">
							<?php //echo $menu['icon']; ?>
							<span class="menu-title"><?php echo $menu['label']?></span>
						</a>
					</li>
					<?php

				}

			}
			?>
			<?php

		}
		?>
	</ul>
</div>
</nav>