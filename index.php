<?php
// include digunakan untuk memanggil file yang di dalamnya ada kelas yang akan dihubungkan/diperlukan
 include 'class/db_user.php';
 // dibawah ini merupakan cara membuat objek dari kelas yang sebelumnya dibuat
 $user = new db_user();
 // id merupakan variabel yang nantinya akan digunakan untuk menentukan id_user dari database
 $id = 1;
 ?>

<html>
<head>
<title>Page Title</title>
</head>
<body>
<h1>semua isi dari data dibawah ditampilkan dari database server menggunakan bahasa pemrograman php</h1>
<!--untuk memanggil fungsi yang menampilkan nilai bisa menggunakan php di dalam html, berikut -->
<p>username   : <?php $user->prntbyid("username", $id); ?></p>
<p>password   : <?php $user->prntbyid("password", $id); ?></p>
<p>email   : <?php $user->prntbyid("email", $id); ?></p>

</body>
</html>

<!--
    nb : setelah membuat objek dari kelas db_user 
    memnaggil fungsi yang ada pada kelas menggunakan $user->prntbyid("username", $id);
    yang artinya dari objek user diambil fungsi printbyid dengan 2 dua input parameter
 -->