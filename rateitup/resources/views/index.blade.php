@php
    // This ensures that $post is available, preventing errors if it's not passed.
    $post = $post ?? null;
@endphp

@if($post)
<div class="app-main app-main-detail">
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <div>{{ $post->title }}
                            <div class="page-title-subheading">Ikuti jalannya diskusi dalam sebuah thread. Baca komentar, balas pesan, dan berinteraksi dengan pengguna lain secara langsung.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="card-title dancing-script">Photos</div>
                            @if(is_array($post->photos) && count($post->photos) > 0)
                                <div class="slick-slider-variable">
                                    @foreach($post->photos as $photo)
                                    <div>
                                        <div class="slider-item">
                                            <img src="{{ $photo }}" class="img-fluid" alt="Review Photo" style="max-height: 300px; margin: auto;">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @else
                                <p>No photos available.</p>
                            @endif
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="card-title dancing-script" id="gmaps" style="height:300px;">Google Maps</div>
                            {{-- <iframe id="gmap-iframe" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <div class="media flex-wrap w-100 align-items-center">
                        @php
                            $postUserAvatar = 'user-icon.jpg';
                            if ($post->user->gender === 'Male') {
                                $postUserAvatar = 'boy-icon.jpg';
                            } elseif ($post->user->gender === 'Female') {
                                $postUserAvatar = 'girl-icon.jpg';
                            }
                        @endphp
                        <img style="width: 40px; height: auto;" src="{{ asset('images/avatars/' . $postUserAvatar) }}" class="d-block ui-w-40 rounded-circle" alt="">
                        <div class="media-body ml-3">
                            <a href="javascript:void(0)">{{ $post->user->name }}</a>
                            <div class="text-muted small">{{ $post->created_at->diffForHumans() }}</div>
                        </div>
                        <div class="text-muted small ml-3">
                            <div>Member since <strong>{{ $post->user->created_at->format('d/m/Y') }}</strong></div>
                            <div><strong>{{ $post->user->reviews->count() }}</strong> total posts</div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p>{{ $post->content }}</p>
                </div>
                <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                    <div class="px-4 pt-3">
                        <div class="br-wrapper br-theme-css-stars"><select class="rating-display" data-rating="{{ $post->rating }}" disabled="" style="display: none;">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select></div>
                    </div>
                    <div class="px-4 pt-3">
                        <button type="button" class="btn btn-primary reply-btn-main">
                            <i class="ion ion-md-create"></i>&nbsp; Reply
                        </button>
                    </div>
                </div>
            </div>

            @foreach($post->details as $detail)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="media">
                        @php
                            $detailUserAvatar = 'user-icon.jpg';
                            if ($detail->user->gender === 'Male') {
                                $detailUserAvatar = 'boy-icon.jpg';
                            } elseif ($detail->user->gender === 'Female') {
                                $detailUserAvatar = 'girl-icon.jpg';
                            }
                        @endphp
                        <img style="width: 40px; height: auto;" src="{{ asset('images/avatars/' . $detailUserAvatar) }}" alt="" class="d-block ui-w-40 rounded-circle">
                        <div class="media-body ml-4">
                            <div class="float-right text-muted small">{{ $detail->created_at->diffForHumans() }}</div>
                            <a href="javascript:void(0)">{{ $detail->user->name }}</a>
                            <div class="text-muted small">Member since {{ $detail->user->created_at->format('d/m/Y') }} &nbsp;·&nbsp; {{ $detail->user->reviews->count() }} posts</div>
                            <div class="mt-2">
                                {{ $detail->reply }}
                            </div>
                            <div class="small mt-2">
                                <a href="javascript:void(0)" class="text-muted reply-btn" data-post-id="{{ $post->id }}">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="card mt-4 reply-card" style="display: none;">
                <div class="card-body">
                    <h5 class="card-title">Post a Reply</h5>
                    <form action="{{ route('review.reply', $post->id) }}" method="POST">
                        @csrf
                        <textarea class="form-control" name="reply" rows="3" placeholder="Write a reply..."></textarea>
                        <button type="submit" class="btn btn-primary mt-2">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@else
<div class="app-main__inner">
    <p>Review not found.</p>
</div>
@endif
