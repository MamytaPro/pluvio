@extends('layouts.master')
@section('content')
<div class="row justify-content-center">
        <div class="col-md-8" background="gray">
            <div class="card">
                <div class="card-header text-center" style="Background-Color: cadetblue"><b>Modifier une station</b></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('editstation', ['id'=>$station->id ]) }}">
                        @csrf
                        <div class="form-group">
                            <label for="">Nom Station</label>
                            <input type="text" name="nom" value="{{ $station->nom }}" class="form-control @error('nom') is-invalid @enderror" require>
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Technicien</label>
                            <select name="user_id" value="{{ old('user_id') }}" class="form-control @error('user_id') is-invalid @enderror" require>
                                @foreach($users as $user)
                                    @if($station->user_id == $user->id)
                                         <option value="$station->user_id">{{$user->prenom}} {{$user->nom}}</option>
                                   @endif
                                @endforeach
                                @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->prenom}}{{$user->nom}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Région</label>
                            <select name="region" value="{{ old('region') }}" class="form-control @error('region') is-invalid @enderror" require>
                                <option value="$station->region">{{$station->region}}</option>
                                    @foreach($regions as $region)
                                        <option value="{{$region->nom}}">{{$region->nom}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Département</label>
                            <select name="departement" value="{{ old('departement') }}" class="form-control @error('departement') is-invalid @enderror" require>
                                <option value="$station->departement">{{$station->departement}}</option>
                                @foreach($departements as $dep)
                                        <option value="{{$dep->nom}}">{{$dep->nom}}</option>
                                    @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Adresse</label>
                            <input type="text" name="adresse" value="{{$station->adresse}}" class="form-control @error('adresse') is-invalid @enderror" require>
                            @error('adresse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-3 row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-outline-success">
                                    Ajouter
                                </button>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="reset" class="btn btn-outline-danger">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
