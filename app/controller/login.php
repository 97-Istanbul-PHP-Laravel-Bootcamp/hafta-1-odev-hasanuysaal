<?php  


if (post('submit')){

	$email = post('email');
	$pass = post('password');
	$pass = md5($pass);

	if ($email && $pass){

		$users = $db->Select("Select * from users");
		foreach ($users as $user){
		if ($user["email"] == $email){
			echo "<br>mail oldu";
			if ($user["password"] == $pass){
				session('login', true);
				session('email', $user["email"]);
				session('id', $user['id']);
				session('rank', $user['rank']);
				
				header('Location:'. siteUrl());
			} else {
				$error = 'Girilen mail adresi ile şifre eşleşmiyor!';
			}
			
		} else {
			$error = 'Giriş yapılamadı!';
		}
	}

	}	

	//echo permalink(post('email'));
	//header('Location:'. siteUrl(''));
}

if (!session('login')){
	require view('login');	
}else{
	header('Location:'. siteUrl());
}



?>