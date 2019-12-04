$("#date").click(function() {

    var entitySelector = $("#tb").html('');





    $.ajax({
        type: "GET",

        url: 'http://localhost/pi_dev/web/app_dev.php/organisation/dateajax/' + $("#nom").val() + '/' + $("#date").val(),
        //dataType: "jsonp",
        dataType: "text",
        success: function(msg){
            //we need to check if the value is the same
            var result = JSON.parse(msg);
            $.each(result, function(key, arr) {
                $.each(arr, function(id, value) {
                    if (key === 'organs') {
                        if (id !== 'error') {
                            entitySelector.append('<tr><td>'+value['id']+'</td><td>'+
                                value['Nom']+'</td><td>'+value['Tel']+'</td><td>'+value['Adresse']+
                                '</td><td>' +value['date']+'</td><td>'+ value['type']+'</td><td>' +
                                ' <ul><li><a class="ui inverted primary button" href=\"/pi_dev/web/app_dev.php/organisation/'+value['id']+'/edit\">'+'Modifier'
                                +' </li></a>' +' </br><li><a class="ui inverted red button" href=\"/pi_dev/web/app_dev.php/organisation/'+value['id']+'/delete\">'+'Supprimer'
                                +' </li></a>' +' </br><li><a class="ui inverted red button" href=\"/pi_dev/web/app_dev.php/organisation/t/'+value['id']+'/delete\">'+'det'

                                +'</li></ul></a></tr>'


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
