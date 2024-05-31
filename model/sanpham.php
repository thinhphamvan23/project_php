<?php

    function insert_sanpham($tensp,$gia,$hinh,$mota,$iddm){
        $sql = "INSERT INTO product(name,price,image,mota,idcatalog) VALUES('$tensp','$gia','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }

    function loadall_sanpham($key="",$iddm=0){         
        $sql = "SELECT * FROM product WHERE 1";
        if($key!=""){
            $sql.=" AND name LIKE '%".$key."%'";
        }
        if($iddm>0){
            $sql.=" AND idcatalog = '".$iddm."'";
        }
        $sql.=" ORDER BY id";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham_home(){         
        $sql = "SELECT * FROM product WHERE 1  ORDER BY id DESC LIMIT 0,9";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham_top(){         
        $sql = "SELECT * FROM product WHERE 1  ORDER BY view DESC LIMIT 0,10";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    

    function loadone_sanpham($id){
        $sql = "SELECT * FROM product WHERE id=".$id;
        $sanphamsua = pdo_query_one($sql);
        return $sanphamsua;
    }

    function loadname($iddm){
        if($iddm>0){
        $sql = "SELECT * FROM catalog WHERE id=".$iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
        }else{
           return "";
        }
    }

    function load_sanpham_cungloai($id,$iddm){
        $sql = "SELECT * FROM product WHERE idcatalog=".$iddm." AND id <> ".$id;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function delete_sanpham($id){
        $sql = "DELETE FROM product WHERE id=".$id;
        pdo_execute($sql);
    }
    
   

    function update_sanpham($id,$iddm,$tensp,$gia,$hinh,$mota){
        if($hinh!=""){
          $sql = "UPDATE product SET idcatalog='".$iddm."',name='".$tensp."',price='".$gia."',image='".$hinh."',mota='".$mota."' WHERE id=".$id;
        }else{
            $sql = "UPDATE product SET idcatalog='".$iddm."',name='".$tensp."',price='".$gia."',mota='".$mota."' WHERE id=".$id;
        }
        pdo_execute($sql);
    }   
?>