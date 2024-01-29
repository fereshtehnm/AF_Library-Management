<!DOCTYPE html>
<html lang="fa" class="light-style customizer-hide" dir="rtl" data-theme="theme-default"
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
            <div class="authentication-inner py-4">
                <!-- Login -->
                <div class="card p-2">
                    <!-- Logo -->
                    <span class="app-brand-logo demo p-10 m-10">
                        <span style="color: var(--bs-primary)">
                            <svg fill="#000000" height="50px" width="50px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 512 512" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M472.77,267.844h13.402c14.242,0,25.828-11.586,25.828-25.828c0-6.879-2.681-13.361-7.578-18.281
    c-4.889-4.867-11.371-7.547-18.25-7.547h-14.996C495.909,198,512,168.713,512,135.726c0-55.048-44.786-99.834-99.834-99.834
    H25.832c-14.242,0-25.828,11.586-25.828,25.828S11.59,87.548,25.832,87.548H39.24c11.716,30.943,11.716,65.412,0,96.355H25.832
    c-14.242,0-25.828,11.586-25.828,25.828s11.586,25.828,25.828,25.828h14.996C16.092,253.75,0,283.039,0,316.026
    c0,26.647,10.385,51.717,29.245,70.592c16.565,16.565,37.932,26.583,60.966,28.771v51.033c0,3.409,1.792,6.567,4.717,8.314
    c2.928,1.749,6.556,1.83,9.558,0.214l38.596-20.773l38.596,20.773c1.435,0.772,3.013,1.157,4.591,1.157
    c1.721,0,3.44-0.458,4.968-1.371c2.926-1.749,4.717-4.906,4.717-8.314v-50.571h290.216c14.242,0,25.828-11.586,25.828-25.828
    c0-6.901-2.686-13.388-7.578-18.28c-4.889-4.867-11.371-7.548-18.25-7.548h-13.402c-3.952-10.419-6.618-21.267-7.91-32.36
    c-0.624-5.226-0.94-10.546-0.94-15.809s0.316-10.582,0.943-15.836C466.154,289.111,468.82,278.26,472.77,267.844z M25.832,216.189
    c-3.56,0-6.457-2.897-6.457-6.457c0-3.56,2.897-6.457,6.457-6.457h383.352c24.808,0,47.563-13.548,59.385-35.358
    c10.927-20.156,10.927-44.224,0-64.38c-11.823-21.81-34.577-35.358-59.385-35.358H45.768H25.832c-3.56,0-6.457-2.897-6.457-6.457
    c0-3.56,2.897-6.457,6.457-6.457h386.336c44.367,0,80.463,36.096,80.463,80.463c0,44.35-36.069,80.435-80.413,80.462H25.832z
    M164.459,143H67.211c0.226-4.845,0.226-9.697,0-14.541h47.955c5.349,0,9.685-4.337,9.685-9.685c0-5.349-4.337-9.685-9.685-9.685
    H65.084c-1.259-7.273-3.009-14.475-5.308-21.538h349.408c17.693,0,33.924,9.664,42.355,25.218c7.794,14.376,7.794,31.541,0,45.918
    c-8.432,15.555-24.662,25.218-42.355,25.218H59.776c2.297-7.061,4.049-14.262,5.308-21.534h99.376
    c5.349,0,9.685-4.336,9.685-9.685C174.145,147.336,169.808,143,164.459,143z M176.586,450.21l-28.91-15.561
    c-1.433-0.771-3.012-1.157-4.591-1.157s-3.157,0.386-4.591,1.157l-28.91,15.561V342.666h67.003V450.21z M186.271,323.295H99.897
    c-5.349,0-9.685,4.337-9.685,9.685v29.508c-4.218-1.144-8.283-2.839-12.045-5.086c-7.456-4.427-13.575-10.795-17.7-18.423
    c-3.804-7.019-5.815-14.957-5.815-22.955c0-8.009,2.011-15.946,5.818-22.96c8.424-15.557,24.653-25.222,42.35-25.222h349.396
    c-2.299,7.043-4.08,14.242-5.345,21.539h-50.034c-5.349,0-9.685,4.337-9.685,9.685c0,5.349,4.336,9.685,9.685,9.685h47.902
    c-0.116,2.427-0.19,4.854-0.19,7.272s0.074,4.844,0.19,7.269h-97.194c-5.349,0-9.685,4.336-9.685,9.685
    c0,5.349,4.337,9.685,9.685,9.685h99.326c1.267,7.296,3.046,14.49,5.344,21.529H195.957v-21.529h31.639
    c5.349,0,9.685-4.337,9.685-9.685s-4.337-9.685-9.685-9.685H186.271z M486.172,383.566c1.721,0,3.349,0.677,4.568,1.889
    c1.218,1.218,1.889,2.841,1.889,4.568c0,3.56-2.897,6.457-6.457,6.457H195.957v-12.914H486.172z M102.821,248.473
    c-24.815,0-47.571,13.553-59.38,35.36c-5.339,9.833-8.16,20.964-8.16,32.193c0,11.213,2.82,22.342,8.153,32.178
    c5.785,10.699,14.376,19.64,24.823,25.843c6.758,4.034,14.222,6.83,21.955,8.302v13.54c-17.85-2.114-34.369-10.069-47.266-22.966
    c-15.202-15.214-23.574-35.422-23.574-56.898c0-44.353,36.07-80.438,80.418-80.466h312.378c0.017,0,0.034-0.001,0.05-0.001h73.956
    c1.721,0,3.35,0.677,4.552,1.874c1.228,1.233,1.905,2.862,1.905,4.583c0,3.56-2.897,6.457-6.457,6.457H102.821z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <circle cx="197.984" cy="152.682" r="9.685" />
                                    </g>
                                </g>
                            </svg>
                        </span>
                    </span>
                    <!-- /Logo -->

                    <div class="card-body mt-2">
                        <h4 class="mb-4 fw-semibold">welcome 👋</h4>

                        <form method="POST" action="{{ url('login/post') }}">
                            @csrf
                            <div class="form-floating form-floating-outline mb-3">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="enter your email" autofocus />
                                <label for="email">email</label>
                            </div>
                            <div class="mb-3">
                                <div class="form-password-toggle">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input type="password" id="password" class="form-control" name="password"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="پسورد" />
                                            <label for="password">password</label>
                                        </div>
                                        <span class="input-group-text cursor-pointer"><i
                                                class="mdi mdi-eye-off-outline"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 d-flex justify-content-between">
                                <div class="form-check">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input class="form-check-input" type="checkbox" id="remember_me"
                                            name="remember" />
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">remember me
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <button class="btn btn-primary d-grid w-100" type="submit">log in</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /Login -->
                <img alt="mask" src="{{ asset('assets/img/illustrations/auth-basic-login-mask-light.png') }}"
                    class="authentication-image d-none d-lg-block"
                    data-app-light-img="{{ asset('assets/img/illustrations/auth-basic-login-mask-light.png') }}"
                    data-app-dark-img="{{ asset('assets/img/illustrations/auth-basic-login-mask-dark.png') }}" />
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
