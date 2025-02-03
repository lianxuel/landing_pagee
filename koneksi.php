<?php

$host = "localhost";

$username ="root";

$password = " ";

$database = "nama_database";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
 die("koneksi gagal: " .$coon->connect_error);
}

?>