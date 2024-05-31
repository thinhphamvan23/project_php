<?php

    if(isset($bill)&&is_array($bill)){
        extract($bill);
    }

?>

<div class="Home">

        <div class="Infomation">

            <div class="Infoname">
                <h3>Cảm ơn</h3>
                <div class="Infoname_item">
                  <h2>Cảm ơn quý khách đã đặt hàng!</h2>
                </div>
            </div>

            <div class="Infoname">
                <h3>Mã đơn hàng</h3>
                <div class="Infoname_item">
                  <h2>DAM <?=$bill["id"]?></h2>
                </div>
            </div>


            <div class="Infoname">
                <h3>Thông tin đơn hàng</h3>
                <div class="Infoname_item">
                    <p>Ngày đặt hàng:</p>
                    <p><?=$bill["ngaydathang"]?></p>
                </div>
                <div class="Infoname_item">
                    <p>Tổng đơn hàng:</p>
                    <p><?=$bill["tongtien"]?></p>
                </div>
                <div class="Infoname_item">
                    <p>Phương thức thanh toán:</p>
                    <p><?=$bill["pttt"]?></p>
                </div>
              
            </div>  

            <div class="Infoname">
                <h3>Thông tin đặt hàng</h3>
                <div class="Infoname_item">
                    <p>Người đặt hàng:</p>
                    <p><?=$bill["bill_name"]?></p>
                </div>
                <div class="Infoname_item">
                    <p>Địa chỉ:</p>
                    <p><?=$bill["bill_address"]?></p>
                </div>
                <div class="Infoname_item">
                    <p>Email:</p>
                    <p><?=$bill["bill_email"]?></p>
                </div>
                <div class="Infoname_item">
                    <p>Điện thoại:</p>
                    <p><?=$bill["bill_tel"]?></p>
                </div>
            </div>  



            <div class="product_detail">
                <h3 class="name">Thông tin giỏ hàng</h3>
                <div class="bill">
                    <div class="namebill">
                            <p>Hình</p>
                            <p>Sản phẩm</p>
                            <p>Đơn giá</p>
                            <p>Số lượng</p>
                            <p>Thành tiền</p>
                            <p>Thao tác</p>
                       
                    </div>
                    <?php
                        foreach ($billct as $cart) {
                            $thanhtien = $cart["price"]*$cart["soluong"];
                            echo '
                            <div class="infobill">
                                    <p><img src="'.$cart["image"].'"></p>
                                    <p>'.$cart["name"].'</p>
                                    <p>'.$cart["price"].'</p>
                                    <p>'.$cart["soluong"].'</p>
                                    <p>'.$thanhtien.'</p>
                                    <p></p>
                                
                            </div>
                            ';
                        }
                    ?>
                </div>
            </div>  
      </div>   
    <?php
        include "view/formright.php";
    ?>
</div>

  