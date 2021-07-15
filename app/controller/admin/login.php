<?php 

if (session('login') && $_SESSION['rank'] == 1){
	header('Location:'.adminUrl());
}

if (post('submit')){

	$email = post('email');
	$pass = post('password');
	$pass = md5($pass);
	echo "<br>".$email;
	echo "<br>".$pass;

	if ($email && $pass){
		$users = $db->Select("Select * from users");
		foreach ($users as $user){
		if ($user["email"] == $email){
			if ($user["password"] == $pass){
				if ($user["rank"] == 1){
					session('login', true);
					session('email', $user["email"]);
					session('id', $user['id']);
					session('rank', $user['rank']);

					header('Location:'.adminUrl());
				}

			} else {
				$error = 'Girilen mail adresi ile şifre eşleşmiyor!';
			}
			
		} else {
			$error = 'Giriş yapılamadı!';
		}
	}
}
}


require view('admin/login');

 ?>