<?php 
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../upload/".$img;
if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' height='80'>";
}else{
    $hinh="no photo";
}
?>
<div class="row">
            <div class="row header formtitle"> <h1>CHỈNH SỬA LOẠI HÀNG</h1></div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row mb10 ">
                    <select name="iddm">
                            <option value ="0" selected>Tất cả</option>
                        <?php 
                        foreach ($listdanhmuc as $danhmuc) {
                           extract($danhmuc);
                           if($iddm==$id) $s="selected"; else $s="";
                           echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>'; 
                        }
                        ?>
                    </select>
<?php 
if(is_array($sanpham)){
    extract($sanpham);
}
?>
                <div class="row mb ">
                    Tên sản phẩm: <br>
                    <input type="text" name="tensp" value="<?=$name?>">
                </div>
                <div class="row mb ">
                    Giá: <br>
                    <input type="text" name="giasp" value="<?=$price?>">
                </div>
                <div class="row mb ">
                    Tác giả: <br>
                    <input type="text" name="tacgia" value="<?=$tacgia?>">
                </div>
                <div class="row mb ">
                    Nhà xuất bản: <br>
                    <input type="text" name="nxb" value="<?=$nxb?>">
                </div>
                <div class="row mb ">
                   HÌnh ảnh: <br>
                    <input type="file" name="hinh">
                    <?=$hinh?>
                </div>
                <div class="row mb ">
                    Mô tả: <br>
                    <textarea name="mota" cols="30" rows="10" ><?=$mota?></textarea>
                </div>
                
                <div class="row mb10 ">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="capnhat" value="CẬP NHẬT">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
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
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
h1{
    font-size: 20px
}

/* CSS */
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

