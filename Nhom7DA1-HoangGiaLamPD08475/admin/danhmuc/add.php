<div class="row">
            <div class="row header formtitle"> <h1>THÊM MỚI LOẠI HÀNG HÓA</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb ">
                        Mã loại <br>
                        <input type="text"  placeholder="Tự động nhập" name="maloai" disabled>
                    </div>
                    <div class="row mb ">
                    Tên loại <br>
                    <input type="text" name="tenloai">
                </div>
                <div class="row mb ">
                    <input type="submit" name="themmoi" value="THÊM MỚI">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
    <style>
    .row input[type=text] {
  align-items: center;
  background-color: #FFFFFF;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: .25rem;
  border-color:black; 
  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
  box-sizing: border-box;
  color: rgba(0, 0, 0, 0.85);
  cursor: pointer;
  display: inline-flex;
  font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 1.25;
  margin: 0;
  min-height: 3rem;
  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
  position: relative;
  text-decoration: none;
  transition: all 250ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  width: 800px;
}
.row input[type=submit],
.row input[type=button],
.row input[type=reset],
option{
  align-items: center;
  background-color: #FFFFFF;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: .25rem;
  border-color:black; 
  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
  box-sizing: border-box;
  color: rgba(0, 0, 0, 0.85);
  cursor: pointer;
  display: inline-flex;
  font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 1.25;
  margin: 0;
  min-height: 3rem;
  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
  position: relative;
  text-decoration: none;
  transition: all 250ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
}

input:hover,
input:focus {
  border-color: rgba(0, 0, 0, 0.15);
  box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
  color: rgba(0, 0, 0, 0.65);
}

input:hover {
  transform: translateY(-1px);
}

input:active {
  background-color: #F0F0F1;
  border-color: rgba(0, 0, 0, 0.15);
  box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
  color: rgba(0, 0, 0, 0.65);
  transform: translateY(0);
}
select{
    font-size: 15px;
}
.formcontent{
  position: absolute;
  top:300px;
  left:300px;
  max-width:400px;
}
select{
  font-size: 15px;
  width: 250px;
  height:30px;
}
</style>

