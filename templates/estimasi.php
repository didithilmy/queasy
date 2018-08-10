<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Queasy | Estimasi Antrian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>/static/css/queasy.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?=BASE_URL?>/static/js/estimasi.js"></script>
</head>
<body style="background-color:#a3e7ed">

	<nav class="navbar navbar-expand-lg navbar-dark navbar-queasy">
	    <div class="container" style="margin-left:0px">
	    	<div class="col-sm-12">
	        	<i class="fas fa-bars size-menu" id="menubar"></i>
	        	<a href="#" class="logo-estimasi"><img src="<?=BASE_URL?>/static/img/logo-white-l.svg" height="30" /></a>
	    	</div>
	    </div>
	</nav>

	<div class="row" style="width:100%">
		<div class="kotak-estimasi">
			<h1 id="tulisanantri">NOMOR ANTRIAN</h1>
			<div style="font-size:90px" id="tulisanantri">01423</div>
		</div>
	</div>
	
	<div class="row" style="width:100%">
		<div class="kotak-estimasi">
			<h1 id="tulisanantri">ESTIMASI WAKTU</h1>
			<div style="font-size:90px" id="tulisanantri">01 : 00 : 23</div>
		</div>
	</div>
	<div class="dropdown" id="ddmenu" style="padding-top:60px">
		<button class="btn btn-outline-light my-2 my-sm-0" type="submit" id="logout-estimasi">LOG OUT</button>
		<div class="row">
				<div class="col-sm-1"></div>
                <i class="fas fa-user-circle" id="userlogo" style="margin-top:0px"></i>
				<div class="col-sm-8"></div>
        </div>
		<div class="row" style="width:100%" >
                <h4 class="col-sm-2 margin-estimasi">Salma Fedora</h4>
        </div>
		<div class="row" style="width:100%">
                <h4 class="col-sm-1 margin-estimasi">STEI</h4>
        </div>
	</div>

	<div class="back-grey" id="bgrey" style="opacity:0.5">
	</div>

</body>
</html>