$(".verwijder").on('click', function(e){
    var product = $(this);
    var winkel_id = product.attr("data-id");

    console.log(winkel_id);

    $.ajax({
        method: "POST",
        url: "ajax/deleteOrder.php",
        data: {winkel_id : winkel_id}
   })
   .done(function( res ) {

       if( res.status == "success") {
           console.log('deleted');

           
           
       }
   });

    e.preventDefault();

});