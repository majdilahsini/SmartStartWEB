$("#sms").click(function() {
    $.ajax({
        type: "GET",
        url: 'http://localhost/pi_dev/web/app_dev.php/rappelrdv/dateajax/' + $("#nomdocteur").val() + '/send',
        //dataType: "jsonp",
        dataType: "text",
        success: function(msg){
            //we need to check if the value is the same
            var result = JSON.parse(msg);
            $.each(result, function(key, arr) {
                $.each(arr, function(id, value) {
                    if (key === 'rendezdate') {
                        if (id !== 'error') {



                            );
                        } else {
                            $('#err').css('display', '')
                        }
                    }
                });
            });

        }
    });

});





