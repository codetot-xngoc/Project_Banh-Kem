<section>
	<?php if(mysqli_num_rows($product) == 0) :?>
	<section class="Tb">
		<h2>Không Tìm Thấy Sản Phẩm</h2>
		<img src="images/anya.jpg">
	</section>

	
	<?php else: foreach($product as $sp): ?>
		<section class="sanpham ">
			<section class="">
				<img class="img-circle" src="images/<?php echo $sp['anhsp'] ?>">
			</section>
			<section><a style="font-size: 30px" href="?request=chitiet&tensp=<?php echo $sp['id'] ?>"><?php echo $sp['tensp'] ?></a></section>
			<section class="gia"><?php echo number_format($sp['giasp'],0,',','.')  ?> đ</section>
			<?php if(!empty($_SESSION['userr'])): ?>
			<section><a href="?request=cart&action=add&id=<?php echo $sp['id']; ?>">[ CHỌN MUA ]</a></section>
			<?php endif; ?>
			
		</section>


		<?php endforeach; ?>

	<?php endif; ?> 	
</section>