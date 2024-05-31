<?php

function insert_taikhoandangky($email,$user,$pass){
    $sql = "INSERT INTO dangky(email,user,pass) VALUES('$email','$user','$pass')";
    pdo_execute($sql);
}

function check_taikhoan($user,$pass){
    $sql = "SELECT * FROM dangky WHERE user='".$user."' AND pass='".$pass."' ";
    $tk = pdo_query_one($sql);
    return $tk;
}

function check_email($email){
    $sql = "SELECT * FROM dangky WHERE email='".$email."' ";
    $tk = pdo_query_one($sql);
    return $tk;
}

function update_taikhoan($email,$user,$pass,$address,$tel){
   
      $sql = "UPDATE dangky SET email='".$email."',user='".$user."',pass='".$pass."',address='".$address."',tel='".$tel."' ";
        pdo_execute($sql);
}   


function loadall_taikhoan(){
    $sql = "SELECT * FROM dangky  ORDER BY id";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

?>