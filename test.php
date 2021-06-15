<?php

require_once "./vendor/autoload.php";

use Brady\Token\JWT;


//
////自己使用测试begin
//$payload_test = array('user_name'=>'brady');;
//$token_test = Jwt::getToken($payload_test);
//echo "<pre>";
//echo $token_test;
//
////对token进行验证签名
//$getPayload_test = Jwt::verifyToken($token_test);
//echo "<br><br>";
//var_dump($getPayload_test);
//echo "<br><br>";

$jwt = new JWT("sdfsdfsdf");
$token = $jwt->getToken(['userName'=>"wang","age"=>10]);
var_dump($token);

$payload = $jwt->validateToken($token);
var_dump($payload);