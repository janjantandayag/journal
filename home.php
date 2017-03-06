<!DOCTYPE html>
<html>
<head>
	<?php include('section/header-links.php'); ?>
	<title>Home</title>
</head>
<body>
	<section id="top-nav">
        <div class="container">
            <div class="top-nav__right">
            	<img src="img/logo.png" class="top-nav__logo">
            </div>
            <ul class="top-nav__lists">
                <li class="top-nav__active">
	                <a href="home.php" class="top-nav__list"><span class="fa fa-home"></span>Home</a>
                </li>
                <li>                	
                	<a href="archive.php" class="top-nav__list"><span class="fa fa-calendar"></span>Archive</a>
            	</li>
                <li>
                	<a href="add-entry.php" class="top-nav__list">
                	<span class="fa fa-plus"></span>Add New Entry</a>
                </li>
                <li>
                	<a href="#" class="top-nav__list">
                	<span class="fa fa-user"></span>Jan-Jan</a>
                </li>
            </ul>
            <div class="mobile">
            	<a href="javascript:void(0);" onclick="displayNav();" class="mobile__navicon" id="navIcon"><span class="fa fa-plus"></span></a>
            	<div class="display-none" id="mobileNav">
            		<a href="home.php">Home</a>
            		<a href="archive.php">Archive</a>
            		<a href="add-entry.php">Add New Entry</a>
            	</div>
            </div>
        </div>
    </section>
    <section id="main-page">
    	<div class="container main-pageWrapper recentItems">
    		<div class="visualization">
    			<div class="row">
    				<div class="col-md-12">
    					<div id="chart_div" class="barChart"></div>
    				</div>
    			</div>
    		</div>
    		<div class="recentItems__header">	
    			<div class="row">
    				<div class="col-md-12">
    					<h1 class="recentItems__heading">Recent Entries</h1>
    				</div>
    			</div>
    		</div>
    		<div class="recentItem">
    			<div class="row recentItemRow">
    				<div class="col-md-4 col-sm-4 col-xs-12 recentItem__hover">
    					<div class="row">
    						<div class="col-md-6">
    							<img class="recentItem__img" src="img/item1.jpg" />
    						</div>
    						<div class="col-md-6">
    							<h1 class="recentItem__foodName">Hamburger</h1>
			    				<div class="recentItem__details">
			    					<p><span class="fa fa-calendar"></span>10/12/2017</p>
			    					<p><span class="fa fa-clock-o"></span>9:58 A.M</p>
			    					<p><span class="fa fa-smile-o"></span>sad</p>
			    				</div>
    						</div>
    					</div>
    				</div>
    				<div class="col-md-4 col-sm-4 col-xs-12 recentItem__hover">
    					<div class="row">
    						<div class="col-md-6">
    							<img class="recentItem__img" src="img/item2.jpg" />
    						</div>
    						<div class="col-md-6">
    							<h1 class="recentItem__foodName">Lechon Manok</h1>
			    				<div class="recentItem__details">
			    					<p><span class="fa fa-calendar"></span>10/12/2017</p>
			    					<p><span class="fa fa-clock-o"></span>9:58 A.M</p>
			    					<p><span class="fa fa-smile-o"></span>sad</p>
			    				</div>
    						</div>
    					</div>
    				</div>
    				<div class="col-md-4 col-sm-4 col-xs-12 recentItem__hover">
    					<div class="row">
    						<div class="col-md-6">
    							<img class="recentItem__img" src="img/item3.jpg" />
    						</div>
    						<div class="col-md-6">
    							<h1 class="recentItem__foodName">Pizza</h1>
			    				<div class="recentItem__details">
			    					<p><span class="fa fa-calendar"></span>10/12/2017</p>
			    					<p><span class="fa fa-clock-o"></span>9:58 A.M</p>
			    					<p><span class="fa fa-smile-o"></span>sad</p>
			    				</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
<script src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  // Load the Visualization API and the corechart package.
  google.charts.load('current', {'packages':['corechart']});
  // Set a callback to run when the Google Visualization API is loaded.
  google.charts.setOnLoadCallback(drawChart);
  // Callback that creates and populates a data table,
  // instantiates the pie chart, passes in the data and
  // draws it.
  function drawChart() {
    // Create the data table.
      var data = google.visualization.arrayToDataTable([
         ['Element', 'Density', { role: 'style' }],
         ['Sad', 8.94, '#f3b50d'],            // RGB value
         ['Happy', 10.49, '#fcc633'],            // English color name
         ['Loved', 19.30, '#d29a02'],
   		 ['Stressed', 21.45, 'color: #fad163' ],
         ['Trust', 2, 'color: #e3c269' ], // CSS-style declaration
      ]);

  var options = {
    title: 'FOOD INTAKE BASED ON YOUR EMOTION',
    hAxis: {
      title: 'Name of Emotion',
    },
    vAxis: {
      title: 'Food Consumed'
    }
  };

  var chart = new google.visualization.ColumnChart(
    document.getElementById('chart_div'));

  chart.draw(data, options);
  }
  $(window).resize(function(){
	  drawChart();
	});
</script>
</body>
</html>