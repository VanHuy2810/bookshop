<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
            <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="boxcontent row formtaikhoan mb">
                <form action="index.php?act=dangky" method="post">
                    <div class="mb10"> <b> Email:</b> 
                        <input type="email" name="email" id="" placeholder="Điền Email tại đây...">
                    </div>
                    <div class="mb10"><b> Tên đăng nhập :</b>
                        <input type="text" name="user" id="" placeholder="Điền tên đăng nhập...">
                    </div>
                    <div class="mb10"><b> Mật khẩu:</b>
                        <input type="password" name="pass" id=""  placeholder="Nhập mật khẩu...">
                    </div> 
                    <div class="mb10"> 
                        <input type="submit" value="Đăng Ký" name="dangky">
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