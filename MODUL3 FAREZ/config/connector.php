<?php
$connection = new mysqli("localhost:3315", "root", "", "modul3");

if (!$connection) {
  die("Koneksi Error: " . $connection->connect_error);
}