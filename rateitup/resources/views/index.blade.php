<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Rate It Up.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ asset('css/main.d810cf0ae7f39f28f336.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <h3 class="app-logo-header">Rate It Up</h3>
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
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('/images/dropdown-header/city3.jpg');"></div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="/images/avatars/1.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Alina Mcloughlin</div>
                                                                    <div class="widget-subheading opacity-8">A short profile description</div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <form method="POST" action="/logout">
                                                                        @csrf
                                                                        <button type="submit" class="btn-pill btn-shadow btn-shine btn btn-focus">Logout</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-xs" style="height: 150px;">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Activity</li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Chat
                                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Recover Password</a>
                                                        </li>
                                                        <li class="nav-item-header nav-item">My Account
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Settings
                                                                <div class="ml-auto badge badge-success">New</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Messages
                                                                <div class="ml-auto badge badge-warning">512</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Logs</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider mb-0 nav-item"></li>
                                            </ul>
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                            <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i> Message Inbox
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                            <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                            <b>Support Tickets</b>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item">
                                                </li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-wide btn btn-primary btn-sm"> Open Messages </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading"> Alina Mclourd </div>
                                    <div class="widget-subheading"> VP People Manager </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="fa-solid fa-comments"></i>
                                </div>
                                <div>Ruang Percakapan
                                    <div class="page-title-subheading">Ikuti jalannya diskusi dalam sebuah thread. Baca komentar, balas pesan, dan berinteraksi dengan pengguna lain secara langsung.</div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                                        Buttons
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span> Inbox</span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span> Book</span>
                                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-picture"></i>
                                                    <span> Picture</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a disabled class="nav-link disabled">
                                                    <i class="nav-link-icon lnr-file-empty"></i>
                                                    <span> File Disabled</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <div class="card-title dancing-script">Photos</div>
                                    <div class="slick-slider-variable">
                                        <div>
                                            <div class="slider-item" style="width: 100px">
                                                <p>100</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="slider-item" style="width: 200px">
                                                <p>200</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="slider-item" style="width: 75px">
                                                <p>75</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="slider-item" style="width: 300px">
                                                <p>300</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="slider-item" style="width: 225px">
                                                <p>225</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="slider-item" style="width: 175px">
                                                <p>175</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="card-title dancing-script">Google Maps</div>
                                    <div id="gmap-example"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="media flex-wrap w-100 align-items-center">
                                <img style="width: 40px; height: auto;" src="images/avatars/3.jpg" class="d-block ui-w-40 rounded-circle" alt="">
                                <div class="media-body ml-3">
                                    <a href="javascript:void(0)">Allie Rodriguez</a>
                                    <div class="text-muted small">3 days ago</div>
                                </div>
                                <div class="text-muted small ml-3">
                                    <div>Member since <strong>01/12/2017</strong></div>
                                    <div><strong>1,234</strong> posts</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>
                                Aliquam varius euismod lectus, vel consectetur nibh tincidunt vitae. In non dignissim est. Sed eu
                                ligula metus. Vivamus eget quam sit amet risus venenatis laoreet ut vel magna. Sed dui ligula,
                                tincidunt in nunc eu, rhoncus
                                iaculis nisi.
                            </p>
                            <p>
                                Sed et convallis odio, vel laoreet tellus. Vivamus a leo eu metus porta pulvinar. Pellentesque
                                tristique varius rutrum.
                            </p>
                            <p>
                                Praesent sed lacinia erat. Proin efficitur pulvinar ante ullamcorper finibus. Mauris feugiat sapien
                                quis porttitor lacinia. Curabitur finibus justo in elementum pellentesque. Morbi iaculis tortor vel
                                justo porta, quis
                                blandit velit bibendum. Donec eu leo dignissim, condimentum libero eu, dapibus odio. Etiam sodales
                                venenatis posuere. Etiam condimentum nec velit eu scelerisque. Donec cursus tellus est, at hendrerit
                                nulla commodo eu.
                                Praesent euismod pellentesque tempor.
                            </p>
                            <p>
                                Nulla mollis sem id tempus pharetra. Mauris finibus eros et leo ultricies volutpat. Nunc in lacus
                                nec ex posuere gravida. Mauris metus nulla, mollis at felis vitae, congue ullamcorper velit. In
                                vulputate dui sapien, in
                                placerat tellus pellentesque ac. Duis pretium ex felis, sed vulputate orci efficitur id. Vivamus nec
                                mauris ex. Nullam sed dolor id augue elementum ullamcorper. Donec sit amet consectetur erat.
                            </p>
                        </div>
                        <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                            <div class="px-4 pt-3">
                                <a href="javascript:void(0)" class="text-muted d-inline-flex align-items-center align-middle">
                                    <i class="ion ion-ios-heart text-danger fsize-3"></i>&nbsp;
                                    <span class="align-middle">48</span>
                                </a>
                                <span class="text-muted d-inline-flex align-items-center align-middle ml-4">
                                    <i class="ion ion-ios-eye text-muted fsize-3"></i>&nbsp;
                                    <span class="align-middle">1,203</span>
                                </span>
                            </div>
                            <div class="px-4 pt-3">
                                <button type="button" class="btn btn-primary">
                                    <i class="ion ion-md-create"></i>&nbsp; Reply
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="media">
                                <img style="width: 40px; height: auto;" src="images/avatars/5.jpg" alt="" class="d-block ui-w-40 rounded-circle">
                                <div class="media-body ml-4">
                                    <div class="float-right text-muted small">22 May</div>
                                    <a href="javascript:void(0)">Nellie Maxwell</a>
                                    <div class="text-muted small">Member since 01/12/2017 &nbsp;·&nbsp; 345 posts</div>
                                    <div class="mt-2">
                                        Nulla mollis sem id tempus pharetra. Mauris finibus eros et leo ultricies volutpat. Nunc in
                                        lacus nec ex posuere gravida. Mauris metus nulla, mollis at felis vitae, congue ullamcorper
                                        velit. In vulputate dui
                                        sapien, in placerat tellus pellentesque ac. Duis pretium ex felis, sed vulputate orci
                                        efficitur id. Vivamus nec mauris ex. Nullam sed dolor id augue elementum ullamcorper. Donec
                                        sit amet consectetur erat.
                                    </div>
                                    <div class="small mt-2">
                                        <a href="javascript:void(0)" class="text-muted">Reply</a>
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-up"></i> 15
                                        </a>
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-down"></i> 3
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="media">
                                <img style="width: 40px; height: auto;" src="images/avatars/7.jpg" alt="" class="d-block ui-w-40 rounded-circle">
                                <div class="media-body ml-4">
                                    <div class="float-right text-muted small">22 May</div>
                                    <a href="javascript:void(0)">Alice Hampton</a>
                                    <div class="text-muted small">Member since 01/12/2017 &nbsp;·&nbsp; 345 posts</div>
                                    <div class="mt-2">
                                        In quis tortor et urna fermentum varius et ac nibh. Praesent dignissim leo velit, in
                                        volutpat metus rutrum sit amet. Nulla gravida nibh magna, finibus ullamcorper lacus
                                        sollicitudin ut. Proin vehicula vitae lectus
                                        a dictum. Nunc eu eros ut velit porta tristique nec eu dolor. Sed auctor elit at sapien
                                        accumsan aliquet. Vestibulum at nunc dignissim, tristique ipsum vitae, dapibus dolor.
                                        Quisque tincidunt enim sed congue
                                        venenatis. Fusce non lacus et augue cursus faucibus sit amet vitae turpis. In hac habitasse
                                        platea dictumst. Curabitur tincidunt velit maximus eros lobortis, at hendrerit nulla cursus.
                                        Donec nec metus et elit
                                        accumsan ultrices.
                                    </div>
                                    <div class="small mt-2">
                                        <a href="javascript:void(0)" class="text-muted">Reply</a>
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-up"></i> 15
                                        </a>
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-down"></i> 3
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="media">
                                <img style="width: 40px; height: auto;" src="images/avatars/8.jpg" alt="" class="d-block ui-w-40 rounded-circle">
                                <div class="media-body ml-4">
                                    <div class="float-right text-muted small">22 May</div>
                                    <a href="javascript:void(0)">Hallie Lewis</a>
                                    <div class="text-muted small">Member since 01/12/2017 &nbsp;·&nbsp; 345 posts</div>
                                    <div class="mt-2">
                                        Ea inani epicurei mea. No docendi antiopam quo, ad dicant viderer cotidieque vix. Ea mea
                                        dicat ludus, utroque explicari conclusionemque ius eu, in scaevola tractatos persecuti per.
                                    </div>
                                    <div class="small mt-2">
                                        <a href="javascript:void(0)" class="text-muted">Reply</a>
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-up"></i> 15
                                        </a>
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-down"></i> 3
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="media">
                                <img style="width: 40px; height: auto;" src="images/avatars/9.jpg" alt="" class="d-block ui-w-40 rounded-circle">
                                <div class="media-body ml-4">
                                    <div class="float-right text-muted small">22 May</div>
                                    <a href="javascript:void(0)">Wayne Morgan</a>
                                    <div class="text-muted small">Member since 01/12/2017 &nbsp;·&nbsp; 345 posts</div>
                                    <div class="mt-2">
                                        Donec ornare eu lorem sit amet laoreet. Praesent mollis eros dui, eget tincidunt arcu rutrum
                                        ut. Morbi et dui molestie, tincidunt nibh vel, consequat sapien. Phasellus nec imperdiet
                                        erat, et viverra metus.
                                    </div>
                                    <div class="small mt-2">
                                        <a href="javascript:void(0)" class="text-muted">Reply</a>
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-up"></i> 15
                                        </a>
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-down"></i> 3
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="media">
                                <img style="width: 40px; height: auto;" src="images/avatars/6.jpg" alt="" class="d-block ui-w-40 rounded-circle">
                                <div class="media-body ml-4">
                                    <div class="float-right text-muted small">22 May</div>
                                    <a href="javascript:void(0)">Belle Ross</a>
                                    <div class="text-muted small">Member since 01/12/2017 &nbsp;·&nbsp; 345 posts</div>
                                    <div class="mt-2">
                                        Proin luctus molestie magna, non rutrum nisi laoreet non. Pellentesque venenatis tincidunt
                                        tortor, ac dignissim sem volutpat placerat. Donec pharetra lacus at ullamcorper pharetra.
                                        Duis iaculis, erat nec
                                        sollicitudin efficitur, est erat tempus nisl, a pharetra nisi metus at eros. Maecenas non
                                        metus pretium, vestibulum odio id, hendrerit sem.
                                    </div>
                                    <div class="small mt-2">
                                        <a href="javascript:void(0)" class="text-muted">Reply</a>
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-up"></i> 15
                                        </a>
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-down"></i> 3
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <span>Copyright 2025 @ Lia Rizky Khairunnisa - Sinoo's Web (Rate It Up)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <script type="text/javascript" src="{{ asset('js/main.d810cf0ae7f39f28f336.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</body>

</html>
