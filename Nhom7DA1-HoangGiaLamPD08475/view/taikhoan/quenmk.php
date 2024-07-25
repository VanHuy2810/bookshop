<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
            <div class="boxtitle">QUÊN MẬT KHẨU</div>
            <div class="boxcontent row formtaikhoan mb">
                <form action="index.php?act=quenmk" method="post">
                    <div class="mb10"> <b> Email:</b> 
                        <input type="email" name="email" id="" placeholder="email...">
                    </div>
                   
                    <div class="mb10"> 
                        <input type="submit" value="Gửi" name="guiemail">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                <?php 
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                ?>
                </h2>
            </div> 
        </div>
    </div>
    <div class="boxphai">
        <?php include 'view/boxright.php';?>
    </div>
</div>