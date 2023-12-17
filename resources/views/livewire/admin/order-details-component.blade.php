<div>
    <!--start breadcrumb-->
    @section('current-page-name', 'Order Details')
    @include('partials.admin._bread_crumb')
    <!--end breadcrumb-->

    @include('partials.admin._alerts')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5 mb-2">
                    <div class="p-2 border rounded">
                        <h6>Buyer Details</h6>
                        <hr>
                        <h6 class="border rounded p-2">Name : <span class="text-white">{{ $order->user->first_name . ' ' . $order->user->last_name }}</span></h6>
                        <h6 class="border rounded p-2">Email : <span class="text-white">{{ $order->user->email }}</span></h6>
                        <h6 class="border rounded p-2">Phone : <span class="text-white">{{ $order->user->phone }}</span></h6>
                        <h6 class="border rounded p-2">Address_1 : <span class="text-white">{{ $order->user->address_1 }}</span></h6>
                        <h6 class="border rounded p-2">Address_2 : <span class="text-white">{{ $order->user->address_2 }}</span></h6>
                        <h6 class="border rounded p-2">City : <span class="text-white">{{ $order->user->city }}</span></h6>
                        <h6 class="border rounded p-2">Country : <span class="text-white">{{ $order->user->country }}</span></h6>
                        <h6 class="border rounded p-2">ZipCode : <span class="text-white">{{ $order->user->zipcode }}</span></h6>
                    </div>
                </div>
                
                <div class="col-md-7 mb-2">
                    <div class="p-2 border rounded">
                        <h6>Order & Payment Details</h6>
                        <hr>
                        <h6 class="border rounded p-2">Order ID : <span class="text-white">{{ $order->id }}</span></h6>
                        <h6 class="border rounded p-2">Status : <span class="text-white">{{ $order->status }}</span></h6>
                        <h6 class="border rounded p-2">Payment Method : <span class="text-white">{{ $order->payment_method }}</span></h6>
                        <h6 class="border rounded p-2">Transaction ID : <span class="text-white">{{ $order->transaction_id }}</span></h6>
                        <h6 class="border rounded p-2">Total Amount : <span class="text-white">${{ $order->total }}</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
