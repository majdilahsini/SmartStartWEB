var searchRequest = null;
$("#time").keyup(function() {

    var params = {
        url: ""
    };

    if($("#nomdocteur").val()!="" && $("#date").val()!=""){
        params.url='http://localhost/pidev-3a13-symfony-happy-olds-git/web/app_dev.php/rappelrdv/timeajax/'+$("#nomdocteur").val()+'/'+$("#date").val()+'/'+$(this).val();
    }
    else{
        params.url='http://localhost/pidev-3a13-symfony-happy-olds-git/web/app_dev.php/rappelrdv/timeajax/'+$("#time").val();

    }
    var minlength = 1;
    var that = this;
    var value = $(this).val();
    var entitySelector = $("#tb").html('');
    if (value.length >= minlength ) {
        if (searchRequest != null)
            searchRequest.abort();
        searchRequest = $.ajax({
            type: "GET",
            url: params.url ,
            //dataType: "jsonp",
            dataType: "text",
            success: function(msg){
                //we need to check if the value is the same
                if (value===$(that).val()) {
                    var result = JSON.parse(msg);
                    $.each(result, function(key, arr) {
                        $.each(arr, function(id, value) {
                            if (key === 'rendezdate') {
                                if (id !== 'error') {
                                    entitySelector.append('<tr><td>'+value['id']+'</td><td>'+
                                        value['Nomdocteur']+'</td><td>'+value['Tel']+'</td><td>'+value['Adresse']+
                                        '</td><td>' +value['date']+'</td><td>'+ value['Heure']+'</td><td>'+
                                        value['Specialite']+'</td> <td> <ul><li><a class="ui inverted primary button" href=\"/pidev-3a13-symfony-happy-olds-git/web/app_dev.php/rappelrdv/'+value['id']+'/edit\">'+'Modifier'
                                        +' </li></a>' +' </br><li><a class="ui inverted red button" href=\"/pidev-3a13-symfony-happy-olds-gitweb/app_dev.php/rappelrdv/'+value['id']+'/delete\">'+'Supprimer'
                                        +'</li></a></br><li><a class="ui inverted green button" href=\"/pidev-3a13-symfony-happy-olds-git/web/app_dev.php/rappelrdv/'+value['id']+'/send\">'+'SMS'
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




