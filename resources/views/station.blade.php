@extends('layouts.master')
@section('title')
Station
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
                <h1>Liste des Stations</h1>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{route('add-station')}}" class="btn btn-outline-success btn-sm">Ajouter une nouvelle</a>
            </div>
        </div>
        <div class="row">
        <table class="table table-dark">
    <thead>
        <tr style="background-color:CADETBLUE;">
            <th style="color:black">Nom</th>
            <th style="color:black">Département</th>
            <th style="color:black">Région</th>
            <th style="color:black">Technicien</th>
            <th style="color:black">Adresse</th>
            <th style="color:black">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($stations as $sta)
        <tr>
        <td>{{$sta->nom}}</td>
        <td>{{$sta->departement}}</td>
        <td>{{$sta->region}}</td>
        <td>{{$sta->tech_id}}</td>
        <td>{{$sta->adresse}}</td>
        <td>
            <a href="" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></a>
            <a href="" class="btn btn-outline-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')"><i class="fa fa-trash"></i></a>
        </td>
        </tr>
    @endforeach
    </tbody>
    </table>
        </div>
@endsection
