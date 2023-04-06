@extends('layouts.nav')

@section('content')
    <main role="main">
      <div class="album py-5 bg-light">
        <div class="container">
        <h1> Checkout  </h1>
            <div class="card mb-4 box-shadow">
            </div>

            <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
          <div class="col-50">
            <h3>Payment</h3>
</br>

            
            <!-- <label for="cname">Cardholder Name</label>
            <input type="text" id="cname" name="cardname"> -->
            <div class="form-group row">
              <div class="col-md-6">
                  <label for="cardholdername">Cardholder Name</label>
                  <input id="cardholdername" type="text" class="form-control" name="cardholdername" placeholder="Cardholder Name" required autocomplete="cardholdername" autofocus>
              </div>
            
              <div class="col-md-6">
              <label for="cardnumber" >Card Number</label>
                  <input id="cardnumber" type="cardnumber" class="form-control" name="cardnumber" placeholder="Card Number" required autocomplete="cardnumber" autofocus>
              </div>

              <div class="col-md-6">
              <label for="mmyy" >MMYY</label>
                  <input id="mmyy" type="mmyy" class="form-control" name="mmyy" placeholder="MMYY" required autocomplete="mmyy" autofocus>
              </div>

              <div class="col-md-6">
              <label for="cvv" >CVV</label>
                  <input id="cvv" type="cvv" class="form-control" name="cvv" placeholder="CVV" required autocomplete="cvv" autofocus required>
              </div>
          </div>


          

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" id="checkout" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>


</div>            

<script>
let button = document.getElementById('checkout');

button.onclick = function(e) {
	e.preventDefault();

	// Replace localhost and the folder name
	// based on your setup
	location.href = 'http://127.0.0.1:8000/success';
}

let cart = JSON.parse(sessionStorage.getItem('cart'));

// Check if the user has completed the checkout process
if (user_completed_checkout) {
  // Clear the cart data from the session storage
  sessionStorage.removeItem('cart');
  
  // Alternatively, you can also reset the cart data to an empty object
  // cart = {};
}
</script>
    </main>

@endsection 