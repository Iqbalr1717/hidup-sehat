<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM users WHERE id='$id'");

$d = mysqli_fetch_array($data);

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($conn,
    "UPDATE users SET
    username='$username',
    password='$password'
    WHERE id='$id'
    ");

    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h2>Edit User</h2>

<form method="POST">

<input type="text"
name="username"
value="<?php echo $d['username']; ?>">

<br><br>

<input type="text"
name="password"
value="<?php echo $d['password']; ?>">

<br><br>

<button type="submit" name="submit">
Update
</button>

</form>

</body>
</html>