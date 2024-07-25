<div class="row mb ">
                    <div class="boxtitle">ĐĂNG NHẬP</div>
                    <div class="boxcontent formtaikhoan">
                        <?php 
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                        ?>
                        <div class="row mb7" style="font-size: 0.8vw; color: #1472B9;">
                                Xin chào <br> <?=$user?>
                            </div>
                            <div class="row mb10">
                                <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                                <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                                <?php
                                if($role==1){?>
                                <li><a href="admin/index.php">Đăng nhập admin</a></li>
                                <?php }?>
                                <li><a href="index.php?act=thoat">Thoát</a></li>
                            </div>
                         <?php 
                        } else{
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row">
                                Tên đăng nhập <br>
                                <input type="text" name="user" id="" placeholder="Nhập tên đăng nhập...">
                            </div>
                            <div class="row">
                                Mật khẩu <br>
                                <input type="password" name="pass" id="" placeholder="Nhập mật khẩu...">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="" id=""> Ghi nhớ tài khoản?
                            </div>
                            <div class="row mb10">
                                <input type="submit" name="dangnhap" value="Đăng nhập">
                            </div>
                        </form>
                        <li><a href="#">Quên mật khẩu</a></li>
                        <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                        <?php }?>
                    </div>
                </div>
                <div class="row mb ">
                    <!-- <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php 
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm=".$id;
                                echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                            }
                            ?>
                        </ul> -->
                    </div>
                    <!-- <div class="boxfooter searchbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" id="">
                            <input type="submit" value="Tìm Kiếm" name="timkiem">
                        </form>
                    </div> -->
                </div>
                <!-- <section>
                <div class="row"> 
                    <div class="boxcontent">
                        <?php
                        foreach ($dstop10 as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $img=$img_path.$img;
                            echo '<div class="boxsp">
                            <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>';
                        }
                        ?>
                    </div> 
                </div>
                    </section> -->
                
<style>
.boxsp{
    position: relative;
    float: left;
    width: 23%;
    min-height: 300px;
    border: 1px #a3a1a1 solid;
    border-radius: 5px;
    margin-bottom: 20px;
    margin-top: 50px;
    left: 200px;
    margin-right:20px
}
.boxsp .img{
    min-height: 220px;
    text-align: center;
    border-bottom: 1px solid #cf8a74;
}
.boxsp p{
    font-size: 1.2vw;
    color: #77270c;
    font-weight: bolder;
    margin-left: 20px;
}
.boxsp a{
    font-size: 1.3vw;
    color: #000;
    text-decoration: none;
    margin-left: 20px;
}
.boxsp a:hover{
    color: #77270c;
    text-decoration: underline;
}
/* Box tài khoản */
.boxtitle{
    color: white;
    padding: 10px;
    background-color: #00A9FF;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border: 1px #CCC solid;
    font-size: 1.2vw;
    text-align: center;
}
.formtaikhoan{
    line-height: 225%;
    border:5px;
}
.formtaikhoan input[type="text"],.formtaikhoan input[type="email"],.formtaikhoan input[type="password"], .formcontent input[type="text"]{
    width: 100%;
    border: 1px #CCC solid;
    padding: 5px 10px;
    border-radius: 5px;
}
.taikhoan{
    position: relative;
    font-size: 1.2vw;
    font

}
.formtaikhoan input[type="checkbox"]{
    border-radius: 5px;
}
.formtaikhoan input[type="submit"],
.formtaikhoan input[type="reset"],
 .formcontent input[type="submit"],
 .formcontent input[type="reset"],
 .formcontent input[type="button"]
 {
    outline: none;
    font-size: .9em;
    padding: 1em 3em 1em 1em;
    border: none;
    margin-bottom: 0.3em;
    background: rgba(255, 255, 255, 0.85);
    width: 82%;
    color: #000;
    border-radius: 30px;
    font-weight: 400;
    font-family: 'Open Sans', sans-serif;
    letter-spacing: 1px;
}
.formtaikhoan input[type="submit"],
.formtaikhoan input[type="reset"]{
    color: white;
    background: #00A9FF;
    border: none;
    padding: .7em 0;
    outline: none;
    width: 44%;
    font-size: 1em;
    cursor: pointer;
    letter-spacing: 1px;
    font-weight: 400;
    font-family: 'Open Sans', sans-serif;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    border-radius: 30px;
}
.formtaikhoan input[type="submit"]:hover,
 .formcontent input[type="submit"]:hover,
 .formcontent input[type="reset"]:hover,
 .formcontent input[type="button"]:hover{
    background-color: #CCC;
}
.formtaikhoan li a{
    color: teal;
    text-decoration: none;
}
.formtaikhoan li a:hover{
    color: #093;
    text-decoration: underline;
}
.row{
    font-size: 15px;
}
</style>