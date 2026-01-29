function User(nama) {
  this.nama = nama;
}

const u1 = new User("Andi");
console.log(u1.nama);

function Mobil(merk) {
  this.merk = merk;
}

const m1 = new Mobil("Honda");
console.log(m1.merk);

function Produk(nama, harga) {
  this.nama = nama;
  this.harga = harga;
}

const p1 = new Produk("Laptop", 5000000);
console.log(p1);

const p2 = new Produk("Handphone", 3000000);
console.log(p2);
console.log(p2.nama);
console.log(p2.harga);
const p3 = new Produk("Tablet", 2000000);
console.log(p3);
console.log(p3.nama);
console.log(p3.harga);