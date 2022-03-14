@extends("account.layout.layout")

@section("css")

@endsection

@section("content")
    <div class="row">
        <div class="col-md-9">
            <!--begin::Main wrapper-->
            <div
                id="kt_docs_search_handler_basic"

                data-kt-search-keypress="true"
                data-kt-search-min-length="2"
                data-kt-search-enter="true"
                data-kt-search-layout="inline" class="mt-5 mb-10">

                <!--begin::Input Form-->
                <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                    <input type="hidden"/>
                    <!--end::Hidden input-->

                    <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
							<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
						</svg>
					</span>

                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-lg px-15"
                           name="search"
                           value=""
                           placeholder="Recherchez une ou plusieurs opérations via le libellé."
                           data-kt-search-element="input"/>
                    <!--end::Input-->

                    <!--begin::Spinner-->
                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                        <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                    </span>
                    <!--end::Spinner-->

                    <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
							</svg>
						</span>
					</span>
                </form>
                <!--end::Form-->

                <!--begin::Wrapper-->
                <div class="py-5">
                    <!--being::Search suggestion-->
                    <div data-kt-search-element="suggestions">

                    </div>
                    <!--end::Suggestion wrapper-->

                    <!--begin::Search results-->
                    <div data-kt-search-element="results" class="d-none">

                    </div>
                    <!--end::Search results-->

                    <!--begin::Empty search-->
                    <div data-kt-search-element="empty" class="text-center d-none">

                    </div>
                    <!--end::Empty search-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Main wrapper-->
            <h3 class="mb-4">Comptes Courants</h3>
            @if(auth()->user()->wallets()->count() != 0)
                @foreach(auth()->user()->wallets as $wallet)
                    <div class="cursor-pointer card shadow-lg account mb-5" data-account="{{ $wallet->uuid }}">
                        <div class="card-body row align-items-center" data-account="{{ $wallet->uuid }}">
                            <div class="col-md-3">
                                <span class="text-dark fw-bold">{{ $wallet->name }}</span>
                            </div>
                            <div class="col-md-4 fs-5">
                                <div class="text-dark">{{ auth()->user()->civility->civility.'. '.auth()->user()->civility->name.' '.auth()->user()->civility->brithname }}</div>
                                <div class="text-dark">Prochaine opération: {{ eur($wallet->transactions()->where('confirmed', 0)->sum('amount')) }}</div>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-outline btn-outline-primary"
                                        data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-start">
                                    Gérer
                                    <i class="fas fa-caret-down text-outline-dark text-primary"></i>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
                                     data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Afficher Rib / IBAN
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Faire un virement depuis ce compte
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Faire un virement vers ce compte
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Télécharger les opérations
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Voir les détails du compte
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                            </div>
                            <div class="col-md-2 text-end fs-3">
                                @if(auth()->user()->balance < 0)
                                    <span class="text-danger">{{ eur($wallet->balance) }}</span>
                                @else
                                    <span class="text-success">{{ eur($wallet->balance) }}</span>
                                @endif
                            </div>
                            <div class="col-md-1 text-end fs-2">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="cursor-pointer card shadow-lg account" data-account="{{ $wallet->uuid }}">
                    <div class="card-body row align-items-center">
                        <div class="col-md-3">
                            <span class="text-dark fw-bold">Compte {{ \App\Helper\Account\CivilityEnum::render('type_account', auth()->user()->civility->type_account) }}</span>
                        </div>
                        <div class="col-md-4 fs-5">
                            <div class="text-dark">{{ auth()->user()->civility->civility.'. '.auth()->user()->civility->name.' '.auth()->user()->civility->brithname }}</div>
                            <div class="text-dark">Prochaine opération: -28.00 €</div>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-outline btn-outline-primary"
                                    data-kt-menu-trigger="click"
                                    data-kt-menu-placement="bottom-start">
                                Gérer
                                <i class="fas fa-caret-down text-outline-dark text-primary"></i>
                            </button>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
                                 data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Afficher Rib / IBAN
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Faire un virement depuis ce compte
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Faire un virement vers ce compte
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Télécharger les opérations
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Voir les détails du compte
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                        </div>
                        <div class="col-md-2 text-end">
                            @if(auth()->user()->balance < 0)
                                <span class="text-danger">{{ eur(auth()->user()->balance) }}</span>
                            @else
                                <span class="text-success">{{ eur(auth()->user()->balance) }}</span>
                            @endif
                        </div>
                        <div class="col-md-1 text-end fs-2">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="col-md-3">
            <div class="cursor-pointer card bg-gray-300 mt-5">
                <div class="card-body">
                    <i class="fas fa-thumbs-up text-primary fa-4x mb-3"></i>
                    <p class="fw-bold">Vous prévoyer une dépense exceptionnel</p>
                    <p>Modifier temporairement les plafonds de vos cartes en un seul clics *</p>
                    <p class="text-muted">* Sous réserve d'éligibilité</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    @include('scripts.account.dashboard')
@endsection
