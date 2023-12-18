<div>
    @foreach ($reviews as $review)
    <div class="review-item">
        <h3 class="review-title">Nice</h3>
        <div class="review-ratings mb-10">
            <div class="review-ratings-single d-flex align-items-center">
                <span>Quality</span>
                <ul>
                    @for ($i = 0; $i < 5; $i++)
                        @if ($i < $review->rating)
                            <li><a><i class="fa-solid fa-star"></i></a>
                            </li>
                        @else
                            <li>
                                <a>
                                    <i class="fa-regular fa-star"></i>
                                </a>
                            </li>
                        @endif
                    @endfor
                </ul>
            </div>
        </div>
        <div class="review-text">
            <p>{{ $review->review }}</p>
        </div>
        <div class="review-meta">
            <div class="review-author">
                <span>Review By : </span>
                <span>{{ $review->user->first_name }}</span>
            </div>
            <div class="review-date">
                <span>Posted on</span>
                <span>{{ $review->created_at->format('d-M-Y') }}</span>
            </div>
        </div>
    </div>
@endforeach

</div>
