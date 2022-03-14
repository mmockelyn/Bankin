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
        <!--begin::Stepper-->
        <div class="stepper stepper-pills" id="kt_stepper_example_basic">
            <div class="card shadow-lg mb-10" id="register_header">
                <div class="card-body">
                    <!--begin::Nav-->
                    <div class="stepper-nav flex-center flex-wrap mb-10">
                        <div class="stepper-item mx-2 my-4 current" data-kt-stepper-action="step" data-kt-stepper-element="nav" >
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
                        <div class="stepper-item mx-2 my-4" data-kt-stepper-action="step" data-kt-stepper-element="nav">
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
                        <div class="stepper-item mx-2 my-4" data-kt-stepper-action="step" data-kt-stepper-element="nav">
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
                        <div class="stepper-item mx-2 my-4" data-kt-stepper-action="step" data-kt-stepper-element="nav">
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
                        <div class="stepper-item mx-2 my-4" data-kt-stepper-action="step" data-kt-stepper-element="nav">
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
                        <div class="stepper-item mx-2 my-4" data-kt-stepper-action="step" data-kt-stepper-element="nav">
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
                        <div class="stepper-item mx-2 my-4" data-kt-stepper-action="step" data-kt-stepper-element="nav">
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
                        <div class="stepper-item mx-2 my-4" data-kt-stepper-action="step" data-kt-stepper-element="nav">
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
                                    Informations
                                </h3>
                            </div>
                            <!--end::Label-->
                        </div>
                        <div class="stepper-item mx-2 my-4" data-kt-stepper-action="step" data-kt-stepper-element="nav">
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
                                    Récapitulatif
                                </h3>
                            </div>
                            <!--end::Label-->
                        </div>
                        <div class="stepper-item mx-2 my-4" data-kt-stepper-action="step" data-kt-stepper-element="nav">
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
                                    Signature
                                </h3>
                            </div>
                            <!--end::Label-->
                        </div>
                        <div class="stepper-item mx-2 my-4" data-kt-stepper-action="step" data-kt-stepper-element="nav">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->

                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">11</span>
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
                    </div>
                    <!--end::Nav-->
                </div>
            </div>

            <!--begin::Form-->
            <form class="form w-lg-1000px mx-auto card" action="{{ route('register') }}" novalidate="novalidate" id="kt_stepper_example_basic_form" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="register_content" class="card-body">
                    <!--begin::Group-->
                    <div class="scroll mb-5">
                        <!--begin::Step 1-->
                        <div class="flex-column current" data-kt-stepper-element="content">
                            <div class="mb-20">
                            <span class="d-inline-block position-relative ms-2">
                                <!--begin::Label-->
                                <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                    Votre civilité
                                </span>
                                <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                            </span>
                            </div>
                            <!--begin::Radio group-->
                            <div class="btn-group w-100 w-lg-50 mb-10" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                <!--begin::Radio-->
                                <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="civility" value="M"/>
                                    <!--end::Input-->
                                    Monsieur
                                </label>
                                <!--end::Radio-->

                                <!--begin::Radio-->
                                <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="civility" value="MME"/>
                                    <!--end::Input-->
                                    Madame
                                </label>
                                <!--end::Radio-->
                            </div>
                            <!--end::Radio group-->
                            <x-form.input
                                name="birthname"
                                type="text"
                                label="Nom de naissance"
                                required="true"
                                class="w-500px" />

                            <x-form.input
                                name="martialname"
                                type="text"
                                label="Nom marital ou nom d'usage"
                                class="w-500px" />

                            <x-form.input
                                name="name"
                                type="text"
                                label="1er Prénom"
                                required="true"
                                class="w-500px" />

                            <x-form.input
                                name="email"
                                type="email"
                                label="Adresse Mail"
                                required="true"
                                class="w-500px"
                                help="true"
                                helpText="Votre adresse Mail permet de valider votre demande, d'en suivre la progression puis de vous transmettre les éléments nécéssaires." />

                            <x-form.password-meter />

                            <x-form.input
                                name="confirmation_password"
                                type="password"
                                label="Confirmation du mot de passe"
                                required="true"
                                class="w-500px" />

                            <div class="separator border-info border-4 my-10"></div>

                            <!--begin::Radio group-->
                            <label class="form-label fs-2">Etes vous déjà client BZHM</label>
                            <div class="btn-group w-100 w-lg-50 mb-10" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                <!--begin::Radio-->
                                <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="bzhm_customer" value="true"/>
                                    <!--end::Input-->
                                    Oui
                                </label>
                                <!--end::Radio-->

                                <!--begin::Radio-->
                                <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="bzhm_customer" value="false"/>
                                    <!--end::Input-->
                                    Non
                                </label>
                                <!--end::Radio-->
                            </div>
                            <!--end::Radio group-->
                            <label class="form-label text-start fs-2">Je souhaite recevoir des offres commerciales sur les produits & services de {{ config("app.name") }} par:</label>
                            <table class="table table-rounded table-striped border gy-7 gs-7">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Oui</th>
                                    <th>Non</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <div class="form-check form-check-custom form-check-solid me-10">
                                            <input class="form-check-input h-30px w-30px" type="radio" name="newsletter_email" value="true" id="flexCheckbox30"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-custom form-check-solid me-10">
                                            <input class="form-check-input h-30px w-30px" type="radio" name="newsletter_email" value="false" id="flexCheckbox30"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SMS</td>
                                    <td>
                                        <div class="form-check form-check-custom form-check-solid me-10">
                                            <input class="form-check-input h-30px w-30px" type="radio" name="newsletter_sms" value="true" id="flexCheckbox30"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-custom form-check-solid me-10">
                                            <input class="form-check-input h-30px w-30px" type="radio" name="newsletter_sms" value="false" id="flexCheckbox30"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Téléphone</td>
                                    <td>
                                        <div class="form-check form-check-custom form-check-solid me-10">
                                            <input class="form-check-input h-30px w-30px" type="radio" name="newsletter_phone" value="true" id="flexCheckbox30"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-custom form-check-solid me-10">
                                            <input class="form-check-input h-30px w-30px" type="radio" name="newsletter_phone" value="false" id="flexCheckbox30"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Courrier</td>
                                    <td>
                                        <div class="form-check form-check-custom form-check-solid me-10">
                                            <input class="form-check-input h-30px w-30px" type="radio" name="newsletter_paper" value="true" id="flexCheckbox30"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-custom form-check-solid me-10">
                                            <input class="form-check-input h-30px w-30px" type="radio" name="newsletter_paper" value="false" id="flexCheckbox30"/>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <p class="text-muted text-start">En cochant « Non», vous ne recevrez pas d'offres commerciales sur des produits ou services de la part de {{ config('app.name') }}*.</p>
                            <p class="text-muted text-start">
                                Vous disposez d'un droit d'accès, de rectification, d'effacement, à la portabilité de vos données ainsi que du droit à la limitation du traitement de vos données.
                                Vous disposez également du droit de définir des directives relatives à la conservation, l'effacement ou la communication de vos données personnelles, applicable après votre décès.<br>
                                Vous pourrez exerçer çes drcits en vous rendant sur votre espace client {{ config('app.name') }} ou adresser un courrier à
                                {{ config('app.name') }}.
                            </p>
                            <div class="mb-20">
                            <span class="d-inline-block position-relative ms-2">
                                <!--begin::Label-->
                                <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                    Vos données personnelles
                                </span>
                                <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                            </span>
                            </div>
                            <p class="text-muted">
                                Les données personnelles recueillies ci-dessus sont utilisées par {{ config("app.name") }}, responsable de traitement, aux fins de traitement de votre demande et pour reçevoir des offres commerciales si
                                vous avez donné votre consentement. Les données personnelles assorties d'un astérisque sont obligatoires, si vous ne souhaitez pas nous les communiquer alors nous ne pourrons traiter votre
                                demande. Les informations sur les traitements de données et sur l'exerçiçe de vos droits sur ces données figurent dans la Notice de protections des données personnelles qui vous est fournie par email.<br>
                                Ce document est également disponible sur notre site.
                            </p>
                        </div>
                        <div class="flex-column" data-kt-stepper-element="content">
                            <div class="mb-20">
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                        Vos Coordonnées
                                    </span>
                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </div>
                            <div class="mb-10 w-500px">
                                <label for="" class="form-label required">Pays de résidence Fiscal</label>
                                <select class="form-control form-select" data-control="select2" name="fiscal_country" required>
                                    <option value=""></option>
                                    <option value="France">France</option>
                                </select>
                            </div>

                            <x-form.input
                                name="address"
                                type="text"
                                label="Votre adresse"
                                required="true"
                                class="w-500px" />

                            <x-form.input
                                name="addressbis"
                                type="text"
                                label="Complément d'adresse"
                                class="w-500px" />

                            <div class="row">
                                <div class="col-4">
                                    <x-form.input
                                        name="postal"
                                        type="text"
                                        label="Code Postal"
                                        required="true" />
                                </div>
                                <div class="col-8">
                                    <x-form.input
                                        name="city"
                                        type="text"
                                        label="Ville"
                                        required="true" />
                                </div>
                            </div>

                            <x-form.input
                                name="phone"
                                type="text"
                                label="Votre téléphone mobile"
                                required="true"
                                class="w-500px" text="Format: +33600000000"
                                help="true"
                                helpText="Votre numéro de téléphone sera utilisé pour signer votre contrat et sécuriser votre ouverture de compte Assurez-vous d'ajouter votre numéro mobile personnel. "/>

                            <div class="mb-10 w-500px">
                                <label for="" class="form-label required">Situation du logement principal</label>
                                <select class="form-control form-select" data-control="select2" name="housing_type_id" required>
                                    <option value=""></option>
                                    @foreach(\App\Models\Core\HousingType::all() as $housing)
                                        <option value="{{ $housing->id }}">{{ $housing->type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex-column" data-kt-stepper-element="content">
                            <div class="mb-20">
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                        Votre état civil
                                    </span>
                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </div>

                            <x-form.input
                                name="birthdate"
                                type="text"
                                label="Date de naissance"
                                required="true"
                                class="w-500px" />

                            <div class="mb-10 w-500px">
                                <label for="" class="form-label required">Pays de naissance</label>
                                <select class="form-control form-select" data-control="select2" name="country_birth" required>
                                    <option value=""></option>
                                    <option value="France">France</option>
                                </select>
                            </div>

                            <x-form.input
                                name="city_birth"
                                type="text"
                                label="Ville de naissance"
                                required="true"
                                class="w-500px" />

                            <div class="mb-10 w-500px">
                                <label for="" class="form-label required">Nationnalité</label>
                                <select class="form-control form-select" data-control="select2" name="nationality" required>
                                    <option value=""></option>
                                    <option value="France">France</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex-column" data-kt-stepper-element="content">
                            <div class="mb-20">
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                        Situation Professionnel
                                    </span>
                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </div>

                            <label class="form-label">Exercez-vous une activité professionnel</label>
                            <!--begin::Radio group-->
                            <div class="btn-group w-100 w-lg-50 mb-10" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                <!--begin::Radio-->
                                <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="pro_activity" value="true" onclick="showDomainActivity(true)" />
                                    <!--end::Input-->
                                    Oui
                                </label>
                                <!--end::Radio-->

                                <!--begin::Radio-->
                                <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="pro_activity" value="false" onclick="showDomainActivity(false)"/>
                                    <!--end::Input-->
                                    Non
                                </label>
                                <!--end::Radio-->
                            </div>
                            <!--end::Radio group-->

                            <div id="open_activity" class="d-none">
                                <div class="mb-10 w-500px">
                                    <label for="" class="form-label">Domaine d'activité</label>
                                    <select class="form-control form-select" data-control="select2" name="activity_domain">
                                        <option value=""></option>
                                        <option value="Cadre">Cadre</option>
                                        <option value="Employé de commerce">Employé de commerce</option>
                                        <option value="Employé administratif">Employé administratif</option>
                                        <option value="Gérant, Président, assimilé,etc...">Gérant, Président, assimilé,etc...</option>
                                    </select>
                                </div>

                                <x-form.input
                                    name="activity_profession"
                                    type="text"
                                    label="Profession"
                                    class="w-500px"/>
                            </div>
                        </div>
                        <div class="flex-column" data-kt-stepper-element="content">
                            <div class="mb-20">
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                        Vos Revenues
                                    </span>
                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </div>

                            <x-form.input
                                name="revenue"
                                type="text"
                                label="Votre revenue net mensuel"
                                placeholder="Traitements, Salaires et primes mensuel (en €)"
                                class="w-500px"
                                required="true"
                                text="Avant prélèvement à la source"/>
                        </div>
                        <div class="flex-column" data-kt-stepper-element="content">
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
                        <div class="flex-column" data-kt-stepper-element="content">
                            <div class="mb-20">
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                        Choix de votre offre
                                    </span>
                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </div>
                            <div class="d-flex flex-center mb-10">
                                <a href="#" class="flex-center card bgi-no-repeat h-150px w-500px mb-5 mb-lg-10" style="background-color: #4a6eb5; background-position: calc(100% + 1rem) bottom; background-size: 25% auto; background-image:url('/assets/media/svg/card-logos/visa.svg')">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex flex-column align-items-start justify-content-center">
                                        <h3 class="text-white fw-bolder mb-3">Offre <span class="text-dark">Spéciales</span></h3>
                                        <p class="text-white fs-7">
                                            Bénéficier de l'offre à 0€ les 3 premiers mois<br> puis à 9,99 € / mois pour toute souscription à l'offre <br>{{ config('app.name') }} Gold.
                                        </p>
                                    </div>
                                    <!--end::Body-->
                                </a>
                            </div>

                            <div class="row g-10">
                                <div class="col-xl-6">
                                    <input type="radio" class="btn-check" name="plan" value="silver" id="kt_radio_buttons_2_option_1" onclick="showOfferGoldStep('silver')"/>
                                    <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex flex-column align-items-center mb-5 w-400px" for="kt_radio_buttons_2_option_1">
                                        <img src="/storage/card_silver.png" alt="" width="120">
                                        <div class="card shadow-sm border border-dashed m-5">
                                            <div class="card-header">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder text-dark text-center">{{ config("app.name") }} Silver</span>
                                                    <span class="text-muted mt-1 fw-bold fs-7 text-center">0€ / mois</span>
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-primary text-start fw-bolder mb-3">Au Quotidien</div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M22 7H2V11H22V7Z" fill="black"/>
                                                                    <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">Une carte {{ config('app.name') }} Silver à débit immédiat</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M20 18H4C3.4 18 3 17.6 3 17V7C3 6.4 3.4 6 4 6H20C20.6 6 21 6.4 21 7V17C21 17.6 20.6 18 20 18ZM12 8C10.3 8 9 9.8 9 12C9 14.2 10.3 16 12 16C13.7 16 15 14.2 15 12C15 9.8 13.7 8 12 8Z" fill="black"/>
                                                                    <path d="M18 6H20C20.6 6 21 6.4 21 7V9C19.3 9 18 7.7 18 6ZM6 6H4C3.4 6 3 6.4 3 7V9C4.7 9 6 7.7 6 6ZM21 17V15C19.3 15 18 16.3 18 18H20C20.6 18 21 17.6 21 17ZM3 15V17C3 17.6 3.4 18 4 18H6C6 16.3 4.7 15 3 15Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">Tous vos retrait par carte sans frais en dessous de 3 retrais par mois.</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                                                <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">Tous vos paiements par carte sans frais</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                                                <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">Visualisation de vos opérations en temps réel.</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-muted svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                                                <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black"/>
                                                                <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-muted fw-bold d-block fs-6 text-start">Carte Virtuelle à débit immédiat ou différé</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-muted svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                                                <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black"/>
                                                                <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-muted fw-bold d-block fs-6 text-start">Facilité de caisse pour vous aider en cas de coups dur.</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-muted svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                                                <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black"/>
                                                                <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-muted fw-bold d-block fs-6 text-start">Vos virements SEPA instantanés gratuits</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="text-primary text-start fw-bolder mb-3">Pour vos voyages</div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M20 18H4C3.4 18 3 17.6 3 17V7C3 6.4 3.4 6 4 6H20C20.6 6 21 6.4 21 7V17C21 17.6 20.6 18 20 18ZM12 8C10.3 8 9 9.8 9 12C9 14.2 10.3 16 12 16C13.7 16 15 14.2 15 12C15 9.8 13.7 8 12 8Z" fill="black"/>
                                                                    <path d="M18 6H20C20.6 6 21 6.4 21 7V9C19.3 9 18 7.7 18 6ZM6 6H4C3.4 6 3 6.4 3 7V9C4.7 9 6 7.7 6 6ZM21 17V15C19.3 15 18 16.3 18 18H20C20.6 18 21 17.6 21 17ZM3 15V17C3 17.6 3.4 18 4 18H6C6 16.3 4.7 15 3 15Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">
                                                                Tous vos retraits par carte sans frais en dessous de 3 retrait partout dans le monde.
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                                                <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">Vos paiements par carte sans frais, aussi à l'étranger.</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xl-6">
                                    <input type="radio" class="btn-check" name="plan" value="gold" id="kt_radio_buttons_2_option_2" onclick="showOfferGoldStep('gold')"/>
                                    <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex flex-column align-items-center mb-5 w-400px" for="kt_radio_buttons_2_option_2">
                                        <img src="/storage/card_gold.png" alt="" width="120">
                                        <div class="card shadow-sm border border-dashed m-5">
                                            <div class="card-header">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder text-dark text-center">{{ config("app.name") }} Gold</span>
                                                    <span class="text-primary mt-1 fw-bold fs-7 text-center">0€ les 3 premiers mois puis 9,99€ / mois</span>
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-primary text-start fw-bolder mb-3">Au Quotidien</div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M22 7H2V11H22V7Z" fill="black"/>
                                                                    <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">Une carte {{ config('app.name') }} Gold à débit immédiat ou différé</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M20 18H4C3.4 18 3 17.6 3 17V7C3 6.4 3.4 6 4 6H20C20.6 6 21 6.4 21 7V17C21 17.6 20.6 18 20 18ZM12 8C10.3 8 9 9.8 9 12C9 14.2 10.3 16 12 16C13.7 16 15 14.2 15 12C15 9.8 13.7 8 12 8Z" fill="black"/>
                                                                    <path d="M18 6H20C20.6 6 21 6.4 21 7V9C19.3 9 18 7.7 18 6ZM6 6H4C3.4 6 3 6.4 3 7V9C4.7 9 6 7.7 6 6ZM21 17V15C19.3 15 18 16.3 18 18H20C20.6 18 21 17.6 21 17ZM3 15V17C3 17.6 3.4 18 4 18H6C6 16.3 4.7 15 3 15Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">Tous vos retrait par carte sans frais.</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M22 7H2V11H22V7Z" fill="black"/>
                                                                    <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">Une carte virtuelle à débit immédiat ou différé.</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                                                <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">Tous vos paiements par carte sans frais</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                                                <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">Visualisation de vos opérations en temps réel.</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                                                <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">Carte Virtuelle à débit immédiat ou différé</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                                                <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">Facilité de caisse pour vous aider en cas de coups dur.</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                                                <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">Vos virements SEPA instantanés gratuits</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="text-primary text-start fw-bolder mb-3">Pour vos voyages</div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M20 18H4C3.4 18 3 17.6 3 17V7C3 6.4 3.4 6 4 6H20C20.6 6 21 6.4 21 7V17C21 17.6 20.6 18 20 18ZM12 8C10.3 8 9 9.8 9 12C9 14.2 10.3 16 12 16C13.7 16 15 14.2 15 12C15 9.8 13.7 8 12 8Z" fill="black"/>
                                                                    <path d="M18 6H20C20.6 6 21 6.4 21 7V9C19.3 9 18 7.7 18 6ZM6 6H4C3.4 6 3 6.4 3 7V9C4.7 9 6 7.7 6 6ZM21 17V15C19.3 15 18 16.3 18 18H20C20.6 18 21 17.6 21 17ZM3 15V17C3 17.6 3.4 18 4 18H6C6 16.3 4.7 15 3 15Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">
                                                                Tous vos retraits par carte sans frais partout dans le monde.
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
														<span class="symbol-label">
                                                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                                                <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
                                                                </svg>
                                                            </span>
														</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <span class="text-gray-800 fw-bold d-block fs-6 text-start">Vos paiements par carte sans frais, aussi à l'étranger.</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-10 offer_gold d-none">
                                <div class="card shadow-lg mb-5">
                                    <div class="card-header">
                                        <h3 class="card-title">Choix de votre carte</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <!--begin::Option-->
                                                <input type="radio" class="btn-check" name="debit_type" value="immediat" checked="checked" id="credit_type_0"/>
                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5" for="credit_type_0">
                                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                                    <span class="svg-icon svg-icon-4x me-4">
                                                        <img src="/storage/credit-card-debit.png" width="45" class="me-5" alt="">
                                                    </span>
                                                    <!--end::Svg Icon-->

                                                    <span class="d-block fw-bold text-start">
                                                        <span class="text-dark fw-bolder d-block fs-3">Débit Immédiat</span>
                                                        <span class="text-muted fw-bold fs-6">
                                                            Les paiements & Retraits sont débité immédiatement de votre compte
                                                        </span>
                                                    </span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Option-->
                                                <input type="radio" class="btn-check" name="debit_type" value="differ"  id="credit_type_1"/>
                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5" for="credit_type_1">
                                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                                    <img src="/storage/credit-card-credit.png" width="45" alt="" class="me-5">
                                                    <!--end::Svg Icon-->

                                                    <span class="d-block fw-bold text-start">
                                                        <span class="text-dark fw-bolder d-block fs-3">Débit Différé</span>
                                                        <span class="text-muted fw-bold fs-6">
                                                            Les paiements & Retraits sont débité ultérieurement de votre compte en une fois à la fin du mois en cours.
                                                            Exemple: Paiement de 90 € + Retrait de 100 € / Débit sur le compte de 190 € le 31.
                                                        </span>
                                                    </span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-lg mb-5">
                                    <div class="card-header">
                                        <h3 class="card-title">Facilité de caisse</h3>
                                    </div>
                                    <div class="card-body">
                                        <div id="result_revenue">
                                            <strong>Total de vos revenues:</strong> <span id="total_income"></span><br>
                                            <div class="d-flex flex-column flex-center">
                                                <h1 class="fw-bolder text-primary">Montant maximum de votre facilité de caisse</h1>
                                                <a href="#" class="card bg-light-success hoverable card-xl-stretch mb-xl-8">
                                                    <!--begin::Body-->
                                                    <div class="card-body">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                                        <!--end::Svg Icon-->
                                                        <div class="text-success fw-bolder fs-3tx mb-2 mt-5" id="credit_facility_amount">1 200 €</div>
                                                    </div>
                                                    <!--end::Body-->
                                                </a>
                                            </div>
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" name="accept_facility" value="" id="flexCheckDefault"/>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    J'accepte de bénéficier de la facilité de caisse dans la limite indiqué ci-dessus
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="flex-column" data-kt-stepper-element="content">
                            <div class="mb-20">
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                        Pour votre information
                                    </span>
                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </div>
                            <p>Conformément à la législation, prenez connaissance et télécharger les documents ci-dessous</p>
                            <div class="separator border-5 border-primary w-50px mt-5 mb-5"></div>
                            <h2 class="fw-bold">Information contractuelle</h2>
                            <div class="d-flex flex-column">
                                <li class="d-flex align-items-center py-2">
                                    <span class="bullet bullet-dot bg-primary h-15px w-15px me-5"></span> <a href="#" class="link"><i class="fas fa-download fa-lg me-3"></i> Notice d'information précontractuelle - Compte de dépot individuelle</a>
                                </li>
                                <li class="d-flex align-items-center py-2 offer_silver">
                                    <span class="bullet bullet-dot bg-primary h-15px w-15px me-5"></span> <a href="#" class="link"><i class="fas fa-download fa-lg me-3"></i> Notice d'information précontractuelle - Offre {{ config('app.name') }} Silver</a>
                                </li>
                                <li class="d-flex align-items-center py-2 offer_gold">
                                    <span class="bullet bullet-dot bg-primary h-15px w-15px me-5"></span> <a href="#" class="link"><i class="fas fa-download fa-lg me-3"></i> Notice d'information précontractuelle - Offre {{ config('app.name') }} Gold</a>
                                </li>
                            </div>
                            <div class="separator border-5 border-primary w-50px mt-5 mb-5"></div>
                            <h2 class="fw-bold">Tarifs</h2>
                            <div class="d-flex flex-column">
                                <li class="d-flex align-items-center py-2">
                                    <span class="bullet bullet-dot bg-primary h-15px w-15px me-5"></span> <a href="#" class="link"><i class="fas fa-download fa-lg me-3"></i> Brochure tarifaire {{ config('app.name') }}</a>
                                </li>
                                <li class="d-flex align-items-center py-2">
                                    <span class="bullet bullet-dot bg-primary h-15px w-15px me-5"></span> <a href="#" class="link"><i class="fas fa-download fa-lg me-3"></i> Document d'information tarifaire</a>
                                </li>
                            </div>
                            <div class="offer_gold">
                                <div class="separator border-5 border-primary w-50px mt-5 mb-5"></div>
                                <h2 class="fw-bold">Notice d'assurances & d'assistances</h2>
                                <div class="d-flex flex-column">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-dot bg-primary h-15px w-15px me-5"></span> <a href="#" class="link"><i class="fas fa-download fa-lg me-3"></i> Notice d'assurance carte {{ config('app.name') }} Gold</a>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-dot bg-primary h-15px w-15px me-5"></span> <a href="#" class="link"><i class="fas fa-download fa-lg me-3"></i> Notice d'assistance carte {{ config('app.name') }} Gold</a>
                                    </li>
                                </div>
                            </div>

                            <div class="separator border-2 mt-5 mb-5"></div>
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" name="accept_document" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Je reconnais avoir pris connaissance et téléchargé les présent document
                                </label>
                            </div>
                        </div>
                        <div class="flex-column" data-kt-stepper-element="content">
                            <div class="mb-20">
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                        Récapitulatifs
                                    </span>
                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </div>

                            <div class="card shadow-lg">
                                <div class="card-header bg-primary">
                                    <h3 class="card-title text-white"><i class="fas fa-user fa-lg me-2 text-white"></i> Vos informations personnel</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-5">
                                        <div class="col">
                                            <span class="fw-bold fs-4">Civilité</span><br>
                                            <span id="field_civility" class="fs-2 text-muted">M.</span>
                                        </div>
                                        <div class="col">
                                            <span class="fw-bold fs-4">1er Prénom</span><br>
                                            <span id="field_name" class="fs-2 text-muted">Maxime</span>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col">
                                            <div class="col">
                                                <span class="fw-bold fs-4">Nom marital ou nom d'usage</span><br>
                                                <span id="field_martial" class="fs-2 text-muted"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <span class="fw-bold fs-4">Nom de Naissance</span><br>
                                            <span id="field_birthname" class="fs-2 text-muted">Mockelyn</span>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col">
                                            <span class="fw-bold fs-4">Adresse Mail</span><br>
                                            <span id="field_email" class="fs-2 text-muted">syltheron@gmail.com</span>
                                        </div>
                                        <div class="col">
                                            <span class="fw-bold fs-4">Mobile</span><br>
                                            <span id="field_phone" class="fs-2 text-muted">+33 749061225</span>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col">
                                            <span class="fw-bold fs-4">Adresse</span><br>
                                            <span id="field_address" class="fs-2 text-muted">22 Rue Maryse Bastié, 85100 Les Sables d'Olonne, France</span>
                                        </div>
                                    </div>
                                    <div class="alert alert-primary d-flex align-items-center p-5 mb-10">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                        <span class="svg-icon svg-icon-2hx svg-icon-primary me-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"></path>
										<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black"></path>
									</svg>
								</span>
                                        <!--end::Svg Icon-->
                                        <div class="d-flex flex-column">
                                            <h4 class="mb-1 text-primary">Information importante</h4>
                                            <span>
                                        Un justificatif de domicile sera demandé pour l'adresse déclarée.<br>
                                        Si vous êtes logé(e) par un autre personne (parent, conjoint(e), ami(e), etc...) un justificatif de domicile à son nom et
                                        prénom vous sera demandé.<br>
                                        Vous pouvez changer votre situation en cliquant sur modifier.
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator border-3 border-primary mb-3 w-100px"></div>
                            <div class="card shadow-sm mb-5">
                                <div class="card-header bg-primary">
                                    <h3 class="card-title text-white"><i class="fas fa-box fa-lg me-2 text-white"></i> Votre Offre</h3>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-start mb-10">
                                        <a href="#" class="flex-center card bgi-no-repeat h-150px w-700px mb-5 mb-lg-10" style="background-color: #4a6eb5; background-position: calc(100% + 1rem) bottom; background-size: 25% auto; background-image:url('/assets/media/svg/card-logos/visa.svg')">
                                            <!--begin::Body-->
                                            <div class="card-body d-flex flex-column align-items-start justify-content-center">
                                                <h3 class="text-white fw-bolder mb-3">Offre <span class="text-dark">Spéciales</span></h3>
                                                <p class="text-white fs-7">
                                                    Bénéficier de l'offre à 0€ les 3 premiers mois<br> puis à 9,99 € / mois pour toute souscription à l'offre <br>{{ config('app.name') }} Gold.
                                                </p>
                                            </div>
                                            <!--end::Body-->
                                        </a>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <x-form.input
                                                name="contract_durability"
                                                type="text"
                                                label="Durée de votre contrat"
                                                value="Indéterminé"
                                                readonly
                                                class="is-valid" />
                                        </div>
                                        <div class="col">
                                            <x-form.input
                                                name="contract_effect"
                                                type="text"
                                                label="Prise d'effet de votre contrat"
                                                value="Immédiate"
                                                readonly
                                                class="is-valid" />
                                        </div>
                                    </div>
                                    <x-form.input
                                        name="contract_retract"
                                        type="text"
                                        label="Délai de rétractation"
                                        value="14 jours calendaires à compter de la date de conclusion du contrat"
                                        readonly
                                        class="is-valid" />

                                    <x-form.input
                                        name="contract_switch_offer"
                                        type="text"
                                        label="Frais de changement d'offre"
                                        value="1,90 € TTC, le 1er changement est offert"
                                        readonly
                                        class="is-valid" />
                                </div>
                            </div>
                            <div class="card shadow-sm mb-5">
                                <div class="card-header bg-primary">
                                    <h3 class="card-title text-white"><i class="fas fa-credit-card fa-lg me-2 text-white"></i> Votre Carte</h3>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-sm-center mb-7">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-100px symbol-2by3 me-4" id="card_img"></div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                                            <div class="flex-grow-1 me-2">
                                                <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6" id="card_label">Carte {{ config('app.name') }} Gold avec assurance & assistance incluse</a>
                                                <span class="text-muted fw-bold d-block pt-1" id="card_sub">Fourniture d'une carte de débit (Carte de paiement Internationnal à débit différé)</span>
                                            </div>
                                        </div>
                                        <!--end::Title-->
                                    </div>

                                    <x-form.input
                                        name="credit_card_debit_type"
                                        type="text"
                                        label="Type de débit"
                                        value="Débit différé"
                                        readonly
                                        class="is-valid" />

                                    <h3 class="fw-bold mb-5">Plafond de votre carte</h3>
                                    <div class="row">
                                        <div class="col">
                                            <x-form.input
                                                name="credit_card_limit_payment"
                                                type="text"
                                                label="Paiement par carte / 30 jours"
                                                value="1 200 €"
                                                readonly
                                                class="is-valid" />
                                        </div>
                                        <div class="col">
                                            <x-form.input
                                                name="credit_card_limit_withdraw"
                                                type="text"
                                                label="Retrait par carte / 7 jours"
                                                value="500 €"
                                                readonly
                                                class="is-valid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-sm mb-5">
                                <div class="card-header bg-primary">
                                    <h3 class="card-title text-white"><i class="fas fa-money fa-lg me-2 text-white"></i> Votre facilité de caisse</h3>
                                </div>
                                <div class="card-body">
                                    <p>
                                        La facilité de caisse vous autorise à être débiteur, à un taux d'intéret et dans la limite d'un montant convenu contractuellement.<br>
                                        Montant maximal autorisé: <span id="facility_amount"></span> euros sur 15 jours par période de 30 jours.<br>
                                        Taux nominal conventionnel: <span id="facility_nominal_tax"></span>% / TAEG: <span id="facility_taeg"></span>%<br>
                                        Des agios seront perçus dès que votre compte est débiteur au taux nominal conventionnel indiqué ci-dessus. En cas de dépassement
                                        de votre facilité de caisse, vous serez redevables d'agios (interet) au taux majoré prévu par le contrat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-column" data-kt-stepper-element="content">
                            <div class="mb-20">
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                        Signature éléctronique
                                    </span>
                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </div>
                            <p class="fw-bold">
                                Pour valider et signer électroniquement votre demande d'ouverture de compte de dépot individuel et de souscription à l'offre {{ config('app.name') }} <span class="offer_split"></span>.
                            </p>
                            <ol>
                                <li><strong>Consulter</strong> et télécharger les documents ci-dessous</li>
                                <li><strong>Cocher</strong> la case d'accord</li>
                                <li><strong>Saisissez</strong> le code confidentiel reçu par SMS au <span class="field_phone">+33749061225</span> <br>Si vous ne recevez pas de sms, cliquez ici pour en recevoir un nouveau</li>
                                <li><strong>Cliquer</strong> sur "Je signe en ligne ma demande d'ouverture de compte et de souscription à l'offre {{ config('app.name') }} <span class="offer_split"></span>.</li>
                            </ol>
                            <a href="#" class="btn btn-rounded btn-primary">Télécharger le PDF</a>
                            <div class="card shadow-sm mb-5 mt-5">
                                <div class="card-body">
                                    <iframe src="" frameborder="0"></iframe>
                                </div>
                            </div>
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" name="accept_tos" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">
                                    En cochant cette case, je reconnais être en accord avec l'ensemble des points suivants:
                                </label>
                            </div>

                            <ul>
                                <li>
                                    Je certifie avoir pris connaissance et accepté les documents suivants relatifs à ma
                                    demande de souscription au compte et à l'offre {{ config('app.name') }} <span class="offer_split"></span> le contrat de l'offre {{ config('app.name') }} <span class="offer_split"></span>
                                    , les conditions particulières et les conditions générales de la convention de compte de dépôt
                                    {{ config('app.name') }}!, les conditions particulières et les conditions générales
                                    du contrat Carte et le contrat de facilité de caisse
                                </li>
                                <li>
                                    J'accepte de signer électroniquement ces contrats en utilisant un certificat de
                                    signature électronique avancée à mon nom délivré par Docusign en qualité d'autorité de certification
                                </li>
                                <li>
                                    Je demande l'exécution immédiate de ces contrats à l'issue de leur signature. J'ai noté que je dispose toujours d'un délai de rétractation de 14 jours à l'issue de la signature de ces contrats.
                                </li>
                                <li>J'accepte que l'ensemble de mes relevés de compte soit dématérialisé </li>
                            </ul>

                            <div class="card shadow-sm mb-10 mt-5">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img src="/storage/verification_code.webp" alt="">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="mb-20">
                                                <span class="d-inline-block position-relative ms-2">
                                                    <!--begin::Label-->
                                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                                        Code confidentiel
                                                    </span>
                                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                                </span>
                                            </div>
                                            <x-form.input
                                                name="otp_code"
                                                type="text"
                                                label="Code confidentiel reçu par SMS" />
                                            <p id="otp_error_text" class="text-danger"></p>
                                            <a href="#">Recevoir un nouveau code</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-column" data-kt-stepper-element="content">
                            <p class="fw-bold">
                                Vous pouvez transmettre vos justificatifs depuis un ordinateur ou en les photographiant avec votre mobile. Les format accepter sont: PDF,JPG,PNG ou TIFF et le poids
                                doits être inférieur à 10 Mo par document.
                            </p>
                            <div class="mb-20">
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                        Justificatif d'identité
                                    </span>
                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </div>

                            <x-form.input
                                name="justify_identity"
                                type="file"
                                label="Exemple: Carte d'identité" accept="image/png,image/jpg,application/pdf,image/tiff"/>

                            <div class="mb-20">
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                        Justificatif de domicile
                                    </span>
                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </div>
                            <x-form.input
                                name="justify_address"
                                type="file"
                                label="Exemple: Avis d'imposition ou de non imposition sur le revenue" accept="image/png,image/jpg,application/pdf,image/tiff"/>

                            <div class="mb-20">
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                        Justificatif de revenue
                                    </span>
                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </div>
                            <x-form.input
                                name="justify_income"
                                type="file"
                                label="Exemple: Votre fiche de salaire" accept="image/png,image/jpg,application/pdf,image/tiff"/>

                            <div class="mb-20">
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                        Votre signature
                                    </span>
                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </div>
                            <x-form.input
                                name="justify_signate"
                                type="file"
                                accept="image/png,image/jpg,application/pdf,image/tiff"/>

                            <div class="mb-20">
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bolder">
                                        Relevé d'identité bancaire
                                    </span>
                                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </div>
                            <x-form.input
                                name="justify_rib"
                                type="file"
                                accept="image/png,image/jpg,application/pdf,image/tiff"/>
                        </div>
                        <!--begin::Step 1-->
                    </div>
                    <!--end::Group-->
                </div>

                <div class="card-footer" id="register_footer">
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
                            <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">
                    <span class="indicator-label">
                        Créer votre compte
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
            </form>
            <!--end::Form-->
        </div>
        <!--end::Stepper-->
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
<script src="https://js.stripe.com/v3/"></script>
@include("scripts.auth.register")
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
