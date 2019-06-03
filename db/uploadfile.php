<?php  
	$filename = time().substr($_FILES['photo']['name'], strrpos($_FILES['photo']['name'],'.'));  
	$response = array();  
	if( (($_FILES["photo"]["type"] == "image/gif")|| ($_FILES["photo"]["type"] == "image/jpeg")|| ($_FILES["photo"]["type"] == "image/pjpeg"))&&move_uploaded_file($_FILES["photo"]["tmp_name"],"../upload/" . $_FILES["photo"]["name"])&& ($_FILES["photo"]["size"] <= 20000)){  
	    $response['isSuccess'] = true;  
	    $response['name']=$_FILES['photo']['name'];
	    $response['photo'] = "../upload/" . $_FILES["photo"]["name"];  
	}
	else{  
	    $response['isSuccess'] = false;  
	}  
	echo json_encode($response['photo']);  
?>