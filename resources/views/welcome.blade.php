@extends('layouts.app')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner mt-2">
      <div class="carousel-item active">
        <img src="{{asset('assets/dist/img/images.jpeg')}}" class="d-block w-100" height="250" width="150">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/dist/img/images2.jpeg')}}" class="d-block w-100" height="250" width="150">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/dist/img/images3.jpeg')}}" class="d-block w-100" height="250" width="150">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <section class="container mt-3">
  <div class="card">
              <div class="card-header" style="Background: cadetblue">
                <h3 class="card-title-text-center">Liste des relevés</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="Background: cadetblue">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="Background: cadetblue">
                    <th>Date</th>
                    <th>Quantité (mm)</th>
                    <th>Température</th>
                    <th>Région</th>
                    <th>Station</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($releves as $rel)
                    <tr>
                      <td>{{$rel->date}}</td>
                      <td>{{$rel->quantite}}</td>
                      <td>{{$rel->temperature}} °C</td>
                      <td>{{$rel->region}}</td>
                      <td>{{$rel->station->nom}}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
  </section>
</div>
@endsection