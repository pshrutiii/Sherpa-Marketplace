<!DOCTYPE html>
<html>
<head>
<title>Shopping Cart</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/agency.css" media="screen" type="text/css" />
<link rel="stylesheet" href="css/cart.css" media="screen" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>

<body>

<div id="site">
	<div id="content">
		<h2>Shopping Cart</h2>
		<div id="mainDiv" >
			<div class="contentDiv">
                <div class="a-row">
                    <div class="a-column a-span8"></div>
                    <!-- for image/item info column -->
                    <div class="a-column a-span2 a-text-left a-spacing-top-micro">
                        <span class="a-color-secondary">
                        Price
                        </span>
                    </div> <!-- for price column -->
                    <div class="a-column a-span2 a-text-right a-spacing-top-micro a-span-last">
                        <span class="a-color-secondary fleft">
                        Quantity
                        </span>
                    </div> <!-- for quantity column -->
                    </div>
			</div>		
            <div class="sc-subtotal a-text-right a-float-right ptop20">
                <p class="a-spacing-none a-spacing-top-mini" id="sub-total">
                    <span class="a-size-medium a-text-bold">
                        Subtotal (<span class="item-count"></span> item(s)):
                        <span class="a-color-price a-text-bold">
                            <span class="a-size-medium a-color-price sc-price sc-white-space-nowrap sc-price-sign" id="stotal">$14.99</span>
                        </span>
                    </span>
                </p>
            </div>			
		</div>
	</div>
</div>
<div class="pleft">
    <hr/>
<a href="index.php" class="btn btn-info">Continue Shopping</a>
<a href="checkout.php" class="btn btn-success">Checkout</a>
<a id="empty-cart"  class="btn btn-danger">Empty Cart</a>
</div>
	<div id="dvHidden" class="hdnDiv">
        <hr/>
    <div class="a-row a-spacing-base a-spacing-top-base ">
        <div class="a-column a-span8">
            <div class="a-fixed-left-grid">
                <div class="a-fixed-left-grid-inner" style="padding-left:115px">
                    <div class="a-fixed-left-grid-col a-float-left a-col-left" style="width:115px;margin-left:-115px;float:none;">
                        <div class="sc-item-product-image">
                            <a class="a-link-normal sc-product-link" href="">
                                <img src="#" alt="img" class="product-image pleft">
                            </a>
                        </div>
                    </div> <!-- for image column -->
                    <div class="a-fixed-left-grid-col a-col-right" style="padding-left:0%;*width:99.6%;float:left;">
                        <ul class="a-unordered-list a-nostyle a-vertical a-spacing-mini">
                            <li>
                                <span class="a-list-item">
                                    <a class="a-link-normal sc-product-link" href="">
                                        <span class="a-size-medium sc-product-title a-text-bold pname">

                                        </span>
                                    </a>
                                    <span class="a-size-base sc-product-creator">
                                        
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span class="a-list-item">
                                    <span class="a-size-small a-color-success sc-product-availability">
                                        In Stock
                                        <span class="a-color-base"></span>
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span class="a-list-item">
                                    <span class="a-size-small a-color-secondary sc-product-sss">
                                        Eligible for FREE Shipping
                                    </span>
                                    <span class="a-size-small a-color-secondary">
                                        &amp; FREE Returns
                                    </span>
                                </span>
                            </li>
                        </ul> <!-- for list -->
                        <div class="a-row sc-action-links">
                            <span class="a-size-small sc-action-delete">
                                <a class="delete-item" href=''>Delete</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="a-column a-span2 a-text-left">
            <p class="a-spacing-small">
                <span class="a-size-medium a-color-price sc-price sc-white-space-nowrap sc-product-price sc-price-sign a-text-bold pprice">$14.99</span>
            </p>
            <p>
            </p>
            <p>
            </p>
        </div>
        <div class="a-column a-span2 a-text-left" style="float: right;margin-top: -27px;">
            <div class="a-spacing-small pqty">
                <input type='number' max="10" min="0" value='' class='qty' />
                <div class="inc  button incrementer"><img class="plus" src="../marketplace-cmpe272/assets/plus.svg">+</div><div  class="dec  button incrementer"><img class="minus" src="../marketplace-cmpe272/assets/minus.jpg">-</div>
            </div>
            <p>
            </p>
            <p>
            </p>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script type="text/javascript" src="js/shoppingCart.js"></script>
   
  <script>
    $(document).ready(function() {
        console.log('Calling shopping cart to display');
        ShoppingCart.init();
    });
    </script>   

</body>
</html>	