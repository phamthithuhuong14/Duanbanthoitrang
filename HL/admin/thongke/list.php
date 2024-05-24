

<div class="content-wrapper">
          <!-- Content -->

          <div class="card">
            <h5 class="card-header">THỐNG KÊ SẢN PHẨM THEO DANH MỤC </h5>
            <div class="table-responsive text-nowrap">
           
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ NHỎ NHẤT</th>
                    <th>GIÁ LỚN NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>

                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                <?php
                    foreach ($dsthongke as $thongke) {
                        extract($thongke);
                    ?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $name ?></td>
                            <td><?php echo $soluong ?></td>
                            <td> <?php echo number_format($gia_min, 0, ',', '.') ?>đ</td>
                            <td><?php echo number_format($gia_max, 0, ',', '.') ?>đ</td>
                            <td><?php echo number_format($gia_avg, 0, ',', '.') ?>đ</td>
                        </tr>
                    <?php
                    }
                    ?>

          
                </tbody>
              </table>
            </div>
            <div class="row mb10 ">
              <a href="?act=bieudo"> <input class="mr20" type="button" value="XEM BIỂU ĐỒ" style=" height:36px;background: #f29dab; color: white; border: 0.5px pink;margin: 15px"></a>
          </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
       

          <div class="content-backdrop fade"></div>
        </div>