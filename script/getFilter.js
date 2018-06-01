$(".filter__options").change(function(){
    var value = $(this).val()    

    console.log(value);

    $.ajax({
        method: "POST",
        url: "ajax/getFilter.php",
        data: {value : value}
   })
   .done(function( res ) {

       if( res.status == "success") {
           console.log('filter succes'); 
           
       }
   });
});