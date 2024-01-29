<!DOCTYPE html>
<html lang="fa" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-template="horizontal-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>FA library</title>

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/materialdesignicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body>

    <div class="position-relative">
        <div class="authentication-wrapper authentication-basic container-p-y">

            <div class="row mb-50 ">
                <nav class="navbar navbar-expand-lg bg-secondary ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="javascript:void(0)">Library Management System</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbar-ex-8">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbar-ex-8">
                            <div class="navbar-nav me-auto">
                                <a class="nav-item nav-link active" href="{{ url('/home') }}">Home</a>
                                <a class="nav-item nav-link" href="{{ url('/book') }}">About Books</a>
                                <a class="nav-item nav-link" href="{{ url('/library') }}">Our Library</a>
                            </div>
                            <ul class="navbar-nav ms-lg-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/profile') }}"><i
                                            class="tf-icons navbar-icon mdi mdi-account-outline me-1"></i>Profile</a>
                                </li>
                                <li class="nav-item">
                                    @auth
                                        <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="tf-icons navbar-icon mdi mdi-logout me-1"></i>Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    @else
                                        <a class="nav-link" href="{{ url('/login') }}"><i
                                                class="tf-icons navbar-icon mdi mdi-lock-outline me-1"></i>SignIn |
                                            SignUp</a>
                                    @endauth
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- Hero -->
                <div class="p-5 text-center bg-image rounded-3"
                    style="
background-image:  url('/assets/img/lib.jpg');
height: 400px;
">
                    <div class="mask " style="background-color: rgba(0, 0, 0, 0.2);">
                        <div class=" mt-50 d-flex justify-content-center align-items-center h-100">
                            <div>
                                <h1 class="mb-3 text-white">AF Library</h1>
                                <h4 class="mb-3 text-white">Explore books to infinity</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero -->
                <!-- Help Center Header -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card">
                        <div class="help-center-header d-flex flex-column justify-content-center align-items-center">
                            <h3 class="text-center text-primary pt-50">Hello, how can we help?</h3>
                            <p class="text-center px-3 mb-0">Common troubleshooting topics:</p>
                            <div class="input-wrapper my-3 input-group input-group-lg input-group-merge px-5">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="mdi mdi-magnify mdi-20px"></i></span>
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                                    aria-describedby="basic-addon1" />
                            </div>
                        </div>
                        <!-- /Help Center Header -->

                        <!-- Get to know our site -->
                        <div class="help-center-popular-articles py-5">
                            <div class="container-xl">
                                <h4 class="text-center my-4">GET STARTED</h4>
                                <div class="row mb-2">
                                    <div class="col-lg-10 mx-auto">
                                        <div class="row">
                                            <div class="col-md-4 mb-md-0 mb-4">
                                                <div class="card border shadow-none">
                                                    <div class="card-body text-center">
                                                        <img class="mb-3" src="../../assets/svg/icons/rocket.svg"
                                                            height="60" alt="Help center landing" />
                                                        <h5>SignUp/SignIn</h5>
                                                        <p>Whether you're new or you're a power user, You can signIn and
                                                            SignUp</p>
                                                        <a class="btn btn-outline-primary"
                                                            href="{{ url('/login') }}">Read More</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mb-md-0 mb-4">
                                                <div class="card border shadow-none">
                                                    <div class="card-body text-center">
                                                        <img class="mb-3" src="../../assets/svg/icons/gift.svg"
                                                            height="60" alt="Help center landing" />
                                                        <h5>Get To know with Our Books</h5>
                                                        <p>Are you a new customer wondering What our Books are?</p>
                                                        <a class="btn btn-outline-primary"
                                                            href="{{ url('/book') }}">Read More</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="card border shadow-none">
                                                    <div class="card-body text-center">
                                                        <img class="mb-3" src="../../assets/svg/icons/keyboard.svg"
                                                            height="60" alt="Help center landing" />
                                                        <h5>Our Librarys and Their Addresses:</h5>
                                                        <p>This article will show you how to expand the functionality
                                                            of...</p>
                                                        <a class="btn btn-outline-primary"
                                                            href="./pages-help-center-article.html">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Get to know our site -->






 <div class="row mb-5">
                        <div class="w-32 m-8">

                            <a href="{{ url('book/create') }}">
                                <button type="button"
                                    class="mb-3 btn btn-sm btn-secondary waves-effect waves-light">Add new
                                    book</button>
                            </a>
                        </div>
                        @foreach ($books as $book)
                            <div class="col-md-3 col-sm-4">
                                <div class="card">
                                    @php
                                        $images = File::files(public_path('assets/img/elements'));
                                        $randomImage = $images[array_rand($images)];
                                    @endphp
                                    <img class="card-img-top"
                                        src="{{ asset('assets/img/elements/' . $randomImage->getFilename()) }}"
                                        alt="Card image cap" style="width:298px;height:150px;" />
                                    <div class="card-body">
                                        <h6 class="mt-2 text-muted">Book Name:{{ $book->name }}</h6>
                                        <h5 class="card-title"> Category:{{ $book->category }}</h5>
                                        <p class="card-text">{{ $book->description }}</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">author:{{ $book->author }}</li>
                                        <li class="list-group-item">quantity:{{ $book->quantity }}</li>
                                    </ul>
                                    <div class="card-body">

                                        <div class="w-32 m-8">
                                            <button type="button"
                                                class="btn btn-sm btn-secondary waves-effect waves-light d-right"
                                                data-bs-toggle="modal" data-bs-target="#dateTimeModal">Borrow
                                                book</button>
                                            @auth

                                                <div class="modal fade" id="dateTimeModal" tabindex="-1"
                                                    aria-labelledby="dateTimeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="dateTimeModalLabel">Return
                                                                    Time
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('books.borrow', ['book' => $book->id]) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="user_id"
                                                                        value="{{ auth()->user()->id }}">

                                                                    <div class="mb-3">
                                                                        <label for="dateInput"
                                                                            class="form-label">Date</label>
                                                                        <input type="date" class="form-control"
                                                                            id="dateInput" name="return_date" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="timeInput"
                                                                            class="form-label">Time</label>
                                                                        <input type="time" class="form-control"
                                                                            id="timeInput" name="return_time" required>
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-primary waves-effect waves-light d-right">
                                                                        Borrow book
                                                                    </button>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <p class="text-danger">Login to borrow a book</p>
                                            @endauth

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    
                        <!-- Help Area -->
                        <div class="help-center-contact-us bg-help-center">
                            <div class="container-xl">
                                <div class="row justify-content-center py-5 my-4">
                                    <div class="col-md-8 col-lg-6 text-center">
                                        <h4>Still need help?</h4>
                                        <p class="mb-4">
                                            Our specialists are always happy to help. Contact us during standard
                                            business hours or email
                                            us 24/7 and we'll get back to you.
                                        </p>
                                        <div class="d-flex justify-content-center flex-wrap gap-4">
                                            <a href="javascript:void(0);" class="btn btn-primary">Visit our
                                                community</a>
                                            <a href="javascript:void(0);" class="btn btn-primary">Contact us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Help Area -->


                    </div>

                   

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/pages-auth.js') }}"></script>
</body>

</html>
