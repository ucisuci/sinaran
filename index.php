<?php
if($_SERVER['SERVER_ADDR'] == "192.168.90.109"){
	header('Location: web');
}else{
	header('Location: /ui/base_yii_ui/public_html/web');
}
