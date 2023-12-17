<div>
    <!--start breadcrumb-->
    @section('current-page-name', 'Orders')
    @include('partials.admin._bread_crumb')
    <!--end breadcrumb-->

    @include('partials.admin._alerts')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">All Orders</h5>
                <form class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                            class="fa-solid fa-magnifying-glass"></i></div>
                    <input class="form-control ps-5" type="text" placeholder="Orders Id or Transaction-ID" wire:model="search">
                </form>
            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Order ID</th>
                            <th>Buyer</th>
                            <th>Payment Method</th>
                            <th>Transaction ID</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user->first_name . ' ' .  $order->user->last_name }}</td>
                                <td>{{ $order->payment_method }}</td>
                                <td>{{ $order->transaction_id }}</td>
                                <td>${{ $order->total }}</td>
                                <td>{{ $order->status }}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" wire:click="view_orders({{$order->id}})"
                                            class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="" data-bs-original-title="Views" aria-label="Views"><i
                                                class="fa-solid fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
