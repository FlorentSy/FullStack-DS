//conditionals
var x=10;
var y=5;

//10>5 --yes

/*
if(x>y){
    console.log("this is true");
}else{
    console.log("this is wrong");
}

if(x<y){
    console.log("This is wrong")
}else{
    console.log("This is true");
}

if(y>x){
    console.log("this is true")
}else{
    console.log("This is wrong");
}

if(x==7){
    console.log("10 is equal 7")
} else{
    console.log("10 does not equal 7");
}
*/

var input=document.getElementById("input_id");
var button=document.getElementById("btn_id");
var text=document.getElementById("text_id");

button.onclick = function(){
    text.innerHTML=input.value;
}

button.onclick = function(){
    if(input.value>10){
        text.innerHTML="Input value is greater than 10"
    //document.write("number higher than 10");
    }else if(input.value<10){
        text.innerHTML="Input value is lower than 10"
       // document.write("number lower than 10");
    }else{
        text.innerHTML="Input value is equal to 10"}}
       // document.write("number equal to 10")}}


var btn2 = document.getElementById("answer");
var input1 = document.getElementById("input1_id");
var input2 = document.getElementById("input2_id");
var answer = document.getElementById("text1");

btn2.addEventListener("click", function(){

    answer.innerHTML=parseInt(input1.value)+ parseInt(input2.value);
})