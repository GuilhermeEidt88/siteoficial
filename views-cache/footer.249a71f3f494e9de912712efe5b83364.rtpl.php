<?php if(!class_exists('Rain\Tpl')){exit;}?> <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="/res/site/img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="/admin">Acesso Administrador</a>
                <a href="#"><span>Email:</span> info@clever.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script type="text/Javascript" src="/res/site/js/app.js"></script>
    <script src="/res/site/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/res/site/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/res/site/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/res/site/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="/res/site/js/active.js"></script>

   



    <script>$(function(){
  
        // Ao clicar para mostrar o formulário de login
  
         $("a.fazer-login").click(function(e){
             e.preventDefault(); // evita que o formulário seja submetido
            $("#login-container").toggle();

        });
  
    });

    </script>
</body>

</html>
