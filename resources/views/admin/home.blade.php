<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Thirukudumbam Fishieries</title>
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/font/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/icon/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('admin-assets/images/favicon.png') }}">
</head>

<body class="body">
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap loader-off">
                <div id="preload" class="preload-container">
                    <div class="preloading"><span></span></div>
                </div>
                <div class="section-menu-left">
                    <div class="section-menu-left-wrap">
                        <div class="center">
                            <div class="center-item">
                                <ul class="">
                                    <li class="menu-item has-children active"><a href="javascript:void(0);"
                                            class="menu-item-button">
                                            <div class="icon"><i class="icon-file-plus"></i></div>
                                            <div class="text">Fish</div>
                                        </a>
                                        <ul class="sub-menu" style="display: block;">
                                            <li class="sub-menu-item active"><a href="{{ route('admin.fishes.index') }}" class="">
                                                    <div class="text">All fish</div>
                                                </a></li>
                                            <li class="sub-menu-item"><a href="{{ route('admin.fishes.create') }}" class="">
                                                    <div class="text">Add new fish</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content-right">
                    <div class="header-dashboard">
                        <div class="wrap">
                            <div class="header-left">
                                <div class="button-show-hide"><i class="icon-chevron-left"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="main-content">
                        <div class="main-content-inner">
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                                    <h3>All Fish</h3>
                                </div>
                                <div class="wg-box">
                                    <div class="flex items-center justify-between gap10 flex-wrap"><a
                                            class="tf-button style-1 w208" href="{{ route('admin.fishes.create') }}"><i
                                                class="icon-plus"></i>Add new fish</a></div>
                                    @if (session('status'))
                                        <div class="alert alert-success" id="alert-box" style="font-size: 16px;">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="wg-table table-product-list">
                                        <ul class="table-title flex gap20 mb-14">
                                            <li>
                                                <div class="body-title">Name</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Price</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Stock</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Action</div>
                                            </li>
                                        </ul>
                                        <ul class="flex flex-column">
                                            @foreach($fishes as $fish)
                                                <li class="wg-product item-row gap20">
                                                    <div class="name">
                                                        <div class="image"><img src="{{ asset('storage/' . $fish->image) }}" alt="">
                                                        </div>
                                                        <div class="title line-clamp-2 mb-0"><a href="#"
                                                                class="body-text">{{ $fish->name }}</a></div>
                                                    </div>
                                                    <div class="body-text text-main-dark mt-4">₹{{ $fish->price }}</div>
                                                    <div>
                                                        <div class="block-stock bg-1 fw-7" style="{{ $fish->enabled ? 'color: var(--22-c-55-e);' : 'color: var(--Secondary);' }}">{{ $fish->enabled ? 'In Stock' : 'Out of Stock' }}</div>
                                                    </div>
                                                    <div class="list-icon-function">
                                                        <!-- <a href="{{ route('admin.fishes.show', ['fish' => $fish->id]) }}"><div class="item eye"><i class="icon-eye"></i></div></a> -->
                                                        <a href="{{ route('admin.fishes.changestatus', ['fish' => $fish->id]) }}"><div class="item status" style="{{ $fish->enabled ? 'color: #DB1215;' : 'color: var(--22-c-55-e);' }}"><i class="icon-{{ $fish->enabled ? 'lock' : 'unlock' }}"></i></div></a>
                                                        <a href="{{ route('admin.fishes.show', ['fish' => $fish->id]) }}"><div class="item edit"><i class="icon-edit-3"></i></div></a>
                                                        <form action="{{ route('admin.fishes.destroy', ['fish' => $fish->id]) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="p-0"><div class="item" style="color: #DB1215;"><i class="icon-trash-2"></i></div></button>
                                                        </form>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="divider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-page">
                            <!-- <div class="body-text">Copyright © 2024 <a href="../index.html">Ecomus</a>. Design by
                                Themesflat All rights reserved</div> -->
                                <div class="body-text" style="color: black;">Copyright © {{ date('Y') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/zoom.js') }}"></script>
    <script src="{{ asset('admin-assets/js/switcher.js') }}"></script>
    <script defer src="{{ asset('admin-assets/js/theme-settings.js') }}"></script>
    <script defer src="{{ asset('admin-assets/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#alert-box').fadeOut();
            }, 2000);
        });
    </script>
</body>

</html>