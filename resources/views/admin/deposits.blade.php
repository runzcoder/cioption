@extends('layouts.admin')

@section('content')
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-12 text-light alert alert-muted">
                <h1>Deposits</h1>
              </div><br><br>
            <div class="col-12" style="overflow-x:auto;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-body" id="deposit_form">
                                {{-- Contents from DepositView.jsx --}}
                            
                    <div class="col-md-12">
                        @if (count($deposits) < 1)
                            <div class="alert alert-info">No deposit history</div>
                        @else
                            @foreach ($deposits as $deposit)
                                <div class="row alert alert-info">
                                    <div class="col-2"> <img width="30px" src={{ $deposit->payOption->currency->image }}
                                            alt=""> {{ strtoupper($deposit->payOption->currency->symbol) }}</div>
                                    <div class="col-4"> {{ strtoupper($deposit->payOption->currency->symbol) }}
                                        ${{ $deposit->amount }}</div>
                                    <div class="col-2">{{ $deposit->status }}</div>
                                    <div class="col-2"><img width="30px" src={{ $deposit->status == "approved"? asset('images/in.png'):asset('images/inout.png') }}
                                            alt=""></div>
                                    <div class="col-2">
                                        <a href="/admin/view_deposit/{{ $deposit->id }}">View</a></div>
                                </div>
                            @endforeach
                        @endif
                        @if ($deposits->hasPages())
                            <div class="col-12">
                                {{ $deposits->links() }}
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection
