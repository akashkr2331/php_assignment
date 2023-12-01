<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $db="cars";

  
    $con = mysqli_connect($server, $username, $password, $db);

  
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if(isset($_POST['Hatchback']))
    $Hatchback =1;
    else
    $Hatchback =0;

    if(isset($_POST['SUV']))
    $SUV =1;
    else
    $SUV =0;

    if(isset($_POST['Sadan']))
    $Sadan =1;
    else
    $Sadan =0;

    $sql = "INSERT INTO `user` (`name`, `email`, `phone`, `address`, `Hatchback`, `SUV`, `Sadan`) VALUES ('$name', '$email', '$phone', '$address', '$Hatchback', '$SUV', '$Sadan')";
    
    if(mysqli_query($con,$sql)){
        echo "Successfully inserted";

  
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }


    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>car options</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div>
        <h2>Create your cardekho profile</h2>
    <form action="index.php" method="post">

            <div class="ele">
                <label for="name">name</label>
            <input type="text" name="name" id="" required>
            </div>

            <div>
                <label for="Phone Number">Phone Number</label>
                <input type="text" name="phone" required>
            </div>

            <div>
                <label for="Email Id">Email Id</label>
                <input type="email" name="email" required>
            </div>

            <div>
                <label for="Address">Address</label>
                <input type="text" name="address" required>
            </div>

            <h2>Choose your right cars</h2>

            <div>
                <div class="cars">
                    <input type="checkbox" style="width: 10em;height: 10em;" name="Hatchback">
            <img src="images/front-left-side-47 (6).webp" alt="Hatchback">
            Hatchback
            
                </div>

                <div class="cars">
                    <input type="checkbox" style="width: 10em;height: 10em;" name="SUV">
            <img src="images/front-left-side-47.webp" alt="SUV">
            SUV
                </div>

                <div class="cars">
                    <input type="checkbox" style="width: 10em;height: 10em;" name="Sadan">
            <img src="images/front-left-side-47 (7).webp" alt="Sadan">
            Sadan
                </div>

            </div>
            <div>
                <button type="submit" id="submit-btn" > Submit</button>
            </div>

        </form>
    </div>
</body>
</html>
