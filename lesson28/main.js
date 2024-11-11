// var shuma = 0;

// for (i = 15; i <= 47; i++) {
//     shuma = shuma+i;
// }
// console.log("The sum of numbers from 15 to 47 is: " + shuma);


// Array=[1,2,3,4,5,6]

// var shuma=0;
// for(x of Array){
//     shuma+=x;
// }
// console.log(shuma);

// //adds elements writed in input field, each time after save button is clicked
// var emri=document.getElementById("input_name")
// var save=document.getElementById("save_button")

// var emrat=[];

// save.addEventListener("click",function addElements(){
//     emrat.push(emri.value);
//     console.log(emrat);
// })

// //////// 11.11.2024
// var car = {
//     brand:"BMW",
//     year:2020,
//     color:"red",
// }

// var x;

// for(x in car){
//     document.write(car[x] + " " + "<br>");
// }


// var names = ['Ariana', 'Leo'];
// var x;

// for (x of names){
//     document.write(x + "<br>")
// }

// var text='Ariana';
// var x;
// for (x of text){
//     document.write(x + "<br>")
// }

// let i=0;
// do{
//     i+=1;
//     document.write(i);
// }while(i<5);


// let x=0;
// let y = 0;
// while(x<3){
//     x++;
//     document.write(y+=x);
// }

// let names =['Ariana', 'Leo' , 'Florent','Grenti'];
// let x;

// names.push('Florei');
// names.unshift('Erisa');

// for(i=0; i < names.length; i++){
    
//     document.write(names[i] + "<br>");
// }

var emri=document.getElementById("input_name");
var save=document.getElementById("save_button");
var names=[];
var show=document.getElementById("show_btn");

save.addEventListener("click",function addElements(){
        names.push(emri.value);
        document.write(names);
    })

function showElements(){
    document.write(names)
}