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
    	<div class="container main-pageWrapper addEntry">
    		<div class="addEntry__header">	
    			<div class="row">
    				<div class="col-md-12">
    					<h1 class="addEntry__heading">Add Entry</h1>
    				</div>
    			</div>
    		</div>
    		<div class="addEntry__step">
    			<div class="row">
    				<div class="col-md-12">
    					<span class="step1__num">1</span>
    					<h2 class="step1__name">Select Emotion</h2>
    					<div class="row">
    						<div class="col-md-6">
    							<img src="img/circumplex.png" class="step1__circumplex" />
    						</div>
    						<div class="col-md-6 step1__emotion">
    							<p class="step1__head">You are . . .</p>
    							<p class="step1__selected">HAPPY</p>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="addEntry__step">
    			<div class="row">
    				<div class="col-md-12">
    					<span class="step2__num">2</span>
    					<h2 class="step2__name">Choose Photo </h2>
    				</div>
    				<div class="row">
    					<div class="col-md-6 step2__nameButtons">
    						<input type="text" class="form-control" placeholder="Enter food name . . ." />
    						<div class="step2__photoOption">
	    						<label for="file-photo" class="custom-file-take">
								    <i class="fa fa-camera"></i> Take Photo
								</label>
								<input type="file" id="file-photo" accept="image/*" capture="camera" onchange="loadFile(event)">
								<label for="file-select" class="custom-file-select">
								    <i class="fa fa-cloud-upload"></i> Select Photo
								</label>
								<input id="file-select" type="file" onchange="loadFile(event)"/>
							</div>
    					</div>
    					<div class="col-md-6" style="text-align: center">
    						<img src="img/image-preview.png" id="output" class="step2__imgpreview" />
    					</div>
    				</div>
    			</div>
    		</div>

    		<div class="addEntry__step">
    			<div class="row">
    				<div class="col-md-12">
    					<span class="step3__num">3</span>
    					<h2 class="step3__name">Date Taken</h2>
    					<p class="step3__note"><span style="font-weight: bold">Note:</span> Default time is current time.</p>
    					<input type="datetime-local" class="form-control dateTaken"/>
    				</div>
    			</div>
    		</div>
    		<div class="row submitEntrySection">
    			<div class="col-md-12">
    				<a href="#" class="submitEntry">submit entry</a>
    			</div>
    		</div>
    	</div>
    </section>

<script>
	var loadFile = function(event) {
		var reader = new FileReader();
		reader.onload = function(){
			var output = document.getElementById('output');
			output.src = reader.result;
		};
		reader.readAsDataURL(event.target.files[0]);
	};
</script>
</body>
</html>