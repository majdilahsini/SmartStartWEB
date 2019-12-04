



$("#esprit_disponibilitebundle_disponibilte_adresse").click(function () {
   var lat;
   var long;
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        $("#esprit_disponibilitebundle_disponibilte_adresse").val( "Geolocation is not supported by this browser.");

    }

    function showPosition(position) {
        lat = position.coords.latitude;
        long = position.coords.longitude;
        /*$("#esprit_disponibilitebundle_disponibilte_adresse").val("Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude);*/
        $.ajax({
            type: "GET",
            // url: "{{ path('rappelrdv_ajax') }}",
            url: "https://nominatim.openstreetmap.org/reverse?format=json&lat="+lat+"&lon="+long+"&zoom=18&addressdetails=1",
            //dataType: "jsonp",
            dataType: "text",
            success: function(msg){
                //we need to check if the value is the same
                var result = JSON.parse(msg);
                $("#esprit_disponibilitebundle_disponibilte_adresse").val(result['address'].county+' '
                    +result['address'].state_district+result['address'].state);




            }
        });

    }


});





