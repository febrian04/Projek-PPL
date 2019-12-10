@extends('layouts/main')

@section('title','Artikel')

@section('container')

        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="heading-39101 mb-5">
              <span class="backdrop text-center">Grafik</span>
              <span class="subtitle-39191">penyakit hewan ternak di jember</span>
              <h3>Grafik Mayoritas Penyakit</h3>
            </div>
          </div>
        </div>
        <div class="x-panel">
          <div id="chart"></div>
        </div>
        <br>
        <div class="x-panel">
          <div id="chart1"></div>
        </div>
@endsection

@section('footer')
  <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
    Highcharts.chart('chart', {
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [''],
                    
                    crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
            @foreach ($data as $item)
                    {
                    name: '{{$item->jenispenyakit}}',
                    data: [{{$item->jumlah}}]
                    },
                    @endforeach
                
            ]
    });
    </script>

<script>
    Highcharts.chart('chart1', {
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [''],
                    
                    crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
            @foreach ($produk as $item)
                    {
                    name: '{{$item->jenis_hewan}}',
                    data: [{{$item->jumlah_hewan_sakit}}]
                    },
                    @endforeach
                
            ]
    });
    </script>
@endsection