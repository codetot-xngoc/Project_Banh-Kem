<style>
	.thuonghieu {
		text-align: center;
	}

	table tr {
		margin-bottom: 20px;
	}
	
</style>

<section class="thuonghieu">
				<h1>THÊM Bánh</h1>

				<section class="alert-danger"><?=$alert??''?></section><br>

			<section>
				<form method="POST">
					<table width="75%" cellspacing="0">
						
						<tbody>
							
					<tr>
							<td width="50%">id Loại Bánh :</td>
							<td ><input type="text" name="idL" class="tenTH" required></td>
						</tr>
						
                        <tr>
							<td width="50%">Tên Bánh :</td>
							<td ><input type="text" name="tensp" class="tenTH" required></td>
						</tr>
                        <tr>
							<td width="50%">Ảnh Bánh :</td>
							<td ><input type="file" name="anhsp" class="tenTH" required></td>
						</tr>
                        <tr>
							<td width="50%">Giá Bánh :</td>
							<td ><input type="text" name="giasp" class="tenTH" required></td>
						</tr>
                        <tr>
							<td width="50%">Mô Tả :</td>
							<td ><textarea name="mota" id="" cols="30" rows="10" required></textarea></td>
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