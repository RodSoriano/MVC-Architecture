<?php

$url = !empty($_GET['url'] ? $_GET['url'] : 'home/home');
$arrUrl = explode("/" , $url);
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";