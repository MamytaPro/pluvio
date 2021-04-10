@extends('layouts.master')
@section('title')
Graphique
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
    <div class="container col-md-4">
      <table class="table table-striped" id="myTable">
      <thead>
      <tr>
          <th>Nom</th>
          <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($stations as $sta)
            <tr>
                <td>{{$sta->nom}}</td>
                <td><a href="{{route('infoStation', ['id'=>$sta->id])}}" class="btn btn-outline-success btn-round"><i class="fas fa-eye"></i></a></td>
            </tr>
        @endforeach
    </tbody>
    </table>
  </div>
@endsection
