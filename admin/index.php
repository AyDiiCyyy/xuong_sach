<?php 
require_once "../model/danhmuc.php";
require_once "../model/sach.php";



$act = $_GET["act"] ?? "";

switch ($act) {
    case "":
        echo "<h1>HOME</h1>";
        break;
    case "lienhe":
        echo "<h1>LIÊN HỆ</h1>";
        break;
    case "loai-sach":
        echo "<h1>LOẠI SÁCH</h1>";
        break;
    case "danhmuc":
        $title= "Danh sách danh mục";
        // kiểm tra xoá danh muc
        if(isset($_GET['ma_danh_muc'])) {
            $ma_danh_muc = $_GET['ma_danh_muc'];
            delete_danhmuc($ma_danh_muc);
            $thongbao = "Xoá dữ liệu thành công";
        }

        if($_SERVER['REQUEST_METHOD']=="POST") {
            $ma_danh_muc = $_POST['ma_danh_muc']; // đây là 1 mảng
            delete_danhmuc_multi_item($ma_danh_muc);
            $thongbao = "Xoá dữ liệu thành công";

        }

        // Kiểm tra để lấy thông báo
        if(isset($_COOKIE['thongbao'])){
            $thongbao = $_COOKIE['thongbao'];
        }
        $danhmuc = load_all_danhmuc();
        $VIEW = "danhmuc/danhsach.php";
        break;
    case "themdm":
        $title = "Thêm danh mục";
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $trang_thai = $_POST['trang_thai'] ?? 0;
            // Thêm dữ liệu vào database
            insert_danhmuc($ten_danh_muc,$trang_thai);
            setcookie("thongbao", "Thêm danh mục thành công", time()+1);
            header("location: ?act=danhmuc");
            die;
        }
    case "suadm":
        $title = " Cập nhật danh mục";
        // cập nhật dữ liệu
        if($_SERVER['REQUEST_METHOD']=== "POST"){
            $ma_danh_muc =$_POST['ma_danh_muc'];
            $trang_thai = $_POST['trang_thai'] ?? 0;
            $ten_danh_muc = $_POST['ten_danh_muc'];
            // cập nhật
            update_danhmuc($ma_danh_muc, $ten_danh_muc, $trang_thai);
            $thongbao = "Cập nhật dữ liệu thành công";
        }
        // lấy thông tin danh mục cần sửa
        if (isset($_GET['ma_danh_muc'])){
            $ma_danh_muc = $_GET['ma_danh_muc'];
            $danhmuc = load_one_danhmuc($ma_danh_muc);
            extract($danhmuc);
            $VIEW = "danhmuc/sua.php";
        }
        // $VIEW = "danhmuc/them.php";

        case 'list_sach':
            $title = "Danh mục sách";


            $list_sach = load_all_sach();
            $VIEW = "sach/danhsach.php";
            break;
        case "themsach":
            $title = "Thêm sách";
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                extract($_POST);

                // hình ảnh
                $file=$_FILES['hinh'];
                $hinh=$file['name'];
                move_uploaded_file($file['tmp_name'],'../images/'.$hinh);

                // thêm vào database

                insert_sach($ten_sach, $hinh, $nha_xuat_ban, $so_luong, $gia, $mo_ta, $ngay_xuat_ban, $ma_danh_muc, 1);

                header("location: ?act=list_sach");
                die;

            }

            $danhmuc = load_all_danhmuc();
            $VIEW = "sach/them.php";
    default:
        echo "<h1>FILE NOT FOUND</h1>";
}
include "header.php";
include $VIEW;
include "footer.php";