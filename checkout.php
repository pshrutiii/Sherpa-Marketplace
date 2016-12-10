<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/toastr.min.css"/>

    </head>
    <body>
        
   
  <div class="container">
      <h3>Enter shipping address</h3>  
  <form> 
  <div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control" id="name"  placeholder="Enter name" onKeyDown="limitText(this,15);" 
onKeyUp="limitText(this,15);">
    </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" onKeyDown="limitText(this,50);" 
onKeyUp="limitText(this,50);">
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Address</label>
    <textarea class="form-control" id="addressTextarea" rows="3" onKeyDown="limitText(this,150);" 
onKeyUp="limitText(this,150);"></textarea>
  </div>
    <div class="form-group">
    <label for="exampleTextarea">Card Number</label>
  <input type="number" class="form-control" id="cardname"  maxlength="16" placeholder="Card No" onKeyDown="limitText(this,16);" 
onKeyUp="limitText(this,16);">
  </div>
    <div class="form-group">
    <label for="exampleTextarea">CVV</label>
      <input type="number" class="form-control" id="cvv" maxlength="3" onKeyDown="limitText(this,3);" 
onKeyUp="limitText(this,3);"  placeholder="CVV">
  </div>
    <div class="form-group">
    <label for="exampleTextarea">Expiration</label>
      <input type="month" class="form-control" id="expiration"  placeholder="MM/YYYY">
  </div>
  <div class="form-group">
  <label for="exampleTextarea">Zip Code</label>
  <input type="number" class="form-control" id="zipcode"  placeholder="Zip Code" onKeyDown="limitText(this,5);" 
onKeyUp="limitText(this,5);">
  </div>
  <button type="button" id="btnSubmit" class="btn btn-primary">Submit</button>
</form>
</div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/toastr.min.js"></script>
<script language="javascript" type="text/javascript">
function limitText(limitField, limitNum) {
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    }}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}


    $(document).ready(function(){
    $("input").prop('required',true);
    $("textarea").prop('required',true);

    $("input").change(function(){





    });

      $('#btnSubmit').click(function(){
        event.preventDefault();
        var storage= sessionStorage;
        storage.setItem("ordername",$('#name').val());
        storage.setItem("orderaddress",$('#addressTextarea').val());
        storage.setItem("orderemail",$('#email').val());
        storage.setItem("ordercard",$('#cardname').val());
        storage.setItem("ordercvv",$('#cvv').val());
        storage.setItem("orderexpiration",$('#expiration').val());
        storage.setItem("orderzipcode",$('#zipcode').val());
        mailUrl="mail.php";
        setCookie('address',$('#addressTextarea').val(),1);

        if ($('#email').val().trim() != "" && $('#name').val().trim() != ""  && $('#addressTextarea').val().trim() != "" && $('#email').val().trim() != ""  && $('#cardname').val().trim() != ""  && $('#cvv').val().trim() != "" && $('#expiration').val().trim() != "" && $('#zipcode').val().trim() !="" ) {
        
        if (validateEmail($('#email').val().trim())){
        
        var link=mailUrl+"?name="+storage.getItem("ordername")+"&email="+storage.getItem("orderemail")+"&zipcode="+storage.getItem("orderzipcode")+"&address="+storage.getItem("orderaddress");
        window.location.href = link;
        toastr.success('Order Submitted','Success');
        storage.removeItem("ShoppingCart");
        storage.removeItem("shippingRates");
        storage.removeItem("total");
        }
        else{
          toastr.error('Please enter correct email address','Fail');
        
          return false;
          
        }
        }
        else{
          
          toastr.error('Please enter all details before submitting order','Fail');
        
          return false;
        }
       });


      
    });


</script>

</body>
</html>
