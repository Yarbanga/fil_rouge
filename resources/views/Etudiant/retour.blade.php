<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 @if(Session::has('message'))
               <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="card-body">
                    <p>
                        Bonjour! votre inscription ne peut etre effectuée Car vous n'est pas dans nos registre. 
                    </p>
                     <p>
                         Si vous etes un Etudiants de l'université Nazi Bonir veuillez vous inscrit et après vérification vous auriez un message de confirmation.
                     </p>
                     <p>
                       CUNB, vous dit aurevoir et à bientot sur la platefprme G-NOTES Dedier au Etudiants!  
                     </p>
                     
                </div>
            </div>
        </div>
    </div>
</div>
