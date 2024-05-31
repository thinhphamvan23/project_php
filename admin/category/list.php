<div class="listcatalog">
    <h3 class="look">DANH SÁCH LOẠI HÀNG</h3>

    <table>
        <div class="nametable">
            <p id="maloai">Mã loại</p>
            <p id="tenloai">Tên loại</p>
        </div>

        <?php
            foreach ($listdanhmuc as $danhmuc) {
               extract($danhmuc);
               $suadm = "index.php?act=suadm&id=".$id;
               $xoadm = "index.php?act=xoadm&id=".$id;
               echo '
                    <tr class="infotable">
                        <td class="check"><input type="checkbox"></td>
                        <td class="id">'.$id.'</td>
                        <td class="name">'.$name.'</td>
                        <td class="control">
                        <a href="'.$suadm.'"><input type="button" value="Sửa"></a> 
                        <a href="'.$xoadm.'"> <input type="button" value="Xóa"></a>
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