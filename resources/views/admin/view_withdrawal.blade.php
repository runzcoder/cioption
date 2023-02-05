@extends('layouts.admin')

@section('content')
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-12 text-light alert alert-muted">
                <h1>Withdrawal Request </h1>
            </div><br><br>
            <div class="col-12" style="overflow-x:auto;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="row alert-light alert">
                                    <div class="col-12">
                                        <h3> Withdrawal request from {{ $user->name }}</h3>
                                    </div>
                                </div>
                                <div class="row alert-primary alert">
                                    <div class="col-4">Dollar Amount</div>
                                    <div class="col-6">${{ $withdrawal->amount }}</div>
                                </div>
                                <div class="row alert-primary alert">
                                    <div class="col-4">Payment Option</div>
                                    <div class="col-6">{{ strtoupper($withdrawal->currency->symbol) }}</div>
                                </div>
                                <div class="row alert-primary alert">
                                    <div class="col-4">Amount to Pay</div>
                                    <div class="col-6">{{ round(($withdrawal->amount / $withdrawal->rate), 8) }}
                                        {{ strtoupper($withdrawal->currency->symbol) }}</div>
                                </div>
                                <div class="row alert-primary alert">
                                    <div class="col-4">Status</div>
                                    <div class="col-6">{{ $withdrawal->status }}</div>
                                </div>
                                <div class="row alert-primary alert">
                                    <div class="col-4">Date</div>
                                    <div class="col-6">{{ $withdrawal->created_at }}</div>
                                </div>
                                <div class="row alert-primary alert">
                                    <div class="col-4">Wallet Address</div>
                                    <div class="col-6">{{ $withdrawal->accno_address }}</div>
                                </div>

                                <div class="row alert-primary alert">
                                    <div class="col-4">Network Type</div>
                                    <div class="col-6">{{ $withdrawal->currency->network }}</div>
                                </div>
                                <div class="alert alert-warning p-5">
                                    Approve the transfer before sending the coin to prevent the user from cancelling the withdrawal
                                </div>
                                @if ($withdrawal->status == "pending")
                               <a href="/admin/approve_withdrawal/{{$withdrawal->id}}"> <button class="btn btn-primary">Approve</button></a>
                               {{-- <a href="/admin/decline_withdrawal/{{$withdrawal->id}}">  <button class="btn btn-danger">Decline</button> </a> --}}
                                @else
                                    <button class="btn btn-muted" disabled>{{ucfirst($withdrawal->status)}}</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
