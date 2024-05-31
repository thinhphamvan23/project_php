<?php

    if(is_array($sanphamsua)){
        extract($sanphamsua);
    }
    $hinhpath = "../upload/".$image;
    if(is_file($hinhpath)){
        $hinh ="<img src='".$hinhpath."'>";    
    }
    else{
        $hinh = "Không có hình";
    }

?>


<form id="update" action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
<div class="adddm">
    <h3 class="look">CẬP NHẬP SẢN PHẨM</h3>

    <select name="iddm">
        <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                if($id==$idcatalog) $s="selected"; else $s="";
                echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';  
            }
        ?>
    </select>
   
    <div class="tenloai">
        <p>Tên loại</p>
        <input type="text" name="tensp" value="<?php   if(is_array($sanphamsua)){
        extract($sanphamsua);
    } echo $name?>"> 
    </div>

    <div class="tenloai">
        <p>Giá</p>
        <input type="text" name="price" value="<?=$price?>">
    </div>


    <div class="tenloai">
        <p>Image</p>  
        <?=$hinh?>
        <input type="file" name ="img">
    </div>

    <div class="tenloai">
        <p>Mô tả</p>
        <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
    </div>
    
    <input type="hidden" name="id" value="<?=$id?>">
    <input class="themmoi" type="submit" value="Cập nhập" name="capnhap">
    <input class="nhaplai" type="reset" value="Nhập lại">
   <a href="index.php?act=listsp"> <input class="danhsach" type="button" value="Danh sách" name="danhsach"> </a> 

    <?php
        if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
    
    ?>

</div>

</form>