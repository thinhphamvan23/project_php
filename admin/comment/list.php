<div class="listcatalog">
    <h3 class="look">DANH SÁCH BÌNH LUẬN</h3>


    <table>
        <div class="nametable">
            <p>ID</p>
            <p>Nội dung</p>
            <p>Iduser</p>
            <p>Idpro</p>
            <p>Ngày đăng</p>
            <p></p>
        </div>

        <?php
            foreach ($listbinhluan as $binhluan) {
               extract($binhluan);
               $suabl = "index.php?act=suabl&id=".$id;
               $xoabl = "index.php?act=xoabl&id=".$id;

               echo '
                    <tr class="infotable">
                        <td class="id">'.$id.'</td>
                         <td class="name">'.$noidung.'</td>
                         <td class="name">'.$iduser.'</td>
                         <td class="hinh">'.$idpro.'</td>
                         <td class="name">'.$date.'</td>
                         <td class="control">
                        <a href="'.$suabl.'"><input type="button" value="Sửa"></a> 
                        <a href="'.$xoabl.'"> <input type="button" value="Xóa"></a>
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