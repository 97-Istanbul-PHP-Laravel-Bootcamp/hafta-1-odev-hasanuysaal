<?php  


if (post('submit')){

	$parent_id = post('parent_id');
	$title = post('title');
	$description = post('description');

	if ($title){

 		$query = $db->Insert("Insert into `categories` ( `parent_id` , `title`, `description`) values ( :parent_id , :title , :description)", 
 			[
	        'parent_id' => $parent_id ,
	        'title' => $title,
	        'description' => $description,
	    	]);
	    if ($query) {
	    	$success = "Kayıt Gerçekleştirildi!";
		}else{
			$error = "Kayıt Gerçekleştirilemedi!";
		}

 	}
}


require view('admin/categories');

?>