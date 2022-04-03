
<?php   
include('cnx.php');
if(isset($_POST['submit'])){
    $nom=strtolower(htmlspecialchars(trim($_POST['nom'])));
    $prenom=strtolower(htmlspecialchars($_POST['prenom']));
    $password=md5($_POST['password']);
    $email=strtolower(htmlspecialchars($_POST['email']));
    $message=strtolower(htmlspecialchars($_POST['message']));

    $query="insert into etudiant(nom,prenom,password,email,message) values ('$nom','$prenom','$password','$email','$message')";
    mysqli_query($conn,$query);
    echo"data is saved";
    $v=mysqli_affected_rows($conn);
    echo"nombre is :.$v";
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="ctn">
    <form action="" method="post">
    <table align="center"">
        <tr>
            <td>
                <label for="nom">Username</label><br>
                <input type="text" name="nom" placeholder="Username......."><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for="nom">Prenom</label><br>
                <input type="text" name="prenom" placeholder="prenom........."><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for="nom">Password</label><br>
                <input type="text" name="password" placeholder="password........"><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for="nom">Password</label><br>
                <input type="text" name="email" placeholder="email........"><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for="nom">Password</label><br>
                <input type="text" name="message" placeholder="message........"><br>
            </td>
        </tr>
        <tr>
            <td>
                
                <input type="submit" name="submit" value="click "><br>
            </td>
        </tr>
        <tr>
            <td><a href ="insert.php">Insert</a></td>
            <td><a href ="serach.php">Search</a></td>
            <td><a href ="delete.php">Delete</a></td>
            <td><a href ="update.php">Update</a></td>
            
        </tr>

    </table>
    </form>


    </div>


</body>
</html>
