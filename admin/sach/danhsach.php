<div class="row2">
            <div class="row2 font_title">
                <h1>DANH SÁCH SÁCH</h1>
            </div>
            <div class="row2 form_content ">
                <form action="#" method="POST">
                    <div>
                        <?=$thongbao?>
                    </div>
                    <div class="row2 mb10 formds_loai">
                        <table>
                            <tr>
                                <th></th>
                                <th>MÃ SÁCH</th>
                                <th>TÊN SÁCH</th>
                                <th>HÌNH</th>
                                <th>SỐ LƯỢNG</th>
                                <th>GIÁ</th>
                                <th>TÊN DANH MỤC</th>
                                <th></th>
                            </tr>
                            <?php foreach ($list_sach as $sach): ?>
                                <?php extract($sach) ?>
                            <tr>
                                <td><input type="checkbox" name="ma_sach[]" value="<?=$ma_danh_muc?>" class="checkbox"></td>
                                <td><?=$ma_sach?></td>
                                <td><?=$ten_sach?></td>
                                <td>
                                    <img src="../images/<?=$hinh?>" width="90" alt="">
                                </td>
                                <td><?=$so_luong?></td>
                                <td><?=$gia?></td>
                                <td><?=$ten_danh_muc?></td>

                                <td> <a href="?act=suadm&ma_danh_muc=<?=$ma_sach?>"><input type="button" value="Sửa"> </a>
                                     <a onclick="return confirm('Bạn có muốn xoá không')" href="?act=list_sach&ma_sach=<?=$ma_sach?>"><input type="button" value="Xóa"></a>
                                
                            </td>
                            </tr>
                            <?php endforeach ?>

                        </table>
                    </div>
                    <div class="row mb10 ">
                        <input class="mr20" id="checkall" type="button" value="CHỌN TẤT CẢ">
                        <input class="mr20" id="clearall" type="button" value="BỎ CHỌN TẤT CẢ">
                        <input class="mr20" id="delete-all" type="submit" value="Xoá">
                        <a href="?act=themsach"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
                    </div>
                </form>
            </div>
        </div>