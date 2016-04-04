<li class="dropdown topbar-user">
	<a data-hover="dropdown" href="#" class="dropdown-toggle">
		<img src="<?php echo $baseUrl ?>/images/icons/<?php echo Yii::app()->session['roleName'] ?>-medium.png" alt="" />&nbsp;
		<span >
		<?php
		$name = '';
		if (isset(Yii::app()->user->casAttr['attributes']['nama'])) {	
			$name = Yii::app()->user->casAttr['attributes']['nama'];
		}elseif (isset(Yii::app()->user->casAttr['attributes']['ldap_cn'])) {	
			$name = Yii::app()->user->casAttr['attributes']['ldap_cn']; 
		}
		//echo $name . ' ('.strtoupper(Yii::app()->session['role']).')';
		
		echo $name . ' ('.Yii::app()->session['roleDescription'].')';
		
		?>
		</span>
	<span class="caret"></span>
	</a>
	<ul class="dropdown-menu dropdown-user">
<!--
		<li><a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'><i class="fa fa-user"></i>My Profile</a></li>
		<li><a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'><i class="fa fa-calendar"></i>My Calendar</a></li>
		<li><a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a></li>
		<li><a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'><i class="fa fa-tasks"></i>My Tasks<span class="badge badge-success">7</span></a></li>
		<li class="divider"></li>
		<li><a href='<?php echo Yii::app()->createUrl('/site/index'); ?>'><i class="fa fa-lock"></i>Lock Screen</a></li>
-->
		
		<?php
		if (Yii::app()->user->isSuperuser) {
		
			$sqlQuery = "
			SELECT
			a.name, a.type, a.description, b.priority
			FROM
			rights_authitem a
			INNER JOIN
			role_priority b
			ON a.name = b.itemname
			WHERE a.type = 2
			ORDER BY
			priority							
			";

			$sql = Yii::app()->db->createCommand($sqlQuery);
			$datas = $sql->queryAll();
			
			foreach($datas as $data) {
				?>
				<li>
					<a href="<?php echo Yii::app()->createUrl('site/ubahRole', array('roleName'=>$data['name'])) ?>">
						<img src="<?php echo $baseUrl .'/images/icons/' . $data['name'] . '-medium.png' ?>">
						<span class="menu-title"><?php echo ucfirst($data['description']) ?></span>
					</a>
				</li>
				<?php
			}
			
		} else {
			
			$sqlQuery = "
				SELECT
				a.userid, b.name, b.description, c.priority
				FROM
				rights_authassignment a
				INNER JOIN
				rights_authitem b
				ON a.itemname = b.name
				INNER JOIN
				role_priority c
				ON a.itemname = c.itemname
				WHERE
				b.type = 2
				AND
				a.userid = :userId
				ORDER BY
				c.priority
			";
			
			$sql = Yii::app()->db->createCommand($sqlQuery);
			$userId = Yii::app()->user->Id;
			$sql->bindParam(":userId", $userId, PDO::PARAM_STR); 	
			$datas = $sql->queryAll();
			$rolesCount = count($datas);
			
			if ($rolesCount > 1) {
			?>
			<li><h4>Ubah Role</h4></li>
			<?php
				foreach($datas as $data) {
				?>
				<li>
					<a href="<?php echo Yii::app()->createUrl('site/ubahRole', array('roleName'=>$data['name'])) ?>">
						<img src="<?php echo $baseUrl .'/images/icons/' . $data['name'] . '-medium.png' ?>">
						<span class="menu-title"><?php echo ucfirst($data['description']) ?></span>
					</a>
				</li>
				<?php
				}
			}
		
		}
		?>

		
		
		<li class="logout"><a href='<?php echo Yii::app()->createUrl('/login/logout'); ?>'><i class="fa fa-key"></i>&nbsp;&nbsp;Log Out</a></li>
	</ul>
</li>
