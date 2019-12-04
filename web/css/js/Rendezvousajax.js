
var searchRequest = null;
$("#nomdocteur").keyup(function() {
    $('#err').css('display', 'none');
    var minlength = 1;
    var that = this;
    var value = $(this).val();
    var entitySelector = $("#tb").html('');
    if (value.length >= minlength ) {
        if (searchRequest != null)
            searchRequest.abort();
        searchRequest = $.ajax({
            type: "GET",
            // url: "{{ path('rappelrdv_ajax') }}",
            url: 'http://localhost/pi_dev/web/app_dev.php/rappelrdv/ajax/'+$(this).val(),
            //dataType: "jsonp",
            dataType: "text",
            success: function(msg){
                //we need to check if the value is the same
                if (value===$(that).val()) {
                    var result = JSON.parse(msg);
                    $.each(result, function(key, arr) {
                        $.each(arr, function(id, value) {
                            if (key === 'rendezvous') {
                                if (id !== 'error') {
                                    entitySelector.append('<tr><td>'+value['id']+'</td><td>'+
                                        value['Nomdocteur']+'</td><td>'+value['Tel']+'</td><td>'+value['Adresse']+
                                        '</td><td>' +value['date']+'</td><td>'+ value['Heure']+'</td><td>'+
                                        value['Specialite']+'</td> <td> <ul><li><a class="ui inverted primary button" href=\"/pi_dev/web/app_dev.php/rappelrdv/'+value['id']+'/edit\">'+'Modifier'
                                        +' </li></a>' +' </br><li><a class="ui inverted red button" href=\"/pi_dev/web/app_dev.php/rappelrdv/'+value['id']+'/delete\">'+'Supprimer'
                                        +'</li></a></br><li><a class="ui inverted green button" id=\"sms\" href=\"/pi_dev/web/app_dev.php/rappelrdv/'+value['id']+'/send\">'+'SMS'
                                        +'</li></ul></a></tr>'


                                    );
                                } else {
                                    Swal.fire({
                                        type: 'error',
                                        title: 'Oops...',
                                        text: 'Pas de resultat!'
                                    });
                                }
                            }
                        });
                    });
                }
            }
        });
    }
});




