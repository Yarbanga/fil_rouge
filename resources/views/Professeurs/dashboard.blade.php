@extends('layouts.professeur')

@section('contenu')

<div class="page-wrapper">

    @include('Professeurs.partials.sidebar')

    <div class="page-container"> 

        @include('Professeurs.partials.headerdesktop')

        @include('Professeurs.partials.content')   

        @include('Professeurs.partials.footer')

    </div>

</div>

@endsection