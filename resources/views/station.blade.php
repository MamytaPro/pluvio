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
                <a href="{{route('add-station')}}" class="btn btn-outline-success btn-sm">
                    <i class="fas fa-plus"></i>
                    Ajouter une nouvelle
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Département</th>
                        <th>Région</th>
                        <th>Technicien</th>
                        <th>Adresse</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($stations as $sta)
                        <tr>
                                <td  class="text-black">{{$sta->nom}}</td>
                                <td  class="text-black">{{$sta->departement}}</td>
                                <td  class="text-black">{{$sta->region}}</td>
                                <td  class="text-black">{{$sta->user->prenom}} {{$sta->user->nom}}</td>
                                <td  class="text-black">{{$sta->adresse}}</td>
                                <td  class="text-black">
                                    <a href="{{route('showstation',['id'=> $sta->id])}}" class="btn btn-outline-info btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('editstation',['id'=> $sta->id])}}" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('deletestation',['id'=> $sta->id])}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')"><i class="fa fa-trash"></i></a>
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
@endsection
