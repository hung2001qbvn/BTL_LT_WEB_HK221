<?php

function construct() {

	load_model('index');
}

function indexAction() {

}

// function addAction() {
// 	$name;
// 	$code;
// 	$image;
// 	$description;
// 	$user;
// 	$err = array();
// 	if(!empty($_POST['btn_submit'])){
// 		if(!empty($_POST['name'])){
// 			$name = $_POST['name'];
// 		}else{
// 			$err['name'] ="name không được rỗng";		
// 		}

// 		if(!empty($_POST['user'])){
// 			$user = $_POST['user'];
// 		}else{
// 			$err['user'] ="user không được rỗng";		
// 		}

// 		if(!empty($_POST['code'])){
// 			$code = $_POST['code'];
// 		}else{
// 			$err['code'] ="code không được rỗng";		
// 		}

// 		if(!empty($_POST['description'])){
// 			$description = $_POST['description'];
// 		}else{
// 			$err['description'] ="description không được rỗng";		
// 		}

// 		// kiểm tra file ảnh
// 			$target_dir = "public/uploads/";
// 			$target_file = $target_dir . basename($_FILES["image"]["name"]);
// 			$uploadOk = 1;
// 			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// 			if(isset($_POST["submit"])) {
// 			  $check = getimagesize($_FILES["image"]["tmp_name"]);
// 			  if($check !== false) {
// 			    $uploadOk = 1;
// 			  } else {
// 			    $uploadOk = 0;
// 			  }
// 			}

// 			if (file_exists($target_file)) {
// 			  $uploadOk = 0;
// 			}

// 			if ($_FILES["image"]["size"] > 200000000) {
// 			  $uploadOk = 0;
// 			}

// 			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// 			&& $imageFileType != "gif" ) {
// 			  $uploadOk = 0;
// 			}

// 			if ($uploadOk == 0) {
// 			} else {
// 			  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
// 			    $image = $target_dir. basename( $_FILES["image"]["name"]);
// 			  }
// 			}
// 			if(empty($image)){
// 				$err['image'] = "image không được rỗng";
// 			}

// 		if(empty($err)){
// 		$create_date = date("d/m/Y",time());
// 		$data = [
// 			'name' =>$name,
// 			'code' =>$code,
// 			'image' =>$image,
// 			'description' =>$description,
// 			'create_date' =>$create_date,
// 			'user' => $user
// 		];
// 			if(insert_category($data)){
				
// 	        	echo " <script type='text/javascript'> alert('Thêm mới thành công');</script>";
// 			}else{
				
// 	        	echo " <script type='text/javascript'> alert('Thêm mới danh mục sản phẩm thất bại');</script>";
// 			}

// 		}
// 		else{
			
// 	        echo " <script type='text/javascript'> alert('Thêm mới danh mục sản phẩm thất bại');</script>";
// 		}

// 	}
// 	load_view('add');
	

// }

// function listAction() {

// 	$data_tmp = getAll();

// 	// for ($i=0; $i <count($data_tmp) ; $i++) {
		
// 	// 	$data_tmp[$i]['category'] = get_category_by_id($data_tmp[$i]['id']);
// 	// 	//$data_tmp[$i]['brand']  = get_brand_by_id($data_tmp[$i]['id_brand']) ;
// 	// };

// 	//phân trang//////////////////////////////////////////////////
// 	//$id_cat = $_GET['id_cat'];
// 	// $name = getNameCatById($id_cat);
// 	// $data_tmp = getAllByIDCat($id_cat);
// 	// $id =$id_cat;
// 	$page;
// 	if(!empty($_GET['page'])){
// 		$page = $_GET['page'];
// 	}else{
// 		$page =1;
// 	}
	
// 	$numProduct = count($data_tmp);
// 	$productOnPage = 5;
// 	$num = ceil($numProduct/$productOnPage);
// 	if(!empty($_GET['page']) && $_GET['page']>$num){
// 		$page =$num;
// 	}
// 	$start = ($page - 1) * $productOnPage;
// 	$res =[];
// 	for ($i=$start; $i < $start+$productOnPage; $i++) { 
// 		if(isset($data_tmp[$i]))
//         $res[] = $data_tmp[$i];
// 	};

// 	$data = [$res, $num, $page];
// 	load_view('list',$data);
// }

// function deleteAction() {

// 	$id = $_GET['id'];
// 	delete_category_by_id($id);
// 	header('location:?modules=categorys&controllers=index&action=list');
// }



// function editAction() {
	
// 	$id = $_GET['id'];
// 	$data = get_category_by_id($id);
// 	load_view('show',$data);
	
// }

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