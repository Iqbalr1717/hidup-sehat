<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD User</title>
</head>
<body>

<h2>Data User</h2>

<a href="tambah.php">+ Tambah User</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Username</th>
    <th>Password</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;

while($d = mysqli_fetch_array($data)){
?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['username']; ?></td>
    <td><?php echo $d['password']; ?></td>

    <td>
        <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>

        <a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>