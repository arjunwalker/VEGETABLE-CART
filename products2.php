<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="description" content="This is the description">
        <title>VC:products</title>
        <link rel="stylesheet" href="products2.css"/>
		<script src="prodtucts2.js" async></script>
		<link href="https://fonts.googleapis.com/css?family=Alegreya+SC:900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kulim+Park&display=swap" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
	
        <header>
			<div class="container">
				<div id="branding">
					<h1>VegetableCart</h1>
					</div>
				<nav>
					<ul> 
						<li class="current"><a href="#">Home</a></li>
						<li>
							<div class="dropdown">
								<a href="logout.html">logout</a>
							</div> 
						</li>
						
					</ul>
				</nav>
			</div>
		</header>
		
		<section class="main-display">
			<h1 class="label">Available Vegetables</h1>
			<div class="store-items">
			
				<div class="shop-item">
					<span class="shop-item-title">Artichoke</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/artichoke.png">
					</div>
					<div class="shop-item-details">
						
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=34.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
               $field3name = $row["price"];
        
    
 
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				
				<div class="shop-item">
					<span class="shop-item-title">Ash-gourd</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/ash-gourd.png">
					</div>
					<div class="shop-item-details">
					<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=1.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Asparagus</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/asparagus.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=2.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Butternut-squash</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/butternut-squash.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=9.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Beans</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/beans.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=3.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Beetroot</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/beetroot.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=4.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Bitter-gourd</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/bitter-gourd.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=5.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				
				<div class="shop-item">
					<span class="shop-item-title">Bottlegourd</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/bottlegourd.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=6.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Brinjal</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/brinjal.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=7.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Broccoli</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/broccoli.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=8.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Cabbage</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/cabbage.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=10.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Capsicum</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/capsicum.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=11.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Drumstick</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/drumstick.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=17.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				
				<div class="shop-item">
					<span class="shop-item-title">Cucumber</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/cucumber.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=16.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Chilli</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/chilli.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=15.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Celery-root</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/celery-root.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=14.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Cauliflower</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/cauliflower.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=13.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Carrot</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/carrot.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=12.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Garlic</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/garlic.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=18.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				
				<div class="shop-item">
					<span class="shop-item-title">Ginger</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/ginger.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=19.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Ladyfinger</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/ladyfinger.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=20.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Red-cabbage</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/red-cabbage.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=28.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Ratalu</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/ratalu.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=27.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Mushroom</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/mushroom.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=21.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Onion</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/onion.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=22.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				
				<div class="shop-item">
					<span class="shop-item-title">Radish</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/radish.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=26.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Peas</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/peas.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=23.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Potato</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/potato.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=24.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Pumpkin</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/pumpkin.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=25.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Snake-gourd</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/snake-gourd.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=29.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				
				<div class="shop-item">
					<span class="shop-item-title">Sweet-potato</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/sweet-potato.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=30.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Tomato</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/tomato.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=31.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Turnip</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/turnip.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=32.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				<div class="shop-item">
					<span class="shop-item-title">Yams</span>
					<div class="box">
						<img class="shop-item-image" src="product pics/yams.png">
					</div>
					<div class="shop-item-details">
						<span class="shop-item-price"><?php 
$username = "root"; 
$password = ""; 
$database = "user"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM adminprice WHERE id=33.";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field3name = $row["price"];
        echo '<tr> 
                 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>Rs/kg</span>
						<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
					</div>
				</div>
				
			</div>
		</section>
		
		<section class="cart-display">
			<h1>Cart</h1>
			<div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">Rs 0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
		</section>
		
		<footer>
			<p>&copy; 2021 vegetablecart by Ashish & Abhishek</p>
		</footer>
		
    </body>
</html>