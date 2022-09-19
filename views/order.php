<section class="container center order">
 	<h1 style="text-align:center;color:violet">Thông tin mua hàng</h1>
 	<section class="col-md-8 dk" style="margin: auto">
 		
 		<form action="" method="POST">
 			<section class="form-group">
 				<label>Họ và Tên : </label><input type="text" name="fullname" value="<?=$info['fullname']?>" class="form-control">
 			</section>
 			<section class="form-group">
 				<label>Điện Thoại : </label><input type="tel" name="sdt" value="<?=$info['mobie']?>"  class="form-control">
 			</section>
 			<section class="form-group">
 				<label>email : </label><input type="email" name="email" value="<?=$info['email']?>"  class="form-control">
 			</section>
 			<section class="form-group">
 				<label>Điạ Chỉ : </label><textarea class="form-control" name="dc"><?php echo $info['address'] ?></textarea>
 			</section>
 			<section class="form-group" style="margin-right:19%"><input class="btn btn-outline-secondary" type="submit" value="Cập Nhật Thông Tin"></section>
 		</form>
 	</section>

 		<section class="col-md-8" style="margin-top: 50px">
	
		<h2 style="color:violet">Phương Thức Thanh Toán</h2>
		<form method="post" action="">
			<?php foreach ($thanhtoan as $value): ?>
				<section class="form-group">
			<input type="radio" name="tenTT" value="<?=$value['id']?>"  <?=$value['id']!=1?:'checked'?> ><?php echo $value['ten']; ?>
				</section>
			<?php endforeach ?>
			<section class="form-group"><input type="submit" value="Đặt Hàng" class="btn btn-outline-info"></section>
		</form>
	</section>