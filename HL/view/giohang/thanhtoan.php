 <!-- BẮT ĐẦU TỪ ĐÂY -->
    <!-- Start checkout page area -->
    <div class="checkout__page--area" style="margin-bottom:50px">
        <div class="container">
            <div class="checkout__page--inner d-flex">
                <div class="main checkout__mian" >
                    <header class="main__header checkout__mian--header mb-30">
                       
                        <nav>
                            <ol class="breadcrumb checkout__breadcrumb d-flex">
                                <li class="breadcrumb__item breadcrumb__item--completed d-flex align-items-center">
                                    <a class="breadcrumb__link" href="cart.html">Giỏ hàng</a>
                                    <svg class="readcrumb__chevron-icon" xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
                                </li>
                        
                                <li class="breadcrumb__item breadcrumb__item--current d-flex align-items-center">
                                    <span class="breadcrumb__text current">Thông tin giao hàng</span>
                                    <svg class="readcrumb__chevron-icon" xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
                                </li>
                              
                            </ol>
                            </nav>
                    </header>
                    <main class="main__content_wrapper" >
                    <table class="cart__table--inner">
               
                <?php showgiohang(0);?>
                </table> 
                    </main>
                  
                
                </div>
                <aside class="checkout__sidebar sidebar">
                <form action="index.php?act=donhang" method="POST"  onsubmit="return validate()" >
                            <?php
                                if(isset($_SESSION['user'])){
                                    $user=$_SESSION['user']['user'];
                                    $address=$_SESSION['user']['address'];
                                    $email=$_SESSION['user']['email'];
                                    $tel=$_SESSION['user']['tel'];

                                }else{
                                    $user="";
                                    $address="";
                                    $email="";
                                    $tel="";
                                }
                            ?>

                            <div class="checkout__content--step section__contact--information">
                                <div class="section__header checkout__section--header d-flex align-items-center justify-content-between mb-25">
                                    <h2 class="section__header--title h3">Thông tin liên lạc </h2>
                                    <p class="layout__flex--item">
                                        <a class="layout__flex--item__link" href="?act=dangky">Đăng ký /</a>  
                                        <a class="layout__flex--item__link" href="?act=dangnhap">Đăng nhập</a>  
                                    </p>
                                </div>
                                <div class="customer__information">
                                    <div class="checkout__email--phone mb-12">
                                       <label>
                                            <input class="checkout__input--field border-radius-5" placeholder="Email của bạn" name="email" id="email" value="<?= $email ?>" type="text">   <span id="email_err" style="color: red;"></span>
                                       </label>
                                    </div>
                                    <div class="checkout__checkbox">
                                        <input class="checkout__checkbox--input" id="check1" type="checkbox">
                                        <span class="checkout__checkbox--checkmark"></span>
                                        <label class="checkout__checkbox--label" for="check1">
                                            Nhấp vào đây để nhận được các tin tức và ưu đãi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__content--step section__shipping--address">
                                <div class="section__header mb-25">
                                    <h3 class="section__header--title">Địa chỉ giao hàng </h3>
                                </div>
                                <div class="section__shipping--address__content">
                                    <div class="row">
                                    
                                                  

                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Tên người nhận " name="user"  id="ten" value="<?= $user ?>"   type="text">  <span id="ten_err" style="color: red;"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Số điện thoại "  id="sdt" name="tel" value="<?= $tel ?>"  type="text">  <span id="sdt_err" style="color: red;"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Địa chỉ cụ thể "  id="address" name="address" value="<?= $address ?>"  type="text">  <span id="address_err" style="color: red;"></span>
                                                </label>
                                            </div>
                                        </div>
                                       
                                      
                                    </div>
                                    <div class="checkout__checkbox">
                                        <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                        <span class="checkout__checkbox--checkmark"></span>
                                        <label class="checkout__checkbox--label" for="check2">
                                            Lưu thông tin này cho lần sau </label>
                                    </div> <br>
                                    <div class="section__header mb-25">
                                    <h3 class="section__header--title">Phương thức thanh toán </h3>

                                    </div> 
                                    <div class="">
                                        <input  id="" type="radio" value="1" name="pttt" checked>  Thanh toán khi nhận được hàng 
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__content--step__footer d-flex align-items-center">
                                 <input class="continue__shipping--btn primary__btn border-radius-5" id="" type="submit" name="dathang" value="Thanh toán">  
                                <a class="previous__link--content" href="?act=giohang">Quay lại giỏ hàng </a>
                            </div>
                           
                        </form>


                    <!-- <div class="cart__table checkout__product--table">
                        <table class="cart__table--inner">
                            <tbody class="cart__table--body">
                                <tr class="cart__table--body__items">
                                    <td class="cart__table--body__list">
                                        <div class="product__image two  d-flex align-items-center">
                                            <div class="product__thumbnail border-radius-5">
                                                <a href="product-details.html"><img class="border-radius-5" src="assets/img/product/small-product7.png" alt="cart-product"></a>
                                                <span class="product__thumbnail--quantity">1</span>
                                            </div>
                                            <div class="product__description">
                                                <h3 class="product__description--name h4"><a href="product-details.html">Đầm Tweed Trắng</a></h3>
                                                <span class="product__description--variant">Màu sắc: Trắng</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__table--body__list">
                                        <span class="cart__price">250.000 đ</span>
                                    </td>
                                </tr>
                             
                            </tbody>
                        </table> 
                    </div>
                    <div class="checkout__discount--code">
                        <form class="d-flex" action="#">
                            <label>
                                <input class="checkout__discount--code__input--field border-radius-5" placeholder="Mã giảm gía.... "  type="text">
                            </label>
                            <button class="checkout__discount--code__btn primary__btn border-radius-5" type="submit">Áp dụng </button>
                        </form>
                    </div>
                    <div class="checkout__total">
                        <table class="checkout__total--table">
                            <tbody class="checkout__total--body">
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Tạm tính </td>
                                    <td class="checkout__total--amount text-right">250.000 đ</td>
                                </tr>
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Phí vận chuyển </td>
                                    <td class="checkout__total--calculated__text text-right">                                      
                                          <span class="price__divided"></span>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot class="checkout__total--footer">
                                <tr class="checkout__total--footer__items">
                                    <td class="checkout__total--footer__title checkout__total--footer__list text-left">Tổng cộng </td>
                                    <td class="checkout__total--footer__amount checkout__total--footer__list text-right">250.000 đ</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div> -->
                </aside>
            </div>
        </div>
    </div>
    <!-- End checkout page area -->
    <script>
        
        const ten = document.getElementById('ten');
        const address = document.getElementById('address');
        const email = document.getElementById('email');
        const sdt = document.getElementById('sdt');



        const ten_err = document.getElementById('ten_err');
        const email_err = document.getElementById('email_err');
        const address_err = document.getElementById('address_err');
        const sdt_err = document.getElementById('sdt_err');


        function validate() {
            let kt = true;
            if (ten.value.trim() == "") {
                ten_err.innerHTML = "Bạn chưa nhập tên";
                kt = false;
            } else {
                ten_err.innerHTML = "";
            }
            if (address.value.trim() == "") {
                address_err.innerHTML = "Bạn chưa nhập địa chỉ";
                kt = false;
            } else {
                address_err.innerHTML = "";
            }

          
          

            let regexEmail = /^\w([_\.]?\w+)*@\w{2,}(\.\w{2,50})+$/;
            if (!regexEmail.test(email.value)) {
                email_err.innerHTML = "Email phải đúng định dạng!";
                kt = false;
            } else {
                email_err.innerHTML = "";
            }

           

            let regexSdt = /^0[1-9]\d{8}$/
            if(!regexSdt.test(sdt.value)){
                sdt_err.innerHTML="Số điện thoại phải có 10 số và bắt đầu là số 0"
                kt = false
            }else{
                sdt_err.innerHTML=""

            }
            
            
          

            return kt;
        }

    </script>