
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>G-NOTES</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link href="assets/css/style3.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div id="topbar" class="d-none row d-lg-flex align-items-center fixed-top">   
  </div>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.html">G-NOTES<span>.</span></a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>  
          <li class="active"><a href="{{ route('accueil') }}">Accueil</a></li>
          <li><a href="">Examen</a></li>
          <li><a href="">Devoir</a></li>
          <li><a href="">Session</a></li>
          <li><a href="{{route('user.list')}}">Validation</a></li>
          <button type="button" class="btn btn-primary ml-4 " href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Deconnexion</button>   
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
          </form> 
        </ul>
      </nav>
    </div>
  </header>
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>BIENVENUE <span>CUNB</span>
      </h1>
      <h2>Vous etres bien sur votre espace<br> Universitaire Nazi Boni</h2>
    </div>
  </section>
  <main id="main">
    <section id="featured-services" class="featured-services">
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 id="exampleModalLabel">Ajouter un étudiant</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="/Ajout_etudiant">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">nom:</label>
                      <input type="text" name="name" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">prenoms:</label>
                      <input type="text" name="prenoms" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">email:</label>
                      <input type="email" name="email" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">date de naissance:</label>
                      <input type="date" name="naissance" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Numero:</label>
                      <input type="text" name="numero" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">N Matricule</label>
                      <input type="text" name="matricule" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="recipient-name">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                      <button type="submit" class="btn btn-primary">Envoyez</button>
                    </div>
                  </form>
                </div>  
              </div>
            </div>
          </div>
        <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 ">
            <div class="icon-box vert btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="#" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Ajouter</a></h4>
              <p class="description ">Ajouter un nouveau étudiant</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box bleu" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="{{route('user.list')}}">Lister</a></h4>
              <p class="description text-justify">La liste totale des Etudiants</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box jaune" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Modifier</a></h4>
              <p class="description  text-justify">Modifier les informations d'un étudiant</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box rouge " data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Note</a></h4>
              <p class="description   text-justify">Note semestrielle des étudiants</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">100</span>
              <p>Efficacité</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">100</span>
              <p>Objectif</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">90</span>
              <p>Accompagnement</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">100</span>
              <p>Angagement</p>
            </div>
          </div>
        </div>
      </div> 
  </main>
  <footer id="footer" class="bg-primary">
    <div class="container py-4">
      <div class="copyright" style="margin-left: 30%;">
        &copy; Copyright <strong><span>Université</span>.Nazi Boni </strong>Faire par Yaya@yaya.com
      </div>    
    </div>
  </footer>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script>
  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('whatever') 
  var modal = $(this)
  modal.find('.modal-title').text('hello Bneuf ' + recipient)
  modal.find('.modal-body input').val(recipient)})
  </script>
  <script src="assets/js/main.js"></script>
</body>
</html>