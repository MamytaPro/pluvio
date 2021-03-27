@extends('layouts.master');
@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajout Données</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('adduser') }}">
                        @csrf
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Date</label>
                            <input type="date" name="date" value="{{ old('date') }}" class="form-control @error('date') is-invalid @enderror" require>
                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Quantité Pluie</label>
                            <input type="text" name="nom" value="{{ old('quantite') }}" class="form-control @error('quantite') is-invalid @enderror" require>
                            @error('quantite')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Adresse</label>
                            <input type="text" name="adresse" value="{{ old('adresse') }}" class="form-control @error('adresse') is-invalid @enderror" require>
                            @error('adresse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Téléphone</label>
                            <input type="text" name="tel" value="{{ old('tel') }}" class="form-control @error('tel') is-invalid @enderror" require>
                            @error('tel')
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
