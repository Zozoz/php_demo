<?php
	require('../smarty_config.php');
	require_once('lib_request.php');

	$act = getRequestParam('act');
	$username = getRequestParam('username');
	$age = getRequestParam('age');

	if ($act) {
		$rs['username'] = $username;
		$rs['age'] = $age;
		echo json_encode($rs);
		die();
	}

	$smarty->assign('username', $username);
	$smarty->assign('age', $age);
	$smarty->display('index.html');
?>