let mulai = 11;
let selesai = 17;

while (mulai <= selesai) {
    console.log("Perulangan ke-" + mulai);
    mulai++;
}
console.log("=========");


let start = 9;
let end = 20;

do {
    console.log("Perulangan Do While ke-" + start);
    start++;
} while (start <= end);
console.log("=========");

let awal = 9;
let akhir = 25;

for (awal; awal <= akhir; awal = awal + 6) {
    console.log("Perulangan For ke-" + awal);
}

console.log("=========");

for (let i = 9; i <= 20; i = i + 3) {
    console.log("Perulangan For ke-" + i);
}
