<?php
if (!defined('GIRIS_KARTI')) {echo "Anormal giriş";exit();}
$name	= 'mole_panel';
include $name.'_mdl.php';
include $name.'_ctrl.php';
include 'views/'.$name.'_view.php';
class  mole_panel extends BaseComponent{
	function  __construct(){
		parent::__construct($this);
	}
}
