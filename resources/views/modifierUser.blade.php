@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Modifier météorologue ou technicien
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update', ['id'=>$user->id ]) }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Prénom</label>
                                <input type="text" name="prenom" value="{{ $user->prenom }}" class="form-control @error('prenom') is-invalid @enderror" require>
                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Nom</label>
                                <input type="text" name="nom" value="{{ $user->nom }}" class="form-control @error('nom') is-invalid @enderror" require>
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
                                <input type="text" name="adresse" value="{{ $user->adresse }}" class="form-control @error('adresse') is-invalid @enderror" require>
                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Téléphone</label>
                                <input type="text" name="tel" value="{{ $user->tel }}" class="form-control @error('tel') is-invalid @enderror" require>
                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Rôle</label>
                            @if(Auth::user()->role === "Admin")
                            <select name="role" value="{{ $user->role }}" class="form-control @error('role') is-invalid @enderror" require>
                                <option value="Météorologue">Météorologue</option>
                                <option value="Technicien">Technicien</option>
                            </select>
                            @else
                            <input type="text" value="Technicien" name="role" readonly="readonly" class="form-control">
                            @endif
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
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
                                <button type="submit" class="btn btn-outline-success">
                                    Modifier
                                </button>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{route('meteo')}}" class="btn btn-outline-danger">Annuler</a>
                            </div>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
