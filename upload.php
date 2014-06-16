<?php
/*本demo暂不支持中文文件名。*/

	$filename = $_POST['name']; 
	
 	file_put_contents('uploads/'.$filename, file_get_contents ( $_FILES["file"]["tmp_name"]),  FILE_APPEND);
 	
	$result=array("succ"=>1);
	
	echo json_encode($result);