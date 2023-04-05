
@extends('layouts.nav')

@section('content')

      <div class="album py-5 bg-light">
        <div class="container">

        <h1> Contact  </h1>
          

            <div class="card mb-4 box-shadow">
            </div>

              <div class="card mb-4 box-shadow">
                <!-- <div class="card-body"> -->
                  <table>
                    <tr style="height: 100px;">
                        <td style="width:10%">  <img src="{{url('/images/phone.png')}}" alt="phone" height="50"/> </td>
                        <td><h4> PHONE: </h4>
                    <h5> +1 758 456 9005 </h5> </td>
</tr>
<tr style="height: 100px;">
                        <td style="width:10%">  <img src="{{url('/images/email.png')}}" alt="email" height="60"/> </td>
                        <td><h4> EMAIL: </h4>
                    <h5> creamycreations@gmail.com </h5> </td>
</tr>
<tr style="height: 100px;">
                        <td style="width:10%">  <img src="{{url('/images/address.jpg')}}" alt="address" height="60"/> </td>
                        <td><h4> LOCATION: </h4>
                    <h5> 2222, Taunton Road South, <br/>Whitby, ON. L1K 24Y </h5> </td>
</tr>

</table>
                <!-- </div> -->
            </div>

@endsection
