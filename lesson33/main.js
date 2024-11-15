//  js
// // document.getElementById("myElement").style.display = "none";

// //jQuery
// $('#myElement').hide();

// //$('#myElement').text('NewText'); //HTML elements simple manipulation /replace txt/

// $('.btn').click(function(){
//     console.log($('#myElement').text());

//     $('#myElement').text('Testing text');
//     $('#myElement').append(' <br> Extra text');
// });

$('#btn3').click(function(){
    $('.hidden').show('slow');
})

$('#btn4').click(function(){
    $('.hidden').hide();
})

$("#square").click(function(){
    $("#square").animate({
        'width' : '200px',
        'height' : '200px',
    })
})