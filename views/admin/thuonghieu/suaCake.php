<style>
    .thuonghieu {
        text-align: center;
    }

    table tr {
        margin-bottom: 20px;
    }
    
</style>
<?php foreach($sp as $item): ?>

<section class="thuonghieu">
                <h1>Sửa Bánh</h1>

                <section class="alert-danger"><?=$alert??''?></section><br>

            <section>
                <form method="POST">
                    <table width="75%" cellspacing="0">
                        
                        <tbody>
                            
                    
                        <tr>
                            <td width="50%">THid :</td>
                            <td ><input type="number" name="THid" value="<?php echo $item['THid'] ?>" class="tenTH" required></td>
                        </tr>
                        <tr>
                            <td width="50%">Tên Bánh :</td>
                            <td ><input type="text" name="tensp" value="<?php echo $item['tensp'] ?>" class="tenTH" required></td>
                        </tr>
                        <tr>
                            <td width="50%">Ảnh Bánh :</td>
                            <td ><input type="text" name="anhsp" value="<?php echo $item['anhsp'] ?>" class="tenTH" required></td>
                        </tr>
                        <tr>
                            <td width="50%">Giá Bánh :</td>
                            <td ><input type="text" name="giasp" value="<?php echo $item['giasp'] ?>" class="tenTH" required></td>
                        </tr>
                        <tr>
                            <td width="50%">Mô Tả :</td>
                            <td ><textarea name="mota" id="" value="<?php echo $item['mota'] ?>" cols="30" rows="10" required></textarea></td>
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

                <?php endforeach; ?>