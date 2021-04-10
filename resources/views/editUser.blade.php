@extends('layouts.master');
@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="Background-Color: cadetblue">
                    <b> Modifier @if($type === "meteo")  météorologue @else  technicien @endif </b>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('adduser') }}">
                        @csrf
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Prénom</label>
                            <input type="text" name="prenom" value="{{$user->prenom}}" class="form-control @error('prenom') is-invalid @enderror" require>
                            @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Nom</label>
                            <input type="text" name="nom" value="{{$user->nom}}" class="form-control @error('nom') is-invalid @enderror" require>
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Adresse</label>
                            <input type="text" name="adresse" value="{{$user->adresse}}" class="form-control @error('adresse') is-invalid @enderror" require>
                            @error('adresse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Téléphone</label>
                            <input type="text" name="tel" value="{{$user->tel}}" class="form-control @error('tel') is-invalid @enderror" require>
                            @error('tel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="">Rôle</label>
                            @if($type === "meteo")
                            <input type="text" value="Méteorologue" name="role" readonly="readonly" class="form-control">

                            @else
                            <input type="text" value="Technicien" name="role" readonly="readonly" class="form-control">
                            @endif
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        @if($type === "tech")
                        <div class="form-group">
                            <label for="">Météorologue gérant</label>
                            <select name="meteo_id" value="{{ old('meteo_id') }}" class="form-control @error('meteo_id') is-invalid @enderror" require>
                                @foreach($users as $User)
                                    @if($user->meteo_id == $User->id)
                                        <option value="$User->prenom $User->nom">{{$User->prenom}} {{$User->nom}} </option>
                                    @endif
                                @endforeach
                                @foreach($users as $User)
                                    <option value="{{$User->prenom}} {{$User->nom}}">{{$User->prenom}} {{$User->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="">E-mail</label>
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror" require>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-3 row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-outline-success">Modifier</button>
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
