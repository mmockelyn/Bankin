@extends("account.layout.layout")

@section("css")

@endsection

@section("content")
    <div class="container-fluid row align-items-center h-lg-150px bg-gray-300 shadow-sm mb-15" data-kt-sticky="true"
         data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '100px', lg: '100px'}">
        <div class="container row">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <div class="fs-2x">Mes Bénéficiaires</div>
                </div>
                <div class="col text-end">
                    <a href="#add" data-bs-toggle="modal" class="btn btn-2xl btn-outline btn-outline-primary">Nouveau
                        bénéficiaire</a>
                </div>
            </div>
        </div>

    </div>

    <div class="container">

    </div>
    <div class="modal fade" id="add" tabindex="-1">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-kt-modal-action-type="close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="black"></rect>
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="black"></rect>
								</svg>
							</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="form_add" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('account.transfer.beneficiaire.store') }}" data-form-type="other">
                        @csrf
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Iban de votre bénéficiaire</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="text-muted fw-bold fs-5">Veuillez saisir l'Iban de votre nouveau bénéficiaire
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        <x-form.input
                            name="iban"
                            type="text"
                            label="IBAN"
                            required="true" />

                        <x-form.input
                            name="name"
                            type="text"
                            label="Nom du bénéficiaire"
                            required="true" />

                        <div class="form-check form-check-custom form-check-solid mb-10">
                            <input class="form-check-input" type="checkbox" name="incumbent" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">
                                Je suis titulaire de ce compte
                            </label>
                        </div>
                        <!--end::Notice-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" class="btn btn-light me-3" data-kt-modal-action-type="cancel"
                                    data-form-type="other">Annuler
                            </button>
                            <button type="submit" class="btn btn-primary" data-kt-modal-action-type="submit"
                                    data-form-type="action">
                                <span class="indicator-label">Valider</span>
                                <span class="indicator-progress">Veuillez patienter...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                        <div></div>
                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
@endsection

@section("script")
    @include("scripts.account.transfer.beneficiaire.index")
@endsection
