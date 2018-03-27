// function person(name, gender, age) {
//     this.name   = name;
//     this.gender = gender;
//     this.age    = age;
// }
// var herInfo = new person('amira', 'female', 23);
// console.log(person instanceof Object);
// // delete herInfo.name;
// // console.log(herInfo);
// console.log();

// // var myBtn = document.getElementById('myBtn');
// // var myDiv = document.getElementById('myDiv');

// // myBtn.addEventListener('click', function(){
// //     myDiv.innerHTML = 'dkvndl';
// //     setTimeout(function() {
// //         myDiv.innerHTML = '';
// //     }, 1000)
// // });

// function ma(button, message) {
//     button.addEventListener('click', function(){
//         message.innerHTML = 'parameters';
//         setTimeout(function() {
//             myDiv.innerHTML = '';
//         }, 1000)
//     }); 
// }

// //------------add class---------------
// var myInput = document.getElementById('myInput'),
//     added   = document.getElementById('added'),
//     add     = document.getElementById('add');
    
// add.addEventListener('click', function() {
//     added.classList.add(myInput.value);
// });

// //------------toggledDiv---------------
// var toggledDiv = document.querySelectorAll('.changed');


// for(var i = 0; i < toggledDiv.length; i++){
//     var singleDiv = toggledDiv[i];
//         singleDiv.addEventListener('click', function(event){
//             event.target.classList.toggle('red');
//         });
// }

// ---- to count length of any object ----
// var numbers = {
//     a: 1,
//     b: 2,
//     c: 3
// }

// var length_numbers = 0;
// for(num in numbers){
//     length_numbers = length_numbers + 1;
// }

// console.log(length_numbers);

//---- two custom fun... inherits from else by another way... ----
var User = function(){
    this.name = 'amira';
    this.age = 23;
}

function Client(){
    this.countId = 12345;
}
Client.prototype = new User();

function Employee(){
    this.branch = 'Dokki';
}

var client = new Client();
var employee = new Employee();

console.log(client.name);
console.log(client.age);

let obj1 = {
    num1: 1,
    num2: 2
}

let obj2 = Object.assign({}, obj1);

console.log( obj2.num1 );















