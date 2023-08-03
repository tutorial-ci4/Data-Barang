<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Barang</title>
  </head>
  <body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">PLAYSTATIONS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="index.php">Toko</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
      </ul>
    </div>
  </div>
</nav>
    </div>
    <div class="container mt-5">
    <h1>Data Barang Sewa</h1>

    <table class="table table-bordered table-striped mt-3">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Pegawai</th>
          <th>Alamat Pegawai</th>
          <th>Nama Pelanggan</th>
          <th>Alamat Pelanggan</th>
          <th>Barang Sewa</th>
          <th>Tanggal Sewa</th>
          <th>Tanggal Kembali</th>
          <th>Pembayaran</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>Syifaul Fuad</td>
          <td>Jember</td>
          <td>Alexis Sances</td>
          <td>Kalimantan</td>
          <td>Playstations 3</td>
          <td>18/06/2023</td>
          <td>21/06/2023</td>
          <td>Selesai</td>
          <td width="15%" class="text-conter">
            <a href="" class='btn btn-success'>Ubah</a>
            <a href="" class='btn btn-danger'>Hapus</a>
          </td>
        </tr>
      </tbody>
 <tbody>
   <tr>
     <td>2</td>
     <td>Herman</td>
     <td>Banyuwangi</td>
     <td>Haidar Bungki</td>
     <td>Sulawesi</td>
     <td>Stick PS4</td>
     <td>20/06/2023</td>
     <td>23/06/2023</td>
     <td>Selesai</td>
     <td width="15%" class="text-conter">
       <a href="" class='btn btn-success'>Ubah</a>
       <a href="" class='btn btn-danger'>Hapus</a>
     </td>
   </tr>
 </tbody>
</table>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>