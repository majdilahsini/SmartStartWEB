$("#date").click(function() {
    var entitySelector = $("#tb").html('');
    var params = {
        url: ""
    };

    if($("#nomdocteur").val()!=""){
        params.url='http://localhost/pidev-3a13-symfony-happy-olds-git/web/app_dev.php/rappelrdv/dateajax/' + $("#nomdocteur").val() + '/' + $("#date").val();
    }
    else{
        params.url='http://localhost/pidev-3a13-symfony-happy-olds-git/web/app_dev.php/rappelrdv/dateonly/'+ $("#date").val();

    }


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
                    if (key === 'rendezdate') {
                        if (id !== 'error') {
                            entitySelector.append('<tr><td>'+value['id']+'</td><td>'+
                                value['Nomdocteur']+'</td><td>'+value['Tel']+'</td><td>'+value['Adresse']+
                                '</td><td>' +value['date']+'</td><td>'+ value['Heure']+'</td><td>'+
                                value['Specialite']+'</td> <td> <ul><li><a class="ui inverted primary button" href=\"/pi_dev/web/app_dev.php/rappelrdv/'+value['id']+'/edit\">'+'Modifier'
                                +' </li></a>' +' </br><li><a class="ui inverted red button" id=\"del\" href=\"/pi_dev/web/app_dev.php/rappelrdv/'+value['id']+'/delete\">'+'Supprimer'
                                +'</li></a><li><a class="ui inverted green button" href=\"/pi_dev/web/app_dev.php/rappelrdv/'+value['id']+'/send\">'+'SMS'
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
    });

});





