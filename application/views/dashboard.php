<div class="main-panel">
  <div class="content">
   <div class="container-fluid">
    <h4 class="page-title">Dashboard Training</h4>

    <div class="row">
     <div class="col-md-3">
      <div class="card">
       <div class="card-header">
        <h4 class="card-title">Training Compliance</h4>
        <p class="card-category">Avarage of Engineering Services</p>
      </div>
      <div class="card-body">
        <div id="task-complete" class="chart-circle mt-4 mb-3"></div>
      </div>
      <div class="card-footer">
        <div class="legend"><i class="la la-circle text-primary"></i> Completed</div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card">
     <div class="card-header">
      <h4 class="card-title">Manpower</h4>
      <p class="card-category">Engineering Services</p>
    </div>
    <div class="card-body">
      <div id="monthlyChart" class="chart chart-pie"></div>
    </div>
    <div class="card-footer">
      <div class="legend"><i class="la la-circle text-primary"></i> Completed</div>
    </div>
  </div>
</div>
<div class="col-md-3" style="line-height: 1">
  <div class="card">
   <div class="card-header">
    <h4 class="card-title">Generation</h4>
    <p class="card-category">Totally of Engineering Services</p>
  </div>
  <div class="card-body">
   <small>Success</small>
   <div class="progress">
     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
       <span class="sr-only">72% Complete</span>
     </div>
   </div>
 </div>
 <div class="card-body">
  <small>Info</small>
  <div class="progress">
    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
     <span class="sr-only">20% Complete</span>
   </div>
 </div>
</div>
<div class="card-body">
  <small>Warning</small>
  <div class="progress">
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
     <span class="sr-only">60% Complete (warning)</span>
   </div>
 </div>
</div>
<div class="card-body">
  <small>Danger</small>
  <div class="progress">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
     <span class="sr-only">80% Complete</span>
   </div>
 </div>
</div>
<div class="card-footer">
  <div class="legend"><i class="la la-circle text-primary"></i> Completed</div>
</div>
</div>
</div>

<div class="col-md-3" style="line-height: 1">
  <div class="card">
   <div class="card-header">
    <h4 class="card-title">Working Active Period</h4>
    <p class="card-category">Totally of Engineering Services</p>
  </div>
  <div class="card-body">
   <small>0-2 Tahun</small>
   <div class="progress">
     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
       <span class="sr-only">80% Complete</span>
     </div>
   </div>
 </div>
 <div class="card-body">
  <small>2-5 Tahun</small>
  <div class="progress">
    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
     <span class="sr-only">20% Complete</span>
   </div>
 </div>
</div>
<div class="card-body">
  <small>>5 Tahun</small>
  <div class="progress">
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
     <span class="sr-only">50% Complete (warning)</span>
   </div>
 </div>
</div>

<div class="card-footer">
  <div class="legend"><i class="la la-circle text-primary"></i> Completed</div>
</div>
</div>
</div>


<div class="col-md-12">
  <div class="card">
   <div class="card-header">
     <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

     <script type="text/javascript">

// Create the chart
Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Browser market shares. January, 2018'
  },
  subtitle: {
    text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
  },
  xAxis: {
    type: 'category'
  },
  yAxis: {
    title: {
      text: 'Total percent market share'
    }

  },
  legend: {
    enabled: false
  },
  plotOptions: {
    series: {
      borderWidth: 0,
      dataLabels: {
        enabled: true,
        format: '{point.y:.1f}%'
      }
    }
  },

  tooltip: {
    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
  },

  "series": [
  {
    "name": "Browsers",
    "colorByPoint": true,
    "data": [
    {
      "name": "Chrome",
      "y": 62.74,
      "drilldown": "Chrome"
    },
    {
      "name": "Firefox",
      "y": 10.57,
      "drilldown": "Firefox"
    },
    {
      "name": "Internet Explorer",
      "y": 7.23,
      "drilldown": "Internet Explorer"
    },
    {
      "name": "Safari",
      "y": 5.58,
      "drilldown": "Safari"
    },
    {
      "name": "Edge",
      "y": 4.02,
      "drilldown": "Edge"
    },
    {
      "name": "Opera",
      "y": 1.92,
      "drilldown": "Opera"
    },
    {
      "name": "Other",
      "y": 7.62,
      "drilldown": null
    }
    ]
  }
  ],
  "drilldown": {
    "series": [
    {
      "name": "Chrome",
      "id": "Chrome",
      "data": [
      [
      "v65.0",
      0.1
      ],
      [
      "v64.0",
      1.3
      ],
      [
      "v63.0",
      53.02
      ],
      [
      "v62.0",
      1.4
      ],
      [
      "v61.0",
      0.88
      ],
      [
      "v60.0",
      0.56
      ],
      [
      "v59.0",
      0.45
      ],
      [
      "v58.0",
      0.49
      ],
      [
      "v57.0",
      0.32
      ],
      [
      "v56.0",
      0.29
      ],
      [
      "v55.0",
      0.79
      ],
      [
      "v54.0",
      0.18
      ],
      [
      "v51.0",
      0.13
      ],
      [
      "v49.0",
      2.16
      ],
      [
      "v48.0",
      0.13
      ],
      [
      "v47.0",
      0.11
      ],
      [
      "v43.0",
      0.17
      ],
      [
      "v29.0",
      0.26
      ]
      ]
    },
    {
      "name": "Firefox",
      "id": "Firefox",
      "data": [
      [
      "v58.0",
      1.02
      ],
      [
      "v57.0",
      7.36
      ],
      [
      "v56.0",
      0.35
      ],
      [
      "v55.0",
      0.11
      ],
      [
      "v54.0",
      0.1
      ],
      [
      "v52.0",
      0.95
      ],
      [
      "v51.0",
      0.15
      ],
      [
      "v50.0",
      0.1
      ],
      [
      "v48.0",
      0.31
      ],
      [
      "v47.0",
      0.12
      ]
      ]
    },
    {
      "name": "Internet Explorer",
      "id": "Internet Explorer",
      "data": [
      [
      "v11.0",
      6.2
      ],
      [
      "v10.0",
      0.29
      ],
      [
      "v9.0",
      0.27
      ],
      [
      "v8.0",
      0.47
      ]
      ]
    },
    {
      "name": "Safari",
      "id": "Safari",
      "data": [
      [
      "v11.0",
      3.39
      ],
      [
      "v10.1",
      0.96
      ],
      [
      "v10.0",
      0.36
      ],
      [
      "v9.1",
      0.54
      ],
      [
      "v9.0",
      0.13
      ],
      [
      "v5.1",
      0.2
      ]
      ]
    },
    {
      "name": "Edge",
      "id": "Edge",
      "data": [
      [
      "v16",
      2.6
      ],
      [
      "v15",
      0.92
      ],
      [
      "v14",
      0.4
      ],
      [
      "v13",
      0.1
      ]
      ]
    },
    {
      "name": "Opera",
      "id": "Opera",
      "data": [
      [
      "v50.0",
      0.96
      ],
      [
      "v49.0",
      0.82
      ],
      [
      "v12.1",
      0.14
      ]
      ]
    }
    ]
  }
});
</script>
</div>
</div>
</div>
