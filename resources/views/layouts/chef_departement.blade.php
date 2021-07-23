<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>GESTION DES NOTES</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style2.css" rel="stylesheet">
</head>
<body>
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
  <header id="header">
    <div class="d-flex flex-column">         
    </ul>
      </nav>
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    </div>
  </header>
      <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
          <div class="hero-container" data-aos="fad+e-in">
            <h1 style="margin-top: -43%; margin-left: 30px;">GESTION DE NOTES</h1>
            <p class="ml-5">Bienvenue <span class="typed" data-typed-items="sur votre,Espace de travail,"></span></p>   
          </div>
          <header id="header">
            <div class="d-flex flex-column">
            <div class="profile">
            <h4 class="text-center text-white">G-NOTE</h4>
            <a href=""><img src="assets/img/gallery/g1.jpg" alt="" class="img-fluid rounded-circle">
            </a>        
            <h1 class="text-light">
               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               <span class="caret"></span>
               </a>
            </h1>
            <p>
              <a class="dropdown-item text-danger" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Deconnexion</a>
              <a type="button" class="dropdown-item text-secondary mt-1" data-toggle="modal" data-target="#staticBackdrop">
                Ajouter un Prof
              </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                </form>   
              <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Enregistrer un professeur</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="{{route('prof.store')}}">
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
                        </div>
                      </form>
                    </div>  
                </div>
              </div>
            </div>
            </div>
            </div>  
              <form id="logout-form" action="#" method="POST" style="display: none;">
              @csrf
              </form> <br>  
            </p>
            <nav class="nav-menu" style="margin-top: -100px;">
              <ul>
                <li class="active">
                  <a type="button" data-toggle="modal" data-target="#infos" class="text-white">
                  <i class="icofont-university"></i> 
                    Ajouter une ufr
                  </a>
                    <div class="modal" id="infos">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Choix de L'Ufr</h4>
                              <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                              </button>            
                            </div>
                            <div class="modal-body">
                              <form action="{{route('ufr_store')}}" method="post">
                                @csrf 
                                <div>
                                  <input type="text" class="form-control" name="ufr" placeholder="Choisir une Ufr"><br>
                                  <!-- <input type="text" class="form-control" name="filiere" placeholder="Choisir une filière">                              -->
                                </div>                               
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                                  <button type="submit" class="btn btn-primary">Confirmer</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                    </div>
                  </a>
                </li>
                <li>       
                  <a class="text-white" data-toggle="modal" data-target="#exampleModal">
                    <i class="icofont-read-book"></i>
                    Gestion de module
                  </a>
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ajouter des module</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="#" method="POST">
                            @csrf                  
                            <div class=""> 
                              
                              <select class="option form-control" name="ufr" placeholder="Choisir votre ufr">
                                <option>Choisir votre ufr</option >
                                <option>MPI</option >
                                <option>INSSEA</option>  
                                <option>ST</option >
                                <option>SEG</option> 
                                <option>ISEA</option >
                                <option>SVT</option>  
                                <option>LACS</option >
                                <option>SJP</option>  
                              </select><br>
                              <select class="option form-control" name="filiere" placeholder="Choisir votre ufr">
                                <option>Choisir votre filière</option >
                                <option>Economie</option>  
                                <option>Physique</option >
                                <option>Economie</option> 
                                <option>Chimie</option >
                                <option>Informatique</option>  
                                <option>Géographie</option >
                                <option>Histoire</option>  
                              </select><br>
                                <textarea name="reclamation" id="" class="form-control" cols="30" rows="10">Entrée votre demande</textarea>   
                              </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                          <button type="submit" class="btn btn-primary">Confirmer</button>
                        </div>            
                      </form>
                    </div>
                  </div>
                </div>
                 
                </li>
               <!-- 
               + -->
                <li>
                   <a href="/ufr_show/{ufr}"><i class="bx bx-file-blank"></i> 
                    <span>Liste des Ufr</span></a>
                </li>
                <li>
                   <a href="/liste/{matiere}"><i class="bx bx-file-blank"></i> 
                    <span>Liste des Filières</span></a>
                </li>
                <li>
                  <a href="" type="button" data-toggle="modal" data-target="#infos" class="text-white">
                    <i class="icofont-notebook"></i> 
                    liste des ajouts
                  </a>
                    <!-- <div class="modal" id="infos">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Ajouter un membre</h4>
                              <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                              </button>            
                            </div>
                            <div class="modal-body">
                              <form action="#" method="post">
                                @csrf
                                <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Choisir la classe
                              </div>
                                <select class="option form-control" name="classe" placeholder="">
                                  <option disabled="disableb" selected="selected"></option>
                                             
                                </select> <br> 
                              </div>
                              <div class="input-group mt-2">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Choisir une matière</span>
                              </div>
                                <select class="option form-control" name="matiere" placeholder="Confirmer">
                                  <option disabled="disableb" selected="selected"></option>
                                              
                                </select>   
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                              <button type="submit" class="btn btn-primary">Confirmer</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </span></a> -->
                </li>
                
                <li>
                  <a type="button" class="text-white" data-toggle="modal" data-target="#exampleModalLong">
                    <i class="icofont-info"></i>
                    Reclamation
                  </a>
                  <!-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        
                        <div class="modal-body">
                          <form action="#" method="POST">
                            @csrf
                            <div class="">
                              
                            <select class="option form-control" name="semestre">
                              <option>Choisir le semestre</option >
                              <option>Semestre1</option >
                              <option>Semestre2</option>                       
                            </select><br>
                            <select class="option form-control" name="filiere" placeholder="Choisir votre ufr">
                              <option>Choisir votre filière</option >
                              <option>MPI</option >
                              <option>INSSEA</option>  
                              <option>ST</option >
                              <option>SEG</option> 
                              <option>ISEA</option >
                              <option>SVT</option>  
                              <option>LACS</option >
                              <option>SJP</option>  
                            </select><br>
                            <select class="option form-control" name="matiere" placeholder="Choisir votre ufr">
                              <option>Choisir votre filière</option >
                              <option>Economie</option>  
                              <option>Physique</option >
                              <option>Economie</option> 
                              <option>Chimie</option >
                              <option>Informatique</option>  
                              <option>Géographie</option >
                              <option>Histoire</option>  
                            </select><br>
                              <div class="form-group">
                                <div class="custom-file">
                                  <input type="file" name="photo"  class="custom-file-input {{ $errors->has('photo') ? ' is-invalid': ' ' }}" id="validatedCustomFile">
                                  <label class="custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
                                </div>
                              </div>
                              <textarea name="reclamation" id="" class="form-control" cols="30" rows="10">Entrée votre demande</textarea>   
                            </div>
                        </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                              <button type="submit" class="btn btn-primary">Confirmer</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </li> -->
                <div style="margin-top: 30%;"></div>          
              </ul>
            </nav>
            <button type="button" class="mobile-nav-toggle d-xl-none">
              <i class="icofont-navigation-menu"></i>
            </button>
          </div>
        </header>
      </section>
 @include("include.footer")