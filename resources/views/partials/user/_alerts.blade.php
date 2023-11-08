@if (Session::has('success'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="alert alert-success col-md-6" role="alert">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
@endif

@if (Session::has('error'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="alert alert-danger col-md-6" role="alert">
                {{ Session::get('error') }}
            </div>
        </div>
    </div>
@endif

@if (Session::has('warning'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="alert alert-warning col-md-6" role="alert">
                {{ Session::get('warning') }}
            </div>
        </div>
    </div>
@endif

@if (Session::has('info'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="alert alert-info col-md-6" role="alert">
                {{ Session::get('info') }}
            </div>
        </div>
    </div>
@endif
