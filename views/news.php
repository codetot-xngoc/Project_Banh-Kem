<style>
	.tintuc {
		display: flex;
		align-items: center;
		justify-content: space-around;
	}
	.img-news{
		width: 200px;
		height: 200px;
		object-fit: cover;
	}	
	.img-news-box {
		padding: 30px 20px;
	}
	.news-title {
		font-size: 26px;
		color: #f08632;
		text-decoration: none;
		margin-right: 20px;
	}
	.news-title:hover {
		text-decoration: underline;
	}
</style>
<section>
	<?php foreach($new as $new): ?>
		<section class="tintuc">
						<section class="img-news-box">
							<img class="img-news" src="<?php echo $new['anhnews'] ?>">
						</section>

						<section>
							<a class="news-title" href="?request=chitietTT&id=<?php echo $new['id'] ?>"><?php echo $new['tennews'] ?></a>
						</section>
		</section>

		<?php endforeach; ?>	
</section>