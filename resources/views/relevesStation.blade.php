@extends('layouts.master')
@section('title')
Graphique
@endsection
@section('content')

@if(session()->has('message'))
  <div class="row">
    <div class=" col-md-6 alert alert-success">
      {{session('message')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
@endif
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Liste des relevés ({{$station->nom}})</h3>
      <table class="table table-striped" id="myTable">
        <thead>
          <tr>
            <th>Date</th>
            <th>Quantité (mm)</th>
          </tr>
        </thead>
        <tbody>
          @foreach($station->releves as $rel)
            <tr>
              <td>{{$rel->date}}</td>
              <td>{{$rel->quantite}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <div class="card-title-wrap bar-success">
          <h5 class="">Rapports Annuels des ventes</h5>
        </div>
      </div>
      <div class="card-body">
        <canvas id="myChart" height="400"></canvas>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script>
var ctx = document.getElementById('mychart').getContext('2d');
var cData = JSON.parse(`<?php echo $data; ?>`);
var mychart= new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Juil', 'Août', 'Sept'],
      datasets: [{
        label: 'record',
              data: cdata,
              backgroundColor: 'lightgreen',
              borderColor: 'green',
              borderWidth: 1,
            
          }]
        }
        options:{
          scales: {
            y:{
              beginAtZero: true
            }
          }
        }
      })
 
 </script>
@endsection
