<style>
.thuonghieu {
	text-align: center;
}

.category-title {
	color: #f08632;
}

.category-add {
	color: #2196f3;
	text-decoration: none;
}

.category-add:hover {
	text-decoration: underline;
}

.category-table {
	margin-top: 30px;
}
</style>	

				<section class="thuonghieu">
					<h1 class="category-title">Danh sách loại giá</h1>
					<a href="?request=themPrice" class="category-add">[THÊM]</a>
					<table width="100%" border="1" class="category-table">
						<thead>
						<tr>
							<th>Giá</th>
							<th>Trạng Thái</th>
							<th>Chức Năng</th>

						</tr>
						</thead>
						<tbody>
							
					<?php foreach($hsx as $item): ?>
						<tr>
							<td width="20%"><section class="thuonghieu"><?php echo "$item[fromGia]đ-$item[toGia]đ"; ?></section></td>
							<td><section class="thuonghieu"><?php echo $item['trangthai']==1?'Active':'Unactive'; ?></td>
							<td><a href="?request=suaPrice&idgia=<?php echo	$item['id'] ?>" style="margin-right:10px;">Update</a> <a href="?request=xoaPrice&id=<?php echo	$item['id'] ?>">Xóa</a></td>
						</tr>
						
					<?php endforeach; ?>

						</tbody>

					</table>
					
				</section>