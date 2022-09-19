<?php 
class ClientModel
{
	var $connect;
	
	function __construct(){
		$this->connect= new MYSQLi("localhost","root","","php");
		mysqli_set_charset($this->connect,'utf8');
	}

	function checkSignin(){
		$username = $_POST['tk'];
		$password=md5($_POST['mk']);
		$result = $this->connect->query("select * from users where username = '$username' 
			and password='$password'");

		if(mysqli_num_rows($result)==0):
			return false;
			
		else:
			return true;
		endif;
	}

	function checkTK(){
		$tk = $_POST['tk1'];
		$result = $this->connect->query("select * from users where username = '$tk' ");

		if(mysqli_num_rows($result)==0):
			return false;
		else:
			return true;
		endif;
	}

	function Dangki(){
		$tk = $_POST['tk1'];
		$mk= md5($_POST['mk1']);
		$fullname  = $_POST['full'];
		$dt=$_POST['sdt'];
		$email = $_POST['email'];
		$dc=$_POST['dc'];

		$this->connect->query("insert users(username,password,fullname,mobie,email,address) 
			values('$tk','$mk','$fullname','$dt','$email','$dc')");
	}

	function showSP(){

		$query = " select*from sanpham where trangthaisp=1 ";
		if(isset($_GET['thid'])):
			$idth = $_GET['thid'];
			$result= $this->connect->query($query . " and THid = '$idth'");
		elseif(isset($_GET['timkiem'])) :
			$tk = $_GET['timkiem'];
			$result= $this->connect->query($query . " and tensp like '%$tk%'");
		elseif(isset($_GET['fromgia'])):
			$fromgia = $_GET['fromgia'];
			$togia = $_GET['togia'];

			$result = $this->connect->query($query . " and giasp >= '$fromgia' and giasp < '$togia' ");
		elseif(isset($_GET['tensp'])):
			$ten = $_GET['tensp'];
			$result= $this->connect->query($query . " and id = '$ten'");
		else:
			$result = $this->connect->query($query);

		endif;
		
		return $result;
	}

	function ThuongHieu(){
		$result = $this->connect->query("select * from thuonghieu where trangthai=1");
		return $result;
	}

	// function showTH(){
	// 	$idth = $_GET['thid'];

	// 	return $this->connect->query("select*from sanpham where THid = '$idth'");
	// }

	function BangGia(){
		return $this->connect->query("select * from banggia where trangthai = 1 ");
	}


	function showCart(){

		if (empty($_SESSION['cart'])) {
					$_SESSION['cart']=array();
					}
					if (isset($_GET['action'])) {
					switch ($_GET['action']) {
					case 'add':
					$id = $_GET['id'];
					if(array_key_exists($id, $_SESSION['cart'])){
				
					$_SESSION['cart'][$id]++;
				
					}else {
				
					$_SESSION['cart'][$id]=1;
				
				
					}
					header("location: ?request=cart");	
					break;

					case 'delete':
						$id=$_GET['id'];
						unset($_SESSION['cart'][$id]);

					break;

					case 'xoatat':
					unset($_SESSION['cart']);
					header("location: ?request=cart");

					break;

					case 'update':
					foreach (array_keys($_SESSION['cart']) as $value) {

					$_SESSION['cart'][$value]=$_POST[$value];
					}
					break;

					case 'order':		
							header("location: ?request=order");
						
					break;
					
				}

			}
				 if(isset($_SESSION['cart'])):
				 	$ids=0;
 				foreach (array_keys($_SESSION['cart']) as $key) {
 				$ids = $ids.",".$key;
 				// echo $ids;
 			 		}
 				$query="select * from sanpham where id in($ids)";
 				$result=$this->connect->query($query);
				 endif;

				return $result;
		    
	}


	function updateinfo()
	{
		if (isset($_POST['fullname'])) {
		$name=$_POST['fullname'];
		$sdt=$_POST['sdt'];
		$email=$_POST['email'];
		$dc=$_POST['dc'];

		$this->connect->query("update users set fullname='$name',mobie='$sdt',email='$email',address='$dc' where username='".$_SESSION['userr']."'");
			}
	}


	function info()
	{
		$query="select*from users where username='".$_SESSION['userr']."'";
		
		return mysqli_fetch_array($this->connect->query($query));
	}

	function thanhtoan(){

		return $this->connect->query("select*from phuongthucTT ");
		 
	}

	function dathang(){
		if (isset($_POST['tenTT'])) {
			$info=$this->info();
		$tt=$_POST['tenTT'];
		$userId=$info['id'];
		$this->connect->query("insert donhang(userid,idthanhtoan,date)value('$userId','$tt',now())");
		$order=mysqli_fetch_array($this->connect->query("select*from donhang order by id desc limit 1 "));
		$orderId=$order['id'];
		foreach (array_keys($_SESSION['cart']) as $value) {
		$sl=$_SESSION['cart'][$value];
		$sp=mysqli_fetch_array($this->connect->query("select giasp from sanpham where id =$value "));
		$gia = $sp['giasp'];
		$this->connect->query("insert chitietdonhang values('$orderId','$value','$sl','$gia')");
	}
	unset($_SESSION['cart']);
	echo "<script>alert('Đặt Hàng Thành Công!!!');location='.'</script>";
	}
	}


function news (){
$result = $this->connect->query("select * from news");
		return $result;
}



function ctTT (){
	$id =$_GET['id'];
$result = $this->connect->query("select * from news where id = '$id'");
		return $result;
}
}

 ?>

