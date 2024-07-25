<div class="row mb">
            <div class="boxtrai mr ">
                <div class="row">
                    <div class="banner">
                        <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="view/images/bns1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="view/images/bns2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="view/images/bns3.webp" style="width:100%">
  <div class="text"></div>
</div>

<div class="capnhat">
    <div class="boxtitle"><strong>Sản phẩm mới cập nhật</strong></div>
</div>

<!-- Next and previous buttons -->
</div>
<br>
<br>

<!-- The dots/circles -->
                    </div>
                </div>
                <section>
                <div class="row">
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
                        echo '<div class="boxsp '.$mr.'">
                        <div class="row img"> <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div> <hr>
                        <p>'.number_format($price).'₫</p>
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
                
                </section>
                <div class="capnhat">
    <div class="boxtitle"><strong>Top 8 Bán Chạy</strong></div>
                    

<!-- Next and previous buttons -->

<br>
<br>


                    </div>
                
        <section class="section1">
                <div class="row">
                <?php
                        foreach ($dstop10 as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $img=$img_path.$img;
                            echo '<div class="boxsp mb">
                            <div class="row img"> <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a></div>
                            <p>'.$price.'₫</p>
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
                        }
                        ?>
                    </div>
        </section>
            </div>
            <div class="boxphai">
                    <?php include 'boxright.php';?>
            </div>
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
    <!-- <div class="vip">
    
    <button class="btn" onclick="goToPage1()">1</button>
    
    <button class="btn" onclick="goToPage2()"> 2</button>
    
    <button class="btn" onclick="goToPage3()"> 3</button>
</div> -->
    <script>
        // Hàm chuyển trang 1
        function goToPage1() {
            window.location.href = 'index.html';
        }
        // Hàm chuyển trang 2
        function goToPage2() {
            window.location.href = 'page2.html';
        }
        // Hàm chuyển trang 3
        function goToPage3() {
            window.location.href = 'page3.html';
        }
    </script>


<style>
    .boxphai{
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border: 1px #CCC solid;
    font-size: 1.2vw;
    }
    *{
    box-sizing: border-box;

    font-family: sans-serif;
}
    .capnhat{
            position: relative;
            right: 400px;
            top:30px;
            }
    .banner img{
    height: 428.5px;
}
section{
    display: flex;
    clear: both;
    flex-wrap: wrap;
    justify-content: space-around;
    padding:20px;
    width:1270px;
    max-height: 1200px;
    overflow:auto;

}
.boxsp{
    width: 240px;
    overflow: hidden;
}
.section1{
    display: flex;
    clear: both;
    flex-wrap: wrap;
    justify-content: space-around;
    padding:20px;
    width:1270px;
    max-height: 1200px;
    overflow:hidden;
    align-items : center;

}
.boxsp{
    width: 240px;
    overflow: hidden;
}
.boxsp p{
    font-size: 1.2vw;
    color: red;
    font-weight: bolder;
    margin-left: 20px;
}
            </style>