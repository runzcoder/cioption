@extends('layouts.admin')

@section('content')
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-12 text-light alert alert-muted">
                <h1>ACCEPTABLE CURRENCIES OPTIONS</h1>
                <button class="btn btn-primary text-light" style="float: right" data-bs-toggle="modal"
                    data-bs-target="#add_currency">
                    <i class="bi bi-currency-dollar"></i>Add Pay Option</button>
            </div><br><br>
            @if (count($currencies) <= 0)
                <div class="alert alert-info p-5">No Currency</div>
            @else
                @foreach ($currencies as $currency)
                    <div class="col-3 col-md-2 ">
                        <div class="bg-light"
                            style="
                    border-radius: 10%; 
                    width: 100px; 
                    height: 100px;
                    text-align:center;
                    display:flex;
                    flex-direction:column;
                    justify-content:center;
                    align-items: center;">
                            <img width="50px" style="border-radius: 100%" src="{{ $currency->image }}" alt="">
                            <div>

                                <a data-bs-toggle="modal" data-bs-target="#delete_currency"> 
                                    <input type="checkbox"
                                        @if ($currency->active == 'yes') checked @endif></a>
                                <label for="scales">{{ $currency->symbol }}</label>
                            </div>

                        </div>
                    </div>

                    @include('admin.include.delete_currency', $currency)
                @endforeach
            @endif
        </div>
    </div>
    @include('admin.include.add_currency')
@endsection
