<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax-Jquery Bootstrap PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="js/jquery.js"></script>
    <script src="js/app.js" defer></script>
  </head>
  <body>
    <div class="container">
      <div class="row mt-4">
        <h1>Belajar Ajax Jquery Bootstrap PHP</h1>
      </div>
      <div class="row">
        <div class="col-4">
            <button type="button" id="btn-tambah" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Pelanggan
            </button>

        </div>
      </div>
      <div class="row mt-4"></div>

   
    <!-- <script>
        $(document).ready(function () {
            alert("Coba");
        });
    </script> -->

    <!-- <div class="row">
      <h3>Input Data Pelanggan</h3>
    </div>
    <div class="row">
      <div id="msg">

      </div> -->
      <!-- <form>
        <div class="mb-3">
          <input type="text" hidden class="form-control" id="id" required aria-describedby="emailHelp">
          <label for="exampleInputEmail" class="form-label">Pelanggan</label>
          <input type="text" class="form-control" id="pelanggan" required aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Harus Di Isi</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" required>
          <div id="emailHelp" class="form-text">Harus Di Isi</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Telp</label>
          <input type="text" class="form-control" id="telp" required>
          <div id="emailHelp" class="form-text">Harus Di Isi</div>
        </div>

        <button type="submit" id="submit" class="btn btn-primary">Simpan</button>
      </form> -->
    <!-- </div> -->
    

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Pelanggan</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kontak</th>
      <th scope="col">Hapus</th>
      <th scope="col">Ubah</th>
    </tr>
  </thead>
  <tbody id="isidata">
    <!-- <tr> -->
      <!-- <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr> -->
    <!-- <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr> -->
  </tbody>
</table>

<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form>
        <div class="mb-3">
          <input type="text" hidden class="form-control" id="id" required aria-describedby="emailHelp">
          <label for="exampleInputEmail" class="form-label">Pelanggan</label>
          <input type="text" class="form-control" id="pelanggan" required aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Harus Di Isi</div>
        </div>
        
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" required>
          <div id="emailHelp" class="form-text">Harus Di Isi</div>
        </div>
        
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Telp</label>
          <input type="text" class="form-control" id="telp" required>
          <div id="emailHelp" class="form-text">Harus Di Isi</div>
        </div>

        <button type="submit" id="submit" data-bs-dismiss="modal" class="btn btn-primary">Simpan</button>
      </form>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script> -->
  </body>
</html>