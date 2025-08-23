function tampil() {
    // alert("Selamat datang " + document.querySelector("#Nama").value);
    document.querySelector("#Hasil").value = document.querySelector("#Nama").value;
    document.querySelector("#para").innerText =document.querySelector("#Nama").value;
   
//     console.log(document.querySelectorAll("img") );
// min = Math.ceil(0);
// max = Math.floor(1);
// let random = Math.floor(Math.random() * (max - min + 2)) + min;
// console.log(random);
//     document.querySelectorAll("img")[random].style.visibility = "visible";

    // document.querySelector("h1").innerText = "anda telah mengklik";
    // document.querySelector(".container").style.backgroundColor = "red";
    // document.querySelector("#para").style.fontSize = "25px";
    // document.querySelector("#disini").innerHTML = "anda telah mengklik";
}
 btn.onclick = function () {
 const Nama = document.querySelector("#Nama").value
if (Nama.value == "a") {
    alert("nama sama dengan a");
}else{
    alert(Nama.value);
}
// > < == != >= <=
// && (dan) || (atau)

// let a = 1;
// let b = 2;
// b = b + a;
// b = b - a;
// b = b * a;
// b = b / a;
// b = b % a;
// b = b ** a;
// console.log(b);

    //   const Nama = document.querySelector("#Nama").value;
    // const judul = document.createElement("h1");
    // let tampil = "Belajar";
    // judul.innerHTML = tampil + Nama.value;
    // tampil = "Javascript";
    // judul.innerHTML = tampil + Nama.value;

    // let menu = document.querySelector("ul");
    // menu.removeChild(menu.children[0]);
}
    // alert("javascript");
//  btn.onmouseover = function() {
//     alert("javascript");
//  }
//  btn.addEventListener(`mouseover`, tampil);
//  btn.addEventListener(`mouseover`, function) () {
//     alert("javascript");
//  };
