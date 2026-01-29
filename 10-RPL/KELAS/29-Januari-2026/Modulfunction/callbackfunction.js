function proses(angka, callback) {
  callback(angka);
}

proses(5, function (x) {
  console.log("Nilai:", x);
});

// callback array
const hasil = [1, 2, 3].map(function (n) {
  return n * 2;
});
console.log(hasil);

// callback operasi
function hitung(a, b, operasi) {
  return operasi(a, b);
}

console.log(hitung(5, 3, (a, b) => a + b));
console.log(hitung(5, 3, (a, b) => a - b));
console.log(hitung(5, 3, (a, b) => a * b));
console.log(hitung(5, 3, (a, b) => a / b));