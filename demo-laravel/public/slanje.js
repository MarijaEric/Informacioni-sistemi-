let dugme = document.querySelector('#slanje');
dugme.addEventListener("click", function (e){
    e.preventDefault();
    let kolicina = document.querySelector('#MB').value + " kg";
    let napomena = document.querySelector("#exampleFormControlTextarea1").value;
    let adresaField = document.querySelector(".form-select.form-select-lg.col-sm-9.mb-2");
    let adresaVrednost = adresaField.value;
    let adresa = adresaField.options[adresaField.selectedIndex].text;
    //jquery ajax call to /slsanje-narudzbine with data adresa,kolicina
    $.ajax({
        url: '/slanje-narudzbine',
        type: 'POST',
        //CSRF token
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            "_token": "{{ csrf_token() }}",
            'adresa': adresa,
            'kolicina': kolicina,

        }
    }).done(function (data) {
        alert('Uspesno ste poslali narudzbinu !');
        window.location.href = "/aktivne-narudzbine";
    });

});
