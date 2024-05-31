<div class="listcatalog">
    <h3 class="look">THỐNG KÊ</h3>


    <table>
        <div class="nametable">
            <p>STT</p>
            <p>LOẠI HÀNG</p>
            <p>SỐ LƯỢNG</p>
            <p>GIÁ CAO NHẤT</p>
            <p>GIÁ THẤP NHẤT</p>
            <p>GIÁ TRUNG BÌNH</p>
        </div>

        <?php

            foreach ($listthongke as $thongke) {
                extract($thongke);
                echo '
                    <tr class="infotable">
                        <td class="id">'.$iddm.'</td>
                        <td class="name">'.$tendm.'</td>
                        <td class="name">'.$soluong.'</td>
                        <td class="hinh">'.$maxprice.'</td>
                        <td class="name">'.$minprice.'</td>
                        <td class="control">'.$tbprice.'</td>
                    </tr>

                ';
            }

        ?>
       
    </table>

    <button><a href="index.php?act=bieudo">Xem biểu đồ</a></button>
   
</div>