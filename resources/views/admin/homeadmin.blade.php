@extends('layouts.appLayout')
@section('konten')
<!DOCTYPE html>
<html>
<head>
    <title>Contoh Chart</title>
    <style>
        body {
            background-color: white;
        }
        #chart_div, #piechart_3d {
            width: 100%;
            height: 400px;
        }

        @media only screen and (max-width: 600px) {
            #chart_div, #piechart_3d {
                height: 300px;
            }
        }
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Kota');
            data.addColumn('number', 'Jumlah');

            data.addRows([
                @foreach ($cityCounts as $kota => $jumlah)
                    ['{{ $kota }}', {{ $jumlah }}],
                @endforeach
            ]);

            var options = {
                title: 'Perbandingan Jumlah Kota',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }

        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Kota');
            data.addColumn('number', 'Jumlah');

            data.addRows([
                @foreach ($cityCounts as $kota => $jumlah)
                    ['{{ $kota }}', {{ $jumlah }}],
                @endforeach
            ]);

            var options = {
                title: 'Jumlah Kota',
                hAxis: {
                    title: 'Kota'
                },
                vAxis: {
                    title: 'Jumlah'
                }
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="app">
        <div id="piechart_3d"></div>
        <div id="chart_div"></div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
@endsection
