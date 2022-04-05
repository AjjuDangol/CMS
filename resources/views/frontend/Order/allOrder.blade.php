@extends('layouts.main')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Item Names</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
        <tr>
          <td>{{ $order->userId }}</td>
          <td>{{ $order->itemName }}</td>
          <td>{{ $order->price }}</td>
          <td>{{ $order->quantity }}</td>
          <td>
              <a href="/editOrder/{{ $order->orderId }}" class="btn btn-info">Edit</a>
              <a href="/deletetOrder/{{ $order->orderId }}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
        {{-- <a href="/addOrder/{{ $order->item->itemId }}" class="btn btn-primary">Add item</a> --}}
        <button>Pay</button>
    </tbody>
  </table>



{{-- <script src="https://www.paypal.com/sdk/js?client-id="></script> --}}

<div class="container">
    <script src="https://www.paypal.com/sdk/js?client-id=Adqnx67a43iXSvFr2V-99LdzYpEGbVG0L_eB6AnkfGpEOQp8l5sudPDZapNKxPWOyp4SyCeDxd9KN81q&currency=USD"></script>
<!-- Set up a container element for the button -->
<div id="paypal-button-container"></div>
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

        var firstname=$('.firstname').val();
        var lastname=$('.lastname').val();
        var email=$('.email').val();
        var phone=$('.phone').val();

            $.ajax({
                method:"POST",
                url:"/Place-order",
                data:{
                    'fname':response.firstname,
                    'lname':response.lastname,
                    'email':response.email,
                    'phone':response.phone,

                    'payment_mode':"Paid by Paypal",
                    // 'payment_id':
                },
                success: function(responseb){
                    swal(responseb.status);
                    window.location.href = "/my-orders";
                }
            })
        });
  }
}).render('#paypal-button-container');
</script>
</div>
@endsection
