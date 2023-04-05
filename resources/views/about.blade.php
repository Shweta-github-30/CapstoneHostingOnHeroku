
@extends('layouts.nav')

@section('content')

      <div class="album py-5 bg-light">
        <div class="container">

        <h1> ABOUT US </h1>
          

            <div class="card mb-4 box-shadow">
            </div>

              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <h2 class="card-text">Creamy Creations</h2>
                  <p class="para-style"> Welcome to Creamy Creation Bakery Shop, where we believe that life is too short for 
                    boring desserts. Our goal is to tantalize your taste buds with our mouth-watering and 
                    customizable selection of cakes, cupcakes, and pastries. We take great pride in using 
                    only the freshest and highest-quality ingredients in all of our products. 
                    Our extensive range of cakes and desserts caters to all occasions, whether you are 
                    looking to celebrate a special event or just treat yourself to something sweet. 
                    Our online ordering system has been designed to make it easy and convenient for you to 
                    customize your cake exactly how you want it. You have the freedom to select the flavor, 
                    frosting, and decorations to create a unique and personalized masterpiece. Our team of 
                    talented bakers and decorators will then work their magic to bring your creation to life. 
                    At Creamy Creation Bakery Shop, we understand that every celebration is special, and we feel 
                    privileged to be a part of your cherished moments. We offer a diverse range of cakes for all 
                    occasions, from birthdays to weddings to baby showers. Thank you for choosing Creamy Creation 
                    Bakery Shop for your dessert needs. We are excited to serve you and make your dessert dreams a 
                    reality. </p>
                  
                </div>
            </div>

              <div class="card mb-4 box-shadow">
                <div class="card-body">
                <h4 style="font-weight:bold"> Feedback </h4>
                  <p class="card-text">Customer feedbacks.</p>
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <div class="container">
  <h1 style="text-align:center">Jane</h1>
  <p style="text-align:center"> Absolutely delicious! I ordered a birthday cake for my son and it exceeded all of our expectations.</p> 
  <p style="text-align:center"> The cake was moist, flavorful, and beautifully decorated.  </p>
</div>
    </div>

    <div class="item">
      <div class="container">
  <h1 style="text-align:center"> Christy </h1>
  <p style="text-align:center"> Amazing experience! Creamy Creation's cakes are the best I've ever tasted. </p> 
  <p style="text-align:center"> From the moment I placed my order online to the first bite, the experience was seamless and delicious.  </p>
</div>
    </div>

    <div class="item">
      <div class="container">
  <h1 style="text-align:center">Ashley </h1>
  <p style="text-align:center">  I couldn't resist the temptation of Creamy Creation's freshly-baked cakes, </p>
  <p style="text-align:center">each bite was a heavenly delight! </p>
</div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

@endsection
