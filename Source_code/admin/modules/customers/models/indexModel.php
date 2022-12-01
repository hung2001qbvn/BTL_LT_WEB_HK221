<?php 

function insert_customer($data){

	return db_insert("tbl_customer", $data);
}

function getAll() {

	return db_fetch_array("SELECT * FROM `tbl_customer`");
}
function delete_customer_by_id($id){

	return db_delete("tbl_customer", "`id` = '$id'");
	return db_delete("tbl_order", "`custom_id` = '$id'");
	
}

function get_customer_by_id($id){

	return db_fetch_array("SELECT * FROM `tbl_customer` WHERE `id` = '$id'");
}

function get_customer_by_name($username){

	return db_fetch_array("SELECT * FROM `tbl_customer` WHERE `username` = '$username'");
}

function update_customer_by_id($id,$data){

	return db_update("tbl_customer", $data, "`id`='$id'");
}

function updateUser($fullname, $username,$mail,$phone,$address){

	$data = [
		'fullname' => $fullname,
		'username' => $username,
		'mail' => $mail,
		'phone' => $phone,
		'address' =>$address
	];
	return db_update('tbl_customer', $data, "`username` = '{$username}'");
}
 ?>