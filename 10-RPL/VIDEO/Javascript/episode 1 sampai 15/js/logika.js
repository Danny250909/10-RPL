let a = true;
let b = false;
let c = true;
let d = false;

let x = 17;
let y = 11;

let dupu = "20";
let dupul = 20;

// Akan Bernilai true jika salah satu operand bernilai true
console.log(a && b); // AND      ==> bernilai false karna salah satu false
console.log(c || d || b); // OR     ==> bernilai true karna salah satu true
console.log(!a); // NOT      ==> bernilai NOT karna ada simbol seru

console.log(!(x > y)); // NOT
console.log((x < y) && (x == 17)); // AND
console.log((x > y) || (y != 11)); // OR

console.log((dupu === dupul) || (y <= 11)); // OR
console.log((dupu !== dupul) && (x >= 17)); // AND
console.log(!(dupu < dupul)); // NOT

