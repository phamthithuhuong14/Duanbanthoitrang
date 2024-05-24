<section class="my__account--section section--padding">
            <div class="container">
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__left--sidebar">
                        <h2 class="account__content--title h3 mb-20">Thông tin giỏ hàng </h2>
                       
                    </div>
                    <div class="account__wrapper">
                        <div class="account__content">
                            <h2 class="account__content--title h3 mb-20">Danh sách các đơn hàng đã đặt</h2>
                            <div class="account__table--area">
                                <table class="account__table">
                                    <thead class="account__table--header">
                                        <tr class="account__table--header__child">
                                            <th class="account__table--header__child--items">Mã đơn</th>
                                            <th class="account__table--header__child--items">Ngày đặt</th>
                                            <th class="account__table--header__child--items">Số lượng</th>
                                            <th class="account__table--header__child--items">Tổng giá trị</th>
                                            <th class="account__table--header__child--items">Tình trạng đơn</th>	 	 	 	
                                        </tr>
                                    </thead>
                                  
                                    <tbody class="account__table--body mobile__none">
                                    <?php 
                                        if(is_array($listdonhang)){
                                            foreach($listdonhang as $donhang){
                                                extract($donhang);
                                                $ttdh= get_ttdh($donhang['trangthai']);
                                                $countsp=loadall_ctdonhang_count($donhang['id']);

                                                echo ' <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">HL'.$donhang['id'].'</td>
                                                <td class="account__table--body__child--items">'.$donhang['ngaydat'].'</td>
                                                <td class="account__table--body__child--items">'.$countsp.'</td>
                                                <td class="account__table--body__child--items">'.number_format($donhang['tongtien'], 0, ',', '.').'đ</td>
                                                <td class="account__table--body__child--items">'.$ttdh.'</td>
                                            </tr>
                                         

                                            ';
                                            }
                                        }
                                    ?>
                                       
                                    </tbody>
                                 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>