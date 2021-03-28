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

        <div id="map" class="map map-home leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" style="height: 300px; margin-top: 50px; position: relative; outline: none;" tabindex="0"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/15/16369/10896.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(296px, 10px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/15/16369/10895.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(296px, -246px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/15/16368/10896.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(40px, 10px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/15/16370/10896.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(552px, 10px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/15/16369/10897.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(296px, 266px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/15/16368/10895.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(40px, -246px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/15/16370/10895.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(552px, -246px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/15/16368/10897.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(40px, 266px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/15/16370/10897.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(552px, 266px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/15/16367/10896.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-216px, 10px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/15/16371/10896.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(808px, 10px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/15/16367/10895.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-216px, -246px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/15/16371/10895.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(808px, -246px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/15/16367/10897.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-216px, 266px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/15/16371/10897.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(808px, 266px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"><img src="https://unpkg.com/leaflet@1.7.1/dist/images/marker-shadow.png" class="leaflet-marker-shadow leaflet-zoom-animated" alt="" style="margin-left: -12px; margin-top: -41px; width: 41px; height: 41px; transform: translate3d(431px, 188px, 0px);"></div><div class="leaflet-pane leaflet-overlay-pane"></div><div class="leaflet-pane leaflet-marker-pane"><img src="https://unpkg.com/leaflet@1.7.1/dist/images/marker-icon.png" class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt="" tabindex="0" style="margin-left: -12px; margin-top: -41px; width: 25px; height: 41px; transform: translate3d(431px, 188px, 0px); z-index: 188;"></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(4.1906e+06px, 2.78952e+06px, 0px) scale(16384);"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> | © 
        <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors</div></div></div></div>

@endsection

@section('js')
<script>
var map = L.map('map').setView([51.505, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
</script>
@endsection
