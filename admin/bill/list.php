<div class="listcatalog">
    <h3 class="look">DANH SÁCH ĐƠN HÀNG</h3>
    <form method="post">
    <input type="text" name="key">
    <input type="submit" name="searchbill" value="OK">
    </form>
    <table>
        <div class="nametable">
            <p>Mã Đơn Hàng</p>
            <p>Khách hàng</p>
            <p>Số lượng hàng</p>
            <p>Giá trị</p>
            <p>Tình trạng</p>
            <p>Ngày đặt</p>
            <p></p>
        </div>

       
        <?php
            foreach ($listbill as $bill) {
                extract($bill);
               
                $ttdh =  ttdonhang($bill["bill_status"]);
                $soluong = loadall_cart_count($bill["id"]);
                echo '
                <tr class="infotable">
                <td class="id">'.$bill["id"].'</td>
                 <td class="name">
                 '.$bill["bill_email"].' <br>
                 '.$bill["bill_address"].' <br>
                 '.$bill["bill_name"].' <br>
                 '.$bill["bill_tel"].' <br>
                 </td>
                 <td class="name">'.$soluong.'</td>
                 <td class="hinh">'.$bill["tongtien"].'</td>
                 <td class="name">'.$ttdh.'</td>
                 <td class="name">'.$bill["ngaydathang"].'</td>
                 <td class="control">
                <a href="#"><input type="button" value="Sửa"></a> 
                <a href="#"> <input type="button" value="Xóa"></a>
                </td>
            </tr>
                ';
            }

        ?>

             
      
    </table>
</div>