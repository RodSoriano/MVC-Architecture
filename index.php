<?php

require_once("Config/config.php");

$url            = !empty($_GET['url']) ? $_GET['url'] : 'Home/home';
$arrUrl         = explode('/' , $url);
$controller     = $arrUrl[0];
$method         = $arrUrl[0];
$params         = "";

    if(!empty($arrUrl[1]))
        {
            if($arrUrl[1] != "")
                {
                    $method = $arrUrl[1];
                }
        }

    if(!empty($arrUrl[2]))
        {
            if($arrUrl[2] != "")
                {
                    for($i = 2; $i < count($arrUrl); $i++)
                        {
                            $params .=$arrUrl[$i] . ',';
                        }

                    $params = trim($params, ',');
                }
        }

require_once("Libraries/Core/Autoload.php");
require_once("Libraries/Core/Load.php");

#Left php tags open to prevent (XSS) injections through HTML in the future.