<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="boxcontent row formtaikhoan mb">
                <?php 
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);

                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="mb10"> <b> Email:</b> 
                        <input type="email" name="email" id="" placeholder="email..." value="<?=$email?>">
                    </div>
                    <div class="mb10"><b> Tên đăng nhập :</b>
                        <input type="text" name="user" id="" placeholder="Username..." value="<?=$user?>">
                    </div>
                    <div class="mb10"><b> Mật khẩu:</b>
                        <input type="password" name="pass" id=""  placeholder="Password..." value="<?=$pass?>">
                    </div> 
                    <div class="mb10"><b> Địa chỉ:</b>
                        <input type="text" name="address" id=""  placeholder="Address..." value="<?=$address?>">
                    </div> 
                    <div class="mb10"><b> SĐT:</b>
                        <input type="text" name="tel" id=""  placeholder="Phone number..." value="<?=$tel?>">
                    </div> 
                    <div class="mb10"> 
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập Nhật" name="capnhat">
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