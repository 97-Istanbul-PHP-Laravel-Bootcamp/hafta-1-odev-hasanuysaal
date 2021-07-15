<?php  

// helperlar yüklenicek
// class dosyaları yüklenecek
// veri tabanı bağlantısı
// ayarlar yapılacak


session_start();
ob_start();


// --- helper dosyalarının otomatik yüklenmesi --

function __autoload($className){
	$classFile = realpath('.') . '/app/classes/class.' . strtolower($className) . '.php';
	if (file_exists($classFile)){
		require $classFile;
	}	

}

Helper::Load();

$dbdir = realpath('.') . '/database.php';
require $dbdir;
require 'system/config.php';

$db = new Database($config['db']['host'],$config['db']['name'],$config['db']['user'],$config['db']['pass']);

?>