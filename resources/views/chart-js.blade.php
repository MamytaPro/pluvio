@extends('layouts.master')
@section('title')
Technicien
@endsection
@section('content')
<div class="pie-chart-container">
      <canvas id="pie-chart"></canvas>
    </div>
@endsection

@section('js')
<script>
  var ctx = document.getElementById('mychart').getContext('2d');
  var cData = JSON.parse(`<?php echo $record; ?>`);
  
      var mychart= new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Jan', 'Fev', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil', 'Août', 'Sept', 'Oct', 'Nov', 'Dec'],
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

