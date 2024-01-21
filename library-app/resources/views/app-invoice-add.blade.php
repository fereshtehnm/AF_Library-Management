<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Add - Invoice | Materialize - Material Design HTML Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="../../assets/vendor/css/pages/app-invoice.css" />
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

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <span style="color: var(--bs-primary)">
                  <svg width="268" height="150" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                      fill="currentColor" />
                    <path
                      d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                      fill="url(#paint0_linear_2989_100980)"
                      fill-opacity="0.4" />
                    <path
                      d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                      fill="currentColor" />
                    <path
                      d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                      fill="currentColor" />
                    <path
                      d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                      fill="url(#paint1_linear_2989_100980)"
                      fill-opacity="0.4" />
                    <path
                      d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                      fill="currentColor" />
                    <defs>
                      <linearGradient
                        id="paint0_linear_2989_100980"
                        x1="5.36642"
                        y1="0.849138"
                        x2="10.532"
                        y2="24.104"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-opacity="1" />
                        <stop offset="1" stop-opacity="0" />
                      </linearGradient>
                      <linearGradient
                        id="paint1_linear_2989_100980"
                        x1="5.19475"
                        y1="0.849139"
                        x2="10.3357"
                        y2="24.1155"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-opacity="1" />
                        <stop offset="1" stop-opacity="0" />
                      </linearGradient>
                    </defs>
                  </svg>
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">Materialize</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z"
                  fill="currentColor"
                  fill-opacity="0.6" />
                <path
                  d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z"
                  fill="currentColor"
                  fill-opacity="0.38" />
              </svg>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                <div data-i18n="Dashboards">Dashboards</div>
                <div class="badge bg-primary rounded-pill ms-auto">3</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="dashboards-ecommerce.html" class="menu-link">
                    <div data-i18n="eCommerce">eCommerce</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="dashboards-crm.html" class="menu-link">
                    <div data-i18n="CRM">CRM</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="index.html" class="menu-link">
                    <div data-i18n="Analytics">Analytics</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-window-maximize"></i>
                <div data-i18n="Layouts">Layouts</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="layouts-collapsed-menu.html" class="menu-link">
                    <div data-i18n="Collapsed menu">Collapsed menu</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-content-navbar.html" class="menu-link">
                    <div data-i18n="Content navbar">Content navbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-content-navbar-with-sidebar.html" class="menu-link">
                    <div data-i18n="Content nav + Sidebar">Content nav + Sidebar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../horizontal-menu-template" class="menu-link" target="_blank">
                    <div data-i18n="Horizontal">Horizontal</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-without-menu.html" class="menu-link">
                    <div data-i18n="Without menu">Without menu</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-without-navbar.html" class="menu-link">
                    <div data-i18n="Without navbar">Without navbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-fluid.html" class="menu-link">
                    <div data-i18n="Fluid">Fluid</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-container.html" class="menu-link">
                    <div data-i18n="Container">Container</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-blank.html" class="menu-link">
                    <div data-i18n="Blank">Blank</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Apps & Pages -->
            <li class="menu-header fw-light mt-4">
              <span class="menu-header-text">Apps &amp; Pages</span>
            </li>
            <li class="menu-item">
              <a href="app-email.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-email-outline"></i>
                <div data-i18n="Email">Email</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-chat.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-message-outline"></i>
                <div data-i18n="Chat">Chat</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-calendar.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-calendar-blank-outline"></i>
                <div data-i18n="Calendar">Calendar</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-kanban.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-view-grid-outline"></i>
                <div data-i18n="Kanban">Kanban</div>
              </a>
            </li>
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
                <div data-i18n="Invoice">Invoice</div>
                <div class="badge bg-danger rounded-pill ms-auto">4</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-invoice-list.html" class="menu-link">
                    <div data-i18n="List">List</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-invoice-preview.html" class="menu-link">
                    <div data-i18n="Preview">Preview</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-invoice-edit.html" class="menu-link">
                    <div data-i18n="Edit">Edit</div>
                  </a>
                </li>
                <li class="menu-item active">
                  <a href="app-invoice-add.html" class="menu-link">
                    <div data-i18n="Add">Add</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                <div data-i18n="Users">Users</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-user-list.html" class="menu-link">
                    <div data-i18n="List">List</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="View">View</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="app-user-view-account.html" class="menu-link">
                        <div data-i18n="Account">Account</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-security.html" class="menu-link">
                        <div data-i18n="Security">Security</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-billing.html" class="menu-link">
                        <div data-i18n="Billing & Plans">Billing & Plans</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">Notifications</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-connections.html" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-shield-outline"></i>
                <div data-i18n="Roles & Permissions">Roles & Permissions</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-access-roles.html" class="menu-link">
                    <div data-i18n="Roles">Roles</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-access-permission.html" class="menu-link">
                    <div data-i18n="Permission">Permission</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-file-outline"></i>
                <div data-i18n="Pages">Pages</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="User Profile">User Profile</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-profile-user.html" class="menu-link">
                        <div data-i18n="Profile">Profile</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-teams.html" class="menu-link">
                        <div data-i18n="Teams">Teams</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-projects.html" class="menu-link">
                        <div data-i18n="Projects">Projects</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-connections.html" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Account Settings">Account Settings</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-account-settings-account.html" class="menu-link">
                        <div data-i18n="Account">Account</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-security.html" class="menu-link">
                        <div data-i18n="Security">Security</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-billing.html" class="menu-link">
                        <div data-i18n="Billing & Plans">Billing & Plans</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">Notifications</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-connections.html" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="pages-faq.html" class="menu-link">
                    <div data-i18n="FAQ">FAQ</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Help Center">Help Center</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-help-center-landing.html" class="menu-link">
                        <div data-i18n="Landing">Landing</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-help-center-categories.html" class="menu-link">
                        <div data-i18n="Categories">Categories</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-help-center-article.html" class="menu-link">
                        <div data-i18n="Article">Article</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="pages-pricing.html" class="menu-link">
                    <div data-i18n="Pricing">Pricing</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Misc">Misc</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-misc-error.html" class="menu-link" target="_blank">
                        <div data-i18n="Error">Error</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                        <div data-i18n="Under Maintenance">Under Maintenance</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                        <div data-i18n="Coming Soon">Coming Soon</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                        <div data-i18n="Not Authorized">Not Authorized</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-server-error.html" class="menu-link" target="_blank">
                        <div data-i18n="Server Error">Server Error</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-lock-outline"></i>
                <div data-i18n="Authentications">Authentications</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Login">Login</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-login-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Register">Register</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-register-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-register-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
                        <div data-i18n="Multi-steps">Multi-steps</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Verify Email">Verify Email</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Reset Password">Reset Password</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Forgot Password">Forgot Password</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Two Steps">Two Steps</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-transit-connection-horizontal"></i>
                <div data-i18n="Wizard Examples">Wizard Examples</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="wizard-ex-checkout.html" class="menu-link">
                    <div data-i18n="Checkout">Checkout</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="wizard-ex-property-listing.html" class="menu-link">
                    <div data-i18n="Property Listing">Property Listing</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="wizard-ex-create-deal.html" class="menu-link">
                    <div data-i18n="Create Deal">Create Deal</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="modal-examples.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-vector-arrange-below"></i>
                <div data-i18n="Modal Examples">Modal Examples</div>
              </a>
            </li>

            <!-- Components -->
            <li class="menu-header fw-light mt-4">
              <span class="menu-header-text">Components</span>
            </li>
            <!-- Cards -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                <div data-i18n="Cards">Cards</div>
                <div class="badge bg-primary rounded-pill ms-auto">6</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="cards-basic.html" class="menu-link">
                    <div data-i18n="Basic">Basic</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-advance.html" class="menu-link">
                    <div data-i18n="Advance">Advance</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-statistics.html" class="menu-link">
                    <div data-i18n="Statistics">Statistics</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-analytics.html" class="menu-link">
                    <div data-i18n="Analytics">Analytics</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-gamifications.html" class="menu-link">
                    <div data-i18n="Gamifications">Gamifications</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-actions.html" class="menu-link">
                    <div data-i18n="Actions">Actions</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- User interface -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-archive-outline"></i>
                <div data-i18n="User interface">User interface</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="ui-accordion.html" class="menu-link">
                    <div data-i18n="Accordion">Accordion</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-alerts.html" class="menu-link">
                    <div data-i18n="Alerts">Alerts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-badges.html" class="menu-link">
                    <div data-i18n="Badges">Badges</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-buttons.html" class="menu-link">
                    <div data-i18n="Buttons">Buttons</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-carousel.html" class="menu-link">
                    <div data-i18n="Carousel">Carousel</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-collapse.html" class="menu-link">
                    <div data-i18n="Collapse">Collapse</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-dropdowns.html" class="menu-link">
                    <div data-i18n="Dropdowns">Dropdowns</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-footer.html" class="menu-link">
                    <div data-i18n="Footer">Footer</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-list-groups.html" class="menu-link">
                    <div data-i18n="List Groups">List groups</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-modals.html" class="menu-link">
                    <div data-i18n="Modals">Modals</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-navbar.html" class="menu-link">
                    <div data-i18n="Navbar">Navbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-offcanvas.html" class="menu-link">
                    <div data-i18n="Offcanvas">Offcanvas</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                    <div data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-progress.html" class="menu-link">
                    <div data-i18n="Progress">Progress</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-spinners.html" class="menu-link">
                    <div data-i18n="Spinners">Spinners</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-tabs-pills.html" class="menu-link">
                    <div data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-toasts.html" class="menu-link">
                    <div data-i18n="Toasts">Toasts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-tooltips-popovers.html" class="menu-link">
                    <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-typography.html" class="menu-link">
                    <div data-i18n="Typography">Typography</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Extended components -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-star-outline"></i>
                <div data-i18n="Extended UI">Extended UI</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="extended-ui-avatar.html" class="menu-link">
                    <div data-i18n="Avatar">Avatar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-blockui.html" class="menu-link">
                    <div data-i18n="BlockUI">BlockUI</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-drag-and-drop.html" class="menu-link">
                    <div data-i18n="Drag & Drop">Drag &amp; Drop</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-media-player.html" class="menu-link">
                    <div data-i18n="Media Player">Media Player</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-star-ratings.html" class="menu-link">
                    <div data-i18n="Star Ratings">Star Ratings</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-sweetalert2.html" class="menu-link">
                    <div data-i18n="SweetAlert2">SweetAlert2</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-text-divider.html" class="menu-link">
                    <div data-i18n="Text Divider">Text Divider</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Timeline">Timeline</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="extended-ui-timeline-basic.html" class="menu-link">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                        <div data-i18n="Fullscreen">Fullscreen</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-tour.html" class="menu-link">
                    <div data-i18n="Tour">Tour</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-treeview.html" class="menu-link">
                    <div data-i18n="Treeview">Treeview</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-misc.html" class="menu-link">
                    <div data-i18n="Miscellaneous">Miscellaneous</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Icons -->
            <li class="menu-item">
              <a href="icons-mdi.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div data-i18n="Icons">Icons</div>
              </a>
            </li>

            <!-- Forms & Tables -->
            <li class="menu-header fw-light mt-4">
              <span class="menu-header-text">Forms &amp; Tables</span>
            </li>
            <!-- Forms -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-form-select"></i>
                <div data-i18n="Form Elements">Form Elements</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="forms-basic-inputs.html" class="menu-link">
                    <div data-i18n="Basic Inputs">Basic Inputs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-input-groups.html" class="menu-link">
                    <div data-i18n="Input groups">Input groups</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-custom-options.html" class="menu-link">
                    <div data-i18n="Custom Options">Custom Options</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-editors.html" class="menu-link">
                    <div data-i18n="Editors">Editors</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-file-upload.html" class="menu-link">
                    <div data-i18n="File Upload">File Upload</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-pickers.html" class="menu-link">
                    <div data-i18n="Pickers">Pickers</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-selects.html" class="menu-link">
                    <div data-i18n="Select & Tags">Select &amp; Tags</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-sliders.html" class="menu-link">
                    <div data-i18n="Sliders">Sliders</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-switches.html" class="menu-link">
                    <div data-i18n="Switches">Switches</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-extras.html" class="menu-link">
                    <div data-i18n="Extras">Extras</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
                <div data-i18n="Form Layouts">Form Layouts</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-layouts-vertical.html" class="menu-link">
                    <div data-i18n="Vertical Form">Vertical Form</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-horizontal.html" class="menu-link">
                    <div data-i18n="Horizontal Form">Horizontal Form</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-sticky.html" class="menu-link">
                    <div data-i18n="Sticky Actions">Sticky Actions</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-dots-horizontal"></i>
                <div data-i18n="Form Wizard">Form Wizard</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-wizard-numbered.html" class="menu-link">
                    <div data-i18n="Numbered">Numbered</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-wizard-icons.html" class="menu-link">
                    <div data-i18n="Icons">Icons</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="form-validation.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-checkbox-marked-circle-outline"></i>
                <div data-i18n="Form Validation">Form Validation</div>
              </a>
            </li>
            <!-- Tables -->
            <li class="menu-item">
              <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-table"></i>
                <div data-i18n="Tables">Tables</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-grid"></i>
                <div data-i18n="Datatables">Datatables</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="tables-datatables-basic.html" class="menu-link">
                    <div data-i18n="Basic">Basic</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="tables-datatables-advanced.html" class="menu-link">
                    <div data-i18n="Advanced">Advanced</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="tables-datatables-extensions.html" class="menu-link">
                    <div data-i18n="Extensions">Extensions</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Charts & Maps -->
            <li class="menu-header fw-light mt-4">
              <span class="menu-header-text">Charts &amp; Maps</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-chart-pie-outline"></i>
                <div data-i18n="Charts">Charts</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="charts-apex.html" class="menu-link">
                    <div data-i18n="Apex Charts">Apex Charts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="charts-chartjs.html" class="menu-link">
                    <div data-i18n="ChartJS">ChartJS</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="maps-leaflet.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-map-outline"></i>
                <div data-i18n="Leaflet Maps">Leaflet Maps</div>
              </a>
            </li>

            <!-- Misc -->
            <li class="menu-header fw-light mt-4">
              <span class="menu-header-text">Misc</span>
            </li>
            <li class="menu-item">
              <a href="https://pixinvent.ticksy.com/" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-lifebuoy"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
                <div data-i18n="Documentation">Documentation</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
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
                <!-- Language -->
                <li class="nav-item dropdown-language dropdown me-1 me-xl-0">
                  <a
                    class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <i class="mdi mdi-translate mdi-24px"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                        <span class="align-middle">English</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                        <span class="align-middle">French</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                        <span class="align-middle">German</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                        <span class="align-middle">Portuguese</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item me-1 me-xl-0">
                  <a
                    class="nav-link btn btn-text-secondary rounded-pill btn-icon style-switcher-toggle hide-arrow"
                    href="javascript:void(0);">
                    <i class="mdi mdi-24px"></i>
                  </a>
                </li>
                <!--/ Style Switcher -->

                <!-- Quick links  -->
                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-1 me-xl-0">
                  <a
                    class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="mdi mdi-view-grid-plus-outline mdi-24px"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end py-0">
                    <div class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                        <a
                          href="javascript:void(0)"
                          class="dropdown-shortcuts-add text-muted"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Add shortcuts"
                          ><i class="mdi mdi-view-grid-plus-outline mdi-24px"></i
                        ></a>
                      </div>
                    </div>
                    <div class="dropdown-shortcuts-list scrollable-container">
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-calendar fs-4"></i>
                          </span>
                          <a href="app-calendar.html" class="stretched-link">Calendar</a>
                          <small class="text-muted mb-0">Appointments</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-file-document-outline fs-4"></i>
                          </span>
                          <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                          <small class="text-muted mb-0">Manage Accounts</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-account-outline fs-4"></i>
                          </span>
                          <a href="app-user-list.html" class="stretched-link">User App</a>
                          <small class="text-muted mb-0">Manage Users</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-shield-check-outline fs-4"></i>
                          </span>
                          <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                          <small class="text-muted mb-0">Permission</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-chart-pie-outline fs-4"></i>
                          </span>
                          <a href="index.html" class="stretched-link">Dashboard</a>
                          <small class="text-muted mb-0">User Profile</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-cog-outline fs-4"></i>
                          </span>
                          <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                          <small class="text-muted mb-0">Account Settings</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-help-circle-outline fs-4"></i>
                          </span>
                          <a href="pages-help-center-landing.html" class="stretched-link">Help Center</a>
                          <small class="text-muted mb-0">FAQs & Articles</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
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

                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
                  <a
                    class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="mdi mdi-bell-outline mdi-24px"></i>
                    <span
                      class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end py-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h6 class="mb-0 me-auto">Notification</h6>
                        <span class="badge rounded-pill bg-label-primary">8 New</span>
                      </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">Congratulation Lettie 🎉</h6>
                              <small class="text-truncate text-body">Won the monthly best seller gold badge</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">1h ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">Charles Franklin</h6>
                              <small class="text-truncate text-body">Accepted your connection</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">12hr ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <img src="../../assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">New Message ✉️</h6>
                              <small class="text-truncate text-body">You have new message from Natalie</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">1h ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="mdi mdi-cart-outline"></i
                                ></span>
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">Whoo! You have new order 🛒</h6>
                              <small class="text-truncate text-body">ACME Inc. made new order $1,154</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">1 day ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <img src="../../assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">Application has been approved 🚀</h6>
                              <small class="text-truncate text-body"
                                >Your ABC project application has been approved.</small
                              >
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">2 days ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="mdi mdi-chart-pie-outline"></i
                                ></span>
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">Monthly report is generated</h6>
                              <small class="text-truncate text-body">July monthly financial report is generated </small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">3 days ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <img src="../../assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">Send connection request</h6>
                              <small class="text-truncate text-body">Peter sent you connection request</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">4 days ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <img src="../../assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">New message from Jane</h6>
                              <small class="text-truncate text-body">Your have new message from Jane</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">5 days ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <span class="avatar-initial rounded-circle bg-label-warning"
                                  ><i class="mdi mdi-alert-circle-outline"></i
                                ></span>
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1">CPU is running high</h6>
                              <small class="text-truncate text-body"
                                >CPU Utilization Percent is currently at 88.63%,</small
                              >
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">5 days ago</small>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-menu-footer border-top p-2">
                      <a href="javascript:void(0);" class="btn btn-primary d-flex justify-content-center">
                        View all notifications
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
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
                      <a class="dropdown-item" href="pages-account-settings-billing.html">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 mdi mdi-credit-card-outline me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
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
                      <a class="dropdown-item" href="pages-pricing.html">
                        <i class="mdi mdi-currency-usd me-2"></i>
                        <span class="align-middle">Pricing</span>
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

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper d-none">
              <input
                type="text"
                class="form-control search-input container-xxl border-0"
                placeholder="Search..."
                aria-label="Search..." />
              <i class="mdi mdi-close search-toggler cursor-pointer"></i>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row invoice-add">
                <!-- Invoice Add-->
                <div class="col-lg-9 col-12 mb-lg-0 mb-4">
                  <div class="card invoice-preview-card">
                    <div class="card-body">
                      <div class="row mx-0">
                        <div class="col-md-7 mb-md-0 mb-4 ps-0">
                          <div class="d-flex svg-illustration align-items-center gap-2 mb-4">
                            <span class="app-brand-logo demo">
                              <span style="color: var(--bs-primary)">
                                <svg
                                  width="268"
                                  height="150"
                                  viewBox="0 0 38 20"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                                    fill="currentColor" />
                                  <path
                                    d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                                    fill="url(#paint0_linear_2989_100980)"
                                    fill-opacity="0.4" />
                                  <path
                                    d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                                    fill="currentColor" />
                                  <path
                                    d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                    fill="currentColor" />
                                  <path
                                    d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                    fill="url(#paint1_linear_2989_100980)"
                                    fill-opacity="0.4" />
                                  <path
                                    d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                                    fill="currentColor" />
                                  <defs>
                                    <linearGradient
                                      id="paint0_linear_2989_100980"
                                      x1="5.36642"
                                      y1="0.849138"
                                      x2="10.532"
                                      y2="24.104"
                                      gradientUnits="userSpaceOnUse">
                                      <stop offset="0" stop-opacity="1" />
                                      <stop offset="1" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient
                                      id="paint1_linear_2989_100980"
                                      x1="5.19475"
                                      y1="0.849139"
                                      x2="10.3357"
                                      y2="24.1155"
                                      gradientUnits="userSpaceOnUse">
                                      <stop offset="0" stop-opacity="1" />
                                      <stop offset="1" stop-opacity="0" />
                                    </linearGradient>
                                  </defs>
                                </svg>
                              </span>
                            </span>
                            <span class="h4 mb-0 app-brand-text fw-bold">Materialize</span>
                          </div>
                          <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
                          <p class="mb-1">San Diego County, CA 91905, USA</p>
                          <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                        </div>
                        <div class="col-md-5 pe-0 ps-0 ps-md-2">
                          <dl class="row mb-2 g-2">
                            <dt class="col-sm-6 mb-2 d-md-flex align-items-center justify-content-end">
                              <span class="h4 text-capitalize mb-0 text-nowrap">Invoice</span>
                            </dt>
                            <dd class="col-sm-6">
                              <div class="input-group input-group-merge disabled">
                                <span class="input-group-text">#</span>
                                <input
                                  type="text"
                                  class="form-control"
                                  disabled
                                  placeholder="3905"
                                  value="3905"
                                  id="invoiceId" />
                              </div>
                            </dd>
                            <dt class="col-sm-6 mb-2 d-md-flex align-items-center justify-content-end">
                              <span class="fw-normal">Date:</span>
                            </dt>
                            <dd class="col-sm-6">
                              <input type="text" class="form-control date-picker" placeholder="YYYY-MM-DD" />
                            </dd>
                            <dt class="col-sm-6 mb-2 d-md-flex align-items-center justify-content-end">
                              <span class="fw-normal">Due Date:</span>
                            </dt>
                            <dd class="col-sm-6">
                              <input type="text" class="form-control date-picker" placeholder="YYYY-MM-DD" />
                            </dd>
                          </dl>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <div class="d-flex justify-content-between flex-wrap">
                        <div class="my-3">
                          <h6 class="pb-2">Invoice To:</h6>
                          <p class="mb-1">Thomas shelby</p>
                          <p class="mb-1">Shelby Company Limited</p>
                          <p class="mb-1">Small Heath, B10 0HF, UK</p>
                          <p class="mb-1">718-986-6062</p>
                          <p class="mb-0">peakyFBlinders@gmail.com</p>
                        </div>
                        <div class="my-3">
                          <h6 class="pb-2">Bill To:</h6>
                          <table>
                            <tbody>
                              <tr>
                                <td class="pe-3 fw-medium">Total Due:</td>
                                <td>$12,110.55</td>
                              </tr>
                              <tr>
                                <td class="pe-3 fw-medium">Bank name:</td>
                                <td>American Bank</td>
                              </tr>
                              <tr>
                                <td class="pe-3 fw-medium">Country:</td>
                                <td>United States</td>
                              </tr>
                              <tr>
                                <td class="pe-3 fw-medium">IBAN:</td>
                                <td>ETD95476213874685</td>
                              </tr>
                              <tr>
                                <td class="pe-3 fw-medium">SWIFT code:</td>
                                <td>BR91905</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form class="source-item pt-1">
                        <div class="mb-3" data-repeater-list="group-a">
                          <div class="repeater-wrapper pt-0 pt-md-4" data-repeater-item>
                            <div class="d-flex border rounded position-relative pe-0">
                              <div class="row w-100 p-3">
                                <div class="col-md-6 col-12 mb-md-0 mb-3">
                                  <p class="mb-2 repeater-title">Item</p>
                                  <select class="form-select item-details mb-3">
                                    <option selected disabled>Select Item</option>
                                    <option value="App Design">App Design</option>
                                    <option value="App Customization">App Customization</option>
                                    <option value="ABC Template">ABC Template</option>
                                    <option value="App Development">App Development</option>
                                  </select>
                                  <textarea class="form-control" rows="2" placeholder="Item Information"></textarea>
                                </div>
                                <div class="col-md-3 col-12 mb-md-0 mb-3">
                                  <p class="mb-2 repeater-title">Cost</p>
                                  <input
                                    type="number"
                                    class="form-control invoice-item-price mb-2"
                                    placeholder="00"
                                    min="12" />
                                  <div class="d-flex flex-column gap-2">
                                    <span>Discount:</span>
                                    <span>
                                      <span class="discount me-2">0%</span>
                                      <span
                                        class="tax-1 me-2"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        title="Tax 1"
                                        >0%</span
                                      >
                                      <span class="tax-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2"
                                        >0%</span
                                      >
                                    </span>
                                  </div>
                                </div>
                                <div class="col-md-2 col-12 mb-md-0 mb-3">
                                  <p class="mb-2 repeater-title">Qty</p>
                                  <input
                                    type="number"
                                    class="form-control invoice-item-qty"
                                    placeholder="1"
                                    min="1"
                                    max="50" />
                                </div>
                                <div class="col-md-1 col-12 pe-0">
                                  <p class="mb-2 repeater-title">Price</p>
                                  <p class="mb-0">$24.00</p>
                                </div>
                              </div>
                              <div
                                class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                                <i class="mdi mdi-close cursor-pointer" data-repeater-delete></i>
                                <div class="dropdown">
                                  <i
                                    class="mdi mdi-cog-outline cursor-pointer more-options-dropdown"
                                    role="button"
                                    id="dropdownMenuButton"
                                    data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside"
                                    aria-expanded="false">
                                  </i>
                                  <div
                                    class="dropdown-menu dropdown-menu-end w-px-300 p-3"
                                    aria-labelledby="dropdownMenuButton">
                                    <div class="row g-3">
                                      <div class="col-12">
                                        <label for="discountInput" class="form-label">Discount(%)</label>
                                        <input
                                          type="number"
                                          class="form-control"
                                          id="discountInput"
                                          min="0"
                                          max="100" />
                                      </div>
                                      <div class="col-md-6">
                                        <label for="taxInput1" class="form-label">Tax 1</label>
                                        <select name="tax-1-input" id="taxInput1" class="form-select tax-select">
                                          <option value="0%" selected>0%</option>
                                          <option value="1%">1%</option>
                                          <option value="10%">10%</option>
                                          <option value="18%">18%</option>
                                          <option value="40%">40%</option>
                                        </select>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="taxInput2" class="form-label">Tax 2</label>
                                        <select name="tax-2-input" id="taxInput2" class="form-select tax-select">
                                          <option value="0%" selected>0%</option>
                                          <option value="1%">1%</option>
                                          <option value="10%">10%</option>
                                          <option value="18%">18%</option>
                                          <option value="40%">40%</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="dropdown-divider my-3"></div>
                                    <button type="button" class="btn btn-label-primary btn-apply-changes">Apply</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <button type="button" class="btn btn-primary" data-repeater-create>
                              <i class="mdi mdi-plus me-1"></i> Add Item
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <hr class="my-0" />
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6 mb-md-0 mb-3">
                          <div class="form-floating form-floating-outline mb-4">
                            <input
                              type="text"
                              class="form-control"
                              id="salesperson"
                              placeholder="Edward Crowley"
                              value="Edward Crowley" />
                            <label for="salesperson">Salesperson</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-4">
                            <input
                              type="text"
                              class="form-control"
                              id="invoiceMsg"
                              placeholder="Thanks for your business"
                              value="Thanks for your business" />
                            <label for="invoiceMsg">Customer Notes</label>
                          </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-md-end">
                          <div class="invoice-calculations">
                            <div class="d-flex justify-content-between mb-2">
                              <span class="w-px-100">Subtotal:</span>
                              <span class="fw-semibold">$00.00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                              <span class="w-px-100">Discount:</span>
                              <span class="fw-semibold">$00.00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                              <span class="w-px-100">Tax:</span>
                              <span class="fw-semibold">$00.00</span>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                              <span class="w-px-100">Total:</span>
                              <span class="fw-semibold">$00.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                          <div class="mb-3">
                            <label for="note" class="form-label fw-bold">Note:</label>
                            <textarea class="form-control" rows="2" id="note" placeholder="Invoice note"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Invoice Add-->

                <!-- Invoice Actions -->
                <div class="col-lg-3 col-12 invoice-actions">
                  <div class="card mb-4">
                    <div class="card-body">
                      <button
                        class="btn btn-primary d-grid w-100 mb-3"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"
                          ><i class="mdi mdi-send-outline scaleX-n1-rtl me-2"></i>Send Invoice</span
                        >
                      </button>
                      <a href="./app-invoice-preview.html" class="btn btn-outline-secondary d-grid w-100 mb-3"
                        >Preview</a
                      >
                      <button type="button" class="btn btn-outline-secondary d-grid w-100">Save</button>
                    </div>
                  </div>
                  <div>
                    <div class="form-floating form-floating-outline mb-4">
                      <select class="form-select bg-body mb-4" id="select-payment-add">
                        <option value="Bank Account">Bank Account</option>
                        <option value="Paypal">Paypal</option>
                        <option value="Card">Credit/Debit Card</option>
                        <option value="UPI Transfer">UPI Transfer</option>
                      </select>
                      <label for="select-payment-add" class="bg-body">Accept payments via</label>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                      <label for="payment-terms" class="mb-0">Payment Terms</label>
                      <label class="switch switch-primary me-0">
                        <input type="checkbox" class="switch-input" id="payment-terms" checked />
                        <span class="switch-toggle-slider">
                          <span class="switch-on"></span>
                          <span class="switch-off"></span>
                        </span>
                        <span class="switch-label"></span>
                      </label>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                      <label for="client-notes" class="mb-0">Client Notes</label>
                      <label class="switch switch-primary me-0">
                        <input type="checkbox" class="switch-input" id="client-notes" />
                        <span class="switch-toggle-slider">
                          <span class="switch-on"></span>
                          <span class="switch-off"></span>
                        </span>
                        <span class="switch-label"></span>
                      </label>
                    </div>
                    <div class="d-flex justify-content-between">
                      <label for="payment-stub" class="mb-0">Payment Stub</label>
                      <label class="switch switch-primary me-0">
                        <input type="checkbox" class="switch-input" id="payment-stub" />
                        <span class="switch-toggle-slider">
                          <span class="switch-on"></span>
                          <span class="switch-off"></span>
                        </span>
                        <span class="switch-label"></span>
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /Invoice Actions -->
              </div>

              <!-- Offcanvas -->
              <!-- Send Invoice Sidebar -->
              <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
                <div class="offcanvas-header mb-3">
                  <h5 class="offcanvas-title">Send Invoice</h5>
                  <button
                    type="button"
                    class="btn-close text-reset"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
                </div>
                <div class="offcanvas-body flex-grow-1">
                  <form>
                    <div class="form-floating form-floating-outline mb-4">
                      <input
                        type="text"
                        class="form-control"
                        id="invoice-from"
                        value="shelbyComapny@email.com"
                        placeholder="company@email.com" />
                      <label for="invoice-from">From</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                      <input
                        type="text"
                        class="form-control"
                        id="invoice-to"
                        value="qConsolidated@email.com"
                        placeholder="company@email.com" />
                      <label for="invoice-to">To</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                      <input
                        type="text"
                        class="form-control"
                        id="invoice-subject"
                        value="Invoice of purchased Admin Templates"
                        placeholder="Invoice regarding goods" />
                      <label for="invoice-subject">Subject</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                      <textarea class="form-control" name="invoice-message" id="invoice-message" style="height: 190px">
Dear Queen Consolidated,
          Thank you for your business, always a pleasure to work with you!
          We have generated a new invoice in the amount of $95.59
          We would appreciate payment of this invoice by 05/11/2021</textarea
                      >
                      <label for="invoice-message">Message</label>
                    </div>
                    <div class="mb-4">
                      <span class="badge bg-label-primary">
                        <i class="mdi mdi-link-variant mdi-14px me-1"></i>
                        <span class="align-middle">Invoice Attached</span>
                      </span>
                    </div>
                    <div class="mb-3 d-flex flex-wrap">
                      <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
                      <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /Send Invoice Sidebar -->

              <!-- /Offcanvas -->
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
                    , made with <span class="text-danger">❤️</span> by
                    <a href="https://pixinvent.com" target="_blank" class="footer-link fw-medium">Pixinvent</a>
                  </div>
                  <div>
                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
                      >License</a
                    >
                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4"
                      >More Themes</a
                    >

                    <a
                      href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block"
                      >Support</a
                    >
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
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="../../assets/vendor/libs/jquery-repeater/jquery-repeater.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/offcanvas-send-invoice.js"></script>
    <script src="../../assets/js/app-invoice-add.js"></script>
  </body>
</html>
