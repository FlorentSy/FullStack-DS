// js
// document.getElementById("myElement").style.display = "none";

//jQuery
$('myElement').hide();

//$('#myElement').text('NewText'); //HTML elements simple manipulation /replace txt/

$('.btn').click(function(){
    console.log($('#myElement').text());

    $('#myElement').text('Testing text');
    $('#myElement').append(' <br> Extra text');
});

