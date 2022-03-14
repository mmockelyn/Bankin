@extends("front.layout.layout")

@section("css")

@endsection

@section("content")
    <div class="container-fluid">
        <div class="card h-500px bgi-no-repeat bgi-size-contain card-xl-stretch mb-0" style="background-color: #025e80; background-position: right; background-image:url('/assets/media/svg/misc/taieri.svg')">
            <!--begin::Body-->
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <div class="w-500px">
                        <div class="mb-20">
                            <h1 class="fw-bolder fs-3tx text-white mb-3">{{ config('app.name') }} Gold, l'offre qui passe partout</h1>
                            <a href="{{ route('register') }}" class="btn btn-lg btn-circle btn-primary me-2">Souscrire à {{ config('app.name') }} Gold</a>
                            <a href="{{ route('register') }}" class="btn btn-lg btn-circle btn-secondary">Découvrir ses avantages</a>
                        </div>
                        <div class="mb-10">
                            <h1 class="fw-bolder fs-1tx text-white mb-3">Découvrir aussi {{ config('app.name') }} Silver !</h1>
                            <p class="text-white mb-5">Une offre accessible sans conditions de revenue et sans frais, si vous n'utilisez pas votre carte bancaire.</p>
                            <a href="" class="">En savoir plus</a>
                        </div>
                    </div>
                    <div class="card shadow-sm w-600px">
                        <div class="card-header bg-danger">
                            <h3 class="card-title text-white fs-1 p-5">{{ config('app.name') }} Gold à 0 € / mois pendant 3 mois + 50 €</h3>
                        </div>
                        <div class="card-body fs-2">
                            <ul>
                                <li>1 Carte {{ config('app.name') }} Gold</li>
                                <li>Paiement et retraits sans frais à l'étranger</li>
                                <li>Blocage/Déblocage de votre carte bancaire</li>
                                <li>Virement Instantané</li>
                                <li>Service client prioritaire</li>
                                <li>Solde en temps réel</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-center">
                    <a href="{{ route('suivi') }}" class="btn btn-circle btn-danger w-500px">Suivre votre dossier</a>
                </div>
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="container">
        <div class="d-flex flex-row justify-content-between" >
            <div class="d-flex flex-column flex-center rounded-3 bg-light-primary py-20 px-10">
                <p class="fw-bold fs-3">Vous souhaitez ouvrir un compte</p>
                <a href="#" class="btn btn-primary">4 étapes suffisent !</a>
            </div>
            <div class="d-flex flex-column flex-center rounded-3 bg-light-primary py-20 px-10">
                <p class="fw-bold  fs-3">Vous êtes client BZHM Group</p>
                <a href="#" class="btn btn-primary">Découvez les avantages</a>
            </div>
            <div class="d-flex flex-column flex-center rounded-3 bg-light-primary py-20 px-10">
                <p class="fw-bold fs-3 text-center">Faite de {{ config('app.name') }} <br>votre nouvelle banque</p>
                <a href="#" class="btn btn-primary">On s'occupe de tous</a>
            </div>
        </div>
    </div>
@endsection

@section("script")

@endsection
