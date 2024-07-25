<div class="row mb">
            <div class="boxtrai mr ">
            <div class="test">
                    <ul>
                          <?php 
                            foreach($dsdm as $dm){
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '<li>
                                <a href="'.$linkdm.'">'.$name.'</a>
                                </li>';
                            }
                          ?>  
                            <!-- <li><a href="#">Nhẫn</a></li>
                            <li><a href="#">Dây chuyền</a></li>
                            <li><a href="#">Vòng đeo tay</a></li>
                            <li><a href="#">Khuyên tai</a></li> -->
                        </ul>
                        </div>
                <div class="row">
                
                    
                        <!-- Slideshow container -->

<!-- Full-width images with number and caption text -->




<!-- Next and previous buttons -->


<!-- The dots/circles -->
                <div class="row ">
                    <?php 
                    $i=0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh = $img_path.$img;
                        if(($i==2)||($i==5)||($i==8)){
                            $mr="";
                        }else {
                            $mr="mr";
                        }
                        echo '<div class="boxsp  '.$mr.'">
                        <div class="row img"> <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div> <hr>
                        <p>'.$price.'</p>
                        <a href="'.$linksp.'">'.$name.'</a>
                        <div class="row btnaddtocart">
                        <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="'.$id.'">
                            <input type="hidden" name="name" value="'.$name.'">
                            <input type="hidden" name="img" value="'.$img.'">
                            <input type="hidden" name="price" value="'.$price.'">
                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                        </form>
                        </div>
                    </div>';
                    $i+=1;
                    }?>
                  
                </div>
            </div>
            <div class="row mb ">
             
                    <div class="boxcontent formtaikhoan">
                        <?php 
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                        ?>
                        <div class="row mb7" style="font-size: 0.8vw; color: #1472B9;">
                                Xin chào <br> <?=$user?>
                            </div>
                            <div class="row mb10">
                            </div>
                         <?php 
                        } else{
                        ?>
                        <?php }?>
                    </div>
                </div>
         
                    <!-- <div class="boxfooter searchbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" id="">
                            <input type="submit" value="Tìm Kiếm" name="timkiem">
                        </form>
                    </div> -->
                </div>
                <!-- <div class="row"> 
                    <div class="boxtitle">TOP YÊU THÍCH</div>
                    <div class="boxcontent row">
                        <?php
                        foreach ($dstop10 as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $img=$img_path.$img;
                            echo '<div class="row mb10 top10">
                            <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>';
                        }
                        ?>
                    </div>  -->
                </div>
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
    border: none;
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
    color: black;
    padding: 10px;
    background-color: #ea2858;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border: 1px #CCC solid;
    font-size: 1.2vw;
    text-align: center;
}
.formtaikhoan{
    line-height: 225%;
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
    letter-spacing: 1px;
}
.formtaikhoan input[type="submit"],
.formtaikhoan input[type="reset"]{
    color: white;
    background: #ea2858;
    border: none;
    padding: .7em 0;
    outline: none;
    width: 44%;
    font-size: 1em;
    cursor: pointer;
    letter-spacing: 1px;
    font-weight: 400;
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
        </div>
        <style>
    .btn {
        width: 35px;
        height: 35px;
        color: aliceblue;
        background-color: #000000;
        border-radius: 50%;
        margin: 15px;
    }
    .vip{
        position: relative;
        max-width:300px;
        left:700px;
    }
    ;
</style>



<style>
    *{
    box-sizing: border-box;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
    .capnhat{
            position: relative;
            right: 400px;
            top:30px;
            }
    .banner img{
    height: 400px;
}
.row {
    border: none;
}

            </style>