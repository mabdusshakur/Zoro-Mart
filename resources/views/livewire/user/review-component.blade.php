<div>
    @include('partials.user._alerts')
    <form wire:submit.prevent="addReview">
        <div class="review-input-box mb-15 d-flex align-items-start">
            <h4 class="review-input-title">Your Rating</h4>
            <div class="review-input">
                <div class="review-ratings mb-10">
                    <div class="review-ratings-single d-flex align-items-center">
                        <select class="form-select" wire:model.lazy="rating">
                            <option value="1">1 Star</option>
                            <option value="2">2 Star</option>
                            <option value="3">3 Star</option>
                            <option value="4">4 Star</option>
                            <option value="5">5 Star</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="review-input-box d-flex align-items-start">
            <h4 class="review-input-title">Review</h4>
            <div class="review-input">
                <textarea wire:model.lazy="review"></textarea>
            </div>
        </div>
        <div class="review-sub-btn">
            <button type="submit" class="t-y-btn t-y-btn-grey">submit
                review</button>
        </div>
    </form>

</div>
