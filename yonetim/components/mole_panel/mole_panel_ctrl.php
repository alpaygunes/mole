<?php
class mole_panel_ctrl extends BaseController{
	function __construct($parent){
		parent::__construct($parent);
		$this->parent->BELLEK['veri']= $this->parent->model->getVeri();
	}
}