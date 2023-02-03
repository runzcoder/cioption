@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="nk-block-head-content">
                                <h5 class="text-primary h5">Account Summary</h5>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="mb-1 text-muted">Account balance</h6>
                                            <span class="mb-0 h5 font-weight-bold">${{ $_loggedUser->balance }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-white icon bg-gradient-primary rounded-circle icon-shape">
                                                <img src="https://th.bing.com/th?id=OIP.jmMZ3KmPj_dpKJSZqs24awHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                                                    wi alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card card-stats">

                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="mb-1 text-muted">Total Profit</h6>
                                            <span
                                                class="mb-0 h5 font-weight-bold">${{ $_loggedUser->trx->where('type', 'profit')->sum('amount') }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-white icon bg-gradient-primary rounded-circle icon-shape">
                                                <img src="data:image/jpeg;base64,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"
                                                    width="30%" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="mb-1 text-muted">Bonus</h6>
                                            <span
                                                class="mb-0 h5 font-weight-bold">${{ $_loggedUser->trx->where('type', 'bonus')->sum('amount') }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-white icon bg-gradient-primary rounded-circle icon-shape">
                                                <img src="https://th.bing.com/th/id/OIP.R7F7gPjhD8LNiWX0TQMWcAHaHa?w=189&h=189&c=7&r=0&o=5&pid=1.7"
                                                    width="30%" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="mb-1 text-muted">Referral Bonus</h6>
                                            <span
                                                class="mb-0 h5 font-weight-bold">${{ $_loggedUser->trx->where('type', 'reward')->sum('amount') }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-white icon bg-gradient-primary rounded-circle icon-shape">
                                                <img src="https://th.bing.com/th/id/OIP.R7F7gPjhD8LNiWX0TQMWcAHaHa?w=189&h=189&c=7&r=0&o=5&pid=1.7"
                                                    width="30%" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="mb-1 text-muted">Total Deposit</h6>
                                            <span class="mb-0 h5 font-weight-bold">
                                                <span
                                                    class="mb-0 h5 font-weight-bold ">${{ $_loggedUser->deposits->where('status', 'approved')->sum('amount') }}</span>
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-white icon bg-gradient-primary rounded-circle icon-shape">
                                                <img src="https://th.bing.com/th/id/OIP.OLy4F-_ObGuJwZ5ZP_Ja8AHaD4?w=338&h=180&c=7&r=0&o=5&pid=1.7"
                                                    width="30%" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="mb-1 text-muted">Total Withdrawal</h6>
                                            <span class="mb-0 h5 font-weight-bold ">$0.00</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-white icon bg-gradient-primary rounded-circle icon-shape">
                                                <img src="https://th.bing.com/th/id/OIP.ulJoL56Bq2qzxj75nHz88AHaHa?w=218&h=218&c=7&r=0&o=5&pid=1.7"
                                                    width="30%" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="mt-4 row ">
                        <div class="col-12">
                            <div class="nk-block-head-content">

                                <h5 class="text-primary h5">Active Plan(s) <span
                                        class="text-base count">({{ count($_investments->where('user_id', Auth::user()->id)->where('status', 'running')) }})</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mt-4 row">
                                <div class="col-md-12">
                                    <div class="py-4 card">
                                        <div class="text-center card-body">
                                            @if (count($_investments->where('user_id', Auth::user()->id)->where('status', 'running')) < 1)
                                                <p>You do not have an active investment plan at the moment.</p>
                                                <a href="/dashboard/create_investment/"
                                                    class="px-3 btn btn-primary">Buy a
                                                    plan</a>
                                            @else
                                                <div class="row">
                                                    <div class="col-8">
                                                    </div>
                                                    <div class="col-4">
                                                        <a href="/dashboard/create_investment/"
                                                            class="px-3 btn btn-primary">Buy a
                                                            plan</a>
                                                    </div>
                                                </div>
                                                <div class=" table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr class="bg-light">
                                                                <th>#</th>
                                                                <th>Date</th>
                                                                <th>Type</th>
                                                                <th>Amount</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if (count($_investments->where('user_id', Auth::user()->id)->where('status', 'running')) < 1)
                                                                <td colspan="3">
                                                                    No record yet
                                                                </td>
                                                            @else
                                                                @foreach ($_investments->where('user_id', Auth::user()->id) as $_investment)
                                                                    <tr>
                                                                        <td>{{ $loop->index + 1 }}</td>
                                                                        <td class="alert">{{ $_investment->created_at }}
                                                                        </td>
                                                                        <td class="alert">
                                                                            {{ ucfirst($_investment->investmentType->package) }}
                                                                        </td>
                                                                        <td class="alert">${{ $_investment->amount }}</td>
                                                                        <td class="alert">{{ $_investment->status }}</td>
                                                                        <td class="alert">
                                                                            <button data-bs-toggle="modal"
                                                                                data-bs-target="#cancel_investment{{$loop->index}}"
                                                                                class="btn btn-danger">Cancel</button>
                                                                        </td>
                                                                    </tr>
                                                                    @include('pages.include.cancel_investment')
                                                                @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="paginator">{{$_investments->links()}}</div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="mt-4 row">
                        <div class="col-12">
                            <div class="nk-block-head-content">
                                <h6 class="text-primary h5">Recent transactions <span
                                        class="text-base count">({{ count($_trx->where('user_id', Auth::user()->id)) }})</span>
                                </h6>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    {{-- <div class="mb-2 text-right">
                                        <a href="wh.html"> <img src="https://th.bing.com/th?q=Windows+Clipboard+Icon&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-WW&cc=NG&setlang=en&adlt=moderate&t=1&mw=247" width="2%" alt=""> View
                                            all
                                            transactions</a>
                                    </div> --}}
                                    <div class=" table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr class="bg-light">
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Type</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (count($_trx->where('user_id', Auth::user()->id)) < 1)
                                                    <td colspan="3">
                                                        No record yet
                                                    </td>
                                                @else
                                                    @foreach ($_trx->where('user_id', Auth::user()->id) as $tx)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td class="alert">{{ $tx->created_at }}</td>
                                                            <td class="alert">{{ ucfirst($tx->type) }}</td>
                                                            <td class="alert">${{ $tx->amount }}</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="paginator">{{$_trx->links()}}</div>
                        </div>
                    </div>


                    <div class="mt-4 row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-black">Refer Us & Earn</h5>
                                    <p>Use the below link to invite your friends.</p>
                                    <div class="mb-3 input-group">
                                        <input type="text" class="form-control myInput readonly"
                                            value={{ url('/?referred_by=' . $_loggedUser->username) }} id="reflink"
                                            readonly>
                                        <div class="input-group-append">
                                            <button
                                                onclick="navigator.clipboard.writeText(document.getElementById('reflink').value); alert('Copied')"
                                                class="btn btn-outline-primary bg-gradient-wa" type="button">
                                                <img src="https://th.bing.com/th?q=Copy+Link+Icon&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-WW&cc=NG&setlang=en&adlt=moderate&t=1&mw=247"
                                                    width="20%" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
