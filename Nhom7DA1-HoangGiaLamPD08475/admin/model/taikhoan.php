<?php 
function insert_taikhoan($email, $user, $pass){
    $sql = "INSERT INTO taikhoan(email,user,pass) values('$email','$user','$pass')";
            pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
            $sp=pdo_query_one($sql);
            return $sp;
}
function update_taikhoan($email,$user,$pass,$address, $tel, $id){
$sql = "update taikhoan set email='".$email."', user='".$user."', pass='".$pass."',address='".$address."',tel='".$tel."' where id=".$id;
     pdo_execute($sql);}
function checkemail($email){
        $sql="select * from taikhoan where email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
function loadall_taikhoan(){
    $sql="select * from taikhoan order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
    }
    function delete_taikhoan($id) {
        $sql = "delete from taikhoan where id=?";
        pdo_execute($sql, $_GET['id']);
    } 
?>