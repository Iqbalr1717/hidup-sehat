<?php
include 'koneksi.php';

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($conn,
    "INSERT INTO users VALUES('', '$username', '$password')");

    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
</head>
<body>

<h2>Tambah User</h2>

<form method="POST">

<input type="text"
name="username"
placeholder="Username"
required>

<br><br>

<input type="password"
name="password"
placeholder="Password"
required>

<br><br>

<button type="submit" name="submit">
Simpan
</button>

</form>

</body>
</html>