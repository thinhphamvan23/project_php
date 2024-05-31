<?php

function insert_binhluan($noidung,$iduser,$idpro,$date){
    $sql = "INSERT INTO comment(noidung,iduser,idpro,date) VALUES('$noidung','$iduser','$idpro','$date')";
    pdo_execute($sql);
}

function loadall_binhluan($idpro){
    $sql = "SELECT * FROM comment WHERE 1";
    if($idpro > 0)
    $sql.=" AND idpro = '".$idpro."'";
    $sql.=" ORDER BY id";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}

function delete_binhluan($id){
    $sql = "DELETE FROM comment WHERE id=".$id;
    pdo_execute($sql);
}

function loadone_binhluan($id){
    $sql = "SELECT * FROM comment WHERE id=".$id;
    $binhluansua = pdo_query_one($sql);
    return $binhluansua;
}

function update_binhluan($id,$noidung,$iduser,$idpro,$ngaydang){
    $sql = "UPDATE comment SET noidung='".$noidung."',iduser='".$iduser."',idpro='".$idpro."',date='".$ngaydang."' WHERE id=".$id;
    pdo_execute($sql);
}



?>