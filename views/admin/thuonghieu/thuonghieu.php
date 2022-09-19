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
					<h1 class="category-title">Danh sách loại bánh</h1>
					<a href="?request=themTH" class="category-add">[THÊM]</a>
					<table width="100%" border="1" class="category-table">
						<thead>
						<tr>
							<th>Tên</th>
							<th>Trạng Thái</th>
							<th>Chức Năng</th>

						</tr>
						</thead>
						<tbody>
							
					<?php foreach($hsx as $item): ?>
						<tr>
							<td width="20%" method="GET"><section class="thuonghieu" name="tenTH"><?php echo $item['name']; ?></section></td>
							<td><section class="thuonghieu"><?php echo $item['trangthai']==1?'Active':'Unactive'; ?></td>
							<td><a href="?request=suaTH&idsua=<?php echo $item['id'] ?>&trangt=<?php echo	$item['trangthai'] ?>" style="margin-right:10px;">Update</a> <a href="?request=xoaTH&id=<?php echo $item['id'] ?>">Xóa</a></td>
						</tr>
						
					<?php endforeach; ?>

						</tbody>

					</table>
					
				</section>