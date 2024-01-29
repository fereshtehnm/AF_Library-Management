{{-- <x-guest-layout> --}}
{{--    <!-- Session Status --> --}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

{{--    <form method="POST" action="{{ route('login') }}"> --}}
{{--        @csrf --}}

{{--        <!-- Email Address --> --}}
{{--        <div> --}}
{{--            <x-input-label for="email" :value="__('Email')" /> --}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /> --}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
{{--        </div> --}}

{{--        <!-- Password --> --}}
{{--        <div class="mt-4"> --}}
{{--            <x-input-label for="password" :value="__('Password')" /> --}}

{{--            <x-text-input id="password" class="block mt-1 w-full" --}}
{{--                            type="password" --}}
{{--                            name="password" --}}
{{--                            required autocomplete="current-password" /> --}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
{{--        </div> --}}

{{--        <!-- Remember Me --> --}}
{{--        <div class="block mt-4"> --}}
{{--            <label for="remember_me" class="inline-flex items-center"> --}}
{{--                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember"> --}}
{{--                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span> --}}
{{--            </label> --}}
{{--        </div> --}}

{{--        <div class="flex items-center justify-end mt-4"> --}}
{{--            @if (Route::has('password.request')) --}}
{{--                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}"> --}}
{{--                    {{ __('Forgot your password?') }} --}}
{{--                </a> --}}
{{--            @endif --}}

{{--            <x-primary-button class="ml-3"> --}}
{{--                {{ __('Log in') }} --}}
{{--            </x-primary-button> --}}
{{--        </div> --}}
{{--    </form> --}}
{{-- </x-guest-layout> --}}


<!DOCTYPE html>
<html lang="fa" class="light-style customizer-hide" dir="rtl" data-theme="theme-default"
    data-template="horizontal-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>مدیریت بازار مج</title>

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

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    {{--    <script src="{{asset('assets/vendor/js/template-customizer.js')}}"></script> --}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body>

    <div class="position-relative">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Login -->
                <div class="card p-2">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mt-5">
                        <a href="{{ url('/') }}" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <span style="color: #666cff">
                                    <svg id="Layer_1" width="268" data-name="Layer 1"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 928.6 497.8">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #1d3961;
                                                }

                                                .cls-1,
                                                .cls-2 {
                                                    stroke: #1d3961;
                                                    stroke-miterlimit: 10;
                                                    stroke-width: 3px;
                                                }

                                                .cls-2 {
                                                    fill: none;
                                                }

                                                .cls-3 {
                                                    fill: #0046bf;
                                                }

                                                .cls-4 {
                                                    fill: #ffda1a;
                                                }
                                            </style>
                                        </defs>
                                        <path class="cls-4"
                                            d="M928.6,0h0c-8.58,41.62-45.22,71.49-87.72,71.49H423.39L438.13,0h490.47Z" />
                                        <path class="cls-4"
                                            d="M906.29,108.25h0c-8.58,41.62-45.22,71.49-87.72,71.49H401.08l14.74-71.49h490.47Z" />
                                        <path class="cls-4"
                                            d="M883.98,216.51h0c-8.58,41.62-45.22,71.49-87.72,71.49H378.77l14.74-71.49h490.47Z" />
                                        <polygon class="cls-3"
                                            points="160.86 71.49 153.28 108.25 388.17 108.25 373.44 179.74 365.86 216.51 351.13 288 116.24 288 108.66 324.77 93.92 396.26 73 497.8 0 497.8 20.93 396.26 35.66 324.77 43.24 288 57.97 216.51 292.87 216.51 300.45 179.74 65.55 179.74 80.29 108.25 87.86 71.49 102.59 0 410.48 0 395.75 71.49 160.86 71.49" />
                                        <polygon class="cls-1"
                                            points="466.56 477.13 462.52 496.26 443.38 496.26 447.42 477.13 466.56 477.13" />
                                        <polygon class="cls-1"
                                            points="203.78 362.31 199.73 381.45 180.6 381.45 184.64 362.31 203.78 362.31" />
                                        <path class="cls-1"
                                            d="M842.73,326.91l-23.65,111.94h-19.13l19.69-93.23c2.31-10.91,11.93-18.72,23.09-18.72h0Z" />
                                        <polygon class="cls-1"
                                            points="638.78 477.13 634.73 496.26 615.6 496.26 619.64 477.13 638.78 477.13" />
                                        <path class="cls-1"
                                            d="M792.94,381.45l-12.13,57.4h-191.35l19.69-93.22c2.31-10.92,11.94-18.73,23.1-18.73h0l-19.61,92.81h19.13l8.08-38.27h19.13l-8.08,38.27h38.27l8.08-38.27h19.14l-8.08,38.27h19.13l8.08-38.27h19.14l-8.08,38.27h19.13l8.08-38.27h19.13Z" />
                                        <polygon class="cls-1"
                                            points="623.69 457.99 619.64 477.13 600.51 477.13 604.55 457.99 623.69 457.99" />
                                        <polygon class="cls-1"
                                            points="642.82 457.99 638.78 477.13 619.64 477.13 623.69 457.99 642.82 457.99" />
                                        <polygon class="cls-1"
                                            points="451.46 457.99 447.42 477.13 428.29 477.13 432.33 457.99 451.46 457.99" />
                                        <polygon class="cls-1"
                                            points="470.6 457.99 466.56 477.13 447.42 477.13 451.46 457.99 470.6 457.99" />
                                        <polygon class="cls-1"
                                            points="486.78 381.45 474.65 438.85 111.07 438.85 123.19 381.45 142.33 381.45 134.25 419.72 249.06 419.72 257.14 381.45 276.28 381.45 268.2 419.72 306.47 419.72 314.55 381.45 333.69 381.45 325.6 419.72 344.74 419.72 352.83 381.45 371.96 381.45 363.87 419.72 383.01 419.72 391.09 381.45 410.23 381.45 402.15 419.72 459.55 419.72 467.64 381.45 486.78 381.45" />
                                        <polygon class="cls-1"
                                            points="222.92 362.31 218.87 381.45 199.73 381.45 203.78 362.31 222.92 362.31" />
                                        <path class="cls-1"
                                            d="M582.45,381.45l-3.85,18.22-.19,.92-4.94,23.36c-1.83,8.69-9.5,14.91-18.38,14.91h-42.18l4.04-19.13h25.3c7.57,0,14.09-5.3,15.66-12.7l1.36-6.44h-22.23l4.04-19.14h41.37Z" />
                                        <line class="cls-2" x1="578.6" y1="399.67" x2="578.41"
                                            y2="400.59" />
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </div>
                    <!-- /Logo -->

                    <div class="card-body mt-2">
                        <h4 class="mb-4 fw-semibold">welcome 👋</h4>

                        <form method="POST" action="{{ url('login/post') }}">
                            @csrf
                            <div class="form-floating form-floating-outline mb-3">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="ایمیل خود را وارد کنید" autofocus />
                                <label for="email">آدرس ایمیل</label>
                            </div>
                            <div class="mb-3">
                                <div class="form-password-toggle">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input type="password" id="password" class="form-control" name="password"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="پسورد" />
                                            <label for="password">پسورد</label>
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
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">مرا بخاطر
                                            بسپار</span>
                                    </label>
                                </div>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <button class="btn btn-primary d-grid w-100" type="submit">ورود</button>
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
