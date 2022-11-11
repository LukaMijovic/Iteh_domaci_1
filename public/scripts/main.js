$("#addPlayerForm").submit(function () {
    event.preventDefault();

    //console.log(this);
    
    const $form = $(this);
    //const $inputs = $form.find("input, input, input, input, input, input, input, input");
    const $serz = $form.serialize();
    //console.log($serz);

    request = $.ajax({
        url: "../../handler/add.php",
        type: "post",
        data: $serz
    });

    request.done(function (res, status, jqXHR) {
        console.log(res);
        if (res === "Success") {
            alert("Igrace je dodat!");
            $(location).attr('href','home.php');
        }
        else if(res === "Fail"){
            alert("Igrac nije dodat!");
            location.reload(true);
        } 
        else {
            alert("Zahtev nije ni poslat");
        }
    });

    request.fail(function (jqXHR, status, error) {
        
    });
});

