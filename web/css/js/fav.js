$('button').on('click', function(){
    $(this).toggleClass('faved');
    if ($(this).hasClass('faved')) {

        $.ajax({
            type : 'POST',
            url : '/pidev_symfony-officiel/web/app_dev.php/livre/addfav',
            data : {
                'idLivre' : $(this).parent().attr('id')

            }


        });
    } else {
        $.ajax({
            type : 'POST',
            url : '/pidev_symfony-officiel/web/app_dev.php/livre/removefav',
            data : {
                'idLivre' : $(this).parent().attr('id')

            }


        });
    }

});