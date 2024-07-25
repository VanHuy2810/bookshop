<div class="row">
            <div class="row header formtitle mb"> <h1>DANH SÁCH LOẠI HÀNG HÓA</h1></div>

            <form action="index.php?act=listsp" method="post">
                        <input type="text" name="kyw" id="" placeholder="Nhập tên sản phẩm:">
                        <select name="iddm" id="">
                            <option value="0">Tất cả</option>
                        <?php 
                        foreach ($listdanhmuc as $danhmuc) {
                           extract($danhmuc);
                           echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                        ?>
                        </select>
                        <input type="submit"   name="listok" value="Hiển thị">
                        <a href="index.php?act=addsp"><input type="button" value="NHẬP MỚI">
                    </form>
                    
            <div class="row formcontent">

                <div class="row mb formdsloai">
                    
                   <table>
                    <tr>
                        <th></th>
                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>HÌNH</th>
                        <th>GIÁ</th>
                        <th>TÁC GIẢ</th>
                        <th>NHÀ XUẤT BẢN</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                    <?php 
                    foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp="index.php?act=suasp&id=".$id;
                    $xoasp="index.php?act=xoasp&id=".$id;
                    $hinhpath="../upload/".$img;
                    if(is_file($hinhpath)){
                        $hinh = "<img src='".$hinhpath."'height='80'>";
                    } else {
                        $hinh = " không có hình ảnh";
                    }
                    echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$hinh.'</td>
                        <td>'.$price.'</td>
                        <td>'.$tacgia.'</td>
                        <td>'.$nxb.'</td>
                        <td>'.$luotxem.'</td>
                        <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>                    
                   </table>
                </div>
            <div class="row mb ">
                <input type="button" value="CHỌN TẤT CẢ">
                <input type="button" value="BỎ CHỌN TẤT CẢ">
                <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
                </div></a>
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
    font-size: 15px
}
select{
    font-size:16px;
}

/* CSS */
input {
  align-items: center;
  background-color: #FFFFFF;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: .25rem;
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
  width: auto;
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
.formtitle {
    background-color: #CDF5FD;
    border: 1px #CCC solid;
    color: #666;
    border-radius: 5px;
    padding: 10px 20px;
}
</style>