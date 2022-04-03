<?php   
include('cnx.php');
$id=$_GET['updateid'];

if (isset($_GET["submit"])){
  $nom=$_POST["nom"];
  $tel=$_POST["tel"];
  $adresse=$_POST["adresse"];
  $req="UPDATE employe set nom='$nom',tel='$tel',adresse='$adresse' WHERE id=$id";
  $ex=mysqli_query($conn,$req);
  if($ex) {
    header('Location: crud.php');
  }











}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form">
  <div class="mb-3 mt-3">
    <label for="text" class="form-label">nom:</label>
    <input type="text" class="form-control"  placeholder="Enter Name" name="nom">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Tel:</label>
    <input type="text" class="form-control"  placeholder="Enter telephone" name="tel">
  </div>
  <div class="mb-4">
    <label for="text" class="form-label">Adersse:</label>
    <input type="text" class="form-control" placeholder="Enter adresse" name="adresse">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>