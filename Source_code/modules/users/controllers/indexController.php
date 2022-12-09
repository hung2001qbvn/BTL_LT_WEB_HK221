<?php 

function construct() {

	load_model('index');
}




function indexAction(){

	if(isset($_GET['report']))
		if ($_GET['report'] == 1) {
			echo " <script type='text/javascript'> alert('Bạn cần đăng nhập để mua hàng');</script>";
		} else if ($_GET['report'] == 2) {
			echo " <script type='text/javascript'> alert('Bạn cần đăng nhập để bình luận');</script>";
		}

	load_view('index');
}



function logoutAction(){
	
	logout();
	header('location:?modules=home');
}





function loginAction(){

	$username;
	$password;
	$err = array();
	if (!empty($_POST['btn_submit'])) {
			
		if (!empty($_POST['username'])) {
			$username = $_POST['username'];
		}else{
			$err['username'] = "username không được để rỗng";
		}

		if (!empty($_POST['password'])) {
			$password = $_POST['password'];
		}else{
			$err['password'] = "password không được để rỗng";
		}

		if(empty($err)){

			if(checkLogin($username, $password)){

				$dataUser = getUser($username, $password);
				$_SESSION['id_customer'] = $dataUser['id'];
				$_SESSION['username'] = $dataUser['username'];
				$_SESSION['fullname'] = $dataUser['fullname'];
				$_SESSION['password'] = $dataUser['password'];
				$_SESSION['mail'] = $dataUser['mail'];
				$_SESSION['phone'] = $dataUser['phone'];
				$_SESSION['address'] = $dataUser['address'];
				
				header('location:?modules=home');
			}else{

				echo " <script type='text/javascript'> alert('Thông tin tải khoản không đúng!!!');</script>";
			}
		}else{

			echo " <script type='text/javascript'> alert('Bạn phải điền đầy đủ thông tin!!!');</script>";
		}

	}
	load_view('index');

}

function updateAction(){

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $data = [
        [
        'fullname' => $fullname,
        'username' => $username,
        'mail' => $mail,
        'phone' => $phone,
        'address' =>$address
        ]
    ];
    $num = updateUser($fullname, $username,$mail,$phone,$address);
    if($num ==1){
        load_view('update',$data);
        echo " <script type='text/javascript'> alert('Cập Nhật Thành Công');</script>";
    }
    else {
        load_view('update',$data);
        echo " <script type='text/javascript'> alert('Thông Tin Đã Tồn Tại');</script>";
    }
}

//  load view hiển thị màn thay đổi mật khẩu
function passAction(){

    load_view('pass');
}

// đổi mật khẩu tài khoản user
function changepassAction(){

    if(!empty($_POST['btn_submit'])){
        $oldPass =  $_POST['pass_old'];
        $newPass1 = $_POST['pass_new'];
        $newPass2 = $_POST['confirm_pass'];
        if(md5($oldPass) == $_SESSION['password']){
            if($newPass1 == $newPass2 &&$oldPass != $newPass2){
                if(changePass(md5($newPass1),md5($oldPass))==1){
                    load_view('pass');
                    echo " <script type='text/javascript'> alert('Cập Nhật Thành Công');</script>";
                }
                else{
                    load_view('pass');
                    echo " <script type='text/javascript'> alert('Cập Nhật Không Thành Công');</script>";
                }
            }
            else{
                    load_view('pass');
                    echo " <script type='text/javascript'> alert('Mật Khẩu Mới Không Khớp, Hoặc Bị Trùng Mật Khẩu Cũ');</script>";
                }
        }
        else{
                    load_view('pass');
                    echo " <script type='text/javascript'> alert('Mật Khẩu Cũ Không Đúng');</script>";
                }
            
    }  
}

function createAccountAction(){

	$username;
	$password;
	$mail;
	$phone;
	$fullname;
	$address;
	$err = array();

	if(!empty($_POST['btn_submit_create'])){

		if (!empty($_POST['username'])) {
			$username = $_POST['username'];
		}else{
			$err['username'] = "username không được để rỗng";
		}

		if (!empty($_POST['password'])) {
			$password = $_POST['password'];
		}else{
			$err['password'] = "password không được để rỗng";
		}

		if (!empty($_POST['mail'])) {
			$mail = $_POST['mail'];
		}else{
			$err['mail'] = "mail không được để rỗng";
		}

		if (!empty($_POST['phone'])) {
			$phone = $_POST['phone'];
		}else{
			$err['phone'] = "phone không được để rỗng";
		}

		if (!empty($_POST['fullname'])) {
			$fullname = $_POST['fullname'];
		}else{
			$err['fullname'] = "fullname không được để rỗng";
		}

		if (!empty($_POST['address'])) {
			$address = $_POST['address'];
		}else{
			$err['address'] = "address không được để rỗng";
		}

		if(empty($err)){
			if(checkUser($username, $mail, $phone)){

				$create_date = date("d/m/Y",time());
				insertUser($username, $password, $fullname, $mail, $phone, $address, $create_date);
				echo " <script type='text/javascript'> alert('Chúc mừng bạn đăng ki tài khoản thành công!!!');</script>";
				
			}else{

				echo " <script type='text/javascript'> alert('Thông tin tài khoản đã tồn tại trên hệ thống!!!');</script>";
				
			}

		}else{

			echo " <script type='text/javascript'> alert('Bạn phải điền đầy đủ thông tin!!!');</script>";
			
		}
	}


	load_view('index');
}






 ?>