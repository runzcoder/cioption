@extends('layouts.admin')

@section('content')
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-12 text-light alert alert-muted">
                <h1>Funding Request </h1>
            </div><br><br>
            <div class="col-12" style="overflow-x:auto;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="row alert-light alert">
                                    <div class="col-12">
                                        <h3> Funding request from {{ $user->name }}</h3>
                                    </div>
                                </div>
                                <div class="row alert-dark alert">
                                    <div class="col-4">Dollar Amount</div>
                                    <div class="col-6">${{ $deposit->amount }}</div>
                                </div>
                                <div class="row alert-dark alert">
                                    <div class="col-4">Payment Option</div>
                                    <div class="col-6">{{ strtoupper($deposit->payOption->currency->symbol) }}</div>
                                </div>
                                <div class="row alert-dark alert">
                                    <div class="col-4">Amount to Recieve</div>
                                    <div class="col-6">{{ round(($deposit->amount / $deposit->dollar_rate), 8) }}
                                        {{ strtoupper($deposit->payOption->currency->symbol) }}</div>
                                </div>
                                <div class="row alert-dark alert">
                                    <div class="col-4">Status</div>
                                    <div class="col-6">{{ $deposit->status }}</div>
                                </div>
                                <div class="row alert-dark alert">
                                    <div class="col-4">Date</div>
                                    <div class="col-6">{{ $deposit->created_at }}</div>
                                </div>
                                <div class="row alert-dark alert">
                                    <div class="col-4">Wallet Address</div>
                                    <div class="col-6">{{ $deposit->payOption->wallet_address }}</div>
                                </div>

                                <div class="row alert-dark alert">
                                    <div class="col-4">Network Type</div>
                                    <div class="col-6">{{ $deposit->payOption->currency->network }}</div>
                                </div>

                                <div class="row alert">
                                    <div class="col-12">
                                        <h1>Payment proof</h1>
                                    </div>

                                </div>

                                <div class="row alert">
                                    @if ($deposit->payment_proof == '')
                                        <div class="col-12">None</div>
                                    @else
                                        <div class="col-12">
                                            <img width="100%" src="/storage/payment_proofs/{{$deposit->payment_proof}}" alt="">
                                        </div>
                                    @endif
                                </div>
                                @if ($deposit->status == "pending")
                               <a href="/admin/approve_deposit/{{$deposit->id}}"> <button class="btn btn-primary">Approve</button></a>
                               <a href="/admin/decline_deposit/{{$deposit->id}}">  <button class="btn btn-danger">Decline</button> </a>
                                @else
                                    <button class="btn btn-muted" disabled>{{ucfirst($deposit->status)}}</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
