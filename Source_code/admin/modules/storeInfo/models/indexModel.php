<?php

// include_once ('../../../libraries/database.php');

function getAll() {

	return db_fetch_array("SELECT * FROM `tbl_store_info`");
}

// function insert_category($data){

// 	return db_insert("tbl_category", $data);
// }



// function delete_category_by_id($id){

// 	return db_delete("tbl_category", "`id` = '$id'");
// }


function get_store_info_by_id(){

	return db_fetch_array("SELECT * FROM `tbl_store_info` WHERE `id` = '1';");
}

function update_store_info($data){

	return db_update("tbl_store_info", $data, 1);
}

if(isset($_POST['action'])){
	// $output = array();
	// $output['1']="asd";
	echo json_encode(get_store_info_by_id());
	// echo json_encode(db_fetch_array("SELECT * FROM `tbl_store_info` WHERE `id` = 1")); 
}