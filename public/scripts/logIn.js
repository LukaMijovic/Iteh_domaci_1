$("#log-in").submit(function () {
    event.preventDefault();

    const $form = $(this);
    const $serz = $form.serialize();

    request = $.ajax({
        url: "../../handler/logIn.php",
        type: "post",
        data: $serz
    });

    request.done(function (res) {
        if (res === "Success") {
            alert("Uspesno ste se prijavili!");
            //$(location).attr('href','home.php');
        }
        else if (res === "Fail") {
            alert("Proverite da li ste ispravno uneli podatke");
        }
    });
});