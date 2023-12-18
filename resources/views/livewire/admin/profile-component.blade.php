<div>
    <div class="row">
        @include('partials.admin._alerts')
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="card shadow-none border">
                        <div class="card-header">
                            <h6 class="mb-0">USER INFORMATION</h6>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" wire:submit.prevent="updateInformation">
                                <div class="col-6">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                        placeholder="First Name" wire:model="first_name">
                                    @error('first_name')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                        placeholder="Last Name" wire:model="last_name">
                                    @error('last_name')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email" wire:model="email">
                                    @error('email')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Phone</label>
                                    <input type="tel"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        placeholder="Phone" wire:model="phone">
                                    @error('phone')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-start">
                                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card shadow-none border">
                        <div class="card-header">
                            <h6 class="mb-0">Change Password</h6>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" wire:submit.prevent="updatePassword">
                                <div class="col-12">
                                    <label class="form-label">Current Password</label>
                                    <input type="password"
                                        class="form-control @error('current_password') is-invalid @enderror"
                                        placeholder="Current Password" wire:model="current_password">
                                    @error('current_password')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label">New Password</label>
                                    <input type="password"
                                        class="form-control @error('new_password') is-invalid @enderror"
                                        placeholder="New Password" wire:model="new_password">
                                    @error('new_password')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password"
                                        class="form-control @error('confirm_password') is-invalid @enderror"
                                        placeholder="Confirm Password" wire:model="confirm_password">
                                    @error('confirm_password')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-start">
                                    <button type="submit" class="btn btn-primary px-4">Update Password</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
