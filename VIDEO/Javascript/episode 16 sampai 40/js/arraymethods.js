// array => string, number, objek, function, campuran

let nilai = [
    {nama:"Novi", mtk:97, bing:99, bindo:98},
    {nama:"vivi", mtk:98, bing:99, bindo:97},
    {nama:"Ditzzx", mtk:99, jurusan:98, ppkn:85},
]
let nama = ["Novi", "Vivi", "Ditzzx"];
let mapel = ["PPLG", "Agama"];
// let siswa = nilai.map(function (a) {
//     return a.nama;
// });
// let siswa = nilai.map(a => [a.mtk, a.bing, a.bindo]);
// let hasil = nilai.reduce(function (a, b) {
//     return (a = a + b.mtk);
// }, 0);
let hasil = nilai.reduce((a, b) => (a += b.mtk), 0);

// nama.push("Danny", "Noviati");
// nama.unshift("El", "Dewi");
// nama.splice(0, 1);
// nama.forEach(function (a) {
    //     console.log(a)
    // });
// nama.forEach(a => console.log(a));
// nilai.filter(function (a) {
//     if (a.mtk > 90) {
//         console.log(a)
//     }
// });
// nilai.filter((a) => (a.mtk > 90 && a.bing > 90 ? console.log(a.nama) : null));
// mapel.sort();


// for (let index = 0; index < array.length; index++) {
//     console.log(nama[index]);
    
// }


// console.log(nilai[0].nama);
// console.log(nama);
// console.log(nama.pop());
// console.log(nama.shift());
// console.log(nama.splice(0, 7));
// console.log(nama.slice(0, 7));
// console.log(nama.concat(mapel));
// console.log(nama.concat(["IPAS", "B.Jawa"]));
// console.log(nilai);
// console.log(siswa);
// console.log(mapel);
console.log(hasil);