@extends('layouts.master')
@section('title')
Technicien
@endsection
@section('content')
<h1>Technicien</h1>
</br>
    </br>
    </br>
    <div class="row">
          <div class="col-lg-3 col-6 ml-5">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3>

                <p></p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
              <a href="{{route('releve')}}" class="small-box-footer">Plus d'info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
@endsection