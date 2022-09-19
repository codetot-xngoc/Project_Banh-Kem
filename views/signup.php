<section class="signup">
		<section class="alert-danger"><?=$alert??''?></section>
		<section class="sign-box">
		<h1>Đăng Kí Tài Khoản</h1>
		<form method="post">
			<section class="form-group"><label>Tài Khoản:</label><input class="form-control"  type="text" name="tk1" required></section>

			<section class="form-group">
				<label class="password-up">Mật Khẩu:</label><input class="form-control" type="password" name="mk1" required>
			</section>
			<section class="form-group">
				<label class="name-up">Họ tên:</label><input class="form-control" type="text" name="full" required>
			</section>
			<section class="form-group phone-up">
				<label class="">Số Điện Thoại:</label><input class="form-control" type="text" name="sdt" required >
			</section>
			<section class="form-group">
				<label class="email-up">Email:</label><input class="form-control" type="email" name="email" >
			</section>
			<section class="form-group">
				<label class="address-up">Địa Chỉ:</label><input class="form-control" type="text" name="dc" required></input>
			</section>
			<section><input type="submit" class="btn btn-primary" value="Đăng Kí" name=""></section>
		</form>
	</section>
</section>