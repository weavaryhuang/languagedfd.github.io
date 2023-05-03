<?php
include "connectionSQL.php";

$uname = $_POST["uname"];
$status = $_POST["status"];
$uid =  6;

try
{
    $sql  = "Select * from demotb where UserBasicInfo=? and UserStatus=?;";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$uname, $status]);
    $user = $stmt->fetchAll();
    $checkid = count($user);
}
catch (PDOException $e)
{
    echo "ERROR: Could not able to execute";
}

if($checkid > 0){
    // include "datarepo.php";
    // $dataR = new Datarepo();
    // $dataR->set($uname);
    // $tbname = $uname;
    $privilid = 1;
}
else
    $privilid = 0;

$checkid = 0;
$conn = null;

echo json_encode($privilid.$uname);
?>