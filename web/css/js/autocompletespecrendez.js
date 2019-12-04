$('#specialite').keyup(function () {
    $('#specialite').typeahead({

        source : function (query, result) {
            $.ajax({
                url : 'http://localhost/pidev-3a13-symfony-happy-olds-git/web/app_dev.php/rappelrdv/specjax/'+$('#specialite').val(),
                method : "GET",
                dataType :"json",
                success:function (data) {
                    result($.map(data,function(item) {
                        return item;

                    }));
                }
            })
        }

    });

});