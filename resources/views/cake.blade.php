
@extends('layouts.nav')

@section('content')

    <div class="album py-5 bg-light">
        <div class="container">

        <h1> CAKES </h1>

        <h3> 
            <a class="cake-links" href="/occassional"><strong>Occassional</strong></a> 
            <a class="cake-links" href="/customize"><strong>Customize Cakes</strong></a>
        </h3>

            <div class="card mb-4 box-shadow">
            </div>
            

              <div class="card mb-4 box-shadow">
                <div class="card-body">
                <h4> Cake photos </h4>
                  <!-- <p class="card-text">Few photos of items.</p> -->
                  <div class="d-flex justify-content-between align-items-center">
                    <!-- <div class="row"> -->
                    <div class="col-md-4">
                  <!-- <img src="https://scontent-ord5-2.xx.fbcdn.net/v/t39.30808-6/277000361_391117093018375_3294843876378867282_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=a26aad&_nc_ohc=8yk_wLSTVlgAX9Zgm6O&_nc_ht=scontent-ord5-2.xx&oh=00_AfC6GjuIqsIU58k_XcQbo6jk8_3RISWTjZXXFSy7En9yow&oe=63F4F7BD"  -->
                <img src="{{url('/images/cake1.jpg')}}"
                  alt="ID Logo" 
                draggable="false"
                height="300" width="250"/>
                <!-- <p style="text-align:center">Chocolate Cake </br> with Donut Munchkins</p>
                <p style="text-align:center">$35</p> -->
                </div>
                <div class="col-md-4">
                  <!-- <img src="https://scontent-ord5-2.xx.fbcdn.net/v/t39.30808-6/270276044_327243849405700_7864034052700722463_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=a26aad&_nc_ohc=Y4ufKHu44wcAX9KI8oH&_nc_oc=AQkqs-X2Mc0CKgAHZUolW5Gt7qOhl4N-WeJnkx7gxArqBoe9bDW84wlCN1dJT1gJLHY&_nc_ht=scontent-ord5-2.xx&oh=00_AfBvqd5dVHeDzlN6LdnCI8L1-XGSWwdl1yj4VPZMxG2aiQ&oe=63F569DE"  -->
                <img src="{{url('/images/cake2.jpg')}}"
                  alt="ID Logo" 
                draggable="false"
                height="300" width="250"/>
                <!-- <p style="text-align:center">Brownie Tower</p>
                <p style="text-align:center">$25</p> -->
                </div>
                <div class="col-md-4">
                  <!-- <img src="https://scontent-ord5-2.xx.fbcdn.net/v/t39.30808-6/328232085_890618155414667_6535520973890980220_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=MKwK8poXZxYAX_5chbt&tn=P2fFFrANumb8seJ9&_nc_ht=scontent-ord5-2.xx&oh=00_AfARm22unEP75LMQGry2livW2nx9NiVu7QAQp6s9MAkLnw&oe=63F3CD1A"  -->
                <img src="{{url('/images/cake3.jpg')}}"
                  alt="ID Logo" 
                draggable="false"
                height="300" width="250"/>
                <!-- <p style="text-align:center">Smash Chocolates</p>
                <p style="text-align:center">$20</p> -->
                </div>
                  </div>

                <div class="card-body">
                  <!-- <p class="card-text">Few photos of items.</p> -->
                  <div class="d-flex justify-content-between align-items-center">
                    <!-- <div class="row"> -->
                    <div class="col-md-4">
                  <!-- <img src="https://scontent-ord5-2.xx.fbcdn.net/v/t39.30808-6/277000361_391117093018375_3294843876378867282_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=a26aad&_nc_ohc=8yk_wLSTVlgAX9Zgm6O&_nc_ht=scontent-ord5-2.xx&oh=00_AfC6GjuIqsIU58k_XcQbo6jk8_3RISWTjZXXFSy7En9yow&oe=63F4F7BD"  -->
                <img src="{{url('/images/1.jpg')}}"
                  alt="ID Logo" 
                draggable="false"
                height="300" width="250"/>
                <!-- <p style="text-align:center">Chocolate Cake </br> with Donut Munchkins</p>
                <p style="text-align:center">$35</p> -->
                </div>
                <div class="col-md-4">
                  <!-- <img src="https://scontent-ord5-2.xx.fbcdn.net/v/t39.30808-6/270276044_327243849405700_7864034052700722463_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=a26aad&_nc_ohc=Y4ufKHu44wcAX9KI8oH&_nc_oc=AQkqs-X2Mc0CKgAHZUolW5Gt7qOhl4N-WeJnkx7gxArqBoe9bDW84wlCN1dJT1gJLHY&_nc_ht=scontent-ord5-2.xx&oh=00_AfBvqd5dVHeDzlN6LdnCI8L1-XGSWwdl1yj4VPZMxG2aiQ&oe=63F569DE"  -->
                <img src="{{url('/images/2.jpg')}}"
                  alt="ID Logo" 
                draggable="false"
                height="300" width="250"/>
                <!-- <p style="text-align:center">Brownie Tower</p>
                <p style="text-align:center">$25</p> -->
                </div>
                <div class="col-md-4">
                  <!-- <img src="https://scontent-ord5-2.xx.fbcdn.net/v/t39.30808-6/328232085_890618155414667_6535520973890980220_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=MKwK8poXZxYAX_5chbt&tn=P2fFFrANumb8seJ9&_nc_ht=scontent-ord5-2.xx&oh=00_AfARm22unEP75LMQGry2livW2nx9NiVu7QAQp6s9MAkLnw&oe=63F3CD1A"  -->
                <img src="{{url('/images/8.jpg')}}"
                  alt="ID Logo" 
                draggable="false"
                height="300" width="250"/>
                <!-- <p style="text-align:center">Smash Chocolates</p>
                <p style="text-align:center">$20</p> -->
                </div>
                </div>
              </div>

              <div class="card-body">
                  <!-- <p class="card-text">Few photos of items.</p> -->
                  <div class="d-flex justify-content-between align-items-center">
                    <!-- <div class="row"> -->
                    <div class="col-md-4">
                  <!-- <img src="https://scontent-ord5-2.xx.fbcdn.net/v/t39.30808-6/277000361_391117093018375_3294843876378867282_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=a26aad&_nc_ohc=8yk_wLSTVlgAX9Zgm6O&_nc_ht=scontent-ord5-2.xx&oh=00_AfC6GjuIqsIU58k_XcQbo6jk8_3RISWTjZXXFSy7En9yow&oe=63F4F7BD"  -->
                <img src="{{url('/images/7.jpg')}}"
                  alt="ID Logo" 
                draggable="false"
                height="300" width="250"/>
                <!-- <p style="text-align:center">Chocolate Cake </br> with Donut Munchkins</p>
                <p style="text-align:center">$35</p> -->
                </div>
                <div class="col-md-4">
                  <!-- <img src="https://scontent-ord5-2.xx.fbcdn.net/v/t39.30808-6/270276044_327243849405700_7864034052700722463_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=a26aad&_nc_ohc=Y4ufKHu44wcAX9KI8oH&_nc_oc=AQkqs-X2Mc0CKgAHZUolW5Gt7qOhl4N-WeJnkx7gxArqBoe9bDW84wlCN1dJT1gJLHY&_nc_ht=scontent-ord5-2.xx&oh=00_AfBvqd5dVHeDzlN6LdnCI8L1-XGSWwdl1yj4VPZMxG2aiQ&oe=63F569DE"  -->
                <img src="{{url('/images/5.jpg')}}"
                  alt="ID Logo" 
                draggable="false"
                height="300" width="250"/>
                <!-- <p style="text-align:center">Brownie Tower</p>
                <p style="text-align:center">$25</p> -->
                </div>
                <div class="col-md-4">
                  <!-- <img src="https://scontent-ord5-2.xx.fbcdn.net/v/t39.30808-6/328232085_890618155414667_6535520973890980220_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=MKwK8poXZxYAX_5chbt&tn=P2fFFrANumb8seJ9&_nc_ht=scontent-ord5-2.xx&oh=00_AfARm22unEP75LMQGry2livW2nx9NiVu7QAQp6s9MAkLnw&oe=63F3CD1A"  -->
                <img src="{{url('/images/6.jpg')}}"
                  alt="ID Logo" 
                draggable="false"
                height="300" width="250"/>
                <!-- <p style="text-align:center">Smash Chocolates</p>
                <p style="text-align:center">$20</p> -->
                </div>
                </div>
              </div>
            
@endsection