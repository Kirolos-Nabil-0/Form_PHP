<?php
$title = "index";
require_once "includes/header.php";
require_once "db/connction.php";

?>
<!--
    -first name
    -last name
    -date of birth
    -admin panel
    -enail
    -number

-->
<div class="container" >
    <h1 class="text-center" >Regustration</h1>
    <form method="get" action="success.php" >
    <div class="mb-3">
            <label for="firstname" class="form-label">firstname</label>
            <input  name="firstname" type="text" class="form-control" id="firstname" aria-describedby="firstname">
            <div id="firstname" class="form-text"></div>
        </div>
        
        
        <div class="mb-3">
        <label for="lastname" class="form-label">lastname</label>
            <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="lastname">
            <div id="lastname" class="form-text"></div>
        </div>

        
        <div class="mb-3">
            <label for="dob" class="form-label">Date of birth</label>
            <input type="text" class="form-control" id="dob" name="dob" aria-describedby="dob">
            <div id="dob" class="form-text"></div>
        </div>
        
        
        <div class="mb-3">
            <label for="Specilaty" class="form-label">Specilaty</label>
            <select class="form-select" name="Specilaty" id="Specilaty" aria-label="Default select example">
                <option value="DBA">DBA</option>
                <option value="SoftWare Devkoper">DBA</option>
                <option value="other">other</option>
                </select>
            <div id="Specilaty" class="form-text"></div>
        </div>
        
        
        <div class="mb-3">
        <label for="email" class="form-label">Email Adress</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="email" name="email" class="form-text"></div>
        </div>
        
        <div class="mb-3">
        <label for="phone" class="form-label">Contact number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
            <div id="phone" class="form-text"></div>
        </div>
        

        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        

        <button type="submit" class="btn btn-primary" name="submit" class="btn-block"  >Submit</button>
</form>
<br>
<br>
<br>
<br>
<br>
</div>
<?php require_once "includes/fotter.php";?>
