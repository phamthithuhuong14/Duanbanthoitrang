

    <div class="content-wrapper">
          <!-- Content -->

          <div class="card">
            <h5 class="card-header">DANH SÁCH TÀI KHOẢN </h5>
            <div class="table-responsive text-nowrap">
           
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th>Mã tài khoản</th>
                    <th>Tên </th>
                    <th>mật khẩu</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Role</th>
                   <th>Lựa chọn</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                <?php 
                foreach ($listtaikhoan as $taikhoan){
                    extract($taikhoan);
                    $suatk="index.php?act=suatk&id=".$id;
                    $xoatk="index.php?act=xoatk&id=".$id;

                   echo' <tr>
                    <td>'.$id.'</td>
                    <td>'.$user.'</td>
                    <td>'.$pass.'</td>
                    <td>'.$email.'</td>
                    <td>'.$address.'</td>
                    <td>'.$tel.'</td>
                    <td>'.$role.'</td>

                    <td> <a href="'.$xoatk.'"> <i class="mdi mdi-delete" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" style="color: #f29dab"></i> </a></td>
                    </tr>';
                }
            ?>
          
                </tbody>
              </table>
              <div class="row mb10 ">
                <a href="?act=addtk"> <input class="mr20" type="button" value="THÊM TÀI KHOẢN"style=" height:36px;background: #f29dab; color: white; border: 0.5px pink;margin: 15px"></a>
            </div>
            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
       

          <div class="content-backdrop fade"></div>
        </div>