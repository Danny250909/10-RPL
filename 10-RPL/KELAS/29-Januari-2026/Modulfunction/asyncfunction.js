// Contoh 1: async function sederhana
async function getData() {
  return "Data berhasil diambil";
}

// Contoh 2: async arrow function
const cekStatus = async () => {
  return "Siap digunakan";
};

// Contoh 3: async + await dengan Promise (delay)
async function delay() {
  await new Promise(resolve => setTimeout(resolve, 1000));
  console.log("Tunggu 1 detik selesai");
}

// Contoh 4: async function dengan proses perhitungan
async function hitung(a) {
  return a * 2;
}

// Contoh 5: memanggil async function dengan await
async function tampil() {
  const data = await getData();
  const hasil = await hitung(5);
  console.log(data);
  console.log("Hasil hitung:", hasil);
}

// Eksekusi
tampil();
delay();
cekStatus().then(status => console.log(status));
getData().then(data => console.log(data));
hitung(10).then(result => console.log("Hasil hitung 10:", result));

// Output:
// Data berhasil diambil
// Tunggu 1 detik selesai
// Siap digunakan
// Data berhasil diambil
// Hasil hitung: 10
// Hasil hitung 10: 20
