<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtilte">DON HANG CUA BAN</div>
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>MA DON HANG</th>
                        <th>NGAY DAT</th>
                        <th>SO LUONG MAT HANG</th>
                        <th>TONG GIA TRI DON HANG</th>
                        <th>Tinh trang don hang</th>
                    </tr>
                    <?php
                       if(is_array($listbill)){
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh=get_ttdh($bill['bill_status']);
                            $countsp=loadall_cart_count($bill['id']);
                           echo ' <tr>
                           <td>DAM-'.$bill['id'].'</td>
                           <td>'.$bill['ngaydathang'].'</td>
                           <td>'.$countsp.'</td>
                           <td>'.$bill['total'].'</td>
                           <td>'.$ttdh.'</td>
                       </tr>';
                        }
                       }
                    ?>

                </table>
            </div>
        </div>

    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ;?>
    </div>
</div>