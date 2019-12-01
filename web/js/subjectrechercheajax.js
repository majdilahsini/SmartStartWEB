
$(document).ready(function() {

    $("#subject").keyup(function () {

        var entitySelector = $("#tb").html('');



        $.ajax({

        type: "GET",
            // url: "{{ path('rappelrdv_ajax') }}",
           url: 'http://127.0.0.1:8000/reclamation/subjectjax/' + $("#subject").val(),
            //dataType: "jsonp",
            dataType: "text",
            success: function (msg) {
                //we need to check if the value is the same
                var result = JSON.parse(msg);
                $.each(result, function (key, arr) {
                    $.each(arr, function (id, value) {
                        if (key === 'reclamation') {
                            if (id !== 'error') {
                                entitySelector.append('<tr><td>' + value['id'] + '</td><td>' +
                                    value['Subject'] + '</td><td>' +
                                    value['Object'] + '</td><td>' + value['id_user'] +
                                    '</td><td> <ul><li><a class="ui inverted primary button" href=\"/reclamation/' + value['id'] + '/edit\">' + 'Modifier'
                                    + ' </li></a>' + '</br><li><a class="ui inverted red button" href=\"/reclamation/' + value['id'] + '/delete\">' + 'Supprimer'
                                    + '</li></ul></a></tr>'
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
        });

    });
});







