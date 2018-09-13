<?php 
if(!$session->is_logged_in()){
	redirect_to("http://127.0.0.1/api/logout.php?session=expired");
} else {
	if($session->access_level < 4){
		$session->set_message("You are not authorized to access the page!!");
		redirect_to("http://127.0.0.1/api/logout.php?access=failed");
	}
}
?>