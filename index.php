<?php 

session_start();

include_once "db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Xherom Rifas - As Melhores Rifas do Mercado</title>

  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top header">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">Xherom Rifas</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre Nós</a></li>
          <li><a class="nav-link scrollto" href="#team">Time</a></li>
          <li class="dropdown"><a href="#portfolio"><span>Rifas</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#portfolio"><span>Ativas</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <?php
                  $sql = "SELECT * FROM rifas WHERE estado = 'Ativa'";
                  $resultado = mysqli_query($conn, $sql);

                    if ($resultado) {
                    while ($row = mysqli_fetch_array($resultado)) {
                    ?>
                      <li><a href="detalhes.php?id=<?php echo $row['id']?>"><?php echo $row['nome']?></a></li>
                    <?php
                    }
                  }
                  ?>
                </ul>
              </li>
              <li class="dropdown"><a href="#portfolio"><span>Expiradas</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                <?php
                  $sql = "SELECT * FROM rifas WHERE estado = 'expirada'";
                  $resultado = mysqli_query($conn, $sql);

                    if ($resultado) {
                    while ($row = mysqli_fetch_array($resultado)) {
                    ?>
                      <li><a href="detalhes.php?id=<?php echo $row['id']?>"><?php echo $row['nome']?></a></li>
                    <?php
                    }
                  }
                  ?>
                </ul>
              </li>
              <li class="dropdown"><a href="#portfolio"><span>Futuras</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                <?php
                  $sql = "SELECT * FROM rifas WHERE estado = 'futura'";
                  $resultado = mysqli_query($conn, $sql);

                    if ($resultado) {
                    while ($row = mysqli_fetch_array($resultado)) {
                    ?>
                      <li><a href="detalhes.php?id=<?php echo $row['id']?>"><?php echo $row['nome']?></a></li>
                    <?php
                    }
                  }
                  ?>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
          <?php
            if(!isset($_SESSION['usuario'])) {
              $user = "Login";
              $href = "login";
            } 

            else {
              $user = "Painel do Usuário";
              $href = "panel";
            }

          ?>
          <li><a class="getstarted scrollto" href="<?php echo $href?>.php"><?php echo $user?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>As Melhores Rifas do Mercado</h1>
          <h2>Compre rifas acessíveis e com prêmios ótima qualidade de qualquer lugar do mundo</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Veja Mais</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>

  <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Sobre Nós</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            A história da nossa equipe começou lá atrás em 2022, como uma iniciativa do Terceiro ano do Senac Distrito Criativo para gerar lucros para a formatura, e se desenvolveu nessa marca nacionalmente conhecida e respeitada.  
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Campeã de vendas do mercado</li>
              <li><i class="ri-check-double-line"></i> Anos de experiência trabalhando no ramo</li>
              <li><i class="ri-check-double-line"></i> Segurança e confiança comprovadas</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Amamos o que fazemos e visamos sempre melhorar, para assim prestarmos o melhor serviço a nossos clientes.
            </p>
            <a href="#why-us" class="btn-learn-more">Leia Mais</a>
          </div>
        </div>
      </div>
    </section>

    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
              <h3>Por que você deveria escolher a <strong>Xherom Rifas</strong>?</h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Comprometimento com a qualidade <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                    Fazemos questão de garantir com que lhe ofereçamos o melhor produto disponível, sempre prezando pela qualidade.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Comprometimento com prazos <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Odiamos ter de fazê-lo esperar, por isso um dos destaques da nossa empresa está em sua prestação de serviços de forma ágil e eficiente.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Comprometimento com a comunicação clara  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Dispomos de diversos meios de comunicação, tudo para que todas as suas dúvidas possam ser esclarecidas e que possa sentir confiança e segurança em nossos serviços para que continue a comprar conosco.
                    </p>
                  </div>
                </li>

              </ul>
            </div>
          </div>
          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>
      </div>
    </section>

    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>QUALIDADES</h2>
          <p>Levamos o prêmio até você em prazos imbatíveis sem qualquer custo adicional, ou se preferir, venha retirar na nossa sede, aberta 24h por dia, guardamos sua recompensa por até 1 mês.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Conta</a></h4>
              <p>Faça seu cadastro e gerencie suas rifas facilmente</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Controle</a></h4>
              <p>Esteja sempre atento aos números e prazos de forma simples</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Acessibilidade</a></h4>
              <p>Acesse seu perfil quando e de onde quiser com apenas um clique</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Compra</a></h4>
              <p>Efetue compras de forma rápida e segura em nosso site</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Nossas Rifas</h2>
          <p>Explore nosso site e encontre a rifa perfeita para você ou para a pessoa querida, Dia dos Namorados, Natal, Páscoa e por aí vai... tudo em um só lugar.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter=".filter-card" class="filter-active">Ativas</li>
          <li data-filter=".filter-app">Expiradas</li>
          <li data-filter=".filter-web">Futuras</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php
            $sql = "SELECT * FROM rifas";
            $resultado = mysqli_query($conn, $sql);

              if ($resultado) {
              while ($row = mysqli_fetch_array($resultado)) {
              ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="assets/img/rifas/<?php echo $row['imagem']?>" class="img-fluid" alt=""></div>
                  <div class="portfolio-info">
                    <h4><?php echo $row['nome']?></h4>
                    <p><?php echo $row['descricao']?></p>
                    <a href="detalhes.php?id=<?php echo $row['id']?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              <?php
              }
            }
          ?>
      </div>
    </section>

    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Time</h2>
          <p>Nosso time é composto pelos mais apaixonados e experientes desenvolvedores. Venha nos conhecer um pouco melhor:</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/vitor.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Vitor Prates</h4>
                <span>Desenvolvedor Back-end</span>
                <p>Integrante do time responsável pela integração do banco de dados com as páginas</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/thiago.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Thiago Schiedeck</h4>
                <span>Desenvolvedor Front-end</span>
                <p>Responsável pelo visual, responsividade e layout de todo o site</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/sheron.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sheron Franco</h4>
                <span>Scrum Master</span>
                <p>Integrante responsável pelo gerenciamento de toda equipe e organização das tarefas</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/leo.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Leonardo Campos</h4>
                <span>DBA</span>
                <p>Encarregado de construir o banco de dados com as informações necessárias</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/ana.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ana Ramos</h4>
                <span>Desenvolvedora de Infraestrutura</span>
                <p>Perita em Linux, responsável pela infraestrutura e upload do servidor e da página</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/sandro.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sandro Martins</h4>
                <span>Professor</span>
                <p>O supervisor do projeto como um todo, disposto a prestar apoio e suporte a todos os outros integrantes bem como pontuar questões do desenvolvimento</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>PERGUNTAS FREQUENTES</h2>
          <p>Aqui vão algumas perguntas recorrentes na plataforma e como podemos estar ajudando cada um com suas dúvidas:</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Como retiro meu prêmio?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                Levamos até você, ou se preferir retire em nossa sede.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">A entrega é feita com segurança? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                Com certeza 😉
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Como posso pagar as rifas? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                Aceitamos as mais diversas formas de pagamento, como boleto, cartões de crédito e débito, pix, entre outros.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Qual o contato da empresa? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                Contate-nos via Email, Instagram ou Facebook, nossa equipe estará de braços abertos para lhe responder.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">A Xherom Rifas é confiável? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                Com certeza 😉
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>CONTATO</h2>
          <p>Somos uma empresa extremamente acessível, qualquer dúvida, problema ou irregularidade, não hesite em nos contatar através do formulário abaixo.</p>
        </div>

        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localização:</h4>
                <p>Avenida Cristóvão Colombo 545, Floresta, Porto Alegre - RS, 90560-900, Brasil</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>xheromrifas@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Número:</h4>
                <p>+55 51 99772-2334</p>
              </div>

              <iframe src="https://maps.google.com/maps?q=senac%20distrito%20criativo&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Seu Nome</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Seu Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Assunto</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Mensagem</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php

  include_once "assets/includes/footer.php"

  ?>

</body>

</html>