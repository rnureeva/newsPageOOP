<?php
include "class.php";
$publications = array();
$con = mysqli_connect("localhost","root","","news");
if (mysqli_connect_errno())
{
    echo "failed" . mysqli_connect_error();
}
$result = mysqli_query($con, "SELECT * FROM publications");
while($row = mysqli_fetch_array($result))
{
    $publications[] = new $row['type']($row);
}