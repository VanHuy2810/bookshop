<div class="row">
            <div class="row frmtitle  ">
                <H1>DANH SÁCH ĐƠN HÀNG</H1>
            </div>
            <form action="index.php?act=listbill" method="post">
                <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
                <input type="submit" name="litsok" value="Tìm kiếm">
            </form>
            <br>
            <div class="row frmcontent">
                <div class="row mb10 formdsloai">
                    <table class="formdsloai">
                        <tr>
                            <th ></th>
                            <th>MÃ ĐƠN HÀNG</th>
                            <th>KHÁCH HÀNG</th>
                            <th>SÓ LƯỢNG KHÁCH HÀNG</th>
                            <th>GIÁ TRỊ ĐƠN HÀNG</th>
                            <th>TÌNH TRẠNG ĐƠN HÀNG </th>
                            <th>NGÀY ĐẶT HÀNG </th>
                            <th>THAO TÁC</th>
                        </tr>
                        <?php
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $xoabill="index.php?act=xoabill&id=".$id;
                                $kh=$bill["bill_name"].'
                                <br> '.$bill["bill_email"].'
                                <br> '.$bill["bill_address"].'
                                <br>'.$bill["bill_tel"];
                                $ttdh=get_ttdh($bill["bill_status"]);
                                $countsp=loadall_cart_count($bill["id"]);
                                echo'<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>DAM-'.$bill['id'].'</td>
                                <td>'.$kh.'</td>
                                <td>'.$countsp.'</td>
                                <td><strong>'.$bill["total"].'</strong>VND</td>
                                <td>'.$ttdh.'</td>
                                <td>'.$bill["ngaydathang"].'</td>
                                <td><a href="'.$xoabill.'"><input type="button" value="Xóa"></td>
                               </tr> ';
                            }
                        ?>
                       
              
                    </table>
                </div>
               
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=addsp"> <input type="button" value="Nhập thêm"></a>
                </div>
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