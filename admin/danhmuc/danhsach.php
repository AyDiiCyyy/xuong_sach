<div class="row2">
            <div class="row2 font_title">
                <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
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
                                <th>MÃ LOẠI</th>
                                <th>TÊN LOẠI</th>
                                <th>TRẠNG THÁI</th>
                                <th></th>
                            </tr>
                            <?php foreach ($danhmuc as $ds): ?>
                                <?php extract($ds) ?>
                            <tr>
                                <td><input type="checkbox" name="ma_danh_muc[]" value="<?=$ma_danh_muc?>" class="checkbox"></td>
                                <td><?=$ma_danh_muc?></td>
                                <td><?=$ten_danh_muc?></td>
                                <td><?=$trang_thai? "Hiển thị":"Ẩn"?></td>
                                <td> <a href="?act=suadm&ma_danh_muc=<?=$ma_danh_muc?>"><input type="button" value="Sửa"> </a>
                                     <a onclick="return confirm('Bạn có muốn xoá không')" href="?act=danhmuc&ma_danh_muc=<?=$ma_danh_muc?>"><input type="button" value="Xóa"></a>
                                
                            </td>
                            </tr>
                            <?php endforeach ?>

                        </table>
                    </div>
                    <div class="row mb10 ">
                        <input class="mr20" id="checkall" type="button" value="CHỌN TẤT CẢ">
                        <input class="mr20" id="clearall" type="button" value="BỎ CHỌN TẤT CẢ">
                        <input class="mr20" id="delete-all" type="submit" value="Xoá">
                        <a href="?act=themdm"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
                    </div>
                </form>
            </div>
        </div>