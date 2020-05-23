<?php 
include "db.php";
session_start();

$_SESSION["Aula"]= "link";
var_dump($_SESSION);
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Evolução</title>
    <link rel="stylesheet" href="/res/site/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/res/site/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/res/site/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="/res/site/estilos.css">

    <!-------------------- css site ------------------------------------>
    <link rel="stylesheet" href="/res/site/css/flaticon.css">
    <link rel="stylesheet" href="/res/site/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/res/site/css/magnific-popup.css">
    <link rel="stylesheet" href="/res/site/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/res/site/css/animate.css">
    <link rel="stylesheet" href="/res/site/css/aos.css">
    <link rel="stylesheet" href="/res/site/css/ionicons.min.css">
    <link rel="stylesheet" href="/res/site/css/flaticon.css">
    <link rel="stylesheet" href="/res/site/css/icomoon.css">

    <?php include "scripts.php"; ?>


	<script type="text/javascript">
	function ajax(){
		var req = new XMLHttpRequest();
		req.onreadystatechange = function(){
			if(req.readyState == 4 && req.status == 200){
				document.getElementById('chat').innerHTML = req.responseText;
			}
		}

		req.open('GET', 'chat.php', true);
		req.send();
	}

	setInterval(function(){ajax();}, 1000);

	</script>

	    <script data-cfasync="false">
                (function(r,e,E,m,b){E[r]=E[r]||{};E[r][b]=E[r][b]||function(){
                (E[r].q=E[r].q||[]).push(arguments)};b=m.getElementsByTagName(e)[0];m=m.createElement(e);
                        m.async=1;m.src=("file:"==location.protocol?"https:":"")+"//s.reembed.com/G-AM254X.js";
                        b.parentNode.insertBefore(m,b)})("reEmbed","script",window,document,"api");
        </script> 

     <script type="text/javascript">
     	$(document).ready(function() {
  			$('#caixa-chat').attr({scrollTop: $('#caixa-chat').attr('scrollHeight')});
		});

     </script>
		<script type="text/javascript">
	
	    var objDiv = document.getElementById("caixa-chat");
		objDiv.scrollTop = objDiv.scrollHeight;

		</script>
 
	

	<title>Chat com PHP</title>

</head>
<!--ESTE ONLOAD AJAX É PARA ASSIM QUE A PÁGINA ABRIR ELE JÁ CARERGAR AS INFORMAÇÕES, SEM TER QUE ESPERAR 1 SEGUNDO PARA ISSO -->

<body onload="ajax();" onLoad="scroll();">
	<?php if(!isset($_SESSION["User"]) ||
	        !$_SESSION["User"]): ?>
	<p>voce precisa ta logado para ve isso</p>

	<?php else: ?>


		<!---<?php //echo var_dump($_SESSION); ?>  -->

		 <header>
            <div class="top-header-area d-flex justify-content-between align-items-center">
                <!-- Contact Info -->
                <div class="contact-info">
                    <a href="/admin"><i class="fa fa-user"></i> Acesso Administrador</a>
                    <a href="#"><span>Email:</span> info@clever.com</a>
                </div>
                <!-- Follow Us -->
                <div class="follow-us">
                    <span>Siga-nos:</span>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>

            <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
                <a href="/" class="navbar-brand">
                    <img src="/res/site/img/logo2.png" alt="Logo"></a>
                               
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mr-auto ml-auto" id="menu-items">
                        <li class="nav-item">
                            <a href="" class="nav-link">Home</a>    
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Turmas</a>    
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Quem somos</a>    
                        </li>
                    </ul>

                    <div class="login-state d-flex align-items-center">
                        <div class="user-name mr-30">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-white" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle-o"></i><?php echo $_SESSION["User"]["nome"]; ?></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="/aula.php"><i class="fa fa-book"></i> Minha Aula</a>
                                    <a class="dropdown-item" href="/usuario/logout"><i class="fa fa-close"></i> Sair</a>
                                </div>
                            </div>
                        </div>
                        <div class="userthumb">
                            <img src="/res/site/img/online-icon.png" alt="">
                        </div>
                    </div>                
                </div>
            </nav>



		<div class="container-fluid ">
                    <div class="aulas row d-flex ">
                      <div id="corpo-frame" class="corpo-frame col-12 mb-0 col-md-12 col-lg-12 col-xl-9">
						<div  class="embed-responsive embed-responsive-30by9" style="pointer-events: none;">
						  <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=UmzIDEmvGXE?&autoplay=1&controls=0&showinfo=0&modestbranding=0"></iframe>
						</div>
					  </div>
                          <div id="corpo-chat" class="body-chat col-12 col-md-12 col-lg-12 col-xl-3">
                              <div class="row">
                                
                                <div class="alert alert-primary col-12 mt-auto" role="alert">
 									Utilize o chat para <strong>Perguntas</strong>
								</div>

                              </div>
                                  <div class="row chat" id="row-chat">
                                    <div id="caixa-chat" style="overflow-y:scroll; width:100%;">
                                            <div id="chat">
                                            <!-- LOCAL ONDE VAI CHAMAR O CHAT -->
                                            </div>
                                    </div>

                                    <div style="margin-top: 10px;">
                                        <input type="text" id="nome" name="nome" value="<?php echo $_SESSION["User"]["nome"]; ?>" disabled="">
                                        <textarea maxlength="100" id="mensagem" name="mensagem" placeholder="Insira uma mensagem"></textarea>
                                         <button id="cad-msg" type="button" class="btn btn-primary">Enviar Pergunta</button>                  
                                    </div>
                                  </div>
                       
                          </div>
                      </div>
                    </div>
                  </div>
        








		 <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="/res/site/img/logo-footer.png" alt=""></a>
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
                <a href="#"><span>Phone:</span> +44 300 303 0266</a>
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

    

        <script src="/res/site/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
        <script src="/res/site/node_modules/plugins/active.js"></script>
 
      <script src="/res/site/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
        
        <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel();
            });
        </script>

    



	<?php endif; ?>

</body>
</html>