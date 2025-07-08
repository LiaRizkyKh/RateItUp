<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Rate It Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ asset('css/main.d810cf0ae7f39f28f336.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/css-stars.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
</head>

<body>
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <a href="/">
                    <h3 class="app-logo-header">Rate It Up</h3>
                </a>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn dropdown-toggle">
                                            @php
                                            $avatar = 'user-icon.jpg';
                                            if (Auth::check()) {
                                            if (Auth::user()->gender === 'Male') {
                                            $avatar = 'boy-icon.jpg';
                                            } elseif (Auth::user()->gender === 'Female') {
                                            $avatar = 'girl-icon.jpg';
                                            }
                                            }
                                            @endphp
                                            <img width="42" class="rounded-circle" src="{{ asset('images/avatars/' . $avatar) }}" alt="">
                                            @auth
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                            @endauth
                                        </a>
                                        @auth
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('/images/dropdown-header/city3.jpg');"></div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    @php
                                                                    $avatar = 'user-icon.jpg';
                                                                    if (Auth::check()) {
                                                                    if (Auth::user()->gender === 'Male') {
                                                                    $avatar = 'boy-icon.jpg';
                                                                    } elseif (Auth::user()->gender === 'Female') {
                                                                    $avatar = 'girl-icon.jpg';
                                                                    }
                                                                    }
                                                                    @endphp
                                                                    <img width="42" class="rounded-circle" src="{{ asset('images/avatars/' . $avatar) }}" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">{{ Auth::check() ? Auth::user()->name : 'Guest' }}</div>
                                                                    <div class="widget-subheading opacity-8">{{ Auth::check() ? Auth::user()->role ?? 'User' : 'Not logged in' }}</div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <a href="{{ route('logout') }}" class="btn-logout btn-pill btn-shadow btn-shine btn btn-focus">Logout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endauth
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">{{ Auth::check() ? Auth::user()->name : 'Guest' }}</div>
                                    <div class="widget-subheading">{{ Auth::check() ? Auth::user()->role ?? 'User' : 'Not logged in' }}</div>
                                </div>
                                @guest
                                <a href="/login">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                </a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-main__outer">
                @if(isset($post))
                @include('index', ['post' => $post])
                @else
                <div class="app-main__inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h2 class="card-title dancing-script">Jelajahi, Review dan Temukan Duniamu! </h2>
                                    <div id="carousel-slider" class="slick-slider-responsive index-slider">
                                        @foreach($posts as $post_item)
                                            @if(is_array($post_item->photos))
                                                @foreach($post_item->photos as $photo)
                                                    <div>
                                                        <a href="{{ route('review.show', $post_item->id) }}">
                                                            <div class="slider-item">
                                                                <img src="{{ $photo }}" class="img-fluid" alt="Review Photo" style="max-height: 300px; margin: auto;">
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="fa-solid fa-list-check"></i>
                            </div>
                            <div class="">Beranda Forum
                                <div class="page-title-subheading">Lihat kumpulan thread dari forum pilihanmu. Bergabung dalam percakapan atau mulai thread baru untuk berbagi pemikiran.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between">
                    <div>
                        @auth
                        <button type="button" class="btn btn-shadow btn-wide btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-plus fa-w-20"></i>
                            </span>
                            New thread
                        </button>
                        @endauth
                    </div>
                    <div class="col-12 col-md-3 p-0 mb-3">
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header pl-0 pr-0">
                        <div class="row no-gutters w-100 align-items-center">
                            <div class="col"></div>
                            <div class="col-4 text-muted">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-4">Replies</div>
                                    <div class="col-4">Last update</div>
                                    @auth
                                    <div class="col-4">Action</div>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach ($posts as $post_item)
                    <div class="card-body py-3">
                        <div class="row no-gutters align-items-center">
                            <div class="col">
                                <a href="{{ route('review.show', $post_item->id) }}" class="text-big">{{ $post_item->title }}</a>
                                <div class="text-muted small mt-1">
                                    Created {{ $post_item->created_at->diffForHumans() }}
                                    &nbsp;·&nbsp;
                                    <a href="javascript:void(0)" class="text-muted">{{ $post_item->user->name }}</a>
                                    <a href="javascript:void(0)" class="text-muted reply-btn" data-post-id="{{ $post_item->id }}">Reply</a>
                                </div>
                            </div>
                            <div class="d-none d-md-block col-4">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-4">{{ $post_item->details ? $post_item->details->count() : 0 }}</div>
                                    <div class="media col-4 align-items-center">
                                        @php
                                        $detailAvatar = 'user-icon.jpg';
                                        if ($post_item->user->gender === 'Male') {
                                        $detailAvatar = 'boy-icon.jpg';
                                        } elseif ($post_item->user->gender === 'Female') {
                                        $detailAvatar = 'girl-icon.jpg';
                                        }
                                        @endphp
                                        <img style="width: 40px; height: auto;" src="{{ asset('images/avatars/' . $detailAvatar) }}" alt="" class="d-block ui-w-30 rounded-circle">
                                        <div class="media-body flex-truncate ml-2">
                                            <div class="line-height-1 text-truncate">{{ $post_item->updated_at->diffForHumans() }}</div>
                                            <a href="javascript:void(0)" class="text-muted small text-truncate">by {{ $post_item->user->name }}</a>
                                        </div>
                                    </div>
                                    @auth
                                    @if(Auth::id() === $post_item->user_id || Auth::user()->role === 'Admin')
                                    <div class="col-1 pl-3 text-left">
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" id="actionMenu{{ $post_item->id }}" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="actionMenu{{ $post_item->id }}">
                                                <a class="dropdown-item edit-review-btn" href="javascript:void(0)"
                                                   data-id="{{ $post_item->id }}"
                                                   data-title="{{ $post_item->title }}"
                                                   data-content="{{ $post_item->content }}"
                                                   data-maps="{{ $post_item->maps_url }}"
                                                   data-rating="{{ $post_item->rating }}"
                                                   data-latitude="{{ $post_item->latitude ?? 0 }}"
                                                   data-longitude="{{ $post_item->longitude ?? 0 }}"
                                                   data-url="{{ route('review.update', $post_item->id) }}"
                                                   data-photos="{{ json_encode($post_item->photos) }}">Edit</a>
                                                <form action="{{ route('review.destroy', $post_item->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item text-danger" type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="m-0">
                    @endforeach
                </div>

                <nav>
                    <ul class="pagination mb-5">
                        <li class="page-item disabled"><a class="page-link" href="javascript:void(0)">«</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">»</a></li>
                    </ul>
                </nav>
            </div>
            @endif
            <div class="app-wrapper-footer">
                <div class="app-footer">
                    <span>Copyright 2025 @ Lia Rizky Khairunnisa - Sinoo's Web (Rate It Up)</span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

    <script type="text/javascript" src="{{ asset('js/main.d810cf0ae7f39f28f336.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/preloader.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Initialize slick slider for welcome page if not on detail page
            @if(!isset($post) || !$post)
                $('#carousel-slider').slick({
                    dots: true,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                });
            @endif

            $('.edit-review-btn').on('click', function() {
                var id = $(this).data('id');
                var title = $(this).data('title');
                var content = $(this).data('content');
                var maps_url = $(this).data('maps');
                var rating = $(this).data('rating');
                var url = $(this).data('url');

                $('#edit_review_id').val(id);
                $('#edit_title').val(title);
                $('#edit_content').val(content);
                $('#edit_maps_url').val(maps_url);
                $('#edit_rating').barrating('set', rating);
                $('#editReviewForm').attr('action', url);

                // Clear previous photo preview and input
                $('#edit_photo_preview').empty();
                $('#edit_photos').val('');

                // Fetch and display existing photos if any
                var postId = $(this).data('id');
                var existingPhotos = $(this).data('photos');

                if (existingPhotos && existingPhotos.length > 0) {
                    existingPhotos.forEach(function(photoUrl) {
                        console.log(photoUrl);
                        var img = $('<img>').attr('src', photoUrl).css({
                            'max-width': '100px',
                            'height': 'auto',
                            'margin-right': '10px',
                            'margin-top': '10px',
                            'border-radius': '5px'
                        });
                        $('#edit_photo_preview').append(img);
                    });
                }

                var latitude = parseFloat($(this).data('latitude'));
                var longitude = parseFloat($(this).data('longitude'));

                console.log('Edit button clicked. Latitude:', latitude, 'Longitude:', longitude);

                // Set data attributes directly on the modal for Leaflet initialization
                $('#editReviewModal').data('initial-latitude', latitude);
                $('#editReviewModal').data('initial-longitude', longitude);

                $('#editReviewModal').modal('show');
            });

            $('#edit_photos').on('change', function() {
                var previewContainer = $('#edit_photo_preview');
                previewContainer.empty();

                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var img = $('<img>').attr('src', e.target.result).css({
                            'max-width': '100%',
                            'height': 'auto',
                            'margin-top': '10px',
                            'border-radius': '5px'
                                         });
                        previewContainer.append(img);
                    };
                    reader.readAsDataURL(this.files[0]);
                }
            });

            // Clear photo preview and input when modal is hidden
            $('#editReviewModal').on('hide.bs.modal', function() {
                $('#edit_photo_preview').empty();
                $('#edit_photos').val('');
            });

            // Leaflet Map Initialization for Create Modal
            var createMap;
            var createMarker;

            $('#reviewModal').on('shown.bs.modal', function () {
                if (createMap) {
                    createMap.remove();
                }
                createMap = L.map('createMap').setView([-6.2088, 106.8456], 13); // Default to Jakarta
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(createMap);

                createMarker = L.marker(createMap.getCenter(), {draggable: true}).addTo(createMap);
                $('#create_latitude').val(createMap.getCenter().lat);
                $('#create_longitude').val(createMap.getCenter().lng);

                createMarker.on('dragend', function(event){
                    var markerLatLng = createMarker.getLatLng();
                    $('#create_latitude').val(markerLatLng.lat);
                    $('#create_longitude').val(markerLatLng.lng);
                });

                createMap.invalidateSize();
            });

            // Leaflet Map Initialization for Edit Modal
            var editMap;
            var editMarker;

            $('#editReviewModal').on('shown.bs.modal', function () {
                if (editMap) {
                    editMap.remove();
                }

                // Retrieve initial coordinates from modal's data attributes
                var initialLat = parseFloat($('#editReviewModal').data('initial-latitude'));
                var initialLng = parseFloat($('#editReviewModal').data('initial-longitude'));

                console.log('Edit modal shown. Initial Latitude:', initialLat, 'Initial Longitude:', initialLng);

                // Use default if values are empty or invalid
                if (isNaN(initialLat)) initialLat = -6.2088;
                if (isNaN(initialLng)) initialLng = 106.8456;

                // Set the hidden input fields with the (potentially defaulted) initial values
                $('#edit_latitude').val(initialLat);
                $('#edit_longitude').val(initialLng);

                editMap = L.map('editMap').setView([initialLat, initialLng], 13);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(editMap);

                editMarker = L.marker([initialLat, initialLng], {draggable: true}).addTo(editMap);

                editMarker.on('dragend', function(event){
                    var markerLatLng = editMarker.getLatLng();
                    $('#edit_latitude').val(markerLatLng.lat);
                    $('#edit_longitude').val(markerLatLng.lng);
                });

                editMap.invalidateSize();
            });

            // Leaflet Map Initialization for Detail Page (moved from index.blade.php)
            @if(isset($post) && ($post->latitude !== null && $post->longitude !== null))
                var detailMap;
                var detailMarker;
                var initialLatDetail = {{ $post->latitude }};
                var initialLngDetail = {{ $post->longitude }};
                var mapsUrlDetail = "{{ $post->maps_url }}";

                if ($('#gmaps').length) {
                    detailMap = L.map('gmaps').setView([initialLatDetail, initialLngDetail], 15);

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(detailMap);

                    detailMarker = L.marker([initialLatDetail, initialLngDetail]).addTo(detailMap);

                    if (mapsUrlDetail) {
                        detailMarker.bindPopup("<b>Lokasi Review</b><br><a href='" + mapsUrlDetail + "' target='_blank'>Lihat di Google Maps</a>").openPopup();
                    } else {
                        detailMarker.bindPopup("<b>Lokasi Review</b>").openPopup();
                    }

                    detailMap.invalidateSize();
                }
            @elseif(isset($post))
                // If no coordinates, display a message or hide the map div
                $('#gmaps').html('<p>No map coordinates available for this review.</p>');
            @endif

            // Initialize Slick Slider for detail page (moved from index.blade.php)
            $('.slick-slider-variable').slick({
                dots: true,
                infinite: true,
                variableWidth: true,
                adaptiveHeight: true
            });

            // Initialize Star Ratings for detail page (moved from index.blade.php)
            $('.rating-display').each(function() {
                var rating = $(this).data('rating');
                $(this).barrating({
                    theme: 'css-stars',
                    initialRating: rating,
                    readonly: true
                });
            });

            // Main reply button toggles the main reply form (moved from index.blade.php)
            $('.reply-btn-main').on('click', function() {
                var replyCard = $('.reply-card');
                replyCard.slideToggle();
            });

            // Nested reply button functionality (moved from index.blade.php)
            $('body').on('click', '.reply-btn', function() {
                var mediaBody = $(this).closest('.media-body');
                var nestedReplyCard = mediaBody.find('.reply-card-nested');
                var postId = $(this).data('post-id'); // Get post ID from data attribute

                if (nestedReplyCard.length === 0) {
                    var formHtml = `
                        <div class="card mt-3 reply-card-nested" style="display:none;">
                            <div class="card-body">
                                <form action="/review/${postId}/reply" method="POST">
                                    @csrf
                                    <textarea class="form-control" name="reply" rows="3" placeholder="Write a reply..."></textarea>
                                    <button type="submit" class="btn btn-primary mt-2">Send</button>
                                </form>
                            </div>
                        </div>`;
                    $(this).closest('.small').after(formHtml);
                    mediaBody.find('.reply-card-nested').slideDown();
                } else {
                    nestedReplyCard.slideToggle();
                }
            });
        });
    </script>
    <script>
        $(function () {
            $('#edit_rating').barrating({
                theme: 'css-stars'
            });
        });
    </script>
</body>

</html>

<!-- Modal Create -->
<div class="modal fade bd-example-modal-lg" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form method="POST" action="{{ route('review.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Buat Review Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group">
                        <h5 class="card-title">Stars</h5>
                        <select id="css-stars" name="rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Judul Review</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="content">Isi Review</label>
                        <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="photos">Upload Foto (max 3 foto, 5MB/foto)</label>
                        <input type="file" name="photos[]" id="photos" class="form-control" accept="image/*" multiple required>
                        <small class="form-text text-muted">Pilih maksimal 3 gambar. Setiap file maksimal 5MB.</small>
                    </div>

                    <div class="form-group">
                        <label for="maps_url">Tautan Titik Google Maps</label>
                        <input type="url" name="maps_url" id="maps_url" class="form-control" placeholder="https://maps.google.com/..." required>
                    </div>

                    <div class="form-group">
                        <label>Pilih Lokasi di Peta</label>
                        <div id="createMap" style="height: 300px; width: 100%;"></div>
                        <input type="hidden" name="latitude" id="create_latitude">
                        <input type="hidden" name="longitude" id="create_longitude">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Review</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade bd-example-modal-lg" id="editReviewModal" tabindex="-1" role="dialog" aria-labelledby="editReviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form method="POST" id="editReviewForm" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <input type="hidden" id="edit_review_id">

                    <div class="form-group">
                        <h5 class="card-title">Stars</h5>
                        <select id="edit_rating" name="rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="edit_title">Judul Review</label>
                        <input type="text" name="title" id="edit_title" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="edit_content">Isi Review</label>
                        <textarea name="content" id="edit_content" class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="edit_maps_url">Tautan Titik Google Maps</label>
                        <input type="url" name="maps_url" id="edit_maps_url" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Pilih Lokasi di Peta</label>
                        <div id="editMap" style="height: 300px; width: 100%;"></div>
                        <input type="hidden" name="latitude" id="edit_latitude">
                        <input type="hidden" name="longitude" id="edit_longitude">
                    </div>

                    <div class="form-group">
                        <label for="edit_photos">Ganti Foto (optional)</label>
                        <input type="file" name="photos[]" id="edit_photos" class="form-control" accept="image/*" multiple>
                        <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti. Max 3 foto, 5MB/foto.</small>
                        <div id="edit_photo_preview" class="mt-2"></div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Update Review</button>
                </div>
            </div>
        </form>
    </div>
</div>
