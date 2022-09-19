<?php $act = new adminController(); ?>
<style>


.admin-title {
    margin-top: 40px;
    color: #f08632;
    font-size: 36px;
    text-align: center;
}

.admin-member {
	margin: 30px 0 50px 30px;
	font-size: 18px;
}

.admin-member a {
	margin-left: 10px;
	color: #f08632;
	text-decoration: none;
}

.admin-member a:hover {
	text-decoration: underline;
}

.admin-cate {
	margin-left: 30px;
	font-size: 30px;
	margin-bottom: 15px;
}

.admin-category {
	margin-left: 30px;
	font-size: 18px;
	margin-bottom: 50px;
}

.admin-category li {
	margin-bottom: 15px;
}

.admin-category li a {
	text-decoration: none;
	color: #2196f3;
	font-weight: 600;
}

</style>

<section>
	<h1 class="admin-title">ADMIN</h1>

	<p class="admin-member">Hello : <?php echo $_SESSION['admin'] ?><a href="?request=thoat">[Thoát]</a></p>

	<h2 class="admin-cate">Danh Mục</h2>
	<ul class="admin-category">
		<li><a href="?request=hsx">Loại Bánh</a></li>
		<li><a href="?request=price">Bảng Giá</a></li>
		<li><a href="?request=cake">Bánh</a></li>
    </ul>

	<?php $act->routes(); ?>
</section>