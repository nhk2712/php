<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Accept: application/json");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$json='{"name":"Khanh Nguyen","age":16,"country":"Vietnam"}';
$json=json_decode($json,true);
echo $json['name'].', '.$json['age'].', '.$json['country'].'  ';

$req=$_REQUEST['req'];
$req=json_decode($req,true);
$text = array(array("m"=>"Hello"),array("m"=>$req['m'],"sum"=>1+$req['m']));
echo json_encode($text);
?>