@extends('layouts.master')  

@section('content')

<div class="container">
    
</div>
@endsection
@section('js')  
<script>
var map = L.map('map').setView([14.510, -14.446], 9);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([14, -14.44]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
</script>
@endsection

