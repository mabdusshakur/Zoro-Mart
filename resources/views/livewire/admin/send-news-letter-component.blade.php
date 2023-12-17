<div>
    <div class="card">
        @include('partials.admin._alerts')
        <div class="card-header">
            <h6 class="mb-0">Send Newsletters</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <input class="form-control form-control mb-3" type="text" placeholder="Subject"
                        wire:model="subject">
                </div>
                <div class="col-md-12">
                    <textarea class="form-control" cols="30" rows="10" placeholder="Write Your News Here" wire:model="news"></textarea>
                </div>
                <div class="col-md-12 mt-2" >
                    <button type="submit" wire:click="sendNews" class="btn btn-success">Send News</button>
                </div>
            </div>
        </div>
    </div>
</div>
