<?php  
	if (url(1)) {
		$say = $db->select('resetpassworduser')->where('token', url(1))->run(true);
		if ($say) {
			$control = $db->select('user')->where('userID', $say["userID"])->run(true);
			 session('userLogin',true);
	         session('user_name',$control['userName']);
	         session('user_mail',$control['userMail']);
	         session('user_id',$control['userID']);
	         Header("Refresh:0; url=".site_url('sifredegistir'));
		} 
	}
?>