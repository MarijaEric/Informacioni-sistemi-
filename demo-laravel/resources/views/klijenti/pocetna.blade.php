@extends('layouts.app', ['pageSlug' => 'dashboard'])



@section('content')

    <div class="row">
        <div class="col-lg-10 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Kompanije</h4>
                </div>


                <div class="card-body">

                    <?php foreach ($clients as $order): ?>
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Naziv kompanije</label>
                        <div class="col-sm-5">
                            <input type="text" readonly class="form-control"
                                   placeholder="<?php echo $order->company_name ?>">
                        </div>
                        <label class="col-sm-2 col-form-label">MB kompanije</label>
                        <div class="col-sm-3">
                            <input type="text" readonly class="form-control"
                                   placeholder="<?php echo $order->company_mb ?>">
                        </div>


                    </div>
                    <div class="form-group row">
                        <label for="adresabtn" class="col-sm-2 col-form-label">Adresa sedišta kompanije</label>
                        <div class="col-sm-5">
                            <input type="text" readonly class="form-control" id="adresabtn"
                                   placeholder="<?php echo $order->company_address ?>">
                        </div>
                        <label class="col-sm-2 col-form-label">Grad</label>
                        <div class="col-sm-3">
                            <input type="text" readonly class="form-control"
                                   placeholder="<?php echo $order->company_city ?>">
                        </div>

                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Poštanski broj</label>
                        <div class="col-sm-5">
                            <input type="text" readonly class="form-control"
                                   placeholder="<?php echo $order->company_zip ?>">
                        </div>
                        <label class="col-sm-2 col-form-label">Broj aktivnih magacina</label>
                        <div class="col-sm-3">
                            <input type="text" readonly class="form-control"
                                   placeholder="<?php echo $order->num_of_active_warehouses ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">PIB kompanije</label>
                        <div class="col-sm-5">
                            <input type="text" readonly class="form-control"
                                   placeholder="<?php echo $order->company_pib ?>">
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <button type="button" id="otkaz-button" name=" <?php echo $order->id; ?> " class="btn pull left btn-info">
                                Izbriši
                            </button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
                <script>
                    let buttons = document.querySelectorAll('#otkaz-button');

                    buttons.forEach(function (button) {
                        button.addEventListener("click", function (e) {
                            console.log('dafuq')
                            e.preventDefault();
                            let id = button.name;
                            console.log(id);
                            $.ajax({
                                url: '/brisanje-klijenta',
                                type: 'POST',
                                //CSRF token
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    'id': id,
                                }
                            }).done(function (data) {
                                alert('Uspesno ste izbrisali klijenta!');
                                window.location.href = "/klijenti";
                            });
                        });
                    });
                </script>

                <hr>
            </div>
        </div>
    </div>
    </div>
@endsection

<script-foo
<script type="text/javascript" src="otkazi-klijenta.js"></script>

