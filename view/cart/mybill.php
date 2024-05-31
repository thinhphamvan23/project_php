<div class="Home">

        <div class="Infomation">

            <div class="product_detail">

                <h3 class="name">Đơn hàng của bạn</h3>
                <div class="bill">
                    <div class="namebill">
                            <p>STT</p>
                            <p>Mã ĐH</p>
                            <p>Ngày đặt</p>
                            <p>Số lượng</p>
                            <p>Tổng tiền</p>
                            <p>Tình trạng</p>
                       
                    </div>
                   

                    <?php
                       
                       if(is_array($listbill)){
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $ttdh = ttdonhang($bill["bill_status"]);
                                $soluong = loadall_cart_count($bill["id"]);
                                echo '
                                    
                                <div class="infobill">
                                <p>1</p>
                                <p>'.$bill["id"].'</p>
                                <p>'.$bill["ngaydathang"].'</p>
                                <p>'.$soluong.'</p>
                                <p>'.$bill["tongtien"].'</p>
                                <p>'.$ttdh.'</p>
                            
                        </div>
                                ';
                            
                            }
                       }
                       

                      
                    ?>


                </div>

              
            </div>



      
          

          

        
          
       
            </div>   


    <?php
        include "view/formright.php";
    ?>
    </div>

  