<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Queasy | Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>/static/css/queasy.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container" style="margin-top:10%">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<a href="#" class="logo-login"><img src="<?=BASE_URL?>/static/img/logo-white-l.svg" height="120" /></a>
			</div>
		</div>
		<div class="row queasy-login">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<form class="my-2 my-lg-0" action="<?=BASE_URL?>/estimasi" method="POST">
					<div class="form-group">
					  <input type="text" class="form-control" name="no_regis" placeholder="No Registrasi">
					</div>
					<center>
						<div class="form-group">
		                	<button class="btn btn-outline-light my-2 my-sm-0" type="submit">LOGIN</button>
		                </div>
		            </center>
	            </form>
	        </div>
            <div class="col-sm-4"></div>
		</div>
	</div>
</body>



</html>
