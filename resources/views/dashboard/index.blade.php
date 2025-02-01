@extends('layouts.app')
@section('title', 'Dashboard')
@section('content-header')
Dashboard
@endsection
@section('content')
<div class="row gy-0,5"> <!-- Adjusted gy-2 to reduce vertical spacing -->
  <!-- Card 1 -->
  <div class="col-xxl-15 order-0"> <!-- Removed margin class -->
    <div class="card">
      <div class="d-flex align-items-start row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary mb-3">Sugeng Rawuh {{auth()->user()->nama_depan}} {{auth()->user()->nama_belakang}} 🎉</h5>
            <p class="mb-6">Kamu Login Sebagai - {{auth()->user()->role}}</p>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-6">
            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="175" class="scaleX-n1-rtl" alt="View Badge User">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row gy-2"> <!-- Adjusted gy-2 to reduce vertical spacing -->
  <div class="col-md-14"> <!-- Gunakan ukuran kolom lebih kecil -->
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <h4>Persentase Status Alumni</h4>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-1" style="position: relative;">
          <div class="d-flex flex-column align-items-center gap-1">
            <h3>
              <small>Total Alumni</small>
            </h3>
            <h3 class="mb-12">{{$total_alumni->count()}}</h3>
          </div>
          <div id="chartAlumni" style="min-height: 300px;"></div>
          <div class="resize-triggers">
            <div class="expand-trigger">
              <div style="width: 321px; height: 119px;"></div>
            </div>
            <div class="contract-trigger"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection

@push('script')
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var options = {
      series: <?php echo json_encode($data_status); ?>, // Data persentase
      chart: {
        type: 'donut', // Jenis chart
        height: 300
      },
      labels: <?php echo json_encode($label_status); ?>, // Label data
      colors: ['#71dd37', '#696cff', '#8592a3', '#03c3ec'], // Warna slice
      dataLabels: {
        enabled: true
      },
      legend: {
        position: 'bottom'
      },
    };

    var chart = new ApexCharts(document.querySelector("#chartAlumni"), options);
    chart.render();
  });
</script>
@endpush