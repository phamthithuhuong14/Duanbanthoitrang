
<main class="main__content_wrapper">
        

        <!-- cart section start -->
        <section class="cart__section section--padding">
            <div class="container-fluid">
                <div class="cart__section--inner">
                
                        <h2 class="cart__title mb-40">Giỏ hàng</h2>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="cart__table">
           <table class="cart__table--inner">
                <?php showgiohang(1);?>
                </table> 
                               
                               <ul class="" style="margin:10px" >
                               <li><a class="cart__summary--footer__btn primary__btn checkout" href="index.php?act=shop" style="float:left; margin:10px">Tiếp tục mua sắm</a>     </li>              
                               <li><a class="cart__summary--footer__btn primary__btn checkout" href="index.php?act=delcart" style="float:left; margin:10px">Xóa rỗng giỏ hàng </a>     </li>              
       
                                  
                              </ul></div>
                          
                              
                       
                   
                   
                   </div>
                   <div class="col-lg-4" >
                    <div class="cart__summary border-radius-10">
                        <div class="coupon__code mb-30">
                            <h3 class="coupon__code--title">Phiếu mua hàng</h3>
                            <p class="coupon__code--desc">Nhập mã phiếu giảm giá của bạn nếu bạn có.</p>
                            <div class="coupon__code--field d-flex">
                                <label>
                                    <input class="coupon__code--field__input border-radius-5" placeholder="Mã giảm gía.... " type="text">
                                </label>
                                <button class="coupon__code--field__btn primary__btn" type="submit">Áp dụng </button>
                            </div>
                        </div>
                        <div class="cart__note mb-20">
                            <h3 class="cart__note--title">Ghi chú </h3>
                            <p class="cart__note--desc">Thêm ghi chú của bạn vào đây...</p>
                            <textarea class="cart__note--textarea border-radius-5"></textarea>
                        </div>
                        <div class="cart__summary--total mb-20">
                            <table class="cart__summary--total__table">
                                <tbody>
                                    <tr class="cart__summary--total__list">
                                       
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                        <div class="cart__summary--footer">
                            <p class="cart__summary--footer__desc">Vận chuyển và thuế được tính khi thanh toán </p>
                            <input type="hidden" name="iduser" value="<?= isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : '' ?>">

                            <?php if(!empty($_SESSION['user'])) :?>
                            <ul class="d-flex justify-content-between">
                                <li><a class="cart__summary--footer__btn primary__btn checkout" href="?act=dathang">Đặt hàng </a></li>
                            </ul>
                            <?php 
                                                        else:
                                                    ?>

                                                     <p class="continue__shipping--btn primary__btn border-radius-5"><a href="index.php?act=dangnhap">Đăng nhập để mua hàng!</a></p>
                                                    <?php
                                                    endif; ?>
                        </div>
                    </div> 
                   </div>       
                        </div> 
                   
                </div>
            </div>     
        </section>
        <!-- cart section end -->

        <!-- Start product section -->
        <section class="product__section product__section--style3 section--padding">
            <div class="container product3__section--container">
                <div class="section__heading text-center mb-50">
                    <h2 class="section__heading--maintitle">Sản phẩm mới</h2>

                </div>
               
                <div class="product__section--inner product__swiper--column4__activation swiper">
                    <div class="swiper-wrapper">
                    <?php
                         foreach($dstop10 as $sp){
                            extract($sp);
                            $linksp="index.php?act=chitietsp&idsp=".$id;
                            $img=$img_path.$img;

                            echo '
                            <div class="swiper-slide">
                            <div class="product__items ">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="'.$linksp.'">
                                        <img class="product__items--img product__primary--img" src="'.$img.'" alt="product-img">
                                    </a>
                                    
                                </div>
                                <div class="product__items--content">
                                    <h3 class="product__items--content__title h4"><a href="product-details.html">'.$name.'</a></h3>
                                    <div class="product__items--price">
                                        <span class="current__price">'.number_format($giamoi, 0, ',', '.').'đ</span>
                                        <span class="price__divided"></span>
                                        <span class="old__price">'.number_format($giacu, 0, ',', '.').'đ</span>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                        </div>
                       
                            ';
                        }
                        ?>
<!--                       
                      <ul class="product__items--action d-flex" >
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn add__to--cart" href="'.$linksp.'" style="width: 270px">
                                            
                                            <span class="add__to--cart__text" style="margin-left:30%; font-size:17px"> Mua Ngay</span>
                                        </a>
                                    </li>
                                    
                                    
                                </ul> -->
                       
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- End product section -->


      

    </main>
