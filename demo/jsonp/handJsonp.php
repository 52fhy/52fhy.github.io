<?php

//$data = 'hello';
$data = array('name' => '52fhy', 'age' => '22');

handJsonp($data);

//处理jsonp
function handJsonp($data){
	$callback = $_GET['callback'] ? : 'callback'; //默认使用callback
	echo sprintf("%s(%s)", $callback, json_encode($data));
	exit;
}