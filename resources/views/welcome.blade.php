<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{ asset('landpage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{ asset('landpage/assets/css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('landpage/assets/css/templatemo-villa-agency.css') }}">
        <link rel="stylesheet" href="{{ asset('landpage/assets/css/owl.css') }}">
        <link rel="stylesheet" href="{{ asset('landpage/assets/css/animate.css') }}">
        <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                    <!-- ***** Preloader Start ***** -->
                    <div id="js-preloader" class="js-preloader">
                      <div class="preloader-inner">
                        <span class="dot"></span>
                        <div class="dots">
                          <span></span>
                          <span></span>
                          <span></span>
                        </div>
                      </div>
                    </div>
                    <!-- ***** Preloader End ***** -->
                  
                    <div class="sub-header">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-8 col-md-8">
                            <ul class="info">
                              <li><i class="fa fa-envelope"></i> info@company.com</li>
                              <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
                            </ul>
                          </div>
                          <div class="col-lg-4 col-md-4">
                            <ul class="social-links">
                              <li><a href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i></a></li>
                              <li><a href="{{ route('register') }}"><i class="fa-solid fa-registered"></i></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <!-- ***** Header Area Start ***** -->
                    <header class="header-area header-sticky">
                      <div class="container">
                          <div class="row">
                              <div class="col-12">
                                  <nav class="main-nav">
                                      <!-- ***** Logo Start ***** -->
                                      <a href="index.html" class="logo">
                                          <h1>Villa</h1>
                                      </a>
                                      <!-- ***** Logo End ***** -->
                                      <!-- ***** Menu Start ***** -->
                                      <ul class="nav">
                                        <li><a href="{{ route('authors.index') }}">Authors</a></li>
                                        <li><a href="{{ route('books.index') }}">Books</a></li>
                                        <li><a href="property-details.html">Property Details</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a></li>
                                    </ul>   
                                      <a class='menu-trigger'>
                                          <span>Menu</span>
                                      </a>
                                      <!-- ***** Menu End ***** -->
                                  </nav>
                              </div>
                          </div>
                      </div>
                    </header>
                    <!-- ***** Header Area End ***** -->
                  
                    <div class="main-banner">
                      <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                          <div class="header-text">
                            <span class="category">Toronto, <em>Canada</em></span>
                            <h2>Hurry!<br>Get the Best Villa for you</h2>
                          </div>
                        </div>
                        <div class="item item-2">
                          <div class="header-text">
                            <span class="category">Melbourne, <em>Australia</em></span>
                            <h2>Be Quick!<br>Get the best villa in town</h2>
                          </div>
                        </div>
                        <div class="item item-3">
                          <div class="header-text">
                            <span class="category">Miami, <em>South Florida</em></span>
                            <h2>Act Now!<br>Get the highest level penthouse</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="featured section">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-image">
                              <img src="assets/images/featured.jpg" alt="">
                              <a href="property-details.html"><img src="assets/images/featured-icon.png" alt="" style="max-width: 60px; padding: 0px;"></a>
                            </div>
                          </div>
                          <div class="col-lg-5">
                            <div class="section-heading">
                              <h6>| Featured</h6>
                              <h2>Best Appartment &amp; Sea view</h2>
                            </div>
                            <div class="accordion" id="accordionExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Best useful links ?
                                  </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                  Get <strong>the best villa</strong> website template in HTML CSS and Bootstrap for your business. TemplateMo provides you the <a href="https://www.google.com/search?q=best+free+css+templates" target="_blank">best free CSS templates</a> in the world. Please tell your friends about it.</div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How does this work ?
                                  </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Why is Villa Agency the best ?
                                  </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="info-table">
                              <ul>
                                <li>
                                  <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                                  <h4>250 m2<br><span>Total Flat Space</span></h4>
                                </li>
                                <li>
                                  <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                                  <h4>Contract<br><span>Contract Ready</span></h4>
                                </li>
                                <li>
                                  <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                                  <h4>Payment<br><span>Payment Process</span></h4>
                                </li>
                                <li>
                                  <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                                  <h4>Safety<br><span>24/7 Under Control</span></h4>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="video section">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-4 offset-lg-4">
                            <div class="section-heading text-center">
                              <h6>| Video View</h6>
                              <h2>Get Closer View & Different Feeling</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="video-content">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-10 offset-lg-1">
                            <div class="video-frame">
                              <img src="assets/images/video-frame.jpg" alt="">
                              <a href="https://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="fun-facts">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="wrapper">
                              <div class="row">
                                <div class="col-lg-4">
                                  <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="34" data-speed="1000"></h2>
                                     <p class="count-text ">Buildings<br>Finished Now</p>
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="12" data-speed="1000"></h2>
                                    <p class="count-text ">Years<br>Experience</p>
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="24" data-speed="1000"></h2>
                                    <p class="count-text ">Awwards<br>Won 2023</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="section best-deal">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="section-heading">
                              <h6>| Best Deal</h6>
                              <h2>Find Your Best Deal Right Now!</h2>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="tabs-content">
                              <div class="row">
                                <div class="nav-wrapper ">
                                  <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment" aria-selected="true">Appartment</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">Villa House</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">Penthouse</button>
                                    </li>
                                  </ul>
                                </div>              
                                <div class="tab-content" id="myTabContent">
                                  <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                                    <div class="row">
                                      <div class="col-lg-3">
                                        <div class="info-table">
                                          <ul>
                                            <li>Total Flat Space <span>185 m2</span></li>
                                            <li>Floor number <span>26th</span></li>
                                            <li>Number of rooms <span>4</span></li>
                                            <li>Parking Available <span>Yes</span></li>
                                            <li>Payment Process <span>Bank</span></li>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <img src="assets/images/deal-01.jpg" alt="">
                                      </div>
                                      <div class="col-lg-3">
                                        <h4>Extra Info About Property</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. 
                                        <br><br>When you need free CSS templates, you can simply type TemplateMo in any search engine website. In addition, you can type TemplateMo Portfolio, TemplateMo One Page Layouts, etc.</p>
                                        <div class="icon-button">
                                          <a href="property-details.html"><i class="fa fa-calendar"></i> Schedule a visit</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                                    <div class="row">
                                      <div class="col-lg-3">
                                        <div class="info-table">
                                          <ul>
                                            <li>Total Flat Space <span>250 m2</span></li>
                                            <li>Floor number <span>26th</span></li>
                                            <li>Number of rooms <span>5</span></li>
                                            <li>Parking Available <span>Yes</span></li>
                                            <li>Payment Process <span>Bank</span></li>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <img src="assets/images/deal-02.jpg" alt="">
                                      </div>
                                      <div class="col-lg-3">
                                        <h4>Detail Info About Villa</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                                        <div class="icon-button">
                                          <a href="property-details.html"><i class="fa fa-calendar"></i> Schedule a visit</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                                    <div class="row">
                                      <div class="col-lg-3">
                                        <div class="info-table">
                                          <ul>
                                            <li>Total Flat Space <span>320 m2</span></li>
                                            <li>Floor number <span>34th</span></li>
                                            <li>Number of rooms <span>6</span></li>
                                            <li>Parking Available <span>Yes</span></li>
                                            <li>Payment Process <span>Bank</span></li>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <img src="assets/images/deal-03.jpg" alt="">
                                      </div>
                                      <div class="col-lg-3">
                                        <h4>Extra Info About Penthouse</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                                        <div class="icon-button">
                                          <a href="property-details.html"><i class="fa fa-calendar"></i> Schedule a visit</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="properties section">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-4 offset-lg-4">
                            <div class="section-heading text-center">
                              <h6>| Properties</h6>
                              <h2>We Provide The Best Property You Like</h2>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4 col-md-6">
                            <div class="item">
                              <a href="property-details.html"><img src="assets/images/property-01.jpg" alt=""></a>
                              <span class="category">Luxury Villa</span>
                              <h6>$2.264.000</h6>
                              <h4><a href="property-details.html">18 New Street Miami, OR 97219</a></h4>
                              <ul>
                                <li>Bedrooms: <span>8</span></li>
                                <li>Bathrooms: <span>8</span></li>
                                <li>Area: <span>545m2</span></li>
                                <li>Floor: <span>3</span></li>
                                <li>Parking: <span>6 spots</span></li>
                              </ul>
                              <div class="main-button">
                                <a href="property-details.html">Schedule a visit</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <div class="item">
                              <a href="property-details.html"><img src="assets/images/property-02.jpg" alt=""></a>
                              <span class="category">Luxury Villa</span>
                              <h6>$1.180.000</h6>
                              <h4><a href="property-details.html">54 Mid Street Florida, OR 27001</a></h4>
                              <ul>
                                <li>Bedrooms: <span>6</span></li>
                                <li>Bathrooms: <span>5</span></li>
                                <li>Area: <span>450m2</span></li>
                                <li>Floor: <span>3</span></li>
                                <li>Parking: <span>8 spots</span></li>
                              </ul>
                              <div class="main-button">
                                <a href="property-details.html">Schedule a visit</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <div class="item">
                              <a href="property-details.html"><img src="assets/images/property-03.jpg" alt=""></a>
                              <span class="category">Luxury Villa</span>
                              <h6>$1.460.000</h6>
                              <h4><a href="property-details.html">26 Old Street Miami, OR 38540</a></h4>
                              <ul>
                                <li>Bedrooms: <span>5</span></li>
                                <li>Bathrooms: <span>4</span></li>
                                <li>Area: <span>225m2</span></li>
                                <li>Floor: <span>3</span></li>
                                <li>Parking: <span>10 spots</span></li>
                              </ul>
                              <div class="main-button">
                                <a href="property-details.html">Schedule a visit</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <div class="item">
                              <a href="property-details.html"><img src="assets/images/property-04.jpg" alt=""></a>
                              <span class="category">Apartment</span>
                              <h6>$584.500</h6>
                              <h4><a href="property-details.html">12 New Street Miami, OR 12650</a></h4>
                              <ul>
                                <li>Bedrooms: <span>4</span></li>
                                <li>Bathrooms: <span>3</span></li>
                                <li>Area: <span>125m2</span></li>
                                <li>Floor: <span>25th</span></li>
                                <li>Parking: <span>2 cars</span></li>
                              </ul>
                              <div class="main-button">
                                <a href="property-details.html">Schedule a visit</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <div class="item">
                              <a href="property-details.html"><img src="assets/images/property-05.jpg" alt=""></a>
                              <span class="category">Penthouse</span>
                              <h6>$925.600</h6>
                              <h4><a href="property-details.html">34 Beach Street Miami, OR 42680</a></h4>
                              <ul>
                                <li>Bedrooms: <span>4</span></li>
                                <li>Bathrooms: <span>4</span></li>
                                <li>Area: <span>180m2</span></li>
                                <li>Floor: <span>38th</span></li>
                                <li>Parking: <span>2 cars</span></li>
                              </ul>
                              <div class="main-button">
                                <a href="property-details.html">Schedule a visit</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <div class="item">
                              <a href="property-details.html"><img src="assets/images/property-06.jpg" alt=""></a>
                              <span class="category">Modern Condo</span>
                              <h6>$450.000</h6>
                              <h4><a href="property-details.html">22 New Street Portland, OR 16540</a></h4>
                              <ul>
                                <li>Bedrooms: <span>3</span></li>
                                <li>Bathrooms: <span>2</span></li>
                                <li>Area: <span>165m2</span></li>
                                <li>Floor: <span>26th</span></li>
                                <li>Parking: <span>3 cars</span></li>
                              </ul>
                              <div class="main-button">
                                <a href="property-details.html">Schedule a visit</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="contact section">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-4 offset-lg-4">
                            <div class="section-heading text-center">
                              <h6>| Contact Us</h6>
                              <h2>Get In Touch With Our Agents</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="contact-content">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-7">
                            <div id="map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="item phone">
                                  <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                                  <h6>010-020-0340<br><span>Phone Number</span></h6>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="item email">
                                  <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                                  <h6>info@villa.co<br><span>Business Email</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5">
                            <form id="contact-form" action="" method="post">
                              <div class="row">
                                <div class="col-lg-12">
                                  <fieldset>
                                    <label for="name">Full Name</label>
                                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                                  </fieldset>
                                </div>
                                <div class="col-lg-12">
                                  <fieldset>
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-lg-12">
                                  <fieldset>
                                    <label for="subject">Subject</label>
                                    <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
                                  </fieldset>
                                </div>
                                <div class="col-lg-12">
                                  <fieldset>
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-lg-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                                  </fieldset>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <footer>
                      <div class="container">
                        <div class="col-lg-8">
                          <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
                          
                          Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                        </div>
                    </div>
                    </footer>
                </div>
            </div>
                    <!-- Scripts -->
                    <!-- Bootstrap core JavaScript -->
                    <script src="{{ asset('landpage/vendor/jquery/jquery.min.js') }}"></script>
                    <script src="{{ asset('landpage/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
                    <script src="{{ asset('landpage/assets/js/isotope.min.js') }}"></script>
                    <script src="{{ asset('landpage/assets/js/owl-carousel.js') }}"></script>
                    <script src="{{ asset('landpage/assets/js/counter.js') }}"></script>
                    <script src="{{ asset('landpage/assets/js/custom.js') }}"></script>
                  
                    

    </body>
</html>
