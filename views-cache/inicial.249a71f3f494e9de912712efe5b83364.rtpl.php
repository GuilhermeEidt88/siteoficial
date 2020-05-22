<?php if(!class_exists('Rain\Tpl')){exit;}?>        <!-- Modal -->


        <?php if( $error!= '' ){ ?>
        <script>
          $(document).ready(function(){
            $('#modalerror').modal('show')
          });
        </script>
        <?php } ?>
        <div class="modal" id="modalerror" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5>Ops... Algo não deu certo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mt-0 mb-0">
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
              </div>
              <div class="modal-footer mt-0">
                <!--<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>-->
                <?php if( $error=='Usuario inexistente ou senha inválida' ){ ?>
                <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#login-tela"
                  class="btn btn-success my-2 my-sm-0 btn-sm" id="btn-transition">Tente novamente</button>
                <?php }else{ ?>
                <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#cadastro-tela"
                  class="btn btn-success my-2 my-sm-0 btn-sm" id="btn-transition">Tente novamente</button>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>


        <section id="slide-area">
            <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid" src="/res/site/img/slider-1.jpg.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="/res/site/img/slider-2.png" alt="Second slide">
                  </div>
                  <!------
                  <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Third slide">
                  </div>
                  ----->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

      <section class="ftco-services ftco-no-pb mb-0">
      <div class="container-wrap">
        <div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="/res/site/img/qualificado.png">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading text-bold text-white">Time Qualificado</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-info">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="/res/site/img/excl.png">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading text-bold text-white">Material Exclusivo</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="/res/site/img/tradicao.png">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading text-bold text-white">Anos de Tradição</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-info">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="/res/site/img/campeao.png">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading text-bold text-white">Maior Estrutura</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

<!--------------------------------------------------------------------------------------------------------------------------->


<section  class="historia">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
            <div class="img" style="background-image: url(/res/site/img/about.jpg); border"></div>
          </div>
          <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">Ainda Não Estuda Com a Gente?</h2>
            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
            <div class="row mt-5">
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-start"><img src="/res/site/img/sala-de-aula.png"></div>
                  <div class="text pl-3">
                    <h3>Salas de Estudo</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-start"><img src="/res/site/img/turmas-exclusivas.png"></div>
                  <div class="text pl-3">
                    <h3>Turmas Exclusivas</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="/res/site/img/clima.png"></div>
                  <div class="text pl-3">
                    <h3>Salas Climátizadas</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="/res/site/img/predio.png"></div>
                  <div class="text pl-3">
                    <h3>Estrutura Incrível</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="/res/site/img/resultados.png"></div>
                  <div class="text pl-3">
                    <h3>Resultados Comprovados</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="/res/site/img/desconto.png"></div>
                  <div class="text pl-3">
                    <h3>Descontos Exclusivos</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-------------------------------------------------------------------------------------------------------------------------->


<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(/res/site/img/bg_3.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2 d-flex">
          <div class="col-md-6 align-items-stretch d-flex">
            <div class="img img-video d-flex align-items-center" style="background-image: url(/res/site/img/about-2.jpg);">
              <div class="video justify-content-center">
                <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                  <span class="ion-ios-play"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">Um Pouco Da Nossa História...</h2>
            <p class="text-bold">Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          </div>
        </div>  
        <div class="row d-md-flex align-items-center justify-content-center">
          <div class="col-lg-12">
            <div class="row d-md-flex align-items-center">
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="18">18</strong>
                    <span>Certified Teachers</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="401">+1000</strong>
                    <span>Students</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="30">03</strong>
                    <span>Courses</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="50">0</strong>
                    <span>Awards Won</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!----------------------------------------------------------------------------------------------------------------------->

            <div class="container mt-5 mb-0">
                <div class="row justify-content-center mb-5 pb-2">
                  <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Histórias de Sucesso</h2>
                    <p>Separamos pra você a história de sucesso de alguns alunos vencedores que conquistaram a tão sonhada aprovação estudando com a gente.</p>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-center ">
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                          
                          <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="item carousel-item active">
                                  <div class="img-box"><img src="/res/site/img/teacher-1.jpg" alt=""></div>
                                  <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                                  <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                                </div>
                                <div class="item carousel-item">
                                  <div class="img-box"><img src="/res/site/img/teacher-2.jpg" alt=""></div>
                                  <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                                  <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                                </div>
                                <div class="item carousel-item">
                                  <div class="img-box"><img src="/res/site/img/teacher-3.jpg" alt=""></div>
                                  <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                                  <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                              <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                              <i class="fa fa-angle-right"></i>
                            </a>
                      </div>
                    </div>
                </div>
            </div>

        <div class="section-heading">
                            <h5>No Nosso Portal Online Você Terá</h5>
        </div>
        <section class="cool-facts-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Single Cool Facts Area -->
                    <div class="col-4 col-sm-4 col-lg-4">
                        <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="250ms">
                            <div class="icon">
                                <img src="/res/site/img/hd-menor.png" alt="" class="img-fluid d-block">
                            </div>
                            <h5>Aulas FullHD</h5>
                        </div>
                    </div>
    
                    <!-- Single Cool Facts Area -->
                    <div class="col-4 col-sm-4 col-lg-4">
                        <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <div class="icon">
                                <img src="/res/site/img/chat.png" alt="" class="img-fluid d-block">
                            </div>
                            <h5 class="text-bold">Chat Interativo</h5>
                        </div>
                    </div>
    
                    <!-- Single Cool Facts Area -->
                    <div class="col-4 col-sm-4 col-lg-4">
                        <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="750ms">
                            <div class="icon">
                                <img src="/res/site/img/material.png" alt="" class="img-fluid d-block">
                            </div>
                            <h5>Material Exclusivo</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="best-tutors-area section-padding-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h3>O melhor time da cidade</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">
                            <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t1.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Alex Parker</h5>
                                    <span>Teacher</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->

                             <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t2.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Alex Parker</h5>
                                    <span>Teacher</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->

                             <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t3.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Alex Parker</h5>
                                    <span>Teacher</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->

                             <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t4.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Alex Parker</h5>
                                    <span>Teacher</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->

                             <div class="single-tutors-slides">
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <img src="/res/site/img/t5.png" alt="">
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5>Alex Parker</h5>
                                    <span>Teacher</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                             <!-- Single Tutors Slide -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr>
        <hr>
        <hr>
        <hr>

        <div class="container justify-content-center mb-0">
           <div class="section-heading">
                            <i class="fa fa-instagram"></i><h5>Últimos Posts do Instagram</h5>
                        </div>
          <div class="row">
            <div class="col-12">
          
               <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/8e93bc07442654068146ad196500124d.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
            </div>
          </div>
        </div>


      


        

      