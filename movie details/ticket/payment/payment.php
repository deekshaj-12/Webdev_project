<!DOCTYPE html>
<html>
<head>
	<title>Payment Options</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			padding: 20px;
			background-image: url('/cinebuzz/login/session/images/bg.jpg');
		}
		
		h1 {
			text-align: center;
			margin-bottom: 20px;
		}
		
		.payment-options {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}
		
		.payment-option {
			background-color: white;
			box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
			padding: 20px;
			margin: 20px;
			width: 300px;
			text-align: center;
		}
		
		.payment-option img {
			height: 100px;
			margin-bottom: 20px;
		}
		
		.payment-option h2 {
			margin-bottom: 10px;
		}
		
		.payment-option p {
			margin-bottom: 20px;
		}
		
		button {
			background-color: #4CAF50;
			color: white;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
		}
		
		button:hover {
			background-color: #3e8e41;
		}

		.img{
			height: 20px;
			width: 300px;
		}
	</style>
</head>
<body>
	<h1>Payment Options</h1>
	
	<div class="payment-options">
		<?php
			// Define an array of payment options with name, image and description
			$payment_options = array(
				array("name" => "UPI", "image" => "upi.png", "description" => "Pay with your UPI enabled app."),
				array("name" => "Credit Card", "image" => "credit-card.png", "description" => "Pay with your credit card."),
				array("name" => "Debit Card", "image" => "credit-card.png", "description" => "Pay with your debit card.")
			);
			
			// Loop through the payment options array and generate HTML for each option
			foreach ($payment_options as $option) {
				echo '<div class="payment-option">';
				echo '<img class="img" src="' . $option["image"] . '" alt="' . $option["name"] . '">';
				echo '<h2>' . $option["name"] . '</h2>';
				echo '<p>' . $option["description"] . '</p>';
				echo '<button>Pay with ' . $option["name"] . '</button>';
				echo '</div>';
			}
		?>
	</div>
	
</body>
</html>
