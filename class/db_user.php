<?php
// include digunakan untuk memanggil file yang di dalamnya ada kelas yang akan dihubungkan
include 'db.php';
//membuat kelas untuk mengisi logic dari pengambilan data
class db_user extends db{
  // construt dilakukan untuk memanggil fungsi connect() yang ada pada db.php
  public function __construct() {
    $this->connect();
    }
  // membuat fungsi pemanggilan seluruh isi kolom
    function prnt($kolom){
      // di bawah ini merupakan kode sql untuk memilih tabel user, pastikan mengganti 
      // kata user jika nama tabel berbeda
        $sql = "SELECT * FROM user";
        $result = $this->conn->query($sql);
        //if hanya untuk melakukan pengecekan bila table kosong akan memberikan kembalian 0 result
        if ($result->num_rows > 0) {
            // while menampilkan output dari data
            while($row = $result->fetch_assoc()) {
              echo  $row["$kolom"]."<br>";
            }                             
          } else {
            echo "0 results";
          }
        
      }
// jika fungsi sebelumnya mengambil seluruh isi kolom, fungsi ini mengambil isi kolom berdasarkan id
      function prntbyid($kolom,$idx){
    // di bawah ini merupakan kode sql untuk memilih tabel user dengan input id,
        $sql = "SELECT * FROM user where id_user = '$idx'";
        $result = $this->conn->query($sql);
        
            //if hanya untuk melakukan pengecekan bila table kosong akan memberikan kembalian 0 result
        if ($result->num_rows > 0) {
           // while menampilkan output dari data
            while($row = $result->fetch_assoc()) {
              echo  $row["$kolom"]."<br>";
            }
          } else {
            echo "no data";
          }
        
      }      
  }

?>



