<section class="signin">
	<section class="alert-danger"><?=$alert??''?></section>

	<section class="sign-box">
		<h1>ĐĂNG NHẬP ADMIN</h1>
		<form method="POST">
			<section class="form-group">
				<label>Tên Đăng Nhập : </label><input class="form-control" type="text" name="tk" required><br>
			</section>
			<section  class="form-group">
				<label>Mật Khẩu : </label><input class="form-control" type="password" name="mk" required><br>
			</section>
			<section class="form-group">
				<input type="submit" value="Đăng Nhập " class="btn btn-primary" name="">
			</section>
		</form>
	</section>
</section>