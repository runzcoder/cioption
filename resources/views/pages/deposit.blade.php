@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-content">
                <div class="page-title">
                    <div class="row justify-content-between align-items-center">
                        <div class="mb-3 col-md-6 mb-md-0">
                            <h5 class="mb-0 text-white h3 font-weight-400">Fund your account balance</h5>
                        </div>
                    </div>
                </div>
                <div>
                </div>
                <div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-body" id="deposit_form">
                                {{-- Contents from DepositView.jsx --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h1>Past Deposits</h1>
                        @if (count($deposits) < 1)
                            <div class="alert alert-info">No deposit history</div>
                        @else
                            @foreach ($deposits as $deposit)
                                <div class="row alert alert-info">
                                    <div class="col-2"> <img width="30px" src={{ $deposit->payOption->currency->image ?? "" }}
                                            alt=""> {{ strtoupper($deposit->payOption->currency->symbol ?? "") }}</div>
                                    <div class="col-4"> {{ strtoupper($deposit->payOption->currency->symbol ?? "") }}
                                        ${{ $deposit->amount }}</div>
                                    <div class="col-2">{{ $deposit->status }}</div>
                                    <div class="col-2"><img width="30px" src={{ $deposit->status == "approved"? asset('images/in.png'):asset('images/inout.png') }}
                                            alt=""></div>
                                    <div class="col-2">
                                        <a href="/dashboard/deposit_confirm/{{ $deposit->id }}">View</a></div>
                                </div>
                            @endforeach
                        @endif
                        @if ($deposits->hasPages())
                            <div class="col-12 alert alert-secondary">
                                {{ $deposits->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- javascript -->
    <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

    <script src='{{ asset('react_components/DepositView.jsx') }}' type="text/babel"></script>
@endsection
