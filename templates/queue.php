<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Queasy Queue</title>
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
  </nav>

  <div class="row full100">
    <div class="col-sm-2 fill1"></div>
    <div class="col-sm-3 queuetxt hd" >NOMOR ANTRIAN</div>
    <div class="col-sm-2 fill1"></div>
    <div class="col-sm-3 queuetxt hd">KONTER</div>
    <div class="col-sm-2 fill1"></div>
  </div>

  <div class="row full100">
    <div class="col-sm-2 fill1"></div>
    <div class="col-sm-3 queuenum hd" >100</div>
    <div class="col-sm-2 fill1"></div>
    <div class="col-sm-3 queuenum hd">K-05</div>
    <div class="col-sm-2 fill1"></div>
  </div>

  <div id="background">
    <div class="queuetitle hd">NOMOR ANTRIAN BERIKUTNYA</div>


  <div class="row full100">
    <div class="col-sm-2 fill2"></div>
    <div class="col-sm-2 queuenum2 hd">101</div>
    <div class="col-sm-1 fill2"></div>
    <div class="col-sm-2 queuenum2 hd">102</div>
    <div class="col-sm-1 fill2"></div>
    <div class="col-sm-2 queuenum2 hd">103</div>
  </div>

  <div class="row full100">
    <div class="col-sm-2 fill2"></div>
    <div class="col-sm-2 queuenum2 hd">104</div>
    <div class="col-sm-1 fill2"></div>
    <div class="col-sm-2 queuenum2 hd">105</div>
    <div class="col-sm-1 fill2"></div>
    <div class="col-sm-2 queuenum2 hd">106</div>
  </div>

</div>

</body>
</html>
