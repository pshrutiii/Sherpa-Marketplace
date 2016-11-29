<!DOCTYPE html>
<html>
<head>
<title>Your Shopping Cart</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/agency.css" media="screen" type="text/css" />
</head>

<body>

<div id="site">
	<div id="content">
		<h1>Your Shopping Cart</h1>
		<div  action="cart.html" method="post">
			<table class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col" colspan="2">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
			<p id="sub-total">
				<strong>Sub Total</strong>: <span id="stotal"></span>
			</p>
			<ul id="shopping-cart-actions">
				<li>
					<input type="submit" name="update" id="update-cart" class="btn" value="Update Cart" />
				</li>
				<li>
					<input type="submit" name="delete" id="empty-cart" class="btn" value="Empty Cart" />
				</li>
				<li>
					<a href="index.html" class="btn">Continue Shopping</a>
				</li>
				<li>
					<a href="checkout.html" class="btn">Go To Checkout</a>
				</li>
			</ul>
		</div>
	</div>
	
	

</div>
 <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script type="text/javascript" src="js/cart.js"></script>
   
  <script>
    $(document).ready(function() {
        console.log('Calling shopping cart to display');
        ShoppingCart.displayCart();
    });
    </script>   
</body>
</html>	