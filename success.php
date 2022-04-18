<?php
$title = "Success";
require_once "includes/header.php";
require_once "db/connction.php";



if (isset($_GET["submit"])){
  $isSuccess = true;
    $fname = $_GET["firstname"];
    $lname = $_GET["lastname"];
    $dob = $_GET["dob"];
    $email = $_GET["email"];
    $phone = $_GET["phone"];
    $Specilaty = $_GET["Specilaty"];
    $crud = new crud($conn);
    $crud->insert($fname, $lname ,  $dob , $email , $Specilaty , $phone);
} 
  if(isset($isSuccess)){
    echo "<div class='alert alert-success' role='alert'>
    <h4 class='alert-heading'>Success!</h4>
    <p>Your data has been saved successfully.</p>
    <hr>
    <p class='mb-0'>Thank you for your time.</p>
    </div>";
  } 
  else{
    echo "<div class='alert alert-danger' role='alert'>
    <h4 class='alert-heading'>Error!</h4>
    <p>Your data has not been saved successfully.</p>
    <hr>
    <p class='mb-0'>Please try again.</p>
    </div>";
  }
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
