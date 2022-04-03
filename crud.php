<?php 
    include 'cnx.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Crud</title>
</head>
<body>
<button type="button" class="btn btn-outline-danger"><a href="#" class="text-black">add user</a></button>
    <div class="container">

    
    <h2>Crud emloye</h2>
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>nom</th>
        <th>tel</th>
        <th>adresse</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      
      $sql = "SELECT * FROM employe";

       $query= mysqli_query($conn, $sql);
        /*if($query > 0){*/
            while($row = mysqli_fetch_assoc($query)){
                $id=$row['id'];
                $nom=$row['nom'];
                $tel=$row['tel'];
                $adresse=$row['adresse'];
                echo '<tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['nom'].'</td>
                    <td>'.$row['tel'].'</td>
                    <td>'.$row['adresse'].'</td>
                    <td> <button type="button" class="btn btn-outline-danger"><a href="update.php?updateid='.$id.'">update</a></button>
                    <button type="button" class="btn btn-outline-danger"><a href="delete.php?deleteid='.$id.'">delete</a></button>
                    </td>
                    </td>
                    </tr>
                    ';
                    
                
                
            }
        

      ?>
    </tbody>
  </table>
  
    </div>
</body>
</html>

