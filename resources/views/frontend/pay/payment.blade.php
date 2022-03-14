<!doctype html>
<html lang="zxx">
@include('frontend.layouts.head')

<body>
@include('frontend.layouts.header')
<main>

    <div class="container">
      <div class="header px-5">
        <h1>Pay for service</h1>
      </div>
      <div class="main">
        <form id="makePaymentform">
          @csrf
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="name">Name</label>
                <input placeholder="Enter name" type="text" class="form-control" required name="name" id="name">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="emaila">email</label>
                <input placeholder="Enter email" type="email" class="form-control" required name="emaila" id="emaila">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="number_p">number</label>
                <input placeholder="Enter number" type="text" class="form-control" name="number_p" id="number_p">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="amount">amount</label>
                <input placeholder="Enter amount" type="text" class="form-control" name="amount" id="amount">
              </div>
            </div>
            
          </div>
          <div class="form-group mt-2">
          <button class="btn btn-primary"type="submit">Pay Now</button>
          </div>
        </form>
      </div>
    </div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://checkout.flutterwave.com/v3.js"></script>  

    
<script>
  $(function(){
    $("#makePaymentform").submit(function (e) {
      e.preventDefault();
      var name = $("#name").val();
      var email = $("#emaila").val();
      var phone = $("#number_p").val();
      var amount = $("#amount").val();
      //make payment
      makePayment(amount,email,phone,name);
    });
  });
  function makePayment(amount,email,phone_number,name) {
    FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-d0bec49203502863fbfe4dd38b99ff86-X",
      tx_ref: "RX1_{{substr(rand(0,time()),0,7)}}",
      amount,
      currency: "RWF",
      country: "RWA",
      payment_options: " ",
      customer: {
        email,
        phone_number,
        name,
      },
      callback: function (data) {
        var transaction_id = data.transaction_id;
        
        //Make ajax request
        var _token = $("input[name='_token']").val();
         $.ajax({
           type: "POST",
           url: "{{URL::to('verify-payment')}}",
           data: {
            transaction_id,
            _token
           },
           success: function (response) {
              console.log(response);
           }
         });
      },
      onclose: function() {
        // close modal
      },
      customizations: {
        title: "My store",
        description: "Payment for items in cart",
        logo: "https://s3-us-west-2.amazonaws.com/hp-cdn-01/uploads/orgs/flutterwave_logo.jpg?69",
      },
    });
  }
</script>
  @include('frontend.layouts.footer')
  @include('frontend.layouts.foot')
</body>
</html>