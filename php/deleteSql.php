<?php

include "connectionSQL.php";
$userid = $_POST["userid"];

try
{
$sql  = "DELETE FROM mydb.demotb WHERE UserId=?;";

$stmt = $conn->prepare($sql);
$stmt->execute(array(
    $userid
));
}

catch (PDOException $e)
{
    echo "ERROR: Could not able to execute";
}

include "openV.php";

?>