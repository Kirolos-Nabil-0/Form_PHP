// CRUD operations
// Path: db\crud.php
<?php
class crud{
    private $db;
    function __construct($conn){
        $this->db = $conn;
    }
    public function insert($fname, $lname ,  $dob , $email ,  $phone , $speciality ){ 
        try {
            $sql = "INSERT INTO attende VALUES (:fname,:lname,:dob,:contract,:speciality)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(":fname",$fname);
            $stmt->bindparam(":lname",$lname);
            $stmt->bindparam(":dob",$dob);
            $stmt->bindparam(":contract",$phone);
            $stmt->bindparam(":speciality",$speciality);
            $stmt->bindparam(":email",$email);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

