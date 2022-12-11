<?php


function getAll() {

	return db_fetch_array("SELECT * FROM `tbl_store_info`");
}


function get_store_info_by_id(){

	return db_fetch_array("SELECT * FROM `tbl_store_info` WHERE `id` = '1';");
}

function update_store_info($data){

	return db_update("tbl_store_info", $data, 1);
}

if(isset($_POST['action'])){
	echo json_encode(get_store_info_by_id());
}