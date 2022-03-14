@extends("account.layout.layout")

@section("css")

@endsection

@section("content")
    <div class="container-fluid row alihn-items-center h-lg-150px bg-gray-300 shadow-sm" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '100px', lg: '100px'}">
        <div class="row align-items-center">
            <div class="col">
                <div class="fs-2x">{{ $wallet->name }}</div>
                <div class="fs-4">{{ $user->ibans()->first()->number_account }} {{ $user->agence->nom_agence }}</div>
            </div>
            <div class="col justify-content-end align-items-center text-end" style="border-right: solid 2px #7b7b7b">
                @if($wallet->balance < 0)
                    <div class="fw-bolder text-danger fs-2tx">{{ eur($wallet->balance) }}</div>
                @else
                    <div class="fw-bolder text-success fs-2tx">{{ eur($wallet->balance) }}</div>
                @endif
                <div class="text-gray-600">Solde actuel</div>
            </div>
            <div class="col">
                <table class="w-100 fs-3">
                    <tbody>
                        <tr>
                            <td>Prochaine opération</td>
                            <td class="text-end">{{ eur($wallet->transactions()->where('confirmed', 0)->sum('amount')) }}</td>
                        </tr>
                        <tr>
                            <td>Titulaire</td>
                            <td class="text-end">{{ $user->civility->civility.'. '.$user->civility->birthname.' '.$user->civility->name }}</td>
                        </tr>
                        <tr>
                            <td>Découvert Autorisé</td>
                            <td class="text-end">{{ eur($wallet->meta['credit']) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
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
                @for($i=1; $i<=12; $i++)
                    <div class="fs-3">{{ \App\Helper\Account\Wallet::getMonth($i) }}</div>
                    <table class="table table-row-bordered gy-7 gs-7">
                        <tbody>
                        @foreach($wallet->transactions()->where('confirmed', 1)->whereBetween('created_at', [\Carbon\Carbon::createFromDate(now()->year, $i)->startOfMonth(), \Carbon\Carbon::createFromDate(now()->year, $i)->endOfMonth()])->orderBy('created_at', 'asc')->get() as $transaction)
                            <tr class="cursor-pointer showTransaction bg-hover-secondary rounded-2" data-transaction="{{ $transaction->uuid }}">
                                <td>
                                    <div class="symbol symbol-50px symbol-circle ">
                                        <div class="symbol-label @if($transaction->amount < 0)bg-danger @else bg-success  @endif" style="background-image:url({{ \App\Helper\Account\Wallet::formatIconType($transaction->type, 'image') }})" data-bs-toggle="tooltip" data-custom-theme="dark" title="{{ \App\Helper\Account\Wallet::formatIconType($transaction->type, 'text') }}"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="fs-4 fw-bold text-uppercase">
                                        @if($transaction->type == 'deposit')
                                            Dépot d'espèce {{ $user->agence->nom_agence }}
                                        @elseif($transaction->type == 'withdraw')
                                            Retrait d'espèce {{ $user->agence->nom_agence }}
                                        @else
                                            {{ $transaction->meta['holder'] }}
                                        @endif
                                    </div>
                                    <div class="fs-6">{{ $transaction->created_at->toFormattedDateString() }}</div>
                                </td>
                                <td class="">
                                    {{ \App\Helper\Account\Wallet::formatIconType($transaction->type, 'text') }}<br>
                                    @if(isset($transaction->meta['category']))
                                        {{ $transaction->meta['category'] }}
                                    @else
                                        {{ \App\Helper\Account\Wallet::formatIconType($transaction->type, 'text') }} - A catégorisé
                                    @endif
                                </td>
                                <td class="text-end">
                                    @if($transaction->amount > 0)
                                        <span class="badge badge-lg badge-light-success text-success">+ {{ eur($transaction->amount) }}</span>
                                    @else
                                        <span class="badge badge-lg badge-light-danger text-danger">{{ eur($transaction->amount) }}</span>
                                    @endif
                                </td>
                                <td><a href=""><i class="fas fa-chevron-right"></i> </a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endfor
            </div>
        </div>
    </div>
    <div
        id="kt_drawer_example_basic"

        class="bg-white"
        data-kt-drawer-activate="true"
        data-kt-drawer-toggle="#kt_drawer_example_basic_button"
        data-kt-drawer-close="#kt_drawer_example_basic_close"
        data-kt-drawer-width="500px"
    >
        <div class="card w-500px rounded-0">
            <div class="card-header p-5 rounded-0">
                <div class="card-toolbar">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_example_basic_close">
                        <i class="fas fa-chevron-left text-white"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <div class="card-title">
                    <div class="d-flex justify-content-center flex-column me-3 text-white">
                        <span class="fs-4 text-center me-1 mb-2 lh-1 textType"></span>
                        <span class="transactionName text-center fw-bolder"></span>
                        <span class="transactionDate text-center fs-6 mb-5"></span>
                        <span class="transactionAmount text-center fs-1"></span>
                    </div>
                </div>

            </div>
            <div class="card-body fs-3">
                <div class="d-flex flex-column mb-5 pb-5" style="border-bottom: solid 2px #4e4e4e">
                    <div class="">Libellé</div>
                    <div class="transactionLibelle fs-5 text-muted"></div>
                </div>
                <div class="d-flex flex-column mb-5 pb-5" style="border-bottom: solid 2px #4e4e4e">
                    <div class="">Date de l'opération</div>
                    <div class="transactionDateOps fs-5 text-muted"></div>
                </div>
                <div class="d-flex flex-column mb-5 pb-5">
                    <div class="">Référence</div>
                    <div class="transactionReference fs-5 text-muted"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    @include('scripts.account.wallet.show')
@endsection
