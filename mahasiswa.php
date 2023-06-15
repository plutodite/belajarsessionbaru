<style type="text/css">
    .header{
        background-color: orange;
    }
</style>
<?php

include_once("config.php");


$koneksi = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY nama DESC");
?>

<html>
<head>
    <title>Data Mahasiswa</title>
</head>

<body>
<b>Data Mahasiswa</b><br>
<a href="?url=tambah_mahasiswa">Tambah Data</a><br/><br/>

<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tr class="header">
        <th>No</th><th>Nama</th> <th>Prodi</th> <th>Alamat</th> <th>Aksi</th>
    </tr>
    <?php
    $i=1;
    while($user_data = mysqli_fetch_array($koneksi)) {
        echo "<tr>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['prodi']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td><a href='edit.php?id=$user_data[nim]'>Edit</a> | <a href='delete.php?id=$user_data[nim]'>Delete</a></td></tr>";
        $i++;
    }
    ?>
</table>
</div>
</div>
</div>
</body>

</html>