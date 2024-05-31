<div class="Home">

        <div class="Infomation">

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
                       $i=0;
                        foreach ($_SESSION["mycart"] as $cart) {
                            $thanhtien = $cart[3]*$cart[4];
                            $sum+=$thanhtien;
                            $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"> <input type="button" value="Xóa"></a>';
                            echo '
                            <div class="infobill">
                                    <p><img src="'.$cart[2].'"></p>
                                    <p>'.$cart[1].'</p>
                                    <p>'.$cart[3].'</p>
                                    <p>'.$cart[4].'</p>
                                    <p>'.$thanhtien.'</p>
                                    <p>'.$xoasp.'</p>
                                
                            </div>
                            ';
                           $i+=1;
                        }

                        echo '
                        <div class="sumbill">
                  
                                <p>Tổng đơn hàng:</p>
                            
                                <p id="tt">'.$sum.'</p>
                                
                        
                        </div>
                        ';


                    ?>

                    <a href="index.php?act=infobill"><input type="button" value="Tiếp tục đặt hàng"></a>
                    <a href="index.php?act=bill"><input type="submit" value="Xóa hết"></a>

                 
                    
                    <!-- <div class="infobill">
                            <p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEI061BFNdj9_irTDsA_HarFzvMMwYiF1AbA&s"></p>
                            <p>Sản phẩm</p>
                            <p>Đơn giá</p>
                            <p>Số lượng</p>
                            <p>pành tiền</p>
                            <p>pao tác</p>
                    </div> 
                    <div class="infobill">
                        
                           <p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEI061BFNdj9_irTDsA_HarFzvMMwYiF1AbA&s"></p>
                            <p>Sản phẩm</p>
                            <p>Đơn giá</p>
                            <p>Số lượng</p>
                            <p>pành tiền</p>
                            <p>pao tác</p>
                        
                    </div>

                    <div class="infobill">
                        
                        <p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEI061BFNdj9_irTDsA_HarFzvMMwYiF1AbA&s"></p>
                         <p>Sản phẩm</p>
                         <p>Đơn giá</p>
                         <p>Số lượng</p>
                         <p>pành tiền</p>
                         <p>pao tác</p>
                     
                 </div> -->
               
                </div>

              
            </div>



      
          

          

        
          
       
            </div>   


    <?php
        include "view/formright.php";
    ?>
    </div>

  