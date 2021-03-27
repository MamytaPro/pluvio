@extends('layouts.master')
@section('title')
Administrateur
@endsection
@section('content')
@if(session()->has('message'))
  <div class="row">
    <div class=" col-md-6 alert alert-success">
      {{session('message')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
@endif

    <div class="row mb-3">
        <div class="col-md-6">
            <h1>Liste des Météorologues</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{route('add-user')}}" class="btn btn-outline-success btn-sm">Ajouter un nouveau</a>
        </div>
    </div>
    <div class="row">
      <div class="col-12">
          
    <table class="table table-striped" id="myTable">
      <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>E-mail</th>
            <th>Téléphone</th>
            <th>Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach($meteos as $met)
        <tr>
          <td>{{$met->prenom}}</td>
          <td>{{$met->nom}}</td>
          <td>{{$met->adresse}}</td>
          <td>{{$met->email}}</td>
          <td>{{$met->tel}}</td>
          <td>
            <a href="{{route('edituser',['id'=> $met->id])}}" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></a>
            <a href="{{route('deleteuser',['id'=> $met->id])}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')"><i class="fa fa-trash"></i></a>
          </td>
        </tr> 
        @endforeach
      </tbody>
</table>
      </div>
    </div>
@endsection
