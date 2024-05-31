<?php

    function insert_danhmuc($tenloai){
        $sql = "INSERT INTO catalog(name) VALUES ('$tenloai')";
        pdo_execute($sql);
    }

    function loadall_danhmuc(){
        $sql = "SELECT * FROM catalog ORDER BY id";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

    function loadone_danhmuc($id){
        $sql = "SELECT * FROM catalog WHERE id=".$id;
        $danhmucsua = pdo_query_one($sql);
        return $danhmucsua;
    }

    function delete_danhmuc($id){
        $sql = "DELETE FROM catalog WHERE id=".$id;
        pdo_execute($sql);
    }

    function update_danhmuc($id,$tenloai){
        $sql = "UPDATE catalog SET name='".$tenloai."' WHERE id=".$id;
        pdo_execute($sql);
    }




?>