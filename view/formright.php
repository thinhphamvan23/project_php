<div class="Control">

            <div class="form">
                <h3>Tài khoản</h3>

                <?php

                    if(isset($_SESSION["user"])){
                        extract($_SESSION["user"]);
                        ?>

                <form action="index.php?act=dangnhap" method="post">
                <div class="login">
                  
                   <h1>Xin chào <?=$user?></h1>                              
                    <ul>
                    <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                        <li><a href="index.php?act=quenpass">Quên mật khẩu</a></li>
                        <li><a href="index.php?act=edit_taikhoan">Chỉnh sửa tài khoản</a></li>
                        <?php
                            if($role==1){  
                        ?>
                        <li><a href="admin/index.php">Trang Admin</a></li>
                        <?php
                            }
                        ?>
                        <li><a href="index.php?act=logout">Thoát</a></li>

                    </ul>            
                     
                    
                </div>
               </form> 


                  <?php      
                    }
                    else{

                    ?>
              
                <form action="index.php?act=dangnhap" method="post">
                <div class="login">
                    <p>Tên đăng nhập</p>
                    <input type="text" name="ten">
                    <p>Mật khẩu</p>
                    <input type="password" name="matkhau">
                    <div class="check">
                        <input type="checkbox">Ghi nhớ tài khoản?
                    </div>                                  
                    <input type="submit" name="dangnhap" value="Đăng nhập">    
                    <ul>
                        <li><a href="#">Quên mật khẩu</a></li>
                        <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
                    </ul>            
                     
                    
                </div>
               </form> 

               <?php
                  }

                 ?>


            </div>

            <div class="form">
            <h3>Danh mục</h3>
            <div class="category">
                <ul>

                <?php

                        foreach ($newdm as $dm) {
                            extract($dm);
                            $linkdm="index.php?act=sanpham&iddm=".$id;

                            echo '
                            <li><a href="'.$linkdm.'">'.$name.'</a></li>
                        ';
                        }

                    ?>

                </ul>
                
                <div class="search">
                    <form action="index.php?act=sanpham" method="post">
                     <input type="text" name="key">
                     <input id="sb" type="submit" value="Search" name="timkiem">
                </form>
                </div>
             
            </div>
           </div>


           <div class="form">
            <h3>Top 10 yêu thích</h3>

            <?php

                    foreach ($top10 as $item) {
                        extract($item);
                        $img=$path.$image;
                        $linksp="index.php?act=sanphamct&idsp=".$id;


                        echo '

                        <div class="like">
                            <a href="'.$linksp.'"><img src="'.$img.'"></a>
                            <a href="'.$linksp.'">'.$name.'</a> 
                        </div>
                            
                        ';
                    }

                ?>


           </div>
        </div>



    