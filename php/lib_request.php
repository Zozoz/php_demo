<?php
// HTTP request related library

function getRequestParam($param, $isArray = false) {
	if($isArray) {
	    $requestParam = array();
	    if(isset($_REQUEST[$param]) && !empty($_REQUEST[$param])){
	        $requestParam = $_REQUEST[$param];
	    }
	} else {
	    $requestParam = isset($_REQUEST[$param]) && trim($_REQUEST[$param]);
	    if($requestParam) {
	        $requestParam = trim($_REQUEST[$param]);
	    } else {
	        $requestParam = false;
	    }
	}
	return $requestParam;
}

function getPostParam($param) {
	$postParam = isset($_POST[$param]) && trim($_POST[$param]);
	if($postParam) {
		$postParam = trim($_POST[$param]);
	} else {
		$postParam = '';
	}
	
	return $postParam;
}

//tirm请求
function trimRequest() {
	foreach($_REQUEST as $k => $v){
		if(!is_array($v))
			$_REQUEST[$k] = trim($v);
	}
}

?>