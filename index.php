<?php 
session_start();
include("controller/clientController.php");
$cc = new clientController();
$cm = new ClientModel();
$sp = $cm->showSP();

// $htt = new ClientModel();

	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/48218c34d2.js" crossorigin="anonymous"></script>
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style-css.css">
	<title>Wonderful Cake</title>
</head>
<body>
	<section class="container-fluid">
			<section class="header">
				<!-- Navbar -->
				<nav class="navbar">
					<div class="navbar-left">
						<div class="navbar-logo">
							<img src="./images/logo.png" alt="">
						</div>
						<a href="?request=home" title="" class="active">Trang Chủ</a>
						<a href="?request=news" title="">Tin tức</a>
						<a href="#our-team" title="">Đội ngũ</a>
						<a href="#contact" title="">Liên hệ</a>
					</div>
					<?php 
							if(empty($_SESSION['userr'])):
					?>
						<div class="navbar-right">
							<a href="?request=signin" title="" class="open">Đăng Nhập</a>
							<a href="?request=signup" title="" class="open">Đăng Kí</a>
						</div>
					<?php else: ?>
						<style type="text/css">
							nav a{
								width: 20%;
			
							}
							nav{
								text-align: center
							}
						</style>
						<a href="?request=cart" title="">Giỏ Hàng</a>
						
				
						<section >
							<span style="color: #551A8B;line-height:30px">Xin Chào : <?php echo $_SESSION['userr'] ?></span>
						<a href="?request=thoat" style="width:20%">[Thoát] </a></section>
					<?php endif; ?>
				</nav>

				<aside class="search">
					<form action="?request=show">
						<input type="hidden" name="request" value="show">
						<input type="search" name="timkiem" placeholder="Tìm kiếm sản phẩm">
						<input type="submit" value="Tìm kiếm" name="">
					</form>
               </aside>

				<div class="header-title">
					<h1>Chào mừng đến với <span>Wonderful Cake</span></h1>
					<h2>Sale off lên đến <span>50%</span> cho lần mua đầu tiên!</h2>
					<button>Mua ngay</button>
				</div>
			</section>

		<section>
			<!-- Product -->
			<aside class="product section">
				<?php 
				// if(empty($_SESSION['userr'])):

				// else:
				 ?>
				<h2>Sản Phẩm</h2>
				
				<div class="product-category">
					<div class="product-cate-l">
						<h3>Theo Loại:</h3>
						<?php 
						$ht = $cc->th;
						foreach($ht as $item):?>
							<section><a href="?request=show&thid=<?php echo $item['id']; ?>" class="product-cate-link">
								<?php  echo $item['name'] ;?></a>
							</section>
						<?php   endforeach;

						// endif;


						// $ht = $htt->ThuongHieu();
						//  foreach($ht as $item):
						// 	echo $item['name'] . "<br>";
						//  endforeach;
						?>
					</div>

					<div class="product-cate-p">
						<h3>Theo bảng giá:</h3>
						<?php 
							$gia = $cc->gia;
							foreach($gia as $item ):
						?>
						<section> 
							<a href="?request=show&fromgia=<?php echo $item['fromGia']; ?>&togia=<?php 
						echo $item['toGia'] ;?>" class="product-cate-link"><?php echo number_format( $item['fromGia'],0,',','.').'đ - '.number_format($item['toGia'],0,',','.').'đ' ?></a>
						</section>
						<?php endforeach; ?>`
					</div>
				</div>
			</aside>

			<article><?php $cc->routes(); ?></article>

		</section>

		<section id="our-team" class="section">
			<h2>Đội ngũ của chúng tôi</h2>

			<div class="team-box">
				<div class="team-member">
					<img src="./images/ooo (1).jpg" alt="">
					<div class="team-desc">
						<h4 class="team-name">Nguyễn Tuấn Tùng</h4>
						<p class="team-role">Nhân viên phục vụ</p>
						<div class="team-social">
							<i class="fa-brands fa-facebook"></i>
							<i class="fa-brands fa-twitter"></i>
							<i class="fa-brands fa-instagram"></i>
							<i class="fa-brands fa-youtube"></i>
						</div>
					</div>
				</div>

				<div class="team-member">
					<img src="./images/285781766_1240520266484183_7610160125395999031_n.jpg" alt="">
					<div class="team-desc">
						<h4 class="team-name">Nguyễn Đức Hải</h4>
						<p class="team-role">Thợ làm bánh</p>
						<div class="team-social">
							<i class="fa-brands fa-facebook"></i>
							<i class="fa-brands fa-twitter"></i>
							<i class="fa-brands fa-instagram"></i>
							<i class="fa-brands fa-youtube"></i>
						</div>
					</div>
				</div>

				<div class="team-member">
					<img src="./images/oo.jpg" alt="">
					<div class="team-desc">
						<h4 class="team-name">Nguyễn Xuân Ngọc</h4>
						<p class="team-role">Thu ngân</p>
						<div class="team-social">
							<i class="fa-brands fa-facebook"></i>
							<i class="fa-brands fa-twitter"></i>
							<i class="fa-brands fa-instagram"></i>
							<i class="fa-brands fa-youtube"></i>
						</div>
					</div>
				</div>

			</div>

			<button>Tham gia với chúng tôi</button>
		</section>

		<section id="follow">
			<div class="follow-content">
				<h3>Theo Dõi Trên Facebook</h3>
				<h2>Những khoảnh khắc ngọt ngào được lưu lại làm kỷ niệm.</h2>
				<div class="follow-fb">
			      	<i class="fa-brands fa-facebook-f"></i>
					<span>@Wonderful_Cake</span>
				</div>
			</div>

			<div class="follow-allbum">
				<div class="follow-img">
					<img src="./images/instagram/instagram-1.jpg" alt="">
				</div>
				<div class="follow-img">
					<img src="./images/instagram/instagram-2.jpg" alt="">
				</div>
				<div class="follow-img">
					<img src="./images/instagram/instagram-3.jpg" alt="">
				</div>
				<div class="follow-img">
					<img src="./images/instagram/instagram-4.jpg" alt="">
				</div>
				<div class="follow-img">
					<img src="./images/instagram/instagram-5.jpg" alt="">
				</div>
				<div class="follow-img">
					<img src="./images/instagram/instagram-1.jpg" alt="">
				</div>
			</div>
		</section>

		<section id="contact" class="section">
			<h2>Liên hệ</h2>

			<div class="contact-desc">
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d314342.1629394779!2d5.859503713285848!3d49.29861337526868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794d5fc32d5d3c3%3A0x6d8ae891b0a8718f!2sWonderful%20Cake%20-%20Traiteur%20Lorraine%20(Traiteur%20buffet%20%26%20Patisserie%20Cake%20Designer%2C%20tout%20%C3%A9v%C3%A8nements)!5e0!3m2!1svi!2s!4v1662200579382!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>

				<div class="contact-form">
					<form action="">
						<input type="text" name="" id="" placeholder="Họ và tên">
						<input type="email" name="" id="" placeholder="Email">
						<textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
						<input type="submit" value="Gửi">
					</form>
				</div>
			</div>
		</section>

		<section id="footer">
			<div class="footer-infor">
				<div class="working">
					<h4>Giờ làm việc</h4>
					<p>Thứ Hai - Thứ Sáu: 07:00 - 20:00</p>
					<p>Thứ Bảy: 08:00 - 19:00</p>
					<p>Chủ Nhật: 08:00 - 18:00</p>
				</div>

				<div class="content">
					<img src="./images/footer-logo.png" alt="">
					<p>Ghé qua cửa hàng của chúng tôi và có cơ hội nhận nhiều voucher giảm giá!</p>
					<h4>Theo dõi chúng tôi tại:</h4>
					<div class="social">
					        <i class="fa-brands fa-facebook"></i>
							<i class="fa-brands fa-twitter"></i>
							<i class="fa-brands fa-instagram"></i>
							<i class="fa-brands fa-youtube"></i>
					</div>
				</div>
			</div>

			<div class="copyright">
				<p>Copyright ©2022 All rights reserved</p>
				<p>
					<span>Chính sách</span>
					<span>Điều khoản sử dụng</span>
					<span>Vị trí</span>
				</p>
				<p>Created by: 
					<a href="https://www.facebook.com/profile.php?id=100043839042881" target="_blank">Việt Hoàng</a>
					 <a href="https://www.facebook.com/profile.php?id=100011770816830" target="_blank">Nguyễn Tuấn Tùng</a>
					  <a href="https://www.facebook.com/haidzaivl.611" target="_blank">Nguyễn Đức Hải</a>
					   <a href="https://www.facebook.com/profile.php?id=100022147272777" target="_blank">Nguyễn Ngọc</a></p>
			</div>
		</section>
	</section>

</body>
</html>