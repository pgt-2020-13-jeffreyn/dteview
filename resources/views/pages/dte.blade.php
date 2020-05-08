@extends('layouts.app', [
    'namePage' => 'Table List',
    'class' => 'sidebar-mini',
    'activePage' => 'dte',
  ])

@section('content')
<script type="text/javascript">
    $(document).ready(function(){
        setTimeout(function() {
            location.reload();
        }, 100);
    })
</script>
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> DTE-3</h4>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <div id="chartdte3"></div>
              <script src="https://code.highcharts.com/highcharts.js"></script>
              <script src="https://code.highcharts.com/modules/exporting.js"></script>

              <script>
Highcharts.chart('chartdte3', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'Speed DTE-3'
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
    },
    xAxis: {
        categories: {!!json_encode($categories)!!}
    },
    yAxis: {
        title: {
            text: 'Speed'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: ' m/h'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5
        }
    },
    series: [{
        name: 'Speed',
        data: [10, 12, 56, 12, 4, 13, 45]
    }]
});
</script>
            
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
          </div>

            
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> DTE-4</h4>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <div id="chartdte4"></div>
              <script src="https://code.highcharts.com/highcharts.js"></script>

              <script>
Highcharts.chart('chartdte4', {
    chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
            load: function () {

                // set up the updating of the chart each second
                var series = this.series[0];
                setInterval(function () {
                    var x = (new Date()).getTime(), // current time
                        y = Math.random();
                    series.addPoint([x, y], true, true);
                }, 1000);
            }
        }
    },

    time: {
        useUTC: false
    },

    title: {
        text: 'Availability'
    },

    accessibility: {
        announceNewData: {
            enabled: true,
            minAnnounceInterval: 15000,
            announcementFormatter: function (allSeries, newSeries, newPoint) {
                if (newPoint) {
                    return 'New point added. Value: ' + newPoint.y;
                }
                return false;
            }
        }
    },

    xAxis: {
        type: 'datetime',
        tickPixelInterval: 150
    },

    yAxis: {
        title: {
            text: 'Value'
        },
        plotLines: [{
            value: 0,
            width: 1,
            color: '#808080'
        }]
    },

    tooltip: {
        headerFormat: '<b>{series.name}</b><br/>',
        pointFormat: '{point.x:%Y-%m-%d %H:%M:%S}<br/>{point.y:.2f}'
    },

    legend: {
        enabled: false
    },

    exporting: {
        enabled: false
    },

    series: [{
        name: 'Random data',
        data: (function () {
            // generate an array of random data
            var data = [],
                time = (new Date()).getTime(),
                i;

            for (i = -19; i <= 0; i += 1) {
                data.push({
                    x: time + i * 10000,
                    y: Math.random()
                });
            }
            return data;
        }())
    }]
});
</script>
            
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
          </div>

            
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header">
            <h4 class="card-title">Data DTE 3</h4>
            <p class="category"> Availability Machine</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
            
              <table class="table">
              <table class="table">
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Jam</th>
                  <th class="text-right">Speed</th>
                  <th class="text-right">Availability</th>
                </tr>
                <tbody>
                @foreach($dte3 as $p)
                  <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->tanggal}}</td>
                    <td>{{$p->jam}}</td>
                    <td class="text-right">
                    {{$p->Speed}}
                    </td>
                    <td class="text-right">
                    {{$p->Availability}}
                    </td>
                  </tr>
                  @endforeach
                  </tbody> 
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
@endpush
