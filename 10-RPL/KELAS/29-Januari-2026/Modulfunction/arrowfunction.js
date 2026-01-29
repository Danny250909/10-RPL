const sapa = () => console.log("Halo");

const tambah = (a, b) => a + b;

const kuadrat = x => x * x;

const diskon = harga => harga * 0.1;

const cekUmur = umur => umur >= 17;

// pemanggilan
sapa();
console.log(kuadrat(5));
console.log(diskon(200000));
console.log(cekUmur(20));
console.log(cekUmur(15));