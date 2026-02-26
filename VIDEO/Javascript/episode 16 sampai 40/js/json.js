document.querySelector("#klik").addEventListener("click", tampil);

function tampil(params) {
    // let url = "https://jsonplaceholder.typicode.com/todos/1";
    let url = "js/tblmenu.json";
    fetch(url)
    .then(function (res) {
        return res.json();

    })
    .then(function (data) {
        let output = "<h1>Data Menu</h1> <table><th>Menu</th> <th>Harga</th> <th>Warna</th>";
        data.forEach(element => {
            output += `<tr>
                <td>${element.menu}</td>
                <td>${element.harga}</td>
                <td>${element.warna}</td>
            </tr>`;
        });
        output += "</table>";
        document.querySelector("#isi").innerHTML = output;
        // console.log(data);
    })

    // console.log("tes");
}

// let tblmenu = [ 
//     {
//         "idmenu" : 1,
//         "idkategori" : 1,
//         "menu" : "Ice Cream Coklat",
//         "harga" : 3000,
//         "warna" : ["coklat"],
//         "stok" : true,
//         "keterangan" : null
//     },
//     {
//         "idmenu" : 2,
//         "idkategori" : 2,
//         "menu" : "Ice Cream Vanilla",
//         "harga" : 3000,
//         "warna" : ["putih"],
//         "stok" : false,
//         "keterangan" : null
//     },
// ]

// console.log(tblmenu[0].menu);