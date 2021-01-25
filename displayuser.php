<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VC:Admin panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.8.1/bootstrap-table.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.8.1/bootstrap-table.min.js"></script>
  <style>
      body {
          text-align: center;
          background-image: url(http://localhost/phpdemo/vc/admin/user.jpg);
       background-size: cover;
      }
      </style>
      <?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM login";
echo '<table border="10" cellspacing="2" cellpadding="2" align="center"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td>
          <td> <font face="Arial">First Name</font> </td> 
          <td> <font face="Arial">Last Name</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Password</font> </td> 
      
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field0name = $row["id"];
        $field1name = $row["firstname"];
        $field2name = $row["lastname"];
        $field3name = $row["username"];
        $field4name = $row["password"];
        
    
 
        echo '<tr>
                  <td>'.$field0name.'</td> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td>
              </tr>';
    }
    $result->free();
} 
?>
</head>
<body>
    <p> ALL REGISTERED USERS </p>
    <button onclick="window.location.href='http://localhost/phpdemo/vc/display.html';">
      Go Back
    </button>
</body>
</html>




