<div class="row2">
            <div class="row2 font_title">
                <h1>THÊM SÁCH</h1>
            </div>

            <div>
                <form action="" method="post" enctype="multipart/form-data">
                    
                    Tên danh mục
                    <input type="text" name="ten_sach">
                    <br>
                    Hình <input type="file" name="hinh">
                    <br>
                    Số lượng <input type="number" name="so_luong">
                    <br>
                    Giá <input type="number" name="gia" step="0.1">
                    <br>
                    Mô tả <textarea name="" id="" cols="100" rows="10"></textarea>
                    <br>
                    Nhà xuất bản <input type="text" name="nha_xuat_ban">
                    Ngày xuất bản <input type="date" name="ngay_xuat_ban">
                    <br>
                    Danh mục
                    <select name="ma_danh_muc" id="">
                        <option value="0">Chọn danh mục</option>
                        <?php foreach($danhmuc as $dm): ?>
                            <option value="<?=$dm['ma_danh_muc']?>"><?=$dm['ten_danh_muc']?></option>
                        

                        <?php endforeach ?>
                    </select>
                    
                    <br>
                    <button>Thêm</button>
                    <a href="?act=listds">Danh sách</a>
                </form>
            </div>