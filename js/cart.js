    // 1. Supporting IE6 neccessiates using self instead of bind
    // 2. For newer browsers, update to use call or apply
    // 3. Updated to use Module pattern, for literal pattern see shoppingCart.js

    var ShoppingCart = (function(){

        function _convertString(numStr) {
            var num;
            if (/^[-+]?[0-9]+\.[0-9]+$/.test(numStr)) {
                num = parseFloat(numStr);
            } else if (/^\d+$/.test(numStr)) {
                num = parseInt(numStr, 10);
            } else {
                num = Number(numStr);
            }

            if (!isNaN(num)) {
                return num;
            } else {
                console.warn(numStr + " cannot be converted into a number");
                return false;
            }
        }
        function _toJSONString(obj) {
            var str = JSON.stringify(obj);
            return str;
        }
        function _toJSONObject(str) {
            var obj = JSON.parse(str);
            return obj;
        }
        function _convertNumber(n) {
            var str = n.toString();
            return str;
        }

        function _removeDuplicates(originalArray, prop) {
            var newArray = [];
            var lookupObject  = {};

            for(var i in originalArray) {
                if(originalArray.hasOwnProperty(i)){
                lookupObject[originalArray[i][prop]] = originalArray[i];
                }
        }

            for(i in lookupObject) {
                if(lookupObject.hasOwnProperty(i)){
                newArray.push(lookupObject[i]);
                }
            }
            return newArray;
        }


    return {
        btnAddToCart: $('.addCart'),
        shippingPrice: ".shippingPrice",
        currency:"$",
        cartName: 'ShoppingCart',
        total: 'total',
        shippingRates: 'shippingRates',
        cartCount: $('.cart-count'),
        tableCart:'.shopping-cart',
        storage: sessionStorage, // shortcut to the sessionStorage object
        init: function () {
            var self = ShoppingCart;
            self.btnAddToCart.click(self.AddToCart);
            self.createCart();
        },
        getShippingPrice: function (element) {
            var $item = $(element);
            console.log($item);
            console.log($item.parentsUntil('.owl-item').find(".prices").find(".shippingPrice"));
            console.log($item.parentsUntil('.owl-item').find(".shippingPrice"));
            var price = $item.parentsUntil('.owl-item').find(".shippingPrice").text();
            if (isNaN(price)) {
                return 0;
            }
            else {
                return price;
            }
        },
        EmptyCart:function(){
            $('.cart-body').empty();
        },
        getProductName: function (element) {
            var $item = $(element);
            return $item.parentsUntil('.owl-item').find(".product-title>a").text();
        },
        getImage:function(element){
            var $item = $(element);
            var img= $item.parentsUntil('.owl-item').find(".product-image>a>img");
            return img.attr('src');
        },
        AddToCart: function () {
            //var self=this;
            var self = ShoppingCart;
            console.log('Added to Cart');
            var cost = self.getShippingPrice(this);
            var productName = self.getProductName(this);
            var image=self.getImage(this);

            var total = _convertString(self.storage.getItem(self.total));
            var sTotal = total + cost;
            self.storage.setItem(self.total, sTotal);

            console.log('Set items to session storage');
            var shipping = _convertString(self.storage.getItem(self.shippingRates));
            var shippingRates = self.calculateShipping(cost);
            var totalShipping = shipping + shippingRates;

            self.storage.setItem(self.shippingRates, totalShipping);
            self.addToCart({
                product: productName,
                imgProduct:image,
                price: cost,
                qty:1
            });

            self.updateCartCount();
            console.log(total);
            // alert('Added to cart');
            toastr.success('Your selection has been added to cart','Cart updated');
            console.log(shipping);
            //  alert(shipping);
        },
        addToCart: function (values) {
            self = ShoppingCart;
            var cart = this.storage.getItem(self.cartName);

            var cartObject = _toJSONObject(cart);
            var cartCopy = cartObject;
            var items = cartCopy.items;
            items.push(values);

            this.storage.setItem(this.cartName, _toJSONString(cartCopy));
        },
        calculateShipping: function (cost) {
            return cost * 10 / 100;
        },
        createCart: function () {
            var self = ShoppingCart;

            console.log('Setting items');
            console.log(self.cartCount[0]);
            var cart={};
            if (self.storage.getItem(self.cartName) !== null) {

            cart = _toJSONObject(self.storage.getItem(self.cartName));
            var items = cart.items;
            var count=0;
            for (var i = 0; i < items.length; ++i) {
                count+=parseInt(items[i]['qty']);
            }
            console.log(count);
            //Setting count to sessionstorage items
            self.cartCount.text(count);
                    }else{

                        self.cartCount.text('0');
                    }
            if (self.storage.getItem(self.cartName) === null) {

                cart = {};
                cart.items = [];

                self.storage.setItem(self.cartName, _toJSONString(cart));
                self.storage.setItem(self.shippingRates, "0");
                self.storage.setItem(self.total, "0");
            }
        },
        updateCartCount: function () {
            var self = ShoppingCart;
            var current = self.cartCount.text();
            var newCount = parseInt(current) + 1;
            self.cartCount.text(newCount);
        },
        displayCart: function () {
        console.log("Cart being displayed");
        var self=ShoppingCart;
        var subTotal=0;
        var cart = _toJSONObject(self.storage.getItem(self.cartName));
                if(cart===null){
                    return;
                }
                var items = cart.items;
                console.log(items.length);
                var $tableCartBody = $(self.tableCart).find("tbody");
                //console.log(self.$tableCart[0]);
                console.log($tableCartBody[0]);
                if (items.length === 0) {
                    $tableCartBody.html("");
                } else {

                    var productNameArr = $.map(items, function(item) {
                        return item.product;
                    });

                    var groups = productNameArr.reduce(function(acc,e){acc[e] = (e in acc ? acc[e]+1 : 1); return acc}, {});

                    var itemArr=_removeDuplicates(items,'product');



                    for (var i = 0; i < itemArr.length; ++i) {

                        var item = itemArr[i];
                        var product = item.product;
                        var price = self.currency + " " + item.price;
                        var qty = groups[product];
                        subTotal+=parseInt(qty)*parseInt(item.price);

                        var img=  item.imgProduct;

                        var html = "<tr>"+"<td><img src='"+ img+"' /></td>"+"<td class='pId'>" + (parseInt(1)+ parseInt(i)) + "</td>"+"<td class='pname'>" + product + "</td>" + "<td class='pqty'><input type='number' value='" + qty + "' class='qty'/></td>";
                        html += "<td class='pprice'>" + price + "</td><td class='pdelete'><a href='' data-product='" + product + "'>&times;</a></td></tr>";

                        $tableCartBody.html($tableCartBody.html() + html);
                    }
                }

                var $subTotal=$('#sub-total');

                if (items.length === 0) {
                    $subTotal[0].innerHTML = self.currency + " " + 0.00;
                } else {
                    $subTotal[0].innerHTML = self.currency + " " + subTotal;
                }
        },
    };
    });



