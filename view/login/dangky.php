<div class="Home">

        <div class="Infomation">

        <!DOCTYPE html>
            <html lang="en">
            <head>
            <link rel="stylesheet" href="view/css/login.css">
                <title>Document</title>
            </head>
            <body>

            <form class="formdk" action="index.php?act=dangky" method="post">

            <h3>Register</h3>

                <div class="account">           
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="account">           
                    <input type="text" name="user" placeholder="Tên đăng nhập">
                </div>
                <div class="password">         
                        <input type="password" name="pass" placeholder="Mật khẩu">
                </div>
            
                <div class="control">       
                    <input class="dangky" type="submit" name="dangky" value="Đăng ký">
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

  