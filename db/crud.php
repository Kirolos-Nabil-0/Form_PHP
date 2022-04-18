// CRUD operations
// Path: db\crud.php
<?php
class crud{
    private $db;
    function __construct($conn){
        $this->db = $conn;
    }
    public function insert($fname, $lname ,  $dob , $email , $phone , $Specilaty ){  
        try {
            $sql = "INSERT INTO attende VALUES (:fname,:lname,:dob,:contract,:speciality)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(":fname",$fname);
            $stmt->bindparam(":lname",$lname);
            $stmt->bindparam(":dob",$dob);
            $stmt->bindparam(":contract",$phone);
            $stmt->bindparam(":speciality",$Specilaty);
            $stmt->bindparam(":email",$email);

            $stmt->execute();
            return true; 

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;   // returns false if the query fails
        }
    }
}

