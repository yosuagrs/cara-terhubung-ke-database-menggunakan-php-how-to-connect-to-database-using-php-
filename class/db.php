<?php
// file ini digunakan untuk menghubungkan database ke server
class db{ 
//untuk parameter dibawah biasanya sudah umum digunakan
private $servername = "localhost";
private $username = "root";
private $password = "";
// pastikan mengganti nama $db_name sesuai dengan nama database anda
private $db_name = "git";

protected $conn; 
protected $error;

//fungsi ini digunakan untuk terhubung ke database
public function connect() {
  $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db_name);
  if(!$this->conn) {
    $this->error = "Fatal Error: Can't connect to database" . $this->connect->connect_error();
     return false;
     }
}
}

// nb : untuk terhubung ke server, biasanya yang perlu di ubah adalah nama database ($db_name)
    ?>
    
