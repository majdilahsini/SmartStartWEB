$("#date").click(function() {
    var entitySelector = $("#tb").html('');
    var params = {
        url: ""
    };

    if($("#time1").val()!="" && $("#time2").val()!=""){
        params.url='http://localhost/pi_dev/web/app_dev.php/dispo/dateajax/'+$("#date").val()+'/'+$("#time1").val()+'/'+$("#time2").val();
    }
    else{
        params.url='http://localhost/pi_dev/web/app_dev.php/dispo/dateonly/'+ $("#date").val();

    }
//OVqtMx8XZc7Ky6iWBdlLnAc9A2BN8z4lSbfHUblu
//95fbfb23bf649f24b897d7b196c53369
    $.ajax({
        type: "GET",
        // url: "{{ path('rappelrdv_ajax') }}",
        url:  params.url,
        //dataType: "jsonp",
        dataType: "text",
        success: function(msg){
            //we need to check if the value is the same
            var result = JSON.parse(msg);
            $.each(result, function(key, arr) {
                $.each(arr, function(id, value) {
                    if (key === 'disponibilite') {
                        if (id !== 'error') {
                            entitySelector.append('<tr><td>'+value['id']+'</td><td>'+
                                value['adresse']+'</td><td>'+value['date']+
                                '</td><td>' +value['HeureDebut']+'</td><td>'+ value['HeureFin']+'</td><td>'+value['nom']+'</td> <td>'+value['tel']+'</td> <ul><li><a class="ui inverted primary button" href=\"/pi_dev/web/app_dev.php/rappelrdv/'+value['id']+'/edit\">'+'Modifier'
                                +' </li></a>' +' </br><li><a class="ui inverted red button" href=\"/pi_dev/web/app_dev.php/rappelrdv/'+value['id']+'/delete\">'+'Supprimer'
                                +'</li></ul></a></tr>'


                            );
                        } else {
                            Swal.fire({
                                type: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                                footer: '<a href>Why do I have this issue?</a>',
                                timer: 1500
                            });
                        }
                    }
                });
            });

        }
    });

});





