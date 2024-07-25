<div class="row mb">
            <div class="boxtrai mr">
            <div class="test"><ul>
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
                <div class="row mb">
                <div class="boxtitle">Sản Phẩm <strong><?=$tendm?></strong></div>
                    <div class="boxcontent row">
                        <?php 
                        $i=0;
                        foreach($dssp as $sp){
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh =$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)||($i==11)){
                                $mr = ""; 
                            }else{
                                $mr ="mr";
                            }
                            echo '<div class="boxsp '.$mr.'">
                            <div class="row img"> <img src="'.$hinh.'" alt=""></div>
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
                        }
                        ?>
                    </div>
                </div>
            </div>
           
        </div>
<style>
    *{
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    }
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
    color: black;
    padding: 10px;
    background-color: #00A9FF;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border: 1px #CCC solid;
    font-size: 1.2vw;
    text-align: center;
    position: relative;
    left : 190px;
}

.boxcontent {
   border: none;
}
</style>