<?php
	$itemName1 = $_GET["itemName1"];
	$itemPrice1 = $_GET["itemPrice1"];
	$itemQuantity1 = $_GET["itemQuantity1"];
	$itemName2 = $_GET["itemName2"];
	$itemPrice2 = $_GET["itemPrice2"];
	$itemQuantity2 = $_GET["itemQuantity2"];
	$itemName3 = $_GET["itemName3"];
	$itemPrice3 = $_GET["itemPrice3"];
	$itemQuantity3 = $_GET["itemQuantity3"];
	$itemName4 = $_GET["itemName4"];
	$itemPrice4 = $_GET["itemPrice4"];
	$itemQuantity4 = $_GET["itemQuantity4"];
	$itemName5 = $_GET["itemName5"];
	$itemPrice5 = $_GET["itemPrice5"];
	$itemQuantity5 = $_GET["itemQuantity5"];
	$names = array($itemName1, $itemName2, $itemName3, $itemName4, $itemName5);	
	$prices = array($itemPrice1, $itemPrice2, $itemPrice3, $itemPrice4, $itemPrice5);
	$totalPrice = 0;
	$Quantities = array($itemQuantity1, $itemQuantity2, $itemQuantity3, $itemQuantity4, $itemQuantity5);
	$totalQuantity = 0;
?>


<!DOCTYPE hmtl>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Cash Register Receipt Template</title>
</head>
	<body>
		<h1 class="jumbotron">Cash Register Receipt Template</h1>
		<div class="container">
			<div class="contact-info">		
				<h4>My Super Cool Business</h4>
				<h4>Phone number here</h4>		
				<address>1234 Cool Moe Dee Street<br> This Town, ST  56789</address>
			</div>
			<div class="receipt-output container">
			  <div class="col-xs-12 col-md-3">
				<?php
				foreach($names as $name) {
					echo "Item ordered: ";
					if($name == ""){
				 		echo "<span class='italics'>" . "Please enter a name." . "</span>" . "<br>";}
				 	else {	
					 	echo "<span class='itemName'>" . $name .  "</span>" . "<br>"; 
					 }
					}
				?>
				<br>
			  </div>
			  <div class="col-xs-12 col-sm-6 col-md-3">
				<?php
				foreach($prices as $price){
					echo "Price of item: ";
					if($price == ""){
						echo "<span class='italics reminder'>" . "Please enter a price." . "</span>" . "<br>";}	
					else {
						echo "<span class='itemList'>" . $price . "</span>" . "<br>"; 
					}	
				$totalPrice = $totalPrice +$price;
				}

				echo "<br>" . "Total price of purchase: $" . $totalPrice . "<br>";
				?>

				<br>
			  </div>
			  <div class="col-xs-12 col-sm-6 col-md-3">
				<?php
				foreach($Quantities as $Quantity){
					echo "Quantity ordered: ";
					if($Quantity == ""){
						echo "<span class='italics reminder'>" . "Please enter the quantity." . "</span>" . "<br>";}
					else {	
						echo "<span class='itemList'>" . $Quantity . "</span>" . "<br>"; 
					}	
				$totalQuantity = $totalQuantity +$Quantity;
				}
				echo "<br>" . "Number of items purchased: " . $totalQuantity . "<br>";
				?>
			  </div>				
			</div>
		</div>	
		<div id="thanks">
			<h3>Thank you for your business!</h3>
		</div>	

	</body>
</html>