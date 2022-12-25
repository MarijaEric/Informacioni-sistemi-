let buttons = document.querySelectorAll('#otkaz-button');
buttons.forEach(function (button) {
    button.addEventListener("click", function (e) {
        e.preventDefault();
        let id = button.name;
        console.log(id);
        $.ajax({
            url: '/otkazivanje-narudzbine',
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
            alert('Uspesno ste otkazali narudzbinu !');
            window.location.href = "/aktivne-narudzbine";
        });
    });
});
