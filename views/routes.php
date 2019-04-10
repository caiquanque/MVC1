<?php
require_once 'controllers/'.$controllers.'.php';
require_once 'model/master.php'

switch ($controller) {
	case 'home':
		$controller = new Home();
		break;
	
	case 'list':
		$controller = new List();
		require_once 'models/list.php';
		break;
}

$controller->{ $ction }();