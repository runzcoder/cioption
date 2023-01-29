@extends('layouts.admin')

@section('content')
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-12 text-light alert alert-muted">
                <h1>INVESTMENT TYPES</h1>
                <button class="btn btn-primary text-light" style="float: right" data-bs-toggle="modal"
                    data-bs-target="#add_investment_type">
                    <i class="bi bi-currency-dollar"></i>New Investment Type</button>
            </div><br><br>
            <div class="col-12" style="overflow-x:auto;">


                <div class="container-fluid">
                    <div class="row">
                        @if (count($investment_types) < 1)
                            <div class="col-md-12 alert alert-info">
                                No Invesment type available
                            </div>
                        @else
                            @foreach ($investment_types as $item)
                                <div class="col-md-6">
                                    <div class="card w-100">
                                        <img height="200px" src="{{$item->cover_image_url}}"
                                            class="card-img-top" alt="Investment type Image">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ucfirst($item->package)}}</h5>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Duration: {{ucfirst($item->duration)}}</li>
                                            <li class="list-group-item">ROI: {{ucfirst($item->roi)}}%</li>
                                            <li class="list-group-item">Min: {{ucfirst($item->min)}}</li>
                                            <li class="list-group-item">Max: {{ucfirst($item->max)}}</li>
                                            <li class="list-group-item">status: {{ucfirst($item->active == "yes"? "Active": "Disabled")}}</li>
                                        </ul>
                                        <div class="card-body"  >
                                            
                                            @if($item->active == "no") 
                                            <button data-bs-toggle="modal" data-bs-target="#delete_investment_type{{$loop->index}}" class="card-link btn btn-primary">Activate</button> 
                                            @else 
                                            <button data-bs-toggle="modal" data-bs-target="#delete_investment_type{{$loop->index}}" class="card-link btn btn-danger">Disable</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                     
                    @include('admin.include.delete_investment_type')

                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('admin.include.add_investment_type')
@endsection
