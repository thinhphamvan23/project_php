
<form action="index.php?act=billcomfirm" method="post">
<div class="Home">

        <?php

            if(isset($_SESSION["user"])){
                $name = $_SESSION["user"]["user"];
                $address = $_SESSION["user"]["address"];
                $email = $_SESSION["user"]["email"];
                $tel = $_SESSION["user"]["tel"];
            }
            else{
                $name = "";
                $address = "";
                $email = "";
                $tel = "";
            }

        ?>

        <div class="Infomation">
            <div class="Infoname">
                <h3>Thông tin đặt hàng</h3>
                <div class="Infoname_item">
                    <p>Người đặt hàng</p>
                    <input type="text" name="name" value="<?=$name?>">
                </div>
                <div class="Infoname_item">
                    <p>Địa chỉ</p>
                    <input type="text" name="address" value="<?=$address?>">
                </div>
                <div class="Infoname_item">
                    <p>Email</p>
                    <input type="text" name="email" value="<?=$email?>">
                </div>
                <div class="Infoname_item">
                    <p>Điện thoại</p>
                    <input type="text" name="tel" value="<?=$tel?>">
                </div>
            </div>


            <div class="Infoname">
                <h3>Phương thức thanh toán</h3>
                <input type="radio" id="tructuyen" value="1" name="thanhtoan" checked>
                <label for="tructuyen">Trả tiền khi nhận hàng</label><br>
                <input type="radio" id="tructuyen" value="2" name="thanhtoan">
                <label for="tructuyen">Chuyển khoản ngân hàng</label><br>
                <input type="radio" id="tructuyen" value="3" name="thanhtoan">
                <label for="tructuyen">Thanh toán online</label><br>
            </div>


            <div class="product_detail">

                <h3 class="name">Giỏ hàng</h3>
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
                        $sum=0;
                        foreach ($_SESSION["mycart"] as $cart) {
                            $thanhtien = $cart[3]*$cart[4];
                            $sum+=$thanhtien;
                            echo '
                            <div class="infobill">
                                    <p><img src="'.$cart[2].'"></p>
                                    <p>'.$cart[1].'</p>
                                    <p>'.$cart[3].'</p>
                                    <p>'.$cart[4].'</p>
                                    <p>'.$thanhtien.'</p>
                                    <p></p>
                                
                            </div>
                            ';
                        }

                        echo '
                        <div class="sumbill">
                  
                                <p>Tổng đơn hàng:</p>
                            
                                <p id="tt">'.$sum.'</p>
                                
                        
                        </div>
                        ';

                    ?>

                    <a href="index.php?act=billcomfirm"><input type="submit" name="dathang" value="Đồng ý đặt hàng"></a>

                </div>

              
            </div>

        </div> 
        
        <?php
        include "view/formright.php";
    ?>
 </div>

 </form>