<?php
    session_start();
    include '../../admin/model/pdo.php';
    include '../../admin/model/binhluan.php';
    
    $idpro=$_REQUEST['idpro'];
    $dsbl=loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body{
            margin: 0;
        }
        *{
            font-size: 1.8vw;
            color: gray;
        }
       
    </style>
</head>
<body>
    <div class="row mb">
        <div class="td">BÌNH LUẬN</div>
        <div class="boxcontent2 binhluan" >
                <?php
                foreach ($dsbl as $bl){
                    extract ($bl);
                    echo $iduser. ': '; 
                    echo $noidung. '&emsp;&emsp;&emsp;' ;
                    echo $ngaybinhluan. '<br>';
                }
                ?>
        </div>
        <div class="boxfooter binhluanform">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <input type="text" placeholder="Viết bình luận..." name="noidung">
                <input type="submit"  name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>
        <?php
            if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                $noidung=$_POST['noidung'];
                $idpro=$_POST['idpro'];
                $iduser=$_SESSION['user']['id'];
                $ngaybinhluan=date('h:i:sa d/m/Y');
                insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                header("location: ".$_SERVER['HTTP_REFERER']);
            }
        ?>
    </div>
    <style>
        .td{
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    color: #fff;
    background-color: #00A9FF;
    border-color: gray;
    font-size: 16px;
    font-weight: 400;
    margin-top:50px;
        }
        .boxcontent2{
        font-size: 1.6vw;
        background-color: #fff;
        border-left: 1px #black solid;
        border-right: 1px #black solid;
        padding:30px;
    }
    *{
        font-size: 1.4vw;
    color: black;
    }
    .boxfooter input[type="submit"] {
    margin-top: 10px;
    margin-bottom: 5px;
    margin-left: 20px;
    border: 1px solid whitesmoke;
    width: auto;
    height: 35px;
    font-size: 1.1vw;
    border-radius: 5px;
    background-color: #A0E9FF;
    }
    .boxfooter input[type="text"] {
        width:900px;
        font-size:15px;
    }
    </style>
   
</body>
</html>