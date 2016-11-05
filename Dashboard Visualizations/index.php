<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/highcharts-3d.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


<div class = "container">
	<div class = "row">
		<div class = "col-md-12">
			<div id = "chart1">
			</div>
		</div>
	</div>
</div>
<?php include 'data.php'; ?>
<script>
	$(document).ready(function(){
var chart2opt=
{
          chart: {
                      type: 'line',
                      renderTo:'chart1',
                      zoomType:'x',
                      borderWidth:0
                  },
          title: {
              text: ' title '
          },
          subtitle: {
              text: ' '
          },
          xAxis: {
              categories:[]
          },
          yAxis: {
              title: {
                  text: ' '
              }
          },
		credits:{enabled:false},
          tooltip:{
            shared:true,
            // formatter:function(){
            //   return "<b>Date:  </b>" + this.point.name + "<br>Number Of Users:<b>  " + this.y + "</b> ";
            // }
          },
          plotOptions: {
              line: {
                  dataLabels: {
                      enabled: false
                  },
                  //enableMouseTracking: false
              }
          },
          series: [
            {
              name : 'Col2',
              data : [],
			

            },
			  {
              name : 'Col3',
              data : [],

            }
			 
          ]
}
$.getJSON("data.php?opt=xvalues",function(json){
	chart2opt.xAxis.categories = json; 
	chart = new Highcharts.Chart(chart2opt);
});
$.getJSON("data.php?opt=y",function(json){
	chart2opt.series[0].data = json; 
	chart = new Highcharts.Chart(chart2opt);
});
$.getJSON("data.php?opt=z",function(json){
	chart2opt.series[1].data = json; 
	chart = new Highcharts.Chart(chart2opt);
});

});

</script>