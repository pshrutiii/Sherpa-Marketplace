#Test Cases-


##Case 1. Registration and Login

Go to Home Page i.e. http://sherpaa.herokuapp.com/index.php
Click on Join
Enter your details
Click on Submit
Note that if you have already registered with the email address, you cannot reuse it to register again.
Now click on Sign in link at the bottom i.e. http://sherpaa.herokuapp.com/includes/login.php
Try entering wrong password, you will get an error message
Now enter correct password and proceed to login

##Case 2. Getting Products by Curl

On the home page i.e. http://sherpaa.herokuapp.com/index.php, there are various links on the left side,
Click on any link to go to the product details of that website
These are being pulled in from the individual websites by curl command.
Click on any product image to go into more details.
Click on Add To Cart button to add product to cart.
Note that this is one of the two ways to add to cart.
If you scroll to the top, product would have been added to cart and the cart item count would have been incremented.

##Case 3. Search products functionality

Start typing on the search bar at the top, make use of the autocomplete functionality to select a product/service and click on search button.
Click on the product which appears
You will be redirected to the product detail page which lists info about the product along with it's price and ratings.
Click on Add To Cart button to add product to cart.
Note that this is one of the two ways to add to cart.
If you scroll to the top, product would have been added to cart and  the cart item count would have been incremented.
You may click on the count to go to cart page to view your cart.
Click on logo to go back to home

##Case 4. Top products by visit

The Most popular section on index page lists the most popular product by visit count.
Everytime you visit a product detail like you did in the previous test case, you increment the visit count by 1.
The products with the highest view count are shown in an ascending order
Note that this is irrespective of ratings and just based on the number of visits.
Along with product image, the person whose website it is, is also being displayed.
Only top 6 most visited products are showed in the carousel.
You can click on the arrow buttons on the side to go through all the products.

##Case 5. Limited time deals

Today's Deals section on index page shows the hottest discounted deals
The available time to buy the product is shown below the product
If you refresh the page you can see the time changes as latest time remaining is pulled from server

##Case 6. Top products by rating

Top Rated Section on index page shows the top 3 products by highest ratings from all of the websites.
Every time a product is rated, the avg rating of the product changes and it's ranking within this section may change.
Note that this is irrespective of on the number of visits and just based on the average ratings.

##Case 7. Rating a product/service

Scroll to the bottom of the index page
From the Suggested websites section, click on the first column store, i.e. Code Warriors-Custom Dev
A new tab will open with https://codewarriors.herokuapp.com/
Click on the first link on the home page (Click to know more about our products) or go to https://codewarriors.herokuapp.com/customwebsites.php directly.
At the bottom of the screen you will have a star rating system where you can rate the service (in increments of .5).
Rate the service and click on any no of stars and confirm the rating from popup.
Note that once you have can rate a product only once.
From the top of the page click on any product and rate them.
These ratings influence the avg rating of the product and decides its order in the Top Rated Section of our market place.
Go back to Sherpa website tab

##Case 8. Cart special features

Go to the All Products and Services section of the index page.
Hover over any product/service and click on the cart icon. This can be confirmed if the hover text says 'Add to Cart'
Click on the button.
The product/service will be added to cart.
Click on the button again.
The product/service will be added to cart.
Note that this is second of the two ways to add to cart.
Now scroll to the top and click on the cart items link.
You will be redirected to the cart page i.e. http://sherpaa.herokuapp.com/cart.php
Here you will see all cart items displayed along with their quantity and prices.
Note that if you have clicked on an product more than once, it will not be displayed multiple times but instead it's quantity will be incremented
Click on delete button below a product description to delete it from cart.
Click on the empty cart, all selected cart items will be deleted.
Click on continue shopping and go back to index page to do some shopping!!.

##Case 9. Additional Cart features

On the index page,hover over any product/service and click on the cart icon. This can be confirmed if the hover text says 'Add to Cart'
Click on the button.
The product/service will be added to cart.
Go to the All Products and Services section of the index page.
Click on Products tab and add a product to your shopping cart by clicking on the shopping cart icon which appears when you hover on the product image
Click on Services tab and add a service to your shopping cart by clicking on the shopping cart icon which appears when you hover on the image
Now scroll to the top and click on the cart items link.
You will be redirected to the cart page i.e. http://sherpaa.herokuapp.com/cart.php
Increment or decrement the quantity of the products by clicking on the +/- buttons or edit the textbox.
Note that amount and number of items in cart is changed dynamically

##Case 10. Checkout and Mail

On the index page,hover over any product/service and click on the cart icon. This can be confirmed if the hover text says 'Add to Cart'
Click on the button.
The product/service will be added to cart.
Now scroll to the top and click on the cart items link.
You will be redirected to the cart page i.e. http://sherpaa.herokuapp.com/cart.php
Change the product quantities and click on the Checkout button at the bottom.
Enter your details in the checkout page.
Note that all details have to be filled in to proceed. Also please enter a valid email address to check email confirmation
Take note of the validations added-
	Name cannot be more than 15 characters
	Email has to be valid email and less than 50 characters
	Address has to be less than 150 characters
	Card No. must be less than 16 digits
	CVV must be less than 3 digits
	Zip Code must be less than 5 digits
Checkout the month picker on the Expiration input.
After you click on submit, a thank you page will appear and a mail will be sent to the email address entered.
You can check the mail box to confirm receipt of your order.
Also you can go to the index page ie. http://sherpaa.herokuapp.com and confirm that cart has been emptied.
