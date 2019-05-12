<?php 
include("conexao.php");

session_start();

/*if (!isset($_SESSION['id_funcionario']) && $_SESSION['usuario_session'] == "erro" && $_SESSION['senha_session'] == "erro"){
  echo ("<script>alert('Você precisa realizar o login para acessar esta página =/'); window.location.href='login.php'</script>");
}*/

if (isset($_SESSION['usuario_session']) == "erro" && $_SESSION['senha_session'] == "erro" && (!($_SESSION['id_funcionario']))){
  echo ("<script>alert('Você precisa realizar o login para acessar esta página =/'); window.location.href='login.php'</script>");
}

if (isset($_SESSION['id_funcionario']) && $_SESSION['id_funcionario'] != "") {
    if (isset($_SESSION['id_funcionario']) && $_SESSION['id_cargo'] == 1) {
      echo "Você logou como: Administrador";
    }elseif (isset($_SESSION['id_funcionario']) && $_SESSION['id_cargo'] == 2){
      echo "Você logou como: Médico";
    }elseif (isset($_SESSION['id_funcionario']) && $_SESSION['id_cargo'] == 3) {
      echo "Você logou como: Enfermeiro";
    }elseif (isset($_SESSION['id_funcionario']) && $_SESSION['id_cargo'] == 4) {
      echo "Você logou como: Farmacêutico";
    }
  }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Health - Free HTML5 Bootstrap 4 Template by uicookies.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Free HTML5 Website Template by uicookies.com" />
  <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="uicookies.com" />
  
  <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/style.css">
  
  <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark probootstrap-navbar-dark">
    <div class="container">
      <!-- <a class="navbar-brand" href="index.html">Health</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-nav" aria-controls="probootstrap-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="probootstrap-nav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a href="index.html" class="nav-link pl-0">Home</a></li>
          <li class="nav-item active"><a href="departments.html" class="nav-link">Departments</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
        </ul>
        <div class="ml-auto">
          <form action="#" method="get" class="probootstrap-search-form mb-sm-0 mb-3">
            <div class="form-group">
              <button class="icon submit"><span class="icon-magnifying-glass"></span></button>
              <input type="text" class="form-control" placeholder="Search">
            </div>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <header role="banner" class="probootstrap-header py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-4">
          <a href="index.html" class="mr-auto"><img src="images/logo.png" width="212" height="48" class="hires" alt="Free Template by ProBootstrap"></a>
        </div>  
        <div class="col-md-9">
          <div class="float-md-right float-none">
          <div class="probootstrap-contact-phone d-flex align-items-top mb-3 float-left">
            <span class="icon mr-2"><i class="icon-phone"></i></span>
            <span class="probootstrap-text"> +900 123 456 7 <small class="d-block"><a href="#" class="arrow-link">Appointment <i class="icon-chevron-right"></i></a></small></span>
          </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-5">
          <h1 class="display-4">Realize o login</h1>
          </div>
      </div>
    </div>
  </section>
  
  

  <section class="probootstrap-services">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-3 pb-5 probootstrap-aside-stretch-left probootstrap-inside">
          <div class="mb-3 pt-5">
            <h2 class="h6">Departmentos</h2>
            <ul class="list-unstyled probootstrap-light mb-4">
              <li class="active"><a href="#">Enfermeiros</a></li>
              <li><a href="#">Médicos</a></li>
              <li><a href="#">Farmacêuticos</a></li>
              <li><a href="#">Pacientes</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9 pl-md-5 pb-5 pl-0 probootstrap-inside">
          <h1 class="mt-4 mb-4">Bem vindo ao PAINEL ADMINISTRATIVO =)</h1>
          <?php echo '<a href="logout.php">Sair</a>'; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="probootstrap-section overlay bg-image" style="background-image: url(images/bg_1.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="text-white display-4">Specialists in Family  Healthcare</h2>
          <p class="text-white mb-5 lead">Far far away, behind the word mountains, far from the countries Vokalia.</p>
          <div class="row justify-content-center mb-5">
            <div class="col-md-4"><a href="#" class="btn btn-secondary btn-block">Appointment <span class="icon-arrow-right"></span></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section" id="section-counter">
      <div class="container">
        <div class="row">
          <div class="col-md probootstrap-animate">
            <div class="probootstrap-counter text-center">
              <span class="probootstrap-number" data-number="22">0</span>
              <span class="probootstrap-label">Founders</span>
            </div>
          </div>
          <div class="col-md probootstrap-animate">
            <div class="probootstrap-counter text-center">
              <span class="probootstrap-number" data-number="182">0</span>
              <span class="probootstrap-label">Number of Staffs</span>
            </div>
          </div>
          <div class="col-md probootstrap-animate">
            <div class="probootstrap-counter text-center">
              <span class="probootstrap-number" data-number="8921">0</span>
              <span class="probootstrap-label">Happy Patients</span>
            </div>
          </div>    
          <div class="col-md probootstrap-animate">
            <div class="probootstrap-counter text-center">
              <span class="probootstrap-number" data-number="252">0</span>
              <span class="probootstrap-label">Business Partner</span>
            </div>
          </div>    
        </div>
      </div>
      
    </section>

  <section class="probootstrap-subscribe">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <h2 class="h1 text-white">Subscribe Newsletter</h2>
          <p class="lead text-white">Far far away, behind the word mountains, far from the countries Vokalia.</p>
        </div>
      </div>
      <form action="#" method="post">
        <div class="row">
          <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Name">    
          </div>
          <div class="col-md-4 mb-md-0 mb-3">
            <input type="text" class="form-control" placeholder="Email">
          </div>
          <div class="col-md-4">
            <input type="submit" value="Subscribe" class="btn btn-primary btn-block">
          </div>
        
        </div>
      </form>
    </div>
  </section>

  <footer class="probootstrap-footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-3">
          <h3 class="heading">Latest Blog</h3>
          <ul class="list-unstyled probootstrap-footer-recent-post">
            <li>
              <a href="#"><span class="date">November 15, 2017</span> The practice of medicine is a lot like parenting </a>
            </li>
            <li>
              <a href="#"><span class="date">November 15, 2017</span>Physicians: Want to overcome burnout? Start studying business. </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3 class="heading">Head Office</h3>
          <p class="mb-5">98 West 21th Street, Suite 721 New York NY 10016</p>
          <h3 class="heading text-white">Open</h3> 
          <p>
            Mon-Fri 7:30-18:00 <br>
            Sat 7:30-18:00 <br>
            Sun 7:30-18:00
          </p>
        </div>
        <div class="col-md-3">
          <h3 class="heading">Quick Links</h3>
          <ul class="list-unstyled probootstrap-footer-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Department</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3 class="heading">Follow us</h3>
          <ul class="probootstrap-footer-social">
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-linkedin"></span></a></li>
          </ul>
        </div>
      </div>
      <!-- END row -->
      <div class="row probootstrap-copyright">
        <div class="col-md-12">
          <p><small>&copy; 2017 <a href="https://uicookies.com/" target="_blank">ProBootstrap Health</a>. All Rights Reserved. Designed &amp; Developed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a> (please don't remove credit, see <a href="https://uicookies.com/license/" target="_blank">license</a>)  <br> Demo Images <a href="https://pexels.com/">Pexels</a> </small></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
    <div id="probootstrap-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#32609e"/></svg></div>
  

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>

  <script src="js/main.js"></script>
  
  <script>
  

  </script>
  
</body>
</html>