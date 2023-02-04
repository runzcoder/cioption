@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-light p-5">
                <h1>My Referrals</h1>
                <div class="alert alert-primary row">
                    <div class="col-3">#</div>
                    <div class="col-3">Name</div>
                    <div class="col-3">reward</div>
                    <div class="col-3">Action</div>
                </div>
                @foreach ($referrals as $referral)
                    <div class="alert alert-primary row">
                        <div class="col-3">{{$loop->index + 1}}</div>
                        <div class="col-3">{{$referral->user->name}}</div>
                        <div class="col-3">${{$_getSetting::getSetting("referral_bonus")}}</div>
                        @if ($referral->rewarded == "yes")
                        <div class="col-3"><button class="btn btn-success">Rewarded</button>
                        @else
                        <div class="col-3"><a href="/dashboard/referrals/claim/{{$referral->id}}/"><button class="btn btn-primary">Claim Reward</button></a>
                        @endif
                        </div>
                    </div>
                @endforeach
                <div class="col-12">
                    {{$referrals->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
