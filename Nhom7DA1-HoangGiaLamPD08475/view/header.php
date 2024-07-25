<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhà sách Online</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>

<body>
    <div class="">
       
        <div class="row mb menu">
            <div class="row1">
            <ul>
                <div class="logo">
                <a href="index.php"><img class="icon" src="upload/logo.png" height=38px></a>
                </div>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=sanpham">Sản phẩm</a></li>
                <li><a href="index.php?act=gopy">Góp ý</a></li>
                <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
                <img class="icon" src="upload/search.png" height=18px>
                <form  action="index.php?act=sanpham" method="post">
                <input class="row1" type="text" name="kyw" id="" placeholder="Tìm kiếm.....">
                </form>
            </ul>
            </div>
        </div>
<style>
    .logo{
        position: absolute;
        left:-90px;
        top:10px;
    }
    .icon{
        position: relative;
        left: 215px;
        bottom:3px;
    }
.row1 input[type=text] {
  position: absolute ;
  top: 9px;
  right : 10px;
  font-size: 15px;
  border-radius:5px;
  width:300px;
}
.clear{
    clear : both;
}
.menu{
    position:relative;
    background-color: #CDF5FD  ;
    color: black;
    font-size: 15px;
    z-index: 1;

}
.menu ul li a {
    color: black;
    text-decoration: none;
    transition: 0.5s;
    font-size: 1vw;
}   
.menu ul li a:hover {
    color: red;
    font-size: 1vw;
}
.test li a{
    text-align: center;
    text-decoration: none;
    border: 1px black solid;
    background: #00A9FF;
    /* padding: 10px; */
    height: 50px;
    width: 150px;
    border-radius: 30px;
    color: black;
    text-transform: uppercase;
}
.test ul{
        text-align : center;
        position : relative ;
        left : 50px;
        width: 1400px;
    }

.test li {
    color: #f1f1f1;
    display: inline-flex;
    margin: 0px 20px;
    height: 90px;
    line-height: 50px;
    margin-left: 10px;
    text-align: center;
}
.test li a:hover {
    background-color: #CDF5FD;
    transition : ease-in-out 0.5s;
}

</style>
        