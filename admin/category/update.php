<?php

    if(is_array($danhmucsua)){
        extract($danhmucsua);
    }

?>
<form action="index.php?act=updatedm" method="post">

<div class="adddm">
    <h3 class="look">CẬP NHẬP LOẠI HÀNG HÓA</h3>

    <div class="maloai">
         <p>Mã loại</p>
        <input type="text" name = "maloai">
    </div>
   
    <div class="tenloai">
        <p>Tên loại</p>
        <input type="text" name = "tenloai" value = "<?php if(isset($name)&&($name!="")) echo $name; ?>">

    </div>
    <input type="hidden" name="id" value = "<?php if(isset($id)&&($id>0)) echo $id; ?>">
    <input class="themmoi" type="submit" value="Cập nhập" name="capnhap">
    <input class="nhaplai" type="reset" value="Nhập lại">
   <a href="index.php?act=listdm"> <input class="danhsach" type="button" value="Danh sách" name="danhsach"> </a> 

    <?php
        if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
    
    ?>

</div>
</form>