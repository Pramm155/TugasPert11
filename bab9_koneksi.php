<?php
$connection = mysqli_connect("localhost","root","","kuliah");
// kuliah adalah nama database

if (!$connection) {
    echo "Connection failed: " . mysqli_connect_error();
} 