@extends('layouts.master');
@section('content')
<div class="row justify-content-center">
        <div class="col-md-8" background="gray">
            <div class="card">
                <div class="card-header"><b>Ajouter une station</b></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('add-station') }}">
                        @csrf
                        <div class="form-group">
                            <label for="">Nom Station</label>
                            <input type="text" name="nom" value="{{ old('nom') }}" class="form-control @error('nom') is-invalid @enderror" require>
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Département</label>
                            <input type="text" name="departement" value="{{ old('departement') }}" class="form-control @error('departement') is-invalid @enderror" require>
                            @error('departement')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Région</label>
                            <input type="text" name="region" value="{{ old('region') }}" class="form-control @error('region') is-invalid @enderror" require>
                            @error('region')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Adresse</label>
                            <input type="text" name="adresse" value="{{ old('adresse') }}" class="form-control @error('adresse') is-invalid @enderror" require>
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
