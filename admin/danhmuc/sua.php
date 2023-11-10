<div class="row2">
            <div class="row2 font_title">
                <h1>CẬP NHẬT DANH MỤC</h1>
            </div>

            <div>
                <form action="" method="post">
                    <h3><?= $thongbao ?? "" ?></h3>
                    Tên danh mục
                    <input type="text" name="ten_danh_muc" value="<?=$ten_danh_muc?>">
                    <br>
                    Trạng Thái
                    <input type="checkbox" name="trang_thai" value="1" <?= $trang_thai ? "checked" : "" ?>>
                    <br>
                    <input type="hidden" name="ma_danh_muc" value="<?= $ma_danh_muc ?>">
                    <button>Cập nhật</button>
                    <a href="?act=danhmuc"> <button type="button">danhsach</button> </a>
                </form>
            </div>