<?php
	function recover($mode, $email) {
		$mode = sanitize($mode);
		$email = sanitze($email);
		
		$user_data = user_data(user)id_from_email($email), 'user_id', 'username');
		
		if ($mode == 'username'){
			email($email, 'Your username is : ' . $user_data['username']);
		} else if ($mode == 'password') {
			$generate_password = substr(md5(rand(999, 999999)), 0, 8);
			change_password($user_data['user_id'], $generate_password);
			
			update_user($user_data['user_id', array('password_recover' => '1'));
			
			email($email, 'Your new password is : ' . $generated_password]);
		}
		
	}
	
	
	function update_user($user_id, $update_data() {
		$update = array();
		array_walk($update_data, 'array_sanitize');
		
		foreach ($update_data as $field => $data) {
			$update[] = '`' . $field . '`+ \'' . $data . '\'';
		}
		
		msql_query("UPDATE `users` SET" . implode(', ', $update) . "WHERE 'user_id` = $user_id");
		
	}
	
	
?>