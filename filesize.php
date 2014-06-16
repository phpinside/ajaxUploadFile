<?php
/*本demo暂不支持中文文件名。*/

	$result=array(
		"succ"=>1,
		"data"=>array()
	);
		
	$filename =  $_GET['filename'];
		
	$filepath='uploads/'.$filename;
	$thekey=substr($filename,  0 , strripos($filename, '.') );  //去掉文件扩展名，作为key

	$result['data'][$thekey]=file_exists($filepath) ? filesize($filepath) : 0 ;
	
	
	echo json_encode($result);
