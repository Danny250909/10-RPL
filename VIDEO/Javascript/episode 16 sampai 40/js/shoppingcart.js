let tblmenu = [
    {idmenu : 1, idkategori : 1, menu : "Ice Cream Coklat", gambar : "es-krim.jpg", harga : "3000"},
    {idmenu : 2, idkategori : 2, menu : "Ice Cream Vanilla", gambar : "vanilla.jpg", harga : "3000"},
    {idmenu : 3, idkategori : 3, menu : "Gorengan Platter", gambar : "gorengan-platter.jpg", harga : "10000"},
    {idmenu : 4, idkategori : 4, menu : "Martabak Manis", gambar : "martabak-manis.jpg", harga : "15000"},
    {idmenu : 5, idkategori : 5, menu : "Nasi Goreng", gambar : "nasi-goreng.jpg", harga : "10000"},
    {idmenu : 6, idkategori : 6, menu : "Mie Goreng", gambar : "mie-goreng.jpg", harga : "10000"},
    {idmenu : 7, idkategori : 7, menu : "Aneka Jus Buah", gambar : "jus-buah.jpg", harga : "5000"},
    {idmenu : 8, idkategori : 8, menu : "Aneka Buah Potong", gambar : "buah-potong.jpg", harga : "15000"},
    {idmenu : 9, idkategori : 9, menu : "Salad Buah", gambar : "salad-buah.jpg", harga : "10000"},
];
let tampil = tblmenu.map(function (kolom) {
    return `
    <div class="row product">
        <div class="col-lg-5 d-flex justify-content-center">
           <div class="card border-0">
              <img src="images/${kolom.gambar}" class="card-img-top" alt="${kolom.menu}">
              <div class="card-body">
                <h5 class="card-title">${kolom.menu}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                <h5 class="card-title">Rp. ${kolom.harga}</h5>
                <div class="btn-beli">
                     <button data-id="${kolom.idmenu}">Beli</button>
                </div>
              </div>
           </div>
        </div>
    </div>`;
});
let isi = document.querySelector(".produk");
let btnbeli = document.querySelectorAll(".btn-beli > button");
let cart = [];

isi.innerHTML = tampil;
// btnbeli.onclick = function () {
//     console.log(btnbeli.dataset.id);
// };

// console.log(tampil);
// console.log(cart);

for (let index = 0; index < btnbeli.length; index++) {
    btnbeli[index].onclick = function () {
        // console.log(btnbeli[index].dataset["id"]);
        // cart.push(btnbeli[index].dataset["id"]);
        tblmenu.filter(function (a) {
            if (a.idmenu == btnbeli[index].dataset["id"]) {
                cart.push(a);
                console.log(cart);
            }
        })
    };
    
}