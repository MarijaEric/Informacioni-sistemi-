<!DOCTYPE html>

<?php

?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title></title>
    <meta name="generator" content="LibreOffice 7.4.2.3 (Linux)"/>
    <meta name="created" content="00:00:00"/>
    <meta name="changed" content="00:00:00"/>
    <style type="text/css">
        @page {
            size: 8.5in 11in;
            margin: 0.79in
        }

        p {
            line-height: 115%;
            margin-bottom: 0.1in;
            background: transparent
        }

        pre {
            font-family: "Liberation Mono", monospace;
            font-size: 10pt;
            background: transparent
        }
    </style>
</head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<script type="text/javascript">
    document.getElementById("loginbtn").onclick = function () {
        location.href = "user.html";
    };
</script>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <div class="card my-5">

                <form class="card-body cardbody-color p-lg-5">

                    <div class="text-left">
                        <img src="https://viforpharma-pro.de/themes/custom/vifor_hub/dist/img/icons/Patient.svg"
                             class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                             width="100px" alt="profile">
                    </div>
                    <div class="text-left">
                        <b>Atlantik Štark d.o.o Beograd</b>
                    </div>

                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" href="/klijent">Informacije o korisniku</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/aktivne-narudzbine">Aktivne porudžbine</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link active" href="/istorija-porudzbina">Istorija porudžbina</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/naruci">Naruči</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">

                            <br>
                            <div class="text-left">
                                <?php foreach ($orders as $order): ?>

                                <div class="order">
                                    <button type="button" class="<?php echo str_starts_with($order->status,'Ispo') ? 'btn btn-success' : 'btn pull left btn-danger'  ?>">
                                        Narudžbina <?php echo $order->id ?></button>
                                    <br>
                                    <br>
                                    <div class="form-group row">
                                        <label for="adresabtn" class="col-sm-2 col-form-label">Adresa</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" id="adresabtn"
                                                   value="<?php echo $order->adresa ?>">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-5">
                                            <input type="text" readonly class="form-control"
                                                   value="<?php echo $order->status ?>">
                                        </div>
                                        <label class="col-sm-2 col-form-label">Količina</label>
                                        <div class="col-sm-3">
                                            <input type="text" readonly class="form-control"
                                                   value="<?php echo $order->kolicina ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Datum</label>
                                        <div class="col-sm-8">
                                            <input type="text" readonly class="form-control"
                                                   value="<?php echo $order->datum_narucivanja ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Datum isporuke</label>
                                        <div class="col-sm-8">
                                            <input type="text" readonly class="form-control"
                                                   value="<?php echo $order->datum_isporuke?>">
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <?php endforeach; ?>

                            </div>


                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</html>


