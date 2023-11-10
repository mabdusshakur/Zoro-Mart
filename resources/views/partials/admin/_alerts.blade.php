@if (Session::has('info'))
    <div class="alert alert-dismissible fade show py-2 bg-info">
        <div class="d-flex align-items-center">
            <div class="fs-3 text-dark"><ion-icon name="information-circle-sharp"></ion-icon>
            </div>
            <div class="ms-3">
                <div class="text-dark">{{ Session::get('info') }}</div>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-dismissible fade show py-2 bg-warning">
        <div class="d-flex align-items-center">
            <div class="fs-3 text-dark"><ion-icon name="warning-sharp"></ion-icon>
            </div>
            <div class="ms-3">
                <div class="text-dark">{{ Session::get('warning') }}</div>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-dismissible fade show py-2 bg-danger">
        <div class="d-flex align-items-center">
            <div class="fs-3 text-white"><ion-icon name="close-circle-sharp"></ion-icon>
            </div>
            <div class="ms-3">
                <div class="text-white">{{ Session::get('danger') }}</div>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-dismissible fade show py-2 bg-success">
        <div class="d-flex align-items-center">
            <div class="fs-3 text-white"><ion-icon name="checkmark-circle-sharp"></ion-icon>
            </div>
            <div class="ms-3">
                <div class="text-white">{{ Session::get('success') }}</div>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
