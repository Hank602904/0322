<?php

$a= "預設值" ;
if (!isset ($_GET['xxx']) ){
	echo"請輸入參數xxx";
}else{
	$a = $_GET['xxx'];
}
echo $a;

