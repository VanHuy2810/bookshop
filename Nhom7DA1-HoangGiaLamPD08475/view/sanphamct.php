<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
                extract($onesp);
            ?>
            <div class="boxtitle">Chi tiết sản phẩm</div>
            <div name="ctsp" class="row boxcontent">
                <?php
                    $img=$img_path.$img;
                    echo '<div class = "row mb spct"><img src="'.$img.'"></div>';
                    echo '<div class="row mb ">
                            <div class=" btnaddtocart">
                        <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="'.$id.'">
                            <input type="hidden" name="name" value="'.$name.'">
                            <input type="hidden" name="img" value="'.$img.'">
                            <input type="hidden" name="price" value="'.$price.'">
                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                        </form>
                        </div>';
                  
                ?>
            </div>
            <div class="ctsp">
                <div class="td">
                    <a><?=$name?><a>
                </div>
                <div class="tgnxb">
                    <a>Tác giả: <?=$tacgia?><a>
                        <br>
                    <a><?=$nxb?><a>
                </div>
                <div class="gt">
                        <a><?php echo number_format($price);?>₫</a>
                </div>
                <div class="gtc">
                    <span>550,000₫</span>
                </div>
                <div class="mt">
                    <hr>
                <a class="mota"><?=$mota?><a>
                </div>
            </div>
            
     
           
        </div>
        <div class="row">
            <iframe src="view/binhluan/binhluanform.php?idpro=<?=$id?>" frameborder="0" width="100%" height="300px"></iframe>
        </div>
        <div class="row mb">
            <div class="boxtitle">Sản phẩm cùng loại</div>
            <div class="row boxcontent">
                <?php
                    foreach($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php";?>
    </div>
</div>

<style>
    .gtc{
        text-decoration: line-through;
    font-size: 18px;
    position: absolute;
    top: 454px;
    left: 820px;
    color: #666666;

    }
    .mota{
        font-size:15px;
    }
    .row{
        font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;
    }
    .spct img{
    position: relative;
    width: 350px;
    height: 350px;
    right: 315px;
    top:55px;
}
    .td{
    position: relative;
    left: 600px;
    bottom: 410px;
    font-size:30px;
    text-transform: uppercase;
    }
    #ctsp{
        border: 2px solid red;
        border-radius: 5px;   
    }
    .tgnxb{
    position: relative;
    left: 600px;
    bottom: 370px;
    font-size: 20px;
    }
    .gt{
    position: relative;
    left: 600px;
    bottom: 260px;
    font-size: 45px;
    color: red;
    }
    .mt{
    position: relative;
    bottom: 100px;
    font-size: 18px;
    color: black;
    max-width: 95%;
    }
    .btnaddtocart input[type="submit"]{
        position: relative;
        left:570px;
        bottom:20px;
        width:200px;
        background-color:#A0E9FF;
        padding:20px;
        height: auto;
    }
    .boxphai{
    position:  Absolute;
    /* left: 1140px;
    bottom: 1222.5px; */
    right: 20px;
    width: 340px;
    border-left: 1px #CCC solid;
    border-right: 1px #CCC solid;
    border-bottom: 1px #CCC solid;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;

    }
    .boxtitle{
        border-top-left-radius: none;
    border-top-right-radius: none;
    }
 
</style>

