@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
<div class="row">
    @if (count($_investmentTypes) < 1)
        <div class="col-md-12 alert alert-info">
            No Invesment type available
        </div>
    @else
   <div class="col-12 alert alert-light"> <h1>Investment plans</h1></div>
        @foreach ($_investmentTypes as $item)
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
                        <button class="card-link btn btn-primary" disabled>Not Available</button> 
                        @else 
                        <a href="/dashboard/create_investment/{{$item->id}}"><button class="btn btn-primary">Buy Plan</button></a>
                        @endif
                    </div>
                </div>
            </div>
 
        @endforeach
    @endif
</div>
@endsection
