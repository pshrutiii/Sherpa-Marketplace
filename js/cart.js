var ShoppingCart = {
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
        var _this = ShoppingCart;
        var $item = $(element);
        var price = $item.parentsUntil('.owl-item').find(".shippingPrice").text();
        if (isNaN(price)) {
            return 0;
        }
        else {
            return price;
        }
    },
    getProductName: function (element) {
        var _this = ShoppingCart;
        var $item = $(element);
        return $item.parentsUntil('.owl-item').find(".product-title>a").text();
    },
    AddToCart: function () {
        //var self=this;
        var self = ShoppingCart;
        console.log('Added to Cart');
        var cost = self.getShippingPrice(this);
        var productName = self.getProductName(this);
        var total = self._convertString(self.storage.getItem(self.total));
        var sTotal = total + cost;
        self.storage.setItem(self.total, sTotal);

        console.log('Set items to session storage');
        var shipping = self._convertString(self.storage.getItem(self.shippingRates));
        var shippingRates = self.calculateShipping(cost);
        var totalShipping = shipping + shippingRates;

        self.storage.setItem(self.shippingRates, totalShipping);
        self.addToCart({
            product: productName,
            price: cost

        });

        self.updateCartCount();
        console.log(total);
        alert('Added to cart');

        console.log(shipping);
        //  alert(shipping);
    },
    addToCart: function (values) {
        self = ShoppingCart;
        var cart = this.storage.getItem(self.cartName);

        var cartObject = self._toJSONObject(cart);
        var cartCopy = cartObject;
        var items = cartCopy.items;
        items.push(values);

        this.storage.setItem(this.cartName, this._toJSONString(cartCopy));
    },
    calculateShipping: function (cost) {
        return cost * 10 / 100;
    },
    createCart: function () {
        var self = ShoppingCart;

        console.log('Setting items');
        console.log(self.cartCount[0]);
                if (self.storage.getItem(self.cartName) != null) {

        var cart = self._toJSONObject(self.storage.getItem(self.cartName));
        var items = cart.items;
        console.log(items.length);
        //Setting count to sessionstorage items        
        self.cartCount.text(items.length);
                }else{

                    self.cartCount.text('0');
                }
        if (self.storage.getItem(self.cartName) == null) {

            var cart = {};
            cart.items = [];

            self.storage.setItem(self.cartName, self._toJSONString(cart));
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
       var cart = self._toJSONObject(self.storage.getItem(self.cartName));
            var items = cart.items;
            console.log(items.length);
            var $tableCartBody = $(self.tableCart).find("tbody");
            //console.log(self.$tableCart[0]);    
            console.log($tableCartBody[0]);
            if (items.length == 0) {
                $tableCartBody.html("");
            } else {
                for (var i = 0; i < items.length; ++i) {
                    var item = items[i];
                    var product = item.product;
                    var price = self.currency + " " + item.price;
                    var qty = item.qty;
                    var html = "<tr><td class='pname'>" + product + "</td>" + "<td class='pqty'><input type='text' value='" + qty + "' class='qty'/></td>";
                    html += "<td class='pprice'>" + price + "</td><td class='pdelete'><a href='' data-product='" + product + "'>&times;</a></td></tr>";

                    $tableCartBody.html($tableCartBody.html() + html);
                }

            }

            if (items.length == 0) {
               // self.$subTotal[0].innerHTML = self.currency + " " + 0.00;
            } else {

                //var total = self.storage.getItem(self.total);
                //self.$subTotal[0].innerHTML = self.currency + " " + total;
            }
    },
    _convertString: function (numStr) {
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
    },
    _toJSONString: function (obj) {
        var str = JSON.stringify(obj);
        return str;
    },
    _toJSONObject: function (str) {
        var obj = JSON.parse(str);
        return obj;
    },
    _convertNumber: function (n) {
        var str = n.toString();
        return str;
    }
}

