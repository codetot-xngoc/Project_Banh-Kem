<style>
	.thuonghieu {
		text-align: center;
	}

	table tr {
		margin-bottom: 20px;
	}
	
</style>

<section class="thuonghieu">
				<h1>THÊM THƯƠNG HIỆU</h1>

				<section class="alert-danger"><?=$alert??''?></section><br>

			<section>
				<form method="POST">
					<table width="75%" cellspacing="0">
						
						<tbody>
							
					
						<tr>
							<td width="50%">Loại Bánh :</td>
							<td ><input type="text" name="tenTH" class="tenTH" required></td>
							
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
							<td><input  type="submit" value="Thêm mới" name="" style="color: darkviolet;background-color: antiquewhite;"></td>
						</tr>
					

						</tbody>

					</table>
				</form>
				</section>
					
					
				</section>