if (true) {
    console.log("Dijalankan karena kondisi bernilai true");
}else{
    console.log("Dijalankan karena kondisi bernilai false");
}



let nilai = 17;
let standart = 11;
let baik = "Lulus";
let gagal = "Tidak Lulus";
let batasatas = 20;
let batasbawah = 9;
let peringatan = "Nilai yang anda masukkan tidak valid";

if (nilai >= batasbawah && nilai <= batasatas) {
    if (nilai >= standart) {
    console.log(baik);
    }else {
        console.log(gagal);
    }
}else {
    console.log(peringatan);
}

// if (nilai >= standart) {
//     console.log("Selamat Anda Lulus");
// }else {
//     console.log("Silahkan Coba Lagi Tahun Depan");
// }