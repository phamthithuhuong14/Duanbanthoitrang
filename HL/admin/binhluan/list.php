

    <div class="content-wrapper">
          <!-- Content -->

          <div class="card">
            <h5 class="card-header">DANH SÁCH BÌNH LUẬN </h5>
            <div class="table-responsive text-nowrap">
           
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th>Mã loại</th>
                    <th>Nội dung </th>
                    <th>Iduser</th>
                    <th>Idpro</th>
                    <th>Ngày bình luận</th>
                    <th>Xóa </th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                 <?php 
                 foreach ($listbinhluan as $binhluan){
                     extract($binhluan);
                     $xoabl="index.php?act=xoabl&id=".$id;
 
                    echo' <tr>
                     <td>'.$id.'</td>
                     <td>'.$noidung.'</td>
                     <td>'.$iduser.'</td>
                     <td>'.$idpro.'</td>
                     <td>'.$ngaybinhluan.'</td>
 
                     <td> <a href="'.$xoabl.'"> <i class="mdi mdi-delete" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" style="color: #f29dab"></i> </a></td>
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