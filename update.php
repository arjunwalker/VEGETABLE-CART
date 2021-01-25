<?php
if(isset($_POST['UPDATE'])){
$id= filter_input(INPUT_POST, 'id');
$firstname= filter_input(INPUT_POST, 'firstname');
$lastname= filter_input(INPUT_POST, 'lastname');
$username= filter_input(INPUT_POST, 'username');
$password= filter_input(INPUT_POST, 'password');


if (!empty($firstname)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "user";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
//$sql = "INSERT INTO project(project_id,project_name,project_cost,project_materials) values ('$id','$name','$cost','$mat')";

$sql="UPDATE login
SET 
firstname='$firstname',
lastname='$lastname',
username='$username',
password='$password'


WHERE id='$id'";

if ($conn->query($sql)){
//echo "New record is inserted sucessfully";
     echo '<script>alert("details updated sucessfully");</script>';
     echo '<script>window.location = "usercurb.html";</script>';

}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo '<script>alert("Please enter details correctly");</script>'; 

die();
}
}
else{
echo '<script>alert("Please enter details correctly");</script>'; 
   
die();
}
}
else if(isset($_POST['submit'])){
    
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "user");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password= mysqli_real_escape_string($link, $_REQUEST['password']);


 
// Attempt insert query execution
$sql = "INSERT INTO login (id,firstname,lastname,username,password) VALUES ('$id', '$firstname', '$lastname','$username','$password')";
if(mysqli_query($link, $sql)){
    echo '<script>alert("data inserted sucessfully");</script>';
    echo '<script>window.location = "usercurb.html";</script>';

  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

}else if(isset($_POST['DELETE'])){
    
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "user");
     
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $id = mysqli_real_escape_string($link, $_REQUEST['id']);
    // Attempt delete query execution
    $sql = "DELETE FROM login WHERE id='$id'";
    if(mysqli_query($link, $sql)){
        echo "Records were deleted successfully.";
        echo '<script>window.location = "usercurb.html";</script>';
        
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        
    }
     
    // Close connection
    mysqli_close($link);

    
}
else{
    echo "enter";
}
?>

