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
<head><base href="../../../">
    <title>Créer mon compte - {{ config("app.name") }}</title>
    <meta charset="utf-8" />

    <link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="bg-warning">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-up -->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(/assets/media/illustrations/sketchy-1/14.png">
        <!--begin::Content-->
        <div class="d-flex flex-column flex-column-fluid pb-lg-20 stepper stepper-pills" id="step_create_account">
            <div class="container-fluid">
                <div class="card shadow-lg mb-10" data-kt-sticky="true"
                     data-kt-sticky-name="docs-sticky-summary"
                     data-kt-sticky-offset="{default: true, xl: '200px'}"
                     data-kt-sticky-width="{lg: '250px', xl: '300px'}"
                     data-kt-sticky-left="0"
                     data-kt-sticky-top="auto"
                     data-kt-sticky-animation="true"
                     data-kt-sticky-zindex="95">
                    <div class="card-body">
                        <div class="stepper-nav flex-center flex-wrap mb-10">
                            <!--begin::Step 1-->
                            <div class="stepper-item mx-2 my-4 current" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <!--end::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Présentation
                                    </h3>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 1-->

                            <!--begin::Step 2-->
                            <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">2</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Vos coordonnées
                                    </h3>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 2-->

                            <!--begin::Step 3-->
                            <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">3</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Etat Civil
                                    </h3>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 3-->

                            <!--begin::Step 4-->
                            <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">4</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Situation Professionnel
                                    </h3>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 4-->

                            <!--begin::Step 4-->
                            <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">5</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Vos Revenues
                                    </h3>
                                </div>
                                <!--end::Label-->
                            </div>
                            <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">6</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Votre Patrimoine
                                    </h3>
                                </div>
                                <!--end::Label-->
                            </div>
                            <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">7</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Offre
                                    </h3>
                                </div>
                                <!--end::Label-->
                            </div>
                            <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">7</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Informations
                                    </h3>
                                </div>
                                <!--end::Label-->
                            </div>
                            <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">8</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Récapitulatif
                                    </h3>
                                </div>
                                <!--end::Label-->
                            </div>
                            <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">9</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Signature
                                    </h3>
                                </div>
                                <!--end::Label-->
                            </div>
                            <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">10</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Justificatifs
                                    </h3>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 4-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card shadow-lg">
                    <div class="card-body ">
                        <div class="current d-flex flex-center flex-column" data-kt-stepper-element="content">


                        </div>
                        <div class="d-flex flex-center flex-column" data-kt-stepper-element="content">


                        </div>
                        <div class="d-flex flex-center flex-column" data-kt-stepper-element="content">


                        </div>
                        <div class="d-flex flex-center flex-column" data-kt-stepper-element="content">

                        </div>
                        <div class="d-flex flex-center flex-column" data-kt-stepper-element="content">

                        </div>
                        <div class="d-flex flex-center flex-column" data-kt-stepper-element="content">
                            <div class="mb-20">
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                        Votre patrimoine
                                    </span>
                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </div>

                            <x-form.input
                                name="patrimoine_immobilier"
                                type="text"
                                label="Patrimoine Immobilier"
                                class="w-500px"
                                required="true" />
                            <x-form.input
                                name="patrimoine_financier"
                                type="text"
                                label="Patrimoine Financier"
                                class="w-500px"
                                required="true" />
                        </div>
                        <div class="d-flex flex-center flex-column" data-kt-stepper-element="content">

                        </div>
                    </div>
                    <div class="card-footer d-flex flex-center">
                        <!--begin::Actions-->
                        <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="me-2">
                                <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                                    Retour
                                </button>
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Wrapper-->
                            <div>
                                <button type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">
                                        Valider
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>

                                <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                    Suivant
                                </button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </div>
                </div>
            </div>
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="d-flex flex-center flex-column-auto p-10">
            <!--begin::Links-->
            <div class="d-flex align-items-center fw-bold fs-6">
                <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
                <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Authentication - Sign-up-->
</div>
<!--end::Root-->
<!--end::Main-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="/assets/plugins/global/plugins.bundle.js"></script>
<script src="/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
<script type="text/javascript">
    let elements = {
        step: document.querySelector('#step_create_account'),
        birthdate: document.querySelector('#birthdate'),
    }
    let stepper = new KTStepper(elements.step);

    // Handle next step
    stepper.on("kt.stepper.next", function (stepper) {
        stepper.goNext(); // go next step
    });

    // Handle previous step
    stepper.on("kt.stepper.previous", function (stepper) {
        stepper.goPrevious(); // go previous step
    });

    elements.birthdate.flatpickr({
        "locale": "fr"
    });
</script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
