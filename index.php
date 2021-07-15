<?php 

require 'app/init.php';


$_url = get('url');


$_url = array_filter(explode('/', $_url));

if (!isset($_url[0])){
	$_url[0] = 'index';
}

$categoryNames = array();
$categories = $db->Select("Select * from categories");
foreach ($categories as $category)  { 
        array_push($categoryNames,permalink($category["title"]));
} 

if (in_array($_url[0], $categoryNames)){
	require view('categories');
}



$control = false;

// controllerlarda bulunmayan bir sayfa açılmak istendiğinde 404 sayfasına yönlendirme sağlanacak
foreach ($_url as $url) {
	
	if (!file_exists(controller($url))){
		$control = true;
	}
}




if (count($_url)>1){
	if ($control){
		header('Location:'. siteUrl('404'));
	}elseif ($_url[0] == "admin" && $_SESSION['rank'] != 1 && $_url[1] != 'logout'){
		header('Location:'. siteUrl());
	}
}

if (file_exists(controller($_url[0]))){
	if ($_url[0] == "admin" && $_SESSION['rank'] != 1 && $_url[1] != 'logout'){
		header('Location:'. siteUrl());
	}else{
		require controller($_url[0]);
	}
}

if (!file_exists(controller($_url[0]))){
	if (count($_url)>1) {
		header('Location:'. siteUrl('404'));
	}
	require view('404');
}


?>