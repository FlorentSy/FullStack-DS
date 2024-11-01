
// function showMessage(){
//     alert("This message is inside a function!")
// }
// showMessage();

/*
function sum(x,y){

return x+y;
}
document.write(sum(20,5));

*/


// var arrowfunction=() => alert("Hello World")
// arrowfunction();


/* var arrowfunction=name => alert(`Hello ${name}`)

arrowfunction("F S");
*/


/*
function Firstname(){
    var localVar ="FSylejmani"
    alert(localVar);
}

Firstname();

*/

function x(minutes){
    return minutes*60;
}

x();
document.write(x(60) + "<br>");

var car = {
    name:"Mercedes",
    color:"red", 
    year:2020,
    kilometers:0,
    // startEngine: function(){
    //     alert("Voooooom!!")
    // },
    get getKilometers(){
        return this.kilometers;
    },
    set setKilometers(km){
        this.kilometers=km;
    }
};

console.log(car.getKilometers);

car.setKilometers=100;
console.log(car.getKilometers);


// car.startEngine();

document.write(car.name + "<br>" + car.color + "<br>" + car.year + "<br>"+ car.kilometers)

document.write("<br>" + car['color'])



var computer=new Object();

computer.name="lenovo";
computer.CPU = "Intel core i9";
computer.RAM = "32GB";
computer.GPU = " GeForce RTX 4060"

computer.type=function(){
    return this.name + ", " + this.CPU + ", " + this.RAM + ", " + this.GPU;
}

delete computer.GPU;

document.write("<br>" + computer.type());

/* Get and set commands */


function Computer(name, CPU, RAM, GPU){
    this.name = name;
    this.RAM=RAM;
    this.CPU=CPU;
    this.GPU=GPU;
}

var computer1= new Computer("Macbook Pro", "M2 Chip", "8GB", "5600M GPU")
var computer2= new Computer("HP","intel code i7","4GB","Integrated");

console.log("Computer 1: " + computer1);
console.log("Computer 2: " + computer2);

document.write( "<br>" + "Computer 1:" + computer1.name +", " + computer1.CPU +", " + computer1.RAM +", "+ computer1.GPU);
document.write( "<br>" + "Computer 2:" + computer2.name +", " + computer2.CPU +", " + computer2.RAM +", "+ computer2.GPU);