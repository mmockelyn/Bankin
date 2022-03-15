@extends("account.layout.layout")

@section("css")

@endsection

@section("content")
    <div class="container-fluid row align-items-center h-lg-250px bg-gray-300 shadow-sm mb-15" data-kt-sticky="true"
         data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '100px', lg: '100px'}">
        <div class="container row">
            <div class="row align-items-center">
                <div class="col">
                    <div class="fs-2x">Je fais un virement de</div>
                    <input type="text" name="amount" class="form-control form-control-lg form-control-transparent" placeholder="0,00 €"/>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <a href="{{ route("account.transfer.history") }}" class="btn btn-flex h-125px btn-secondary px-6 w-100 mb-5">
            <span class="svg-icon svg-icon-4x">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z" fill="black"/>
                <path d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z" fill="black"/>
                <path d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z" fill="black"/>
                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"/>
                </svg>
            </span>
            <span class="d-flex flex-column align-items-start ms-2">
                <span class="fs-2 fw-bolder">Historique des virements</span>
                <span class="fs-6">Immédiats, différés et permanents</span>
            </span>
        </a>
        <a href="#" class="btn btn-flex h-125px btn-secondary px-6 w-100 mb-5">
            <span class="svg-icon svg-icon-4x">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" fill="black"/>
                <path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" fill="black"/>
                </svg>
            </span>
            <span class="d-flex flex-column align-items-start ms-2">
                <span class="fs-2 fw-bolder">Virement internationnal en devise</span>
                <span class="fs-6">Envoie d'argent à l'étranger, en devise</span>
            </span>
        </a>
        <a href="{{ route('account.transfer.beneficiaire.index') }}" class="btn btn-flex h-125px btn-secondary px-6 w-100 mb-5">
            <span class="svg-icon svg-icon-4x">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="black"/>
                <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
                <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="black"/>
                <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
                </svg>
            </span>
            <span class="d-flex flex-column align-items-start ms-2">
                <span class="fs-2 fw-bolder">Mes Bénéficiaires</span>
                <span class="fs-6">Ajout et gestion</span>
            </span>
        </a>
    </div>
@endsection

@section("script")
    @include("scripts.account.transfer.index")
@endsection
