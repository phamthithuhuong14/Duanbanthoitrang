<?php
session_start();
ob_start();

    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/thongke.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/showgiohang.php";



    include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
         
            case "listsp":
                if(isset($_POST['clickOK'])&&($_POST['clickOK'])){
                    $keyw=$_POST['keyw'];
                    $iddm=$_POST['iddm'];

                }else{
                    $keyw="";
                    $iddm=0;
                }
                $listdanhmuc= loadall_danhmuc();
                $listsanpham = loadall_sanpham($keyw, $iddm);
                include "sanpham/list.php";
                break;
            case "addsp":
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giacu = $_POST['giacu'];
                    $giamoi = $_POST['giamoi'];
                    $mota = $_POST['mota'];
                    $motadai = $_POST['motadai'];
                    $hinh = $_FILES['hinh']['name']; //lấy ra tên hình
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES['hinh']['name']);
                    if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                        echo "Upload thành công!";
                    }else{
                        echo"Upload không thành công!";
                    }

                    echo $iddm;
                    insert_sanpham($tensp, $giacu, $giamoi, $hinh, $mota,$motadai ,$iddm);
                    
                    
                    $thanhcong = "Thêm thành công!";
                   
                }
                $listdanhmuc= loadall_danhmuc();

                include "sanpham/add.php";
                break;  
            case "xoasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);

                }
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case "suasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                  
                    $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdanhmuc= loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case "updatesp":
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $iddm = $_POST['iddm'];
                    $id = $_POST['id'];
                    $tensp = $_POST['tensp'];
                    $giacu = $_POST['giacu'];
                    $giamoi = $_POST['giamoi'];
                    $mota = $_POST['mota'];
                    $motadai = $_POST['motadai'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_sanpham($id, $iddm, $tensp, $giacu,$giamoi, $mota,$motadai, $hinh);
                    $thongbao = "cập nhật thành công!";
                }
                $listsanpham = loadall_sanpham("", 0);
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/list.php";
                break;
                         
            case "adddm":
                $errtenloai="";
                $tenloai="";
                //kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){ //kiểm tra xem nó có tồn tại hay k và có click vào hay k
                    $tenloai=$_POST['tenloai']; //lấy tên loại về và insert vào database
                    if(empty($_POST['tenloai']))
                    {
                        $errtenloai="Bạn chưa nhập tên loại";
                    }
                    if($errtenloai==""){
                        $sql="insert into danhmuc(name) values('$tenloai')";//câu lệnh sql
                        pdo_execute($sql);//thực thi câu lệnh
                        $thongbao="Thêm thành công";

                    }
                }
                include "danhmuc/add.php";
                break;  
            case "listdm":
                $sql="select * from danhmuc order by id desc";
                $listdanhmuc=pdo_query($sql); //gán cho 1 giá trị nào đó
                include "danhmuc/list.php";
                break;  
            case "xoadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sql="delete from danhmuc where id=".$_GET['id'];
                    pdo_execute($sql);
                }
                $sql="select * from danhmuc order by id desc";
                $listdanhmuc=pdo_query($sql);
                include "danhmuc/list.php";
                break;  
            case "suadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sql="select * from danhmuc where id=".$_GET['id'];
                    $dm=pdo_query_one($sql);
                }
             
                include "danhmuc/update.php";
                break; 
            case "updatedm":
                
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];

                    $sql="update danhmuc set name='".$tenloai."' where id=".$id;
                    pdo_execute($sql);
                    $thongbao="Thêm thành công";
                }

                $sql="select * from danhmuc order by id desc";
                $listdanhmuc=pdo_query($sql);
                include "danhmuc/list.php";
                break;   

            case "listtk":
                $listtaikhoan=loadall_taikhoan();
                include "taikhoan/list.php";
                break;  

            case "xoatk":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sql="delete from taikhoan where id=".$_GET['id'];
                    pdo_execute($sql);
                }
                $sql="select * from taikhoan order by id desc";
                $listtaikhoan=pdo_query($sql);
                include "taikhoan/list.php";
                break;  
            
            case "addtk":

                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = $_POST['role'];
                  
                    insert_taikhoan($user, $pass, $email, $address, $tel, $role);
                    $thanhcong = "Thêm thành công!";
                }

                include "taikhoan/add.php";
                break;  


          
            case "listbl":
                $sql="select * from binhluan order by id desc";
                $listbinhluan=pdo_query($sql);
                include "binhluan/list.php";
                break;  
            case "xoabl":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sql="delete from binhluan where id=".$_GET['id'];
                    pdo_execute($sql);
                }
                $sql="select * from binhluan order by id desc";
                $listbinhluan=pdo_query($sql);
                include "binhluan/list.php";
                break;  

            case "thongke":
                $dsthongke = load_thongke_sanpham_danhmuc();
                include "thongke/list.php";
                break;
            case "bieudo":
                $dsthongke = load_thongke_sanpham_danhmuc();
                include "thongke/bieudo.php";
                break;
            case "listdonhang":
                if (isset($_POST['key']) && ($_POST['key'])!="") {
                    $key = $_POST['key'];
                }else{
                    $key = "";
                }
                $listdonhang = loadall_donhang($key,0);
                include "donhang/list.php";
                break;
            case 'suadh':
                if (isset($_GET['id']) && ($_GET['id']>0)) {
                    $donhang = loadone_donhang($_GET['id']);
                }
                include "donhang/update.php";
                break;
                
            case "xoadh":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    xoa_donhang($_GET['id']);
                }
                $listdonhang = loadall_donhang("",0);
                include "donhang/list.php";
                break;

            case 'updatedh':
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $trangthai = isset($_POST['trangthai']) ? intval($_POST['trangthai']) : 0;
                    $id = $_POST['id'];
                    // Kiểm tra nếu $bill_status không nằm trong khoảng từ 0 đến 3, đặt lại giá trị về 0
                    if ($trangthai < 0 || $trangthai > 3) {
                        $trangthai = 0;
                    }
                    suadonhang($id, $trangthai);
                }          
                $listdonhang = loadall_donhang("",0);
                header('location:index.php?act=listdonhang');
                include "donhang/update.php";
                break;

            case "thoat":
                session_unset();
                header('location: ../index.php?act=dangnhap');
                break;
            case "home":
                include "home.php";
                break;
          
        }
    }else{
        include "home.php";
    }
    include "footer.php";


?>
