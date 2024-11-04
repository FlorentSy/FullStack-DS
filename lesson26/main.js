//arrays
var programmingL=['Javascrip','Python', 'PHP']

programmingL.push(' Java');
programmingL.pop();
programmingL.unshift('C#');
programmingL.shift();

programmingL.splice(1, 0, 'Ruby');
programmingL.splice(0, 0, 'Java');

console.log(programmingL);
console.log(programmingL[1]);
document.write(programmingL);

console.log(Math.floor(Math.random()*5));

//array distructing

var students=["Aria","Leo"];

var[s1,s2]=students;

console.log(students);
console.log(students[1]);
console.log(s1);
console.log(s2);

var places=['London', 'Paris', 'Berlin', 'NewYork'];

var[firstPlace, , secondPlace]=places;
console.log(firstPlace);
console.log(secondPlace);


var numbers=[1,2,3,4,5,6];

var[firstNumber, secondNumber, ...otherNumbers]=numbers;
console.log(firstNumber);
console.log(secondNumber);
console.log(otherNumbers);




  