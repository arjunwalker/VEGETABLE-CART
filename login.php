<?php

$link =mysqli_connect("localhost","root","","user");

//check connection 
if($link ===false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}

//Escape user input for security
$first_name =mysqli_real_escape_string($link,$_REQUEST['first_name']);
$last_name =mysqli_real_escape_string($link,$_REQUEST['last_name']);
$email =mysqli_real_escape_string($link,$_REQUEST['email']);

//attempt insert query execution
$sql = "INSERT INTO person (first_name,last_name,email) VALUES('$first_name','$last_name','$email')";
if(mysqli_query($link,$sql)){
    echo "Record added successfully.";
} else {
    echo "ERROR added successfully." . mysqli_error($link);
}
//close connection
mysqli_close($link);
?>