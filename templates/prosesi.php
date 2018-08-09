<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Queasy Kiosk</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>/static/css/queasy.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?=BASE_URL?>/static/js/kiosk.js"></script>
    </head>

    <body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-queasy">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?=BASE_URL?>/static/img/logo-white-l.svg" height="30" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">BANTUAN</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container" style="padding-top:30px">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-2">
                <i class="fas fa-user-circle" id="userlogo"></i>
            </div>
            <div class="col-sm-4">
                <h2>SALMA FEDORA</h2>
                <h1>STEI</h1>
                <h2>SMAN 6 CIREBON</h2>
                <h2>012345678</h2>
            </div>
        </div>
    </div>

    <div class="row" id="background">
         <div align="center" id="noantrian" style="margin-top:20px">
            <h4 class="hd">NO. ANTRIAN</h4>
            <h3 class="hd" style="font-size: 60px;">012345678</h3>
        </div>

        <div class="row">
            <div class="slider">

            </div>
        </div>
    </div>
</html>