  <?php
  function tongtien(){

      $sum=0;
      foreach ($_SESSION["mycart"] as $cart) {
          $thanhtien = $cart[3]*$cart[4];
          $sum+=$thanhtien;    
      }
      return $sum;

    }


    function insert_bill($iduser,$bill_name,$bill_address,$bill_tel,$bill_email,$pttt,$ngaydathang,$tongtien){
        $sql = "INSERT INTO bill(iduser,bill_name,bill_address,bill_tel,bill_email,pttt,ngaydathang,tongtien) VALUES ('$iduser','$bill_name','$bill_address','$bill_tel','$bill_email','$pttt','$ngaydathang','$tongtien')";
        return  pdo_execute_lastInsertId($sql);
    }


    function insert_cart($iduser,$idpro,$image,$name,$price,$soluong,$thanhtien,$idbill){
      $sql = "INSERT INTO cart(iduser,idpro,image,name,price,soluong,thanhtien,idbill) VALUES ('$iduser','$idpro','$image','$name','$price','$soluong','$thanhtien','$idbill')";
      return  pdo_execute($sql);
  }

  function loadone_bill($id){
    $sql = "SELECT * FROM bill WHERE id=".$id;
    return pdo_query_one($sql);
}

function loadall_cart($idbill){
  $sql = "SELECT * FROM cart WHERE idbill=".$idbill;
  return pdo_query($sql);
}

function loadall_cart_count($idbill){
  $sql = "SELECT * FROM cart WHERE idbill=".$idbill;
  return sizeof(pdo_query($sql));
}

function loadall_bill($key="",$iduser=0){
  $sql = "SELECT * FROM bill WHERE 1";
  if($iduser>0)
  $sql.= " AND iduser=".$iduser;
  if($key!="")
  $sql.= " AND id LIKE '%".$iduser."%'";
  return pdo_query($sql);
}


function ttdonhang($i){
  switch ($i) {
    case '0':
      $trangthai = "Đơn hàng mới";
      break;
      case '1':
        $trangthai = "Đang xử lý";
        break;
        case '2':
          $trangthai = "Đang giao hàng";
          break;
          case '3 ':
            $trangthai = "Hoàn tất";
            break;
                
    default:
    $trangthai = "Đơn hàng mới";

      break;
  }
  return $trangthai;
}



function loadall_thongke(){
  $sql = "SELECT catalog.id as iddm,catalog.name as tendm,count(product.id) as soluong,max(product.price) as maxprice,min(product.price) as minprice,avg(product.price) as tbprice FROM product left join catalog on catalog.id=product.idcatalog";
  $sql.= " ORDER BY catalog.id DESC";
  return pdo_query($sql);
}

  ?>

                
                        
          
          

          

        
          
       
     