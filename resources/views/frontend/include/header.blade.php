<!DOCTYPE html>
<html lang="en">
   <head>
        <title>{{getConfiguration('site_title')}}</title>
      <meta charset="utf-8">
      <meta name="keywords" content="@yield('meta-keywords')">
      <meta name="description" content="@yield('meta-description')">
      <meta property="og:type" content="website" />
      <meta property="og:title" content="@yield('title')" />
      <meta property="og:url" content="{{url()->current()}}" />
      <meta property="og:image" content="@yield('image')" />
      <meta property="og:description" content="@yield('short_description')" />
      <meta property="og:site_name" content="{{getConfiguration('site_title')}}" />
      <meta property="og:image:width" content="1000" />
      <meta property="og:image:height" content="600" />
      <meta name="twitter:image" content="@yield('image')" />
      <meta name="twitter:url" content="{{url()->current()}}">
      <meta name="twitter:title" content="@yield('title')">
      <meta name="twitter:description" content="@yield('short_description')">
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
      <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}"/>
      <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}"/>
      <link rel="stylesheet" media="screen" href="{{ asset('vendor/drift-zoom/dist/drift-basic.min.css') }}"/>
      <link rel="stylesheet" media="screen" href="{{ asset('vendor/lightgallery.js/dist/css/lightgallery.min.css') }}"/>
      <link rel="stylesheet" media="screen" href="{{ asset('vendor/nouislider/distribute/nouislider.min.css') }}"/>
      <!-- Main Theme Styles + Bootstrap-->
      <link rel="stylesheet" media="screen" href="{{ asset('css/theme.css') }}">
      <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
   </head>
   <!-- Body-->
   <body  >
      <!-- Sign in / sign up modal-->
      <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <ul class="nav nav-tabs card-header-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
                     <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
                  </ul>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               </div>
               <div class="modal-body tab-content py-4">
                  <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
                     <div class="form-group">
                        <label for="si-email">Email address</label>
                        <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                     </div>
                     <div class="form-group">
                        <label for="si-password">Password</label>
                        <div class="password-toggle">
                           <input class="form-control" type="password" id="si-password" required>
                           <label class="password-toggle-btn">
                           <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                           </label>
                        </div>
                     </div>
                     <div class="form-group d-flex flex-wrap justify-content-between">
                        <div class="custom-control custom-checkbox mb-2">
                           <input class="custom-control-input" type="checkbox" id="si-remember">
                           <label class="custom-control-label" for="si-remember">Remember me</label>
                        </div>
                        <a class="font-size-sm" href="account-password-recovery.php">Forgot password?</a>
                     </div>
                     <a class="btn btn-primary btn-block btn-shadow" href="account-orders.php" type="submit">Sign in</a>
                  </form>
                  <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                     <div class="form-group">
                        <label for="su-name">Full name</label>
                        <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                        <div class="invalid-feedback">Please fill in your name.</div>
                     </div>
                     <div class="form-group">
                        <label for="su-email">Email address</label>
                        <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                     </div>
                     <div class="form-group">
                        <label for="su-password">Password</label>
                        <div class="password-toggle">
                           <input class="form-control" type="password" id="su-password" required>
                           <label class="password-toggle-btn">
                           <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                           </label>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="su-password-confirm">Confirm password</label>
                        <div class="password-toggle">
                           <input class="form-control" type="password" id="su-password-confirm" required>
                           <label class="password-toggle-btn">
                           <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                           </label>
                        </div>
                     </div>
                     <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Navbar-->
      <!-- Navbar 3 Level (Light)-->
      <header class="bg-light box-shadow-sm ">
         <!-- Topbar-->
         <div class="topbar topbar-dark bg-dark">
            <div class="container">
               <div class="topbar-text dropdown d-md-none">
                  <a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown">Support</a>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="tel:{{getConfiguration('contact_no')}}"><i class="czi-support text-muted mr-2"></i>{{getConfiguration('contact_no')}}</a></li>
                     <li><a class="dropdown-item" href="mailto:{{getConfiguration('email')}};"><i class="czi-mail text-muted mr-2"></i>{{getConfiguration('email')}}</a></li>
                  </ul>
               </div>
               <div class="topbar-text text-nowrap d-none d-md-inline-block"><i class="czi-support"></i><span class="text-muted mr-1">Support</span><a class="topbar-link" href="tel:00331697720">{{getConfiguration('contact_no')}}</a></div>
                <div class="cz-carousel cz-controls-static d-none d-md-block">
                  <div class="cz-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false}">
                     <div class="topbar-text">Summer Sale: Up to 60% Off</div>
                     <div class="topbar-text">Friendly 24/7 customer support</div>
                  </div>
               </div>
               <div class="ml-3 text-nowrap"> 
                  <a class="topbar-link mr-4 d-none d-md-inline-block" href="mailto:{{getConfiguration('email')}};"><i class="czi-mail"></i>{{getConfiguration('email')}}</a>
               </div>
            </div>
         </div>
         <div class="navbar-sticky">
            <div class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="container">
                  <a class="navbar-brand mr-5 order-lg-1" href="{{ url('/') }}">
                  <img src="{{ asset('img/logo.svg') }}" width="180" class="" alt="logo"/>
                  </a>
                  <!-- Toolbar-->
                  <div class="navbar-toolbar d-flex align-items-center order-lg-3">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
                     <button class="search navbar-tool d-none d-lg-flex" href="#searchBox" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="searchBox">
                        <span class="navbar-tool-tooltip">Search</span>
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-search"></i></div>
                     </button>
                     <a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-1" href="#signin-modal" data-toggle="modal">
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-user"></i></div>
                        <div class="navbar-tool-text ml-n3"><small>Hello, Sign in</small>My Account</div>
                     </a>
                     <!-- <div class="navbar-tool dropdown ml-3"> -->
                     <div class="navbar-tool ml-3">
                        <!-- <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.php"> -->
                     <a class="navbar-tool-icon-box bg-secondary" href="shop-cart.php">

                           <span class="navbar-tool-label">4</span><i class="navbar-tool-icon czi-cart"></i></a><a class="navbar-tool-text" href="shop-cart.php"><small>My Cart</small>$265.00</a>
                        <!-- Cart dropdown-->
                        <!-- <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                           <div class="widget widget-cart px-3 pt-2 pb-3">
                              <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                                 <div class="widget-cart-item pb-2 border-bottom">
                                    <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                    <div class="media align-items-center">
                                       <a class="d-block mr-2" href="shop-single-v1.php"><img width="64" src="img/shop/catalog/01.jpg" alt="Product"/></a>
                                       <div class="media-body">
                                          <h6 class="widget-product-title"><a href="shop-single-v1.php">Kalachakra Mandala Thangka</a></h6>
                                          <div class="widget-product-meta"><span class="text-accent mr-2">Rs 33,700 <small>.00</small> </span><span class="text-muted">x 1</span></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="widget-cart-item py-2 border-bottom">
                                    <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                    <div class="media align-items-center">
                                       <a class="d-block mr-2" href="shop-single-v1.php"><img width="64" src="img/shop/catalog/02.jpg" alt="Product"/></a>
                                       <div class="media-body">
                                          <h6 class="widget-product-title"><a href="shop-single-v1.php">Tiger Eye Mala</a></h6>
                                          <div class="widget-product-meta"><span class="text-accent mr-2">Rs 10,800 <small>.00</small></span><span class="text-muted">x 1</span></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="widget-cart-item py-2 border-bottom">
                                    <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                    <div class="media align-items-center">
                                       <a class="d-block mr-2" href="shop-single-v1.php"><img width="64" src="img/shop/catalog/04.jpg" alt="Product"/></a>
                                       <div class="media-body">
                                          <h6 class="widget-product-title"><a href="shop-single-v1.php">Onyx Confidence Mala</a></h6>
                                          <div class="widget-product-meta"><span class="text-accent mr-2">Rs 11,100 <small>.00</small></span><span class="text-muted">x 1</span></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                                 <div class="font-size-sm mr-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent font-size-base ml-1">Rs 33,700<small>.00</small></span></div>
                                 <a class="btn btn-outline-secondary btn-sm btn-block" href="shop-cart.php">Expand cart<i class="czi-arrow-right ml-1 mr-n1"></i></a>
                              </div>
                              <a class="btn btn-primary btn-sm btn-block" href="checkout-details.php"><i class="czi-card mr-2 font-size-base align-middle"></i>Checkout</a>
                           </div>
                        </div> -->
                     </div>
                  </div>
                  <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
                     <!-- Search-->
                     <div class="input-group-overlay d-lg-none my-3">
                        <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                        <input class="form-control prepended-form-control" type="text" placeholder="Search Products">
                     </div>
                     <!-- Primary menu-->
                     <ul class="navbar-nav">
                       @foreach ($cat->where('is_menu','1')->take(4) as $value)
                          
                       @if($value->subCategory->isNotEmpty())
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">{{$value->name}} <i class="ci-arrow-down"></i></a>
                           <ul class="dropdown-menu">
                              @foreach($value->subCategory as $child)
                              <li><a class="dropdown-item" href="{{route('product-list',$child->slug)}}">{{$child->name}}</a></li>
                            @endforeach
                           </ul>
                        </li>
                          @else
                        <li class="nav-item"><a class="nav-link" href="{{route('product-list', $value->slug)}}">{{$value->name}}</a></li>
                        @endif

                         @endforeach
                        
                  </div>
               </div>
            </div>
            <!-- Search collapse-->
            <div class="search-box collapse" id="searchBox">
               <div class="card pt-2 pb-4 border-0 rounded-0">
                  <div class="container">
                     <div class="input-group-overlay">
                        <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                        <input class="form-control prepended-form-control" type="text" placeholder="Search Product">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Toolbar for handheld devices-->
      <div class="cz-handheld-toolbar">
         <div class="d-table table-fixed w-100"> 
            <a class="d-table-cell cz-handheld-toolbar-item" href="#signin-modal" data-toggle="modal"><span class="cz-handheld-toolbar-icon"><i class="czi-user"></i></span><span class="cz-handheld-toolbar-label">Login</span></a>
            <a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.php"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
            <a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a>
         </div>
      </div>