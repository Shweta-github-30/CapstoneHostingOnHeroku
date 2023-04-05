@extends('layouts.nav')

@section('content')
      <div class="album py-5 bg-light">
        <div class="container">
        <h1> Cart  </h1>
            <div class="card mb-4 box-shadow">
            </div>
            <section class="pt-5 pb-5">
  <div class="container">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
          @php
          $total=0;
          @endphp
            
            <table id="shoppingCart" class="table table-condensed table-responsive">
            <thead>
                    <tr>
                        <th style="width:60%">Product</th>
                        <th style="width:12%">Unit Price</th>
                        <th style="width:10%">Quantity</th>
                        <th style="width:10%">Total Price</th>
                        <th style="width:16%"></th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($cartItem as $cart)
                <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="{{ $cart->image }}" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                <h4>{{$cart->premade_cake_name}} </h4> 
                                    <!-- <p class="font-weight-light">Brand &amp; Name</p> -->
                                </div>
                            </div>
                        </td>
                        <td data-th="UnitPrice" id="price">${{$cart->price}}</td>
                        <td data-th="Quantity">
                          <h4>{{$cart->quantity}}</h4>
                            <!-- <input type="number" id="quantity" class="form-control form-control-lg text-center" value="1"> -->
                        </td>

                        <td data-th="TotalPrice" id="tprice">${{$cart->quantity * $cart->price}}</td>                                          
                    @php
                    $total += $cart->quantity * $cart->price;
                    @endphp
                      </tr>
                </tbody>
                 @endforeach
            </table>
            <div class="float-right text-right">
              
                <h4>Subtotal:</h4>
                <span id="total"> $ {{ $total}} </span>
               
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-sm-6 order-md-2 text-right">
            <a href="/checkout" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Checkout</a>
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="/occassional"> Continue Shopping</a>
        </div>
    </div>
</div>
</section>
    </div> 
    <!-- </div> -->
@endsection