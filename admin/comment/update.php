<?php


    if(is_array($binhluansua)){
        extract($binhluansua);
    }

?>


<form id="update" action="index.php?act=updatebl" method="post" enctype="multipart/form-data">
<div class="adddm">
    <h3 class="look">CẬP NHẬP BÌNH LUẬN</h3>
   
    <div class="tenloai">
        <p>Nội dung</p>
        <input type="text" name="noidung" value="<?=$noidung?>"> 
    </div>

    <div class="tenloai">
        <p>IDuser</p>
        <input type="text" name="iduser" value="<?=$iduser?>">
    </div>


    <div class="tenloai">
        <p>IDpro</p>  
        <input type="text" name="idpro" value="<?=$idpro?>">

    </div>

    <div class="tenloai">
        <p>Ngày đăng</p>
        <input type="text" name="ngaydang" value="<?=$date?>">
    </div>
    
    <input type="hidden" name="id" value="<?=$id?>">
    <input class="themmoi" type="submit" value="Cập nhập" name="capnhap">
    <input class="nhaplai" type="reset" value="Nhập lại">
   <a href="index.php?act=dsbl"> <input class="danhsach" type="button" value="Danh sách" name="danhsach"> </a> 

    <?php
        if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
    
    ?>

</div>

</form>