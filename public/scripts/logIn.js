$("#log-in").submit(function () {
    event.preventDefault();

    const $form = $(this);
    const $serz = $form.serialize();
    console.log($serz);

    request = $.ajax({
        url: "./handler/logIn.php",
        method: "post",
        data: $serz
    });



    request.done(function (res) {
        if (res === "Success") {
            alert("Uspesno ste se prijavili!");
            $(location).attr('href','./public/pages/home.php');
        }
        else if (res === "Fail") {
            alert("Proverite da li ste ispravno uneli podatke");
        }
        //console.log(res);
    });
});