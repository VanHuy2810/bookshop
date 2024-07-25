<div class="row">
            <div class="row header formtitle"> <h1>DANH SÁCH LOẠI HÀNG HÓA</h1></div>
            <div class="row formcontent">
                <div class="row mb formdsloai">
                   <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th>CHỨC NĂNG</th>
                    </tr>
                    <?php 
                    foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm="index.php?act=suadm&id=".$id;
                    $xoadm="index.php?act=xoadm&id=".$id;
                    echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>                    
                   </table>
                </div>
            <div class="row mb ">
                <input type="button" value="CHỌN TẤT CẢ">
                <input type="button" value="BỎ CHỌN TẤT CẢ">
                <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
                <a href="index.php?act=adddm"><input type="button" value="NHẬP MỚI">
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
    font-size: 20px
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
</style>