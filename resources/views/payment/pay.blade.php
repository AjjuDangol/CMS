{{-- @extends('layouts.main')
@section('content')
<form action="{{ route('createPayment') }}" method="POST">
    @csrf
    <input type="text" class="orderId" name="orderId" hidden>
    <input type="text" class="paypalID" name="paypalID" hidden>
    <input type="text" class="userId" name="userId" value="{{ Auth::user()->id }}" hidden>
    <div class="mb-3">
        <label for="Name" class="form-label">User Name</label>
        <input type="text" class="userName" value="{{ Auth::user()->name }}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="itemName" class="form-label">Item Name</label>
        <input type="text" class="itemName" name="itemName" value="{{ $order->item->itemName }}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input type="text" class="totalPrice" name="totalPrice" value="{{ $order->totalPrice }}" class="form-control">
    </div>
<div id="paypal-button-container"></div>


</form>
<div class="container">
    <script src="https://www.paypal.com/sdk/js?client-id=Adqnx67a43iXSvFr2V-99LdzYpEGbVG0L_eB6AnkfGpEOQp8l5sudPDZapNKxPWOyp4SyCeDxd9KN81q&currency=USD"></script>
<!-- Set up a container element for the button -->
<script>
  paypal.Buttons({
  createOrder: function(data, actions) {
    // This function sets up the details of the transaction, including the amount and line item details.
    return actions.order.create({
      purchase_units: [{
        amount: {
          value: '0.01'
        }
      }]
    });
  },
  onApprove: function(data, actions) {
    // This function captures the funds from the transaction.
    return actions.order.capture().then(function(details) {
      // This function shows a transaction success message to your buyer.
      alert('Transaction completed by ' + details.payer.name.given_name);

        var orderId=$('.orderId').val();
        var paymentID=$('.paymentID').val();
        var paypalID=$('.paypalID').val();
        var userId=$('.userId').val();
        var userName=$('.userName').val();
        var itemName=$('.itemName').val();
        var amount=$('.amount').val();

            $.ajax({
                method:"POST",
                url:"/createPayment",
                data:{
                    'orderId':response.orderId,
                    'paypentID':response.paypentID,
                    'paypalID':response.paypalID,
                    'userId':response.userId,
                    'userName':response.userName,
                    'itemName':response.itemName,
                    'amount':response.amount
                    // 'payment_id':
                },
                success: function(response){
                    swal(response.status);
                    window.location.href = "/my-orders";
                }
            })
        });
  }
}).render('#paypal-button-container');
</script>
</div>
@endsection --}}

@extends('layouts.main')
@section('content')
    <form action="{{ route('createPayment') }}" method="POST" class="container">
        @csrf
        <label for="Name" class="form-label mt-5">Order No.</label>
        <input type="text" class="name" name="orderId" value="{{ $order->orderId }}" >
        <input type="text" class="paypalID" name="paypalID" hidden>
        <input type="text" class="userId" name="userId" value="{{ Auth::user()->id }}" hidden>
        <div class="row container mt-5">
            <div class="col-4">
                <div class="mb-3">
                    <label for="Name" class="form-label"><h3>User Name</h3></label> <br>
                    <input type="text" class="name" value="{{ Auth::user()->name }}" >
                </div>

            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="itemName" class="form-label"><h3>Item Name</h3></label> <br>
                    <input type="text" class="name" name="itemName" value="{{ $order->itemName }}"
                        class="form-control">
                </div>

            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="amount" class="form-label"><h3>Amount</h3></label>
                    <br>
                    <input type="text" class="name" name="totalPrice" value="{{ $order->totalPrice }}"
                        class="form-control">

                </div>
            </div>
        </div>
        <div id="paypal-button-container" class="container m-5"></div>
        {{-- <div><button id="payment-button">Pay with Khalti</button></div> --}}
    @endsection

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script
        src="https://www.paypal.com/sdk/js?client-id=AYO1XWOIGQGtU5na-g-r76Jr2HF2HTUhcTlpKqS8pWCmCtaa_Jot-RevaJ2NhQxmL8iX8OuRge1Qm9hH&currency=USD">
    </script>



    {{-- <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
            ],
            "eventHandler": {
                onSuccess(payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError(error) {
                    console.log(error);
                },
                onClose() {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function() {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({
                amount: 1000
            });
        }
    </script> --}}



    <script>
        paypal.Buttons({
            // Sets up the transaction when a payment button is clicked
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: "{{ $order->totalPrice }}"
                        }
                    }]
                });
            },
            // Finalize the transaction after payer approval
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {
                    // Successful capture! For dev/demo purposes:

                    var orderId = $('.orderId').val();
                    // var paymentID=$('.paymentID').val();
                    var userId = $('.userId').val();
                    var userName = $('.userName').val();
                    var itemName = $('.itemName').val();
                    var totalPrice = $('.totalPrice').val();
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: "post",
                        url: "/createPayment",
                        data: {
                            'orderId': orderId,
                            // 'paymentID':paymentID,
                            'paypalID': orderData.id,
                            'userId': userId,
                            'userName': userName,
                            'itemName': itemName,
                            'totalPrice': totalPrice
                        },
                        success: function(response) {
                            swal(response.status);
                        }
                    });
                });
            }
        }).render('#paypal-button-container');
    </script>
