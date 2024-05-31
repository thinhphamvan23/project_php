<div class="listcatalog">
    <h3 class="look">DANH SÁCH SẢN PHẨM</h3>

    <form action="index.php?act=listsp" method="post">
        <input type="text" name="key">
        <select name="iddm">
            <option value="0">Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';  
            }
        ?>
        </select>

        <input type="submit" name="shareOK" value="OK">
    </form>

    <table>
        <div class="nametable">
            <p>Mã loại</p>
            <p>Tên loại</p>
            <p>Giá</p>
            <p>Hình ảnh</p>
            <p>Mô tả</p>
            <p>Lượt xem</p>
            <p></p>
        </div>

        <?php
            foreach ($listsanpham as $sanpham) {
               extract($sanpham);
               $suasp = "index.php?act=suasp&id=".$id;
               $xoasp = "index.php?act=xoasp&id=".$id;
                $hinhpath = "../upload/".$image;
                if(is_file($hinhpath)){
                    $hinh =" <img src='".$hinhpath."' height='80'>";    
                }
                else{
                    $hinh = "Không có hình";
                }

               echo '
                    <tr class="infotable">
                        <td class="id">'.$id.'</td>
                         <td class="name">'.$name.'</td>
                         <td class="name">'.$price.'</td>
                         <td class="hinh">'.$hinh.'</td>
                         <td class="name">'.$mota.'</td>
                         <td class="name">'.$view.'</td>
                         <td class="control">
                        <a href="'.$suasp.'"><input type="button" value="Sửa"></a> 
                        <a href="'.$xoasp.'"> <input type="button" value="Xóa"></a>
                        </td>
                    </tr>
               ';
            }
        ?>

      
    </table>

    <button>Chọn tất cả</button>
    <button>Bỏ chọn tất cả</button>
    <button>Xóa các mục đã chọn</button>
    <button>Nhập thêm</button>
</div>