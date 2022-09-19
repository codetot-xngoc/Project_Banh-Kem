<section>
	<?php foreach($product as $sp): ?>
		<section class="sanpham">
			<section>
				<img src="images/<?php echo $sp['anhsp'] ?>">
			</section>
			<section><?php echo $sp['tensp'] ?></section>
			<section class="gia"><?php echo number_format($sp['giasp'],0,',','.')  ?> đ</section>
			<!-- <section><a href="?request=cart&idsp=<?php echo $sp['id']; ?>">[ CHỌN MUA ]</a></section> -->
			
		</section>
			<!-- echo $sp['tensp']; -->

		<?php endforeach; ?> 	
</section>