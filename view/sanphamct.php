<div class="Home">

        <div class="Infomation">

            <div class="product_detail">


            <?php
                extract($onesp);
                $img = $path.$image;

                echo '
                    <div class="name">
                          <h3>'.$name.'</h3>
                    </div>

                    <img src="'.$img.'">

                    <p>'.$mota.'</p>
                ';

            ?>

              
            </div>


      
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                        $("#binhluan").load("view/binhluan/binhluan.php" ,{idpro:<?=$id?>});
                });
                </script>
            <div class="comment" id="binhluan">
               

                
            </div>

          

        
            <div class="product_detail">
                <div class="name">
                    <h3>Sản phẩm cùng loại</h3>
                </div>

            <div class="spcungloai">

            <?php

                foreach ($spcungloai as $spcl) {
                    extract($spcl);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    echo '
                        <a href="'.$linksp.'">'.$name.'</a>
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

  