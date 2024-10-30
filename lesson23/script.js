console.log('welcome')

function showMessage(){
    alert("This is inside a function")
}

function shuma(nr1,nr2){
    return nr1+nr2;
}

console.log(shuma(4,5));


function toCelcius(f){

    return (5/9)*(f-32);
}

console.log(toCelcius(100));

var arrowFunction=()=>alert('HelloWorld')
// arrowFunction();

var prsh = emri =>alert(`Miredita ${emri}`);
// prsh("Flori");

function dsFunction(){
    var localVar="Digital school"
    console.log(localVar)
}

// dsFunction(); ---> Reference error: outside the function
// alert(localVar);

function SyprinaTrekendesh(baza, lartesia){
    return 0.5*baza*lartesia;
    
}

console.log(SyprinaTrekendesh(2,5))
// vazhdimi javascript lesson23 te objektet


var makina={
    emri:"BMW",
    color:"Red",
    year:2020,
    startEngine: function(){
        alert("vvvvvvvvv!!!")
    }
    ,get GetColor(){
        return this.color;
    },
    set SetColor(newColor){
        this.color=newColor;
    }

}

console.log(makina['emri'])
console.log(makina.emri)

// makina.startEngine()

var computer= new Object();
computer.name="Lenovo"
computer.CPU="intel core i9"
computer.RAM="16GB"

computer.type=()=>{
    console.log("Start Pc")
}

computer.type();

makina.SetColor="blue"
console.log(makina.GetColor);
