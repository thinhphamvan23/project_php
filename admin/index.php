<?php
    include "header.php";   
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/dangky.php";
    include "../model/binhluan.php";
    include "../model/cart.php";




    if(isset($_GET["act"])){
        $act = $_GET["act"];
        switch ($act) {
            // Control danh mục
            case 'adddm':
                if(isset($_POST["themmoi"])){
                    $tenloai = $_POST["tenloai"];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
                include "category/add.php";
                break;
                
            case 'listdm':
              $listdanhmuc = loadall_danhmuc();
                include "category/list.php";
                break;

            case 'xoadm':
                    if(isset($_GET["id"])&&($_GET["id"]>0)){
                        delete_danhmuc($_GET["id"]);
                    }                  
                    $listdanhmuc = loadall_danhmuc();
                    include "category/list.php";
                    break;
            case 'suadm':
                    if(isset($_GET["id"])&&($_GET["id"]>0)){
                        $danhmucsua = loadone_danhmuc($_GET["id"]);
                    }
                    include "category/update.php";
                    break;

            case 'updatedm':
                        if(isset($_POST["capnhap"])){
                            $id = $_POST["id"];
                            $tenloai = $_POST["tenloai"];
                            update_danhmuc($id,$tenloai);
                            $thongbao = "Cập nhập thành công";
                        }
                        $listdanhmuc = loadall_danhmuc();
                        include "category/list.php";
                        break;


                        //Control sản phẩm
           case 'addsp':
               if(isset($_POST["themmoisp"])){
                   $iddm = $_POST["iddm"];
                    $tensp = $_POST["tensp"];
                    $gia = $_POST["price"]; 
                    $mota = $_POST["mota"];
                    $hinh = $_FILES['img']['name'];       
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                     
                   
                   insert_sanpham($tensp,$gia,$hinh,$mota,$iddm);
                   $thongbao = "Thêm thành công";
               }


               $listdanhmuc = loadall_danhmuc();
               
               include "product/add.php";
               break;
               
           case 'listsp':
            if(isset($_POST["shareOK"])){
                $key = $_POST["key"];
                $iddm = $_POST["iddm"];
            }
            else{
                $key = "";
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
             $listsanpham = loadall_sanpham($key,$iddm);
               include "product/list.php";
               break;
 
           case 'xoasp':
                   if(isset($_GET["id"])&&($_GET["id"]>0)){
                       delete_sanpham($_GET["id"]);
                   }                  
                   $listsanpham = loadall_sanpham();
                   include "product/list.php";
                   break; 
                         
           case 'suasp':
                   if(isset($_GET["id"])&&($_GET["id"]>0)){
                       $sanphamsua = loadone_sanpham($_GET["id"]);
                   }
                   $listdanhmuc = loadall_danhmuc();
                   include "product/update.php";
                   break;
                   
           case 'updatesp':
            if(isset($_POST["capnhap"])){
                 $id=$_POST["id"];
                 $iddm = $_POST["iddm"];
                 $tensp = $_POST["tensp"];
                 $gia = $_POST["price"]; 
                 $mota = $_POST["mota"];
                 $hinh = $_FILES['img']['name'];       
                 $target_dir = "../upload/";
                 $target_file = $target_dir . basename($_FILES["img"]["name"]);
                 move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                  
                
                 update_sanpham($id,$iddm,$tensp,$gia,$hinh,$mota);
                $thongbao = "Cập nhập thành công";
            }
                      
                       $listdanhmuc = loadall_danhmuc();
                       $listsanpham = loadall_sanpham();
                       
                       include "product/list.php";
                       break;
        

                  case 'dskh':
                   $listtaikhoan = loadall_taikhoan();
                   include "taikhoan/list.php";
                   break;

                case 'dsbl':
                    $listbinhluan = loadall_binhluan(0);
                    include "comment/list.php";
                    break;

                case 'xoabl':
                    if(isset($_GET["id"])&&($_GET["id"]>0)){
                        delete_binhluan($_GET["id"]);
                    }                  
                    $listbinhluan = loadall_binhluan(0);
                    include "comment/list.php";
                    break; 


                    case 'suabl':
                        if(isset($_GET["id"])&&($_GET["id"]>0)){
                            $binhluansua = loadone_binhluan($_GET["id"]);
                        }
                        $listbinhluan = loadall_binhluan(0);
                        include "comment/update.php";
                        break;
                        
                  case 'updatebl':
                      if(isset($_POST["capnhap"])){
                           $id=$_POST["id"];
                           $noidung = $_POST["noidung"];
                           $iduser = $_POST["iduser"];
                           $idpro = $_POST["idpro"]; 
                           $ngaydang = $_POST["ngaydang"];
                          
                           update_binhluan($id,$noidung,$iduser,$idpro,$ngaydang);
                          $thongbao = "Cập nhập thành công";
                      }

                      $listbinhluan = loadall_binhluan(0);
                      
                      include "comment/update.php";
                      break;


               case 'listbill':

                    if(isset($_POST["key"])&&($_POST["key"]!=""))
                        $key = $_POST["key"];
                    else
                        $key="";
                $listbill = loadall_bill($key,0);
               
                 include "bill/list.php";
                 break;

                 case 'thongke':
                  $listthongke = loadall_thongke();
                 include "thongke/list.php";
                 break;

                 case 'bieudo':
                    $listthongke = loadall_thongke();
                   include "thongke/bieudo.php";
                   break;
                 
            default:
            include "home.php";
                break;
        }
    }

    include "footer.php";
?>