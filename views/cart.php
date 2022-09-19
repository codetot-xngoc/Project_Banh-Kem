
<?php 
    if(isset($_SESSION['cart'])):
    ?>
    <form action="?request=cart&action=update" method="POST">
    <?php
      $tong=0;
        if (mysqli_num_rows($add)>0) { ?>
            <section class="container row cart">
                <section class="col-md-2">Ảnh</section>
                <section class="col-md-2">Tên</section>
                <section class="col-md-2">Giá </section>
                <section class="col-md-2">Số Lượng</section>
                <section class="col-md-2">Tổng Phụ</section>
                <section class="col-md-2"></section>
            </section>
            <?php
            foreach ($add as $item) { ?>
                <section class="container row cartTT">
                    <section class="col-md-2"><img src="images/<?=$item['anhsp']?>" width="100%" alt=""></section>
                    <section class="col-md-2"><?php echo $item['tensp'] ?></section>
                    <section class="col-md-2"><?php echo number_format($item['giasp'],0,',','.') ?>vnđ</section>

                    <section class="col-md-2"><input type="number" name="<?=$item['id']?>" value="<?php echo $_SESSION['cart'][$item['id']] ?>" class="form-control"> </section>

                    <section class="col-md-2"><?php echo number_format($item['giasp']*$_SESSION['cart'][$item['id']],0,',','.') ?>vnđ</section>
                    <section class="col-md-2"><a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này')" href="?request=cart&action=delete&id=<?=$item['id']?>" class="btn btn-outline-danger btn-sm">Xóa</a></section>

                </section>
            <?php   
            $tong +=$item['giasp']*$_SESSION['cart'][$item['id']];
            }?>
            <section class="container" style="text-align:right;margin-top:10px" >
                <a href="?request=cart&action=xoatat" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này')" class="btn btn-outline-warning">Xóa Giỏ Hàng</a>&nbsp; 
                <input type="submit" value="Cập Nhật" class="btn btn-outline-primary">
                <a href="?request=cart&action=order" class="btn btn-outline-dark">Thanh Toán</a>

            </section>
        </form>
            <section style="text-align:right"  class="container alert alert-info ">Tổng Tiền : <?php echo number_format($tong,0,',','.') ?>vnđ</section>
        <?php }else{ ?>
            <section class="alert alert-info"  style="text-align:center">Giỏ Hàng Trống</section>
    <?php   }

    endif;
  ?>










