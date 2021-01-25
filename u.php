<?php
if(isset($_POST['UPDATE'])){
$id= filter_input(INPUT_POST, 'id');
$vegetablename= filter_input(INPUT_POST, 'vegetablename');
$price= filter_input(INPUT_POST, 'price');


if (!empty($vegetablename)){
if (!empty($price)){
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

$sql="UPDATE adminprice 
SET 
vegetablename='$vegetablename',
price='$price'

WHERE id='$id'";

if ($conn->query($sql)){
//echo "New record is inserted sucessfully";
     echo '<script>alert("details updated sucessfully");</script>';
     echo '<script>window.location = "vegecurb.html";</script>';

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
$vegetablename = mysqli_real_escape_string($link, $_REQUEST['vegetablename']);
$price = mysqli_real_escape_string($link, $_REQUEST['price']);

 
// Attempt insert query execution
$sql = "INSERT INTO adminprice (id,vegetablename,price) VALUES ('$id', '$vegetablename', '$price')";
if(mysqli_query($link, $sql)){
    echo '<script>alert("data inserted sucessfully");</script>';
    echo '<script>window.location = "vegecurb.html";</script>';

  
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
    $sql = "DELETE FROM adminprice WHERE id='$id'";
    if(mysqli_query($link, $sql)){
        echo "Records were deleted successfully.";
        echo '<script>window.location = "vegecurb.html";</script>';
        
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

