
<?php foreach($ct as $sp): ?>
	<section class="detail-cake">
		<img src="images/<?php echo $sp['anhsp'] ?>">
		<h2><?php echo $sp['tensp']; ?></h2>
		<h3>Giá: <span><?php echo $sp['giasp']; ?>đ</span></h3>
		<p><?php echo $sp['mota']; ?></p>
	</section>
<?php endforeach; ?>

<style>
	.detail-cake {
		text-align: center;
		padding-top: 30px;
	}

	.detail-cake img {
		height: 350px;
		width: 300px;
	}

	.detail-cake h2 {
		font-size: 36px;
		color: #f08632;
		margin: 20px 0;
	}

	.detail-cake h3 {
		font-size: 25px;
	}

	.detail-cake span {
		color: red;
	}

	.detail-cake p {
		margin-top: 30px;
		text-align: justify;
		font-size: 18px;
		padding: 0 100px;
	}
</style>