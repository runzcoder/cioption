@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title">
                <div class="row justify-content-between align-items-center">
                    <div class="mb-3 col-md-6 mb-md-0">
                        <h5 class="mb-0 text-white h3 font-weight-400">Create Investment</h5>
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
                            <!-- Page title -->
                            <div class="page-title">
                                <div class="row justify-content-between align-items-center">
                                    <div class="mb-3 col-md-6 mb-md-0">
                                        <h5 class="mb-0 text-white h3 font-weight-400">Get started with your investment.
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('dashboard.save_investment') }}" method="post">
                                        @csrf
                                        <div class="card">
                                            <div class="card-body">
                                                <div wire:id="j6eySf9TaNMutQwBw4YE"
                                                    wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;j6eySf9TaNMutQwBw4YE&quot;,&quot;name&quot;:&quot;user.investment-plan&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard\/buy-plan&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;a9680350&quot;,&quot;data&quot;:{&quot;planSelected&quot;:[],&quot;amountToInvest&quot;:0,&quot;disabled&quot;:&quot;disabled&quot;,&quot;paymentMethod&quot;:&quot;Account Balance&quot;,&quot;feedback&quot;:&quot;&quot;},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;planSelected&quot;:{&quot;class&quot;:&quot;App\\Models\\Plans&quot;,&quot;id&quot;:15,&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;}}},&quot;checksum&quot;:&quot;3e92594cabddfe1fb6e211391a26bbce655b7eee7cdd1fddaa7e46c4e3780e29&quot;}}">

                                                    @if (Session::has('low_balance'))
                                                        <div
                                                            class="alert alert-warning text-light col-md-12 p-3 text-center">
                                                            Sorry you have insufficient balance to create an investment <a
                                                                href="{{ route('dashboard.deposit_view') }}">Fund your
                                                                account</a></div>
                                                    @endif
                                                    <div class="mt-4 row">
                                                        <div class="col-md-8">
                                                            <div class="card">
                                                                <div>
                                                                </div>
                                                                <div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <select class="w-100 p-1 alert alert-primary"
                                                                        name="investment_type_id"
                                                                        onchange="location.href = '/dashboard/create_investment/'+this.value"
                                                                        id="">
                                                                        <option value="{{ $selectedType->id }}">
                                                                            {{ $selectedType->package }}</option>
                                                                        @foreach ($investmentTypes as $type)
                                                                            <option onclick="alert('')"
                                                                                value="{{ $type->id }}">
                                                                                {{ $type->package }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="mt-5">
                                                                        <div class="">
                                                                            <p>Choose Quick Amount to Invest</p>
                                                                        </div>
                                                                        <div
                                                                            class="flex-wrap mb-1 d-flex justify-content-start align-items-center">
                                                                            <button
                                                                                class="mb-2 border-black rounded-none btn btn-light"
                                                                                type="button"
                                                                                onclick="document.getElementById('amount').value = '100'"
                                                                                wire:click="selectAmount('100')">100</button>
                                                                            <button
                                                                                class="mb-2 border-black rounded-none btn btn-light"
                                                                                type="button"
                                                                                onclick="document.getElementById('amount').value = '250'"
                                                                                wire:click="selectAmount('250')">250</button>
                                                                            <button
                                                                                class="mb-2 border-black rounded-none btn btn-light"
                                                                                type="button"
                                                                                onclick="document.getElementById('amount').value = '500'"
                                                                                wire:click="selectAmount('500')">500</button>
                                                                            <button
                                                                                class="mb-2 border-black rounded-none btn btn-light"
                                                                                type="button"
                                                                                onclick="document.getElementById('amount').value = '1000'"
                                                                                wire:click="selectAmount('1000')">1000</button>
                                                                            <button
                                                                                class="mb-2 border-black rounded-none btn btn-light"
                                                                                type="button"
                                                                                onclick="document.getElementById('amount').value = '1500'"
                                                                                wire:click="selectAmount('1500')">1500</button>
                                                                            <button
                                                                                class="mb-2 border-black rounded-none btn btn-light"
                                                                                type="button"
                                                                                onclick="document.getElementById('amount').value = '2000'"
                                                                                wire:click="selectAmount('2000')">2000</button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mt-5">
                                                                        <div class="">
                                                                            <p>Amount to Invest</p>
                                                                            <div>
                                                                                <input type="number" required
                                                                                    wire:model='amountToInvest'
                                                                                    wire:keyup="checkIfAmountIsEmpty"
                                                                                    name="amount" id="amount"
                                                                                    class="form-control d-block w-100"
                                                                                    placeholder="1000"
                                                                                    min="{{ $selectedType->min }}"
                                                                                    max="{{ $selectedType->max }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mt-5">
                                                                        <p>Choose Payment Method</p>
                                                                    </div>
                                                                    <div class="select-menu2">
                                                                        <ul class="options2 d-block">
                                                                            <li class="mb-3 shadow option2 bg-light border border-primary"
                                                                                id="acnt"
                                                                                wire:click="chanegePaymentMethod('Account Balance')">
                                                                                <img src="https://th.bing.com/th/id/OIP.ZvNZIj_JCy9i4BBZS-5FigHaHa?w=218&h=218&c=7&r=0&o=5&pid=1.7"
                                                                                    width="6%" alt="">
                                                                                <span class="option-text2 d-block">Account
                                                                                    Balance </span> <br>
                                                                                <span class="small">
                                                                                    <strong> Balance:
                                                                                    </strong>${{ $_loggedUser->balance }}
                                                                                </span>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <p>Your Investment Details</p>
                                                                    <div class="row">
                                                                        <div class="mb-3 col-md-6">
                                                                            <p class="mb-0 small">Name of plan</p>
                                                                            <span
                                                                                class="text-primary small">{{ $selectedType->package }}</span>
                                                                        </div>
                                                                        <div class="mb-3 col-md-6">
                                                                            <p class="mb-0 small">Duration</p>
                                                                            <span
                                                                                class="text-primary small">{{ ucfirst($selectedType->duration) }}</span>
                                                                        </div>
                                                                        <div class="mb-3 col-md-6">
                                                                            <p class="mb-0 small">Profit</p>
                                                                            <span class="text-primary small">
                                                                                {{ $selectedType->roi }}%
                                                                                {{ $selectedType->duration }}
                                                                            </span>
                                                                        </div>
                                                                        <div class="mb-3 col-md-6">
                                                                            <p class="mb-0 small">Minimum Deposit</p>
                                                                            <span
                                                                                class="text-primary small">${{ $selectedType->min }}</span>
                                                                        </div>
                                                                        <div class="mb-3 col-md-6">
                                                                            <p class="mb-0 small">Maximum Deposit</p>
                                                                            <span
                                                                                class="text-primary small">${{ $selectedType->max }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="justify-content-between d-md-flex">
                                                                        <span class="small d-block d-md-inline">Payment
                                                                            method:</span>
                                                                        <span class="small text-primary">Account
                                                                            Balance</span>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="mt-3 text-center">
                                                                        <button type="submit"
                                                                            class="px-3 btn btn-primary ">
                                                                            Confirm & Invest
                                                                        </button>
                                                                        <span class="mt-2 small text-primary" wire:loading
                                                                            wire:target="joinPlan">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
