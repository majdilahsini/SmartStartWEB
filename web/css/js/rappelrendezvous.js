$(document).ready(function() {
    var entitySelector = $("#tb").html('');
    $.ajax({
        type: "GET",
        // url: "{{ path('rappelrdv_ajax') }}",
        url: 'http://localhost/pidev-3a13-symfony-happy-olds-git/web/app_dev.php/rappelrdv/rdvall',
        //dataType: "jsonp",
        dataType: "text",
        success: function(msg){
            //we need to check if the value is the same
            var result = JSON.parse(msg);
            $.each(result, function(key, arr) {
                $.each(arr, function(id, value) {
                    if (key === 'rendezvous') {
                        if (id !== 'error') {
                            entitySelector.append('<tr><td>'+value['id']+'</td><td>'+
                                value['Nomdocteur']+'</td><td>'+value['Tel']+'</td><td>'+value['Adresse']+
                                '</td><td>' +value['date']+'</td><td>'+ value['Heure']+'</td><td>'+
                                value['Specialite']+'</td> <td> <ul><li><a class="ui inverted primary button" href=\"/pidev-3a13-symfony-happy-olds-git/web/app_dev.php/rappelrdv/'+value['id']+'/edit\">'+'Modifier'
                                +' </li></a>' +'</br><li><a class="ui inverted red button" href=\"/pidev-3a13-symfony-happy-olds-git/web/app_dev.php/rappelrdv/'+value['id']+'/delete\">'+'Supprimer'
                                +'</li></ul></a></tr>'








                            );
                        } else {

                        }
                    }
                });
            });

        }
    });

});





