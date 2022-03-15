@extends("account.layout.layout")

@section("css")

@endsection

@section("content")
    <div class="container">
        <div class="m-10">
            <a href="{{ route('account.transfer.index') }}" class="btn btn-flush mb-5"><i
                    class="fas fa-chevron-left ms-2"></i> Retour</a>
            <div class="card shadow-lg">
                <form action="{{ route('account.transfer.store') }}" method="post" novalidate>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger d-flex align-items-center p-5 mb-10">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                <span class="svg-icon svg-icon-2hx svg-icon-danger me-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"></path>
										<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black"></path>
									</svg>
								</span>
                                <!--end::Svg Icon-->
                                <div class="d-flex flex-column">
                                    <h4 class="mb-1 text-danger">Erreur de validation</h4>
                                    <ul class="list-unstyled">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        @csrf
                        <x-form.input
                            name="amount"
                            type="text"
                            label="Je fais un virement de"
                            required="true"
                            value="{{ isset($amount) ? $amount : null }}"
                            class="form-control-lg"/>

                        <div class="mb-10">
                            <label for="outgoing" class="form-label required">Depuis le compte</label>
                            <select class="form-select" id="user_id" data-control="select2"
                                    data-placeholder="Selectionnez un emeteur" required name="user_id">
                                <option></option>
                                @foreach(request()->user()->ibans as $iban)
                                    <option value="{{ $iban->id }}"
                                            data-bank="{{ $iban->user->agence->nom_agence }}"
                                            data-holder="{{ Str::limit($iban->user->civility->civility.'. '.$iban->user->civility->birthname.' '.$iban->user->civility->name, 15, '...') }}"
                                            data-account="Compte {{ \App\Helper\Account\CivilityEnum::render('type_account', $iban->user->civility->type_account) }} - {{ $iban->number_account }}"
                                            data-balance="@if(\Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance < 0) <span class='badge badge-lg badge-danger'>{{ \Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance }}</span> @else <span class='badge badge-lg badge-success'>+ {{ \Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance }}</span> @endif"
                                    >{{ $iban->user->agence->nom_agence }}
                                        - {{ Str::limit($iban->user->civility->civility.'. '.$iban->user->civility->birthname.' '.$iban->user->civility->name, 15, '...') }}
                                        -
                                        Compte {{ \App\Helper\Account\CivilityEnum::render('type_account', $iban->user->civility->type_account) }}
                                        - {{ $iban->number_account }}
                                        (@if(\Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance < 0)
                                            <span
                                                class='badge badge-lg badge-danger'>{{ eur(\Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance) }}</span> @else
                                            <span
                                                class='badge badge-lg badge-success'>+ {{ eur(\Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance) }}</span> @endif)
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-10">
                            <label for="outgoing" class="form-label required">Vers le compte</label>
                            <select class="form-select" id="beneficiary_id" data-control="select2"
                                    data-placeholder="Selectionnez un destinataire" name="beneficiary_id">
                                <option></option>
                                @foreach(request()->user()->ibans as $iban)
                                    <option value="{{ $iban->id }}"
                                            data-bank="{{ $iban->user->agence->nom_agence }}"
                                            data-holder="{{ Str::limit($iban->user->civility->civility.'. '.$iban->user->civility->birthname.' '.$iban->user->civility->name, 15, '...') }}"
                                            data-account="Compte {{ \App\Helper\Account\CivilityEnum::render('type_account', $iban->user->civility->type_account) }} - {{ $iban->number_account }}"
                                            data-balance="@if(\Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance < 0) <span class='badge badge-lg badge-danger'>{{ \Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance }}</span> @else <span class='badge badge-lg badge-success'>+ {{ \Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance }}</span> @endif"
                                    >{{ $iban->user->agence->nom_agence }}
                                        - {{ Str::limit($iban->user->civility->civility.'. '.$iban->user->civility->birthname.' '.$iban->user->civility->name, 15, '...') }}
                                        -
                                        Compte {{ \App\Helper\Account\CivilityEnum::render('type_account', $iban->user->civility->type_account) }}
                                        - {{ $iban->number_account }}
                                        (@if(\Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance < 0)
                                            <span
                                                class='badge badge-lg badge-danger'>{{ eur(\Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance) }}</span> @else
                                            <span
                                                class='badge badge-lg badge-success'>+ {{ eur(\Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance) }}</span> @endif)
                                    </option>
                                @endforeach
                                @foreach(request()->user()->beneficiaries as $beneficiaire)
                                    <option value="{{ $iban->id }}"
                                            data-bank="{{ $iban->user->agence->nom_agence }}"
                                            data-holder="{{ Str::limit($iban->user->civility->civility.'. '.$iban->user->civility->birthname.' '.$iban->user->civility->name, 15, '...') }}"
                                            data-account="Compte {{ \App\Helper\Account\CivilityEnum::render('type_account', $iban->user->civility->type_account) }} - {{ $iban->number_account }}"
                                            data-balance="@if(\Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance < 0) <span class='badge badge-lg badge-danger'>{{ \Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance }}</span> @else <span class='badge badge-lg badge-success'>+ {{ \Bavix\Wallet\Models\Wallet::where('iban_id', $iban->id)->first()->balance }}</span> @endif"
                                    >{{ $beneficiaire->bic }}
                                        - {{ Str::limit($beneficiaire->name, 15, '...') }}
                                        -
                                        {{ $beneficiaire->iban }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="separator border-secondary my-10"></div>

                        <x-form.input
                            name="transfer_reason"
                            type="text"
                            label="Motif du virement"
                            value="Virement de {{ request()->user()->civility->civility.'. '.request()->user()->civility->name.' '.request()->user()->civility->birthname }}" />

                        <x-form.input
                            name="transfer_reference"
                            type="text"
                            label="Référence associé au virement"
                            value="Virement vers {{ request()->user()->civility->civility.'. '.request()->user()->civility->name.' '.request()->user()->civility->birthname }}" />

                        <div class="mb-10">
                            <label for="" class="form-label required">Type de virement</label>
                            <select class="form-control" data-control="select2" name="transfer_type" onchange="changeType(this)">
                                <option value="0">Immédiat</option>
                                <option value="1">Différé</option>
                                <option value="2">Permanent</option>
                            </select>
                        </div>

                        <div id="differed_prog" class="d-none">
                            <x-form.input
                                name="transfer_date"
                                type="text"
                                label="Date du virement"
                                class="date"/>
                        </div>

                        <div id="permanente_prog" class="d-none">
                            <div class="mb-10">
                                <label for="" class="form-label">Périodicité</label>
                                <select class="form-control" data-control="select2" name="recurring_type" data-placeholder="Quel Période ?">
                                    <option value=""></option>
                                    <option value="monthly">Tous les mois</option>
                                    <option value="trimly">Tous les trimestres</option>
                                    <option value="yearly">Tous les ans</option>
                                </select>
                            </div>
                            <x-form.input
                                name="recurring_start"
                                type="text"
                                label="Date du début"
                                class="date"/>

                            <x-form.input
                                name="recurring_end"
                                type="text"
                                label="Date de fin"
                                class="date"/>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Continuer le virement</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("script")
    @include('scripts.account.transfer.create')
@endsection
