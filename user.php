<style type="text/css">
    .header{
        background-color: orange;
    }
</style>
<?php

include_once("config.php");


$result = mysqli_query($koneksi, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>
    <title>Data User</title>
</head>

<body>
<b>Data User</b><br>
<a href="add.php">Tambah Alat</a><br/><br/>

<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tr class="header">
        <th>No</th><th>Nama</th> <th>username</th> <th>password</th> <th>Aksi</th>
    </tr>
    <?php
    $i=1;
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['password']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
        $i++;
    }
    ?>
</table>
</div>
</div>
</div>
</body>

</html>