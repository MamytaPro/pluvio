@extends('layouts.master')

@section('content')
    <h1>Administrateur</h1>
    </br>
    </br>
    </br>
    <div class="row">
          <div class="col-lg-3 col-6 ml-5">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$meteos}}</h3>

                <p>Météorologue</p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
              <a href="{{route('getmeteo')}}" class="small-box-footer">Plus d'info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6 ml-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$tech}}</h3>

                <p>Technicien</p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
              <a href="{{route('meteo')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6 ml-4">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$stat}}</h3>

                <p>Stations</p>
              </div>
              <div class="icon">
                <i class="ion ion-location"></i>
              </div>
              <a href="{{route('station')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
        </div>
@endsection
