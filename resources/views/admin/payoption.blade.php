@extends("layouts.admin")

@section("content")
<div class="container-fluid p-3">
    <div class="row">
        <div class="col-md-12 text-light alert alert-muted">
            <h1>PAYMENT OPTIONS</h1>
            <button class="btn btn-primary text-light" style="float: right"
            data-bs-toggle="modal" data-bs-target="#add_payoption">
                <i class="bi bi-currency-dollar"></i>Add Pay Option</button>
        </div><br><br>
        <div class="col-12" style="overflow-x:auto;">
            <table class="table-bordered w-100 text-light" style="overflow: scroll">
                <thead>
                    <th>#</th>
                    <th>{{ucfirst("currencies")}}</th>
                    <th>{{ucfirst("bank_name")}}</th>
                    <th>{{ucfirst("account_number")}}</th>
                    <th>{{ucfirst("network")}}</th>
                    <th>{{ucfirst("type")}}</th>
                    <th>{{ucfirst("wallet_address")}}</th>
                    <th>{{ucfirst("Actions")}}</th>
                </thead>
                <tbody>
                    {{-- {{$pay_option}}
                    {{$currencies}} --}}
                  @if(count($pay_option) == 0)
                  <tr>
                    <td colspan="8">No payment option</td>
                  </tr>
                  @else
                  @foreach($pay_option as $option)
                  <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>
                        <img width="20px" src="{{$option->currency->image}}" alt="">
                        <label for="scales">{{$option->currency->symbol}}</label>
                    </td>
                    <td>{{$option->bank_name}}</td>
                    <td>{{$option->account_number}}</td>
                    <td>{{$option->network}}</td>
                    <td>{{$option->type}}</td>
                    <td>{{$option->wallet_address}}</td>
                    <td>
                        <div 
                      
                        style="display: flex; flex-direction:row; justify-content: space-evenly; align-content: center;">
                            
                        <button   data-bs-toggle="modal" data-bs-target="#delete_payoption{{$loop->index}}"><i class="text-danger bi  bi-archive-fill"></i>
                        </button>
                        {{-- <i class="text-success bi  bi-pencil"></i><br>
                        <i class=" text-primary bi  bi-check-circle-fill"></i>
                        <i class="text-info bi  bi-x"></i> --}}

                @include('admin.include.delete_payoption')
                        </div>
                    </td>
                </tr>
                
                  @endforeach
                  @endif
                </tbody>
            </table>
        </div>
        {{-- <div class="col-2 col-md-4 text-light font-weight-bold">
            <input type="checkbox" id="scales" name="usdt" checked>
            
        </div>
        <div class="col-2 col-md-4 text-light font-weight-bold">
            <input type="checkbox" id="scales" name="usdt" checked>
            <img width="20px" src="https://www.pngitem.com/pimgs/m/149-1495582_dollar-coin-png-transparent-image-1-dollar-coin.png" alt="">
            <label for="scales">USDT</label>
        </div>
        <div class="col-2 col-md-4 text-light font-weight-bold">
            <input type="checkbox" id="scales" name="usdt" checked>
            <img width="20px" src="https://www.pngitem.com/pimgs/m/149-1495582_dollar-coin-png-transparent-image-1-dollar-coin.png" alt="">
            <label for="scales">USDT</label>
        </div> --}}
    </div>
</div>

@include('admin.include.add_payoption')
@endsection