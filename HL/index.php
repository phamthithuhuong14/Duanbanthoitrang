<?php
session_start();
ob_start(); 
if(!isset( $_SESSION['mycart'])){ $_SESSION['mycart']=[];} //kiểm tra k tồn tại thì khởi tạo giỏ hàng


  include "model/pdo.php"; //gọi đến kết nối CSDL để đổ tất cả dữ liệu ra
  include "model/sanpham.php";
  include "model/danhmuc.php";
  include "model/binhluan.php";
  include "model/taikhoan.php";
  include "model/showgiohang.php";

//Những file này include trên header
  include "view/header.php";
  include "global.php";
  //thực hiện truy vấn lấy ra toàn bộ dl 
  $spnew = loadall_sanpham_home();
  $dsdm = loadall_danhmuc();
  $dstop10 = loadall_sanpham_top10();
    if(isset($_GET['act']) && ($_GET['act'] != "")){
        $act =$_GET['act'];
        switch ($act) {
            case 'chitietsp':
                // if(isset($_POST['guibinhluan'])){
                //     extract($_POST);
                //     var_dump($_POST);
                //     insert_binhluan($idpro, $noidung);
                // }
                if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
                    $idpro = $_POST['idpro'];
                    $iduser = $_SESSION['user']['id'];
                    $noidung = $_POST['noidung'];
                    insert_binhluan($idpro, $noidung,$iduser);
                }
                if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
                    $binhluan = loadall_binhluan($_GET['idsp']);
                    include "view/sanpham/chitietsp.php";
                } else {
                    include "view/home.php";
                }
                break;
         
            case 'shop':
                if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                    $kyw = $_POST['keyword'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm= load_ten_dm($iddm);
                include "view/sanpham/shop.php";
                break;
            
          
            case 'giohang':
                //làm rỗng giỏ hàng
             //    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unsert($_SESSION['giohang']);
                //xóa sp trong giỏ hàng
             //    if(isset($_GET['delid'])&&($_GET['delid']>=0)){
             //     array_splice($_SESSION['giohang'],$_GET['delid'],1);
             //    }
             
                //lấy dl từ form
                 if(isset($_POST['addcart'])&&($_POST['addcart'])){
                     $id=$_POST['id'];
                     $img=$_POST['img'];
                     $name=$_POST['name'];
                     $giamoi=$_POST['giamoi'];
                     $size=$_POST['size'];
                     $soluong=$_POST['soluong'];
                     $tt=$soluong*$giamoi;
                     if(isset($_POST['soluong'])&&($_POST['soluong']>0)){
                        $soluong=$_POST['soluong'];
                     }else{
                        $soluong=1;
                     }
                     $ktr=0;
                     $i=0;
                    foreach($_SESSION['mycart'] as $item){
                        if($item[2]==$name){
                            $soluongmoi=$soluong+$item[5];
                            $_SESSION['mycart'][$i][5]=$soluongmoi;
                            $ktr=1;
                            break;
                        }
                        $i++;
                    }

                     if($ktr==0){

                         $spadd=[$id,$img,$name,$giamoi,$size,$soluong,$tt]; // mảng con chứa thông tin // Vị trí: [i]:hàng  [0]: cột
                         array_push($_SESSION['mycart'],$spadd);

                       
                     }
             
                 }
                
             
                include "view/giohang/giohang.php";
                break;
            case 'delcart':
               
          
                // if(isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
                if(isset($_GET['id'])){
                    array_splice($_SESSION['mycart'],$_GET['id'],1);

                }else{
                    $_SESSION['mycart']=[];
                }

                header('location: index.php?act=giohang');


                break;
            case 'dathang':
                include "view/giohang/thanhtoan.php";
                break;
            case 'donhang':
                
                if (isset($_POST['dathang']) && ($_POST['dathang'])) {

                  if(isset($_SESSION['user'])){
                    $iduser=$_SESSION['user']['id'];
                    // var_dump($_SESSION);
                  }else{
                    include_once('view/taikhoan/dangnhap.php');
                  }
                    $user=$_POST['user'];
                    $address=$_POST['address'];
                    $email=$_POST['email'];
                    $tel=$_POST['tel'];
                    $pttt=$_POST['pttt'];
                    $ngaydat = date('Y-m-d');
                    $tongtien = tongdonhang();
                    //tạo đơn hàng
                    $iddonhang = insert_donhang($iduser,$user,$address,$tel,$email,$pttt,$tongtien,$ngaydat);
                    // lấy dl từ session['mycart'] và iddonhang
                    // var_dump($_SESSION['mycart']);
                    foreach ($_SESSION['mycart'] as $cart){
                        insert_ctdonhang($iduser,$iddonhang,$cart[0],$cart[1],$cart[2],$cart[3],$cart[4],$cart[5],$cart[6]);
                   }
                   //xóa session 
                   $_SESSION['mycart']=[];

                 
                }

                // var_dump($donhang);
                $donhang=loadone_donhang($iddonhang);
                
                $ctdonhang=loadall_ctdonhang($iddonhang);

                include "view/giohang/donhang.php";
                break;

            case 'listdonhang':
                $listdonhang=load_donhang($_SESSION['user']['id']);
            
                include "view/giohang/listdonhang.php";
                break;
            case 'dangnhap':
               
                include "view/taikhoan/dangnhap.php";
                break;
          
            case 'login':
                if (isset($_POST['login']) && ($_POST['login'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = check_user($user, $pass);

                    if (is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;
                        //   $thongbao = "Đăng nhập thành công";
                        header("Location: index.php?act=shop");
                    } else {
                        $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký";

                    }
                }
                include "view/taikhoan/dangnhap.php";
                break;
            case 'dangky':
                if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];

                  
                    insert_taikhoan($user, $pass, $email,$address,$tel);
                    $thongbao = "Đăng ký thành công, bạn có thể đăng nhập để sử dụng chức năng!";
                    header("Location: index.php?act=dangnhap");

                }
                include "view/taikhoan/dangky.php";
                break;
            case 'thoat':
                session_unset();
                header("Location: index.php");
                break;
            case 'edittaikhoan':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    update_taikhoan($id, $user, $pass, $email, $address, $tel);
                    $_SESSION['user'] = check_user($user, $pass);
                    $thongbao = "Cập nhật tài khoản thành công!";
                    header("Location: index.php?act=edittaikhoan");

                }
                include "view/taikhoan/edittaikhoan.php";
                break;
            case 'quenmk':
                if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                    $email = $_POST['email'];
    
                    $checkemail = checkemail($email);
                    if (is_array($checkemail)) {
                        $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                    } else {
                        $thongbao = "Email này không tồn tại";
                    }
                }
                include "view/taikhoan/quenmk.php";
                break;
            case 'thongtin':
                
                include "view/taikhoan/thongtin.php";
                break;
        
        }
    }else{
        header("Location: index.php?act=shop");

    }
    include "view/footer.php";
    ob_end_flush(); 
?>