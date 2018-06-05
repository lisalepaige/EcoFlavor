$("#toevoegen").on('click', function(e){
    var product_naam = $('#naamproduct').val();
    var groep_naam = $('#groepsnaam').val();
    var handelaar_naam = $('#naamhandelaar').val();
    var straat = $('#straat').val();
    var nummer = $('#nummer').val();
    var postcode = $('#postcode').val();
    var gemeente = $('#gemeente').val();
    var prijs = $('#prijs').val();
    var oorsprong = $('#oorsprong').val();

    var seizoen = $('input[name="seizoen"]:checked').each(function() {
      var siezoen_val = this.value;  
      console.log(siezoen_val);  
    });

    var categorie = $('input[name="categorie"]:checked').each(function() {
        var categorie_val = this.value;  
        console.log(categorie_val);  
    });
    

   // console.log(nummer);
   // console.log(seizoen);

    //to database
    $.ajax({
        method: "POST",
        url: "ajax/getNewProduct.php",
        data: {product_naam : product_naam, groep_naam : groep_naam, handelaar_naam : handelaar_naam,
        straat : straat, nummer : nummer, postcode : postcode, gemeente : gemeente, prijs : prijs, oorsprong : oorsprong,
        siezoen_val : siezoen_val, categorie_val : categorie_val}
   })
   .done(function( res ) {

       if( res.status == "success") {
           console.log('toegevoegd');
           
       }
   });

    e.preventDefault();
});