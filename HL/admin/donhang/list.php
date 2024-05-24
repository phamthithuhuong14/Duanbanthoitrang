


<div class="content-wrapper">
          <!-- Content -->

          <div class="card">
            <h5 class="card-header">DANH SÁCH ĐƠN HÀNG  </h5>
            <form action="index.php?act=listdonhang" method="POST"style="display:flex; margin:0 0 10px 18px; ">
                  <div class="navbar-nav align-items-center" style="margin-right: 5px"> 
                    <div class="nav-item d-flex align-items-center">
                        <input type="text" name="key"  class="form-control border-0 shadow-none bg-body" placeholder="Nhập mã đơn hàng"/>
                        <input  type="submit"  value="Tìm" style=" height:36px;background: #f29dab; color: white; border: 0.5px pink">
                    </div>
                  </div>
                
              </form>
            <div class="table-responsive text-nowrap">
           
              <table class="table" style="width=500px">
                <thead class="table-dark">
                  <tr>
                    <th>Mã đơn hàng</th>
                    <th>Khách hàng</th>
                    <th>Số lượng hàng</th>
                    <th>Giá trị đơn hàng</th>
                    <th>Ngày đặt</th>
                    <th>Tình trạng đơn</th>
                    <th>Lựa chọn</th>

                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <?php
                 foreach ($listdonhang as $donhang){// gtri và bảng danhmuc
                    extract($donhang); //xô dl ra
                    $suadh="index.php?act=suadh&id=".$id;
                    $xoadh="index.php?act=xoadh&id=".$id;
                   
                    $countsp=loadall_ctdonhang_count($donhang["id"]);
                    $ttdh=get_ttdh($donhang["trangthai"]);



                   echo' <tr>
                    <td>HL'.$donhang['id'].'</td>
                    <td> '.$user.'</td>
                    <td>'.$countsp.'</td>
                    <td>'.number_format($donhang['tongtien'], 0, ',', '.').'đ</td>
                    <td>'.$donhang['ngaydat'].'</td>
                    <td>'.$ttdh.'</td>


                    <td><a href="'.$suadh.'"><i class="mdi mdi-pencil" style=" height:36px;margin: 15px; color: #f29dab"></i></a> <a href="'.$xoadh.'"> <i class="mdi mdi-delete" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" style="color: #f29dab"></i> </a></td>
                    </tr>';
                }
                  ?>
          
                </tbody>
              </table>
              
            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
       

          <div class="content-backdrop fade"></div>
        </div>