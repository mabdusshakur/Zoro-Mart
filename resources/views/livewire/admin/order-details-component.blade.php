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
                        <h6 class="border rounded p-2">Name : <span
                                class="text-white">{{ $order->user->first_name . ' ' . $order->user->last_name }}</span>
                        </h6>
                        <h6 class="border rounded p-2">Email : <span class="text-white">{{ $order->user->email }}</span>
                        </h6>
                        <h6 class="border rounded p-2">Phone : <span class="text-white">{{ $order->user->phone }}</span>
                        </h6>
                        <h6 class="border rounded p-2">Address_1 : <span
                                class="text-white">{{ $order->user->address_1 }}</span></h6>
                        <h6 class="border rounded p-2">Address_2 : <span
                                class="text-white">{{ $order->user->address_2 }}</span></h6>
                        <h6 class="border rounded p-2">City : <span class="text-white">{{ $order->user->city }}</span>
                        </h6>
                        <h6 class="border rounded p-2">Country : <span
                                class="text-white">{{ \App\Models\Country::where('id', $order->user->country)->first()->name }}</span></h6>
                        <h6 class="border rounded p-2">ZipCode : <span
                                class="text-white">{{ $order->user->zipcode }}</span></h6>
                    </div>
                </div>

                <div class="col-md-7 mb-2">
                    <div class="p-2 border rounded">
                        <h6>Order & Payment Details</h6>
                        <hr>
                        <h6 class="border rounded p-2">Order ID : <span class="text-white">{{ $order->id }}</span>
                        </h6>
                        <h6 class="border rounded p-2">Status : <span class="text-white">{{ $order->status }}</span>
                        </h6>
                        <h6 class="border rounded p-2">Payment Method : <span
                                class="text-white">{{ $order->payment_method }}</span></h6>
                        <h6 class="border rounded p-2">Transaction ID : <span
                                class="text-white">{{ $order->transaction_id }}</span></h6>
                        <h6 class="border rounded p-2">Total Amount : <span
                                class="text-white">${{ $order->total }}</span></h6>
                        <h6 class="border rounded p-2">Total Product Count : <span
                                class="text-white">{{ $order->orderItems->count() }}</span></h6>
                    </div>
                </div>

                <div class="mb-2">
                    <div class="p-2 border rounded">
                        <h6>All Ordered Products</h6>
                        <hr>
                        <div class="table-responsive mt-3">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Total Price</th>
                                        <th>Category Name</th>
                                        <th>Sub Category Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderItems as $orderItem)
                                        <tr>
                                            <td>{{ $orderItem->product->name}}</td>
                                            <td>x{{ $orderItem->quantity}}</td>
                                            <td>${{ $orderItem->price}}</td>
                                            <td>${{ $orderItem->price * $orderItem->quantity}}</td>
                                            <td>{{ $orderItem->product->category->name}}</td>
                                            <td>{{ $orderItem->product->subCategory->name}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="form-select mb-3" wire:model="status">
                        <option selected="">Select Status</option>
                        <option value="pending">Pending</option>
                        <option value="processing">Processing</option>
                        <option value="completed">Completed</option>
                        <option value="canceled">Canceled</option>
                    </select>
                    <div class="col-md-12 mt-2">
                        <button type="button" wire:loading.attr="disabled" wire:click="updateStatus" class="btn btn-success">Save Staus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
