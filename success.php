<?php
$title = "Success";
require_once "includes/header.php";
?>


    <h1 class="text-center text-success"> You Have Been Registred </h1>
            <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_GET["firstname"]." ".$_GET["lastname"];?></h5>
            Specilaty: <h6 class="card-subtitle mb-2 text-muted"><?php echo $_GET["Specilaty"]; ?></h6>
            Date of birth: <p class="card-text"><?php echo $_GET["dob"];?></p>
            Email : <p class="card-text"><?php echo $_GET["email"];?></p>
            Contact: <p class="card-text"><?php  echo $_GET["phone"] ?></p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
        </div>
<?php
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>

<br>
<br>
<br>
<br>
<br>
</div>
<?php require_once "includes/fotter.php";?>
