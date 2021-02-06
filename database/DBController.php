<?php

class  DBController
{
 protected $host = 'localhost';
 protected $user = 'epiz_27867332';
 protected $password = "
E8mkLvr3FHaD";
 protected $database = "epiz_27867332_XXX";

 //connection property
 public $con = null;

 //call constructor
 public function __construct()
 {
  $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
  if ($this->con->connect_error) {
   echo "Failed to connect " . $this->con->connect_error;
  }
 }

 //destructor
 public function __destruct()
 {
  $this->closeConnection();
 }
 //mysqli closing connection
 protected function closeConnection()
 {
  if ($this->con != null) {
   $this->con->close();
   $this->con = null;
  }
 }
}
