//console.log("Uradio!");
$(".col-sort").click(function () {
    //event.preventDefault();
    const $colName = $(this).attr("id");
    const $order = $(this).data("order");
    console.log($colName);
    console.log(this)

    $request = $.ajax({
        url: "../../handler/sort.php",
        method: "post",
        data: {
            colName: $colName,
            colOrder: $order
        },
        // success: function (res) {
        //     console.log(res);
        //     $("#player-table").html(res);
        // }
    });

    //$(location).attr('href','home.php');

    $request.done(function (res) {
        //console.log(res);
        $("#player-table").html(res);
    });
});


$(".test").click(function (){
    console.log("Hello!");
});

// let i = 0;
// while (true) {
//     console.log(i++);
// }

