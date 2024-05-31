
<form action="index.php?act=adddm" method="post">
<div class="adddm">
    <h3 class="look">THÊM MỚI LOẠI HÀNG HÓA</h3>

    <div class="maloai">
         <p>Mã loại</p>
        <input type="text" name = "maloai">
    </div>
   
    <div class="tenloai">
        <p>Tên loại</p>
        <input type="text" name = "tenloai">

    </div>
    
    <input class="themmoi" type="submit" value="Thêm mới" name="themmoi">
    <input class="nhaplai" type="reset" value="Nhập lại">
   <a href="index.php?act=listdm"> <input class="danhsach" type="button" value="Danh sách" name="danhsach"> </a> 

    <?php
        if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
    
    ?>

</div>

</form>