<div class="Home">

        <div class="Infomation">

            <div class="product_detail">


                <div class="name">
                    <h3>Sản phẩm <?=$tendm?></h3>
                </div>

             <div class="loadsp">

          
                <?php
                foreach ($loadsp as $sp) {
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $hinh=$path.$image;
                    echo '
                        <div class="Item">
                                <a href="'.$linksp.'"><img src="'.$hinh.'"></a>   
                               <a href="'.$linksp.'">'.$price.'$</a> 
                               <a href="'.$linksp.'"> '.$name.'</a>
                            </div>              
                    ';

                }

            ?>
       </div> 

        </div>
        </div>

        <?php
            include "formright.php";

        ?>
    
    </div>

  