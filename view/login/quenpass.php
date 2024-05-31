<div class="Home">

        <div class="Infomation">

        <!DOCTYPE html>
            <html lang="en">
            <head>
            <link rel="stylesheet" href="view/css/login.css">
                <title>Document</title>
            </head>
            <body>

            <form class="formdk" action="index.php?act=quenpass" method="post">

            <h3>Quên mật khẩu</h3>

                <div class="account">           
                    <input type="text" name="email" placeholder="Email">
                </div>
            
            
                <div class="control">       
                    <input class="dangky" type="submit" name="gui" value="Gửi">
                </div>

                <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }

                ?>

            </form>
                
            </body>
            </html>


                    
        </div>

            <?php
                include "view/formright.php";
            ?>
    </div>

  