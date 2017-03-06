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
    	<div class="container main-pageWrapper archive">
    		<div class="archive__header">	
    			<div class="row">
    				<div class="col-md-12">
    					<h1 class="archive__heading">Archive</h1>
    				</div>
    			</div>
    		</div>
            <div class="archive__dateOption">
                <div class="row">
                    <div class="col-md-6">                        
                        <input type="date" class="form-control dateOption"/>
                    </div>
                    <div class="col-md-6">
                        <span class="preDateSelected">Showing results for: </span><p class="dateSelected">12/02/2017</p>
                    </div>
                </div>
            </div>
            <div class="archive_results">
                <div class="row archive_resultsRow">
                    <div class="col-md-6 col-sm-6 archive_result">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img class="resultImg" src="img/item1.jpg" />
                            </div>                        
                            <div class="col-md-6 col-sm-6">
                                <h1 class="result__foodName">Hamburger</h1>
                                <div class="result__details">
                                    <p><span class="fa fa-calendar"></span>10/12/2017</p>
                                    <p><span class="fa fa-clock-o"></span>9:58 A.M</p>
                                    <p><span class="fa fa-smile-o"></span>sad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 archive_result">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img class="resultImg" src="img/item2.jpg" />
                            </div>                        
                            <div class="col-md-6 col-sm-6">
                                <h1 class="result__foodName">Lechon Manok</h1>
                                <div class="result__details">
                                    <p><span class="fa fa-calendar"></span>10/12/2017</p>
                                    <p><span class="fa fa-clock-o"></span>9:58 A.M</p>
                                    <p><span class="fa fa-smile-o"></span>sad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 archive_result">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img class="resultImg" src="img/item3.jpg" />
                            </div>                        
                            <div class="col-md-6 col-sm-6">
                                <h1 class="result__foodName">Pizza</h1>
                                <div class="result__details">
                                    <p><span class="fa fa-calendar"></span>10/12/2017</p>
                                    <p><span class="fa fa-clock-o"></span>9:58 A.M</p>
                                    <p><span class="fa fa-smile-o"></span>sad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 archive_result">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img class="resultImg" src="img/item4.jpg" />
                            </div>                        
                            <div class="col-md-6 col-sm-6">
                                <h1 class="result__foodName">Sundae</h1>
                                <div class="result__details">
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
</body>
</html>