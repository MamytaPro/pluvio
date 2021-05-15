@extends('layouts.master');
@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="Background-Color: cadetblue">
                    <i class="fas fa-plus"></i>
                    Modifier Données
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('editreleve', ['id'=>$releve->id])}}">
                        @csrf
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Date</label>
                            <input type="date" name="date" value="{{ $releve->date }}" class="form-control @error('date') is-invalid @enderror" require>
                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Quantité Pluie</label>
                            <input type="text" name="quantite" value="{{$releve->quantite }}" class="form-control @error('quantite') is-invalid @enderror" require>
                            @error('quantite')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="">Région</label>
                            <select name="region" value="{{ old('region') }}" class="form-control @error('region') is-invalid @enderror" require>
                                @foreach($regions as $region)
                                    @if($releve->$region == $region->nom)
                                        <option value="$releve->$region">{{$region->nom}}</option>
                                    @endif
                                @endforeach
                                
                                @foreach($regions as $region)
                                <option value="{{$region->nom}}">{{$region->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Température</label>
                            <input type="text" name="temperature" value="{{$releve->temperature}}" class="form-control @error('temperature') is-invalid @enderror" require>
                            @error('temperature')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Station</label>
                            <select name="station_id" value="{{ old('station_id') }}" class="form-control @error('station_id') is-invalid @enderror" require>
                                    @foreach($stations as $station)
                                        @if($releve->station_id == $station->id)
                                            <option value="$station->nom">{{$station->nom}}</option>
                                        @endif
                                    @endforeach
                                    @foreach($stations as $station)
                                        <option value="{{$station->nom}}">{{$station->nom}}</option>
                                    @endforeach
                            </select>
                        </div>
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
