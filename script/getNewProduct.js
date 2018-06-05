$("#toevoegen").on('click', function(e){
    var product_naam = $('#naamproduct').val();
    var groep_naam = $('#groepsnaam').val();
    var handelaar_naam = $('#naamhandelaar').val();
    
    console.log(product_naam);
    console.log(groep_naam);
    console.log(handelaar_naam);

    //to database
    $.ajax({
        method: "POST",
        url: "ajax/getNewProduct.php",
        data: {product_naam : product_naam, groep_naam : groep_naam, handelaar_naam : handelaar_naam,
        }
   })
   .done(function( res ) {

       if( res.status == "success") {
           console.log('saved');
           
       }
   });

    e.preventDefault();
});