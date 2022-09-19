<?php
class  adminModel{

var $connect;

	function __construct(){
		$this->connect= new MYSQLi("localhost","root","","php");
	}

	function checkDN(){
		$username = $_POST['tk'];
		$password=md5($_POST['mk']);
		$result = $this->connect->query("select * from admin where tendn = '$username' 
			and mk='$password'");

		if(mysqli_num_rows($result)==0):
			return false;
			
		else:
			return true;
		endif;
	}

	function showHsx(){
		return $this->connect->query("select * from thuonghieu");
	}

	function showPrice(){
		return $this->connect->query("select * from banggia");
	}

	function showCake(){
		return $this->connect->query("select * from sanpham");
	}

	function checkTH(){
		$result=$this->connect->query("select * from thuonghieu where name = '".$_POST['tenTH']."'");

		if(mysqli_num_rows($result)>0):
			return true;
		endif;

		return false;
	}

	function themTH(){
		$this->connect->query("insert thuonghieu(name,trangthai) values('".$_POST['tenTH']."','".$_POST['tt']."')");
	}

	function checkPrice(){
		$result=$this->connect->query("select * from banggia where fromGia = '".$_POST['fromGia']."' and toGia = '".$_POST['toGia']."'");

		if(mysqli_num_rows($result)>0):
			return true;
		endif;

		return false;
	}

	function themPrice(){
		$this->connect->query("insert banggia(fromGia,toGia,trangthai) values('".$_POST['fromGia']."','".$_POST['toGia']."','".$_POST['tt']."')");
	}

	function xoaTH(){

	$id = $_GET['id'];
		$this->connect->query("delete from thuonghieu where id='$id' ");

	}

	function checkCake(){
		$result=$this->connect->query("select * from sanpham where tensp = '".$_POST['tensp']."'");

		if(mysqli_num_rows($result)>0):
			return true;
		endif;

		return false;
	}

	function themCake(){
		$this->connect->query("insert sanpham(THid, tensp, anhsp, giasp, mota, trangthaisp) values('".$_POST['idL']."','".$_POST['tensp']."','".$_POST['anhsp']."','".$_POST['giasp']."','".$_POST['mota']."','".$_POST['tt']."')");
	}

	function suaPrice(){
		$id = $_POST['id'];
		$fg = $_POST['fromGia'];
		$tg = $_POST['togia'];
		$tt = $_POST['trangthai'];
		$result=$this->connect->query("update banggia set fromGia = '$fg', toGia = '$tg', trangthai= '$tt' where id= '$id'");

	}

	function suaTH(){
		$ten = $_POST['suaTH'];
		$id = $_GET['idsua'];
		$tt=$_POST['tt'];

		$this->connect->query("update thuonghieu set name='$ten',trangthai='$tt' where id = '$id'"); 

	}

	function selectTH(){
		$id=$_GET['idsua'];
		$result=$this->connect->query("select*from thuonghieu where id = '$id'"); 
		return $result;
	}

		function xoaPrice(){
		$id = $_GET['id'];
		$this->connect->query("delete from banggia where id = '$id'"); 
		
	}

	function selectGia(){
		$id=$_GET['idgia'];
		$result=$this->connect->query("select*from banggia where id = '$id'"); 
		return $result;
}

	function suaGia(){
		$giad = $_POST['fromGia'];
		$giac = $_POST['toGia'];
		$id=$_GET['idgia'];
		$tt=$_POST['tt'];

		$this->connect->query("update banggia set fromGia='$giad',trangthai='$tt',toGia='$giac' where id = '$id'"); 

	}

	function xoacake(){
		$id = $_GET['id'];
		$this->connect->query("delete from sanpham where id = '$id'"); 
		
	}

	function slsp(){
		$id = $_GET['id'];

		return $this->connect->query("select * from sanpham where id = '$id'");

	}

	function suasp(){
		$thid = $_POST['THid'];
		$giasp = $_POST['giasp'];
		$tensp=$_POST['tensp'];
		$mota=$_POST['mota'];
		$id=$_GET['id'];
		$tt=$_POST['tt'];

		$this->connect->query("update sanpham set THid='$thid',trangthaisp='$tt',giasp='$giasp' ,
			tensp='$tensp', mota= '$mota' where id = '$id'"); 
	}
}
?>	