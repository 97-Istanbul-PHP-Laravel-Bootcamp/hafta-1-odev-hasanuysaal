<?php 


if (!url(1)){
	if($_SESSION["rank"] == 1){
		$_url[1] = 'index';
	} else {
		header('Location:'. siteUrl()); 
	}
}

if (!session('login')){
	$_url[1] = 'login';
}

if (file_exists(controller('admin/'.url(1)))){
	require controller('admin/' . url(1));
}
 ?>