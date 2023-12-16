<div>
    @include('partials.user._alerts')
    <div class="container">
        <div class="d-flex justify-content-center mt-4">
            <form wire:submit.prevent="contact" style="width: 26rem;">
                <!-- Name input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="form4Example1" class="form-control" wire:model="name" />
                    <label class="form-label" for="form4Example1">Name</label>
                </div>
    
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form4Example2" class="form-control" wire:model="email" />
                    <label class="form-label" for="form4Example2">Email address</label>
                </div>
    
                <!-- Message input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <textarea class="form-control" id="form4Example3" rows="4" wire:model="message" ></textarea>
                    <label class="form-label" for="form4Example3">Message</label>
                </div>
                <!-- Submit button -->
                <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Send</button>
            </form>
        </div>
    </div>
</div>
