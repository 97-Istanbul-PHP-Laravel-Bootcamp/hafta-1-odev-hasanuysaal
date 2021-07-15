<?php  


if (post('submit')){

	$control = true;

	$email = post('email');
	$pass = post('password');
	$pass = md5($pass);
	$name = post('name');
	$surname = post('surname');
	

	if ($email && $pass && $name && $surname){

		$users = $db->Select("Select * from users");
		foreach ($users as $user){
			if ($user["email"] == $email){
			$error = "Girilen E-mail hesabı daha önce kullanılmış!";
			$control = false;
			break;
			}		
		}

 	}else{
 		$error = "Alanlar boş bırakılamaz!";
 	}

 	if ($control && $email && $pass && $name && $surname){
 		$id = $db->Insert("Insert into `users` ( `name` , `surname`, `email` , `password`) values ( :name , :surname , :email , :password )", 
 			[
	        'name' => $name ,
	        'surname' => $surname,
	        'email' => $email,
	        'password' => $pass,
	    	]);
	    if ($id) {
	    	$users = $db->Select("Select * from users");

			foreach ($users as $user){
				if ($email == $user["email"]){
					print_r($user);
					session('login', true);
					session('email', $user["email"]);
					session('id', $user['id']);
					session('rank', $user['rank']);
					
					header('Location:'. siteUrl());
				}
			}
			
		}else{
			$error = "Kayıt Gerçekleştirilemedi!";
		}

 	}

	
	
}


require view('register');

?>