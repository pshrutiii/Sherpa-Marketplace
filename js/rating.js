
$(function () {
    $( ".tabs-content").tabs();

    var id = $('.rate').attr('id');
    var tempVal = getCookie("star", id);
    if (tempVal != 0) {
        $('.rate').rating('rate', tempVal);
        $('.rate').attr('data-readonly', '');
    }
    function getCookie(cname, url) {
        var val = $.cookie(cname);
        console.log(cname);
        console.log(val);
        if (val) {
            console.log("Reading cookie " + cname);
            console.log("Cookie value: " + val);
            var ca = val.split('+');
            for (var i = 0; i < ca.length; i++) {

                if (ca[i].indexOf(url) !== -1) {
                    //echo 'true';
                    return ca[i].split(';')[1];
                }
            }
            return 0;
        }
        return 0;
    }

    $('.rate').rating({
        extendSymbol: function () {

            $(this).tooltip({
                container: 'body',
                placement: 'bottom',
                title: 'Rate this service'
            });

            //$(this).on('rating.rateleave', function () {
            $('.rate').on('change', function () {
                //alert("hello");

                var ratingVal = getCookie("star", id);
                console.log("Rating value: " + ratingVal);
                if (ratingVal != 0) {
                    $('.rate').rating('rate', ratingVal);
                    $('.rate').attr('data-readonly', '');
                    // alert("You have rated this item already");
                    return;

                }


                var rate = $('.rate').rating('rate');
                $("#dialog-confirm").dialog({
                    resizable: false,
                    height: "auto",
                    width: 400,
                    modal: true,
                    buttons: {
                        "Confirm": function () {
                            $(this).dialog("close");
                            $(this).tooltip('hide');
                            title = "This service has been rated";

                            console.log(id);
                            $.ajax({
                                url: 'services/rate.php',
                                type: 'post',
                                data: { 'action': 'rate', 'id': id, 'rating': rate },
                                success: function (data, status) {
                                    console.log(data);
                                    if (data == "ok") {
                                        //console.log(data);
                                        console.log("Readonly");
                                        $('.rate').attr('data-readonly', '');

                                        var temp = id + ";" + rate + "+";
                                        $.cookie("star", temp);

                                        //  $('.rate').rating(data);
                                    }
                                },
                                error: function (xhr, desc, err) {
                                    console.log(xhr);
                                    console.log("Details: " + desc + "\nError:" + err);
                                }
                            }); // end ajax call
                        },
                        Cancel: function () {
                            $(this).dialog("close");
                            console.log("Close");
                            $('.rate').rating('rate', '');

                        }
                    }
                });
            });
        }
    });
} ());