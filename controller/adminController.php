<?php  
include"../models/adminModel.php";

class AdminController{
var $am;

function __construct(){
	$this->am = new adminModel();
}
function routes(){
		if(isset($_GET['request'])):
			switch($_GET['request']):

				case "thoat":
				unset($_SESSION['admin']);
				header("location: .");
				break;

				case "hsx":
				$hsx = $this->am->showHsx();
				include"../views/admin/thuonghieu/thuonghieu.php";
				break;

				case "xoaTH":
					$this->am->xoaTh();
				break;

				case 'suaTH':

						$TH=$this->am->selectTH();

						if(isset($_POST['suaTH'])):
						
							$this->am->suaTH();
							header("location: ?request=hsx");
					else:

					endif;
					include("../views/admin/thuonghieu/suaTH.php");

				break;

				case "price":
					$hsx = $this->am->showPrice();
					include"../views/admin/thuonghieu/price.php";
				break;

				case "cake":
					$hsx = $this->am->showCake();
					include"../views/admin/thuonghieu/cake.php";
				break;

				case "themCake":
					if(isset($_POST['tensp'])):
						if($this->am->checkCake()==true):
							$alert="Tên Thương Hiệu đã tồn tại";
						else:
							$this->am->themCake();
							header("location: ?request=cake");
						endif;
					else:

					endif;
					include("../views/admin/thuonghieu/themCake.php");
				break;

				case "themPrice":
					if(isset($_POST['fromGia']) && isset($_POST['toGia'])):
						if($this->am->checkPrice()==true):
							$alert="Bảng giá đã tồn tại";
						else:
							$this->am->themPrice();
							header("location: ?request=price");
						endif;
					else:

					endif;
					include("../views/admin/thuonghieu/themPrice.php");
				break;

				case "themTH":
					if(isset($_POST['tenTH'])):
						if($this->am->checkTH()==true):
							$alert="Tên Thương Hiệu đã tồn tại";
						else:
							$this->am->themTH();
							header("location: ?request=hsx");
						endif;
					else:

					endif;
					include("../views/admin/thuonghieu/themTH.php");
				break;

				case 'xoaPrice':
					$this->am->xoaPrice();
				break;

				case 'suaPrice':

					$gia = $this->am->selectGia();

					if(isset($_POST['fromGia'])):
						
							$this->am->suaGia();
							header("location: ?request=price");
					

					endif;
					
					include("../views/admin/thuonghieu/suaPrice.php");

				break;

				case 'xoaCake':
					$this->am->xoacake();

				break;

				case 'suasp':

					$sp = $this->am->slsp();
					if(isset($_POST['THid'])):
						
							$this->am->suasp();
							header("location: ?request=cake");
					

					endif;
				
					
					include("../views/admin/thuonghieu/suaCake.php");

				break;


			endswitch;
		else:

		endif;
}

function checkDN(){

				//$product = $this->cm->showSP();

			if(isset($_POST['tk'])):
					if($this->am->checkDN()==false):
						$alert="Tài khoản hoặc mật khẩu chưa chính xác!";
						
						include"../views/admin/dangnhap.php";

					else:
						$_SESSION['admin']= $_POST['tk'];
						header("location: .");
					endif;
			else:
			// include"../views/admin/dangnhap.php";
						 
					if(empty($_SESSION['admin'])):

						include"../views/admin/dangnhap.php";

					else:
						include"../views/admin/quantrivien.php";
					endif;
			endif;
				// include("../views/admin/dangnhap.php");
				

	}
}

?>