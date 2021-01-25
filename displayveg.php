</body>
</html>
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
          background-image: url(http://localhost/phpdemo/vc/admin/vegbg.jpg);
       background-size: cover;
       color: black;
      }
      P{
          COLOR : black;
          font-size : 50px;
      }
      </style>
      <?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice";
echo '<table border="10" cellspacing="2" cellpadding="2" align="center"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">vegetables</font> </td> 
          <td> <font face="Arial">price</font> </td> 
      
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["vegetablename"];
        $field3name = $row["price"];
        
    
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</head>
<body>
    <br>
    <p> ALL VEGETABLES</p>
    <p> DETAILS </p>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button onclick="window.location.href='http://localhost/phpdemo/vc/display.html';">
      Go Back
    </button>
</body>
</html>