<div class="Home">

        <div class="Infomation">

        <!DOCTYPE html>
            <html lang="en">
            <head>
            <link rel="stylesheet" href="view/css/login.css">
                <title>Document</title>
            </head>
            <body>

            <form class="formdk" action="index.php?act=edit_taikhoan" method="post">

            <h3>UPDATE</h3>

            <?php

                if(isset($_SESSION["user"])){
                    extract($_SESSION["user"]);
                }

            ?>

                <div class="account">           
                    <input type="text" name="email" placeholder="Email" value="<?=$email?>">
                </div>
                <div class="account">           
                    <input type="text" name="user" placeholder="Tên đăng nhập" value="<?=$user?>">
                </div>
                <div class="password">         
                        <input type="password" name="pass" placeholder="Mật khẩu" value="<?=$pass?>">
                </div>

                <div class="password">         
                        <input type="text" name="address" placeholder="Địa chỉ" value="<?=$address?>">
                </div>

                <div class="password">         
                        <input type="text" name="tel" placeholder="Số điện thoại" value="<?=$tel?>">
                </div>
            
                <div class="control">       
                    <input class="dangky" type="submit" name="capnhap" value="Cập nhập">
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

  