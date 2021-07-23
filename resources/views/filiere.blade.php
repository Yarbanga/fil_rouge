<link href="{{ asset('admin/css/theme.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('admin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="page-wrapper">  
    <div class="container">
        <div class="main-content">
            @if (session('success'))    
                <div class="container">
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            @if (session('error'))    
                <div class="container">
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                </div>
            @endif
            @if (session('supprimer'))    
                <div class="container">
                    <div class="alert alert-danger">
                        {{ session('supprimer') }}
                    </div>
                </div>
            @endif         
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap ">
                                <h4 class="title-3">Listes des Filières</h4>   
                            </div>
                        </div>
                    </div> <br><br>
                <div class="row m-t-2">
                    @foreach ( $matieres as $Matiere )
                        <div class="col-sm-6 col-md-3 text-center ">
                            <div class="overview-item bg-dark text-white">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon"></div>
                                        <div class="text">
                                            <a href="{{ route('filiere', $Matiere) }}"><h2 class="mb-4 mr-3">{{ $Matiere->matieres }}</h2></a>                                                                          
                                        </div>              
                                    </div>       
                                </div>
                            </div>
                        </div>   
                    @endforeach
                </div>
            </div>
        </div>
    </div>