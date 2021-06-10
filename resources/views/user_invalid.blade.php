@extends('layouts.app')
@section('content')
<div class="row justify-content-center ">
    <div class="card col-11">
      @if(Session::has('message'))
					<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
			@endif
      <div class="mt-1">
        <h5 class="text-center text-uppercase font-weight-bold">Nos Etudiants En cours</h5>
        <a class="btn btn-warning" href="{{route('agent')}}"> {{ __('Retour') }}</a>
        <div class="d-flex float-right">
          <div class=" text-center mr-2" >
            <button class="font-weight-bold text-uppercase bg-white text-danger mt-1">Total : </button>
          </div>
        <div></div>
      </div>
      </div>
            <div class="table table-responsive p-0" style="background: #ccc07c;">
              <table id="example1" class="table table-hover">
                <thead class="">
                <tr class=" btn-sm text-center">
                  <th scope="col">N°</th>
                  <th scope="col">Date d'enregistrement</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom (s)</th>
                  <th scope="col">Matricule</th>
                  <th scope="col">Email</th>
                  <th scope="col">Option </th>
                </thead>
                <tbody >
                   @foreach($users as $key=>$user)
                <tr class="tablecolor text-center">
                  <td>{{++$key}}</td>
                   <td>{{$user->created_at->format('d/m/y à H:m')}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->prenoms}}</td>
                  <td>{{$user->matricule}}</td>
                  <td class="text-danger font-weight-bold">{{$user->email}}</td>
                  <td>
                    <a href="{{route('inscrit.validate', $user->id)}} "><button class="btn btn-success">Valider</button></a>
                     <a href="{{route('inscrit.rejet', $user->id)}} "><button class="btn btn-danger">Rejetter<i class="fas fa-trash"></i></button></a>
                  </td>
                </tr>
                  @endforeach
            </tbody>
          </table>
      </div>
    </div>
</div>    
@endsection
  
  

  
  
  
  
   