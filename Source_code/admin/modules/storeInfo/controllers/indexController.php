<?php

function construct() {
	load_model('index');
}

function indexAction() {

}

function addAction() {	
	$data = array();
	if(!empty($_POST['btn_submit'])){
		$data['address'] = $_POST['address'];
		$data['phone_number'] = $_POST['phone_number'];
		$data['email'] = $_POST['email'];
		if(update_store_info($data)){
				echo " <script type='text/javascript'> alert('Cập Nhật Thành Công');</script>";
		}
	}
	
	load_view('add');
}