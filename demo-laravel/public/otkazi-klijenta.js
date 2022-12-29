window.onload = function () {
    let buttons = document.querySelectorAll('#otkaz-button');

    console.log(buttons);
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
}

