<!DOCTYPE html>
<html>
<head>
	<title>Pay for something</title>
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">
		.text-box {
			display: block;
		}
		.payment-container {
			width: 500px;
    		margin-top: 100px;
    		margin-left: 300px;
		}
		.pay-btn{
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="payment-container">
		<h2 class="header">Pay for something</h2>

		<form action="" method="" autocomplete="off">
			<label for="item">
				Product
				<input class="text-box" type="text" name="product">
			</label>
			<label for="amount">
				Price
				<input class="text-box" type="text" name="price">
			</label>

			<input class="pay-btn" type="submit" name="pay" value="Pay">
		</form>

		<p>You'll be taken to PayPal to complete your payment.</p>
	</div>
</body>
</html>