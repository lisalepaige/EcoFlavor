$(document).ready(function(){

    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showLocation);
    }else{ 
        $('#location').html('Geolocation is not supported by this browser.');
    }

});

function showLocation(position){
    console.log("showlocation");

    var straatnaam = $('.straatnaam').html(); 
    var huisnr = $('.huisnr').html();
    var postcode = $('.postcode').html();
    var gemeente = $('.gemeente').html();

    //console.log(postcode);
    //console.log(huisnr);

    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
   $.ajax({
        type:'POST',
        url:'ajax/getDetailLocation.php',
        data:'latitude='+latitude+'&longitude='+longitude+'&straatnaam='+straatnaam+'&huisnr='+huisnr+'&postcode='+postcode+'&gemeente='+gemeente,
    
    }).done(function( res ) {

        if( res.status == "success") {
            
        console.log(res);
        $('.distance').html(res.distance);

        }
                
    }).fail(function (res) {
        console.log("Sorry. Ajax failed ");
        $('.distance').html("location not found");
    });
}