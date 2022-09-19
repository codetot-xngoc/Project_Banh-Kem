<?php
include"models/ClientModel.php";

class clientController{
var $cm;
var $th;
var $gia;
function __construct(){
	$this->cm = new ClientModel();
	$this->th = $this->cm->ThuongHieu();
	$this->gia = $this->cm->BangGia();
}

// function htThuongHieu(){
// 		$thuonghieu = $this->cm->ThuongHieu();
// 		return $thuonghieu;
// 	}

	function routes(){
		if(isset($_GET['request'])):
			switch($_GET['request']){

				case "home":
				$product = $this->cm->showSP();
				include("views/sanpham.php");
				break;


				case "news":
				$new = $this->cm->news();
				include("views/news.php");
				break;


				case "cart":
				
					$add = $this->cm->showCart();
				include("views/cart.php");

				break;


				case 'order':

					$this->cm->Updateinfo();
					$info=$this->cm->info();
					$thanhtoan=$this->cm->thanhtoan();
					$this->cm->dathang();
					include"views/order.php";
					
				break;



				case "chitiet":

					$ct=$this->cm->showSP();
					include("views/chitietsp.php");

				break;

				case 'chitietTT':
					$ctTT=$this->cm->ctTT();

					include("views/chitietTT.php");
				break;


				case "signin":
				if(isset($_POST['tk'])):
					if($this->cm->checkSignin()==false):
						$alert="Tài khoản hoặc mật khẩu chưa chính xác!";
						
					// include"views/signin.php";
					else:
						$_SESSION['userr']= $_POST['tk'];
						header("location: ?request=home");
					endif;
				else:
						 // include"views/signin.php";

				endif;
				include("views/signin.php");
				break;


				case "signup":
				if(isset($_POST['tk1'])):
					if($this->cm->checkTK()==true):
						$alert = "Tài Khoản đã tồn tại!!";
					else:
						$this->cm->Dangki();
						header("location: ?request=signin");
					endif;

				endif;
				include("views/signup.php");
				break;
				
				case "thoat":
				unset($_SESSION['userr']);
				header("location: ?request=home");
				break;

				case "show":
					$product=$this->cm->showSP();
					include "views/sanpham.php";
				break;
				
			}
		else:
				$product = $this->cm->showSP();

			include"views/sanpham.php";
		endif;
	}
}

?>