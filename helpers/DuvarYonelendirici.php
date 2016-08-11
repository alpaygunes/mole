<?php
class DuvarYonelendirici
{
	function __construct(){
		global $CORE;
		//$a   = parse_url($_SERVER[REQUEST_URI]);
		//echo ($CORE->request['d']);
		if(count($_GET)==1  && isset($CORE->request['d'])){
			$CORE->redirectUrl('?component=ogretmen_agi&layout=duvar&d='.$CORE->request['d']);
		}
	}
}
