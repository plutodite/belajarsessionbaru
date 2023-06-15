
<form action="?url=tambah_mahasiswa" method="post" name="form1">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIM</label>
    <input type="text" class="form-control" name="nim" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prodi</label>
    <input type="text" class="form-control" name="prodi" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat">
  </div>

  <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
</form>
<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $nim= $_POST['nim'];
    var_dump($nim);
    $nama = $_POST['nama'];
    $prodi= $_POST['prodi'];
    $alamat = $_POST['alamat'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $koneksi = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim,nama,prodi,alamat) VALUES('$nim','$nama','$prodi','$alamat')");

    // Show message when user added
    echo "User added successfully. <a href='?url=mahasiswa'>View Alat</a>";
}
?>