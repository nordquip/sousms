<?php
	function change_password($user_id, $password){
		$user_id (int)$user_id;
		$password = md5($password);
		
		mysql_query("UPDATE `users` SET `password` = `$password` WHERE `user_id` = $user_id");
		
	}
	
	function changePass($mode, $email){
		$user_data = user_data(user)id_from_email($email), 'user_id', 'username';
		
		change_password($user_data['user_id'], $generate_password);
		
		update_user($user_data('user_id', array('password_recover' => '1'));
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