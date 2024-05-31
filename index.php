<?php

    session_start();
    include "view/header.php";
    include "model/pdo.php";
    include "model/sanpham.php";
    include "global.php";
    include "model/danhmuc.php";
    include "model/dangky.php";
    include "model/cart.php";


    if(!isset($_SESSION["mycart"]))$_SESSION["mycart"]=[];

    
    $top10=loadall_sanpham_top();
    $newdm=loadall_danhmuc();
    $newsp=loadall_sanpham_home();

    if(isset($_GET["act"])&&($_GET["act"]!="")){
        $act = $_GET["act"];
        switch ($act) {
            case 'sanpham':
                if(isset($_POST["timkiem"])){
                     if(isset($_POST["key"])&&($_POST["key"]!="")){
                    $key=$_POST["key"];
                    }
                    else{
                        $key="";
                    }
                }
                else{
                    $key="";
                }
               

                if(isset($_GET["iddm"])&&($_GET["iddm"]>0)){
                    $iddm=$_GET["iddm"];
                }
                else{
                    $iddm=0;
                }
                $loadsp=loadall_sanpham($key,$iddm);
                    $tendm = loadname($iddm);
                    include "view/sanpham.php";
                break;



            case 'sanphamct':
                if(isset($_GET["idsp"])&&($_GET["idsp"]>0)){
                    $id=$_GET["idsp"];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    $spcungloai=load_sanpham_cungloai($id,$idcatalog);
                    include "view/sanphamct.php";
                }
                else{
                    include "view/home.php";
                }
              
                break;

                case 'dangky':
                    if(isset($_POST["dangky"])){
                        $email = $_POST["email"];
                        $user = $_POST["user"];
                        $pass = $_POST["pass"];

                        insert_taikhoandangky($email,$user,$pass);
                        $thongbao = "Đã đăng ký tài khoản thành công";
                    }
                    
            
                    include "view/login/dangky.php";
                    break;


                    case 'dangky':
                        if(isset($_POST["dangky"])){
                            $email = $_POST["email"];
                            $user = $_POST["user"];
                            $pass = $_POST["pass"];
    
                            insert_taikhoandangky($email,$user,$pass);
                            $thongbao = "Đã đăng ký tài khoản thành công";
                        }
                        
                
                 include "view/login/dangky.php";
                 break;

                 case 'dangnhap':
                     if(isset($_POST["dangnhap"])){
                         $user = $_POST["ten"];
                         $pass = $_POST["matkhau"];

                        $checktk = check_taikhoan($user,$pass);

                        if(is_array($checktk)){
                            $_SESSION["user"]=$checktk;
                            header('Location:index.php');
                        }
                        else{
                            $thongbao = "Đăng nhập không thành công, vui lòng kiểm tra lại!";
                        }
                     }
                     
            
                     include "view/login/dangky.php";
                     break;

                case 'edit_taikhoan':
                   if(isset($_POST["capnhap"])){
                         $email = $_POST["email"];
                       $user = $_POST["user"];
                       $pass = $_POST["pass"];
                       $address = $_POST["address"];
                       $tel = $_POST["tel"];

                       update_taikhoan($email,$user,$pass,$address,$tel);
                       $_SESSION["user"] = check_taikhoan($user,$pass);
                  
                   }
                   
        
                   include "view/login/edit_taikhoan.php";
                   break;
        
    
                   case 'quenpass':
                    if(isset($_POST["gui"])){
                        $email = $_POST["email"];
                        $checkemail = check_email($email);
                        if(is_array($checkemail)){
                            $thongbao="Mật khẩu của bạn là ".$checkemail["pass"];
                        }
                        else{
                            $thongbao="Tài khoản này không tồn tại";
                        }
                                        
                    }
                   
                    include "view/login/quenpass.php";
                    break;

             case 'logout':
                session_unset();
                header('Location:index.php');
                 break;


            case 'bill':
                if(isset($_POST["addbill"])){
                    $id=$_POST["id"];
                    $hinh=$_POST["hinh"];
                    $price=$_POST["price"];
                    $name=$_POST["name"];
                    $soluong=1;
                    $thanhtien=$soluong*$price;
                    $spadd = [$id,$name,$hinh,$price,$soluong,$thanhtien];
                    array_push($_SESSION["mycart"],$spadd);
                }

               include "view/cart/billcart.php";
               break;

               case 'delcart':
                if(isset($_GET["idcart"])){          
                    array_splice($_SESSION["mycart"],$_GET["idcart"],1);
                }else{
                    $_SESSION["mycart"]=[];
                }

                header('Location:index.php?act=bill');
                break;

                case 'infobill':
                    include "view/cart/infobill.php";
                    break;

                    case 'billcomfirm':

                        if(isset($_POST["dathang"])){
                            if(isset($_SESSION["user"]))$iduser = $_SESSION["user"]["id"];
                            else $iduser=0;
                            $name = $_POST["name"];
                            $address = $_POST["address"];
                            $email = $_POST["email"];
                            $tel = $_POST["tel"];
                            $pttt = $_POST["thanhtoan"];
                            $ngaydathang = date('h:i:sa d/m/Y');
                            $tongtien = tongtien();

                            $idbill = insert_bill($iduser,$name,$address,$tel,$email,$pttt,$ngaydathang,$tongtien);

                            foreach ($_SESSION["mycart"] as $cart) {
                                insert_cart($_SESSION["user"]["id"],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                            }

                            $_SESSION["mycart"]=[];
                        }

                        $bill = loadone_bill($idbill);
                        $billct = loadall_cart($idbill);
                        include "view/cart/billcomfirm.php";
                        break;

                        case 'mybill':

                            $listbill = loadall_bill($_SESSION["user"]["id"]);
                            include "view/cart/mybill.php";
                            break;

            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                 break;
            case 'gopy':
               include "view/gopy.php";
                break;
            case 'hoidap':
               include "view/hoidap.php";
                break;
        
            default:
            include "view/home.php";
                break;
        }
    }
    else{
         include "view/home.php";
    }

   
    include "view/footer.php";



?>