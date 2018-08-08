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

<table style="position: absolute; width: 100%; height: 100%; left: 0; top: 0; z-index: -999;">
    <tr valign="middle">
        <td>
            <div style="position: relative; height: 620px;">
                <div id="intro">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h1 class="hd">Halo, maba-maba!</h1>
                                <h3>Selamat datang di pendaftaran ulang SNMPTN! Silahkan masukkan nomor registrasi SNMPTN di kolom sebelah.</h3>
                            </div>
                            <div class="col-md-5 text-center align-items-center">
                                <div class="input-group input-group-lg" style="max-width: 320px; margin: 0 auto">
                                    <input type="text" id="noreg" class="form-control" placeholder="No. Registrasi" aria-label="No. Registrasi" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-light bksp-btn" data-target="#noreg" type="button" id="button-addon2"><i class="fas fa-backspace"></i> </button>
                                    </div>
                                </div>
                                <div id="keypad">
                                    <table cellpadding="5">
                                        <tr valign="middle" align="center">
                                            <td><div class="keypad-btn ripple" data-target="#noreg" data-no="1">1</div></td>
                                            <td><div class="keypad-btn ripple" data-target="#noreg" data-no="2">2</div></td>
                                            <td><div class="keypad-btn ripple" data-target="#noreg" data-no="3">3</div></td>
                                        </tr>
                                        <tr valign="middle" align="center">
                                            <td><div class="keypad-btn ripple" data-target="#noreg" data-no="4">4</div></td>
                                            <td><div class="keypad-btn ripple" data-target="#noreg" data-no="5">5</div></td>
                                            <td><div class="keypad-btn ripple" data-target="#noreg" data-no="6">6</div></td>
                                        </tr>
                                        <tr valign="middle" align="center">
                                            <td><div class="keypad-btn ripple" data-target="#noreg" data-no="7">7</div></td>
                                            <td><div class="keypad-btn ripple" data-target="#noreg" data-no="8">8</div></td>
                                            <td><div class="keypad-btn ripple" data-target="#noreg" data-no="9">9</div></td>
                                        </tr>
                                        <tr valign="middle" align="center">
                                            <td></td>
                                            <td><div class="keypad-btn ripple" data-target="#noreg" data-no="0">0</div></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                                <button id="btn-submit" class="btn btn-lg btn-outline-light" type="button" style="margin-top: 32px; width: 100%; max-width: 320px;">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="details">
                    <div class="container">
                        <div id="udetails">
                            <h2 id="name"></h2>
                            <h3><span id="faculty">STEI</span> - <span id="rno"></span></h3>
                        </div>
                        <div align="center" id="noantrian">
                            <h4 class="hd">NO. ANTRIAN</h4>
                            <h1 class="hd" style="font-size: 60px;" id="qno"></h1>
                        </div>
                        <div align="center">
                            <button id="btn-reset" class="btn btn-lg btn-outline-light" type="button" style="margin-top: 32px; width: 100%; max-width: 400px;">RESET</button>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
</table>
</body>
</html>