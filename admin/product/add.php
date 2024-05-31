
<form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
<div class="adddm">
    <h3 class="look">THÊM MỚI SẢN PHẨM</h3>
    <select name="iddm">
        <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';  
            }
        ?>
    </select>
   
    <div class="tenloai">
        <p>Tên loại</p>
        <input type="text" name = "tensp">
    </div>

    <div class="tenloai">
        <p>Giá</p>
        <input type="text" name = "price">
    </div>
    <div class="tenloai">
        <p>Image</p>
        <input type="file" name = "img">
    </div>

    <div class="tenloai">
        <p>Mô tả</p>
        <textarea name="mota" cols="30" rows="10"></textarea>
    </div>
    
    <input class="themmoi" type="submit" value="Thêm mới" name="themmoisp">
    <input class="nhaplai" type="reset" value="Nhập lại">
   <a href="index.php?act=listsp"> <input class="danhsach" type="button" value="Danh sách" name="danhsach"> </a> 

    <?php
        if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
    
    ?>

</div>

</form>