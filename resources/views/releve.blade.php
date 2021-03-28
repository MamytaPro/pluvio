@extends('layouts.master')
@section('title')
Relevé
@endsection
@section('content')
<div class="row mb-3">
        <div class="col-md-6">
            <h1>Liste des relevés</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{route('add-releve')}}" class="btn btn-outline-success btn-sm">
            <i class="fas fa-plus"></i>
            Ajouter un nouveau
            </a>
        </div>
    </div>

<div class="row">
      <div class="col-12">
      <table class="table table-striped" id="myTable">
      <thead>
      <tr>
          <th>Date</th>
          <th>Quantité (mm)</th>
          <th>Température</th>
          <th>Région</th>
          <th>Station</th>
          <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($releves as $rel)
      <tr>
        <td>{{$rel->date}}</td>
        <td>{{$rel->quantite}}</td>
        <td>{{$rel->temperature}} °C</td>
        <td>{{$rel->region}}</td>
        <td>{{$rel->station->nom}}</td>
        <td>
          <a href="{{route('edituser',['id'=> $rel->id])}}" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></a>
          <a href="{{route('deleteuser',['id'=> $rel->id])}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
      </div>
  </div>
@endsection