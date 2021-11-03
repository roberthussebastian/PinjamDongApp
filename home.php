<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>

     <!-- css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <button class="btn" style="font-size:20px"><i class="fa fa-chevron-circle-left"></i><a href="logout.php">Logout</a></button>
     <br>
     <button class="btn" style="font-size:20px"><i class="fa fa-chevron-circle-left"></i><a href="dashboard.html">Pinjam Ruangan</a></button>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>