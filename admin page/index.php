
<?php
require_once "connection.php";

if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE users set  name='" . $_POST['name'] . "', phone='" . $_POST['phone'] . "' ,email='" . $_POST['email'] . "', 
    Hatchback='" . $_POST['Hatchback'] . "' , SUV='" . $_POST['SUV'] . "' , Sadan='" . $_POST['Sadan'] . "' 
     WHERE id='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";
}

$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['userid'] . "'");
Ezoic
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
</head>
<body>

<h1>
    Admin Page
</h1>

<h2>
    Databases
</h2>

<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "my_db";

$conn=mysqli_connect($servername,$username,$password,$dbname);
  
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}

?>

<?php
                        include_once 'db.php';
                        $result = mysqli_query($conn,"SELECT * FROM users");
                    ?>

<?php
                        if (mysqli_num_rows($result) > 0) {
                    ?>

<form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>">
                        </div>
                        <div class="form-group ">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="phone" name="phone" class="form-control" value="<?php echo $row["phone"]; ?>">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="Address" name="Address" class="form-control" value="<?php echo $row["Address"]; ?>">
                        </div>

                        <div class="form-group">
                            <label>Hatchback</label>
                            <input type="Hatchback" name="Hatchback" class="form-control" value="<?php echo $row["Hatchback"]; ?>">
                        </div>

                        <div class="form-group">
                            <label>SUv</label>
                            <input type="SUV" name="SUV" class="form-control" value="<?php echo $row["SUV"]; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Sadan</label>
                            <input type="Sadan" name="Sadan" class="form-control" value="<?php echo $row["Sadan"]; ?>">
                        </div>

                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="users.php" class="btn btn-default">Cancel</a>
                    </form>


                     <?php
                        }else{
                            echo "No result found";
                        }
                    ?>

<h2>
    Most Searched Cars
</h2>

<div class="com">
    <span>
        <img src="images/front-left-side-47" alt="">
    </span>
    <span>
        <img src="images/front-left-side-47 (1)" alt="">
    </span>
    <span>
        <img src="images/front-left-side-47 (2)" alt="">
    </span>
    <span>
        <img src="images/front-left-side-47 (3)" alt="">
    </span>

</div>

<h2>
    Latest Cars
</h2>

<div class="com">
<span>
        <img src="images/front-left-side-47 (7)" alt="">
    </span>
    <span>
        <img src="images/front-left-side-47 (6)" alt="">
    </span>
    <span>
        <img src="images/front-left-side-47 (5)" alt="">
    </span>
    <span>
        <img src="images/front-left-side-47 (4)" alt="">
    </span>

</div>

<footer>
    <p>© 2023 Unbundl Assignment</p>
  </footer>

</body>
</html>