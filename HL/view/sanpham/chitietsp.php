 <!-- CHI TIẾT SẢN PHẨM   -->
 <style>
td {
    padding: 0 20px;
}
.error_binhluan{
    color:red;
    
}
</style>
 <main class="main__content_wrapper">
        
        <!-- Start product details section -->
        <section class="product__details--section section--padding">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-md-2">
                    <div class="col">
                        <div class="product__details--media">
                            <div class="product__media--preview  swiper">
                                <div class="swiper-wrapper">
                                <?php
                                        extract($onesp);
                                
                                ?>

                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <!-- <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="assets/img/product/anh1.jpg"><img class="product__media--preview__items--img" src="assets/img/product/anh1.jpg" alt="product-media-img"></a> -->
                                            <?php
                                            
                                            $img = $img_path.$img;
                                            echo '<img class="product__media--preview__items--img"  src= "'.$img.'"> <br>';

                                            ?>
                                        </div>
                                    </div>
                                 
                               
                                </div>
                            </div>
                         
                        </div>
                    </div>   
                    <div class="col">
                        <div class="product__details--info">
                           
                                <h2 class="product__details--info__title mb-15"><?= $name ?></h2>
                                <div class="product__details--info__price mb-10">
                                    <span class="current__price"><?=number_format($giamoi, 0, ',', '.')  ?>đ</span>
                                    <span class="price__divided"></span>
                                    <span class="old__price"><?=number_format($giacu, 0, ',', '.')  ?>đ</span>
                                </div>
                             
                                <p class="product__details--info__desc mb-15"><?= $mota ?></p>
                                <div class="product__variant">
                                <form action="index.php?act=giohang" method="post">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <input type="hidden" name="img" value="<?= $img ?>">
                                        <input type="hidden" name="name" value="<?= $name ?>">
                                        <input type="hidden" name="giamoi" value="<?= $giamoi ?>">
                                    <div class="product__variant--list mb-15">
                                  
                                        <fieldset class="variant__input--fieldset weight" style="display:flex">
                                        <div>  <legend class="product__variant--title mb-8">Size :</legend></div>
                                     <select  name="size" id="" style="width: 50px ;height:36px; ">
                                    <option value="S"    selected class="variant__size--value red" for="weight1">S</option>
                                    <option value="M"   class="variant__size--value red" for="weight1" >M</option>
                                    <option value="XL"  class="variant__size--value red" for="weight1" >XL</option>
                   
                                      </select>
                                        </fieldset>
                                    </div>
                                   
                                    <div class="minicart__text--footer d-flex align-items-center">
                            <div class="quantity__box minicart__quantity">
                                        <div>  <legend class="product__variant--title mb-8">Số lượng:</legend></div>
                                <button type="button"  class="quantity__value decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                <label>
                                    <input type="number" class="quantity__number" value="1" min="1"  name="soluong" data-counter />
                                </label>
                                <button type="button" class="quantity__value increase"  value="Increase Value">+</button>
                            </div>
                        </div>

                            
                                    <div class="product__variant--list mb-15">
                                        <a class="variant__wishlist--icon mb-15" href="" title="Add to wishlist">
                                            <svg class="quickview__variant--wishlist__svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                            Thêm vào danh sách yêu thích 
                                        </a>
                                        
                                        <input class="variant__buy--now__btn primary__btn" type="submit" value="Thêm vào giỏ hàng" name="addcart">
                                    </div>
                                </form>
                                </div>
                                <div class="quickview__social d-flex align-items-center mb-15">
                                    <label class="quickview__social--title">Chia sẻ xã hội :</label>
                                    <ul class="quickview__social--wrapper mt-0 d-flex">
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" href="https://www.facebook.com/">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                    <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" href="https://twitter.com/">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                                    <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" href="https://www.instagram.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.497" height="16.492" viewBox="0 0 19.497 19.492">
                                                    <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span> 
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" href="https://www.youtube.com/">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582" viewBox="0 0 16.49 11.582">
                                                    <path  data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="guarantee__safe--checkout">
                                    <h5 class="guarantee__safe--checkout__title">Thanh toán an toàn:</h5>
                                    <img class="guarantee__safe--checkout__img" src="assets/img/other/safe-checkout.png" alt="Payment Image">
                                </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product details section -->

        <!-- Start product details tab section -->
        <section class="product__details--tab__section section--padding">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <ul class="product__details--tab d-flex mb-30">
                            <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">Miêu tả sản phẩm </li>
                           
                        </ul>
                        <div class="product__details--tab__inner border-radius-10">
                            <div class="tab_content">
                                <div id="description" class="tab_pane active show">
                                    <div class="product__tab--content">
                                        <div class="product__tab--content__step mb-30">
                                            <h2 class="product__tab--content__title h4 mb-10">Chi tiết sản phẩm </h2>
                                            <p class="product__tab--content__desc"> 
                                                <?= $motadai ?></p>
                                        </div>
                                       
                                    </div> 
                                </div>
                                <div id="reviews" class="tab_pane  active show ">
                                    <div class="product__reviews">
                                        <div class="product__reviews--header">
                                            <h2 class="product__reviews--header__title h3 mb-20">Phản hồi của khách hàng</h2>
                                          
                                            <a class="actions__newreviews--btn primary__btn" href="#writereview">Viết đánh giá </a>
                                        </div>
                                        <div class="reviews__comment--area">
                                       

                                          
                                        <?php foreach($binhluan as $value): ?>
                                                   
                                            <div class="reviews__comment--list d-flex">
                                                <div class="reviews__comment--thumb">
                                                    <img src="assets/img/other/comment-thumb1.png" alt="comment-thumb">
                                                </div>
                                                <div class="reviews__comment--content">
                                                 

                                                    <div class="reviews__comment--top d-flex justify-content-between">
                                                        <div class="reviews__comment--top__left">
                                                            <h3 class="reviews__comment--content__title h4"><?= $value['user']  ?></h3>
                                                            
                                                        </div>
                                                        <span class="reviews__comment--content__date"><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'])) ?></span>
                                                    </div>
                                                    <p class="reviews__comment--content__desc"><?= $value['noidung']?> </p>
                                                </div>
                                            </div>
                                         
                                            <?php endforeach; ?>

                                        </div>
                                        <div id="writereview" class="reviews__comment--reply__area">
                                            
                                                <h3 class="reviews__comment--reply__title mb-15">Thêm đánh giá  </h3>
                                               
                                                <div class="row">
                                                <form action="" method="POST">
                                                    <input type="hidden" name="idpro" value="<?=$id?>">
                                                    <input type="hidden" name="iduser" value="<?=$id?>">

                                                    <?php if(!empty($_SESSION['user'])) :?>

                                                    <div class="col-12 mb-10">
                                                        <textarea class="reviews__comment--reply__textarea" placeholder="Bình luận của bạn...." name="noidung"></textarea>
                                                    </div> 
                                                    <input  class="reviews__comment--btn text-white primary__btn" type="submit" name="guibinhluan" value="Gửi bình luận">
                                                    <?php 
                                                        else:
                                                    ?>
                                                    <p class="reviews__comment--btn text-white primary__btn"><a href="index.php?act=dangnhap">Đăng nhập để bình luận!</a></p>
                                                    <?php
                                                    endif; ?>
                                                </form>
                                                </div>

                                                <!-- <button class="reviews__comment--btn text-white primary__btn" data-hover="Submit" type="submit">Gửi</button> -->
                                            
                                            
                                        </div> 
                                    </div>    
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product details tab section -->
        
       <!-- Start product section -->
        <section class="product__section product__section--style3 section--padding">
            <div class="container product3__section--container">
                <div class="section__heading text-center mb-50">
                    <h2 class="section__heading--maintitle">Sản phẩm cùng loại</h2>

                </div>
               
                <div class="product__section--inner product__swiper--column4__activation swiper">
                    <div class="swiper-wrapper">
                    <?php
                        foreach ($sp_cung_loai as $sp_cung_loai) {
                            extract($sp_cung_loai);
                            $linksp = "index.php?act=sanphamct&idsp=".$id;
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
    <!-- HẾT CHI TIẾT SẢN PHẨM   -->