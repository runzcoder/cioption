@extends('layouts.admin')

@section('content')
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-12 text-light alert alert-muted">
                <h1>Withdrawals</h1>
              </div><br><br>
            <div class="col-12" style="overflow-x:auto;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-body" id="deposit_form">
                            
                                <div class="col-md-12">
                                    <div class="row alert alert-info">
                                        <div class="col-2">Currency</div>
                                        <div class="col-4"> 
                                            Amount (USD)</div>
                                        <div class="col-2">Status</div>
                                        <div class="col-2"></div>
                                        <div class="col-2"></div>
                                    </div>
                                </div>
                            
                    <div class="col-md-12">
                        @if (count($withdrawals) < 1)
                            <div class="alert alert-info">No withdrawal Request</div>
                        @else
                            @foreach ($withdrawals as $withdrawal)
                                <div class="row alert alert-info">
                                    <div class="col-2"> <img width="30px" src={{ $withdrawal->currency->image }}
                                            alt=""> {{ strtoupper($withdrawal->currency->symbol) }}</div>
                                    <div class="col-4"> 
                                        ${{ $withdrawal->amount }} ~ {{round($withdrawal->amount/$withdrawal->rate, 8)}} {{strtoupper($withdrawal->currency->symbol)}}</div>
                                    <div class="col-2">{{ $withdrawal->status }}</div>
                                    <div class="col-2"><img width="30px" src={{ $withdrawal->status == "approved"? asset('images/out.png'):asset('images/inout.png') }}
                                            alt=""></div>
                                    <div class="col-2">
                                        <a href="/admin/view_withdrawal/{{ $withdrawal->id }}">View</a></div>
                                </div>
                            @endforeach
                        @endif
                        @if ($withdrawals->hasPages())
                            <div class="col-12">
                                {{ $withdrawals->links() }}
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
