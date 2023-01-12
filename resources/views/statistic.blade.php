@extends('layout')
@section('content')
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="wrap">
					<div class="img" style="background-image: url(template/images/bg-1.jpg);"></div>
					<div class="login-wrap p-4 p-md-5">
						<div id="container"></div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<script type="text/javascript">
	var times = <?php echo json_encode($times)?>;
	var users = <?php echo json_encode($users)?>;

    Highcharts.chart('container', {
        title: {
            text: 'Visitor Graph 2023'
        },
        subtitle: {
            text: 'Source: Mongodb'
        },
        xAxis: {
            categories: users
        },
        yAxis: {
            title: {
                text: 'Visit in minutes'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Stay In (minutes)',
            data: times
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>
@endsection