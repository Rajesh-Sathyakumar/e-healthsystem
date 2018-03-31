 <div class="content-wrapper">
 	  <section class="content">

<div class="box-body">
              <div class="row">
                <div class="col-md-8">
                	<h3>Schemes for every disease</h3>
                  <div class="chart-responsive">
                    <canvas id="pieChartSchemes" height="160" width="400" style="width: 412px; height: 160px;"></canvas>
                  </div>
                </div>
              </div>
              <!-- Number of beneficiaries in a scheme --> 
              <div class="row">
                <div class="col-md-8">
                <h3>Beneficiaries in various Schemes</h3>
                  <div class="chart-responsive">
                   <canvas id="barChartBeneficiaries" style="height: 190px; width: 423px;" width="423" height="190"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                  	<h3>Hospital Empaneled in various Schemes</h3>
                    <canvas id="pieChartHospitals" height="160" width="400" style="width: 412px; height: 160px;"></canvas>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                  	<h3>Beneficiaries in various Schemes</h3>
                    <canvas id="pieChart" height="160" width="400" style="width: 412px; height: 160px;"></canvas>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                  	<h3>Beneficiaries in various Schemes</h3>
                    <canvas id="pieChart" height="160" width="400" style="width: 412px; height: 160px;"></canvas>
                  </div>
                </div>
              </div>
        </section>
    </div>
    <script>
    var schemesForADisease = document.getElementById("pieChartSchemes").getContext('2d');
	var myChart = new Chart(schemesForADisease, {
    type: 'pie',
    data: {
        labels:  <?php 
            echo '[';
            foreach($schemesForDiseases as $record)
            {
            	echo '"'.$record->disease_name.'",';

            }
            echo ']';
            ?>,
        datasets: [{
            label: 'Diseases covered in each scheme',
            data: <?php 
            echo '[';
            foreach($schemesForDiseases as $record)
            {
            	echo $record->scheme_count.',';

            }
            echo ']';
            ?> ,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

	var schemeWiseBeneficiaries = document.getElementById("barChartBeneficiaries").getContext('2d');
	var myChart1 = new Chart(schemeWiseBeneficiaries, {
    type: 'pie',
    data: {
        labels:  <?php 
            echo '[';
            foreach($beneficiariesForScheme as $record)
            {
            	echo '"'.$record->disease_name.',"';

            }
            echo ']';
            ?>,
        datasets: [{
            label: 'Diseases covered in each scheme',
            data: <?php 
            echo '[';
            foreach($beneficiariesForScheme as $record)
            {
            	echo $record->scheme_count.',';

            }
            echo ']';
            ?> ,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});


	var schemeWiseBeneficiaries = document.getElementById("barChartBeneficiaries").getContext('2d');
	var myChart1 = new Chart(schemeWiseBeneficiaries, {
    type: 'pie',
    data: {
        labels:  <?php 
            echo '[';
            foreach($beneficiariesForScheme as $record)
            {
            	echo '"'.$record->disease_name.'",';

            }
            echo ']';
            ?>,
        datasets: [{
            label: 'Diseases covered in each scheme',
            data: <?php 
            echo '[';
            foreach($beneficiariesForScheme as $record)
            {
            	echo $record->scheme_count.',';

            }
            echo ']';
            ?> ,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

</script>