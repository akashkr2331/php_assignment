<?php

include_once 'database.php';
if(isset($_POST['name'])) {
    mysqli_query($conn,"UPDATE user set  name='" . $_POST['name'] . "', phone='" . $_POST['phone'] . "' ,email='" . $_POST['email'] . "', 
    Hatchback='" . $_POST['Hatchback'] . "' , SUV='" . $_POST['SUV'] . "' , Sadan='" . $_POST['Sadan'] . "' 
     WHERE sno='" . $_POST['sno'] . "'");
    $message = "Record Modified Successfully";


$result = mysqli_query($conn,"SELECT * FROM user WHERE sno='" . $_POST['sno'] . "'");

$row= mysqli_fetch_array($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<h1>
    Admin Page
</h1>

<div class="banner">
                        <img src="images/front-left-side-47 (8).webp" alt="" width=100% height=600px>
                    </div>

<h2>
    Databases
</h2> 


<?php

                        include_once 'database.php';
                        $result = mysqli_query($conn,"SELECT * FROM user");
                        
                    ?>

<?php
// foreach($row in $result){
    // echo $result["0"]["name"];
                        if (mysqli_num_rows($result) > 0) {
                    ?>

<?php
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                        ?>

<form action="index.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $row["phone"]; ?>">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="Address" name="Address" class="form-control" value="<?php echo $row["address"]; ?>">
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

                        <input type="hidden" name="sno" value="<?php echo $row["sno"]; ?>"/>
                        <!-- <button type="submit" class="btn btn-primary" value="Submit"> -->
                        <button type="submit" id="submit-btn" > Submit</button>
                        <!-- <a href="users.php" class="btn btn-default">Cancel</a> -->
                        <a href="delete-process.php?sno=<?php echo $row["sno"]; ?>">Delete</a>
                    </form>

                    <?php
                            $i++;
                            }
                        ?>
                     <?php
                        }else{
                            echo "No result found";
                        }
                    ?>

                    

<h2>
    Most Searched Cars
</h2>

<div class="com">
    <div class="search">
        <img src="images/front-left-side-47.webp" alt="">
        <div>Mahindra Thar</div>
    </div>
    <div class="search">
        <img src="images/front-left-side-47 (1).webp" alt="">
        <div>Tata Nexon</div>
    </div>
    <div class="search">
        <img src="images/front-left-side-47 (2).webp" alt="">
        <div>Tata Punch</div>
    </div>
    <div class="search">
        <img src="images/front-left-side-47 (3).webp" alt="">
        <div>Maruti Brezza</div>
    </div>

</div>

<h2>
    Latest Cars
</h2>

<div class="com">
<div class="latest">
        <img src="images/front-left-side-47 (4).webp" alt="">
        <div>Lexus RX</div>
    </div>
    <div class="latest">
        <img src="images/front-left-side-47 (5).webp" alt="">
        <div>Mercedes-Benz A-Class Limousine</div>
    </div>
    <div class="latest">
        <img src="images/front-left-side-47 (6).webp" alt="">
        <div>BMW X7</div>
    </div>
    <div class="latest">
        <img src="images/front-left-side-47 (7).webp" alt="">
        <div>Audi Q3</div>
    </div>

</div>

<footer>
    <p>© 2023 Unbundl Assignment</p>
  </footer>

  <!-- <script>
    const delete=document.getElementsbyClassname("delete");
    delete.addEventListener('click',()=>{

    })
  </script> -->

</body>
</html>
