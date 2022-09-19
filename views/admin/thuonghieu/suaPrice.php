<style>
	.thuonghieu {
		text-align: center;
	}

	table tr {
		margin-bottom: 20px;
	}
	
</style>
<?php foreach($gia as $item): ?>
<section class="thuonghieu">
				<h1>Sửa Bảng Giá</h1>

				<section class="alert-danger"><?=$alert??''?></section><br>

			<section>
				<form method="POST">
					<table width="75%" cellspacing="0">
						
						<tbody>
							
					
						<tr>
							<td width="50%">Từ giá :</td>
							<td ><input type="text" name="fromGia" value="<?php echo $item['fromGia']?>" class="tenTH" required></td>
							
						</tr>
                        <tr>
							<td width="50%">Đến giá :</td>
							<td ><input type="text" name="toGia" value="<?php echo $item['toGia']?> "class="tenTH" required></td>
							
						</tr>
						<tr>
							<td width="50%">Trạng Thái :</td>
							<td>
								<input type="radio" name="tt" checked value="1">Active
								<input type="radio" name="tt" value="0">Unactive
							</td>
							
						</tr>
						<tr>
							<td></td>
							<td><input  type="submit" value="Sửa mới" name="" style="color: darkviolet;background-color: antiquewhite;"></td>
						</tr>
					

						</tbody>

					</table>
				</form>
				</section>
					
					
				</section>
				<?php endforeach; ?>