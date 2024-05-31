<div class="listcatalog">
    <h3 class="look">DANH SÁCH KHÁCH HÀNG</h3>

    <table>
        <div class="nametable">
            <p>ID</p>
            <p>User</p>
            <p>Pass</p>
            <p>Email</p>
            <p>Address</p>
            <p>Tel</p>
            <p>Role</p>
        </div>

        <?php
            foreach ($listtaikhoan as $taikhoan) {
               extract($taikhoan);
               $suatk = "index.php?act=suatk&id=".$id;
               $xoatk = "index.php?act=xoatk&id=".$id;
              
               echo '
                    <tr class="infotable">
                        <td class="id">'.$id.'</td>
                         <td class="name">'.$user.'</td>
                         <td class="name">'.$pass.'</td>
                         <td class="hinh">'.$email.'</td>
                         <td class="name">'.$address.'</td>
                         <td class="name">'.$tel.'</td>
                         <td class="name">'.$role.'</td>
                         <td class="control">
                        <a href="'.$suatk.'"><input type="button" value="Sửa"></a> 
                        <a href="'.$xoatk.'"> <input type="button" value="Xóa"></a>
                        </td>
                    </tr>
               ';
            }
        ?>

      
    </table>

    <button>Chọn tất cả</button>
    <button>Bỏ chọn tất cả</button>
    <button>Nhập thêm</button>
</div>