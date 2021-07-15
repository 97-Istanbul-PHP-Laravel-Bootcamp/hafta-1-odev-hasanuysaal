<?php  

function error($msg){
	echo '<div class="card mb-4 py-3 border-bottom-danger> <div class="card-body">' . $msg . '</div> </div>';
}

function warning($msg){
	echo '<div class="card mb-4 py-3 border-bottom-warning"> <div class="card-body">' . $msg . '</div> </div>';
}

function info($msg){
	echo '<div class="card mb-4 py-3 border-bottom-info"> <div class="card-body">' . $msg . '</div> </div>';
}

function success($msg){
	echo '<div class="card mb-4 py-3 border-bottom-success"> <div class="card-body">' . $msg . '</div> </div>';
}


?>