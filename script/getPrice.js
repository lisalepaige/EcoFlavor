$( document ).ready(function() {
    var tot = prijs;
    document.querySelector(".span--totaal").innerHTML = tot;
});




var min = document.querySelector(".min");
var plus = document.querySelector(".plus");
var aantal = document.querySelector(".qty");
var prijs = document.querySelector(".best__span").innerHTML;

var teller = aantal.innerHTML;

console.log(prijs);

min.addEventListener("click", function(e){
    e.preventDefault;
    
    if(teller <= 1)
    {
        teller = 1;
        aantal.innerHTML = teller;
        Total();
    }
    else {
        teller -= 1;
        aantal.innerHTML = teller;
        Total();
    }
    
});

plus.addEventListener("click", function(e){
    e.preventDefault;

        aantal.innerHTML = teller += 1;
        Total();

});
 
function Total()
{
    var totaal = prijs * teller;

    console.log(totaal);

    document.querySelector(".span--totaal").innerHTML = totaal;
}