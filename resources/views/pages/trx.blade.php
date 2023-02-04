@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-light p-5">
                <h1>Transactions History</h1>
                <div class="alert alert-primary row">
                    <div class="col-2">#</div>
                    <div class="col-3">Amount</div>
                    <div class="col-3">Type</div>
                    <div class="col-3">Date</div>
                    <div class="col-1"></div>
                </div>

                @foreach ($trx as $tx)
                   @if($tx->type == "invest" || $tx->type == "withdrawal" || $tx->type == "transfer")
                   <div class="alert alert-light row">
                    <div class="col-2">{{$loop->index + 1}}</div>
                    <div class="col-3 text-danger">-{{$tx->amount}}</div>
                    <div class="col-3">{{$tx->type}}</div>
                    <div class="col-3">{{$tx->created_at}}</div>
                    <div class="col-1"><img width="30px" src="{{$tx->type == "funding" ? asset("images/in.png"):asset("images/inout.png")}}" alt=""></div>
                </div>
                   @else
                   <div class="alert alert-light row">
                    <div class="col-2">{{$loop->index + 1}}</div>
                    <div class="col-3">{{$tx->amount}}</div>
                    <div class="col-3">{{$tx->type}}</div>
                    <div class="col-3">{{$tx->created_at}}</div>
                    <div class="col-1"><img width="30px" src="{{$tx->type == "funding" ? asset("images/in.png"):asset("images/inout.png")}}" alt=""></div>
                </div>
                   @endif
                @endforeach
                <div class="col-12">
                    {{$trx->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
