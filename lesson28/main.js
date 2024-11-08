var shuma = 0;

for (i = 15; i <= 47; i++) {
    shuma = shuma+i;
}
console.log("The sum of numbers from 15 to 47 is: " + shuma);




Array=[1,2,3,4,5,6]

var shuma=0;
for(x of Array){
    shuma+=x;
}
console.log(shuma);

//adds elements writed in input field, each time after save button is clicked
var emri=document.getElementById("input_name")
var save=document.getElementById("save_button")

var emrat=[];

save.addEventListener("click",function addElements(){
    emrat.push(emri.value);
    console.log(emrat);
})






