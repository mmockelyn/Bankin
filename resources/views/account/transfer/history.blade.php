@extends("account.layout.layout")

@section("css")

@endsection

@section("content")
    <div class="container-fluid row align-items-center h-lg-250px bg-gray-300 shadow-sm mb-15" data-kt-sticky="true"
         data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '100px', lg: '100px'}">
        <div class="container row">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <div class="fs-2x">Mes Virements</div>
                </div>
                <div class="col text-end">
                    <a href="{{ route('account.transfer.create') }}" class="btn btn-2xl btn-outline btn-outline-primary">Nouveau virement</a>
                </div>
            </div>
            <div class="separator border-primary border-4 my-10"></div>
            <div class="d-flex justify-content-center flex-center align-items-end">
                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-5x mb-5 fs-1">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#history">Historique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#permanente">Permanent</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="history" role="tabpanel">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-rounded table-striped border gy-7 gs-7">
                                @if($user->ben_transfers()->where('type', 0)->where('type', 1)->count() != 0)
                                    <tbody>
                                    @foreach($user->ben_transfers()->where('type', 0)->where('type', 1)->get() as $transfer)
                                        <tr>
                                            <td>{{ $transfer->reason }}</td>
                                            <td>{{ $transfer->created_at->isoFormat("d MMM YYYY") }}</td>
                                            <td></td>
                                            <td>{{ $transfer->amount }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                @else
                                    <tbody>
                                        <tr>
                                            <td colspan="4" class="text-center fs-2">
                                                <div class="d-flex flex-center align-items-center">
                                                    <i class="fas fa-exclamation-triangle me-3 fa-3x"></i> Aucun virement enregister
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="permanente" role="tabpanel">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-rounded table-striped border gy-7 gs-7">
                                <thead>
                                <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    @include("scripts.account.transfer.index")
@endsection
