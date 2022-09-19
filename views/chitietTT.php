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
		font-size: 30px;
		color: #f08632;
		margin: 20px 100px;
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
		padding: 0 70px;
	}
</style>
<?php foreach($ctTT as $ct): ?>
	<section class="detail-cake">
		<img src="<?php echo $ct['anhnews'] ?>">
		<h2><?php echo $ct['tennews']; ?></h2>
		<p><?php echo $ct['motanews']; ?></p>
	</section>
<?php endforeach; ?>
