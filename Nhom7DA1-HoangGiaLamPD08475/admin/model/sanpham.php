<?php

function insert_sanpham($tensp, $giasp, $tacgia, $nxb, $hinh, $mota, $iddm){
    $sql = "INSERT INTO sanpham(name,price,tacgia,nxb,img,mota,iddm) values('$tensp','$giasp','$tacgia','$nxb','$hinh','$mota','$iddm')";
            pdo_execute($sql);
}
function delete_sanpham($id){
    $sql = "delete from sanpham where id=".$id;
            pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,08";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
// function loadall_sanpham(){
//     $sql="select * from sanpham order by id desc";
//     $listdanhmuc=pdo_query($sql);
//     return $listsanpham;
// }

function loadall_sanpham($kyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    if ($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm){
    if(($iddm)>0){
    $sql="select * from danhmuc where id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
    }else{
        return "";
    }
}
function loadone_sanpham($id){
    $sql="select * from sanpham where id=".$id;
            $sp=pdo_query_one($sql);
            return $sp;
}
function loadsp_sanpham_cungloai($id,$iddm){
    $sql="select * from sanpham where iddm=".$iddm." and id <> ".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id,$iddm,$tensp,$giasp,$tacgia,$nxb,$mota,$hinh){
    if($hinh!="")
        $sql = "update sanpham set iddm='".$iddm."',name='".$tensp."', price='".$giasp."',tacgia='".$tacgia."',nxb='".$nxb."', mota='".$mota."'.img ='".$hinh."' where id =".$id;
    else
        $sql = "update sanpham set iddm='".$iddm."',name='".$tensp."', price='".$giasp."',tacgia='".$tacgia."',nxb='".$nxb."', mota='".$mota."' where id =".$id;   
    
     pdo_execute($sql);
}
?>