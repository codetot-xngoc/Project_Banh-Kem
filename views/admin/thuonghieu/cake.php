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
					<h1 class="category-title">Danh sách Bánh</h1>
					<a href="?request=themCake" class="category-add">[THÊM]</a>
					<table width="100%" border="1" class="category-table">
						<thead>
						<tr>
							<th>Tên</th>
							<th>Giá</th>
							<th>Trạng Thái</th>
							<th>Chức Năng</th>

						</tr>
						</thead>
						<tbody>
							
					<?php foreach($hsx as $item): ?>
						<tr>
							<td width="20%"><section class="thuonghieu"><?php echo $item['tensp']; ?></section></td>
							<td width="20%"><section class="thuonghieu"><?php echo $item['giasp']; ?></section></td>
							<td><section class="thuonghieu"><?php echo $item['trangthaisp']==1?'Active':'Unactive'; ?></td>
							<td><a href="?request=suasp&id=<?php echo $item['id'] ?>" style="margin-right:10px;">Update</a> <a href="?request=xoaCake&id=<?php echo $item['id'] ?>">Xóa</a></td>
						</tr>
						
					<?php endforeach; ?>

						</tbody>

					</table>
					
				</section>