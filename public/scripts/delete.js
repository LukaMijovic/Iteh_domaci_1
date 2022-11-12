$("#deletePlayerForm").submit(function (){
    event.preventDefault();

    const $form = $(this);
    const $serz = $form.serialize();
    console.log($serz);

    $request = $.ajax({
        url: "../../handler/delete.php",
        method: "post",
        data: $serz
    });

    $request.done(function (res){
        if (res === "Success") {
            alert("Igrac je obrisan!");
            $(location).attr('href','home.php');
        }
        else if (res === "Fail") {
            alert("Igrac nije obrisan!");
        }
        else {
            alert("Zahtev nije poslat!");
        }
    });

});