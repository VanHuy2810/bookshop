<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            
            <div class="boxtilte">GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table>
                  
                    <?php
                       viewcart(1);
                    ?>
                   <!-- <tr>
                       <td>1</td>
                       <td><img src="images/hadalabo.jpg" alt="" height="80px"></td>
                       <td>a</td>
                       <td>60000</td>
                       <td>2</td>
                       <td>120000 VND</td>
                       <td><input type="button" value="Xóa"></td>
                    </tr>
                    <tr>
                       <td>2</td>
                       <td><img src="images/nevia.jpg" alt="" height="80px"></td>
                       <td>b</td>
                       <td>60000</td>
                       <td>2</td>
                       <td>12000 VND</td>
                       <td><input type="button" value="Xóa"></td>
                    </tr> -->
                </table>
            </div>
        </div>
        <div class="row mb bill">
        <a href="index.php"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
        <a href="index.php?act=bill"><input type="button" value="ĐỒNG Ý ĐẶT HÀNG"></a>
        <a href="index.php?act=delcart"> <input type="button" value="XÓA GIỎ HÀNG"></a>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
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
</style>