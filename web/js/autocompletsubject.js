$('#subject').keyup(function () {
        $('#subject').typeahead({

            source : function (query, result) {
                $.ajax({
                    url: 'http://127.0.0.1:8000/reclamation/recsubject/' + $('#subject').val(),
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

