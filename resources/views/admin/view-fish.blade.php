<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Ecomus - Ultimate Admin Dashboard HTML</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/styles.css') }}">



    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('admin-assets/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('admin-assets/icon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('admin-assets/images/favicon.png') }}">

</head>

<body class="body">

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap loader-off">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->
                <!-- section-menu-left -->
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
                                            <li class="sub-menu-item"><a href="{{ route('admin.fishes.index') }}" class="">
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
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    <div class="header-dashboard">
                        <div class="wrap">
                            <div class="header-left">
                                <a href="index.html">
                                    
                                </a>
                                <div class="button-show-hide">
                                    <i class="icon-chevron-left"></i>
                                </div>
                                <form class="form-search flex-grow">
                                   
                                   
                                    <div class="box-content-search" id="box-content-search">
                                        <ul class="mb-24">
                                            <li class="mb-14">
                                                <div class="body-title">Top selling product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{ asset('admin-assets/images/products/product-1.jpg') }}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Neptune
                                                                    Longsleeve</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{ asset('admin-assets/images/products/product-2.jpg') }}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Ribbed
                                                                    Tank Top</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="{{ asset('admin-assets/images/products/product-3.jpg') }}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Ribbed
                                                                    modal T-shirt</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="">
                                            <li class="mb-14">
                                                <div class="body-title">Order product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{ asset('admin-assets/images/products/product-4.jpg') }}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Oversized
                                                                    Motif T-shirt</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{ asset('admin-assets/images/products/product-5.jpg') }}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">V-neck
                                                                    linen T-shirt</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{ asset('admin-assets/images/products/product-6.jpg') }}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Jersey
                                                                    thong body</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="{{ asset('admin-assets/images/products/product-7.jpg') }}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Jersey
                                                                    thong body</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                                    <h3>View fish</h3>
                                    
                                </div>
                                <!-- form-add-product -->
                                <form method="POST" action="{{ route('admin.fishes.store') }}" class="form-add-product" enctype="multipart/form-data">
                                    @csrf
                                    @if (session('errorMessage'))
                                        <div style="color: red; font-size: 16px; font-size: 16px; margin-bottom: 16px;">
                                            {{ session('errorMessage') }}
                                        </div>
                                    @endif
                                    <div class="wg-box mb-30">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Fish title <span
                                                    class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" name="name" placeholder="Enter name" name="name"
                                                tabindex="0" value="{{ $fish->name }}" aria-required="true" disabled>
                                            <div class="text-tiny text-surface-2">Do not exceed 20 characters when
                                                entering the fish name.</div>
                                        </fieldset>
                                        
                                        <div class="cols-lg gap22">
                                            <fieldset class="price">
                                                <div class="body-title mb-10">Price (per kg) <span class="tf-color-1">*</span>
                                                </div>
                                                <input class="" type="number" placeholder="Price" name="price"
                                                    tabindex="0" value="{{ $fish->price }}" aria-required="true" disabled>
                                            </fieldset>
                                        </div>
                                        
                                       
                                        <fieldset class="description">
                                            <div class="body-title mb-10">Description</div>
                                            <!-- <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div> -->
                                            <textarea class="mb-10" name="description"
                                                placeholder="Short description about fish" tabindex="0"
                                                aria-required="true" disabled>{{ $fish->description }}</textarea>
                                            
                                        </fieldset>
                                    </div>
                                    <div class="wg-box mb-30">
                                        <fieldset>
                                            <div class="body-title mb-10">Upload image <span class="tf-color-1">*</span></div>
                                            <div class="upload-image mb-16">
                                                <div class="up-load">
                                                    <label class="uploadfile" for="myFile1">
                                                        <span class="icon">
                                                            <i class="icon-upload-cloud"></i>
                                                        </span>
                                                        <div class="text-tiny"><span class="text-secondary">Click to browse</span></div>
                                                        <!-- <input type="file" id="myFile1" name="image"> -->
                                                        <img src="{{ asset('storage/' . $fish->image) }}" id="myFile-input-1" alt="" style="visibility: visible; opacity: 1;">
                                                    </label>
                                                </div>
                                            </div>
                                          
                                        </fieldset>
                                    </div>
                                    <!-- <div class="wg-box mb-30">
                                        <fieldset>
                                            <div class="body-title mb-10">Upload secondary image</div>
                                            <div class="upload-image mb-16">
                                                <div class="up-load">
                                                    <label class="uploadfile" for="myFile2">
                                                        <span class="icon">
                                                            <i class="icon-upload-cloud"></i>
                                                        </span>
                                                        <div class="text-tiny">Drop your images here or select <span
                                                                class="text-secondary">click to browse</span></div>
                                                        <input type="file" id="myFile2" name="image2">
                                                        <img src="" id="myFile-input-2" alt="">
                                                    </label>
                                                </div>
                                               
                                            </div>
                                          
                                        </fieldset>
                                    </div> -->
                                 

                                    <div class="cols gap10">
                                        <button class="tf-button w380" type="submit">Add fish</button>
                                    </div>
                                </form>
                                <!-- /form-add-product -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <div class="bottom-page">
                            <!-- <div class="body-text">Copyright © 2024 <a href="../index.html">Ecomus</a>. Design by
                                Themesflat All rights reserved</div> -->
                                <div class="body-text" style="color: black;">Copyright © {{ date('Y') }}</div>
                        </div>
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/zoom.js') }}"></script>
    <script src="{{ asset('admin-assets/js/switcher.js') }}"></script>
    <script defer src="{{ asset('admin-assets/js/theme-settings.js') }}"></script>
    <script defer src="{{ asset('admin-assets/js/main.js') }}"></script>
    
    <script>
        const imageInput = document.getElementById('myFile1');
        const imagePreview = document.getElementById('myFile-input-1');
        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                    imagePreview.style.visibility = 'visible';
                    imagePreview.style.opacity = '1';
                };
                reader.readAsDataURL(file);
            } else {
                imagePreview.src = '';
                imagePreview.style.display = 'none';
                imagePreview.style.visibility = 'hidden';
                imagePreview.style.opacity = '0';
            }
        });
    </script>

</body>

</html>