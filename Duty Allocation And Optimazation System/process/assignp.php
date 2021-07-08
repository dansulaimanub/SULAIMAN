<?php

require_once ('dbh.php');

$pname = $_POST['pname'];
$eid = $_POST['eid'];
 $end = $_POST['enddate']; $subdate = $_POST['duedate'];

$sql = "INSERT INTO `project`(`eid`, `pname`, `duedate`,`enddate` , `status`) VALUES ('$eid' , '$pname' , '$subdate','$end' , 'Due')";

$result = mysqli_query($conn, $sql);


if(($result) == 1){
    
    
    header("Location: ..//assignproject.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}




?>