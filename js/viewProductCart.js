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
        //var $item = $(element);
        var price = $(".FinalCost").text();
       // alert(price);
        if (isNaN(price)) {
            return 0;
        }
        else {
            return price;
        }
    },
    getProductName: function (element) {
        var _this = ShoppingCart;
        //var $item = $(element);
       // alert($(".productName").text());
        return $(".productName").text().trim();
    },
    getImage:function(element){
        var self=ShoppingCart;
        var $item = $(element);
        var img= $(".productImg");
        //alert(img.attr('src'));
        return img.attr('src');
    },
    AddToCart: function () {
        //var self=this;
    
        var self = ShoppingCart;
        console.log('Added to Cart');
        var cost = self.getShippingPrice(this);
        var productName = self.getProductName(this);
        var image=self.getImage(this);
        
        alert(cost);
        alert(productName);
        alert(image);

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
            imgProduct:image,
            price: cost,
            qty:1
        });

        self.updateCartCount();
        console.log(total);
        //alert('Added to cart');
        toastr.success('Your selection has been added to cart','Cart updated');

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
    },
    
 _removeDuplicates(originalArray, prop) {
     var newArray = [];
     var lookupObject  = {};

     for(var i in originalArray) {
        lookupObject[originalArray[i][prop]] = originalArray[i];
     }

     for(i in lookupObject) {
         newArray.push(lookupObject[i]);
     }
      return newArray;
 }


}

