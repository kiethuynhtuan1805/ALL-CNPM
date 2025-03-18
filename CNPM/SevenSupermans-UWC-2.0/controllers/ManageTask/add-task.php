<?php
include("../../models/connection.php");
$date = date("Y-m-d");
$sql = 'INSERT INTO `week` (`creator`,`date`) VALUES ("Back Officer 1", "2022/12/15" )';
mysqli_query($conn, $sql);
mysqli_close($conn);
