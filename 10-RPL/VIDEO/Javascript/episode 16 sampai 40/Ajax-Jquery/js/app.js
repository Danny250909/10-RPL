const { cache } = require("react");

$(document).ready(function () {

let id = "";
let pelanggan = "";
let alamat = "";
let telp = "";

$("#submit").click(function (e) { 
    e.preventDefault();
    id = $("#id").val();
    pelanggan = $("#pelanggan").val();
    alamat = $("#alamat").val();
    telp = $("#telp").val();

    if (id == "") {
        insertData();
    } else {
        updateData();
    }

    $("#id").val("");
    $("#pelanggan").val("");
    $("#alamat").val("");
    $("#telp").val("");

    // console.log(pelanggan);
    // alert("Test");

});

$("#btn-tambah").click(function (e) { 

    
    // id = $("#id").val();
    // pelanggan = $("#pelanggan").val();
    // alamat = $("#alamat").val();
    // telp = $("#telp").val();
    
    // if (id == "") {
        //     insertData();
        // } else {
            //     updateData();
            // }
    e.preventDefault();

    $("#title").html("<p>Tambah Data</p>");

    $("#id").val("");
    $("#pelanggan").val("");
    $("#alamat").val("");
    $("#telp").val("");

    // console.log(pelanggan);
    alert("Tambah");

});

$("tbody").on("click",".btn-del", function () {
    let id = $(this).attr("data-id");
    if (confirm("Yakin akan menghapus?")) {
        deleteData(id);
        
    }
    // alert(id);
});

$("tbody").on("click",".btn-ubah", function () {
    let id = $(this).attr("data-id");
    $("#title").html("<p>Ubah Data</p>");
    selectUpdate(id);
    // console.log(id);
    // alert(id);
});

function selectUpdate(id) {
    let idPelanggan = {
            idpelanggan : id
            // alamat : alamat,
            // telp : telp
        }

        $.ajax({
            type: "pos",
            url: "php/selectupdate.php",
            cache : false,
            data: JSON.stringify(idPelanggan),
            // dataType: "dataType",
            success: function (response) {
                let data = JSON.parse(response);
                
                $("#id").val(data.idpelanggan);
                $("#pelanggan").val(data.pelanggan);
                $("#alamat").val(data.alamat);
                $("#telp").val(data.telp);

                // console.log(data.idpelanggan);
                // console.log(data.pelanggan);
                // console.log(data.alamat);
                // console.log(data.telp);



                // let out = `<p>${response}</p>`;
                // $("msg").html(out);
                // console.log(data);
            }
        });
        // alert("Insert");
        // alert("Delete" + id);
    // alert("Dari function " + id);
}

    function selectData() {
        // alert("Select");
        $.ajax({
            type: "get",
            url: "php/select.php",
            cache : false,
            // data: "data",
            dataType: "json",
            success: function (response) {
                // console.log(response);
                let out = "";
                let No = 1;
                $.each(response, function (key, val) { 
                    out += `<tr>
                    <td>${No++}</td>
                    <td>${val.pelanggan}</td>
                    <td>${val.alamat}</td>
                    <td>${val.kontak}</td>
                    <td><button type="button" class="btn btn-danger btn-del" data-id=${val.idpelanggan}>Delete</button></td>
                    <td><button type="button" class="btn btn-warning btn-ubah" data-id=${val.idpelanggan}>Ubah</button></td>
                    </tr>`;
                    // console.log(val.pelanggan);
                });
                $("#isidata").html(out);
            }
        });
    }

    function insertData() {
        let dataPelanggan = {
            pelanggan : pelanggan,
            alamat : alamat,
            telp : telp
        }

        $.ajax({
            type: "pos",
            url: "php/insert.php",
            cache : false,
            data: JSON.stringify(dataPelanggan),
            // dataType: "dataType",
            success: function (response) {
                let out = `<p>${response}</p>`;
                $("msg").html(out);
                // console.log(response);
            }
        });
        selectData();
        // alert("Insert");
    }

    function deleteData(id) {
        let idPelanggan = {
            idpelanggan : id
            // alamat : alamat,
            // telp : telp
        }

        $.ajax({
            type: "pos",
            url: "php/delete.php",
            cache : false,
            data: JSON.stringify(idPelanggan),
            // dataType: "dataType",
            success: function (response) {
                let out = `<p>${response}</p>`;
                $("msg").html(out);
                // console.log(response);
            }
        });
        deleteData();
        // alert("Insert");
        // alert("Delete" + id);
    }

    function updateData() {
        let dataPelanggan = {
            idpelanggan : id,
            pelanggan : pelanggan,
            alamat : alamat,
            telp : telp
        }

        $.ajax({
            type: "pos",
            url: "php/update.php",
            cache : false,
            data: JSON.stringify(dataPelanggan),
            // dataType: "dataType",
            success: function (response) {
                let out = `<p>${response}</p>`;
                $("msg").html(out);
                // console.log(response);
            }
        });
        updateData();
    }

    selectData();
});