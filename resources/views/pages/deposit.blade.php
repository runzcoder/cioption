@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">

            {{-- //////// --}}
            <div class="page-content">
                <!-- Page title -->
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">

                                        <form action="{{route("dashboard.submit_deposit")}}" method="post" id="submitpaymentform">
                                          @csrf
                                            <div class="row">
                                                <div class="mb-4 col-md-12">
                                                    <h5 class="card-title ">Enter Amount</h5>
                                                    <input class="form-control " placeholder="Enter Amount" min="50"
                                                        type="number" name="amount" required>
                                                </div>
                                                <div class="mb-4 col-md-12">
                                                    <input type="hidden" name="payment_method" id="paymethod" required>
                                                </div>
                                                <div class="mt-2 mb-1 col-md-12">
                                                    <h5 class="card-title ">Choose Payment Method from the list below</h5>
                                                </div>

                                                @if (count($pay_options) == 0)
                                                    <div class="mb-2 col-md-6 alert alert-info">

                                                        No Payment option available

                                                    </div>
                                                @else
                                                    @foreach ($pay_options as $pay_option)
                                                        <div class="mb-2 col-md-6">
                                                            <a style="cursor: pointer;" data-method="Bank Transfer"
                                                                id="12" class="text-decoration-none">
                                                                <div class="rounded shadow ">
                                                                    <div
                                                                        class="card-body d-flex justify-content-between align-items-center">
                                                                        <span class="">
                                                                            <img width="30px" src="{{$pay_option->currency->image}}" alt="">
                                                                          {{$pay_option->currency->name}}
                                                                        </span>
                                                                        <span>
                                                                            <input type="radio" id="12customCheck1" name="pay_option" value="{{$pay_option->id}}"
                                                                                readonly>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach

                                                    <div class="mt-2 mb-1 col-md-12">
                                                        <input type="submit" class="px-5 btn btn-primary btn-lg"
                                                            value="Procced to Payment">
                                                    </div>
                                                @endif
                                                <input type="hidden" id="lastchosen" value="0">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="mt-4 col-md-4">
                                        <!-- Seller -->
                                        <div class="card">

                                            <div class="card-body">
                                                <div class="pb-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-6">
                                                            <h6 class="mb-0">Total Deposit</h6>
                                                            <span class="text-sm text-muted">-</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <h6 class="mb-1">
                                                                $0.00
                                                            </h6>
                                                            <span class="text-sm text-muted">Amount</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                <div class="actions d-flex justify-content-between">
                                                    <a href="ph.html" class="action-item">
                                                        <span class="btn-inner--icon">View deposit history</span>
                                                    </a>
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
        </div>
    </div>
@endsection
