<?php
	/*
	 * Smarty 相关配置（绝对路径）
	 */

	// 设置Smarty的路径
	define('SMARTY_PATH', $_SERVER['DOCUMENT_ROOT'].'/Demo/smarty/');
	// 加载Smarty类文件
	require SMARTY_PATH.'Smarty.class.php';

	// 实例化一个Smarty对象
	$smarty = new Smarty();
	$smarty->template_dir = SMARTY_PATH.'templates';
	$smarty->compile_dir = SMARTY_PATH.'templates_c';
	$smarty->config_dir = SMARTY_PATH.'configs';
	$smarty->cache_dir = SMARTY_PATH.'cache';

?>