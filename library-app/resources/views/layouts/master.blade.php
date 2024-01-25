<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Library|Manager</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme p-8">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
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
                        <span class="app-brand-text demo menu-text fw-bold ms-2">FA-Library</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z"
                                fill="currentColor" fill-opacity="0.6" />
                            <path
                                d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z"
                                fill="currentColor" fill-opacity="0.38" />
                        </svg>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item">
                        <a href="./" class="menu-link menu-toggle">
                            <div data-i18n="Home">Home</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="./books" class="menu-link menu-toggle">
                            <div data-i18n="Home">Edit Books</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="./staff" class="menu-link menu-toggle">
                            <div data-i18n="Home">Edit Staff</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="mdi mdi-menu mdi-24px"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
                                    <i class="mdi mdi-magnify mdi-24px scaleX-n1-rtl"></i>
                                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- Quick links  -->
                            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-1 me-xl-0">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                    aria-expanded="false">
                                    <i class="mdi mdi-view-grid-plus-outline mdi-24px"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end py-0">
                                    <div class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                            <a href="javascript:void(0)" class="dropdown-shortcuts-add text-muted"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Add shortcuts"><i
                                                    class="mdi mdi-view-grid-plus-outline mdi-24px"></i></a>
                                        </div>
                                    </div>
                                    <div class="dropdown-shortcuts-list scrollable-container">
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-calendar fs-4"></i>
                                                </span>
                                                <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                                <small class="text-muted mb-0">Appointments</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-file-document-outline fs-4"></i>
                                                </span>
                                                <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                                                <small class="text-muted mb-0">Manage Accounts</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-account-outline fs-4"></i>
                                                </span>
                                                <a href="app-user-list.html" class="stretched-link">User App</a>
                                                <small class="text-muted mb-0">Manage Users</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-shield-check-outline fs-4"></i>
                                                </span>
                                                <a href="app-access-roles.html" class="stretched-link">Role
                                                    Management</a>
                                                <small class="text-muted mb-0">Permission</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-chart-pie-outline fs-4"></i>
                                                </span>
                                                <a href="index.html" class="stretched-link">Dashboard</a>
                                                <small class="text-muted mb-0">User Profile</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-cog-outline fs-4"></i>
                                                </span>
                                                <a href="pages-account-settings-account.html"
                                                    class="stretched-link">Setting</a>
                                                <small class="text-muted mb-0">Account Settings</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-help-circle-outline fs-4"></i>
                                                </span>
                                                <a href="pages-help-center-landing.html" class="stretched-link">Help
                                                    Center</a>
                                                <small class="text-muted mb-0">FAQs & Articles</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-dock-window fs-4"></i>
                                                </span>
                                                <a href="modal-examples.html" class="stretched-link">Modals</a>
                                                <small class="text-muted mb-0">Useful Popups</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Quick links -->



                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../../assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-profile-user.html">
                                            <i class="mdi mdi-account-outline me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <i class="mdi mdi-cog-outline me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>

                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-help-center-landing.html">
                                            <i class="mdi mdi-lifebuoy me-2"></i>
                                            <span class="align-middle">Help</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-faq.html">
                                            <i class="mdi mdi-help-circle-outline me-2"></i>
                                            <span class="align-middle">FAQ</span>
                                        </a>
                                    </li>

                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                                            <i class="mdi mdi-logout me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>


                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                        <div
                            class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with <span class="text-danger">❤️</span>
                            </div>

                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
</body>

</html>
