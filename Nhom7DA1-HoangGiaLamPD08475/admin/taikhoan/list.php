<div class="row">
            <div class="row header formtitle"> <h1>DANH SÁCH TÀI KHOẢN</h1></div>
            <div class="row formcontent">
                <div class="row mb formdsloai">
                   <table>
                    <tr>
                        <th></th>
                        <th>MÃ TK</th>
                        <th>EMAIL</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>ADDRESS</th>
                        <th>PHON NUMBER</th>
                        <th>ROLE</th>
                    </tr>
                    <?php 
                    foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk="index.php?act=suatk&id=".$id;
                    $xoatk="index.php?act=xoatk&id=".$id;
                    echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$email.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$role.'</td>
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