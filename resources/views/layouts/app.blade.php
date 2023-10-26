<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset("AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css") }}">
        <link rel="stylesheet" href="{{ asset("AdminLTE-3.2.0/dist/css/adminlte.min.css") }}">
         <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset("AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css") }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{ asset("AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset("AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset("AdminLTE-3.2.0/plugins/jqvmap/jqvmap.min.css") }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset("AdminLTE-3.2.0/dist/css/adminlte.min.css") }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset("AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset("AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css") }}">


        <!-- Scripts -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
            <body class="font-sans antialiased">
        @role('user')
            <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.newuser')
            <!-- Page Content -->
            <main>
            </main>
            </div>
        @else
        @role('admin')
            <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.admin')
            <!-- Page Content -->
            <main>
            </main>
            </div>
        @else
            <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
            </main>
            </div>
        @endrole
        @endrole

@stack('scripts')

    <!-- Include JavaScript files -->
    <script src="{{ asset("AdminLTE-3.2.0/plugins/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("AdminLTE-3.2.0/plugins/chart.js/Chart.min.js") }}"></script>
    <script src="{{ asset("AdminLTE-3.2.0/dist/js/adminlte.min.js") }}"></script>
    <script src="{{ asset("AdminLTE-3.2.0/dist/js/demo.js") }}"></script>
    <script src="{{ asset("AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js") }}"></script>
    <script>
        // Resolve conflict in jQuery UI tooltip with Bootstrap tooltip
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="{{ asset("AdminLTE-3.2.0/plugins/sparklines/sparkline.js") }}"></script>
    <script src="{{ asset("AdminLTE-3.2.0/plugins/jqvmap/jquery.vmap.min.js") }}"></script>
    <script src="{{ asset("AdminLTE-3.2.0/plugins/jqvmap/maps/jquery.vmap.usa.js") }}"></script>
    <script src="{{ asset("AdminLTE-3.2.0/plugins/jquery-knob/jquery.knob.min.js") }}"></script>
    <script src="{{ asset("AdminLTE-3.2.0/plugins/moment/moment.min.js") }}"></script>
    <script src="{{ asset("AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js") }}"></script>
    <script src="{{ asset("AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}"></script>
    <script src="{{ asset("AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js") }}"></script>
    <script src="{{ asset("AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>


<script>
    /* Chart.js Charts */
  // Sales chart
  var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d')
  // $('#revenue-chart').get(0).getContext('2d');

  var salesChartData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [
      {
        label: 'Digital Goods',
        backgroundColor: 'rgba(60,141,188,0.9)',
        borderColor: 'rgba(60,141,188,0.8)',
        pointRadius: false,
        pointColor: '#3b8bba',
        pointStrokeColor: 'rgba(60,141,188,1)',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data: [28, 48, 40, 19, 86, 27, 90]
      },
      {
        label: 'Electronics',
        backgroundColor: 'rgba(210, 214, 222, 1)',
        borderColor: 'rgba(210, 214, 222, 1)',
        pointRadius: false,
        pointColor: 'rgba(210, 214, 222, 1)',
        pointStrokeColor: '#c1c7d1',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data: [65, 59, 80, 81, 56, 55, 40]
      }
    ]
  }

  var salesChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart(salesChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesChartData,
    options: salesChartOptions
  })

  // Donut Chart
  var pieChartCanvas = $('#sales-chart-canvas').get(0).getContext('2d')
  var pieData = {
    labels: [
      'Instore Sales',
      'Download Sales',
      'Mail-Order Sales'
    ],
    datasets: [
      {
        data: [30, 12, 20],
        backgroundColor: ['#f56954', '#00a65a', '#f39c12']
      }
    ]
  }
  var pieOptions = {
    legend: {
      display: false
    },
    maintainAspectRatio: false,
    responsive: true
  }
  // Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  // eslint-disable-next-line no-unused-vars
  var pieChart = new Chart(pieChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'doughnut',
    data: pieData,
    options: pieOptions
  })

  // Sales graph chart
  var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d')
  // $('#revenue-chart').get(0).getContext('2d');

  var salesGraphChartData = {
    labels: ['2011 Q1', '2011 Q2', '2011 Q3', '2011 Q4', '2012 Q1', '2012 Q2', '2012 Q3', '2012 Q4', '2013 Q1', '2013 Q2'],
    datasets: [
      {
        label: 'Digital Goods',
        fill: false,
        borderWidth: 2,
        lineTension: 0,
        spanGaps: true,
        borderColor: '#efefef',
        pointRadius: 3,
        pointHoverRadius: 7,
        pointColor: '#efefef',
        pointBackgroundColor: '#efefef',
        data: [2666, 2778, 4912, 3767, 6810, 5670, 4820, 15073, 10687, 8432]
      }
    ]
  }

  var salesGraphChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        ticks: {
          fontColor: '#efefef'
        },
        gridLines: {
          display: false,
          color: '#efefef',
          drawBorder: false
        }
      }],
      yAxes: [{
        ticks: {
          stepSize: 5000,
          fontColor: '#efefef'
        },
        gridLines: {
          display: true,
          color: '#efefef',
          drawBorder: false
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesGraphChart = new Chart(salesGraphChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesGraphChartData,
    options: salesGraphChartOptions
  })



</script>

<script>
    // The Calender
$('#calendar').datetimepicker({
    format: 'L',
    inline: true
  })
</script>


<script>

     //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })
</script>
</body>
</html>
