$(document).ready(function(){

    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showLocation);
    }else{ 
        $('#location').html('Geolocation is not supported by this browser.');
    }

});

function showLocation(position){
    console.log("showlocation");

    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    $.ajax({
        type:'POST',
        url:'ajax/getLocation.php',
        data:'latitude='+latitude+'&longitude='+longitude,
    
    }).done(function( res ) {
            
        console.log(res);
        $('.searchP__afstand').html(res.distance);
                
    }).fail(function (res) {
        console.log("Sorry. Ajax failed ");
    });
}