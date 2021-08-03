<?php
$dir = __DIR__."/Frontend/TailWind/Components/General";
$files = scandir($dir);
print_r($files);
foreach($files as $file){
	echo $file."-".$dir;die();
	$data .= file_get_contents($dir."/".$file);
	$index = file_get_contents("base.html");
	$index_new = str_ireplace("{{BODY}}", $index, $data);
	$ret =	file_put_contents(__DIR__."/index.html", $index_new);
	echo $ret;
}


