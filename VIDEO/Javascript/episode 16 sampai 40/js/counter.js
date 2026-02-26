let a = 0; 
naik.onclick = function () {
    // if (a < 0) {
    // a++;
    // document.querySelector("h1").innerHTML = a;
    // }
    a++;
    document.querySelector("h1").innerHTML = a;
    // console.log(a);
};
turun.onclick = function () {
    if (a > 0) {
    a--;
    document.querySelector("h1").innerHTML = a;      
    }
    // a--;
    // document.querySelector("h1").innerHTML = a;
    // console.log(a);
};