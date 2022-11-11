$("document").ready(function() {
    $(".col-sort").click(function () {
        //event.preventDefault();
        const $colName = $(this).attr("id");
        const $order = $(this).data("order");
        console.log($colName);
    
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
    
        $request.done(function (res) {
            console.log(res);
            $("#player-table").html(res);
        });
    });
});

