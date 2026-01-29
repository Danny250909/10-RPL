const sapa = function () {
  console.log("Halo");
};

const tambah = function (a, b) {
  return a + b;
};

const cekGenap = function (n) {
  return n % 2 === 0;
};

const luasPersegi = function (s) {
  return s * s;
};

const pajak = function (harga) {
  return harga * 0.1;
};

// pemanggilan
sapa();
console.log(cekGenap(3));
console.log(luasPersegi(4));
console.log(pajak(150000));
console.log(tambah(7, 8));