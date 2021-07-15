<?php  

if (post('submit')){

	$category_id = post('category_id');
	$title = post('title');
	$description = post('description');
	$detail = post('detail');
	$price = post('price');
	$stock = post('stock');
	$image = post('image');
	$user_id = session('id');

	$control = true;

	while(1){
		$uniq_id = mt_rand(100000, 1000000);
		$products = $db->Select("Select * from products");
		foreach ($products as $product){
			if($product["uniq_id"] == $uniq_id){
				$control = false;
				break 1;
			}
			$control = true;
		}

		if ($control){
			break;
		}
	}

	$uniq_id = strval($uniq_id);

	if ($category_id && $title && $price && $stock && $user_id && $uniq_id){

 		$query = $db->Insert("Insert into `products` ( `category_id` , `title`, `description`, `detail`, `price`, `stock`, `image`, `user_id`, `uniq_id`) values ( :category_id , :title , :description, :detail, :price, :stock, :image, :user_id, :uniq_id)", 
 			[
	        'category_id' => $category_id ,
	        'title' => $title,
	        'description' => $description,
	        'detail' => $detail,
	        'price' => $price,
	        'stock' => $stock,
	        'image' => $image,
	        'user_id' => $user_id,
	        'uniq_id' => $uniq_id,
	    	]);
	    if ($query) {
	    	$success = "Kayıt Gerçekleştirildi!";
		}else{
			$error = "Kayıt Gerçekleştirilemedi!";
		}

 	} else {
 		$error = "Kayıt Gerçekleştirilemedi!";
 	}
}

require view('add-product');

?>