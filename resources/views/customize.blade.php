
@extends('layouts.nav')

@section('content')

    <div class="album py-5 bg-light">
        <div class="container">

        <h1> CAKES </h1> 
        <div class="card mb-4 box-shadow">
            </div>

        <h3> 
            <a class="cake-links" href="/occassional"><strong>Occassional</strong></a> 
            <a class="cake-links" href="/customize"><strong>Customize Cakes</strong></a>
        </h3>

        <div>
        
        <form method="POST" action="{{ route('customize') }}">  
          {{ csrf_field() }}
            <table>
                <tr><td>
  <label for="shape">Shape:</label> </td><td>
  <select class="shape" name="shape" id="shape" onchange="updatePrice()">
  <option value="select" id="shape0" prices="0.0">Select a Cake Shape</option>
  <option value="quarterSlab" id="shape1" prices="24.99">Quarter Slab (Serves 12 - 15)</option>
  <option value="round5" id="shape2" prices="8.99">5” Round (Serves 4)</option>
  <option value="fullSlab" id="shape3" prices="79.99">Full Slab (Serves 48 - 60)</option>
  <option value="round8" id="shape4" prices="11.99">8” Round (Serves 6 - 8)</option>
</select><br><br>
</td> </tr>
  <tr> <td>

  <label for="layer">Tier: </label></td> <td>
  <select class="layer" name="layer" id="layer" onchange="updatePrice()">
  <option value="select" prices="0.0">Select a Cake Layer</option>
  <option value="single" prices="24.99">Single</option>
  <option value="double" prices="34.99">Double</option>
  <option value="triple" prices="44.99">Triple</option>
</select><br><br>
  </td> </tr>

  <tr>
                    <td>
  <label for="filling">Filling:</label></td> <td>
  <select name="filling" id="filling" onchange="updatePrice()">
  <option value="select" prices="0.0">Select a Cake Filling</option>
  <option value="banana" prices="10.89">Banana</option>
  <option value="blueberry" prices="10.89">Blueberry</option>
  <option value="chocolate" prices="10.89">Chocolate</option>
  <option value="coconut" prices="10.89">Coconut</option>
  <option value="creamCheese" prices="10.89">Cream Cheese</option>
  <option value="lemon" prices="10.89">Lemon</option>
  <option value="raspberry" prices="10.89">Raspberry</option>
</select><br><br>
  </td> </tr>
  <tr>

                    <td>
  <label for="icing">Icing:</label></td> <td>
  <select name="icing" id="icing" onchange="updatePrice()">
  <option value="select" prices="0.0">Select a Cake Icing</option>
  <option value="semiSweetWhite" prices="9.99">Semi Sweet White</option>
  <option value="semiSweetChocolate" prices="9.99">Semi Sweet Chocolate</option>
  <option value="buttercreamWhite" prices="9.99">Buttercream icing White</option>
  <option value="whippedCreamNon Dairy" prices="9.99">Whipped Cream  - Non Dairy</option>
</select><br><br>
  </td> </tr>
  <tr>

                    <td>
  <label for="flavour">Flavour:</label></td> <td>
  <select name="flavour" id="flavour" onchange="updatePrice()">
  <option value="select" prices="0.0">Select a Cake Flavour</option>
  <option value="vanilla" prices="15.99">Vanilla</option>
  <option value="chocolate" prices="15.99">Chocolate</option>
  <option value="marble" prices="15.99">Marble</option>
  <option value="chocVanilla" prices="15.99">Half Chocolate & Half Vanilla</option>
  <option value="coconut" prices="15.99">Coconut</option>
  <option value="strawberry" prices="15.99">Strawberry</option>
</select><br><br>
  </td> </tr>
  
  <tr>
                    <td>
  <label for="message">Message:</label></td> <td><br/>
  <input type="text" id="message" name="message"><br><br>
  </td> </tr>
   <tr>
                    <td>
</br>
  <label for="total">Price:
  </label></td> <td><br/>
  <input type="text" id="price" name="price" readonly>
  </td> </tr>
</table>

  <input type="submit" value="Add to Cart">
</form>
        </div>  
        <script>

    function getPrice(type) {
      var obj = document.getElementById(type);
      var price = obj.options[obj.selectedIndex].getAttribute("prices");
      if (price == null)
        price = 0;
      return parseFloat(price);
    }

    function updatePrice() {
      var priceElement = document.getElementById("price");
    var price = getPrice("shape") + getPrice("layer") + getPrice("filling") + getPrice("icing") + getPrice("flavour");
    priceElement.value = price.toFixed(2);
      }
      
    </script>  
@endsection
