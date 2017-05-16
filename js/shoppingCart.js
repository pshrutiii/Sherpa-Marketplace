    // 1. Supporting IE6 neccessiates using self instead of bind
    // 2. For newer browsers, update to use call or apply
    // 3. Using literal patten, for module pattern see cart.js
var ShoppingCart = {
    btnAddToCart: $('.addCart'),
    btnEmptyCart: $('#empty-cart'),
    btnDelete: $('.product-item'),
    shippingPrice: ".shippingPrice",
    currency:"$",
    cartName: 'ShoppingCart',
    total: 'total',
    shippingRates: 'shippingRates',
    productDiv:$('#dvHidden'),
    cartCount: $('.cart-count'),
    //incrementerButton:$('.incrementer'),
    //tableCart:'.shopping-cart',
    cartBody:$('.contentDiv'),
    totalId:$('#stotal'),
    storage: sessionStorage, // shortcut to the sessionStorage object
    init: function () {
        var self = ShoppingCart;
        self.createCart();
        self.displayCart();
        $('.qty').change(self.recalculate);
        self.btnEmptyCart.click(self.EmptyCart);
        $('.delete-item').click(self.DeleteProduct);
       self.recalculate();
       $('.plus').click(self.increment);
       $('.minus').click(self.decrement);
    },
    increment:function(){
    var self=ShoppingCart;
    var $button = $(this);
    var oldValue = $button.parents(".pqty").find('.qty').val();
    var newVal = parseFloat(oldValue) + 1;

    $button.parents(".pqty").find('.qty').val(newVal);
    self.recalculate();

    },
        decrement:function(){
    var self=ShoppingCart;
    var $button = $(this);
    var oldValue = $button.parents(".pqty").find('.qty').val();
    
   // Don't allow decrementing below zero
    if (oldValue > 2) {
      var newVal = parseFloat(oldValue) - 1;
    } else {
      newVal = 1;
    }
  
   $button.parents(".pqty").find('.qty').val(newVal);

    self.recalculate();
    },
    DeleteProduct:function(obj){
        //alert('Delete called');
        event.preventDefault();
        var self=ShoppingCart;
        console.log('Delete');

        var product=$(this).parents('.product-item');
        //$(this).parent().parent()[0].remove();
        product.parent().remove();
        self.recalculate();

        var pName=product.find('.pname').text().trim();
        
        console.log(pName);
        var cart = self.storage.getItem(self.cartName);

        var cartObject = self._toJSONObject(cart);
        var cartCopy = cartObject;
        var items = cartCopy.items;
        var newItems=self.deleteFromCart(items,'product',pName);
        cartCopy.items=newItems;

        //console.log(pName);
        self.storage.setItem(self.cartName, self._toJSONString(cartCopy));
        return false;
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
    recalculate:function(){
      
      var self=ShoppingCart;
      var num=0,count=0;
       console.log('Inside recalculate');
      
       $("div.product-item").each(function(i, dv) {
       var value = self._convertString($(dv).find('.pprice').text().replace("$ ",""));
       var quantity = self._convertString($(dv).find('.qty').val());
       num+=value*quantity;
       count+=quantity;
    });
    //console.log(self.totalId);
    self.totalId.text(self.currency+" "+num);    
    $('.item-count').text(count);
    }
    
    ,
    EmptyCart:function(){
        var self=ShoppingCart;
        self.storage.removeItem(self.cartName);
        self.storage.removeItem(self.shippingRates);
        self.storage.removeItem(self.total);
        self.cartBody.empty();
        self.totalId.text(self.currency+" "+0);
        $('.item-count').text(0);

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
            price: cost,
            qty:1
        });

        self.updateCartCount();
        console.log(total);
        alert('Added to cart');

        console.log(shipping);
        //  alert(shipping);
    },
    deleteFromCart: function(array, property, value) {
            array.forEach(function(result, index) {
            if(result[property] === value) {
                //Remove from array
                array.splice(index, 1);
            }    
        });
        return array;
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
    displayCart: function () {
        console.log("Cart being displayed");
       var self=ShoppingCart;
       var cart = self._toJSONObject(self.storage.getItem(self.cartName));
            if(cart==null){
                return;
            }
            var items = cart.items;
            console.log(items.length);
            //var $tableCartBody = $(self.tableCart).find("tbody");
            var cartBody=self.cartBody;
            //console.log(self.$tableCart[0]);    
            //console.log($tableCartBody[0]);
            if (items.length == 0) {
                //$tableCartBody.html("");
                cartBody.empty();
            } else {
                
                var productNameArr = $.map(items, function(item) {
                    return item.product;
                });

                var groups = productNameArr.reduce(function(acc,e){acc[e] = (e in acc ? acc[e]+1 : 1); return acc}, {});

                var itemArr=self._removeDuplicates(items,'product');
                
                
                var subTotal=0;
                for (var i = 0; i < itemArr.length; ++i) {
                    
                    var item = itemArr[i];
                    var product = item.product;
                    var price = self.currency + " " + item.price;
                    var qty = groups[product];
                    subTotal+=parseInt(qty)*parseInt(item.price);

                    var img=item.imgProduct;
                 
                    var div = document.createElement('div');
                    div.innerHTML = document.getElementById('dvHidden').innerHTML;

                    $(div).find('.dvHidden').removeClass('dvHidden').addClass('product-item');
                    $(div).find('.a-spacing-top-base').addClass('product-item');
                    //console.log($(div));
                    //$(div).find('.dvHidden').removeClass('dvHidden');
                    $(div).find('.product-image').attr('src',img);
                    $(div).find('.pname').text(product);
                    $(div).find('.pprice').text(price);
                    $(div).find('.qty').val(qty);
                    //console.log($('.contentDiv').html());
                    $('.contentDiv').append($(div));
                    //$('.contentDiv').html($('.contentDiv').html() + $(div)[0]);
                    //console.log($('.contentDiv').html());
                 }
            }

            var $subTotal=self.totalId;

            if (items.length == 0) {
                $subTotal[0].innerHTML = self.currency + " " + 0.00;
            } else {
                $subTotal[0].innerHTML = self.currency + " " + subTotal;
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

