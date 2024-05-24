     <!-- BẮT ĐẦU TỪ ĐÂY  -->
        <!-- Start login section  -->
    
        <div class="login__section section--padding" style="margin-right: 2.5%; ">
            <div class="container" >
            
                    <div class="login__section--inner"  style="width:1200px">
                        <div class="row row-cols-md-2 row-cols-1">
                            <div class="col">
                               
                                <div class="account__login"  style="width:1200px">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title h3 mb-10">QUÊN MẬT KHẨU</h2>
                                    </div>

                                    <div class="account__login--inner" >
                                   
                                    <form action="index.php?act=quenmk" method="POST"  onsubmit="return validate()">



                                        <input class="account__login--input" placeholder="Nhập vào Email của bạn " type="" name="email" id="email"><br>        <span id="email_err" style="color: red;"></span>
                                        <h3 style="color:red">
                                            <?php
                                                    if(isset($thongbao)&&($thongbao!="")){
                                                        echo $thongbao;
                                                    }
                                                    ?>
                                            </h3>
                                        <br>


                                        <input class="account__login--btn primary__btn" type="submit" value="Gửi" name="guiemail">

                            
                                        <div class="account__login--divide">
                                            <span class="account__login--divide__text">OR</span>
                                        </div>
                                        <div class="account__social d-flex justify-content-center mb-15">
                                            <a class="account__social--link facebook" target="_blank" href="https://www.facebook.com/">Facebook</a>
                                            <a class="account__social--link google" target="_blank" href="https://www.google.com/">Google</a>
                                            <a class="account__social--link twitter" target="_blank" href="https://twitter.com/">Twitter</a>
                                        </div>
                                        </form>
                                      
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
            </div>     
        </div>
        <!-- End login section  -->

    <script>
        
     
        const email = document.getElementById('email');
       
        const email_err = document.getElementById('email_err');
       


        function validate() {
            let kt = true;
           
          
          

            let regexEmail = /^\w([_\.]?\w+)*@\w{2,}(\.\w{2,50})+$/;
            if (!regexEmail.test(email.value)) {
                email_err.innerHTML = "Email phải đúng định dạng!";
                kt = false;
            } else {
                email_err.innerHTML = "";
            }


            
          

            return kt;
        }

    </script>