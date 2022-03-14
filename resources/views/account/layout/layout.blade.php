<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head><base href="">
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8" />

    <link rel="shortcut icon" href="/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    @yield('css')
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            @include("account.layout.include.header")
            <!--begin::Container-->
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    @yield("content")
                </div>
                <!--end::Post-->
            </div>
            <!--end::Container-->
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted fw-bold me-1">2022©</span>
                        <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                        <li class="menu-item">
                            <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                        </li>
                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->
<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'500px', 'md': '350px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_user_toggle" data-kt-drawer-close="#kt_user_close">
    <div class="card ">
        <div class="card-body">
            <div class="card-header">
                <div class="fs-2tx text-center">Profil & Réglage</div>
                <div class="cursor-pointer d-flex align-items-center mb-7 bg-light rounded-3 p-5" onclick="window.location.href=''">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px symbol-circle me-5">
                        <span class="symbol-label bg-light-success" style="background-image: url('{{ \Creativeorange\Gravatar\Facades\Gravatar::get(auth()->user()->email) }}')"></span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Text-->
                    <div class="d-flex flex-column">
                        <a href="#" class="text-dark text-hover-primary fs-6 fw-bolder">{{ auth()->user()->civility->name }} {{ auth()->user()->civility->birthname }}</a>
                        <span class="text-muted fw-bold">Gérer mon profil</span>
                    </div>
                    <!--end::Text-->
                </div>
            </div>
            <div class="card-body">
                <div class="mb-10">
                    <h2 class="fw-bolder">Connexion & Sécurité</h2>
                    <div class="cursor-pointer d-flex flex-row justify-content-between align-items-center m-5" onclick="window.location.href=''">
                        <div class="text-hover-primary">Modifier mon mot de passe</div>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
                <div class="mb-10">
                    <h2 class="fw-bolder">Autres réglages</h2>
                    <div class="cursor-pointer d-flex flex-row justify-content-between align-items-center m-5" onclick="window.location.href=''">
                        <div class="text-hover-primary">Virement Instantané</div>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'500px', 'md': '400px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_contact_toggle" data-kt-drawer-close="#kt_contact_close">
    <div class="card ">
        <div class="card-body">
            <div class="card-header">
                <div class="fs-2tx text-center">Restons en contact</div>
                @if(\App\Models\User::find(auth()->user()->agent_id))
                <div class="cursor-pointer d-flex align-items-center mb-7 bg-light rounded-3 p-5" onclick="window.location.href=''">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px symbol-circle me-5">
                        <span class="symbol-label bg-light-success" style="background-image: url('{{ \Creativeorange\Gravatar\Facades\Gravatar::get(\App\Models\User::find(auth()->user()->agent_id)->email) }}')"></span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Text-->
                    <div class="d-flex flex-column">
                        <a href="#" class="text-dark text-hover-primary fs-6 fw-bolder">{{ \App\Models\User::find(auth()->user()->agent_id)->civility->name }} {{ \App\Models\User::find(auth()->user()->agent_id)->civility->birthname }}</a>
                        <span class="text-muted fw-bold">{{ auth()->user()->agence->nom_agence }}</span>
                    </div>
                    <!--end::Text-->
                </div>
                @else
                    <div class="cursor-pointer d-flex align-items-center mb-7 bg-light rounded-3 p-5" onclick="window.location.href=''">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px symbol-circle me-5">
                            <span class="symbol-label bg-light-success" style="background-image: url('{{ \Creativeorange\Gravatar\Facades\Gravatar::get('nodev@nodev.com') }}')"></span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="d-flex flex-column">
                            <a href="#" class="text-dark text-hover-primary fs-6 fw-bolder">Agent Web</a>
                            <span class="text-muted fw-bold">{{ auth()->user()->agence->nom_agence }}</span>
                        </div>
                        <!--end::Text-->
                    </div>
                @endif
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->
<!--end::Main-->
<!--begin::Engage drawers-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--end::Modals-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="/assets/plugins/global/plugins.bundle.js"></script>
<script src="/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
@yield('script')
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
