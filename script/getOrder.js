$(".winkelmand").on('click', function(e){
    var product_id = $('.best__h4').attr("data-id");
    var handelaar_id = $('.best__h4').attr("data-id");
    var totaalprijs = document.querySelector(".span--totaal").innerHTML;

    console.log(totaalprijs);

    //to database
    $.ajax({
        method: "POST",
        url: "ajax/getOrder.php",
        data: {product_id : product_id, handelaar_id : handelaar_id, totaalprijs : totaalprijs}
   })
   .done(function( res ) {

       if( res.status == "success") {
           console.log('saved');
           
       }
   });

   e.preventDefault;
});