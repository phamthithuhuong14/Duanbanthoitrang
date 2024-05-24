<?php
 function showgiohang($del){
        $tong = 0;
        $i=0;
        if($del==1){
            $xoasp_th='  <th class="cart__table--header__list">Thao tác</th> ';
            }else{
                $xoasp_th='';
            }
        echo'
            <thead class="cart__table--header">
            <tr class="cart__table--header__items">
                
                <th class="cart__table--header__list">Sản phẩm </th>
                <th class="cart__table--header__list">Giá </th>
                <th class="cart__table--header__list">Số lượng</th>
                <th class="cart__table--header__list">Thành tiền</th>
                '.$xoasp_th.'
            </tr>
          </thead>';
          foreach($_SESSION['mycart'] as $cart){
            $tt=$cart[3]*$cart[5];
            $tong+=$tt;
            if($del==1){
                $xoasp_td='  <td class="cart__table--body__list"><a href="index.php?act=delcart&id='.$i.'"><i class="fas fa-trash-alt"></i></a></td>            ';
                }else{
                    $xoasp_td='';
                }
            echo'
           
            <tbody class="cart__table--body">
                <tr class="cart__table--body__items">
                    <td class="cart__table--body__list">
                        <div class="cart__product d-flex align-items-center">
                          
                            <div class="cart__thumbnail">
                                <a href=""><img class="border-radius-5" src="'.$cart[1].'" alt="cart-product"></a> 
                            </div>
                            <div class="cart__content">
                                <h4 class="cart__content--title"><a href="">'.$cart[2].'</a></h4>
                                <span class="cart__content--variant">Size: '.$cart[4].'</span>
                            </div>
                        </div>
                    </td>
                    <td class="cart__table--body__list">
                        <span class="cart__price">'.number_format($cart[3], 0, ',', '.').'đ</span>
                    </td>
                    <td class="cart__table--body__list">
                    <span class="cart__price">'.$cart[5].'</span>

                    </td>
                    <td class="cart__table--body__list">
                    <span class="cart__price">'.number_format($tt, 0, ',', '.').'đ</span>

                    </td>
                   '.$xoasp_td.'
                 
                </tr>
              
               
            </tbody>
      
            
            ';
        }
  
        echo '   <tr class="cart__table--header__items">
        <th class="cart__table--header__list">Tổng tiền </th>
        <th class="cart__table--header__list"></th>
        <th class="cart__table--header__list"></th>
        <th class="cart__table--header__list">'.number_format($tong, 0, ',', '.').'đ</th>
        <th class="cart__table--header__list"></th>
       </tr>  ';
      
     
    
}


function tongdonhang(){
        $tong = 0;
       
        foreach($_SESSION['mycart'] as $cart){
            $tt=$cart[3]*$cart[5];
            $tong+=$tt;
       
        }
        return $tong;

  
       
}
function insert_donhang($iduser,$user, $address,$tel, $email, $pttt,$tongtien ,$ngaydat){
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare("INSERT INTO donhang(iduser, user, address, tel, email, pttt, tongtien, ngaydat) VALUES (?,?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$iduser,$user, $address,$tel, $email, $pttt,$tongtien ,$ngaydat]);
        
        $lastInsertedId = $conn->lastInsertId(); // Lấy ID của bản ghi vừa thêm vào
        
        return $lastInsertedId;
    } catch(PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
// function insert_donhang($iduser,$user, $address,$tel, $email, $pttt,$tongtien ,$ngaydat){
//     $sql= " INSERT INTO `donhang`(`iduser`,`user`, `address`,`tel`, `email`, `pttt`, `tongtien`,`ngaydat`) VALUES ('$iduser','$user', '$address','$tel', '$email', '$pttt', '$tongtien', '$ngaydat')";
//    return pdo_execute_return_lastInsertId($sql);
// }

function insert_ctdonhang($iduser, $iddonhang,$idsp, $img, $name,$giamoi ,$size,$soluong,$tt){
    $sql= " INSERT INTO `ctdonhang`(`iduser`, `iddonhang`,`idsp`, `img`, `name`, `giamoi`,`size`,`soluong`,`tt`) VALUES ('$iduser', '$iddonhang','$idsp','$img', '$name', '$giamoi', '$size', '$soluong', '$tt')";
   return pdo_execute($sql);
}

function loadone_donhang($iddonhang){
    $sql="select * from donhang where id=".$iddonhang;
    $donhang=pdo_query_one($sql);
    return  $donhang;
}


function loadall_ctdonhang($iddonhang){
    $sql="select * from ctdonhang where iddonhang=".$iddonhang;
    $donhang=pdo_query($sql);
    return  $donhang;
}
// Đếm số lượng mặt hàng

function loadall_ctdonhang_count($iddonhang){
    $sql="select * from ctdonhang where iddonhang=".$iddonhang;
    $donhang=pdo_query($sql);
    return sizeof($donhang);
}

// function load_donhang($iduser){
//     $sql = "SELECT * FROM donhang WHERE iduser =".$iduser;
//     $billlist = pdo_query($sql);
//     return $billlist;
// }


//listdonhang
function load_donhang($iduser){
    $sql="select * from donhang where 1";
    if($iduser>0)    $sql.=" AND iduser=".$iduser;
    $sql.=" order by id desc";
    $listdonhang=pdo_query($sql);
    return  $listdonhang;
}
    // Đơn hàng của tôi
function loadall_donhang($key="",  $iduser=0){
    $sql = "SELECT * FROM donhang WHERE 1"; 
    if($iduser>0) $sql .= " AND iduser =".$iduser;
    if($key !="") $sql .= " AND id LIKE '%".$key."%'";
    $sql .= " ORDER BY id DESC";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}

// Trạng thái đơn hàng
function get_ttdh($n){
    switch ($n){
        case '0':
            $tt = "Đơn hàng mới";
        break;
        case '1':
            $tt = "Đang xử lý";
        break;
        case '2':
            $tt = "Đang giao hàng";
        break;
        case '3':
            $tt = "Đã giao hàng	";
        break;
        

            break;
    }
    return $tt;
}

  // Xóa donhang
  function xoa_donhang($id) {
    $sql = "DELETE FROM ctdonhang WHERE iddonhang = $id;
    DELETE FROM donhang WHERE id = $id;
    ";
    pdo_execute($sql);
}
function suadonhang($id, $trangthai){
    $sql = "UPDATE donhang
    SET trangthai = $trangthai WHERE id = $id";
    pdo_execute($sql);    
}
?>

