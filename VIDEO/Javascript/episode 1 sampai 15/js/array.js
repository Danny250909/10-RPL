let coba = function () {
    return "Coba Array";
}

let nama = [
    'Novi',
    'Vivi',
    'Noviati',
    coba(),
    () => "Hasil Array",
    () => "Smenda",
];
console.log(nama);
// console.log(nama[1]);
for(let i in nama){
    console.log(nama[i]);
}
console.log(nama[1]());
console.log(nama[0]());
