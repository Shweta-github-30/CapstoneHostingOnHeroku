@extends('layouts.nav')

@section('content')
        <div class="flex-center position-ref full-height">
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
        </div>

            <!-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div> -->

    <main role="main">
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <img src="{{url('/images/wallpaper.jpg')}}"
                alt="ID Logo" 
                draggable="false"
                height="500" width="650"/>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
            </div>
            <div class="card mb-4 box-shadow">
            </div>
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                <h4 style="font-weight:bold"> About Us </h4>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="col-md-5">
                      <p class="p7">Welcome to Creamy Creation, your one-stop online bakery for delicious cakes made with only the 
                        finest ingredients. We offer a wide variety of freshly-baked treats that are sure to satisfy your 
                        sweet tooth, all available for easy online ordering and delivery straight to your door. From special 
                        occasion cakes to little indulgences, we have something for everyone. Browse our selection today and 
                        experience the taste of homemade goodness from Creamy Creation.</p>
                    </div>
                    <div class="col-md-6">
                <img class="i1" src="{{url('/images/cake4.jpg')}}"
                  alt="ID Logo" 
                draggable="false"
                height="450" width="650"/>
</div>
                  </div>
                </div>
            </div>
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                <h4 style="font-weight:bold"> Cake photos </h4>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="col-md-4">
                  <img src="{{url('/images/cake1.jpg')}}"
                  alt="ID Logo" 
                draggable="false"
                height="300" width="250"/>
                <!-- <p style="text-align:center">Chocolate Cake </br> with Donut Munchkins</p>
                <p style="text-align:center">$35</p> -->
                </div>
                <div class="col-md-4">
                  <img src="{{url('/images/cake2.jpg')}}"
                  alt="ID Logo" 
                draggable="false"
                height="300" width="250"/>
                <!-- <p style="text-align:center">Brownie Tower</p>
                <p style="text-align:center">$25</p> -->
                </div>
                <div class="col-md-4">
                  <img src="{{url('/images/cake3.jpg')}}"
                  alt="ID Logo" 
                draggable="false"
                height="300" width="250"/>
                <!-- <p style="text-align:center">Smash Chocolates</p>
                <p style="text-align:center">$20</p> -->
                </div>
                  </div>
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

              <div class="card mb-4 box-shadow">
                <div class="card-body">
                <h4 style="font-weight:bold"> Contact </h4>   
                  <!-- <p class="card-text">Contact Details.</p> -->
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="col-md-4">
                    <h3>Creamy Creation</h3>
                    <p>2222, Taunton Road South, <br> Whitby, ON. L1K 24Y</p>
                    <p>+1 758 456 9005</p>
                    </div>
                  </div>
                </div>
              </div>
            
    <!-- </main> -->
    @endsection
        <!-- </div> -->
    <!-- </body>
</html> -->
