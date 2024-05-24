   <!-- BẮT ĐẦU TỪ ĐÂY  -->
        <!-- Start login section  -->
        <div style="margin-top:5%">
            <div class="container">
            <h3 style="color:red; margin-left:27%">
                                <?php
                                        if(isset($thongbao)&&($thongbao!="")){
                                            echo $thongbao;
                                        }
                                        ?>
                                </h3>      
                                  <?php
                                            if (isset($_SESSION['user'])) {
                                                extract($_SESSION['user']);
                                                if ($role == 1)  header("Location: admin/index.php");}

                                             ?>
                    <div class="login__section--inner" >
                        <div class="row row-cols-md-2 row-cols-1">
                            <div class="col">
                                <div class="account__login" style="margin-left: 60%;  margin-bottom:10%;">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title h3 mb-10">Đăng Nhập </h2>
                                    </div>
                                    <div class="account__login--inner">
                                       
                                            <form action="index.php?act=login" method="POST"  onsubmit="return validate()" >
                                            <input class="account__login--input" placeholder="Tên đăng nhập" type="text" name="user" id="ten">  <span id="ten_err" style="color: red;"></span>
                                            <input class="account__login--input" placeholder="Mật khẩu " type="password" name="pass" id="mk">   <span id="mk_err" style="color: red;"></span>
                                            <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                                <div class="account__login--remember position__relative">
                                                    <input class="checkout__checkbox--input" id="check1" type="checkbox">
                                                    <span class="checkout__checkbox--checkmark"></span>
                                                    <label class="checkout__checkbox--label login__remember--label" for="check1">
                                                        Ghi nhớ</label>
                                                </div>
                                                <button class="account__login--forgot" ><a href="index.php?act=quenmk">Quên mật khẩu</a></button>
                                            </div>
                                            <input class="account__login--btn primary__btn" type="submit" name="login" value="Đăng Nhập">

                                            <div class="account__login--divide">
                                                <span class="account__login--divide__text">OR</span>
                                            </div>
                                            <div class="account__social d-flex justify-content-center mb-15">
                                                <a class="account__social--link facebook" target="_blank" href="https://www.facebook.com/">Facebook</a>
                                                <a class="account__social--link google" target="_blank" href="https://www.google.com/">Google</a>
                                                <a class="account__social--link twitter" target="_blank" href="https://twitter.com/">Twitter</a>
                                            </div>
                                            <p class="account__login--signup__text">Bạn chưa có tài khoản?<button type="submit"><a href="index.php?act=dangky"> Đăng ký ngay </a></button></p>
                                            </form>
             
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
               
            </div>     
        </div>
        

 <script>
        
        const ten = document.getElementById('ten');
        const mk = document.getElementById('mk');


        const ten_err = document.getElementById('ten_err');
        const mk_err = document.getElementById('mk_err');


        function validate() {
            let kt = true;
            if (ten.value.trim() == "") {
                ten_err.innerHTML = "Bạn chưa nhập tên";
                kt = false;
            } else {
                ten_err.innerHTML = "";
            }
          

            let regexMK = /^(?=.*\d).{6,}$/;
            if(!regexMK.test(mk.value)) {
                mk_err.innerHTML = "Mật khẩu ít nhất 6 kí tự phải 1 kí tự là số";
                kt = false
            } else {
                mk_err.innerHTML = "";
            }

           
            
          

            return kt;
        }

    </script>