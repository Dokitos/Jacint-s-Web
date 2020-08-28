

<!DOCTYPE html>
    


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>FB GESTÃO E CONSTRUÇÃO</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Clique para subir"><i class="fas fa-arrow-up"></i></button>

<header style="background-image: url('img/background-min.jpg');background-size: cover;"   id="top" class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Bem Vindo(a) ao</h2>
                <h1><span class="highlight">FB GESTÃO E CONSTRUÇÃO</span></h1>
            </div>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#top">INÍCIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">SOBRE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">PORTFOLIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#shop">MAPA</a>
                </li>
               <!------ <li class="nav-item">
                    <a class="nav-link" href="#vote">VOTAR</a>
                </li>
                --->

                <li class="nav-item">
                    <a class="nav-link" href="#staff">STAFF</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#loginmodal">LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>






<!-- Trigger button do modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginmodal">Login</button>
-->
<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginlabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginlabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php include 'loginform.php';?> <!-- Aqui vc chama a sua página -->
      </div>
    </div>
  </div>
</div>














<section id="about" class="section gray">
    <div class="container">
        <div class="sectionTitle text-center">
            <h2>SOBRE NÓS</h2>
            <hr>
        </div>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="col-sm-12 aboutItem">
                    <i class="fab fa-cloudscale fa-4x"></i>
                    <p><span class="highlight">Info 1</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac egestas felis, non
                        eleifend
                        elit. Nulla pharetra dignissim sapien, nec mollis nisi.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-12 aboutItem">
                    <i class="fas fa-users fa-4x"></i>
                    <p><span class="highlight">Info 2</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac egestas felis, non
                        eleifend
                        elit. Nulla pharetra dignissim sapien, nec mollis nisi.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-12 aboutItem">
                    <i class="fas fa-server fa-4x"></i>
                    <p><span class="highlight">Info 3</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac egestas felis, non
                        eleifend
                        elit. Nulla pharetra dignissim sapien, nec mollis nisi.</p>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="col-sm-12 aboutItem">
                    <i class="far fa-calendar-alt fa-4x"></i>
                    <p><span class="highlight">Info 4</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac egestas felis, non eleifend
                        elit. Nulla pharetra dignissim sapien, nec mollis nisi.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-12 aboutItem">
                    <i class="fas fa-signal fa-4x"></i>
                    <p><span class="highlight">Info 5</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac egestas felis, non eleifend
                        elit. Nulla pharetra dignissim sapien, nec mollis nisi.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-12 aboutItem">
                    <i class="fas fa-plug fa-4x"></i>
                    <p><span class="highlight">Info 6</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac egestas felis, non eleifend
                        elit. Nulla pharetra dignissim sapien, nec mollis nisi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="gamemodes section white">
    <div class="container">
        <div class="sectionTitle text-center">
            <h2>PORTFOLIO</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-12 gamemodeItem">
                    <img src="https://via.placeholder.com/1920x1080" alt="">
                    <div class="gamemodeDesc">
                        <h5><span class="highlight">PROJETO 1</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu elementum justo. Morbi in
                            venenatis dui. Mauris quis efficitur orci, ut venenatis massa. Pellentesque gravida ante sit
                            amet condimentum tristique. Suspendisse at gravida nunc, mattis sagittis velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-12 gamemodeItem">
                    <img src="https://via.placeholder.com/1920x1080" alt="">
                    <div class="gamemodeDesc">
                        <h5><span class="highlight">PROJETO 2</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu elementum justo. Morbi in
                            venenatis dui. Mauris quis efficitur orci, ut venenatis massa. Pellentesque gravida ante sit
                            amet condimentum tristique. Suspendisse at gravida nunc, mattis sagittis velit.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-12 gamemodeItem">
                    <img src="https://via.placeholder.com/1920x1080" alt="">
                    <div class="gamemodeDesc">
                        <h5><span class="highlight">PROJETO 3</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu elementum justo. Morbi in
                            venenatis dui. Mauris quis efficitur orci, ut venenatis massa. Pellentesque gravida ante sit
                            amet condimentum tristique. Suspendisse at gravida nunc, mattis sagittis velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-12 gamemodeItem">
                    <img src="https://via.placeholder.com/1920x1080" alt="">
                    <div class="gamemodeDesc">
                        <h5><span class="highlight">PROJETO 4</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu elementum justo. Morbi in
                            venenatis dui. Mauris quis efficitur orci, ut venenatis massa. Pellentesque gravida ante sit
                            amet condimentum tristique. Suspendisse at gravida nunc, mattis sagittis velit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--
<section style="background-image: url('img/banner-min.png')" id="banner" class="banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>Qual endereço do servidor?</h3>
                <h2><span class="highlight">jogar.starcraft.com</span></h2>
            </div>
        </div>
    </div>
</section>
--->

<section id="shop" class="section gray shop"
style="
    padding: 0;
    border-top: 2px solid #811f1b;
    border-bottom: 2px solid #811f1b;
">
    
    
    
    <div id="mapa"></div>



    <script>
 
        function inicializar() {
          var coordenadas = {lat: 38.7071, lng: -9.13549};
   
          var mapa = new google.maps.Map(document.getElementById('mapa'), {
            zoom: 15,
            center: coordenadas 
          });
   
          var marker = new google.maps.Marker({
            position: coordenadas,
            map: mapa,
            title: 'Meu marcador'
          });
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDpsHVxa2Q_Npi2R9vknwiYRohOWd2f8I&callback=inicializar">
      </script>
    <!--<div class="container">
        <div class="sectionTitle text-center">
        <h2>ONDE ESTAMOS?</h2>
        <hr>
    </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-12">
                    

                    


                    
                </div>
            </div>
           
            <div class="col-sm-6">
                <div class="col-sm-12">
                    <h5><span class="highlight">Estamos sempre por perto</span></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu elementum justo. Morbi in
                        venenatis dui. Mauris quis efficitur orci, ut venenatis massa. Pellentesque gravida ante sit
                        amet condimentum tristique. Suspendisse at gravida nunc, mattis sagittis velit.</p>
                    <p>Aliquam id ex ac augue tempor convallis. Nunc id consequat nibh. Suspendisse rhoncus nulla at
                        nisl egestas vulputate vel vitae ex. In est nibh, tempus vitae ipsum vel, eleifend dictum
                        diam.</p>
                    <a class="btn btn-primary" href="#contact">Contacte!</a>
                </div>
            </div>
            
        </div>
    </div>
    -->
</section>



<!--
<section id="vote" class="section white vote">
    <div class="container">
        <div class="sectionTitle text-center">
            <h2>Votar</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-12">
                    <h5><span class="highlight">Vote em nosso servidor!</span></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu elementum justo. Morbi in
                        venenatis dui. Mauris quis efficitur orci, ut venenatis massa. Pellentesque gravida ante sit
                        amet condimentum tristique. Suspendisse at gravida nunc, mattis sagittis velit.</p>
                    <p>Aliquam id ex ac augue tempor convallis. Nunc id consequat nibh. Suspendisse rhoncus nulla at
                        nisl egestas vulputate vel vitae ex. In est nibh, tempus vitae ipsum vel, eleifend dictum
                        diam.</p>
                    <a class="btn btn-primary" href="#">Link 1</a>
                    <a class="btn btn-primary" href="#">Link 2</a>
                    <a class="btn btn-primary" href="#">Link 3</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-12">
                    <img src="https://via.placeholder.com/1280x1280" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
-->

<section style="background-image: url('img/banner2-min.jpg')" id="banner2" class="banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>QUEM SOMOS?</h3>
                <h2><span class="highlight">Equipa FB Gestão</span></h2>
            </div>
        </div>
    </div>
</section>

<section id="staff" class="section gray staff">
    <div class="container">
        <div class="sectionTitle text-center">
            <h2>Staff</h2>
            <hr>
        </div>
        <div class="row staffList text-center">
            <div class="col-sm staffMember">
                <div class="staffIcon has-background">
                    <img src="https://icon-library.com/images/profile01-512_102173.png" alt="Staff Cabeça">
                </div>
                <div class="staffDesc">
                    <span class="highlight">Jacinto</span> /
                    <span>CEO</span>
                </div>
            </div>
            <div class="col-sm staffMember">
                <div class="staffIcon has-background">
                    <img src="https://icon-library.com/images/profile01-512_102173.png" alt="Staff Cabeça">
                </div>
                <div class="staffDesc">
                    <span class="highlight">Jacinto</span> /
                    <span>CEO</span>
                </div>
            </div>
            <div class="col-sm staffMember">
                <div class="staffIcon has-background">
                    <img src="https://icon-library.com/images/profile01-512_102173.png" alt="Staff Cabeça">
                </div>
                <div class="staffDesc">
                    <span class="highlight">Jacinto</span> /
                    <span>CEO</span>
                </div>
            </div>
        </div>
        <div class="space">
        </div>
        <div class="row staffList text-center">
            <div class="col-sm staffMember">
                <div class="staffIcon has-background">
                    <img src="https://icon-library.com/images/profile01-512_102173.png" alt="Staff Cabeça">
                </div>
                <div class="staffDesc">
                    <span class="highlight">Jacinto</span> /
                    <span>CEO</span>
                </div>
            </div>
            <div class="col-sm staffMember">
                <div class="staffIcon has-background">
                    <img src="https://icon-library.com/images/profile01-512_102173.png" alt="Staff Cabeça">
                </div>
                <div class="staffDesc">
                    <span class="highlight">Jacinto</span> /
                    <span>CEO</span>
                </div>
            </div>
            <div class="col-sm staffMember">
                <div class="staffIcon has-background">
                    <img src="https://icon-library.com/images/profile01-512_102173.png" alt="Staff Cabeça">
                </div>
                <div class="staffDesc">
                    <span class="highlight">Jacinto</span> /
                    <span>CEO</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section white contact">
    <div class="container">
        <div class="sectionTitle text-center">
            <h2>Contactos</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-12">
                    <h4>Não sabe fazer formulários?</h4>
                    <div class="contactOption discord">
                        <p>Entre em contacto! :)</p>
                        <div class="discord">
                            <a target="_blank" href="#">
                                <img src="img/pngwing.com.png" alt="Discord">

                            </a>
                            <span>+351-999.999.999</span>
                        </div>
                    </div>
                    <div class="contactOption email">
                        <p>Ou... Escreva-nos um e-mail!</p>
                        <div>
                            <a href="mailto:geral@starcraft.com">fb@fbgestao.pt</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-12">
                    <form method="POST" action="/action_page.php">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="name" class="form-control" id="name" placeholder="Insira seu nome">
                        </div>
                        <div class="form-group">
                            <label for="email">Endereço e-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="Insira seu e-mail">
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea class="form-control" id="message" placeholder="Insira sua mensagem" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="Enviar" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="footer">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12 copyright-notice">
                <p>FB Gestão e Construção © | Todos os direitos reservados!</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="js/topbtn.js"></script>
</body>
</html>
