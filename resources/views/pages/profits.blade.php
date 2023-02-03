@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-light p-5">
                <h1>Profits History</h1>
                <div class="alert alert-primary row">
                    <div class="col-3">#</div>
                    <div class="col-3">Amount</div>
                    <div class="col-3">Type</div>
                    <div class="col-3">Date</div>
                </div>
                @foreach ($profits as $profit)
                    <div class="alert alert-primary row">
                        <div class="col-3">{{$loop->index + 1}}</div>
                        <div class="col-3">{{$profit->amount}}</div>
                        <div class="col-3">{{$profit->type}}</div>
                        <div class="col-3">{{$profit->created_at}}</div>
                    </div>
                @endforeach
                <div class="col-12">
                    {{$profits->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
