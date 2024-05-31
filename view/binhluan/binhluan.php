<?php

    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    session_start();
    $idpro = $_REQUEST["idpro"];
    $listbinhluan =  loadall_binhluan($idpro);
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="view/css/view.css">
    <title>Document</title>
</head>
<body>
    


<div class="form">
            <div class="name">
                <h3>Bình luận</h3>
            </div>
            
            <div class="category">
                <ul>
                    <li class="table_comment">
                      <p>Nội dung </p>
                      <p>User</p>
                      <p> Ngày bình luận</p>

                    </li>

            <table>
                <?php

                        foreach ($listbinhluan as $bl) {
                            extract($bl);
                            echo '<tr> <td>'.$noidung.'<td/>';
                            echo ' <td>'.$iduser.'<td/>';
                            echo ' <td>'.$date.'<td/> </tr>';
                           
                        }

                    ?>

            </table>

                </ul>
                
                <?php
                    if(isset($_SESSION["user"])){
                ?>
                    <div class="search">
                        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                        <input type="hidden" name="idpro" value="<?=$idpro?>">
                        <input type="text" name="noidung">
                        <input type="submit" value="Bình luận" name="binhluan">
                        </form>
                    </div>
                <?php

                    }else{
                ?>
                <div class="search">
                    <h3><a href="index.php?act=dangky">Đăng nhập để bình luận</a></h3>
                </div>
                <?php
                    }
                
                ?>
                
              
             
            </div>
           </div>

           <?php

                if(isset($_POST["binhluan"])){
                    $noidung = $_POST["noidung"];
                    $idpro = $_POST["idpro"];
                    $iduser = $_SESSION["user"]["id"];
                    $date = date('h:i:sa d/m/Y');
                    insert_binhluan($noidung,$iduser,$idpro,$date);
                    header("Location:".$_SERVER['HTTP_REFERER']);
                }

           ?>

</body>
</html>